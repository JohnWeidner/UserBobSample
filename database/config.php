<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Database;

/**
 * Description of config
 *
 * @author Farzoqe
 */
class config {

    private static $hostname = 'localhost';
    private static $user = 'thezoq_userbob';
    private static $password = '2]}m(6v=Z!hC';
    private static $database = 'thezoq_userbob';

    public static function getHostname() {
        return self::$hostname;
    }

    public static function getUser() {
        return self::$user;
    }

    public static function getPassword() {
        return self::$password;
    }

    public static function getDatabase() {
        return self::$database;
    }

}
