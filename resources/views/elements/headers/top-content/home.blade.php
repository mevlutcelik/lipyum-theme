<div class="col-lg-12">
    <div class="header-text">
        <h6 style="line-height: 1.5">Sektörünüz Hiç Fark Etmiyor!<br/>Potansiyel Müşterilere İhtiyacın Varsa,</h6>
        <h2><em>Lipyum</em> Yanında!</h2>
        <div class="white-button">
            <a href="#customer-support" id="customer-support" data-tel="08503088170" style="font-weight: 500;font-size: 1rem;display: inline-flex;align-items: center;">
                <svg style="width: 1.5rem;height: 1.5rem;margin-right: 1rem;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16"> <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"></path> </svg>
                <div style="display: flex;flex-direction: column;justify-content: center;">
                    <span style="font-size: 0.75rem">0 (850) 308 8170</span>
                    <span>Müşteri Desteği</span>
                </div>
            </a>
        </div>
    </div>
</div>
<script>
    $(document).on('click', '#customer-support', function (e){
        e.preventDefault();
        let tel = $(this).attr('data-tel');
        window.location.href = 'tel:' + tel;
    });
</script>
