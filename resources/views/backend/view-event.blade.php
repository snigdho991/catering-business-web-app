@extends('layouts.master')
@section('title', 'Booked Events')

@section('content')

    <!-- Detail Modal -->
        @if(Auth::user()->hasRole('Manager'))
            <div class="modal fade detailModal" id="detailModal" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="detailModalLabel">Assign an Employee</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form class="needs-validation" action="{{ route('assign.employee') }}" method="post">
                        @csrf
                            <input type="hidden" name="event_id" value="{{ $event->id }}">            

                            <div class="modal-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered border-primary align-middle table-nowrap mb-0 w-100">
                                        <label for="" class="form-label">All <span class="text-success">Active</span> Employees</label><br>
                                        <thead class="table-light">
                                            <tr>
                                                <th class="align-middle">Name</th>
                                                <th class="align-middle">Phone</th>
                                                <th class="align-middle">Type</th>
                                                <th class="align-middle text-center">Ratings</th>
                                                <th class="align-middle" style="text-align: center;">Services</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($employees as $employee)
                                            <?php 
                                                $find_employee = \App\Models\Employee::where('user_id', $employee->id)->first();
                                                $services_provide = explode(",", $find_employee->type_id);
                                            ?>
                                                @if($find_employee->status == 'Active')
                                                    <tr>
                                                        <td>{{ $find_employee->first_name . ' ' . $find_employee->last_name }}</td>
                                                        <td>{{ $find_employee->phone }}</td>
                                                        <td>{{ $find_employee->employee_type }}</td>
                                                        <td class="text-center">
                                                            <span class="badge @if(floatval($find_employee->rating) == 0) bg-danger @else bg-warning @endif" style="margin-left: 5px;">{{ floatval($find_employee->rating) }} <i class="mdi mdi-star"></i></span>
                                                        </td>
                                                        <td style="text-align: center;">
                                                            @foreach($services_provide as $serve)
                                                                <?php 
                                                                    $service_pro = \App\Models\ServiceType::where('id', $serve)->first();
                                                                ?>
                                                                {{ $service_pro->type }}@if(end($services_provide) != $serve), @endif
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>

                                <br><br>

                                <span style="text-align: center;">
                                    
                                    <input type="hidden" name="id" value="{{-- {{ $requisition->id }} --}}">

                                    <div class="mb-3 position-relative">
                                        <label for="validationTooltip12" class="form-label">Select an available Employee</label><br>
                                        <select class="form-control select2" style="width: 100% !important;" id="validationTooltip12" name="employee_id" required="">
                                        
                                            <option value="">---- select any ----</option>

                                            <optgroup label="Select an Active Employee from below">
                                                
                                                @foreach ($employees as $employee)
                                                <?php 
                                                    $find_employee = \App\Models\Employee::where('user_id', $employee->id)->first();
                                                ?>

                                                    @if($find_employee->status == 'Active')
                                                        <option value="{{ $find_employee->id }}">{{ $find_employee->first_name . ' ' . $find_employee->last_name }}</option>
                                                    @endif
                                                @endforeach

                                            </optgroup>

                                        </select>

                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>

                                        <div class="invalid-tooltip">
                                            Please select any employee.
                                        </div>
                                    </div>
                                        
                                </span>
                            </div>

                            <div class="modal-footer">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-10">
                                            <button class="btn btn-success" style="margin-left: 0.6rem !important; width: 100% !important" type="submit">Confirm</button>
                                        </div>

                                        <div class="col-2">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    <!-- end modal -->

    <!-- Review Modal -->
        @if(Auth::user()->hasRole('Customer'))
            <div class="modal fade reviewModal" id="reviewModal" tabindex="-1" role="dialog" aria-labelledby="reviewModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="reviewModalLabel">Give Ratings (Out of 5)</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form class="needs-validation" action="{{ route('submit.feedback') }}" method="post">
                        @csrf
                            <input type="hidden" name="event_id" value="{{ $event->id }}">            

                            <div class="modal-body">

                                <div class="mb-3 position-relative"> 
                                    <div class="rating-star" style="text-align: center;">
                                        <label for="rating" class="form-label" style="margin-bottom: -1px;">Event Ratings</label><br>
                                        <input type="hidden" id="rating" class="rating" name="event_ratings" onchange="updateRating();" data-filled="mdi mdi-star text-success" data-empty="mdi mdi-star-outline text-success" data-fractions="2"/>
                                    </div>
                                </div>

                                 <div class="mb-3 position-relative"> 
                                    <div class="rating-star" style="text-align: center;">
                                        <label for="ratingTwo" class="form-label" style="margin-bottom: -1px;">Theme Ratings</label><br>
                                        <input type="hidden" id="ratingTwo" class="rating" name="theme_ratings" onchange="updateRating();" data-filled="mdi mdi-star text-success" data-empty="mdi mdi-star-outline text-success" data-fractions="2"/>
                                    </div>
                                </div>

                                 <div class="mb-3 position-relative"> 
                                    <div class="rating-star" style="text-align: center;">
                                        <label for="ratingThree" class="form-label" style="margin-bottom: -1px;">Employee Ratings</label><br>
                                        <input type="hidden" id="ratingThree" class="rating" name="employee_ratings" onchange="updateRating();" data-filled="mdi mdi-star text-success" data-empty="mdi mdi-star-outline text-success" data-fractions="2"/>
                                    </div>
                                </div>
                                
                                <div class="mb-3 position-relative text-center">
                                    <label for="textarea" class="form-label">Write Your Feedback</label><br>
                                    <textarea id="textarea" name="feedback" class="form-control" required="" rows="5" placeholder="Please write down your valuable feedback..."></textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-10">
                                            <button class="btn btn-success" id="submitFeedback" disabled="" style="margin-left: 0.6rem !important; width: 100% !important" type="submit">Send Feedback</button>
                                        </div>

                                        <div class="col-2">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>                           
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        @endif
    <!-- end modal -->

    <!-- ========================== Page Content ==================================== -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Event Information</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="http://requisition-app.test/administrator/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item active">Event Information</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">

                    {{-- @if($event->status == "Pending/Not Assigned")
                        <div class="alert bg-info bg-gradient text-white" style="text-align: center; font-weight: 550;" role="alert">
                            <i class="mdi mdi-bell-ring-outline me-2"></i>
                            Event is Pending now and employee will be added by the Manager.
                        </div>
                    @elseif($event->status == "Ongoing")
                        <div class="alert bg-primary bg-gradient text-white" style="text-align: center;font-weight: 550;" role="alert">
                            <i class="mdi mdi-checkbox-multiple-marked-outline me-2"></i>
                            Good news! Employee has been assigned. Event is now <b>Ongoing</b>.
                        </div>
                    @elseif($event->status == "Completed")
                        <div class="alert bg-success bg-gradient text-white" style="text-align: center;font-weight: 550;" role="alert">
                            <i class="mdi mdi-check-all me-2"></i>
                            Good news! All services are finished. Event is <b>completed</b> successfully.
                        </div>
                    @elseif($event->status == "Completed & Feedback Given")
                        <div class="alert bg-success bg-gradient text-white" style="text-align: center;font-weight: 550;" role="alert">
                            <i class="mdi mdi-check-all me-2"></i>
                            Good news! Event is <b>completed</b> successfully & feedback is given by Customer.
                        </div>
                    @endif --}}

                    <div class="card">
                        <div class="card-body">
                            <h5 class="font-size-14" style="position: relative; top: -3px;">Event Progress: <span class="badge bg-light" style="position: relative; top: -1.45px;">{{ $event->services_completed }}/{{ count(json_decode($event->services)) }} Services Completed</span></h5>
                            <div class="progress animated-progess progress-xl" style="margin-top: 7px;">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="font-weight: 510; width: {{ $progress }}%" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">{{ $progress }}%</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-lg-9" style="margin-bottom: 25px !important;">

                    <div class="zoom-gallery d-flex flex-wrap">
                        <a href="{{ $theme->layout_image }}" style="width: 100%;" title="Theme Layout"><img src="{{ $theme->layout_image }}" width="100%" height="460px" class="rounded" alt=""></a>
                    </div>                
                    
                    <br>

                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                
                                <div class="media-body overflow-hidden">
                                    <h5 class="text-truncate font-size-15">Event Type : <span class="text-primary">{{ $type->type }}</span></h5>
                                    <p class="text-muted">You can know the current progress of an event from this details.</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="font-size-15 mt-4">Event Info :</h5>
                                    <div class="text-muted mt-4">

                                        <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Name: <span style="text-transform: uppercase; font-weight: 550;">{{ $event->name }}</span></p>
                                        <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Location: <span style="text-transform: uppercase; font-weight: 550;">{{ $event->location }}</span></p>
                                        <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Status: <span style="text-transform: uppercase; font-weight: 550;">{{ $event->status }}</span></p>
                                                                             
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h5 class="font-size-15 mt-4">Payment Details :</h5>
                                    <div class="text-muted mt-4">

                                        <p><i class="mdi mdi-chevron-right text-primary me-1"></i> jmbj</p>
                                                                             
                                    </div>

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="font-size-15 mt-4 mb-4">Services Consumed :</h5>

                                    <div class="table-responsive">
                                        <table class="table table-bordered border-primary align-middle table-nowrap mb-0 w-100">

                                            <thead class="table-light">
                                                <tr>
                                                    <th class="align-middle">Service Name</th>
                                                    <th class="align-middle">Price</th>
                                                    <th class="align-middle">Description</th>
                                                    @if(Auth::user()->hasRole('Employee'))
                                                        <th class="align-middle" style="text-align: center;">Action</th>
                                                    @else
                                                        <th class="align-middle" style="text-align: center;">Status</th>
                                                    @endif
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach (json_decode($event->services) as $service)
                                                <?php 
                                                    $find_service = \App\Models\Service::findOrFail($service);
                                                ?>
                                                    <tr>
                                                        <td>{{ $find_service->name }}</td>
                                                        <td>{{ $find_service->price }}</td>
                                                        <td>{{ $find_service->description }}</td>
                                                        <td style="text-align: center;">
                                                            @if(Auth::user()->hasRole('Employee'))

                                                                @if(in_array($service, json_decode($event->completed_tasks)))
                                                                    <span class="badge rounded-pill bg-success">Completed</span>
                                                                @else

                                                                    <form action="{{ route('mark.completed') }}" method="post">
                                                                    @csrf
                                                                        <input type="hidden" name="event" value="{{ $event->id }}">
                                                                        <input type="hidden" name="service" value="{{ $service }}">

                                                                        <button type="submit" onclick="return confirm('Are you sure to mark this task as Completed?')" class="btn btn-primary btn-sm waves-effect btn-label waves-light"><i class="bx bx-check-double label-icon"></i> Mark as Completed</button>

                                                                    </form>
                                                            
                                                                @endif

                                                            @else
                                                                @if(in_array($service, json_decode($event->completed_tasks)))
                                                                    <span class="badge rounded-pill bg-success">Completed</span>
                                                                @else
                                                                    <span class="badge rounded-pill bg-danger">Not Completed</span>
                                                                @endif
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            

                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row task-dates">

                                <div class="col-sm-4 col-4">
                                    <div class="mt-4">
                                        <h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i> Event Date</h5>
                                        <p class="text-muted mb-0">{{ date('d M, Y', strtotime($event->date)) }}</p>
                                    </div>
                                </div>

                                <div class="col-sm-4 col-4">
                                    <div class="mt-4">
                                        <h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i> Time</h5>
                                        <p class="text-muted mb-0" style="margin-left: 22px;">{{ $event->time }}</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>   


                    @if($event->status == 'Completed & Feedback Given')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="row no-gutters align-items-center">
                                        
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <h5 class="font-size-15"><i class="bx bx-message-dots text-muted align-middle me-1"></i> Customer Feedback :<small class="text-muted float-end" style="margin-top: 28px !important;">{{ $event->updated_at->diffForHumans() }}</small></h5>
                                                <small class="text-muted card-text" style="margin-left: 25px;">Posted on {{ date('d M, Y - h:i A', strtotime($event->updated_at)) }}</small>
                                                <p class="card-text">
                                                    <div class="media py-3">
                                                        <div class="avatar-xs me-3">
                                                            
                                                            <span class="avatar-title rounded-circle bg-light text-primary">
                                                                @if($cus_user->profile_photo_path)
                                                                    <img src="{{ asset('/assets/uploads/users/'.$cus_user->profile_photo_path) }}" alt="admin-pic" height="32" width="32" style="border-radius: 50%;">
                                                                @else
                                                                    {{ avatarLetter($customer->first_name .' '.$customer->last_name) }}
                                                                @endif
                                                            </span>
                                                        </div>
                                                        <div class="media-body">
                                                            <?php $last_digit = substr($event->ratings, -1); ?>
                                                            <h5 class="font-size-14 mb-1">{{ $customer->first_name .' '.$customer->last_name }} 
                                                                <span class="rating-star" style="margin-left: 3px;">
                                                                    <input type="hidden" class="rating" data-filled="mdi mdi-star text-success" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{ floatval($event->ratings) }}"/>
                                                                </span>
                                                            </h5>
                                                            <p class="text-muted" style="font-size: 13.7px;">{{ $event->feedback }}</p>

                                                            @if(Auth::user()->hasRole('Employee'))
                                                                <div>
                                                                    
                                                                    <div class="rating-star">
                                                                        <span class="font-size-14 mt-1" style="margin-right: 20px !important;">Employee: </span> 
                                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star text-success" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{ $event->employee_ratings }}"/>
                                                                    </div>
                                                                    
                                                                </div>
                                                            @else
                                                                <div>
                                                                    <div class="rating-star">
                                                                        <span class="font-size-14 mt-1" style="margin-right: 50px !important;">Event: </span> 
                                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star text-success" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{ $event->event_ratings }}"/>
                                                                    </div>

                                                                    <div class="rating-star">
                                                                        <span class="font-size-14 mt-1" style="margin-right: 40px !important;">Theme: </span> 
                                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star text-success" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{ $event->theme_ratings }}"/>
                                                                    </div>

                                                                    <div class="rating-star">
                                                                        <span class="font-size-14 mt-1" style="margin-right: 20px !important;">Employee: </span> 
                                                                        <input type="hidden" class="rating" data-filled="mdi mdi-star text-success" data-empty="mdi mdi-star-outline text-muted" data-readonly value="{{ $event->employee_ratings }}"/>
                                                                    </div>
                                                                    
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                                                          
                </div>

                <div class="col-lg-3" id="tooltip-container">
                    <div class="mb-3 position-relative">
                        
                        <div class="card text-center" style="border: 1px solid #bbb !important;">
                            <div class="card-body">
                                <span class="badge rounded-pill badge-soft-primary font-size-11"><i class="fas fa-arrows-alt-h me-1" style="position: relative; top: 0.7px;"></i> Cost Calculation</span>
                                <br><br>

                                <h5 class="font-size-15 mb-1">Theme Cost</h5>
                                <p class="text-muted" style="font-weight: 500;">{{ $theme->price }}</p>

                                <h5 class="font-size-15 mb-1">Services Cost</h5>
                                <p class="text-muted" style="font-weight: 500;">{{ $event->total_cost }}</p>

                                <h5 class="font-size-15 mb-1">Grand Total</h5>
                                <p class="text-success" style="font-weight: 510;">{{ round((float)$theme->price + (float)$event->total_cost, 2) }}</p>
                                                                
                            </div>
                        </div>

                        <div class="card text-center">
                            <div class="card-body">
                                <span class="badge rounded-pill badge-soft-primary font-size-11">Customer</span>
                                <div class="avatar-sm mx-auto mb-4">
                                    <br><span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                        @if($cus_user->profile_photo_path)
                                            <img src="{{ asset('/assets/uploads/users/'.$cus_user->profile_photo_path) }}" alt="user-pic" height="40" width="40" style="border-radius: 50%;">
                                        @else
                                            {{ avatarLetter($customer->first_name .' '.$customer->last_name) }}
                                        @endif
                                    </span>
                                </div>
                                <br><h5 class="font-size-15 mb-1"><a href="#" class="text-dark" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="left" title="{{ $customer->first_name .' '.$customer->last_name }}">{{ $customer->first_name .' '.$customer->last_name }}</a></h5>
                                <p class="text-muted">{{ $customer->phone }}</p>

                            </div>
                        </div>

                        @if($emp)
                            <div class="card">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="avatar-md me-4">
                                            <span class="avatar-title rounded-circle bg-light text-danger font-size-16">

                                                @if($use->profile_photo_path)
                                                    <img src="{{ asset('/assets/uploads/users/'.$use->profile_photo_path) }}" alt="user-pic" height="30">
                                                @else
                                                    {{ avatarLetter($emp->first_name .' '.$emp->last_name) }}
                                                @endif
                                            </span>
                                        </div>

                                        <div class="media-body overflow-hidden">
                                            <span class="badge rounded-pill badge-soft-info font-size-11">Employee</span>
                                            <h5 class="text-truncate font-size-15 mt-2"><a href="#" class="text-dark" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="left" title="{{ $emp->first_name .' '.$emp->last_name }}">{{ $emp->first_name .' '.$emp->last_name }}</a> <span class="badge bg-warning" style="margin-left: 5px;">{{ floatval($emp->rating) }} <i class="mdi mdi-star"></i></span></h5>
                                            <p class="text-muted mb-4">{{ $emp->phone }}</p>

                                        </div>
                                    </div>
                                </div>                   
                            </div>
                        @endif

                        
                        @if(Auth::user()->hasRole('Customer'))
                            <div class="card">
                                <div class="card-header bg-info bg-gradient text-white text-center border-bottom text-uppercase" style="border-radius: 5px;">
                                    Customer Tools
                                </div>

                                
                                @if($event->status == "Pending/Not Assigned")

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">Employee NOT Assigned!</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <small class="text-primary">Employee will be added by the Manager.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @elseif($event->status == "Ongoing")

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">Event Started!</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <small class="text-info">Event progress is ongoing currently!</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @elseif($event->status == "Completed")

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">Event Feedback</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <div style="display: flex; gap: 5px;">

                                                            <div class="col-12">
                                                                
                                                                <button type="button" class="btn btn-success btn-sm waves-effect btn-label waves-light" data-bs-toggle="modal" data-bs-target=".reviewModal"><i class="bx bx-message-dots label-icon"> </i> Give Feedback</button>
                                                                
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @elseif($event->status == "Completed & Feedback Given")
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">Completed & Feedback Given!</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <small class="text-warning">Event is completed & feedback is given successfully.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    

                                @endif

                            </div>
                        @elseif(Auth::user()->hasRole('Manager'))
                            <div class="card">
                                <div class="card-header bg-info bg-gradient text-white text-center border-bottom text-uppercase" style="border-radius: 5px;">
                                    Manager Tools
                                </div>

                                
                                @if($event->status == "Pending/Not Assigned")

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">Assign Employee</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <div style="display: flex; gap: 5px;">

                                                            <div class="col-12">
                                                                <form action="" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $event->id }}">

                                                                    <button type="button" class="btn btn-success btn-sm waves-effect btn-label waves-light" data-bs-toggle="modal" data-bs-target=".detailModal"><i class="bx bx-bookmark-plus label-icon"></i> Assign Tasks To Employee</button>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @elseif($event->status == "Ongoing")

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">Event Started!</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <small class="text-info">Event progress is ongoing currently!</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @elseif($event->status == "Completed")

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">All Services Completed!</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <small class="text-success">Employee has marked all the services as completed & event is completed!</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @elseif($event->status == "Completed & Feedback Given")
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">Completed & Feedback Given!</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <small class="text-warning">Event is completed & feedback is given successfully.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    

                                @endif

                            </div>
                        @elseif(Auth::user()->hasRole('Employee'))
                            <div class="card">
                                <div class="card-header bg-info bg-gradient text-white text-center border-bottom text-uppercase" style="border-radius: 5px;">
                                    Employee Tools
                                </div>

                                
                                @if($event->status == "Pending/Not Assigned")

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">Employee NOT Assigned!</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <small class="text-primary">Employee will be added by the Manager.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @elseif($event->status == "Ongoing")

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">Event Started!</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <small class="text-info">Event progress is ongoing currently! Complete all the tasks.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @elseif($event->status == "Completed")

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">All Services Completed!</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <small class="text-success">Employee has marked all the services as completed & event is completed!</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @elseif($event->status == "Completed & Feedback Given")
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card border mb-0">
                                                    <div class="card-header">
                                                        <h6 class="my-0 text-dark text-center">Completed & Feedback Given!</h6>
                                                    </div> 
                                                    <div class="card-body bg-transparent text-center">
                                                        <small class="text-warning">Event is completed & feedback is given successfully.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    

                                @endif

                            </div>
                        @endif
                    </div>
                </div>
               

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->      
                
