<body>
    <h1>Create new user</h1>
        {!! Form::open(['url' => 'users']) !!}
        {!! Form::text('firstname', 'voornaam') !!}
        <span>{{ $errors ->first('firstname') }}</span>
        {!! Form::submit() !!}
        {!! Form::close() !!}
</body>