<?php
include_once './autoload.php';

$post = $_POST;
$request = UserBob\General::getPostRequest();
$test = new \UserBob\Test();
$testResults = new \Database\TestResult;
$userbob = new \UserBob\UserBob();
$maxId = $testResults->getLatestId();
$results = $userbob->getResults($maxId);
foreach ($results as $userBobResult) {
    $testResults->create($userBobResult);
}
?>
<h1>Results Updated</h1>
<a href="dashboard.php"> Back to dashboard </a>