@extends('layouts.master')
@section('title', 'Book a event')

@section('content')
    <div class="page-content">
	    <div class="container-fluid">

	        <!-- start page title -->
	        <div class="row">
	            <div class="col-12">
	                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
	                    <h4 class="mb-sm-0 font-size-18">Book Event</h4>                      
	                </div>
	            </div>
	        </div>

	        <div class="row">
                <div class="col-xl-12" style="margin-bottom: 20px;">

                    @foreach ($errors->all() as $error)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <i class="mdi mdi-alert-outline me-2"></i>
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endforeach

                    <form class="needs-validation" action="{{ route('event.create') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- <h4 class="text-center">Enter Details</h4> -->
                        <!-- Progress bar -->
                        <div class="progressbar">
                            <div class="progress" id="progress"></div>
                            <div class="progress-step progress-step-active" data-title="Contact"></div>
                            <div class="progress-step" data-title="Event"></div>
                            <div class="progress-step" data-title="Theme"></div>
                            <div class="progress-step" data-title="Payment"></div>
                            <div class="progress-step" data-title="Review"></div>
                        </div>
                        <!-- Steps -->
                        <div class="form-step form-step-active">
                            <div class="mb-3 row">
                                <label for="first_name" class="col-md-2 col-form-label">First Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="firstName" id="firstName" value="{{ $customer->first_name }}" placeholder="required" required/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="last_name" class="col-md-2 col-form-label">Last Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="lastName" id="lastName" value="{{ $customer->last_name }}" placeholder="required" required/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="phone" class="col-md-2 col-form-label">Phone Number</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="phone" id="phone" value="{{ $customer->phone }}" placeholder="required" required/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-md-2 col-form-label">Email</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="email" name="email" id="email" value="{{ $user->email }}" />
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Gender</label>
                                <div class="col-md-10">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input-sm" type="radio" name="gender" id="inlineRadio1" value="male" checked>
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input-sm" type="radio" name="gender" id="inlineRadio2" value="female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input-sm" type="radio" name="gender" id="inlineRadio3" value="other">
                                    <label class="form-check-label" for="inlineRadio3">Other</label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="example-text-input" class="col-md-2 col-form-label">Location</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="location" value="" id="location" placeholder="required" required>
                                </div>
                            </div>


                            <div class="">
                                <a href="#" class="btnfw btnfw-next width-50 ml-auto">Next</a>
                            </div>
                        </div>
                        <div class="form-step">
                            <div class="mb-3 row">
                                <label for="username" class="col-md-2 col-form-label">Event Name</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="eventName" id="eventName" placeholder="required" required/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="position" class="col-md-2 col-form-label">Description</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="details" id="details" placeholder="required" required/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="username" class="col-md-2 col-form-label">Date</label>
                                <div class="col-md-10">
                                    <input type="date" name="date" id="date" required/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="username" class="col-md-2 col-form-label">Time</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="text" name="time" id="time" placeholder="E.g. 1 PM (required)"/>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Type</label>
                                <div class="col-md-10">
                                    <select name="service_type" class="form-select" id="service_type" onChange="changedServiceType(this)">
                                        @foreach($allServiceTypes as $serviceType)
                                            <option value="{{ $serviceType->id }}">{{ $serviceType->type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-md-2 col-form-label">Services</label>
                                <div class="col-md-10" id="services-div">
                                    <select name="services[]" class="select2 select2-multiple" multiple="multiple" data-placeholder="Choose" id="services" onchange="updateCosts()">
                                        @foreach ($allServiceTypes as $serviceType)
                                            <optgroup label="{{ $serviceType->type }}">
                                                @foreach ($serviceType->services as $service)
                                                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-group">
                                <label for="totalCost">Services Cost: &nbsp;&nbsp;</label>
                                <span id="totalCostSpan" style="margin-left:85px;"></span>
                                <input type="hidden" name="totalCost" id="totalCost" value=""/>
                            </div>
                            <div class="btnfws-group">
                                <a href="#" class="btnfw btnfw-prev">Previous</a>
                                <a href="#" class="btnfw btnfw-next">Next</a>
                            </div>
                        </div>
                        <div class="form-step">
                            <div class="input-group">
                                <label for="theme">Choose a theme layout</label>
                                <input type="text" name="theme_custom" id="theme-custom" value="0" hidden/>
                                <input type="text" name="json_layout" id="json-layout" value="" hidden/>
                                <input type="text" name="layout_image" id="layout-image" value="" hidden/>
                                <input type="text" name="theme_id" id="theme-id" value="" hidden/>
                            </div>

                            <div id="theme-layouts" class="row" data-masonry='{"percentPosition": true }'>

                            </div></br>

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#exampleModalFullscreen">Customize (optional)</button>
                                </br></br>
                            </div>
                            
                            <div class="btnfws-group">
                                <a href="#" class="btnfw btnfw-prev">Previous</a>
                                <a href="#" class="btnfw btnfw-next" onclick="showDelayedModal()">Next</a>
                            </div>
                        </div>
                        <div class="form-step">
                            <table class="table table-bordered dt-responsive nowrap w-100" id="costsTable">
                                <thead>
                                    <tr>
                                        <th class="align-middle">Service Name</th>
                                        <th class="align-middle">Price</th>
                                        <th class="align-middle">Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

                            <input type="hidden" name="grandTotalCost" id="grandTotalCost" value=""/>
                            <label style="margin-top:30px;">Grand Total Cost: </label>
                            <span id="grandTotalCostSpan"></span>
                            <!-- <input type="hidden" name="cardName" id="cardName" value=""/>
                            <input type="hidden" name="cardNumber" id="cardNumber" value=""/>
                            <input type="hidden" name="cardExpiration" id="cardExpiration" value=""/>
                            <input type="hidden" name="cardSecurityCode" id="cardSecurityCode" value=""/> -->

                            <div style="text-align: center;">
                                <button type="button" class="btn btn-success waves-effect waves-light" style="margin:30px;" onclick="showModal();">Show Payment Options</button>
                            </div>
                            
                            <div class="mb-3 row">
                                <label for="paymentReceipt" class="col-md-2 col-form-label">Upload Payment Receipt</label>
                                <div class="col-md-10">
                                    <input type="file" name="paymentReceipt" accept="image/*" required/>
                                </div>
                            </div>

                            <div class="btnfws-group">
                                <a href="#" class="btnfw btnfw-prev">Previous</a>
                                <a href="#" class="btnfw btnfw-next" onclick="populateReview()">Next</a>
                            </div>
                        </div>
                        <div class="form-step">
                            <div class="card border border-primary">
                                <div class="card-header bg-transparent border-primary" style="text-align:center;">
                                    <h5 class="my-0 text-primary"><i class="mdi mdi-bullseye-arrow me-3"></i>Summary</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>First Name</label>
                                            <span id="firstNameSpan"></span>
                                            <label style="margin-top:10px;">Last Name</label>
                                            <span id="lastNameSpan"></span>
                                            <label style="margin-top:10px;">Phone Number</label>
                                            <span id="phoneSpan"></span>
                                            <label style="margin-top:10px;">Email</label>
                                            <span id="emailSpan"></span>
                                            <label style="margin-top:10px;">Gender</label>
                                            <span id="genderSpan"></span>
                                            <label style="margin-top:10px;">Location</label>
                                            <span id="locationSpan"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Event Name</label>
                                            <span id="eventNameSpan"></span>
                                            <label style="margin-top:10px;">Description</label>
                                            <span id="eventDetailsSpan"></span>
                                            <label style="margin-top:10px;">Date</label>
                                            <span id="eventDateSpan"></span>
                                            <label style="margin-top:10px;">Time</label>
                                            <span id="eventTimeSpan"></span>
                                            <label style="margin-top:20px;">Type</label>
                                            <span id="eventTypeSpan"></span>
                                            <label style="margin-top:10px;">Services</label>
                                            <span id="eventServicesSpan"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <label>Card Holder Name</label>
                                            <span id="cardNameSpan"></span>
                                            <label style="margin-top:10px;">Card Number</label>
                                            <span id="cardNumberSpan"></span>
                                            <label style="margin-top:10px;">Expiration Date </label>
                                            <span id="cardExpirationSpan"></span>
                                            <label style="margin-top:10px;">Security Code</label>
                                            <span id="cardSecurityCodeSpan"></span> -->
                                            <label style="margin-top:30px;">Grand Total Cost</label>
                                            <span id="grandTotalCostSpan2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btnfws-group">
                                <a href="#" class="btnfw btnfw-prev">Previous</a>
                                <input type="submit" value="Submit" class="btnfw" />
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- end row -->

	    </div>
	</div>


    <!-- Scrollable modal -->
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #D6F3E9;">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Payment Options</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close-icon"></button>
                </div>
                <div class="modal-body" style="background-color: #D6F3E9;">
                    <!-- <div class="input-group">
                        <label for="cardName">Name</label>
                        <input type="text" name="cardNameM" id="cardNameM" value=""/>
                        <label for="cardNumber">Card Number</label>
                        <input type="text" name="cardNumberM" id="cardNumberM" value=""/>
                        <label for="expiration">Expiration Date</label>
                        <input type="date" name="cardExpirationM" id="cardExpirationM" value=""/>
                        <label for="securityCode">Security Code</label>
                        <input type="text" name="cardSecurityCodeM" id="cardSecurityCodeM" value=""/>
                    </div> -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body table-responsive">
                                <table class="table table-bordered mb-0">
                                    <tr>
                                        <td>Name of Bank</td>
                                        <td>Askari Bank</td>
                                    </tr>
                                    <tr>
                                        <td>Title of Account</td>
                                        <td>Muneeb Ahmed</td>
                                    </tr>
                                    <tr>
                                        <td>Account No</td>
                                        <td>123456789</td>
                                    </tr>
                                    <tr>
                                        <td>IBAN No</td>
                                        <td>PK36 SCBL 0000 0011 2345 6702</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body table-responsive">
                                <table class="table table-bordered mb-0">
                                    <tr>
                                        <td>Name of Bank</td>
                                        <td>Askari Bank</td>
                                    </tr>
                                    <tr>
                                        <td>Title of Account</td>
                                        <td>Muneeb Ahmed</td>
                                    </tr>
                                    <tr>
                                        <td>Account No</td>
                                        <td>123456789</td>
                                    </tr>
                                    <tr>
                                        <td>IBAN No</td>
                                        <td>PK36 SCBL 0000 0011 2345 6702</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body table-responsive">
                                <table class="table table-bordered mb-0">
                                    <tr>
                                        <td>Name of Bank</td>
                                        <td>Askari Bank</td>
                                    </tr>
                                    <tr>
                                        <td>Title of Account</td>
                                        <td>Muneeb Ahmed</td>
                                    </tr>
                                    <tr>
                                        <td>Account No</td>
                                        <td>123456789</td>
                                    </tr>
                                    <tr>
                                        <td>IBAN No</td>
                                        <td>PK36 SCBL 0000 0011 2345 6702</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background-color: #D6F3E9;">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal" id="btn-close">Close</button>
                    <!-- <button type="button" class="btn btn-primary" id="updateCardButton" onclick="updateCardDetails()">Save changes</button> -->
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <!-- sample modal content -->
    <div id="exampleModalFullscreen" class="modal fade" tabindex="-1" aria-labelledby="#exampleModalFullscreenLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="exampleModalFullscreenLabel">Theme Layout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="canvas-box">
                        <div>
                            <label for="validationTooltip01" class="form-label">Category</label>
                            <select name="category" class="form-select" id="item-category">
                                <option value="Table">Table</option>
                                <option value="Chair" selected>Chair</option>
                                <option value="Weeding Couple Chair">Weeding Couple Chair</option>
                                <option value="Flower">Flower</option>
                                <option value="Hanging">Hanging</option>
                                <option value="Multimedia">Multimedia</option>
                                <option value="Banner">Banner</option>
                                <option value="Stage">Stage</option>
                            </select>
                            <div class="toolbox" style="margin-top:5px;">
                                <ul class="thumbnails" id="images-list">
                                
                                </ul>
                            </div>
                        </div>
                        <div>
                            <canvas id="canvas" width="700" height="500"></canvas>
                        </div>
                        <div style="width:200px;">
                            <!-- <label>For color and font family select an font object first.</label></br> -->
                            <label>Text</label>
                            <textarea id="add-text"></textarea>
                            <label>Color</label>
                            <input type="color" id="fill-color" name="fill-color" value="#000000" style="margin-bottom:10px;">
                            <label>Font Family</label>
                            <select id="font-family" style="margin-bottom:10px;"></select>
                            <button type="button" class="btn btn-info waves-effect waves-light" style="margin-bottom:30px;" onClick="addTextToCanvas()">Add Text</button><br/>
                            <button type="button" class="btn btn-light waves-effect" onCLick="sendBack()"><i class='bx bx-chevrons-left'></i>Back</button>
                            <button type="button" class="btn btn-light waves-effect" onCLick="sendBackward()"><i class="bx bx-chevron-left"></i>Backward</button>
                            <button type="button" class="btn btn-light waves-effect" onCLick="bringForward()"><i class="bx bx-chevron-right"></i>Forward</button>
                            <button type="button" class="btn btn-light waves-effect" onCLick="bringFront()"><i class="bx bx-chevrons-right"></i>Front</button>
                            <button type="button" id="delete-object-btn" class="btn btn-primary" style="margin-top:20px;">
                            Delete Object
                            </button>
                            <button type="button" class="btn btn-primary" style="margin-top:30px;">
                            <a id="downloadLink" download="theme_export.jpg">Download as image</a>
                            </button>
                            <button type="button" class="btn btn-success waves-effect waves-light" style="margin-top:10px;" id="showtoast" onCLick="save()">Save Changes</button>
                        </div>
                    </div>
                </div>

                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-dismiss="modal" >Save changes</button>
                </div> -->
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection


@section('scripts')
<script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/spectrum-colorpicker2/spectrum.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('assets/libs/%40chenfengyuan/datepicker/datepicker.min.js') }}"></script>
<!-- form advanced init -->
<script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>
<!-- Fabric JS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/521/fabric.js"></script>
<!-- toastr notification -->
<script src="{{ asset('assets/libs/toastr/build/toastr.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/toastr.init.js') }}"></script>


