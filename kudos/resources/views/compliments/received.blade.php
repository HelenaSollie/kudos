<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KUDOS</title>

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
        }

        .compliment {

            width: 80%;
            margin-left: 10%;
            text-align: center;
            background-color: #c7254e;
            color: white;
            font-size: 1.2em;
            margin-top: 20px;
        }

    </style>

</head>
<body>

@include('partials/header')

    <div class="compliments">

    <h2>All those compliment that were shared today ... </h2>

    @foreach($compliments as $c)

        <div class="compliment">

        <p>{{$c->body}}</p>

        </div>

    @endforeach
    </div>


@include('partials/footer')

</body>
</html>