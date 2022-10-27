<!doctype html>

<html lang="en">

    
    <head>
        
        <meta charset="utf-8" />
        <title>Register - {{ config('app.name') }}</title>
        
        @include('libs.meta-tags')
        
        @include('libs.styles')

        <style type="text/css">
            .auth-full-bg .bg-overlay {
                background: url({{ asset('/assets/images/bg-auth-overlay.png') }});
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }

            
            @media screen and (min-width: 1200px) {
                .auth-full-bg {
                    height: 100% !important;
                }

                .bottom-height {
                    margin-top: 42vh !important;
                }
            }
        </style>

    </head>

    <body class="auth-body-bg">
        
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    
                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">
    
                                    <div class="p-4 mt-auto bottom-height">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="text-center">
                                                    
                                                    <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">5k</span>+ Satisfied Customers</h4>
                                                    
                                                    <div dir="ltr">
                                                        <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">" Fantastic theme with a ton of options. If you just want the HTML to integrate with your project, then this is the package. You can find the files in the 'dist' folder...no need to install git and all the other stuff the documentation talks about. "</p>
    
                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">Abs1981</h4>
                                                                        <p class="font-size-14 mb-0">- {{ config('app.name') }} Customer</p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
    
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">" If Every Vendor on Envato are as supportive as Themesbrand, Development with be a nice experience. You guys are Wonderful. Keep us the good work. "</p>
    
                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">nezerious</h4>
                                                                        <p class="font-size-14 mb-0">- {{ config('app.name') }} Customer</p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    <div style="margin-bottom: 2rem !important;">
                                        <a href="{{ url('/') }}" class="d-block auth-logo">
                                            <img src="{{ config('core.image.default.logo2d') }}" alt="" height="200" style="margin: 0 auto;" class="auth-logo-dark">
                                        </a>
                                    </div>
                                    <div class="my-auto">
                                        
                                        <div>
                                            <h5 class="text-primary">Register with us !</h5>
                                            <p class="text-muted">Sign up to continue to {{ config('app.name') }} as a <b>Customer</b></p>
                                        </div>
            
                                        <div class="mt-4">

                                            @if(count($errors) > 0)
                                                <div class="alert alert-dismissible fade show color-box bg-danger bg-gradient p-4" role="alert">
                                                    <x-jet-validation-errors class="mb-4 my-2 text-white" />
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif

                                            @if (session('status'))
                                                <div class="alert alert-dismissible fade show color-box bg-success bg-gradient p-4" role="alert">
                                                    <div class="mb-4 my-2 text-white">
                                                        {{ session('status') }}
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif

                                            @if (session('message'))
                                                <div class="alert alert-danger">{{ session('message') }}</div>
                                            @endif

                                            <form action="{{ route('register') }}" method="POST" class="needs-validation">
                                                @csrf
                
                                                <div class="mb-3 position-relative">
                                                    <label for="validationTooltip01" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="validationTooltip01" placeholder="Enter your first name" name="first_name" value="{{ old('first_name') }}" required="">
                                                    <div class="valid-tooltip">
                                                        Looks good!
                                                    </div>

                                                    <div class="invalid-tooltip">
                                                        Please enter your first name.
                                                    </div>
                                                </div>

                                                <div class="mb-3 position-relative">
                                                    <label for="validationTooltip110" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="validationTooltip110" placeholder="Enter your last name" name="last_name" value="{{ old('last_name') }}" required="">
                                                    <div class="valid-tooltip">
                                                        Looks good!
                                                    </div>

                                                    <div class="invalid-tooltip">
                                                        Please enter your last name.
                                                    </div>
                                                </div>
                                            
                                                <div class="mb-3 position-relative">
                                                    <label for="validationTooltip02" class="form-label">E-mail</label>
                                                    <input type="email" class="form-control" id="validationTooltip02" name="email" value="{{ old('email') }}" placeholder="Enter E-mail Address" required="">
                                                    
                                                    <div class="valid-tooltip">
                                                        Looks good!
                                                    </div>

                                                    <div class="invalid-tooltip">
                                                        Please enter valid E-mail address.
                                                    </div>
                                                </div>

                                                

                                                <div class="mb-3 position-relative">
                                                    <label for="validationTooltip06" class="form-label">Phone</label>
                                                    <input type="tel" class="form-control" id="validationTooltip06" placeholder="Enter Phone" pattern="[0-9+]{5,15}" name="phone" value="{{ old('phone') }}" required="">

                                                    <div class="valid-tooltip">
                                                        Looks good!
                                                    </div>

                                                    <div class="invalid-tooltip">
                                                        Please enter valid phone number.
                                                    </div>
                                                </div>

                                                <div class="mb-3 position-relative">
                                                    <label for="validationTooltip12" class="form-label">Gender</label>
                                                    <select class="form-control select2" id="validationTooltip12" name="gender" required="">
                                                    
                                                        <option value="">Select Your Gender</option>

                                                        <optgroup label="Genders List">
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                            <option value="Others">Others</option>
                                                        </optgroup>

                                                    </select>

                                                    <div class="valid-tooltip">
                                                        Looks good!
                                                    </div>

                                                    <div class="invalid-tooltip">
                                                        Please select your Dept.
                                                    </div>
                                                </div>


                                                <div class="mb-3 position-relative">
                                                    <label for="validationTooltip100" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="validationTooltip100" placeholder="Enter your address" name="address" value="{{ old('address') }}" required="">
                                                    <div class="valid-tooltip">
                                                        Looks good!
                                                    </div>

                                                    <div class="invalid-tooltip">
                                                        Please enter your address.
                                                    </div>
                                                </div>
                                                

                                                <div class="mb-3 position-relative">
                                                    <label for="validationTooltip07" class="form-label">Password</label>

                                                    <div class="input-group auth-pass-inputgroup">
                                                        <input type="password" class="form-control" id="validationTooltip07" name="password" value="{{ old('password') }}" aria-label="Password" aria-describedby="password-addon" placeholder="Enter Password" required="">

                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>

                                                        <div class="invalid-tooltip">
                                                            Please enter valid password.
                                                        </div>
                                                        
                                                        <button class="btn btn-light" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                    </div>
                                                </div>

                                                

                                                <div class="mb-3 position-relative">
                                                    <label for="validationTooltip08" class="form-label">Re-type Password</label>
                                                    
                                                    <div class="input-group auth-pass-inputgroup">
                                                        <input type="password" class="form-control" id="validationTooltip08" placeholder="Re-type Password" aria-label="Password" name="password_confirmation" aria-describedby="password-addon-two" onkeyup="matchPassword()" required="">

                                                        <div class="valid-tooltip">
                                                            Looks good!
                                                        </div>

                                                        <div class="invalid-tooltip">
                                                            Please Re-type Password again.
                                                        </div>

                                                        <button class="btn btn-light" type="button" id="password-addon-two" onclick="ToggleConfirmPass()"><i class="mdi mdi-eye-outline"></i></button>

                                                        <div class="valid-tooltip" id="matched" style="display: none;">
                                                            Password Matched!
                                                        </div>

                                                        <div class="invalid-tooltip" id="notmatched" style="display: none;">
                                                            Password not matched yet.
                                                        </div>

                                                    </div>
                                                </div>

                                                <br>
                            
                                                <div class="d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Register as Customer</button>
                                                </div>
                    
                                            </form>
                                            <p class="text-muted text-center" style="margin-top: 30px !important;">Already have an account ? <a href="{{ route('login') }}" class="fw-medium text-primary"> Login</a> </p>
                                        </div>
                                    </div>

                                    <div class="mt-md-3 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> <b>-</b> Developed with <i class="mdi mdi-heart text-danger"></i> by <span style="font-weight: 550;">Shahid Events Teams</span></p>
                                    </div>
                                </div>
                                                                
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

        <!-- JAVASCRIPT -->
        @include('libs.scripts')

        <script type="text/javascript">
            
            function ToggleConfirmPass() {
                var tempconf = document.getElementById("validationTooltip08");
                if (tempconf.type === "password") {
                    tempconf.type = "input";
                }
                else {
                    tempconf.type = "password";
                }
            }
        </script>

        <script type="text/javascript">
            function matchPassword() {  
                var pw1 = document.getElementById("validationTooltip07").value;  
                var pw2 = document.getElementById("validationTooltip08").value;
                if($.trim(pw1) != ''){
                    if($.trim(pw2) != ''){
                        if(pw1 != pw2)  
                        { 
                            $('#matched').css('display', 'none');  
                            $('#notmatched').css('display', 'block');
                        } else { 
                            $('#notmatched').css('display', 'none');
                            $('#matched').css('display', 'block');
                        }
                    } else {
                        $('#notmatched').css('display', 'none');
                        $('#matched').css('display', 'none');
                    }
                }
            }
        </script>

    </body>

</html>