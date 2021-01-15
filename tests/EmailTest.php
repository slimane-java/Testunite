<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Email;

class EmailTest extends TestCase
{
    public function testSomething():void
    {
        //$this->assertTrue(true);
    $email = new Email('Slimane@gmail.com');
    $email->setEmail('Slimane@gmail.com');
    
        $this->assertEquals(
            "Slimane@gmail.com",
            $email->getEmail()
            
        );
    }
  

}
