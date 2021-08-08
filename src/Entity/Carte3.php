<?php

namespace App\Entity;

use App\Repository\Carte3Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Carte3Repository::class)
 */
class Carte3
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Date::class, inversedBy="carte3s")
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
