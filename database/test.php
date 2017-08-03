<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Database;

/**
 * Description of test
 *
 * @author Farzoqe
 */
class Test extends BaseModel {

    public function __construct() {
        parent::__construct();
        $this->tableName = 'tests';
    }

    function create(\UserBob\Test $test, $username) {
        $stmt = $this->mysql->prepare("insert into $this->tableName set username=?,test_name=?,url=?,instructions=?,test_id=?") or die($this->mysql->error);
        $stmt->bind_param('sssss', $username, $test->getTestName(), $test->getUrl(), $test->getInstructions(), $test->getTestId())or die($stmt->error);
        $stmt->execute() or die($stmt->error);
    }

    function abort(\UserBob\Test $test) {
        $stmt = $this->mysql->prepare("update $this->tableName set is_started=0 where test_id=?") or die($this->mysql->error);
        $stmt->bind_param('d', $test->getTestId())or die($stmt->error);
        $stmt->execute() or die($stmt->error);
    }

    function getUserTests($username) {
        if (!$username)
            return [];
        $stmt = $this->mysql->prepare("select * from $this->tableName where username=?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $rows = $stmt->get_result();
        $results = [];
        $testResult = new TestResult;
        while ($row = $rows->fetch_object()) {
            $row->results = $testResult->getTestResults($row->test_id);
            $results[] = $row;
        }
        return $results;
    }

    function findByTestId($testId) {
        if (!$testId)
            return [];
        $stmt = $this->mysql->prepare("select * from $this->tableName where test_id=?");
        $stmt->bind_param('s', $testId);
        $stmt->execute();
        $rows = $stmt->get_result();
        $row = $rows->fetch_object();
        return $row;
    }

}
