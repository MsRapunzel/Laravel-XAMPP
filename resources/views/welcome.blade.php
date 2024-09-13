<!-- resources/views/welcome.blade.php -->

</head>
<title>Laravel App</title>
</head>

@extends('components.page-layout')

@section('content')

<h1 class="header-text">
    This Laravel app was built using v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</h1>
<p class="main-text">
    Hello, world!
</p>
<div class="spacer"></div>

<a class="github-button git-hub-btn" href="https://github.com/MsRapunzel/laravel-xampp/"
    data-color-scheme="no-preference: light; light: light; dark: dark;" data-size="large"
    aria-label="Watch MsRapunzel/laravel-xampp on GitHub">Take a look at my repo</a>

@endsection