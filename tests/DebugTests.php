<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class DebugTest extends TestCase
{

    public function testRegister()
    {
        // Arrange
        \Platform\Support\Debug::register();

        // Assert
        $this->assertTrue(true);
    }

    public function testConsole()
    {

        \Platform\Support\Debug::console('testConsole');

        // Assert
        $this->assertTrue(true);
    }

}
