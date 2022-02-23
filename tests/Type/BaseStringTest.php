<?php
namespace Type;

require "./vendor/autoload.php";

use Type\Nome;
use Type\TestCase;
class BaseStringTest extends TestCase
{
    //https://www.invertexto.com/contador-caracteres

    private $string;

    public function setUp(): void
    {
        $this->string = new Nome(' neylton Benjamim dos anjos éstá ');
        parent::setUp();
    }

    public function testString()
    {
        $this->assertEquals(
            'neylton Benjamim dos anjos éstá',
            $this->string->getString()
        );
    }

    public function testStringUpper()
    {   
        $this->assertEquals(
            'NEYLTON BENJAMIM DOS ANJOS ÉSTÁ',
            $this->string->upper()
        );
    }

    public function testStringLower()
    {
        $this->assertEquals(
            'neylton benjamim dos anjos éstá',
            $this->string->lower()
        );
    }

    public function testStringLength()
    {
        $this->assertEquals(
            31,
            $this->string->length()
        );
    }

    public function testStringUcfirst()
    {
        $this->assertEquals(
            'Neylton benjamim dos anjos éstá',
            $this->string->ucfirst()
        );
    }

    public function testStringUcWord()
    {
        $this->assertEquals(
            'Neylton Benjamim Dos Anjos Éstá',
            $this->string->ucwords()
        );
    }

    public function testStringFormatted()
    {
        $this->assertEquals(
            'Neylton Benjamim Dos Anjos Éstá',
             $this->string->formatted()
        );
    }

}