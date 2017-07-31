<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller {

    protected function guard()
    {
        return Auth::guard('api');
    }

    public function login() {
        if ($this->guard()->check()) {
            return response([
                'message' => 'You has been logged'
            ], 400);
        }
		return view('backend.auth.login');
    }

    public function logout(Request $request) {
        if (!$this->guard()->check()) {
            return response([
                'message' => 'No active user session was found'
            ], 404);
        }

        $request->user('api')->token()->revoke();

        $this->guard()->logout();

        Session::flush();

        Session::regenerate();

        return response([
            'message' => 'User was logged out'
        ]);
    }
}
