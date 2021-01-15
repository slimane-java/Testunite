<?php

namespace App\Entity;

use App\Repository\Ex1Repository;
use Doctrine\ORM\Mapping as ORM;
use http\Exception\InvalidArgumentException;


/**
 * @ORM\Entity(repositoryClass=Ex1Repository::class)
 */
class Ex1
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    private $a;
    private $b;
    private $c;
    private $f;

    public function __construct($a,$b,$c)
    {

        $this->a=$a;
        $this->b=$b;
        $this->c=$c;

        $som1=$this->a+$this->b;
        $som2=$this->a+$this->c;
        $som3=$this->b+$this->c;


        /*if($this->a>$som3 || $this->b>$som2 || $this->c>$som1)
        {
   throw new InvalidArgumentException("invalide");

        }*/




    }

    public function type(): ?string
    {
        if($this->a==$this->b && $this->a==$this->c && $this->b==$this->c)
        {
            return "Equilatéral";
        }

        if($this->a==$this->b || $this->a==$this->c|| $this->b==$this->c)
        {
            return "Isocèele";
        }

        if($this->a!=$this->b && $this->a!=$this->c && $this->b!=$this->c)
        {
            return "Scalène";
        }

    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
