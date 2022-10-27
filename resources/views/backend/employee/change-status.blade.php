@extends('layouts.master')
@section('title', 'Change Employee Status')

@section('content')
    <!-- ========================== Page Content ==================================== -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Change Your Status</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('employee.dashboard') }}">Dashboard </a></li>
                                <li class="breadcrumb-item active" style="color: #74788d;">Change Your Status</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12">
                    
                    <div class="row" id="deviceStandard" style="margin-top:-40px;">
                        <div class="col-md-4"></div>
                        <div class="col-md-4" style="text-align: center !important;">
                            <div class="alert alert-primary fade show mb-0" style="font-weight:600;" role="alert">
                                <i class="bx bx-timer bx-tada me-2 font-size-15" style="position: relative; top: 2px !important;"></i>
                                <span class="timer"></span>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>

                    <br><br>
                </div>
            </div>

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

                            
                            <form class="needs-validation" action="" method="post" novalidate="">
                            @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <label for="validationTooltip01" class="form-label" style="font-size: 16px;">Set Your Activity</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3 position-relative">
                                            <div class="form-check form-radio-success mb-3" style="font-size: 17px;">
                                                <input class="form-check-input" type="radio" name="status" value="Active" {{ ($employee->status == 'Active') ? 'checked' : '' }}>
                                                <label class="form-check-label">
                                                    Active
                                                </label>
                                            </div>

                                            <div class="form-check form-radio-success mb-3" style="font-size: 17px;">
                                                <input class="form-check-input" type="radio" name="status" value="Inactive" {{ ($employee->status == 'Inactive') ? 'checked' : '' }}>
                                                <label class="form-check-label">
                                                    Inactive
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                                                      
                                </div>

                                <br>

                                <div class="row">
                                    
                                    <div class="col-md-12">
                                        
                                        <button class="btn btn-primary" style="margin-top: 6px !important; width: 100% !important" type="submit">Change Status</button>
                                        
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
            
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->                
                
@endsection


@section('styles')
    <style type="text/css">
        .spinner-grow {
            animation: 0.9s linear infinite spinner-grow !important;
        }

        @media screen and (max-width: 1199px) and (min-width: 300px) {
            #deviceStandard{
                margin-top: 5px !important;
            }

            #marBot{
                margin-top: 12px !important;
            }
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript">
        window.onload = displayClock();
        
        function displayClock(){
            var display = new Date().toLocaleTimeString();
            $('.timer').text(display);
            setTimeout(displayClock, 1000); 
        }
    </script>
@endsection