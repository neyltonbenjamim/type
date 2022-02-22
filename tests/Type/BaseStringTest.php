<?php
namespace Type;

require "./vendor/autoload.php";

use Type\Nome;
use Type\TestCase;
class BaseStringTest extends TestCase
{
    private $string;

    public function setUp(): void
    {
        $this->string = new Nome(' neylton Benjamim dos anjos ');
        parent::setUp();
    }

    public function testString()
    {
        $this->assertEquals(
            'neylton Benjamim dos anjos',
            $this->string->getString()
        );
    }

    public function testStringUpper()
    {   
        $this->assertEquals(
            'NEYLTON BENJAMIM DOS ANJOS',
            $this->string->upper()
        );
    }

    public function testStringLower()
    {
        $this->assertEquals(
            'neylton benjamim dos anjos',
            $this->string->lower()
        );
    }

    public function testStringLength()
    {
        $this->assertEquals(
            26,
            $this->string->length()
        );
    }

    public function testStringUcfirst()
    {
        $this->assertEquals(
            'Neylton benjamim dos anjos',
            $this->string->ucfirst()
        );
    }

    public function testStringUcWord()
    {
        $this->assertEquals(
            'Neylton Benjamim Dos Anjos',
            $this->string->ucwords()
        );
    }

    public function testStringFormatted()
    {
        $string = new Nome(' neylton benjamim dos anjos ');

        $this->assertEquals(
            'Neylton Benjamim Dos Anjos',
             $string->formatted()
        );
    }

}