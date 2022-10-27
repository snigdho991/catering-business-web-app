@extends('layouts.master')
@section('title', 'Add Theme Item')

@section('styles')
    <style type="text/css">
        .file-area {
        width: 100%;
        position: relative;
        }

        .file-area input[type=file] {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0;
        cursor: pointer;
        }

        .file-area .file-dummy {
        width: 100%;
        padding: 60px;
        background: #E8F9FD;
        border: 2px dashed rgba(255, 255, 255, 0.2);
        text-align: center;
        transition: background 0.3s ease-in-out;
        }

        .file-area .file-dummy .success {
        display: none;
        }

        .file-area:hover .file-dummy {
        background: #CFF6FF;
        }

        .file-area input[type=file]:focus + .file-dummy {
        outline: 2px solid rgba(255, 255, 255, 0.5);
        outline: -webkit-focus-ring-color auto 5px;
        }

        .file-area input[type=file]:valid + .file-dummy {
        border-color: rgba(0, 255, 0, 0.4);
        background-color: rgba(0, 255, 0, 0.3);
        }

        .file-area input[type=file]:valid + .file-dummy .success {
        display: inline-block;
        }

        .file-area input[type=file]:valid + .file-dummy .default {
        display: none;
        }
    </style>
@endsection


@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add theme item</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('manager.dashboard') }}">Dashboard </a></li>
                            <!-- <li class="breadcrumb-item active" style="color: #74788d;">Add New Service</li> -->
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

                        <form class="needs-validation" action="{{ route('theme.store.item') }}" method="post" novalidate="" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 position-relative">
                                        <label for="validationTooltip01" class="form-label">Item Name</label>
                                        <input type="text" class="form-control" id="validationTooltip01" placeholder="Enter item name" name="name" value="{{ old('name') }}" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                        <div class="invalid-tooltip">
                                            Please enter item name.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 position-relative">
                                        <label for="validationTooltip01" class="form-label">Category</label>
                                        <select name="category" class="form-select" required>
                                            <option value="" disabled selected>Select your option</option>
                                            <option value="Table">Table</option>
                                            <option value="Chair">Chair</option>
                                            <option value="Weeding Couple Chair">Weeding Couple Chair</option>
                                            <option value="Flower">Flower</option>
                                            <option value="Hanging">Hanging</option>
                                            <option value="Multimedia">Multimedia</option>
                                            <option value="Banner">Banner</option>
                                            <option value="Stage">Stage</option>
                                        </select>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                        <div class="invalid-tooltip">
                                            Please select item category.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 position-relative">
                                        <!-- <div class="card">
                                            <div class="card-body"> -->
                                                <label for="textarea" class="form-label">Choose Item Image To Be Uploaded</label>
                                                <div class="form-group file-area">
                                                    <input type="file" name="file" accept="image/png" required="required"/>
                                                    <div class="file-dummy">
                                                        <div class="success">
                                                            <h3>Great, your file is selected. Keep on.</h3>
                                                            </div>
                                                        <div class="default">
                                                            <h4>Please click to select</h4>
                                                            <h6>Only png type image less than 2MB is allowed</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" style="margin-top: 6px !important; width: 100% !important" type="submit">Add Item</button>
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
@endsection


@section('scripts')
    
@endsection