<script type="text/javascript">
//Review
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const phone = document.getElementById('phone');
const email = document.getElementById('email');
const locationInput = document.getElementById('location');
const gender = document.querySelector('input[name="gender"]:checked');
const eventName = document.getElementById('eventName');
const details = document.getElementById('details');
const date = document.getElementById('date');
const time = document.getElementById('time');
const service_type = document.getElementById('service_type');
const themeLayouts = document.getElementById('theme-layouts');
const layoutImage = document.getElementById('layout-image');
const themeId = document.getElementById('theme-id');
// const updateCardButton = document.getElementById('updateCardButton');
const fontFamilySelect = document.getElementById('font-family');
let themeLayoutsArrayByST = [];

function populateReview() {
    firstNameSpan.innerHTML = firstName.value;
    lastNameSpan.innerHTML = lastName.value;
    phoneSpan.innerHTML = phone.value;
    emailSpan.innerHTML = email.value;
    locationSpan.innerHTML = locationInput.value;
    genderSpan.innerHTML = gender.value;
    eventNameSpan.innerHTML = eventName.value;
    eventDetailsSpan.innerHTML = details.value;
    eventDateSpan.innerHTML = date.value;
    eventTimeSpan.innerHTML = time.value;
    /* cardNameSpan.innerHTML = cardName.value;
    cardNumberSpan.innerHTML = cardNumber.value;
    cardExpirationSpan.innerHTML = cardExpiration.value;
    cardSecurityCodeSpan.innerHTML = cardSecurityCode.value; */

    $.ajax({
        type: "POST",
        url: "{{ route('service.type.byId') }}",
        data: {type: service_type.value} 
    }).done(function(result){
        let data = JSON.parse(result);
        eventTypeSpan.innerHTML = data.type;
    });
}


