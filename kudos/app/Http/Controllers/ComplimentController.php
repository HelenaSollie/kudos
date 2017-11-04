<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Compliment;

class ComplimentController extends Controller
{
    //
    public function receivedCompliments() {

        $compliments = Compliment::all();
        return view('compliments/received', compact('compliments'));

    }


}
