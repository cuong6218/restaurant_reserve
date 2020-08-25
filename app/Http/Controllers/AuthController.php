<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
//    protected $userService;
//    public function __construct(UserService $userService)
//    {
//        $this->userService = $userService;
//    }
    public function showLogin()
    {
        return view('users.login');
    }
    public function login(Request $request)
    {
        $data = [
            'name' => $request->name,
            'password' => $request->password,
        ];
        if (!Auth::attempt($data))
        {
            return redirect()->route('auth.showLogin');
        }
        return redirect()->route('layout.index');

    }
    public function logout()
    {
        Session::remove('isAuth');
        return redirect()->route('auth.showLogin');
    }
}
