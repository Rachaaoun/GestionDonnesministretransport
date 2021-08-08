<?php

namespace App\Entity;

use App\Repository\DateAnneePourFormRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DateAnneePourFormRepository::class)
 */
class DateAnneePourForm
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\OneToOne(targetEntity=Form5Trimestre1::class, inversedBy="annee", cascade={"persist", "remove"})
     */
    private $annee;

    public function getId(): ?int
    {
        return $this->id;
    }



    public function getAnnee(): ?Form5Trimestre1
    {
        return $this->annee;
    }

    public function setAnnee(?Form5Trimestre1 $annee): self
    {
        $this->annee = $annee;

        return $this;
    }
}
