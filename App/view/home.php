<?php include 'includes/header.php'; ?>

<div class="container mt-2">
    <div class="row">

        <!-- search card -->
        <div class="col-md-3 d-none d-md-block">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle mb-3"
                        height="80" alt="Avatar" loading="lazy" />
                    <h5 class="card-title">Your Name</h5>
                    <p class="text-muted">@username</p>
                    <button class="btn btn-primary btn-sm">View Profile</button>
                </div>
            </div>
        </div>

        <!-- main -->
        <div class="col-md-6">
            <div class="px-0">
                <div class="card shadow-0 mb-2">
                    <div class="card-body border pb-2">
                        <div class="d-flex">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle"
                                height="50" alt="Avatar" loading="lazy" />
                            <div class="d-flex align-items-center w-100 ps-3">
                                <div class="w-100">
                                    <input type="text" id="form143" class="form-control form-status border-0 py-1 px-0"
                                        placeholder="What's happening" />
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <ul class="list-unstyled d-flex flex-row ps-3 pt-3" style="margin-left: 50px;">
                                <li>
                                    <a href="#"><i class="far fa-image pe-2"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-photo-video px-2"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-chart-bar px-2"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="far fa-smile px-2"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="far fa-calendar-check px-2"></i></a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center">
                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-primary btn-rounded">Tweet</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- postes -->
                <div class="overflow-scroll postes border-top rounded-3" style="max-height: 400px; overflow-y: scroll;">
                    <style>
                        .postes::-webkit-scrollbar {
                            display: none;
                        }

                        .postes {
                            scrollbar-width: none;
                            -ms-overflow-style: none;
                        }
                    </style>

                    <div class="d-flex p-3 border mb-1">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (29).webp" class="rounded-circle"
                            height="50" alt="Avatar" loading="lazy" />
                        <div class="d-flex w-100 ps-3">
                            <div>
                                <a href="">
                                    <h6 class="text-body">
                                        Miley Cyrus
                                        <span class="small text-muted font-weight-normal">@mileycyrus</span>
                                        <span class="small text-muted font-weight-normal"> • </span>
                                        <span class="small text-muted font-weight-normal">2h</span>
                                        <span><i class="fas fa-angle-down float-end"></i></span>
                                    </h6>
                                </a>
                                <p style="line-height: 1.2;">
                                    Lorem ipsum dolor, sit amet <a href="">#consectetur</a> adipisicing elit.
                                    Nobis assumenda eveniet ipsum libero mollitia vero doloremque
                                    <a href="">#perspiciatis</a> molestiae omnis, quam iure dicta reprehenderit
                                    distinctio facere labore atque, sit <a href="">#ratione</a> quo.
                                </p>
                                <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                                    <li>
                                        <i class="far fa-comment"></i>
                                    </li>
                                    <li><i class="fas fa-retweet"></i><span class="small ps-2">7</span></li>
                                    <li><i class="far fa-heart"></i><span class="small ps-2">35</span></li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex p-3 border mb-1">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (29).webp" class="rounded-circle"
                            height="50" alt="Avatar" loading="lazy" />
                        <div class="d-flex w-100 ps-3">
                            <div>
                                <a href="">
                                    <h6 class="text-body">
                                        Miley Cyrus
                                        <span class="small text-muted font-weight-normal">@mileycyrus</span>
                                        <span class="small text-muted font-weight-normal"> • </span>
                                        <span class="small text-muted font-weight-normal">2h</span>
                                        <span><i class="fas fa-angle-down float-end"></i></span>
                                    </h6>
                                </a>
                                <p style="line-height: 1.2;">
                                    Lorem ipsum dolor, sit amet <a href="">#consectetur</a> adipisicing elit.
                                    Nobis assumenda eveniet ipsum libero mollitia vero doloremque
                                    <a href="">#perspiciatis</a> molestiae omnis, quam iure dicta reprehenderit
                                    distinctio facere labore atque, sit <a href="">#ratione</a> quo.
                                </p>
                                <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                                    <li>
                                        <i class="far fa-comment"></i>
                                    </li>
                                    <li><i class="fas fa-retweet"></i><span class="small ps-2">7</span></li>
                                    <li><i class="far fa-heart"></i><span class="small ps-2">35</span></li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex p-3 border mb-1">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (29).webp" class="rounded-circle"
                            height="50" alt="Avatar" loading="lazy" />
                        <div class="d-flex w-100 ps-3">
                            <div>
                                <a href="">
                                    <h6 class="text-body">
                                        Miley Cyrus
                                        <span class="small text-muted font-weight-normal">@mileycyrus</span>
                                        <span class="small text-muted font-weight-normal"> • </span>
                                        <span class="small text-muted font-weight-normal">2h</span>
                                        <span><i class="fas fa-angle-down float-end"></i></span>
                                    </h6>
                                </a>
                                <p style="line-height: 1.2;">
                                    Lorem ipsum dolor, sit amet <a href="">#consectetur</a> adipisicing elit.
                                    Nobis assumenda eveniet ipsum libero mollitia vero doloremque
                                    <a href="">#perspiciatis</a> molestiae omnis, quam iure dicta reprehenderit
                                    distinctio facere labore atque, sit <a href="">#ratione</a> quo.
                                </p>
                                <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                                    <li>
                                        <i class="far fa-comment"></i>
                                    </li>
                                    <li><i class="fas fa-retweet"></i><span class="small ps-2">7</span></li>
                                    <li><i class="far fa-heart"></i><span class="small ps-2">35</span></li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex p-3 border mb-1">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (29).webp" class="rounded-circle"
                            height="50" alt="Avatar" loading="lazy" />
                        <div class="d-flex w-100 ps-3">
                            <div>
                                <a href="">
                                    <h6 class="text-body">
                                        Miley Cyrus
                                        <span class="small text-muted font-weight-normal">@mileycyrus</span>
                                        <span class="small text-muted font-weight-normal"> • </span>
                                        <span class="small text-muted font-weight-normal">2h</span>
                                        <span><i class="fas fa-angle-down float-end"></i></span>
                                    </h6>
                                </a>
                                <p style="line-height: 1.2;">
                                    Lorem ipsum dolor, sit amet <a href="">#consectetur</a> adipisicing elit.
                                    Nobis assumenda eveniet ipsum libero mollitia vero doloremque
                                    <a href="">#perspiciatis</a> molestiae omnis, quam iure dicta reprehenderit
                                    distinctio facere labore atque, sit <a href="">#ratione</a> quo.
                                </p>
                                <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                                    <li>
                                        <i class="far fa-comment"></i>
                                    </li>
                                    <li><i class="fas fa-retweet"></i><span class="small ps-2">7</span></li>
                                    <li><i class="far fa-heart"></i><span class="small ps-2">35</span></li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex p-3 border mb-1">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (29).webp" class="rounded-circle"
                            height="50" alt="Avatar" loading="lazy" />
                        <div class="d-flex w-100 ps-3">
                            <div>
                                <a href="">
                                    <h6 class="text-body">
                                        Miley Cyrus
                                        <span class="small text-muted font-weight-normal">@mileycyrus</span>
                                        <span class="small text-muted font-weight-normal"> • </span>
                                        <span class="small text-muted font-weight-normal">2h</span>
                                        <span><i class="fas fa-angle-down float-end"></i></span>
                                    </h6>
                                </a>
                                <p style="line-height: 1.2;">
                                    Lorem ipsum dolor, sit amet <a href="">#consectetur</a> adipisicing elit.
                                    Nobis assumenda eveniet ipsum libero mollitia vero doloremque
                                    <a href="">#perspiciatis</a> molestiae omnis, quam iure dicta reprehenderit
                                    distinctio facere labore atque, sit <a href="">#ratione</a> quo.
                                </p>
                                <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                                    <li>
                                        <i class="far fa-comment"></i>
                                    </li>
                                    <li><i class="fas fa-retweet"></i><span class="small ps-2">7</span></li>
                                    <li><i class="far fa-heart"></i><span class="small ps-2">35</span></li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- add new post here -->

                </div>

            </div>
        </div>

        <!-- profile card -->
        <div class="col-md-3 d-none d-md-block">
            <div class="card shadow-sm">
                <div class="card-body">
                    <input type="text" class="form-control mb-3" placeholder="Search..." />
                    <ul class="list-unstyled">
                        <li><a href="#">Trending 1</a></li>
                        <li><a href="#">Trending 2</a></li>
                        <li><a href="#">Trending 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>