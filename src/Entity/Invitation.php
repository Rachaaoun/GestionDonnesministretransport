<?php

namespace App\Entity;

use App\Repository\InvitationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InvitationRepository::class)
 */
class Invitation
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
    private $numero;

    /**
     * @ORM\ManyToOne(targetEntity=Date::class, inversedBy="invitations")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $date1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $date2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $heure;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $textfinal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(?string $numero): self
    {
        $this->numero = $numero;

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

    public function getDate1(): ?string
    {
        return $this->date1;
    }

    public function setDate1(string $date1): self
    {
        $this->date1 = $date1;

        return $this;
    }

    public function getDate2(): ?string
    {
        return $this->date2;
    }

    public function setDate2(?string $date2): self
    {
        $this->date2 = $date2;

        return $this;
    }

    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(?string $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getTextfinal(): ?string
    {
        return $this->textfinal;
    }

    public function setTextfinal(?string $textfinal): self
    {
        $this->textfinal = $textfinal;

        return $this;
    }
}
