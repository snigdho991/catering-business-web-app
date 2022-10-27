@extends('layouts.master')
@section('title', 'Update Service')

@section('content')
    <!-- ========================== Page Content ==================================== -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Update Service</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Dashboard </a></li>
                                <li class="breadcrumb-item active" style="color: #74788d;">Update Service</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    
                    @if(count($errors) > 0)
                        <div class="alert alert-dismissible fade show color-box bg-danger bg-gradient p-4" role="alert">
                            <x-jet-validation-errors class="mb-4 my-2 text-white" />
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                        
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <form class="needs-validation" action="{{ route('update.service', $service->id) }}" method="post" novalidate="">
                            @csrf

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="validationTooltip01" class="form-label">Service Name</label>
                                            <input type="text" class="form-control" id="validationTooltip01" placeholder="Enter service name" name="name" value="{{ old('name', $service->name) }}" required="">
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>

                                            <div class="invalid-tooltip">
                                                Please enter service name.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="validationTooltip03" class="form-label">Price</label>
                                            <input type="text" class="form-control" id="validationTooltip03" placeholder="Enter service price" name="price" value="{{ old('price', $service->price) }}" required="">
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>

                                            <div class="invalid-tooltip">
                                                Please enter service price.
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3 position-relative">
                                            <label for="validationTooltip100" class="form-label">Service Type</label>
                                            <select class="form-control select2" id="validationTooltip100" name="type_id" required="">
                                        
                                                <option value="">Select Service Type</option>
                                                <optgroup label="Choose any service type from below:">
                                                    @foreach($types as $single_type)
                                                        <option value="{{ $single_type->id }}" {{ old('type_id', $service->type_id) == $single_type->id ? "selected" : "" }}>{{ $single_type->type }}</option>
                                                    @endforeach
                                                </optgroup>

                                            </select>

                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>

                                            <div class="invalid-tooltip">
                                                Please select service type.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3 position-relative">
                                            <label for="textarea" class="form-label">Service Description</label>
                                            <textarea id="textarea" name="description" required="" class="form-control" rows="5" placeholder="Write down the description of the service">{!! old('description', $service->description) !!}</textarea>

                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>

                                            <div class="invalid-tooltip">
                                                Please write down the description.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        
                                        <button class="btn btn-primary" style="margin-top: 6px !important; width: 100% !important" type="submit">Update Service</button>
                                        
                                    </div>
                            
                                </div>

                            </form>

                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->                
                
@endsection