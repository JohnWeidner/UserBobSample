<?php
include_once './autoload.php';
if (!$_POST['url']) {
    header("location:dashboard.php");
    die;
}
$url = $_POST['url'];
?>
<?php include_once './head.php'; ?>

<!-- Portfolio Grid Section -->
<section class="full-height">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2 text-center">

                <h2>Watch Result Video</h2>
                <hr class="star-primary">
                <video width="100%" controls>
                    <source src="<?= $url ?>" type="video/mp4">
                    <source src="<?= $url ?>" type="video/ogg">
                    Your browser does not support HTML5 video.
                </video>
                <div class="text-left" style="margin-top: 30px;">

                    <a href="javascript:;" onclick="window.history.back();">
                        <button class="btn btn-primary"> <i class="fa fa-chevron-left"></i> Go Back </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once './footer.php'; ?>