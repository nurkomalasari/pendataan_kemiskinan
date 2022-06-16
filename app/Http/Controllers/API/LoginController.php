<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return response()->json(
            [
                "token" => $token,
                "user" => $user
            ]
        );
    }
}
