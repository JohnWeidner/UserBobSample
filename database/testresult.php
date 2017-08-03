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
class TestResult extends BaseModel {

    public function __construct() {
        parent::__construct();
        $this->tableName = 'test_results';
    }

    function create(\UserBob\TestResult $test) {
        $testModel = new Test;
        $localTest = $testModel->findByTestId($test->getTestId());
        $videoUrl = "https://userbob.com/servlet/screencast?download=true&id=" . $test->getResultId() . "&code=" . $test->getCode();
        $stmt = $this->mysql->prepare("insert into $this->tableName set test_id=?,result_id=?,code=?,recieved_at=?,video_id=?,userbob_test_id=?,worker_id=?,video_url=?,alias=?,demographics=? on duplicate key update video_url=?") or die($this->mysql->error);
        $stmt->bind_param('sssssssssss', $localTest->id, $test->getResultId(), $test->getCode(), $test->getTime(), $test->getVideoId(), $test->getTestId(), $test->getWorkerId(), $videoUrl, $test->getAlias(), $test->getDemography(), $videoUrl)or die($stmt->error);
        $stmt->execute() or die($stmt->error);
    }

    function getTestResults($testId) {
        if (!$testId)
            return [];
        $stmt = $this->mysql->prepare("select * from $this->tableName where userbob_test_id=?");
        $stmt->bind_param('d', $testId);
        $stmt->execute();
        $rows = $stmt->get_result();
        $results = [];
        while ($row = $rows->fetch_object()) {
            $results[] = $row;
        }
        return $results;
    }

    function getLatestId() {
        $results = $this->mysql->query("select max(result_id) as max from $this->tableName");
        $row = $results->fetch_object();
        if ($row->max) {
            return $row->max;
        }
        return 1000;
    }

}
