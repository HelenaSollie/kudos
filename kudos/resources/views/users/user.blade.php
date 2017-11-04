<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KUDOS</title>
</head>
<body>

@include('partials/header')

    {{ Form::open(array('url' => 'foo/bar')) }}

    echo Form::label('email', 'E-Mail Address');


    {{ Form::close() }}

@include('partials/footer')

</body>
</html>