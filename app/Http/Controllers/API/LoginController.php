<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            $response = ["message" => 'Failed'];

            return response($response, 422);
        }
        $token = $user->createToken($request->email)->plainTextToken;
        return  ResponseFormatter::success(
            [
                "token" => $token,
                "user" => $user
            ]
        );
    }

    public function logout()
    {

        Auth::logout();
        Session::flush();
        return  ResponseFormatter::success(
            [
                'message' => 'Berhasil Logout'
            ]
        );
    }

    public function getUser()
    {
        $user = User::all();
        return  ResponseFormatter::success(
            [
                "user" => $user
            ]
        );
    }
}
