@extends('layout.app')

@section('title', 'Lipyum')

@section('header-top-content')
@include('elements.headers.top-content.home')
@endsection

@section('header-content')
@include('elements.headers.content.home')
@endsection

@section('content')
@include('elements.sections.home.explore-work')
@include('elements.sections.home.whats-trending')
@include('elements.sections.home.contact-us')
@endsection
