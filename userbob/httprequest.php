<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace UserBob;

/**
 * Description of httprequest
 *
 * @author Farzoqe
 */
class HttpRequest {

    public function get($url, $parameters = []) {
        $parameters['apiKey'] = config::getApiKey();
        $parameters['clientId'] = config::getClientId();
        $query = http_build_query($parameters);
        $url.="?$query";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $url,
            CURLOPT_FOLLOWLOCATION => TRUE,
            CURLOPT_SSL_VERIFYPEER => FALSE,
        ));
        if (!$response = curl_exec($curl))
            echo curl_error($curl);
        curl_close($curl);
        return $response;
    }

}
