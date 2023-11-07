<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'email' =>  ['required', 'email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($credentials)) {

            // Mendapatkan informasi user
            $user = auth()->user();

            // Membuat token
            $userResource = new UserResource($user);
            return $userResource->additional([
                'token' => $userResource->createToken('API Token')->plainTextToken
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Crdentials not match our records',
            'data' => ''
        ], 401);
    }
}
