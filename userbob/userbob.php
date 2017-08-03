<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBob;

/**
 * Description of userbob
 *
 * @author Farzoqe
 */
class UserBob {

    private $baseUrl = "https://userbob.com";

    function getBalance() {
        $request = new HttpRequest();
        $json = $request->get("$this->baseUrl/apiGetBalance");
        $response = json_decode($json);
        if (isset($response->error)) {
            echo "Error : $response->error";
            die;
        }
        if (isset($response->balance)) {
            echo "Your balance is : $response->balance";
        } else
            echo "There was an error getting your balance";
    }

    function getResults($minTestResultId = 0) {
        $request = new HttpRequest();
        $parameters = array(
            'minTestResultId' => $minTestResultId,
        );
        $json = $request->get("$this->baseUrl/apiGetTestResults", $parameters);
        $response = json_decode($json);
        if (isset($response->error)) {
            echo "Error : $response->error";
            die;
        }
        $testResults = [];
        foreach ($response as $row) {
            $userbobResult = new TestResult;
            $workerDetails = $this->getWorker($row->workerId);
            $userbobResult->setCode($row->code)
                    ->setResultId($row->id)
                    ->setTestId($row->testId)
                    ->setVideoId($row->videoId)
                    ->setTime($row->rcvdTime)
                    ->setWorkerId($row->workerId)
                    ->setHostVideoId($row->hostVideoId);
            if ($workerDetails) {
                $userbobResult->setAlias($workerDetails->alias);
                $userbobResult->setDemography($workerDetails->demographics);
            }
            $testResults[] = $userbobResult;
        }
        return $testResults;
    }

    function createTest(Test $test) {
        $request = new HttpRequest();
        $parameters = array(
            'testType' => $test->getTestType(),
            'url' => $test->getUrl(),
            'scenario' => $test->getScenario(),
            'instructions' => $test->getInstructions(),
            'numMinutes' => $test->getNumMinutes(),
            'numUsers' => $test->getNumUsers(),
            'demographics' => $test->getDemographics(),
        );
        if ($test->getFollowUpWorderId())
            $parameters['followUpWorkerId'] = $test->getFollowUpWorderId();
        $json = $request->get("$this->baseUrl/apiCreateTest", $parameters);
        $response = json_decode($json);
        if (isset($response->error)) {
            echo "Error : $response->error";
            return null;
        }
        if (isset($response->testId)) {
            $test->setTestId($response->testId);
            return $response->testId;
        } else
            echo "There was an error creating the test";
        return null;
    }

    function startTest(Test $test) {
        $request = new HttpRequest();
        $parameters = array(
            'testId' => $test->getTestId(),
        );
        $json = $request->get("$this->baseUrl/apiStartTest", $parameters);
        $response = json_decode($json);
        if (isset($response->error)) {
            echo "Error : $response->error";
            return null;
        }
    }

    function getWorker($workerId) {
        $request = new HttpRequest();
        $parameters = array(
            'workerId' => $workerId,
        );
        $json = $request->get("$this->baseUrl/apiGetWorkerInfo", $parameters);
        $response = json_decode($json);
        if (isset($response->error)) {
            echo "Error : $response->error";
            return null;
        }
        return $response;
    }

    function abortTest(Test $test) {
        $request = new HttpRequest();
        $parameters = array(
            'testId' => $test->getTestId(),
        );
        $json = $request->get("$this->baseUrl/apiAbortTest", $parameters);
        $response = json_decode($json);
        if (isset($response->error)) {
            echo "Error : $response->error";
            return null;
        }
    }

}