@endsection

@section('scripts')
    <!-- Bootstrap rating js -->
    <script src="{{ asset('assets/libs/bootstrap-rating/bootstrap-rating.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/rating-init.js') }}"></script>

    <script type="text/javascript">
        function updateRating() {
            var rating = document.getElementById('rating').value;
            var ratingTwo = document.getElementById('ratingTwo').value;
            var ratingThree = document.getElementById('ratingThree').value;
           
            if (rating && ratingTwo && ratingThree) {
                document.getElementById("submitFeedback").disabled = false;          
            }
        }

    </script>

    @if(Auth::user()->hasRole('Customer'))
        @if($event->status == 'Completed')
            <script type="text/javascript">
                setTimeout(function(){
                    $("#reviewModal").modal("show")
                }, 2e3);           
            </script>
        @endif
    @endif

    @if(Auth::user()->hasRole('Manager'))
        @if($event->status == 'Pending/Not Assigned')
            <script type="text/javascript">
                setTimeout(function(){
                    $("#detailModal").modal("show")
                }, 2e3);           
            </script>
        @endif
    @endif

@endsection

@section('styles')
    <!-- Bootstrap Rating css -->
    <link href="{{ asset('assets/libs/bootstrap-rating/bootstrap-rating.css') }}" rel="stylesheet" type="text/css" />
    <style type="text/css">
        .rating-star>span.badge {
            background-color: #f1b44c!important;
        }
    </style>
@endsection

