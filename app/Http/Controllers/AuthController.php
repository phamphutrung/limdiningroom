<?php

namespace App\Http\Controllers;

use App\Exceptions\BadRequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends BaseController
{
    /**
     *
     */
    public function login(Request $request)
    {
        $attributes = [
            'username' => $request->username,
            'password' => $request->password
        ];

        return Auth::attempt($attributes)
            ? $this->jsonRender(['payload' => Auth::user()])
            : throw new BadRequestException('Account incorrect');
    }

    /**
     *
     */
    public function logout(Request $request)
    {

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Auth::logout();

        return $this->jsonRender();
    }
}
