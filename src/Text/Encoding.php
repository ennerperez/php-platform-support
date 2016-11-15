<?php

namespace Platform\Support\Text;

use Platform\Support;

class Encoding
{

    static function toJSON($data)
    {
        //if (is_array($data)) {
        return json_encode($data);
        //}
    }

    static function toXML($data)
    {
        //if (is_array($data)) {
        return xmlrpc_encode($data);
        //}
    }

    static function toHTML($data)
    {
        //if (is_array($data)) {
        return self::html_encode($data);
        //}
    }

    static function toPlain($data)
    {
        //if (is_array($data)) {
        return self::plain_encode($data);
        //}
    }

    // Encode array into HTML
    private static function html_encode($mixed)
    {
        $return = "";
        if (is_array($mixed)) {
            foreach ($mixed as $val) {
                if (is_array($val)) {
                    $return = $return . "<ul>" . self::html_encode($val) . "</ul>";
                } else {
                    $return = $return . "<li>" . $val . "</li>";
                }
            }
            return "<ul>" . $return . "</ul>";
        } else {
            return "<span>" . $mixed . "</span>";
        }

    }

    // Encode array into TEXT
    private static function plain_encode($mixed)
    {
        $return = null;
        if (is_array($mixed)) {
            foreach ($mixed as $val) {
                if (is_array($val)) {
                    if ($return != null) {
                        $return = $return . ",";
                    }
                    $return = $return . self::plain_encode($val);
                } else {
                    if ($return != null) {
                        $return = $return . ",";
                    }
                    $return = $return . $val;
                }
            }
        } else {
            $return = $mixed;
        }
        return $return;
    }

}
