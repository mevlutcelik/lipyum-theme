@extends('layout.app')

@section('title', 'Lipyum - Çerez Politikası')

@section('header-page-class', 'page-banner')
@section('header-content-class', 'services')

@section('header-top-content')
    @include('elements.headers.top-content.cookie-policy')
@endsection


@section('content')
    @include('elements.sections.cookie-policy')
@endsection
