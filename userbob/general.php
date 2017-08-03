<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBob;

/**
 * Description of general
 *
 * @author Farzoqe
 */
class General {

    static function getRequest() {
        return json_decode(json_encode($_GET));
    }

    static function getPostRequest() {
        $post = $_POST;
        return json_decode(json_encode($post));
    }

}
