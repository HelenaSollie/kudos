
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KUDOS</title>


    <style>

        .users {

            display: flex;
            flex-direction: row;
            justify-content: space-around;
            width: 70%;
            margin-left: 15%;
            margin-top: 50px;
            margin-bottom: 100px;
        }

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
        }

        .user img {

            width: 200px;
            height: auto;
        }



    </style>
</head>
<body>

@include('partials/header')

<div class="users">

    @foreach($users as $u)

        <div class="user">

            <h1 >{{$u->name}}</h1>

            <a href="/users/index/{{$u->id}}">
                <img  src="{{$u->avatar}}">
            </a>

        </div>
    @endforeach

</div>

@include('partials/footer')

</body>
</html>