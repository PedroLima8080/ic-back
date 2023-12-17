<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return User::all();
    }

    public function store(Request $request) {
        $user = new User();
        $user->fill($request->all());
        $user->save();
        return $user;
    }

    public function update(User $user, Request $request) {
        $user->fill($request->all());
        $user->save();
        return $user;
    }

    public function destroy(User $user, Request $request) {
        $user->delete();
        return $user;
    }
}