//update card details
/* const cardNameM = document.getElementById('cardNameM');
const cardName = document.getElementById('cardName');
const cardNumberM = document.getElementById('cardNumberM');
const cardNumber = document.getElementById('cardNumber');
const cardExpirationM = document.getElementById('cardExpirationM');
const cardExpiration = document.getElementById('cardExpiration');
const cardSecurityCodeM = document.getElementById('cardSecurityCodeM');
const cardSecurityCode = document.getElementById('cardSecurityCode'); */

/* function updateCardDetails() {
    cardName.value = cardNameM.value;
    cardNumber.value = cardNumberM.value;
    cardExpiration.value = cardExpirationM.value;
    cardSecurityCode.value = cardSecurityCodeM.value;
} */


//Payment step
const costsTable = document.getElementById('costsTable');
const children = costsTable.children;
const tbody = children[1];

let grandTotal = 0;
const totalCostSpan = document.getElementById('totalCostSpan');
const totalCostInput = document.getElementById('totalCost');
const grandTotalCostInput = document.getElementById('grandTotalCost');
const grandTotalCostSpan = document.getElementById('grandTotalCostSpan');
const grandTotalCostSpan2 = document.getElementById('grandTotalCostSpan2');

const scrollableModal = document.getElementById('exampleModalScrollable');
const btnClose = document.getElementById('btn-close');
const btnCloseIcon = document.getElementById('btn-close-icon');

