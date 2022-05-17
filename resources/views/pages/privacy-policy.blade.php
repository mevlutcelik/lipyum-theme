@extends('layout.app')

@section('title', 'Lipyum - Gizlilik Politikası')
@section('desc', 'Hizmet veren ya da Hizmet gönderen olun! Kâr ve kazanç elde edin. Nedir ve nasıl işler merak ediyorsanız hemen kaydolun ve iş almaya veya göndermeye başlayın')
@section('schemaOrg')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "address": {
    "@type": "PostalAddress"
  },
  "image": "{{ asset('images/lipyum/icon.png') }}",
  "name": "Lipyum",
  "telephone": "0 (850) 308 8170"
}
</script>
@endsection

@section('header-page-class', 'page-banner')
@section('header-content-class', 'services')

@section('header-top-content')
    @include('elements.headers.top-content.privacy-policy')
@endsection


@section('content')
    @include('elements.sections.privacy-policy')
@endsection
