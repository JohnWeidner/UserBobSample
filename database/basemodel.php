<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Database;

/**
 * Description of basemodel
 *
 * @author Farzoqe
 */
class BaseModel {

    protected $mysql;
    protected $tableName;

    public function __construct() {
        $this->mysql = new \mysqli(config::getHostname(), config::getUser(), config::getPassword(), config::getDatabase());
        if ($this->mysql->connect_error) {
            die('Connect Error (' . $this->mysql->connect_errno . ') ' . $this->mysql->connect_error);
        }
    }

    function all() {
        /* @var $rows \mysqli_result */
        $rows = $this->mysql->query("select * from $this->tableName");
        $results = [];
        while ($row = $rows->fetch_object()) {
            $results[] = $row;
        }
        return $results;
    }

    function find($id) {
        $id = (int) $id;
        /* @var $rows \mysqli_result */
        $rows = $this->mysql->query("select * from $this->tableName where id = '$id'");
        return $rows->fetch_object();
    }

}
