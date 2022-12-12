<?php

namespace App\Http\Controllers;

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
            : response()->json('', 403);
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
