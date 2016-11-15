<?php


namespace Platform\Support\Data;

use Platform\Support;
use Platform\Support\Enum;

abstract class ExecuteModes extends Enum
{
    const __default = self::Reader;
    const NonQuery = 0;
    const Reader = 1;
    const Scalar = 2;
    //const XmlReader = 3;
    //const JsonReader = 4;
}