btnClose.addEventListener("click", (e) => {
    scrollableModal.style = "display: none;";
    scrollableModal.classList.remove('show');
    scrollableModal.setAttribute('aria-hidden','true');
    scrollableModal.removeAttribute('aria-modal');
});
btnCloseIcon.addEventListener("click", (e) => {
    scrollableModal.style = "display: none;";
    scrollableModal.classList.remove('show');
    scrollableModal.setAttribute('aria-hidden','true');
    scrollableModal.removeAttribute('aria-modal');
});
/* updateCardButton.addEventListener("click", (e) => {
    scrollableModal.style = "display: none;";
    scrollableModal.classList.remove('show');
    scrollableModal.setAttribute('aria-hidden','true');
    scrollableModal.removeAttribute('aria-modal');
}); */

function updateCosts(){
    let options = document.getElementById('services').selectedOptions;
    let values = Array.from(options).map(({ value }) => value);
    // console.log(values);
    let totalCost = 0;
    let stringServices = '';

    if(values.length > 0){
        $.ajax({
            type: "POST",
            url: "{{ route('service.array.byId') }}",
            data: {data: values} 
        }).done(function(result){
            let data = JSON.parse(result);
            
            while (tbody.hasChildNodes()) {
                tbody.removeChild(tbody.lastChild);
            }
            
            data.forEach((element) => {
                totalCost += parseInt(element.price);
                stringServices += element.name+', ';
    
                let html = '';
                html += '<tr><td>'+element.name+'</td>';
                html += '<td>'+element.price+'</td>';
                html += '<td>'+element.description+'</td></tr>';
    
                $('#costsTable > tbody:last-child').append(html);
            });
            
            totalCostSpan.innerHTML = totalCost;
            totalCostInput.value = totalCost;
            eventServicesSpan.innerHTML = stringServices;
        });
    } else {
        totalCostSpan.innerHTML = totalCost;
        totalCostInput.value = totalCost;
        eventServicesSpan.innerHTML = stringServices;
    }
}

