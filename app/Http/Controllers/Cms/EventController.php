<?php

namespace App\Http\Controllers\Cms;

use App\Models\Event;
use App\Models\ServiceType;
use App\Models\ThemeLayout;
use App\Models\User;
use App\Models\Employee;
use App\Models\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class EventController extends Controller
{
    public function event_list()
    {
        $allServiceTypes = ServiceType::orderBy('id')->with('services')->get();
    	return view('backend.customer.event_list', compact('allServiceTypes'));
    }

    public function event_view($id)
    {
    	$auth = Auth::user();
    	
        $event = Event::findOrFail($id);
        $type = ServiceType::findOrFail($event->type);
        $theme = ThemeLayout::findOrFail($event->theme_id);
        $progress = ($event->services_completed / $event->total_services) * 100;

        $customer = Customer::where('user_id', $event->user_id)->first();
        $cus_user = User::findOrFail($event->user_id);

        if($event->employee_id != null) {
            $emp = Employee::findOrFail($event->employee_id);
            $use = User::findOrFail($emp->user_id);
        } else {
            $emp = null;
            $use = null;
        }

        $employees = User::where('role', 'Employee')->get();

        return view('backend.view-event', compact('event', 'type', 'theme', 'progress', 'employees', 'emp', 'use', 'customer', 'cus_user'));
        
    }
}
