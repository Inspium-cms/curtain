@extends('frontend.layouts.app')

@section('title', 'About Us')
@section('header_img')
<img class="header-img" src="{{ asset('frontend/images/franchise-bg.jpg') }}" style="width: 100% !important;" alt="">
@endsection
@section('hero')
<div class="page-title-section m-auto">
    <div class="breadcrumbs">
        <a class="text-white" href="/">Home </a>
        <i class="bi bi-arrow-right"></i>
        <a class="text-white" href="/appointments" class="active">About</a>
    </div>
    <h1 class="text-white NewKansas-medium">About Us</h1>
</div>
@endsection
@section('content')

@endsection