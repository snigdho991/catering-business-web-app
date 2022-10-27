@extends('layouts.master')
@section('title', 'All Employees')

@section('content')
    <!-- ========================== Page Content ==================================== -->
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">All Employees</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">All Employees</li>
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
                                        <th style="width: 5%;">
                                            SL
                                        </th>
                                        <th class="align-middle" style="width: 25%">Name</th>
                                        <th class="align-middle">Username</th>
                                        <th class="align-middle">Phone</th>
                                        <th class="align-middle">E-mail</th>
                                        <th class="align-middle text-center">Ratings</th>
                                        <th class="align-middle">Created At</th>
                                        <th class="align-middle" style="text-align: center;">Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                @foreach($employees as $key => $employee)
                                    <?php
                                        $user = \App\Models\User::find($employee->user_id);
                                    ?>
                                    <tr>
                                        <td>
                                            {{ $key + 1 }}
                                        </td>
                                        
                                        <td>
                                            <span style="float: left;">
                                                <span style="font-weight: 500;">{{ $employee->first_name . ' ' . $employee->last_name }}</span>
                                            </span> 

                                            @if($employee->status == 'Active')

                                                <span class="CellWithComment">
                                                    <i class="mdi mdi-arrow-up-bold-circle-outline ms-1 text-success" style="position: relative; top: -4px; cursor: pointer; font-size: 18px; float: right;"></i>
                                                    <span class="CellComment" style="background-color:#34c38f !important;">Active</span>
                                                </span>

                                            @else

                                                <span class="CellWithComment">
                                                    <i class="mdi mdi-arrow-down-bold-circle-outline ms-1 text-danger" style="position: relative; top: -4px; cursor: pointer; font-size: 18px; float: right;"></i>
                                                    <span class="CellComment" style="background-color:#f46a6a !important;">Inactive</span>
                                                </span>

                                            @endif
                                        </td>

                                        <td>
                                            <span data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $employee->first_name }}">
                                                {{ $user->name }}
                                            </span>
                                        </td>

                                        <td>
                                            {{ $employee->phone }}
                                        </td>

                                        <td>
                                            {{ $user->email }}
                                        </td>

                                        <td class="text-center">
                                            <span class="badge @if(floatval($employee->rating) == 0) bg-danger @else bg-warning @endif" style="margin-left: 5px;">{{ floatval($employee->rating) }} <i class="mdi mdi-star"></i></span>
                                        </td>

                                        <td>
                                            <?php
                                                $date_time = strtotime($employee->created_at);
                                                $not_date = date('d M, Y', $date_time);

                                                $time = date('h:i A', $date_time)
                                            ?>
                                            {{ $not_date }} - {{ $time }}
                                        </td>
                                                                           
                                        <td style="text-align: center;">
                                            <div class="inline">
                                                {{-- <a class="btn btn-outline-success btn-sm edit" href="{{ route('edit.service', $employee->id) }}" title="Edit">
                                                    <i class="far fa-eye"></i> View
                                                </a> --}}

                                                <a class="btn btn-primary btn-sm waves-effect btn-label waves-light" href="{{ route('show.employee', $employee->id) }}" title="View">
                                                    <i class="bx bx-user-pin label-icon"></i> View
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

@section('styles')
    <style type="text/css">

        .CellWithComment{
            position:relative;
        }

        .CellComment{
            display:none;
            position:absolute; 
            z-index:100;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 500;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            bottom: -35px;
        }

        .CellWithComment:hover span.CellComment{
            display:block;
        }

    </style>
@endsection