<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBob;

/**
 * Description of config
 *
 * @author Farzoqe
 */
class config {

    private static $clientId = 1445;
    private static $apiKey = 'FMXTHTMAPYIJJNNMXZWYUYMVZEZNSQEOXVKAQAOEUTKPKNVNJOHQCYXDZGPKLBBCVYEHBPUKNUBAVYAEYJMKGGFFCYFVKWLWHKMF';

    static function getClientId() {
        return self::$clientId;
    }

    static function getApiKey() {
        return self::$apiKey;
    }

}
