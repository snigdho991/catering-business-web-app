<?php

namespace App\Http\Controllers\Ums;

use Auth;
use Session;
use Carbon\Carbon;
use App\Models\Event;
use App\Models\Service;
use App\Models\Customer;
use App\Models\ServiceType;
use App\Models\ThemeLayout;
use App\Models\Employee;
use App\Models\Message;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class CustomerToolsController extends Controller
{
    public function __construct() {
        $this->middleware(['role:Customer']);
    }

    public function customer_dashboard()
    {
        $pending = Event::where('status', 'Pending/Not Assigned')->where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        $ongoing = Event::where('status', 'Ongoing')->where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        $completed = Event::where('status', 'Completed')->orWhere('status', 'Completed & Feedback Given')->where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();

        $unreads = Message::where('to', Auth::id())->where('read', 0)->get();

        return view('backend.customer.index', compact('pending', 'completed', 'ongoing', 'unreads'));
    }

    public function book_event(){
        $user = Auth::user();
        $customer = Customer::where('user_id', '=', $user->id)->first();
        $allServiceTypes = ServiceType::orderBy('id')->with('services')->get();
        $allServices = Service::orderBy('type_id')->get();

        return view('backend.customer.book_event', compact('allServiceTypes','allServices','user','customer'));
    }

    public function event_booked(){
        $user = Auth::user();
        $events = Event::where('user_id', $user->id)->get();

        return view('backend.customer.event_booked', compact('user','events'));
    }
    
    public function event_create(Request $request){
        $validated = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'email',
            'phone' => 'required|string|min:6|max:20',
            'gender' => 'string',
            'location' => 'required|string',
            'eventName' => 'required|string',
            'details' => 'required|string',
            'date' => 'required|date',
            'time' => 'required|string',
            'service_type' => 'required|string',
            'services' => 'required|array',
            'theme_id' => 'required|string',
            'totalCost' => 'required|string',
            'grandTotalCost' => 'required',
            'paymentReceipt' => 'required|image',
        ]);

        $total = count($request->services);

        // other fields: theme_custom, json_layout, layout_image
        $user = Auth::user();
        $theme_id = $validated['theme_id'];
        $fileName = $user->name.'_'.time().'_'.$request->paymentReceipt->getClientOriginalName();
        $filePath = $request->file('paymentReceipt')->storeAs('receipts', $fileName, 'public');

        if($request->theme_custom == '1'){
            $themeLayout = ThemeLayout::where('id','=', $theme_id)->first();
            $customThemeLayout = new ThemeLayout();
            $customThemeLayout->name = $themeLayout->name;
            $customThemeLayout->service_type_id = $themeLayout->service_type_id;
            $customThemeLayout->price = $themeLayout->price;
            $customThemeLayout->layout_file = $request->json_layout;
            $customThemeLayout->layout_image = $request->layout_image;
            $customThemeLayout->custom = 1;
            $customThemeLayout->save();

            // Log::info($customThemeLayout);
            $theme_id = $customThemeLayout->id;
        }
        
        $event = Event::create([
            'user_id' => $user->id,
            'name' => $request->eventName,
            'details' => $request->details,
            'date' => $request->date,
            'time' => $request->time,
            'type' => $request->service_type,
            'services' => json_encode($request->services),
            'location' => $request->location,
            'theme_id' => intval($theme_id),
            'total_cost' => $request->totalCost,
            'grand_total_cost' => $request->grandTotalCost,
            'payment_receipt' => '/storage/' . $filePath,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'total_services' => $total,
            'completed_tasks' => '[]',
        ]);

        Session::flash('success', 'Event created successfully!');
        return redirect()->route('customer.not.assigned');
    }

    public function submit_feedback(Request $request)
    {
        $this->validate($request, [
            'event_ratings'    => 'required',
            'theme_ratings'    => 'required',
            'employee_ratings' => 'required',
            'feedback'         => 'required'
        ]);

        $event = Event::findOrFail($request->event_id);
        
        $event->event_ratings    = $request->event_ratings;
        $event->theme_ratings    = $request->theme_ratings;
        $event->employee_ratings = $request->employee_ratings;

        $calculation = ($request->event_ratings + $request->theme_ratings + $request->employee_ratings) / 3;
        $overall_ratings = round($calculation, 2);
        $event->ratings = $overall_ratings;

        $event->feedback = $request->feedback;
        $event->status = 'Completed & Feedback Given';
        $event->save();

        $employee = Employee::findOrFail($event->employee_id);
        $count_ratings = Event::select('employee_ratings')->where('employee_id', $employee->id)->where('employee_ratings', '!=', null)->count();
        $sum_ratings = Event::where('employee_id', $employee->id)->where('employee_ratings', '!=', null)->sum('employee_ratings');

        $employee->rating = round($sum_ratings/$count_ratings, 2);
        $employee->save();

        Session::flash('success', 'Feedback Sent Successfully !');
        return redirect()->back();
    }

    public function customer_not_assigned()
    {
        $pending = Event::where('status', 'Pending/Not Assigned')->where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('backend.customer.events.not-assigned', compact('pending'));
    }

    public function customer_ongoing()
    {
        $ongoing = Event::where('status', 'Ongoing')->where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('backend.customer.events.ongoing', compact('ongoing'));
    }

    public function customer_completed()
    {
        $completed = Event::where('user_id', Auth::id())->where('status', 'Completed')->orWhere('status', 'Completed & Feedback Given')->orderBy('created_at', 'desc')->get();
        return view('backend.customer.events.completed', compact('completed'));
    }

}
