<?php

namespace App\Entity;

use App\Repository\Carte5Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Carte5Repository::class)
 */
class Carte5
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Date::class, inversedBy="carte5s")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cartedate;

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

    public function getCartedate(): ?string
    {
        return $this->cartedate;
    }

    public function setCartedate(?string $cartedate): self
    {
        $this->cartedate = $cartedate;

        return $this;
    }
}
