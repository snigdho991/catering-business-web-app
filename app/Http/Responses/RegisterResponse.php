<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{
    
    public function toResponse($request)
    {
        
        if (Auth::user()->role == "Manager") {
            $home = config('fortify.home');
        } elseif (Auth::user()->role == "Employee") {
            $home = config('fortify.empl');
        } elseif (Auth::user()->role == "Customer") {
            $home = config('fortify.user');
        }
        
        return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect($home);
    }
}
