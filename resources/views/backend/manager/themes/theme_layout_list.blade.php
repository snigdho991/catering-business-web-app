@extends('layouts.master')
@section('title', 'Theme Layout Lists')

@section('content')
    <!-- ========================== Page Content ==================================== -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Theme Layout Lists</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Dashboard</a></li>
                                <!-- <li class="breadcrumb-item active">All Service Types</li> -->
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div style="text-align:center !important; margin-bottom:10px;">
                                <h4 class="card-title mt-0">Default Layouts</h4>
                                <!-- <h6 class="card-subtitle font-14 text-muted">Support card subtitle</h6> -->
                            </div>
                            <table class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            SL
                                        </th>
                                        <th class="align-middle">Layout Name</th>
                                        <th class="align-middle">Event Type</th>
                                        <th class="align-middle">Price</th>
                                        <th class="align-middle">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($layouts as $key => $layout)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        <td>
                                            {{ $layout->name }}
                                        </td>
                                        <td>
                                            {{ $service_types[$layout->service_type_id] }}
                                        </td>
                                        <td>
                                            {{ $layout->price }}
                                        </td>
                                        <td>
                                            <div class="inline" style="display: flex; gap: 5px;">
                                                <!-- <a class="btn btn-outline-info btn-sm edit" href="{{ route('edit.service.type', $layout->id) }}" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a> -->
                                                <form action="{{ route('delete.theme.layout', $layout->id) }}" method="post">
                                                    @csrf
                                                    <button class="btn btn-outline-danger btn-sm delete" onclick="return confirm('Are you sure to delete?')" style="margin-left: 5px;" title="Delete" type="submit"><i class="fas fa-trash-alt"></i></button> 
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>

            {{-- <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <div style="text-align:center !important; margin-bottom:10px;">
                                <h4 class="card-title mt-0">Custom Layouts</h4>
                                <!-- <h6 class="card-subtitle font-14 text-muted">Support card subtitle</h6> -->
                            </div>
                            <table class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            SL
                                        </th>
                                        <th class="align-middle">Layout Name</th>
                                        <th class="align-middle">Event Type</th>
                                        <th class="align-middle">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($custom_layouts as $key => $layout)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        <td>
                                            {{ $layout->name }}
                                        </td>
                                        <td>
                                            {{ $service_types[$layout->service_type_id] }}
                                        </td>
                                        <td>
                                            {{ $layout->price }}
                                            <div class="inline" style="display: flex; gap: 5px;">
                                                <a class="btn btn-outline-info btn-sm edit" href="{{ route('edit.service.type', $layout->id) }}" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('destroy.service.type', $layout->id) }}" method="post">
                                                    @csrf
                                                    <button class="btn btn-outline-danger btn-sm delete" onclick="return confirm('Are you sure to delete?')" style="margin-left: 5px;" title="Delete" type="submit"><i class="fas fa-trash-alt"></i></button> 
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> --}}


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->                
                
@endsection