<?php
include_once './autoload.php';
$testResultModel = new \Database\TestResult;
$testResults = $testResultModel->getTestResults($_GET['test_id']);
?>
<?php include_once './head.php'; ?>

<!-- Portfolio Grid Section -->
<section class="full-height">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

                <h2>Test Results</h2>
                <hr class="star-primary">
                <?php if ($testResults): ?>

                    <table class="table table-hover table-striped text-left">
                        <thead>
                            <tr>
                                <th>Test ID</th>
                                <th>Time</th>
                                <th>Tester</th>
                                <th>Watch Video</th>
                                <th>Demographics</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($testResults as $test): ?>
                                <tr>
                                    <td><?= $test->userbob_test_id ?></td>
                                    <td><?= $test->recieved_at ?></td>
                                    <td><?= $test->alias ?></td>
                                    <td>
                                        <a href="javascript:;" onclick="$(this).next().submit()">
                                            <?= $test->video_url ?>
                                        </a>
                                        <form method="post" action="show_video.php">
                                            <input type="hidden" name="url" value="<?= $test->video_url ?>">
                                        </form>

                                    </td>
                                    <td><?= $test->demographics ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>
                <?php else: ?>
                    <p>No result exists for this user.</p>
                <?php endif; ?>
                <div class="text-left" style="margin-top: 30px;">

                    <a href="dashboard.php?username=<?= $_GET['username'] ?>">
                        <button class="btn btn-primary"> <i class="fa fa-chevron-left"></i> Back to Dashboard </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once './footer.php'; ?>