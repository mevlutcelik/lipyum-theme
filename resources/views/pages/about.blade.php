@extends('layout.app')

@section('title', 'Lipyum - Hakkımızda')

@section('header-page-class', 'page-banner')
@section('header-content-class', 'services')

@section('header-top-content')
    @include('elements.headers.top-content.about')
@endsection

@section('header-content')
    @include('elements.headers.content.about')
@endsection

@section('content')
    @include('elements.sections.FAQ')
    @include('elements.sections.comments')
    @include('elements.sections.team')
    @include('elements.sections.contact-us')
@endsection
