<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Session;
use App\Models\User;
use App\Models\Message;
use App\Events\NewMessage;

class MessageController extends Controller
{
    public function __construct(){
        $this->middleware(['role:Customer|Manager']);
    }

	public function inbox()
    {
        return view('message.inbox');
    }

    public function get()
    {
        // get all users except the authenticated one
        if(Auth::user()->hasRole('Manager')) {
            $contacts = User::where('id', '!=', auth()->id())->where('role', 'Customer')->get();
        } elseif(Auth::user()->hasRole('Customer')) {
            $contacts = User::where('role', 'Manager')->get();
        }

        // get a collection of items where sender_id is the user who sent us a message
        // and messages_count is the number of unread messages we have from him
        $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
            ->where('to', auth()->id())
            ->where('read', false)
            ->groupBy('from')
            ->get();

        // add an unread key to each contact with the count of unread messages
        $contacts = $contacts->map(function($contact) use ($unreadIds) {
            $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

            $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

            return $contact;
        });


        return response()->json($contacts);
    }

    public function getMessagesFor($id)
    {
        // mark all messages with the selected contact as read
        Message::where('from', $id)->where('to', auth()->id())->update(['read' => true]);

        // get all messages between the authenticated user and the selected user
        $messages = Message::where(function($q) use ($id) {
            $q->where('from', auth()->id());
            $q->where('to', $id);
        })->orWhere(function($q) use ($id) {
            $q->where('from', $id);
            $q->where('to', auth()->id());
        })
        ->get();

        return response()->json($messages);
    }

    public function send(Request $request)
    {
        $message = Message::create([
            'from' => auth()->id(),
            'to'   => $request->contact_id,
            'text' => $request->text
        ]);

        broadcast(new NewMessage($message));

        return response()->json($message);
    }

    public function search(Request $request)
    {
        if ($search = $request->get('q')) {
            $contacts = User::where(function($query) use ($search){
                $query->where('name','LIKE',"%$search%")
                      ->orWhere('email','LIKE',"%$search%");
            })->where('id', '!=', auth()->id())->orderBy('created_at', 'desc')->get();

            $t_contacts = (array)$contacts;

            $t_contacts = array_filter($t_contacts);

            if(empty($t_contacts)){
                return "no";
            }
            
        } else {
            $contacts = User::where('id', '!=', auth()->id())->orderBy('created_at', 'desc')->get();
        }

        // get a collection of items where sender_id is the user who sent us a message
        // and messages_count is the number of unread messages we have from him
        $unreadIds = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
            ->where('to', auth()->id())
            ->where('read', false)
            ->groupBy('from')
            ->get();

        // add an unread key to each contact with the count of unread messages
        $contacts = $contacts->map(function($contact) use ($unreadIds) {
            $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();

            $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;

            return $contact;
        });

        return $contacts;

    }
}
