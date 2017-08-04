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
class Test {

    private $id;
    private $testName;
    private $testType = 'WEB';
    private $scenario = '';
    private $instructions;
    private $url;
    private $numMinutes = '1';
    private $numUsers = '1';
    private $demographics = 'Male+Female+Single+Under30+CollegeGrad';
    private $followUpWorderId;
    private $testId;

    public function getTestType() {
        return $this->testType;
    }

    public function getScenario() {
        return $this->scenario;
    }

    public function getInstructions() {
        return $this->instructions;
    }

    public function getNumMinutes() {
        return $this->numMinutes;
    }

    public function getNumUsers() {
        return $this->numUsers;
    }

    public function getDemographics() {
        return $this->demographics;
    }

    public function getFollowUpWorderId() {
        return $this->followUpWorderId;
    }

    public function setTestType($testType) {
        $this->testType = $testType;
        return $this;
    }

    public function setScenario($scenario) {
        $this->scenario = $scenario;
        return $this;
    }

    public function setInstructions($instructions) {
        $this->instructions = $instructions;
        return $this;
    }

    public function setNumMinutes($numMinutes) {
        $this->numMinutes = $numMinutes;
        return $this;
    }

    public function setNumUsers($numUsers) {
        $this->numUsers = $numUsers;
        return $this;
    }

    public function setDemographics($demographics) {
        $this->demographics = $demographics;
        return $this;
    }

    public function setFollowUpWorderId($followUpWorderId) {
        $this->followUpWorderId = $followUpWorderId;
        return $this;
    }

    public function getTestName() {
        return $this->testName;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setTestName($testName) {
        $this->testName = $testName;
        return $this;
    }

    public function setUrl($url) {
        $this->url = $url;
        return $this;
    }

    public function getTestId() {
        return $this->testId;
    }

    public function setTestId($testId) {
        $this->testId = $testId;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

}
