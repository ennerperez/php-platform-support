<?php

namespace Platform\Support\Web;

use Platform\Support;

function curl($url, $decode = false, $fields = null)
{
    $return = '';
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    //curl_setopt ( $curl, CURLOPT_TIMEOUT, 30 );
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    if (defined('ENVIRONMENT') && ENVIRONMENT != 'production')
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    else
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    /* POST */
    if ($fields != null) {
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
    }

    if (curl_exec($curl) === false) {
        echo 'error: ' . curl_error($curl);
    } else {
        if ($decode)
            $return = utf8_decode(curl_exec($curl));
        else
            $return = curl_exec($curl);
    }
    curl_close($curl);

    return $return;
}