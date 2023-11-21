<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UpdateData extends Controller
{
    public function createUser() {
        $user = New User;
        $user->name = fake()->name();
        $user->email = fake()->unique()->safeEmail();
        $user->password = Hash::make('password');
        $user->remember_token = Str::random(10);
        $user->email_verified_at = now();
        $user->save();
        return $user;
    }
}
