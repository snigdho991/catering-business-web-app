@extends('layouts.master')
@section('title', 'Booked Events')

@section('content')
    <!-- ========================== Page Content ==================================== -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Booked Events</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Quick Menu</a></li>
                                <li class="breadcrumb-item active">My Events</li>
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
                                        <th class="align-middle">Event Name</th>
                                        <th class="align-middle">Date</th>
                                        <th class="align-middle">Time</th>
                                        <th class="align-middle">Location</th>
                                        <th class="align-middle">Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                @foreach($events as $key => $event)
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        <td>
                                            {{ $event->name }}
                                        </td>
                                        <td>
                                            {{ $event->date }}
                                        </td>
                                        <td>
                                            {{ $event->time }}
                                        </td>
                                        <td>
                                            {{ $event->location }}
                                        </td>
                                        <td>
                                            <div class="inline" style="display: flex; gap: 5px;">
                                                <a class="btn btn-outline-info btn-sm edit" href="{{ route('event.view', $event->id) }}" title="View">
                                                    <i class="fas fa-eye"></i>
                                                </a>
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