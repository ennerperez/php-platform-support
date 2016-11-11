<?php

namespace Platform\Support;

use Platform\Support\Data;
use Platform\Support\Text;
use Platform\Support\Web;

class Core
{
    const __PLATFORM_VERSION = "3.1.0.0";
}

class Check
{
    public static function NotNull($value, $parameterName)
    {
        if (value == null) {
            throw new Exception($parameterName);
        }
        return value;
    }

    public static function NotEmpty($value, $parameterName = "")
    {
        if (string . IsNullOrWhiteSpace(value)) {
            throw new Exception(
                "The argument '.$parameterName.' cannot be null, empty or contain only white space."
            );
        }

        return $value;
    }

}


class IsNull
{

    public static function Cast($value, $replacement = "")
    {
        if ($value != null && gettype($value) == "DateTime") {
            if ((int)\DateTime::createFromFormat("yyyy-MM-dd", $value) != 0) {
                return \DateTime::createFromFormat("yyyy-MM-dd", $value);
            }
        }

        if ($value == null) {
            return $replacement;
        }

        return (string)$value;

    }

}

class Helpers
{

    public static function ISO8601($date)
    {
        return \DateTime::createFromFormat("yyyy-MM-dd HH:mm:ss", $date);
    }

}