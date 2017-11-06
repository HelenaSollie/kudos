<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!-- CSS Styling -->
    <link rel="stylesheet" href="/Users/Helena/kudos/kudos/public/css/reset.css" type="text/css"/>
    <link rel="stylesheet" href="/Users/Helena/kudos/kudos/public/css/main.css" type="text/css"/>

    <title>Kudos</title>

    <style>

        body {

            width: 60%;
            margin-left: 20%;
            font-family: 'Lato', sans-serif;
        }
    </style>

</head>
<body>

    @include('partials/header')
    Kudos
    @yield('content')

    @include('partials/footer')

</body>
</html>