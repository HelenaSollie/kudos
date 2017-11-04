<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KUDOS</title>

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
            color: #8a6d3b ;

        }

        .compli_form form input {

            width: 100%;
            height: 50px;
            font-size: 1.2em;
            padding: 2%;
        }

        .compli_form form button {

            background-color: #8a6d3b;
            color: white;
            width: 20%;
            height: 50px;
            margin-top: 50px;
            align-self: center;


        }

    </style>
</head>


<body>

@include('partials/header')

    <div class="user">

        <h1 >{{$clickeduser->name}}</h1>
        <img  src="{{$clickeduser->avatar}}">

    </div>

    <div class="compli_form">

        <form action="" method="post">

            <label><p>Give this person a compliment!</p></label>
            <input value="{{$clickeduser->id}}" type="hidden">
            <input type="text" name="text" placeholder="Hey good-looking ... ">
            <button type="submit">Send</button>

        </form>

    </div>

@include('partials/footer')

</body>
</html>