function showDelayedModal(){
    updateGrandTotal();
    setTimeout(() => {
        scrollableModal.style = "display: block; padding-right: 17px;";
        scrollableModal.classList.add('show');
        scrollableModal.setAttribute('aria-hidden','false');
        scrollableModal.setAttribute('aria-modal','true');
    }, 3000);
}

function showModal() {
    scrollableModal.style = "display: block; padding-right: 17px;";
    scrollableModal.classList.add('show');
    scrollableModal.setAttribute('aria-hidden','false');
    scrollableModal.setAttribute('aria-modal','true');
}



// Form wizard
const prevBtns = document.querySelectorAll(".btnfw-prev");
const nextBtns = document.querySelectorAll(".btnfw-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");
let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });
  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });
  const progressActive = document.querySelectorAll(".progress-step-active");
  progress.style.width = ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}



//populate theme layouts
$(window).on('load', function(){
    let serviceTypeValue = service_type.value;
    updateThemeLayouts(serviceTypeValue);
});

function changedServiceType(selectObject){
    updateThemeLayouts(selectObject.value);
}

function updateThemeLayouts(serviceTypeValue) {
    $(themeLayouts).empty();

    $.ajax({
        type: "POST",
        url: "{{ route('theme.layouts.array') }}",
        data: {data: serviceTypeValue} 
    }).done(function(result){
        let data = JSON.parse(result);
        themeLayoutsArrayByST = data;
                    
        data.forEach((element) => {
            let html = `<div class="col-sm-6 col-lg-4">
                            <div class="card">
                                <img src="${element.layout_image}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 class="card-title">${element.name}</h5>
                                <p class="card-text">Price: ${element.price}</p>
                                <input class="form-check-input" type="radio" name="layoutRadios" value="${element.id}" style="margin:20px auto;" onclick="handleRadioClick(this);">
                                </div>
                            </div>
                        </div>`;
            $(themeLayouts).append(html);
        });
    });
}



