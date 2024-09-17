@php
    $pageTitle = "Profile";
@endphp

</head>
<title>{{$pageTitle}}</title>
</head>

@extends('components.page-layout')

@section('content')
<h1 class="header-text">
    User ID: {{ $id }}
</h1>
<p class="main-text">
    {{ config('app.warningDevelopmentStage') }}
</p>
@endsection