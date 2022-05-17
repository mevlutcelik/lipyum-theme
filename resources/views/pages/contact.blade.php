@extends('layout.app')

@section('title', 'Lipyum - İletişim')
@section('desc', 'Hizmet veren ya da Hizmet gönderen olun! Kâr ve kazanç elde edin. Nedir ve nasıl işler merak ediyorsanız hemen kaydolun ve iş almaya veya göndermeye başlayın')

@section('header-page-class', 'page-banner')
@section('header-content-class', 'services')
@section('contact-style', 'background: #fff;')

@section('header-top-content')
    @include('elements.headers.top-content.contact')
    @endsection



@section('content')
    @include('elements.sections.contact-us')
@endsection
