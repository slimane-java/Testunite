<?php

namespace App\Tests;

use App\Entity\Ex1;
use http\Exception\InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use PHPUnit\Util\Exception;

class Ex1Test extends TestCase
{
    public function testSomething()
    {

        $ex1=new Ex1(30,30,50);
        $this->expectException(InvalidArgumentException::class);
        $this->assertEquals("Isocèele",$ex1->type());

    }
}
