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
    private static $user = '<DB_USERNAME>';
    private static $password = '<DB_PASSWORD>';
    private static $database = '<DB_NAME>';

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
