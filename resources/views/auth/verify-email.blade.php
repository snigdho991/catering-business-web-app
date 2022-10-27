{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
 --}}

 <!doctype html>
<html lang="en">

    
    <head>
        
        <meta charset="utf-8" />
        <title>Verify Email - {{ config('app.name') }}</title>
        
        @include('libs.meta-tags')
        
        @include('libs.styles')

    </head>

    <body>
        <span>
            <p style="margin-left: 20px; margin-top: 15px; font-weight:500">Hello, <span class="text-primary"> {{ auth()->user()->name }} </span></p>
            <form method="POST" action="{{ route('logout') }}" style="float: right; margin-top: -40px;">
                @csrf

                <button type="submit" class="text-danger dropdown-item" style="font-weight: 500;">
                    <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>

                    <span key="t-logout">
                        Log out
                    </span>                            
                </button>
            </form>
        </span>

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <h1 class="display-2 fw-medium">N<i class="bx bx-buoy bx-spin text-danger display-3"></i>T</h1>
                            <h4 style="margin-top: -15px;"><span class="text-success">VERIFIED</span> YET</h4>
                            <h5 style="margin-top:15px;">Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.
                                <br>
                                Please check your provided email address.</h5>

                            @if (session('status') == 'verification-link-sent')
                                <h5 class="text-success">
                                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                </h5>
                            @endif
                            <br>
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <div>
                                    <x-jet-button type="submit" class="btn btn-dark">
                                        {{ __('Resend Verification Email') }}
                                    </x-jet-button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-xl-6">
                        <div>
                            <img src="{{ asset('assets/images/error-img.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('libs.scripts')

    </body>

</html>