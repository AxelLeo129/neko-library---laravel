<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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

    public function register(Request $request) {
        $validar = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        if ($validar->fails()) {
            return response(['result' => 'fail', 'message' => $validar->errors()], 500);
        }

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        if(!$usuario->save()) {
            return response(['result' => 'fail', 'message' => 'Error al crear usuario, por favor inténtelo más tarde.'], 500);
        }
        $access_token = $usuario->createToken('authToken')->accessToken;
    
        return response([
            'result' => 'success', 
            "message"=> 'Usuario creado exitósamente.',
            'access_token' => $access_token
        ]);
    }

}
