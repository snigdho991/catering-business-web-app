<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ServiceType;
use App\Models\Service;

use Session;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Manager']);
    }

    public function all_services()
    {
    	$all = Service::orderBy('created_at', 'desc')->get();
    	return view('backend.manager.services.index', compact('all'));
    }

    public function add_service()
    {
    	$types = ServiceType::orderBy('created_at', 'desc')->get();
    	return view('backend.manager.services.create', compact('types'));
    }

    public function store_service(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $service = new Service();

        $service->type_id = $request->type_id;
        $service->name = $request->name;
        $service->price = $request->price;
        $service->description = $request->description;

        $service->save();

        Session::flash('success', 'Service Added Successfully !');
        return redirect()->route('all.services');
    }

    public function edit_service($id)
    {
    	$service = Service::findOrFail($id);
    	$types = ServiceType::orderBy('created_at', 'desc')->get();

        return view('backend.manager.services.edit', compact('service', 'types'));
    }

    public function update_service(Request $request, $id)
    {
    	$service = Service::findOrFail($id);

        $this->validate($request, [
            'name' => 'required'
        ]);

        $service->type_id = $request->type_id;
        $service->name = $request->name;
        $service->price = $request->price;
        $service->description = $request->description;

        $service->save();

        Session::flash('success', 'Service Updated Successfully !');
        return redirect()->route('all.services');
    }

    public function destroy_service($id)
    {
        
        $service = Service::findOrFail($id);
        $service->delete();

        Session::flash('error', 'Service Removed Successfully !');
        return redirect()->route('all.services');

    }
}
