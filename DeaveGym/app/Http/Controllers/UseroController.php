<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UseroController extends Controller
{
    public function login(Request $request)
    {
        // Validamos las credenciales
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' => 'Credenciales inválidas',
                'errors' => $validator->errors()
            ], 422);
        }

        // Si las credenciales son válidas, intentamos autenticar al usuario
        $credentials = $request->only('email', 'password');
        if (!Auth::attempt($credentials)) {
            return response()->json([
                'success' => false,
                'error' => 'Credenciales inválidas'
            ], 401);
        }

        // Si el usuario se autenticó correctamente, generamos un token JWT para él
        $user = Auth::user();

        // Obtenemos el rol del usuario y lo agregamos a la respuesta
        $role = $user->role;

        $token = $user->createToken('authToken')->accessToken;

        // Retornamos una respuesta exitosa con el token y el rol del usuario
        return response()->json([
            'success' => true,
            'data' => [
                'user' => $user,
                'token' => $token,
                'role' => $role
            ]
        ], 200);
    }
}