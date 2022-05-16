@extends('layout.app')

@section('title', 'Lipyum - Gizlilik Politikası')

@section('header-page-class', 'page-banner')
@section('header-content-class', 'services')

@section('header-top-content')
    @include('elements.headers.top-content.privacy-policy')
@endsection


@section('content')
    @include('elements.sections.privacy-policy')
@endsection
