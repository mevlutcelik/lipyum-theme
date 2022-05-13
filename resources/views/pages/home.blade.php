@extends('layout.app')

@section('title', 'Lipyum')

@section('header-top-content')
    @include('elements.headers.top-content.home')
@endsection

@section('header-content')
    @include('elements.headers.content.home')
@endsection

@section('content')
    @include('elements.sections.whats-trending')
    @include('elements.sections.customer-logos')
    @include('elements.sections.comments')
    @include('elements.sections.team')
    @include('elements.sections.contact-us')
@endsection