// Fabric JS
let canvas = new fabric.Canvas('canvas', { preserveObjectStacking: true });
let delBtn = document.getElementById('delete-object-btn');
let fullscreenModal = document.getElementById('exampleModalFullscreen');
let elementJsonLayout = document.getElementById('json-layout');
let themeCustom = document.getElementById('theme-custom');
let ulImagesList = document.getElementById('images-list');
let host = window.location.origin;

canvas.backgroundColor = '#565656';
downloadLink.addEventListener('click', download, false);
delBtn.style.display = 'none';            // Hide the delete button until needed


  // populate theme items on window load
  $(window).on('load', function(){
        let categoryValue = $("#item-category").val();
        populateThemeItems(categoryValue);

        let fonts = listFonts();
        fonts.forEach((item) => {
            $('#font-family').append(`<option value="${item}"> ${item} </option>`);
        });
  });


  $("#item-category").change(function (){
    let categoryValue = $("#item-category").val();
    populateThemeItems(categoryValue);
  });

  function populateThemeItems(categoryValue){
    $(ulImagesList).empty();

    $.ajax({
        type: "POST",
        url: "{{ route('theme.items.array') }}",
        data: { category: categoryValue }
    }).done(function(result){
        let data = JSON.parse(result);            
        data.forEach((element) => {
            let html = `<li><a href="#"><img src="${host}${element.source}" onClick="addImgToCanvas(this)"/></a></li>`;
            $(ulImagesList).append(html);
        });
    });
  }


//change font family
/* $('#font-family').change(function () {
    console.log('change font family');
    var obj = canvas.getActiveObject();
    if (obj) {
        obj.set('fontFamily', $(this).val());
    }
    canvas.renderAll();
}); */

//change color
/* $('#fill-color').change(function () {
    console.log('change color');
    var obj = canvas.getActiveObject();
    if (obj) {
        obj.set('fill', $(this).val());
    }
    canvas.renderAll();
}); */


