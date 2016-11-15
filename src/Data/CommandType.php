<?php


namespace Platform\Support\Data;

use Platform\Support;
use Platform\Support\Enum;

abstract class CommandType extends Enum
{
    const __default = self::Text;
    const StoredProcedure = 4;
    const TableDirect = 512;
    const Text = 1;
}
