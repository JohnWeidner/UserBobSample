<?php include_once './head.php'; ?>

<!-- Portfolio Grid Section -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2 text-center">
                <h2>Test Details</h2>
                <hr class="star-primary">

                <form method="post" action="save_test.php" class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Username:</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" placeholder="Username" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Test Name:</label>
                        <div class="col-sm-10">
                            <input type="text" name="test_name" class="form-control" placeholder="Test Name" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >URL:</label>
                        <div class="col-sm-10">
                            <input type="url" name="url" class="form-control" placeholder="URL to Test" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" >Instructions:</label>
                        <div class="col-sm-10">
                            <textarea name="instructions" class="form-control" placeholder="Instructions" required="" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" ></label>
                        <div class="col-sm-10 text-right">
                            <button class="btn btn-primary"> Create Test </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once './footer.php'; ?>