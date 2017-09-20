<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chofl</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Style -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>
</html>
<body>
    <div class="create-form full-height content">
        <h1>Create new user</h1>
        {!! Form::open(['url' => 'users']) !!}
        {!! Form::text('name', ['placeholder' => 'Username']) !!}
        <span>{{ $errors ->first('username') }}</span>
        {!! Form::password('password', 'password') !!}
        <span>{{ $errors ->first('password') }}</span>
        {!! Form::email('email', 'email') !!}
        <span>{{ $errors ->first('email') }}</span>
        {!! Form::submit() !!}
        {!! Form::close() !!}
    </div>
</body>