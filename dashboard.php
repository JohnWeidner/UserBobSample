<?php
include_once './autoload.php';
$test = new \Database\Test;
$user = isset($_GET['username']) ? $_GET['username'] : null;
$tests = $test->getUserTests($user);
?>
<?php include_once './head.php'; ?>

<!-- Portfolio Grid Section -->
<section class="full-height">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2 text-center">
                <?php if ($tests): ?>
                    <h2>Your Tests</h2>
                <?php else: ?>
                    <h2>No test exists for this user</h2>
                <?php endif; ?>
                <hr class="star-primary">
                <?php if ($tests): ?>
                    <table class="table table-hover table-striped text-left">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Test Name</th>
                                <th>URL</th>
                                <th>Number of Results</th>
                                <th>Results</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tests as $test): ?>
                                <tr>
                                    <td><?= $test->username ?></td>
                                    <td><?= $test->test_name ?></td>
                                    <td><?= $test->url ?></td>
                                    <td><?= count($test->results) ?></td>
                                    <td><a href="results.php?username=<?= $_GET['username'] ?>&test_id=<?= $test->test_id ?>">Results </a> </td>
                                    <td>
                                        <?php if ($test->is_started): ?>
                                            <a href="abort_test.php?username=<?= $_GET['username'] ?>&test_id=<?= $test->test_id ?>"> Abort </a>
                                        <?php else: ?>
                                            Aborted
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                <?php endif; ?>

                <form class="form-inline" method="get" action="">
                    <div class="form-group">

                        <input type="text" name="username" value="<?= $_GET['username'] ?>" placeholder="Set Username..." class="form-control">
                    </div>
                    <div class="form-group">

                        <button class="btn btn-primary"> Update </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include_once './footer.php'; ?>