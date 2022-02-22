<?php
namespace Type;

require "./vendor/autoload.php";

use Type\TestCase;
class NomeTest extends TestCase
{
    public function testString()
    {
        //
        // $this->assertEmpty();
        $string = new Nome('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam feugiat');//length 72

        // $this->assertEquals(
        //     'Neylton',
        //      $string->getString()
        // );
    }

}