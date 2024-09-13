<!-- resources/views/contact.blade.php -->

@php
    $pageTitle = "Contact Us";
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