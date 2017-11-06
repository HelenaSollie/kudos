<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Compliment;

class UserController extends Controller
{

    public function index() {

        $users = User::all();
        return view('users/index', compact('users'));
    }

    public function getUser($id) {

        $clickeduser = User::find($id);

        $compliment = Compliment::all();

        return view('users/user', compact('clickeduser', 'compliment'));


    }

    public function profile() {

        $user = User::find(35);
        return view('home/profile', compact('user'));

    }
}
