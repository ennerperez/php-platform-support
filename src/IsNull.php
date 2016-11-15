<?php

namespace Platform\Support;

use DateTime;

/**
 * Null handler
 * @package Platform\Support
 */
class IsNull
{

    /**
     * Cast null object into string replacement.
     * @param  object $value;
     * @param  null|string $replacement;
     * @return string
     */
    public static function Cast($value, $replacement = "")
    {
        if ($value != null && gettype($value) == "DateTime") {
            if ((int)DateTime::createFromFormat("yyyy-MM-dd", $value) != 0) {
                return DateTime::createFromFormat("yyyy-MM-dd", $value);
            }
        }

        if ($value == null) {
            return $replacement;
        }

        return (string)$value;

    }

}