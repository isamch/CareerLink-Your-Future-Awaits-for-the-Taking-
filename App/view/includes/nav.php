
   

    <nav class="navbar navbar-expand-lg navbar-light py-4 px-5">
        <div class="container-fluid">
            
            <a class="navbar-brand" href="/testautoloadcomposer/public/">
                <img class="img-fluid" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="48px" height="48px">
            </a>
            
            <?php if (isset($_SESSION['user'])): ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav_lc" aria-controls="nav_lc" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav_lc">
                <ul class="d-none d-lg-flex navbar-nav mx-auto my-3 my-lg-0 position-absolute top-50 start-50 translate-middle">
                    <li class="nav-item me-4"><a class="nav-link" href="/testautoloadcomposer/public/index.php/">Home</a></li>
                    <li class="nav-item me-4"><a class="nav-link" href="/testautoloadcomposer/public/index.php/about">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/testautoloadcomposer/public/index.php/product">Profile</a></li>
                </ul>
                <ul class="navbar-nav my-3 my-lg-0 d-lg-none">
                    <li class="nav-item me-4"><a class="nav-link" href="/testautoloadcomposer/public/index.php/">Home</a></li>
                    <li class="nav-item me-4"><a class="nav-link" href="/testautoloadcomposer/public/index.php/about">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="/testautoloadcomposer/public/index.php/product">Profile</a></li>
                </ul>
            <?php endif ?>

                <?php if (!isset($_SESSION['user'])): ?>
                <div class="ms-lg-auto">
                    <a class="btn btn-outline-primary me-2" href="/testautoloadcomposer/public/index.php/login">Sign In</a>
                    <a class="btn btn-primary" href="/testautoloadcomposer/public/index.php/register">Sign Up</a>
                </div>
                <?php endif ?>

            </div>
        </div>
    </nav>
