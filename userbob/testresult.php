<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBob;

/**
 * Description of test
 *
 * @author Farzoqe
 */
class TestResult {

    private $id;
    private $resultId;
    private $time;
    private $testId;
    private $workerId;
    private $videoId;
    private $hostVideoId;
    private $code;
    private $alias;
    private $demography;

    public function getId() {
        return $this->id;
    }

    public function getResultId() {
        return $this->resultId;
    }

    public function getTime() {
        return $this->time;
    }

    public function getTestId() {
        return $this->testId;
    }

    public function getWorkerId() {
        return $this->workerId;
    }

    public function getVideoId() {
        return $this->videoId;
    }

    public function getHostVideoId() {
        return $this->hostVideoId;
    }

    public function getCode() {
        return $this->code;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setResultId($resultId) {
        $this->resultId = $resultId;
        return $this;
    }

    public function setTime($time) {
        $this->time = $time;
        return $this;
    }

    public function setTestId($testId) {
        $this->testId = $testId;
        return $this;
    }

    public function setWorkerId($workerId) {
        $this->workerId = $workerId;
        return $this;
    }

    public function setVideoId($videoId) {
        $this->videoId = $videoId;
        return $this;
    }

    public function setHostVideoId($hostVideoId) {
        $this->hostVideoId = $hostVideoId;
        return $this;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function getAlias() {
        return $this->alias;
    }

    public function getDemography() {
        return $this->demography;
    }

    public function setAlias($alias) {
        $this->alias = $alias;
        return $this;
    }

    public function setDemography($demography) {
        $this->demography = $demography;
        return $this;
    }

}
