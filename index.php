<?php
include_once './notices.php';
?>
<?php include_once './head.php'; ?>
<header>
    <div class="container" id="maincontent" tabindex="-1">
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="img/profile.png" alt="">
                <div class="intro-text">
                    <h1 class="name">UserBob API Sample</h1>
                    <hr class="star-light">
                    <span class="skills">Create Test - Get Results</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio Grid Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Client Library</h2>
                <hr class="star-primary">
                <p>
                    This is a sample site that uses the client library of UserBob created for PHP so to make the developer's Job simpler.
                </p>
                <?php foreach ($notices as $notice) : ?>
                    <p><?= $notice ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Usage</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p>Create a test using the create test link on top or <a href="create_test.php" style="color: blue">click here </a>to create test.</p>
                <hr>
                <p>You can change the API Keys of userbob in userbob/config.php.</p>
                <p>You can change database credentials in database/config.php.</p>
            </div>
            <div class="col-lg-4">
                <p>In dashboard, Enter your username to see tests created by you. Click the results button to see the results or abort button to abort the test</p>
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <a href="https://github.com/Farzoqe/UserBobSample" class="btn btn-lg btn-outline">
                    <i class="fa fa-github"></i> Get Code from GitHub
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->

<!-- Footer -->
<?php include_once './footer.php'; ?>