<?php

include_once './autoload.php';
$post = $_POST;
$request = UserBob\General::getPostRequest();
$test = new \UserBob\Test();
$test->setInstructions($request->instructions)
        ->setUrl($request->url)
        ->setTestName($request->test_name);
$userbob = new \UserBob\UserBob();
$testId = $userbob->createTest($test);
if ($testId) {
    $dbTest = new \Database\Test;
    $dbTest->create($test, $request->username);
    $userbob->startTest($test);
}
header("location:dashboard.php?username=$request->username");

