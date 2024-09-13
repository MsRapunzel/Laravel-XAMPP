<!-- resources/views/login.blade.php -->

@php
    $pageTitle = "Log In";
@endphp

</head>
<title>{{$pageTitle}}</title>
</head>

@extends('components.page-layout')

@section('content')
<h1 class="header-text">
    Welcome to the {{$pageTitle}} Page!
</h1>
<p class="main-text">
    {{ config('app.warningDevelopmentStage') }}
</p>
@endsection