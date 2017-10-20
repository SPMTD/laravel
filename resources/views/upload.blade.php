<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chofl</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="nav-bar">
            <div class="top-left"></div>
            <div class="title m-b-md">
                Chofl
            </div>
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Profile</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                        <a href="{{ route('upload') }}">Upload</a>
                        @endauth
            </div>
        </div>
    @endif
    <div class="wrapper">
        <div class="upload-content">
            <h1>File Upload</h1>
            <form action="{{ URL::to('uploaded') }}" method="post" enctype="multipart/form-data">
                Title:
                <input type="text" name="title" id="title">
                Select image to upload:
                <input type="file" name="file" id="file">
                <input type="submit" value="Upload" name="submit">
                <input type="hidden" value="{{ csrf_token() }}" name="_token">
            </form>
        </div>
    </div>

</div>
</body>
</html>
