<?php

namespace App\Entity;

use App\Repository\Form5Trimestre2Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Form5Trimestre2Repository::class)
 */
class Form5Trimestre2
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

        /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $classementdemande;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $propositionrapportevaluation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombrerapportpreselection;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $accordnegociationdirecte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $projetsupplements;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombreprojetfinaux;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $totalrapport;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombrerapport;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $totalaccord;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombreaccord;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $totalprojet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombreprojet;

    /**
     * @ORM\ManyToOne(targetEntity=Date::class, inversedBy="form5Trimestre2s")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $varfinal;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getClassementdemande(): ?string
    {
        return $this->classementdemande;
    }

    public function setClassementdemande(?string $classementdemande): self
    {
        $this->classementdemande = $classementdemande;

        return $this;
    }

    public function getPropositionrapportevaluation(): ?string
    {
        return $this->propositionrapportevaluation;
    }

    public function setPropositionrapportevaluation(?string $propositionrapportevaluation): self
    {
        $this->propositionrapportevaluation = $propositionrapportevaluation;

        return $this;
    }

    public function getNombrerapportpreselection(): ?string
    {
        return $this->nombrerapportpreselection;
    }

    public function setNombrerapportpreselection(?string $nombrerapportpreselection): self
    {
        $this->nombrerapportpreselection = $nombrerapportpreselection;

        return $this;
    }

    public function getAccordnegociationdirecte(): ?string
    {
        return $this->accordnegociationdirecte;
    }

    public function setAccordnegociationdirecte(?string $accordnegociationdirecte): self
    {
        $this->accordnegociationdirecte = $accordnegociationdirecte;

        return $this;
    }

    public function getProjetsupplements(): ?string
    {
        return $this->projetsupplements;
    }

    public function setProjetsupplements(?string $projetsupplements): self
    {
        $this->projetsupplements = $projetsupplements;

        return $this;
    }

    public function getNombreprojetfinaux(): ?string
    {
        return $this->nombreprojetfinaux;
    }

    public function setNombreprojetfinaux(?string $nombreprojetfinaux): self
    {
        $this->nombreprojetfinaux = $nombreprojetfinaux;

        return $this;
    }

    public function getTotalrapport(): ?string
    {
        return $this->totalrapport;
    }

    public function setTotalrapport(?string $totalrapport): self
    {
        $this->totalrapport = $totalrapport;

        return $this;
    }

    public function getNombrerapport(): ?string
    {
        return $this->nombrerapport;
    }

    public function setNombrerapport(?string $nombrerapport): self
    {
        $this->nombrerapport = $nombrerapport;

        return $this;
    }

    public function getTotalaccord(): ?string
    {
        return $this->totalaccord;
    }

    public function setTotalaccord(?string $totalaccord): self
    {
        $this->totalaccord = $totalaccord;

        return $this;
    }

    public function getNombreaccord(): ?string
    {
        return $this->nombreaccord;
    }

    public function setNombreaccord(?string $nombreaccord): self
    {
        $this->nombreaccord = $nombreaccord;

        return $this;
    }

    public function getTotalprojet(): ?string
    {
        return $this->totalprojet;
    }

    public function setTotalprojet(?string $totalprojet): self
    {
        $this->totalprojet = $totalprojet;

        return $this;
    }

    public function getNombreprojet(): ?string
    {
        return $this->nombreprojet;
    }

    public function setNombreprojet(?string $nombreprojet): self
    {
        $this->nombreprojet = $nombreprojet;

        return $this;
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
