<!DOCTYPE html>
<html lang="tr-TR">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">

    <title>@yield('title', 'Lipyum')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-572-designer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

</head>

<body>

<div class="loader">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px"
         width="34px" height="40px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
      <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
          <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.8s"
                   repeatCount="indefinite"/>
          <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.8s"
                   repeatCount="indefinite"/>
          <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.8s"
                   repeatCount="indefinite"/>
      </rect>
        <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.8s"
                     repeatCount="indefinite"/>
            <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.8s"
                     repeatCount="indefinite"/>
            <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.8s"
                     repeatCount="indefinite"/>
        </rect>
        <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.8s"
                     repeatCount="indefinite"/>
            <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.8s"
                     repeatCount="indefinite"/>
            <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.8s"
                     repeatCount="indefinite"/>
        </rect>
    </svg>
</div>

@include('elements.nav')
@include('elements.header')
@yield('content')
@include('elements.footer')

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/isotope.min.js') }}"></script>
<script src="{{ asset('js/owl-carousel.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/tabs.js') }}"></script>
<script src="{{ asset('js/popup.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    setTimeout(function () {
        $('.loader').fadeToggle();
    }, 1500);

    $("a[href='#top']").click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });

    $('#owl-what-they-say').owlCarousel({
        items: 2,
        loop: true,
        dots: false,
        nav: false,
        autoplay: true,
        margin: 32,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2
            },
            1200: {
                items: 3
            },
            1600: {
                items: 4
            }
        }
    })

    const ele = $('#customer-logo');
    ele.scrollTop = 100;
    ele.scrollLeft = 150;

    const mouseMoveHandler = function (e) {
        // How far the mouse has been moved
        const dx = e.clientX - pos.x;
        const dy = e.clientY - pos.y;

        // Scroll the element
        ele.scrollTop = pos.top - dy;
        ele.scrollLeft = pos.left - dx;
    };

    const mouseUpHandler = function () {
        document.removeEventListener('mousemove', mouseMoveHandler);
        document.removeEventListener('mouseup', mouseUpHandler);

        ele.style.cursor = 'grab';
        ele.style.removeProperty('user-select');
    };


</script>

</body>
</html>
