<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function index() {

        $users = User::all();
        return view('users/index', compact('users'));
    }

    public function getUser($id) {

        $clickeduser = User::find($id);
        return view('users/user', compact('clickeduser'));

    }
}
