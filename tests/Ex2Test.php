<?php

namespace App\Tests;

use App\Entity\Ex2;
use http\Exception\InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class Ex2Test extends TestCase
{
    public function testSomething()
    {
        $d1=new Ex2(10,"dh");
        $d2=new Ex2(10,"dh");
        $d3=new Ex2(20,"dh");

        $d1->Ajouter($d2);
        $this->expectException("LogicException");
        $this->assertEquals($d3,$d1);



    }
}
