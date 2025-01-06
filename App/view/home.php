<?php include 'includes/header.php'; ?>

<?php
dump($_SESSION['user']);

dump($_SESSION['user']['username'])
?>


<?php

dump($posts);
dump($category);

// if (isset($_POST['category_id'])) {
    // dump($_POST['category_id']);
    // dump($_POST['tags']);
    // dump($_POST['content']);
    // dump($_POST['url']);
    dump($_SESSION['err']);

// }

?>

<div class="container mt-2">
    <div class="row">

        <!-- search card -->
        <div class="col-md-3 d-none d-md-block">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle mb-3"
                        height="80" alt="Avatar" loading="lazy" />
                    <h5 class="card-title"><?php echo $_SESSION['user']['username']; ?></h5>
                    <p class="text-muted"><?php echo $_SESSION['user']['roles']; ?></p>
                    <button class="btn btn-primary btn-sm">View Profile</button>
                </div>
            </div>
        </div>

        <!-- main -->
        <div class="col-md-6">
            <div class="px-0">

                <?php if ($_SESSION['user']['roles'] != 'client'): ?>

                    <div class="card shadow-0 mb-2">
                        <div class="card-body border pb-2">
                            <div class="d-flex">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                                    class="rounded-circle"
                                    height="50"
                                    alt="Avatar"
                                    loading="lazy" />
                                <div class="d-flex align-items-center w-100 ps-3">

                                    <form  class="w-100" method="POST" action="/brief10/public/index.php/home">

                                        <div class="container">
                                            <!-- Category  -->
                                            <div class="mb-3">
                                                <label for="category" class="form-label">Category:</label>
                                                <select id="category" name="category_id" class="form-select w-100 border-0 py-2 px-3" required>
                                                    <?php foreach($category as $categorykey => $categoryvalue): ?>
                                                    <option value="<?php echo $categoryvalue['id'] ?>"><?php echo $categoryvalue['name'] ?></option>
                                                   
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>

                                            <!-- Tags  -->
                                            <div class="mb-3">
                                                <label for="tags" class="form-label">Tags (separate with commas):</label>
                                                <input type="text" id="tags" name="tags" class="form-control w-100 py-2 px-3" placeholder="e.g. html, javascript" required>
                                            </div>

                                            <!-- Content  -->
                                            <div class="mb-3">
                                                <label for="content" class="form-label">Content:</label>
                                                <textarea id="content" name="content" class="form-control w-100 py-2 px-3" rows="2" placeholder="What's happening" required></textarea>
                                            </div>

                                            <!-- url  -->
                                            <div class="mb-3">
                                                <label for="url" class="form-label">Url :</label>
                                                <input type="text" id="url" name="url" class="form-control w-100 py-2 px-3" placeholder="https://www.exemple.com" required>
                                            </div>

                                            <!--  button -->
                                            <div class="text-center">
                                                <button type="submit" name="post" class="btn btn-primary w-100 py-2">Post</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>

                <?php endif; ?>

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


                    <?php foreach ($posts as $postkey => $postvalue): ?>
                        <div class="d-flex p-3 border mb-1">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (29).webp" class="rounded-circle"
                                height="50" alt="Avatar" loading="lazy" />
                            <div class="d-flex w-100 ps-3">
                                <div>
                                    <div>
                                        <h6 class="text-body">
                                            <?php echo $postvalue['username'] ?>
                                            <span class="small text-muted font-weight-normal"><?php echo $postvalue['name'] ?></span>
                                            <!-- <span class="small text-muted font-weight-normal"> • </span>
                                        <span class="small text-muted font-weight-normal">2h</span> -->
                                            <!-- <span><i class="fas fa-angle-down float-end"></i></span> -->
                                        </h6>
                                    </div>
                                    <p style="line-height: 1.2;">
                                        <?php echo $postvalue['content'] ?>
                                        <?php
                                        $tagsarray = explode(",", $postvalue['tags']);
                                        ?>
                                        <?php foreach ($tagsarray as $tag): ?>
                                            <a href=""><?php echo $tag; ?></a>
                                        <?php endforeach; ?>
                                    </p>
                                    <a href="<?php echo $postvalue['url']; ?>" class="text-decoration-none text-primary" target="_blank">
                                        <?php echo $postvalue['url']; ?>
                                    </a>
                                    <!-- <ul class="list-unstyled d-flex justify-content-between mb-0 pe-xl-5">
                                    <li>
                                        <i class="far fa-comment"></i>
                                    </li>
                                    <li><i class="fas fa-retweet"></i><span class="small ps-2">7</span></li>
                                    <li><i class="far fa-heart"></i><span class="small ps-2">35</span></li>
                                    <li>
                                        <i class="far fa-share-square"></i>
                                    </li>
                                </ul> -->
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>


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