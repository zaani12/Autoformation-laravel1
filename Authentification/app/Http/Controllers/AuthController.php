<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Login()
{
return view('auth.Login');
}
public function doLogin(LoginRequest $request)
{

}
}