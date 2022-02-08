<?php

namespace Type;

require "./vendor/autoload.php";

use PHPUnit\Framework\testCase as PHPUnit;

class TestCase extends PHPUnit
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }


}