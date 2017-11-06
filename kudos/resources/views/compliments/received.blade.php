<style>

        .compliments {

            width: 70%;
            margin-left: 15%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 50px;
        }

        .compliments h2 {

            align-self: center;
            color: #7184ff;
            margin-bottom: 50px;
        }

        .compliment {

            width: 100%;
            text-align: center;
            border: 1px solid #7184ff ;
            color: #7184ff;
            font-size: 1.2em;

            margin-bottom: 50px;
        }

</style>

@extends('master')
@section('content')

    <div class="compliments">

    <h2>Wow... Look at your compliments! </h2>



    @foreach($compliments as $c)

        <div class="compliment">


        <p>{{$c->body}}</p>

        </div>

    @endforeach
    </div>

@endsection

