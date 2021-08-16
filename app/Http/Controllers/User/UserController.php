<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('email', 'passport');
        
        if(!Auth::attempt($credentials)) {
            return response(["message" => "Usuario y/o contraseña es invalido"], 422);
        }

        $access_token = Auth::user()->createToken('auth_neko_library')->accessToken;
        return response(["usuario" => Auth::user(), "access_token" => $access_token], 200);
    }
}
