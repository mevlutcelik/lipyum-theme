<style>
    .parent-comment {
        overflow-y: hidden;
        overflow-x: auto;
        float: left;
        padding: 0.5rem 4rem;
        display: -webkit-box;
        user-select: none;
    }

    .parent-comment::-webkit-scrollbar {
        width: 0;
        height: 0;
        background: transparent;
    }

    .parent-comment::-webkit-scrollbar-track {
        background: transparent;
    }

    .parent-comment::-webkit-scrollbar-thumb {
        background: transparent;
    }

    .parent-comment::-webkit-scrollbar-thumb:hover {
        background: transparent;
    }

    .customer-comment-card {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: flex-start;
        box-shadow: rgb(99, 99, 99, 0.2) 0px 2px 8px 0px;
        border-radius: 0.5rem;
        padding: 2rem;
        width: 22rem;
        height: fit-content;
        min-height: 13.5rem;
        margin-right: 3rem;
        cursor: context-menu;
    }

    .customer-comment-card-header{
        display: flex;
        align-items: center;
    }

    .customer-comment-card-header img {
        min-width: 3.5rem;
        width: 3.5rem;
        max-width: 3.5rem;
        object-fit: cover;
        height: 3.5rem;
        border-radius: 50%;
    }

    .customer-comment-card-header-content{
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-left: 1rem;
    }

    .customer-comment-card-header .customer-comment-name{
        font-size: 1.125rem;
        font-weight: 500;
        color: #019751;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .customer-comment-card-header .customer-comment-desc{
        color: #7a7a7a;
        font-size: 0.75rem;
        font-weight: 500;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .customer-comment-comment-content{
        margin-top: 1rem;
        font-size: 0.75rem;
        font-weight: 500;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .customer-comment-card:active {
        cursor: grab;
    }

    .customer-comment-card:last-child {
        margin-right: 0;
    }

    @media all and (max-width: 600px) {

        .parent-comment{
            padding: 0;
        }

        .customer-comment-card{
            width: 23rem;
            padding: 0;
        }
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
                                <div style="color:#019751;font-size: 1.25rem;text-align: center;font-weight: 600;">Hakkımızda</div>
                                <h2 style="text-align: center;">Ne Söylediler?</h2>
                            </div>
                        </div>
                        <div class="parent-comment what-they-say">
                            @foreach($comments as $comment)
                                <div class="customer-comment-card">
                                    <div class="customer-comment-card-header">
                                        <img src="{{ isset($comment["image"]) ? $comment["image"] : asset('images/profile-photo.png')  }}" alt="Uğur Çeltik">
                                        <div class="customer-comment-card-header-content">
                                            <div class="stars">
                                                @php $starNum = isset($comment["rating"]) ? $comment["rating"] : 5; @endphp
                                                @for($i = 1; $i <= $starNum; ++$i)
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#ff565b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                    </svg>
                                                @endfor
                                            </div>
                                            <div class="customer-comment-name">{{ isset($comment["name"]) ? $comment["name"] : 'Kullanıcı '.rand(1000000,9999999)  }}</div>
                                            @if(isset($comment["desc"]))
                                                <div class="customer-comment-desc">{{ $comment["desc"] }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="customer-comment-comment-content">{{ isset($comment["comment"]) ? $comment["comment"] : 'Yorum yüklenemedi!' }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    const sliderComment = document.querySelector('.parent-comment');
    let mouseDownComment = false;
    let startXComment, scrollLeftComment;

    let startDraggingComment = function (e) {
        mouseDownComment = true;
        startXComment = e.pageX - sliderComment.offsetLeft;
        scrollLeftComment = sliderComment.scrollLeft;
    };
    let stopDraggingComment = function (event) {
        mouseDownComment = false;
    };

    sliderComment.addEventListener('mousemove', (e) => {
        e.preventDefault();
        if (!mouseDownComment) {
            return;
        }
        const xComment = e.pageX - sliderComment.offsetLeft;
        const scrollComment = xComment - startXComment;
        sliderComment.scrollLeft = scrollLeftComment - scrollComment;
    });

    // Add the event listeners
    sliderComment.addEventListener('mousedown', startDraggingComment, false);
    sliderComment.addEventListener('mouseup', stopDraggingComment, false);
    sliderComment.addEventListener('mouseleave', stopDraggingComment, false);
</script>
