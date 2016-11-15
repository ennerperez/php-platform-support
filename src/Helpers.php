<?php

namespace Platform\Support;

class Helpers
{

    public static function ISO8601($date)
    {
        return \DateTime::createFromFormat("yyyy-MM-dd HH:mm:ss", $date);
    }

}