// save json
function save() {
    let json = JSON.stringify(canvas);
    elementJsonLayout.value = json;
    themeCustom.value = 1;                                          //theme customization true
    layoutImage.value = canvas.toDataURL('image/png');
    console.log("Layout Json, image, themeCustom boolean saved!");

    toastr["success"]("Success!", "Layout Saved.");
    toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": 300,
    "hideDuration": 1000,
    "timeOut": 5000,
    "extendedTimeOut": 1000,
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }
}


// and load everything from the json
function handleRadioClick(radioInput) {  
    let layout = themeLayoutsArrayByST.find((element) => element.id == radioInput.value);
    updateGrandTotal();
    canvas.clear();
    canvas.loadFromJSON(layout.layout_file, function() {
        canvas.renderAll();
    }); 
}

function updateGrandTotal() {
    let selected_layout = document.querySelector('input[name = "layoutRadios"]:checked');

    if(selected_layout != null){
        let layout = themeLayoutsArrayByST.find((element) => element.id == selected_layout.value);
        themeId.value = layout.id;                                                  //saving layout selection
        grandTotal = parseInt(totalCostInput.value) + parseInt(layout.price);       //update grand total
        grandTotalCostInput.value = grandTotal;
        grandTotalCostSpan.innerHTML = grandTotal;
        grandTotalCostSpan2.innerHTML = grandTotal;
    }
}



  // add image
  function addImgToCanvas(imgElement){
    let imgInstance = new fabric.Image(imgElement, {
      left: 100,
      top: 100,
      angle: 0,
    },{ crossOrigin: 'Anonymous' });
    imgInstance.scaleToWidth(300, false);
    canvas.add(imgInstance);
  }


  // add text
  function addTextToCanvas(){
    console.log($('#font-family').val());
    console.log($('#fill-color').val());
    let text = new fabric.IText($('textarea#add-text').val(), {
      fontFamily : $('#font-family').val(),
      fill: $('#fill-color').val(),
    });
    canvas.add(text);
    canvas.centerObject(text);
  }

  
function listFonts() {
    let { fonts } = document;
    const it = fonts.entries();

    let arr = [];
    let done = false;

    while (!done) {
        const font = it.next();
        if (!font.done) {
        arr.push(font.value[0].family);
        } else {
        done = font.done;
        }
    }

    // converted to set then arr to filter repetitive values
    return [...new Set(arr)];
}


  // move object through stack order
  function sendBack(){
    canvas.sendToBack(canvas.getActiveObject());
    canvas.renderAll();
  }
  function sendBackward(){
    canvas.sendBackwards(canvas.getActiveObject());
    canvas.renderAll();
  }
  function bringForward(){
    canvas.bringForward(canvas.getActiveObject());
    canvas.renderAll();
  }
  function bringFront(){
    canvas.bringToFront(canvas.getActiveObject());
    canvas.renderAll();
  }


  // delete selected object
  canvas.on({                                         // When a selection is being made
    'selection:created': () => {
      delBtn.style.display = 'flex'
    }
  })
  canvas.on({                                         // When a selection is cleared
    'selection:cleared': () => {
      delBtn.style.display = 'none'
    }
  })

  // remove the active object on clicking the delete button
  delBtn.addEventListener('click', e => {
    canvas.remove(canvas.getActiveObject())
  })

  // remove on delete key press
  $('html').keyup(function(e){
    if(e.keyCode == 46) {
        deleteSelectedObjectsFromCanvas();
    }
  });    
  function deleteSelectedObjectsFromCanvas(){
    var selection = canvas.getActiveObject();
    if (selection.type === 'activeSelection') {
        selection.forEachObject(function(element) {
            console.log(element);
            canvas.remove(element);
        });
    }
    else{
        canvas.remove(selection);
    }
    canvas.discardActiveObject();
    canvas.requestRenderAll();
  }


  // download canvas as an image
  function download() {
    var dt = canvas.toDataURL('image/jpeg');
    this.href = dt;
  };
</script>
@endsection


