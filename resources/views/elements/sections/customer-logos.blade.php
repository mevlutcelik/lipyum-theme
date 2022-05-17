<style>
    .parent {
        overflow-y: hidden;
        overflow-x: auto;
        float: left;
        padding: 0.5rem 4rem;
        display: -webkit-box;
        user-select: none;
    }

    .parent::-webkit-scrollbar {
        width: 0;
        height: 0;
        background: transparent;
    }

    .parent::-webkit-scrollbar-track {
        background: transparent;
    }

    .parent::-webkit-scrollbar-thumb {
        background: transparent;
    }

    .parent::-webkit-scrollbar-thumb:hover {
        background: transparent;
    }

    .parent-child {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .customer-card {
        float: left;
        font-size: 14px;
        padding: 0.5rem;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        margin-right: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.5rem;
        cursor: pointer;
        color: #1a1e21;
        transition: all 0.3s;
    }

    .customer-card:active{
        box-shadow: none;
    }

    .customer-card img {
        height: 2rem;
        width: auto;
        min-width: 2rem;
        border-radius: 0.25rem;
    }

    .customer-card .item-text {
        font-size: 0.875rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        width: max-content;
        justify-content: center;
    }

    .customer-card:active {
        cursor: grab;
    }

    .customer-card:last-child {
        margin-right: 0;
    }
</style>
<section style="margin: 15rem 0;">
    <div class="container expanded">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonials">
                    <div class="row">
                        <div class="section-heading">
                            <div class="section-heading">
                                <div style="color:#019751;font-size: 1.25rem;text-align: center;font-weight: 600;">Üst Başlık</div>
                                <h2 style="text-align: center;">Müşterilerimiz</h2>
                            </div>
                        </div>
                        <div class="parent">
                            <div class="parent-child">
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://www.freeiconspng.com/uploads/facebook-text-logo-transparent-10.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Google_Meet_text_logo_%282020%29.svg/2560px-Google_Meet_text_logo_%282020%29.svg.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://www.freepnglogos.com/uploads/netflix-logo-text-emblem-31.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://vehlogo.com/wp-content/uploads/2021/03/lamborghini_text_logo.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://www.mobiltel.com.tr/wp-content/uploads/2021/09/samsung-logo-png-samsung-logo-png-2104.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://png.monster/wp-content/uploads/2020/11/Instagram-Logo-1f59e501.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://www.freeiconspng.com/uploads/facebook-text-logo-transparent-10.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Google_Meet_text_logo_%282020%29.svg/2560px-Google_Meet_text_logo_%282020%29.svg.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://www.freepnglogos.com/uploads/netflix-logo-text-emblem-31.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://vehlogo.com/wp-content/uploads/2021/03/lamborghini_text_logo.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://www.mobiltel.com.tr/wp-content/uploads/2021/09/samsung-logo-png-samsung-logo-png-2104.png" alt="Şirket Adı">
                                </a>
                                <a href="#!" class="customer-card">
                                    <img
                                        src="https://png.monster/wp-content/uploads/2020/11/Instagram-Logo-1f59e501.png" alt="Şirket Adı">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const slider = document.querySelector('.parent');
    let mouseDown = false;
    let startX, scrollLeft;

    let startDragging = function (e) {
        mouseDown = true;
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    };
    let stopDragging = function (event) {
        mouseDown = false;
    };

    slider.addEventListener('mousemove', (e) => {
        e.preventDefault();
        if (!mouseDown) {
            return;
        }
        const x = e.pageX - slider.offsetLeft;
        const scroll = x - startX;
        slider.scrollLeft = scrollLeft - scroll;
    });

    // Add the event listeners
    slider.addEventListener('mousedown', startDragging, false);
    slider.addEventListener('mouseup', stopDragging, false);
    slider.addEventListener('mouseleave', stopDragging, false);
</script>
