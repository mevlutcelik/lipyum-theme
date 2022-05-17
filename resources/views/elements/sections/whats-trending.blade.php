<section class="whats-trending" style="margin: 5rem 3rem;">
    <div class="container expanded">
        <div class="row">
            <div id="trending-main-content" class="col-md-12 col-lg-8 align-self-center">
                <div class="section-heading">
                    <h2>Lipyum - Potansiyel<br><em>Müşteri Platformu</em></h2>
                </div>
                <div class="left-content">
                    <p>İşletmenize potansiyel müşteri bulmakta zorlanıyor veya kapasitenizi doldurmakta zorlanıyorsanız, Lipyum yanınızda. Hangi sektörden hangi nitelikte müşteri arıyorsanız size temin edelim. Detaylı bilgi için formu doldurun veya hafta içi 09:00 - 18:00 saatleri arasında bizi arayın.</p>
                    <div class="primary-button">
                        <a href="#">Üye Ol</a>
                        <a href="#">Giriş yap</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" style="text-align: right;">
                <div class="right-image">
                    <div class="thumb">
                        <div class="hover-effect">
                            <div class="inner-content">
                                <h4><a href="#">Lipyum</a></h4>
                                @php $randNum = rand(10000,50000); @endphp
                                <span>Bu hafta {{ substr($randNum, 0, 2) }}.{{ substr($randNum, 2, 3) }} hizmet verildi.</span>
                            </div>
                        </div>
                        <img style="height: 27rem;width:22rem;object-fit: cover;" src="{{ asset('images/photo-1535223289827-42f1e9919769.avif') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
