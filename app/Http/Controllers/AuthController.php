<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        // setup validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:225',
            'email' => 'required|email|max:225|unique:users',
            'password' => 'required|min:8'
        ]);

        // cek validator
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //tambah data user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // cek keberhasilan
        if ($user) {
            return response()->json([
                'siccess' => true,
                'message' => 'data berhasil ditambah bro',
                'data' => $user
            ], 201);
        }

        // cek gagal
        return response()->json([
            'siccess' => false,
            'message' => 'data berhasil ditambah bro',
        ], 409); // conflic
    }

    public function Login(Request $request)
    {
        // setup validator
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // cek validasi
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // get kredensial dari request
        $credentials = $request->only('email', 'password');

        // cek kalo gagal
        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json([
                'siccess' => false,
                'message' => 'email/password lu salah',
            ], 401);
        }

        // cek kalo sukses
        return response()->json([
            'siccess' => true,
            'message' => 'login berhasil',
            'user' => auth()->guard('api')->user(),
            'token' => $token
        ], 201);
    }

    public function logout(Request $request) {
        //
        //

        //
        try {
            JWTAuth::invalidate(JWTAuth::getToken());

            return response()->json([
            'success' => true,
            'message' => 'logout berhasil',
        ], 200);
        } catch (JWTException $e) {
            return response()->json([
            'success' => false,
            'message' => 'logout gagal',
        ], 409);
        }
    }
}
