<?php
namespace Type;
use PHPUnit\Framework\testCase;

class CepTest extends TestCase
{
    public function testCep()
    {
        $cep = new Cep('47640-000');

        $this->assertEquals(
            '47640000',
             $cep->cep()
        );
    }

    public function testCepFormmatted()
    {
        $cep = new Cep('47640-000');

        $this->assertEquals(
            '47.640-000',
             $cep->formatted()
        );
    }
}