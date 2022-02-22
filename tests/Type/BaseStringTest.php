<?php
namespace Type;

require "./vendor/autoload.php";

use Type\Nome;
use Type\TestCase;
class BaseStringTest extends TestCase
{
    public function testString()
    {
        $string = new Nome(' Neylton ');

        $this->assertEquals(
            'Neylton',
             $string->getString()
        );
    }

    public function testStringUpper()
    {
        $string = new Nome(' Neylton ');

        $this->assertEquals(
            'NEYLTON',
             $string->upper()
        );
    }

    public function testStringLower()
    {
        $string = new Nome(' Neylton ');

        $this->assertEquals(
            'neylton',
             $string->lower()
        );
    }

    public function testStringLength()
    {
        $string = new Nome(' Neylton ');

        $this->assertEquals(
            7,
             $string->length()
        );
    }

    public function testStringUcfirst()
    {
        $string = new Nome(' neylton ');

        $this->assertEquals(
            'Neylton',
             $string->ucfirst()
        );
    }

    public function testStringUcWord()
    {
        $string = new Nome(' neylton benjamim dos anjos ');

        $this->assertEquals(
            'Neylton Benjamim Dos Anjos',
             $string->ucwords()
        );
    }

}