<?php

namespace App\Entity;

use App\Repository\TabCARepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TabCARepository::class)
 */
class TabCA
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
    private $document;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $proprietaireAccord;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $montantTransaction;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $validiteGarentiePresentation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateConfirmation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avisCommission;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avisConseil;

    /**
     * @ORM\ManyToOne(targetEntity=Date::class, inversedBy="tabCas")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $budgetAlloue;

   

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDocument(): ?string
    {
        return $this->document;
    }

    public function setDocument(?string $document): self
    {
        $this->document = $document;

        return $this;
    }

    public function getProprietaireAccord(): ?string
    {
        return $this->proprietaireAccord;
    }

    public function setProprietaireAccord(?string $proprietaireAccord): self
    {
        $this->proprietaireAccord = $proprietaireAccord;

        return $this;
    }

    public function getMontantTransaction(): ?string
    {
        return $this->montantTransaction;
    }

    public function setMontantTransaction(?string $montantTransaction): self
    {
        $this->montantTransaction = $montantTransaction;

        return $this;
    }

    public function getValiditeGarentiePresentation(): ?string
    {
        return $this->validiteGarentiePresentation;
    }

    public function setValiditeGarentiePresentation(?string $validiteGarentiePresentation): self
    {
        $this->validiteGarentiePresentation = $validiteGarentiePresentation;

        return $this;
    }

    public function getDateConfirmation(): ?string
    {
        return $this->dateConfirmation;
    }

    public function setDateConfirmation(?string $dateConfirmation): self
    {
        $this->dateConfirmation = $dateConfirmation;

        return $this;
    }

    public function getAvisCommission(): ?string
    {
        return $this->avisCommission;
    }

    public function setAvisCommission(?string $avisCommission): self
    {
        $this->avisCommission = $avisCommission;

        return $this;
    }

    public function getAvisConseil(): ?string
    {
        return $this->avisConseil;
    }

    public function setAvisConseil(?string $avisConseil): self
    {
        $this->avisConseil = $avisConseil;

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

    public function getBudgetAlloue(): ?string
    {
        return $this->budgetAlloue;
    }

    public function setBudgetAlloue(?string $budgetAlloue): self
    {
        $this->budgetAlloue = $budgetAlloue;

        return $this;
    }

}
