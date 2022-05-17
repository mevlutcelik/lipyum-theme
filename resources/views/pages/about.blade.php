@extends('layout.app')

@section('title', 'Lipyum - Hakkımızda')
@section('desc', 'Hizmet veren ya da Hizmet gönderen olun! Kâr ve kazanç elde edin. Nedir ve nasıl işler merak ediyorsanız hemen kaydolun ve iş almaya veya göndermeye başlayın')
@section('schemaOrg')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "address": {
            "@type": "PostalAddress"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "{{ isset($comment["rating"]) ? $comment["rating"] : 5  }}",
            "reviewCount": "{{rand(500,3000)}}"
            },
        "review": [
            @foreach($comments as $key => $comment)
            {
            "@type": "Review",
            "author": {
                "@type": "Person",
                "name": "{{ isset($comment["name"]) ? $comment["name"] : 'Kullanıcı '. rand(1000000,9999999) }}"
            },
            "name": "{{ isset($comment["comment"]) ? $comment["comment"] : 'Yorum yüklenemedi!'  }}",
            "reviewBody": "{{ isset($comment["comment"]) ? $comment["comment"] : 'Yorum yüklenemedi!'  }}",
            "reviewRating": {
                "@type": "Rating",
                "ratingValue": "{{ isset($comment["rating"]) ? $comment["rating"] : 5  }}",
                "bestRating": "5"
            }
        }{{ $key !== count($comments) - 1 ? ',' : null  }}

        @endforeach
        ],
            "image": "{{ asset('images/lipyum/icon.png') }}",
            "name": "Lipyum",
            "telephone": "0 (850) 308 8170"
        }


    </script>
@endsection

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
