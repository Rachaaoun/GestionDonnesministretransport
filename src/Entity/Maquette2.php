<?php

namespace App\Entity;

use App\Repository\Maquette2Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Maquette2Repository::class)
 */
class Maquette2
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Date::class, inversedBy="maquette2s")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $date1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $varfinal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?Date
    {
        return $this->date;
    }

    public function setDate(?Date $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDate1(): ?string
    {
        return $this->date1;
    }

    public function setDate1(?string $date1): self
    {
        $this->date1 = $date1;

        return $this;
    }

    public function getVarfinal(): ?string
    {
        return $this->varfinal;
    }

    public function setVarfinal(?string $varfinal): self
    {
        $this->varfinal = $varfinal;

        return $this;
    }
}