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

    .parent-child-comment {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .customer-comment-card {
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
    .customer-comment-card:active {
        cursor: grab;
    }

    .customer-comment-card:last-child {
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
                            <h2 style="color:#7c47bf;margin-left: 3rem;">YORUMLAR</h2>
                        </div>
                        <div class="parent-comment">
                            <div class="parent-child-comment">
                                <div class="customer-comment-card">
                                    <div class="item testimonial-item">
                                        <img class="float-start" src="assets/images/" alt="">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" fill="currentColor" class="bi bi-chat-quote" viewBox="0 0 16 16">
                                                <path class="icon" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"></path>
                                                <path class="icon" d="M7.066 6.76A1.665 1.665 0 0 0 4 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 7.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 0 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"></path>
                                            </svg>
                                        </div>
                                        <h4>Sophia Loren</h4>
                                        <span>Chief Designer</span>
                                        <ul>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#ff565b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#ff565b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                            </li>
                                            <li>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#ff565b" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                </svg>
                                            </li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet zogut commodo viverra maecenas nsectetur
                                            adipiscing, eiusmod tempor labore et dolore.</p>
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

    sliderTeam.addEventListener('mousemove', (e) => {
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
