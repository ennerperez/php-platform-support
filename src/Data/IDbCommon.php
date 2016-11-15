<?php

namespace Platform\Support\Data;

interface IDbCommon
{
    public static function Execute($connection, $query, array $params = NULL, $mode = NULL, $type = NULL);
}