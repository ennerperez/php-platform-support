<?php

require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class CheckTest extends TestCase
{

    public function testNotNull()
    {
        // Arrange
        $result = \Platform\Support\Check::notNull('testNotNull');

        // Assert
        $this->assertTrue(true);
    }

    public function testNotEmpty()
    {

        $result = \Platform\Support\Check::notEmpty('testNotEmpty');

        // Assert
        $this->assertTrue(true);
    }

}
