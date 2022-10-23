<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as ContractsLoginResponse;

class LoginResponse implements ContractsLoginResponse
{
    public function toResponse($request)
    {
        if (auth()->user()) {
            return redirect()->route('home');
        }
        //return redirect()->intended(config('fortify.home'));
    }
}
