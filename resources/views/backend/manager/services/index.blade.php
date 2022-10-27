@extends('layouts.master')
@section('title', 'All Services')

@section('content')
    <!-- ========================== Page Content ==================================== -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">All Services</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">All Services</li>
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

                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            SL
                                        </th>
                                        <th class="align-middle">Name</th>
                                        <th class="align-middle">Type</th>
                                        <th class="align-middle">Date & Time</th>
                                        <th class="align-middle">Description</th>
                                        <th class="align-middle">Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                @foreach($all as $key => $service)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        
                                        <td id="tooltip-container">
                                            <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $service->name }}">
                                                {{ $service->name }}
                                            </span> 
                                        </td>

                                        <td>
                                            <?php
                                                $type = \App\Models\ServiceType::findOrFail($service->type_id);
                                            ?>
                                            {{ $type->type }}
                                        </td>

                                        <td>
                                            <?php
                                                $date_time = strtotime($service->created_at);
                                                $not_date = date('d M, Y', $date_time);

                                                $time = date('h:i A', $date_time)
                                            ?>
                                            {{ $not_date }} - {{ $time }}
                                        </td>

                                        <td>
                                            {{ $service->description }}
                                        </td>
                                                                           
                                        <td>
                                            <div class="inline" style="display: flex; gap: 5px;">
                                                <a class="btn btn-outline-info btn-sm edit" href="{{ route('edit.service', $service->id) }}" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                
                                                <form action="{{ route('destroy.service', $service->id) }}" method="post">
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

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->                
                
@endsection