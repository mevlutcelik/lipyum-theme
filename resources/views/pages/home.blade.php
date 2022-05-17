@extends('layout.app')

@section('title', 'Lipyum')
@section('desc', 'Hizmet veren ya da Hizmet gönderen olun! Kâr ve kazanç elde edin. Nedir ve nasıl işler merak ediyorsanız hemen kaydolun ve iş almaya veya göndermeye başlayın')

@section('header-page-class', 'main-banner')
@section('header-content-class', 'search-form')

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
