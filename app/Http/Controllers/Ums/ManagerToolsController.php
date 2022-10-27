<?php

namespace App\Http\Controllers\Ums;

use App\Models\ThemeItem;
use App\Models\ServiceType;
use App\Models\ThemeLayout;
use App\Models\Event;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Message;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

use Twilio\Rest\Client;

use Auth;
use Exception;

/*use RoyceLtd\LaravelBulkSMS\Facades\RoyceBulkSMS;*/

class ManagerToolsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Manager']);
    }

    public function dashboard()
    {
        $pending = Event::where('status', 'Pending/Not Assigned')->orderBy('created_at', 'desc')->get();
        $events = Event::all();
        $customers = Customer::all();
        $employees = Employee::all();

        $unreads = Message::where('to', Auth::id())->where('read', 0)->get();

    	return view('backend.manager.index', compact('pending', 'events', 'customers', 'employees', 'unreads'));
    }

    public function all_service_types()
    {
    	$all = ServiceType::orderBy('created_at', 'desc')->get();
    	return view('backend.manager.service-types.index', compact('all'));
    }

    public function add_service_type()
    {
    	return view('backend.manager.service-types.create');
    }

    public function store_service_type(Request $request)
    {
        $this->validate($request, [
            'type' => 'required|unique:service_types',
        ]);

        $service_type = new ServiceType();
        $service_type->type = $request->type;
        $service_type->save();

        Session::flash('success', 'Service Type Added Successfully !');
        return redirect()->route('all.service.types');
    }

    public function edit_service_type($id)
    {
    	$service_type = ServiceType::findOrFail($id);
        return view('backend.manager.service-types.edit', compact('service_type'));
    }

    public function update_service_type(Request $request, $id)
    {
    	$service_type = ServiceType::findOrFail($id);

        $this->validate($request, [
            'type' => 'required|unique:service_types,type,'.$service_type->id
        ]);

        $service_type->type = $request->type;
        $service_type->save();

        Session::flash('success', 'Service Type Updated Successfully !');
        return redirect()->route('all.service.types');
    }

    public function destroy_service_type($id)
    {
        $service_type = ServiceType::findOrFail($id);
        $service_type->delete();

        Session::flash('error', 'Service Type Removed Successfully !');
        return redirect()->route('all.service.types');
    }

    public function add_theme_layout(){
        $types = ServiceType::all();
        return view('backend.manager.themes.add_theme_layout', compact('types'));
    }

    public function store_theme_layout(Request $request){
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|string',
            'type_id' => 'required|string',
            'layout' => 'required|string',
            'layoutImage' => 'required|string'
        ]);

        $themeLayout = new ThemeLayout;
        $themeLayout->name = $request->name;
        $themeLayout->price = $request->price;
        $themeLayout->service_type_id = intval($request->type_id);
        $themeLayout->layout_file = $request->layout;
        $themeLayout->layout_image = $request->layoutImage;
        $themeLayout->custom = 0;
        $themeLayout->save();

        return back()->with('success','Layout added successfully.');
    }

    public function theme_layout_list(){
        $layouts = ThemeLayout::where('custom','=','0')->get();
        $custom_layouts = ThemeLayout::where('custom','>','0')->get();
        $service_types = ServiceType::pluck('type','id');
        
        return view('backend.manager.themes.theme_layout_list', compact('layouts','custom_layouts','service_types'));
    }

    public function theme_layout_delete($id){
        $layout = ThemeLayout::findOrFail($id);
        $layout->delete();
        return back()->with('success','Theme Layout Deleted Successfully.');
    }

    public function add_theme_item(){
        return view('backend.manager.themes.add_theme_item');
    }

    public function store_theme_item(Request $request){
        $request->validate([
            'file' => 'required|mimes:png|max:2048',
            'name' => 'required|string',
            'category' => 'required',
        ]);
                
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('theme_items', $fileName, 'public');
        
        $themeItem = new ThemeItem;
        $themeItem->name = $request->name;
        $themeItem->source = '/storage/' . $filePath;
        $themeItem->category = $request->category;
        $themeItem->save();

        return back()->with('success','Item added successfully.');
    }

    public function theme_item_list(){
        $items = ThemeItem::all();
        return view('backend.manager.themes.theme_item_list', compact('items'));
    }

    public function theme_item_delete($id){
        $item = ThemeItem::findOrFail($id);
        $item->delete();
        return back()->with('success','Item deleted successfully.');
    }

    public function assign_employee(Request $request)
    {
        $this->validate($request, [
            'employee_id' => 'required'
        ]);

        /*$phone = "01521306527";
        $message = "Hello world";

        RoyceBulkSMS::sendSMS($phone, $message);*/

        $event = Event::findOrFail($request->event_id);

        $event->employee_id = $request->employee_id;
        $event->status = 'Ongoing';
        $event->save();


        $customer = Customer::where('user_id', $event->user_id)->first();
        $employee = Employee::where('id', $event->employee_id)->first();

        if($employee->rating == ''){
            $em_rating = '0';
        } else {
            $em_rating = $employee->rating;
        }

        $recipient_num = '+923126467605';
        $message = "Congratulations! Your event is ongoing now. \r\n Employee Details-> \r\n Name: ".$employee->first_name." ".$employee->last_name." \r\n Phone: ".$employee->phone." \r\n Address: ".$employee->address." \r\n Type: ".$employee->employee_type/*." \r\n Ratings(*): ".$em_rating*/;

        try {

            $account_sid = "AC1c28f4319024a57f62f3ba3b45b89944";
            $auth_token = "8868f75c19c7501af2aab80e1acaec29";
            $twilio_number = "+18583775539";
            $client = new Client($account_sid, $auth_token);

            $client->messages->create($recipient_num, [
                'from' => $twilio_number, 
                'body' => $message
            ]);
        } catch (Exception $e) {
            dd("Error: ". $e->getMessage());
        }

        Session::flash('success', 'Employee Assigned & SMS Sent Successfully !');
        return redirect()->back();
    }

    public function manager_not_assigned()
    {
        $pending = Event::where('status', 'Pending/Not Assigned')->orderBy('created_at', 'desc')->get();
        return view('backend.manager.events.not-assigned', compact('pending'));
    }

    public function manager_ongoing()
    {
        $ongoing = Event::where('status', 'Ongoing')->orderBy('created_at', 'desc')->get();
        return view('backend.manager.events.ongoing', compact('ongoing'));
    }

    public function manager_completed()
    {
        $completed = Event::where('status', 'Completed')->orWhere('status', 'Completed & Feedback Given')->orderBy('created_at', 'desc')->get();
        return view('backend.manager.events.completed', compact('completed'));
    }
}
