
<style>

        .users {

            display: flex;
            flex-direction: row;
            justify-content: center;
            flex-wrap: wrap;
            width: 70%;
            margin-left: 15%;
            margin-top: 50px;
            margin-bottom: 100px;
        }

        .user {

            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 50px;
            margin-left: 5%;

        }

        .user h1 {

            text-transform: uppercase;
            text-decoration: none;
            font-size: 1em;
            color:grey;
            text-align: center;
        }

        .user img {

            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 20px solid #7184ff;
        }



    </style>

@extends('master')

@section('content')

<div class="users">

    @foreach($users as $u)

        <div class="user">

            <h1 >{{$u->name}}</h1>

            <a href="/users/{{$u->id}}">
                <img  src="{{$u->avatar}}">
            </a>

        </div>
    @endforeach

</div>

@endsection