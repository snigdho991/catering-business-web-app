@extends('layouts.master')
@section('title', 'Inbox')

@section('content')
	<div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Chat @if(Auth::user()->hasRole('Manager')) With Customers @elseif(Auth::user()->hasRole('Customer')) With Manager @endif</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Chat @if(Auth::user()->hasRole('Manager')) With Customers @elseif(Auth::user()->hasRole('Customer')) With Manager @endif</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            	
            <chat :user="{{ auth()->user() }}"></chat>
            	
            <!-- end row -->
            
        </div> <!-- container-fluid -->
    </div>
                <!-- End Page-content -->
@endsection

@section('scripts')
    <script src="{{ mix('/js/app.js') }}"></script>
@endsection

@section('styles')
    <style>
    .feed {
        width: 100%;
        height: 486px;
        overflow: hidden !important;
        overflow-y: scroll !important;
    }

    .ctext-wrap-mbb {
        margin-bottom: 20px !important;
    }
  </style>
@endsection