@section('styles')
<style type="text/css">
    :root {
    --primary-color-fw: rgb(11, 78, 179);
    }

    /* Global Stylings */
    label {
    display: block;
    margin-bottom: 0.5rem;
    }

    input {
    display: block;
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ccc;
    border-radius: 0.25rem;
    }

    input[type="color" i] {
        appearance: auto;
        width: 100px;
        height: 27px;
        cursor: default;
        box-sizing: border-box;
        background-color: buttonface;
        color: buttontext;
        border-width: 2px;
        border-style: solid;
        border-color: buttonborder;
        border-image: initial;
        padding: 3px;
    }

    .width-50 {
    width: 50%;
    }

    .ml-auto {
    margin-left: auto;
    }

    .text-center {
    text-align: center;
    }

    /* Progressbar */
    .progressbar {
    position: relative;
    display: flex;
    justify-content: space-between;
    counter-reset: step;
    margin: 0rem 10rem 4rem 10rem;
    }

    .progressbar::before,
    .progress {
    content: "";
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    height: 4px;
    width: 100%;
    background-color: #dcdcdc;
    z-index: -1;
    }

    .progress {
    background-color: var(--primary-color-fw);
    width: 0%;
    transition: 0.3s;
    }

    .progress-step {
    width: 2.1875rem;
    height: 2.1875rem;
    background-color: #dcdcdc;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .progress-step::before {
    counter-increment: step;
    content: counter(step);
    }

    .progress-step::after {
    content: attr(data-title);
    position: absolute;
    top: calc(100% + 0.5rem);
    font-size: 0.85rem;
    color: #666;
    }

    .progress-step-active {
    background-color: var(--primary-color-fw);
    color: #f3f3f3;
    }

    /* Form */
    .form {
    width: 95%;
    margin: 0 auto;
    border: 1px solid #ccc;
    border-radius: 0.35rem;
    padding: 3rem;
    }

    .form-step {
    display: none;
    transform-origin: top;
    animation: animate 0.5s;
    }

    .form-step-active {
    display: block;
    }

    .input-group {
    margin: 2rem 0;
    }

    @keyframes animate {
    from {
        transform: scale(1, 0);
        opacity: 0;
    }
    to {
        transform: scale(1, 1);
        opacity: 1;
    }
    }

    /* Button */
    .btnfws-group {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
    }

    .btnfw {
    padding: 0.75rem;
    display: block;
    text-decoration: none;
    background-color: var(--primary-color-fw);
    color: #f3f3f3;
    text-align: center;
    border-radius: 0.25rem;
    cursor: pointer;
    transition: 0.3s;
    }
    .btnfw:hover {
    box-shadow: 0 0 0 2px #fff, 0 0 0 3px var(--primary-color-fw);
    }


    /* theme layout */
    a, a:visited, a:hover, a:active {
      color: white;
    }

    .canvas-box {
      margin: 2%;
      display: flex;
      flex-direction: row;
      flex-wrap: nowrap;
      justify-content: center;
      align-items: center;
      gap: 10px 10px; /* row-gap column gap */
    }
    
    .toolbox {
      display: flex;
      flex-direction: column;
      line-height: 0;
      height: 500px;
      overflow-y: scroll;
      background: white;
    }
    .thumbnails li {
      flex: auto;
      list-style: none;
    }
    .thumbnails a {
      display: block;
    }
    .thumbnails img {
      width: 25vmin;
      height: 25vmin;
      object-fit: cover;
      object-position: top;
    }

    .select2-container {
        display: block !important;
    }
    
</style>

<link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/spectrum-colorpicker2/spectrum.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/%40chenfengyuan/datepicker/datepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/libs/toastr/build/toastr.min.css') }}" rel="stylesheet" type="text/css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Merriweather:ital@0;1&family=Montserrat:ital@0;1&family=Oswald&family=Pacifico&family=Raleway:ital@1&family=Roboto:ital@0;1&display=swap" rel="stylesheet">
@endsection