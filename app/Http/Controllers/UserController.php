<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $query = User::query();

        if(Auth::user()['company_id'] != null) {
            $query->where('company_id', Auth::user()['company_id']);
        }

        return $query->get();
    }

    public function store(Request $request) {
        $user = new User();
        $request['password'] = Hash::make($request['password']);
        $user->fill($request->all());
        $user->save();
        return $user;
    }

    public function update(User $user, Request $request) {
        if($request['password'])
            $request['password'] = Hash::make($request['password']);
        
        $user->fill($request->all());
        $user->save();
        return $user;
    }

    public function destroy(User $user, Request $request) {
        $user->delete();
        return $user;
    }
}
