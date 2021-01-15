<?php

namespace App\Entity;

use App\Repository\Ex2Repository;
use Doctrine\ORM\Mapping as ORM;
use http\Exception\InvalidArgumentException;
use phpDocumentor\Reflection\Types\Boolean;


/**
 * @ORM\Entity(repositoryClass=Ex2Repository::class)
 */
class Ex2
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    private $valeur;
    private $devise;

    public function __construct($valeur,$devise)
    {
        $this->valeur=$valeur;
        $this->devise=$devise;
    }

    public function  valider(Ex2  $ex2):?bool
    {
        if($this->devise!= $ex2->devise)
        {
            throw  new \LogicException("not valide");
        }

        return  true;
    }

    public function Ajouter(Ex2 $ex2) : ?Ex2
    {
        if($this->valider($ex2)==true)
        {

            $this->valeur=$this->valeur+$ex2->valeur;
        }

        return $this;

    }

    public function retrancher(Ex2 $ex2): ?Ex2
    {
        if($this->valider($ex2)==true)
        {

            $this->valeur=$this->valeur-$ex2->valeur;
        }

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
