<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Compliment;
use App\User;

class ComplimentController extends Controller
{
    //
    public function receivedCompliments() {

        $compliments = Compliment::all()->where('ontvanger_id', 7);
        return view('compliments/received', compact('compliments'));

    }

    public function givenCompliments() {

        $compliments = Compliment::all()->where('zender_id', 7);
        return view('compliments/given', compact('compliments'));

    }
    public function create()
    {
        $loggedUser = 7;

        $compliment = new Compliment();
        $compliment->zender_id = $loggedUser;
        $compliment->body = $_REQUEST['compliment'];
        $compliment->ontvanger_id =$_REQUEST['receiver'];
        $compliment->save();

        return redirect('/compliments/given' );


    }


}
