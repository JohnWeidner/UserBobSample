<?php

include_once './autoload.php';
$userbob = new UserBob\UserBob;
$test = new \UserBob\Test;
$request = UserBob\General::getRequest();
$test->setTestId($request->test_id);
$userbob->abortTest($test);
$dbTest = new \Database\Test;
$dbTest->abort($test);
header("location:dashboard.php?username=$request->username");
