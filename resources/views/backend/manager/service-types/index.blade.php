@extends('layouts.master')
@section('title', 'All Service Types')

@section('content')
    <!-- ========================== Page Content ==================================== -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">All Service Types</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">All Service Types</li>
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

                            {{-- @if(Session::has('error'))
                                <div class="alert alert-dismissible fade show color-box bg-danger bg-gradient p-4" role="alert">
                                    <span class="mb-4 my-2 text-white">{{ Session::get('error') }}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @endif --}}

                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">
                                            SL
                                        </th>
                                        <th class="align-middle">Type Name</th>
                                        <th class="align-middle">Date & Time</th>
                                        <th class="align-middle">Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                @foreach($all as $key => $service_type)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        
                                        <td id="tooltip-container">
                                            <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $service_type->type }}">
                                                {{ $service_type->type }}
                                            </span> 
                                        </td>

                                        <td>
                                            <?php
                                                $date_time = strtotime($service_type->created_at);
                                                $not_date = date('d M, Y', $date_time);

                                                $time = date('h:i A', $date_time)
                                            ?>
                                            {{ $not_date }} - {{ $time }}
                                        </td>
                                                                           
                                        <td>
                                            <div class="inline" style="display: flex; gap: 5px;">
                                                <a class="btn btn-outline-info btn-sm edit" href="{{ route('edit.service.type', $service_type->id) }}" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                
                                                <form action="{{ route('destroy.service.type', $service_type->id) }}" method="post">
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