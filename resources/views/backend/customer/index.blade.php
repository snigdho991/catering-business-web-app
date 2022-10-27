@extends('layouts.master')
@section('title', 'Customer Dashboard')

@section('content')

	<div class="page-content">
	    <div class="container-fluid">

            @if($ongoing->count() > 0 && $unreads->count() > 0)

                <div class="alert alert-dismissible alert-warning" style="text-align: center; margin-bottom: 40px;padding: 4px;" role="alert">
                
                    <marquee direction="left" style="font-weight: 410;margin-top: 5px;font-size: 14.5px;">
                        <span style="color: #343a40!important"><i class="bx bx-bell bx-tada" style="position: relative; top: 1.5px;"></i> Notification:</span> <span class="badge bg-danger rounded-pill" style="position: relative; top: -1.5px;">{{ $ongoing->count() }}</span> @if($ongoing->count() > 1) events are @else event is @endif ongoing currently. Please <a style="color: #222;" target="_blank" href="{{ route('customer.ongoing') }}">check the @if($ongoing->count() > 1) events @else event @endif </a> now.
                        <b class="text-primary">||</b>
                        <span style="color: #343a40!important"><i class="bx bx-bell bx-tada" style="position: relative; top: 1.5px;"></i> Message:</span> <span class="badge bg-danger rounded-pill" style="position: relative; top: -1.5px;">{{ $unreads->count() }}</span> @if($unreads->count() > 1) messages haven't @else message hasn't @endif checked yet. Please <a style="color: #222;" target="_blank" href="{{ route('inbox') }}">read & reply</a> the message.
                    </marquee>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>

            @elseif($ongoing->count() > 0)

                 <div class="alert alert-dismissible alert-warning {{-- bg-info bg-gradient text-white --}}" style="text-align: center; margin-bottom: 40px;padding: 4px;" role="alert">
                
                    <marquee direction="left" style="font-weight: 410;margin-top: 5px;font-size: 14.5px;">
                        <span style="color: #343a40!important"><i class="bx bx-bell bx-tada" style="position: relative; top: 1.5px;"></i> Notification:</span> <span class="badge bg-danger rounded-pill" style="position: relative; top: -1.5px;">{{ $ongoing->count() }}</span> @if($ongoing->count() > 1) events are @else event is @endif ongoing currently. Please <a style="color: #222;" target="_blank" href="{{ route('customer.ongoing') }}">check the @if($ongoing->count() > 1) events @else event @endif </a> now.
                    </marquee>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>

            @elseif($unreads->count() > 0)
            
                 <div class="alert alert-dismissible alert-warning {{-- bg-info bg-gradient text-white --}}" style="text-align: center; margin-bottom: 40px;padding: 4px;" role="alert">
                
                    <marquee direction="left" style="font-weight: 410;margin-top: 5px;font-size: 14.5px;">
                        <span style="color: #343a40!important"><i class="bx bx-bell bx-tada" style="position: relative; top: 1.5px;"></i> Message:</span> <span class="badge bg-danger rounded-pill" style="position: relative; top: -1.5px;">{{ $unreads->count() }}</span> @if($unreads->count() > 1) messages haven't @else message hasn't @endif checked yet. Please <a style="color: #222;" target="_blank" href="{{ route('inbox') }}">read & reply</a> the message.
                    </marquee>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            @endif

	        <!-- start page title -->
	        <div class="row">
	            <div class="col-12">
	                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
	                    <h4 class="mb-sm-0 font-size-18">{{ Auth::user()->role }} Dashboard</h4>                      
	                </div>
	            </div>
	        </div>

	        <div class="row">
                <div class="col-xl-12">

                    <div class="row" id="deviceStandard" style="margin-top: -40px;;">
                        <div class="col-md-4"></div>
                        <div class="col-md-4" style="text-align: center !important;">
                            <span class="badge bg-dark font-size-12">Dashboard Stats <i class="bx bx-caret-down"></i></span><br><br>
                        </div>
                        <div class="col-md-4"></div>
                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Pending Events</p>
                                            <h4 class="mb-0">{{ $pending->count() }}</h4>
                                        </div>

                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-copy-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Ongoing Events</p>
                                            <h4 class="mb-0">{{ $ongoing->count() }}</h4>
                                        </div>

                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                            <span class="avatar-title rounded-circle bg-primary">
                                                <i class="bx bx-archive-in font-size-24 "></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card mini-stats-wid">
                                <div class="card-body">
                                    <div class="media">
                                        <div class="media-body">
                                            <p class="text-muted fw-medium">Completed Events</p>
                                            <h4 class="mb-0">{{ $completed->count() }}</h4>
                                        </div>

                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                            <span class="avatar-title">
                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="theme_value" data-theme="{{ Auth::user()->theme }}"></div>
                    </div>

                </div>
            </div>
            <!-- end row -->

	    </div>
	</div>

@endsection

@section('styles')
    <style type="text/css">
        @media screen and (max-width: 1199px) and (min-width: 300px) {
            #deviceStandard {
                margin-top: 10px !important;
            }
        }

        .alert-dismissible .btn-close {
            padding: 0.9rem 1.25rem !important;
        }
    </style>
@endsection