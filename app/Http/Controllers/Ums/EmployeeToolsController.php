<?php

namespace App\Http\Controllers\Ums;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

use Session;
use Auth;

use App\Http\Controllers\Controller;

class EmployeeToolsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Employee']);
    }

    public function employee_dashboard()
    {
        $employee = Employee::where('user_id', Auth::id())->first();
        $ongoing = Event::where('status', 'Ongoing')->where('employee_id', $employee->id)->orderBy('created_at', 'desc')->get();
        $completed = Event::where('status', 'Completed')->orWhere('status', 'Completed & Feedback Given')->where('employee_id', $employee->id)->orderBy('created_at', 'desc')->get();
        $feedback = Event::where('status', 'Completed & Feedback Given')->where('employee_id', $employee->id)->orderBy('created_at', 'desc')->get();

    	return view('backend.employee.index', compact('ongoing', 'completed', 'employee', 'feedback'));
    }

    public function change_status()
    {
        $employee = Employee::where('user_id', Auth::id())->first();
    	return view('backend.employee.change-status', compact('employee'));
    }

    public function mark_completed(Request $request)
    {
        $find_event = Event::findOrFail($request->event);
      
        $completed = json_decode($find_event->completed_tasks);
        //$array[] = array_push($completed, $request->service);
        $completed[] = $request->service;

        $find_event->completed_tasks = json_encode($completed);
        $find_event->services_completed = $find_event->services_completed + 1;

        if ($find_event->services_completed == $find_event->total_services) {
            $find_event->status = 'Completed';
        }

        $find_event->save();
       
        Session::flash('success', 'Service Task Marked as Completed!');
        return redirect()->back();
    }

    public function employee_ongoing()
    {
        $employee = Employee::where('user_id', Auth::id())->first();
        $ongoing = Event::where('status', 'Ongoing')->where('employee_id', $employee->id)->orderBy('created_at', 'desc')->get();
        return view('backend.employee.events.ongoing', compact('ongoing'));
    }

    public function employee_completed()
    {
        $employee = Employee::where('user_id', Auth::id())->first();
        $completed = Event::where('employee_id', $employee->id)->where('status', 'Completed')->orWhere('status', 'Completed & Feedback Given')->orderBy('created_at', 'desc')->get();
        return view('backend.employee.events.completed', compact('completed'));
    }

    public function change_status_store(Request $request)
    {
        $this->validate($request, ['status' => 'required']);
        $employee = Employee::where('user_id', Auth::id())->first();
        $employee->status = $request->status;
        $employee->save();

        return back()->with('success', 'Employee Status Updated!');
    }
    
}
