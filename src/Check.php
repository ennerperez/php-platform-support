<?php

namespace Platform\Support;

use Exception;

/**
 * Nulls/Empty Checks
 * @package Platform\Support
 */
class Check
{
    /**
     * Checks if value is null
     * @param object $value
     * @param string $parameterName
     * @return object
     * @throws Exception
     */
    public static function notNull($value, $parameterName= "")
    {
        if ($value == null) {
            throw new Exception(
                "The argument '$parameterName' cannot be null."
            );
        }
        return $value;
    }

    /**
     * Checks if value is not empty
     * @param object $value
     * @param string $parameterName
     * @return object
     * @throws Exception
     */
    public static function notEmpty($value, $parameterName = "")
    {

        if (!isset($value) || $value == null || empty($value)) {
            throw new Exception(
                "The argument '$parameterName' cannot be null, empty or contain only white space."
            );
        }

        return $value;
    }

}