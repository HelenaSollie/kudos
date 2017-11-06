

    <style>

        .user {

            display: flex;
            flex-direction: column;
            justify-content: center;

        }

        .user h1 {

            text-transform: uppercase;
            text-decoration: none;
            font-size: 1em;
            color:grey;
            text-align: center;
            margin-top: 50px;
        }

        .user img {

            width: 200px;
            height: auto;
            align-self: center;
            border-radius: 50%;
            margin-bottom: 50px;
            border: 10px solid #7184ff;
        }

        .compli_form {

            width: 50%;
            margin-left: 25%;
            margin-bottom: 100px;

        }

        .compli_form form {

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .compli_form form label p {

            font-size: 1.5em;
            text-align: center;
            color: #7184ff ;

        }

        .compli_form form input {

            width: 100%;
            height: 50px;
            font-size: 1.2em;
            padding: 2%;
        }

        .compli_form form button {

            background-color: #7184ff;
            color: white;
            width: 20%;
            height: 50px;
            margin-top: 50px;
            align-self: center;
            border: 1px solid #7184ff;
            font-size: 1.2em;


        }

    </style>

    @extends('master')

    @section('content')

    <div class="user">

        <h1 >{{$clickeduser->name}}</h1>
        <img  src="{{$clickeduser->avatar}}">

    </div>

    <div class="compli_form">



        <form action="/users/index/{{$clickeduser->id}}" method="post">

            {{ csrf_field() }}

            <label><p>Give this person a compliment!</p></label>

            <input value="{{$clickeduser->id}}" type="hidden" name="receiver">

            <input type="text" name="compliment" placeholder="Hey good-looking ... ">

            <button type="submit">Send</button>

        </form>

    </div>

@endsection

