<?php

namespace App\Http\Controllers\Cms;

use Auth;
use App\Models\User;

use App\Models\Employee;
use App\Models\ServiceType;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class EmployeeController extends Controller
{
	public function __construct()
    {
        $this->middleware(['role:Manager']);
    }

    public function all_employees()
    {
    	$employees = Employee::orderBy('created_at', 'desc')->get();
        //ddd($employees);
    	return view('backend.manager.employees.index', compact('employees'));
    }

    public function add_employee()
    {
    	$types = ServiceType::orderBy('created_at', 'desc')->get();
    	return view('backend.manager.employees.create', compact('types'));
    }

    public function store_employee(Request $request)
    {
    	$this->validate($request, [
            'username'     => 'required',
            'first_name'   => 'required',
            'last_name'    => 'required',
            'email'        => 'required|email|unique:users',
            'address'      => 'required',
            'phone'        => 'required',
            'password'     => 'required',
        ]);

        $user = User::create([
            'name'     => $request->username,
            'email'    => $request->email,
            'role'     => 'Employee',
            'password' => bcrypt($request->password),
        ]);

        $finduser = User::find($user->id);
        $finduser->assignRole('Employee');

        $employee = Employee::create([
            'user_id'          => $user->id,
            'first_name'       => $request->first_name,
            'last_name'        => $request->last_name,
            'address'          => $request->address,
            'phone'            => $request->phone,
            'type_id'          => implode(',', $request->type_id),
            'employee_type'    => $request->employee_type,
        ]);

        Session::flash('success', 'Employee Added Successfully !');
        return redirect()->route('add.employee');
    }

    public function show_employee($id)
    {
        $employee = Employee::findOrFail($id);
        $user = User::findOrFail($employee->user_id);
        $types = ServiceType::orderBy('created_at', 'desc')->get();

        return view('backend.manager.employees.show', compact('employee', 'user', 'types'));
    }
}
