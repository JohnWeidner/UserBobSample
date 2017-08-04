<?php
include_once './notices.php';
if ($notices) {
    foreach ($notices as $notice) {
        echo "<p>$notice</p>";
    }
} else {

    $post = $_POST;
    $request = UserBob\General::getPostRequest();
    $test = new \UserBob\Test();
    $testResults = new \Database\TestResult;
    $userbob = new \UserBob\UserBob();
    $maxId = $testResults->getLatestId();
    $results = $userbob->getResults($maxId, $numResults);
    foreach ($results as $userBobResult) {
        $testResults->create($userBobResult);
    }
    ?>
    <h1><?= $numResults ?> Results Updated</h1>
    <a href="dashboard.php"> Back to dashboard </a>
    <?php
}
?>