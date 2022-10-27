@extends('layouts.master')
@section('title', 'View Employee')

@section('content')
    <!-- ========================== Page Content ==================================== -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">View Employee</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Dashboard </a></li>
                                <li class="breadcrumb-item active" style="color: #74788d;">View Employee</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <form class="needs-validation" novalidate="">

                                <div class="row">
                                    <div class="col-lg-5"></div>

                                    <div class="col-lg-2">

                                        <h5 class="mb-4" style="margin-left: 18px;"><span class="{{ $employee->status == 'Active' ? 'text-success' : 'text-danger' }}"><div class="spinner-grow m-1" style="height: 1rem;width: 1rem;position: relative;top: 1px;right: 1px;" role="status">
                                                <span class="sr-only">Loading...</span>
                                            </div>{{ $employee->status }}</span></h5>
                                        
                                        <div class="zoom-gallery d-flex flex-wrap">
                                            @if($user->profile_photo_path)
                                                <a href="{{ asset('assets/uploads/users/'.$user->profile_photo_path) }}" title="{{ $user->profile_photo_path }}">
                                                    <img src="{{ asset('assets/uploads/users/'.$user->profile_photo_path) }}" alt="" style="height: 125px !important; width: 125px !important;" class="img-thumbnail rounded-circle">
                                                </a>
                                            @else
                                                <a href="{{ config('core.image.default.avatar') }}" title="No Profile Photo">
                                                    <img src="{{ config('core.image.default.avatar') }}" alt="" style="height: 125px !important; width: 125px !important;" class="img-thumbnail rounded-circle">
                                                </a>
                                            @endif
                                        </div>
                                        <p class="mt-2" style="margin-left: 12px;">@if($user->profile_photo_path) Current @else No @endif Profile Photo</p>
                                    </div>

                                    <div class="col-lg-5"></div>
                                </div>

                                <br><br>
                            
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="validationTooltip01" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="validationTooltip01" placeholder="Enter Username" name="username" value="{{ old('username', $user->name) }}" readonly="">
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>

                                            <div class="invalid-tooltip">
                                                Please enter username.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="validationTooltip20" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="validationTooltip20" placeholder="Enter Firstname" name="first_name" value="{{ old('first_name', $employee->first_name) }}" readonly="">
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>

                                            <div class="invalid-tooltip">
                                                Please enter firstname.
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <br>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="validationTooltip05" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="validationTooltip05" name="last_name" value="{{ old('last_name', $employee->last_name) }}" placeholder="Enter Lastname" readonly="">
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>

                                            <div class="invalid-tooltip">
                                                Please enter lastname.
                                            </div>
                                        </div>
                                    </div>     

                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="validationTooltip06" class="form-label">Phone</label>
                                            <input type="tel" class="form-control" id="validationTooltip06" placeholder="Enter Phone" pattern="[0-9+]{5,15}" name="phone" value="{{ old('phone', $employee->phone) }}" readonly="">
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>

                                            <div class="invalid-tooltip">
                                                Please enter valid phone number.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="validationTooltip03" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="validationTooltip03" placeholder="Enter Address" name="address" value="{{ old('address', $employee->address) }}" readonly="">
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>

                                            <div class="invalid-tooltip">
                                                Please enter address.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="validationTooltip02" class="form-label">E-mail</label>
                                            <input type="email" class="form-control" id="validationTooltip02" name="email" value="{{ old('email', $user->email) }}" placeholder="Enter E-mail Address" readonly="">
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>

                                            <div class="invalid-tooltip">
                                                Please enter valid E-mail address.
                                            </div>
                                        </div>
                                    </div>                           
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="validationTooltip40" class="form-label">Employee Type</label>
                                            <input type="text" class="form-control" id="validationTooltip40" placeholder="Enter Employee Type" name="employee_type" value="{{ old('employee_type', $employee->employee_type) }}" readonly="">
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>

                                            <div class="invalid-tooltip">
                                                Please enter employee type.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label class="form-label">Selected Services</label>

                                            <select class="select2 form-control select2-multiple" name="type_id[]" multiple="multiple" disabled="">
                                                <?php $selected = explode(",", $employee->type_id); ?>
                                                @foreach($types as $type)
                                                    <option value="{{ $type->id }}" {{ (in_array($type->id, $selected)) ? 'selected' : '' }}>{{ $type->type }}</option>
                                                @endforeach    
                                            </select>
                                        </div>
                                    </div>
                                </div>  

                                <div class="mt-5 text-center">
                                    <a class="btn btn-info" href="{{ route('all.employees') }}" title="Edit">
                                        <i class="fas fa-arrow-circle-left me-1"></i> Go Back
                                    </a>
                                </div>
                            </form>
                            <br>
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

@section('styles')
    <style type="text/css">
        .select2-container--default.select2-container--disabled .select2-selection--multiple {
            background-color: #bcbfc2 !important;
            cursor: default;
        }
    </style>
@endsection