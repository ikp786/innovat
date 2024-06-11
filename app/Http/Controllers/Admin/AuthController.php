<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    function loginPage(Request $request)
    {
        // Check if the user is already authenticated
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    function login(AdminLoginRequest $request)
    {
        try {
            $credentials = $request->only('email', 'password');
            $credentials['role_id'] = 1;
            if (Auth::attempt($credentials)) {
                return redirect()->route('admin.dashboard')->with('success', 'Successfully login!');
            } else {
                return redirect()->back()->with('error', 'login failed!');
            }
        } catch (\Exception $exception) {
            createLog('admin login post : exception');
            createLog($exception);
            return redirect()->back()->with('error', 'Oops...Something went wrong!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
