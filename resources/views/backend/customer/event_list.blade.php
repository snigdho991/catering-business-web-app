@extends('layouts.master')
@section('title', 'Available Events')

@section('content')
    <!-- ========================== Page Content ==================================== -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Events & It's Services</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Quick Menu</a></li>
                                <li class="breadcrumb-item active">Events Bookable</li>
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

                            <table class="table table-bordered dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">SL</th>
                                        <th class="align-middle">Name</th>
                                    </tr>
                                </thead>


                                <tbody>
                                @foreach($allServiceTypes as $key => $serviceType)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        
                                        <td>
                                            {{-- <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $serviceType->type }}">
                                                {{ $serviceType->type }}
                                            </span> --}} 

                                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne{{ $key }}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne{{ $key }}">
                                                        {{ $serviceType->type }}
                                                    </button>
                                                    </h2>
                                                    <div id="panelsStayOpen-collapseOne{{ $key }}" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body">
                                                        <table class="table table-bordered dt-responsive nowrap w-100">
                                                            <thead>
                                                                <tr>
                                                                    <th class="align-middle">Service Name</th>
                                                                    <th class="align-middle">Price</th>
                                                                    <th class="align-middle">Description</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($serviceType->services as $service)
                                                                    <tr>
                                                                        <td>{{ $service->name }}</td>
                                                                        <td>{{ $service->price }}</td>
                                                                        <td>{{ $service->description }}</td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>

                                        {{-- <td>
                                            <?php
                                                $type = \App\Models\ServiceType::findOrFail($service->type_id);
                                            ?>
                                            {{ $type->type }}
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
                                        </td> --}}
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