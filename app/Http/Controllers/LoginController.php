<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function authenticate (Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');
    $user = User::where('email', $email)->first();

    if (!$user) {
        return response()->json(['message' => 'Email salah'], 422);
    }

    if (!Hash::check($password, $user->password)) {
        return response()->json(['message' => 'Password salah'], 422);
    }

    return response()->json(['message' => 'Berhasil login'], 200);
    }
}
