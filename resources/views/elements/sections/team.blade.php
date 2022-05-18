<style>
    .parent-team {
        overflow-y: hidden;
        overflow-x: auto;
        float: left;
        padding: 0.5rem 4rem;
        display: -webkit-box;
        user-select: none;
    }

    .parent-team::-webkit-scrollbar {
        width: 0;
        height: 0;
        background: transparent;
    }

    .parent-team::-webkit-scrollbar-track {
        background: transparent;
    }

    .parent-team::-webkit-scrollbar-thumb {
        background: transparent;
    }

    .parent-team::-webkit-scrollbar-thumb:hover {
        background: transparent;
    }

    .parent-child-team {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .customer-team-card {
        float: left;
        font-size: 14px;
        padding: 1rem;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        margin-right: 3rem;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        border-radius: 0.5rem;
        cursor: context-menu;
    }

    .customer-team-card a {
        margin: 1rem 1rem 0 0;
        cursor: pointer;
        background-color: #0a53be;
        border-radius: 0.25rem;
        width: 1.5rem;
        height: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .customer-team-card a:last-child {
        margin-right: 0;
    }

    .customer-team-card a svg {
        width: 0.875rem;
        height: 0.875rem;
        fill: #fff;
    }

    a.linkedin {
        background-color: #0A66C2;
    }

    a.instagram {
        background-color: #E4405F;
    }

    a.twitter {
        background-color: #1DA1F2;
    }

    a.facebook{
        background-color: #1877F2;
    }

    .customer-team-card img {
        height: 10rem;
        width: auto;
        min-width: 10rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
        object-fit: cover;
    }

    .customer-team-card .item-text-team {
        font-size: 1rem;
        font-weight: 500;
        display: flex;
        align-items: center;
        width: max-content;
        justify-content: center;
    }

    .customer-team-card .item-p-team {
        font-size: 0.75rem;
        font-weight: 400;
        display: flex;
        margin-top: 0.5rem;
        align-items: center;
        width: max-content;
        justify-content: center;
    }

    .customer-team-card:active {
        cursor: grab;
    }

    .customer-team-card:last-child {
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
                                <div style="color:#019751;font-size: 1.25rem;text-align: center;font-weight: 600;">Lipyum</div>
                                <h2 style="text-align: center;">Ekibimiz</h2>
                            </div>
                        </div>
                        <div class="parent-team">
                            <div class="parent-child-team">
                                <div class="customer-team-card">
                                    <img
                                        src="{{ asset('images/lipyum/denizkanerdogan.webp') }}"
                                        alt="Denizkan ERDOĞAN">
                                    <div class="item-text-team">
                                        Denizkan ERDOĞAN
                                    </div>
                                    <div class="item-p-team">
                                        CEO
                                    </div>
                                    <div style="display: flex;align-items: center;justify-content: center;">
                                        <a class="linkedin" href="https://www.linkedin.com/in/denizkan-erdo%C4%9Fan">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                                        </a>
                                        <a class="twitter" href="https://twitter.com/denizkanerdogan">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                                        </a>
                                        <a class="instagram" href="https://www.instagram.com/denizkanerdogan/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="customer-team-card">
                                    <img
                                        src="{{ asset('images/lipyum/fatihozpolat.webp') }}"
                                        alt="Fatih ÖZPOLAT">
                                    <div class="item-text-team">
                                        Fatih ÖZPOLAT
                                    </div>
                                    <div class="item-p-team">
                                        Software Developer
                                    </div>
                                    <div style="display: flex;align-items: center;justify-content: center;">
                                        <a class="linkedin" href="https://www.linkedin.com/in/fatihozpolat">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="customer-team-card">
                                    <img
                                        src="{{ asset('images/lipyum/handeyilmaz.jpg') }}"
                                        alt="Çiğdem Hande YILMAZ">
                                    <div class="item-text-team">
                                        Çiğdem Hande YILMAZ
                                    </div>
                                    <div class="item-p-team">
                                        Administrative Assistant
                                    </div>
                                    <div style="display: flex;align-items: center;justify-content: center;">
                                        <a class="linkedin" href="https://linkedin.com/in/hande-y%C4%B1lmaz-a187491ab">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="customer-team-card">
                                    <img
                                        src="{{ asset('images/lipyum/mustafaakkoca.jpg') }}"
                                        alt="M. Mustafa AKKOCA">
                                    <div class="item-text-team">
                                        M. Mustafa AKKOCA
                                    </div>
                                    <div class="item-p-team">
                                        Advertising Management
                                    </div>
                                    <div style="display: flex;align-items: center;justify-content: center;">
                                        <a class="linkedin" href="https://www.linkedin.com/in/mustafa-akkoca/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                                        </a>
                                        <a class="instagram" href="https://www.instagram.com/mustafa_akkoca44/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                        </a>
                                        <a class="facebook" href="https://www.facebook.com/MustafaAkkoca44">
                                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="customer-team-card">
                                    <img
                                        src="{{ asset('images/lipyum/marwahkahil.webp') }}"
                                        alt="Marwah KAHİL">
                                    <div class="item-text-team">
                                        Marwah KAHİL
                                    </div>
                                    <div class="item-p-team">
                                        Human Resources
                                    </div>
                                    <div style="display: flex;align-items: center;justify-content: center;">
                                        <a class="linkedin" href="https://www.linkedin.com/in/marwah-kahil">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="customer-team-card">
                                    <img
                                        src="{{ asset('images/lipyum/fundasen.jpg') }}"
                                        alt="Funda ŞEN">
                                    <div class="item-text-team">
                                        Funda ŞEN
                                    </div>
                                    <div class="item-p-team">
                                        Technical Support
                                    </div>
                                    <div style="display: flex;align-items: center;justify-content: center;">
                                        <a class="instagram" href="https://www.instagram.com/fundda.a/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="customer-team-card">
                                    <img
                                        src="{{ asset('images/lipyum/ardagunsoren.jpg') }}"
                                        alt="Arda GÜNSÜREN">
                                    <div class="item-text-team">
                                        Arda GÜNSÜREN
                                    </div>
                                    <div class="item-p-team">
                                        Software Delevoper
                                    </div>
                                    <div style="display: flex;align-items: center;justify-content: center;">
                                        <a class="linkedin" href="https://www.linkedin.com/in/ardagunsuren/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z"/></svg>
                                        </a>
                                        <a class="instagram" href="https://www.instagram.com/ardagunsuren/">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const sliderTeam = document.querySelector('.parent-team');
    let mouseDownTeam = false;
    let startXTeam, scrollLeftTeam;

    let startDraggingTeam = function (e) {
        mouseDownTeam = true;
        startXTeam = e.pageX - sliderTeam.offsetLeft;
        scrollLeftTeam = sliderTeam.scrollLeft;
    };
    let stopDraggingTeam = function (event) {
        mouseDownTeam = false;
    };

    sliderTeam.addEventListener('mousemove', (e) => {
        e.preventDefault();
        if (!mouseDownTeam) {
            return;
        }
        const xTeam = e.pageX - sliderTeam.offsetLeft;
        const scrollTeam = xTeam - startXTeam;
        sliderTeam.scrollLeft = scrollLeftTeam - scrollTeam;
    });

    // Add the event listeners
    sliderTeam.addEventListener('mousedown', startDraggingTeam, false);
    sliderTeam.addEventListener('mouseup', stopDraggingTeam, false);
    sliderTeam.addEventListener('mouseleave', stopDraggingTeam, false);
</script>
