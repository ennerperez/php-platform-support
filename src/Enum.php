<?php

namespace Platform\Support;

use ReflectionClass;

/**
 * Enum
 * @package Platform\Support
 */
abstract class Enum
{
    private static $constCache = NULL;

    /**
     * @param $name
     * @param bool $strict
     * @return bool
     */
    public static function isValidName($name, $strict = false)
    {
        $constants = self::getConstants();
        if ($strict) {
            return array_key_exists($name, $constants);
        }
        $keys = array_map('strtolower', array_keys($constants));
        return in_array(strtolower($name), $keys);
    }

    /**
     * @return array|null
     */
    private static function getConstants()
    {
        if (self::$constCache === NULL) {
            $reflect = new ReflectionClass(get_called_class());
            self::$constCache = $reflect->getConstants();
        }
        return self::$constCache;
    }

    /**
     * @param $value
     * @return bool
     */
    public static function isValidValue($value)
    {
        $values = array_values(self::getConstants());
        return in_array($value, $values, $strict = true);
    }
}


