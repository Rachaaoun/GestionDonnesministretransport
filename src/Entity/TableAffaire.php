<?php

namespace App\Entity;

use App\Repository\TableAffaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TableAffaireRepository::class)
 */
class TableAffaire
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var10;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var11;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var12;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var13;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var14;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var15;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $var16;

    /**
     * @ORM\ManyToOne(targetEntity=Date::class, inversedBy="tableAffaires")
     */
    private $date;

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

    public function getVar1(): ?string
    {
        return $this->var1;
    }

    public function setVar1(?string $var1): self
    {
        $this->var1 = $var1;

        return $this;
    }

    public function getVar2(): ?string
    {
        return $this->var2;
    }

    public function setVar2(?string $var2): self
    {
        $this->var2 = $var2;

        return $this;
    }

    public function getVar3(): ?string
    {
        return $this->var3;
    }

    public function setVar3(?string $var3): self
    {
        $this->var3 = $var3;

        return $this;
    }

    public function getVar4(): ?string
    {
        return $this->var4;
    }

    public function setVar4(?string $var4): self
    {
        $this->var4 = $var4;

        return $this;
    }

    public function getVar5(): ?string
    {
        return $this->var5;
    }

    public function setVar5(?string $var5): self
    {
        $this->var5 = $var5;

        return $this;
    }

    public function getVar6(): ?string
    {
        return $this->var6;
    }

    public function setVar6(?string $var6): self
    {
        $this->var6 = $var6;

        return $this;
    }

    public function getVar7(): ?string
    {
        return $this->var7;
    }

    public function setVar7(?string $var7): self
    {
        $this->var7 = $var7;

        return $this;
    }

    public function getVar8(): ?string
    {
        return $this->var8;
    }

    public function setVar8(?string $var8): self
    {
        $this->var8 = $var8;

        return $this;
    }

    public function getVar9(): ?string
    {
        return $this->var9;
    }

    public function setVar9(?string $var9): self
    {
        $this->var9 = $var9;

        return $this;
    }

    public function getVar10(): ?string
    {
        return $this->var10;
    }

    public function setVar10(?string $var10): self
    {
        $this->var10 = $var10;

        return $this;
    }

    public function getVar11(): ?string
    {
        return $this->var11;
    }

    public function setVar11(?string $var11): self
    {
        $this->var11 = $var11;

        return $this;
    }

    public function getVar12(): ?string
    {
        return $this->var12;
    }

    public function setVar12(?string $var12): self
    {
        $this->var12 = $var12;

        return $this;
    }

    public function getVar13(): ?string
    {
        return $this->var13;
    }

    public function setVar13(?string $var13): self
    {
        $this->var13 = $var13;

        return $this;
    }

    public function getVar14(): ?string
    {
        return $this->var14;
    }

    public function setVar14(?string $var14): self
    {
        $this->var14 = $var14;

        return $this;
    }

    public function getVar15(): ?string
    {
        return $this->var15;
    }

    public function setVar15(?string $var15): self
    {
        $this->var15 = $var15;

        return $this;
    }

    public function getVar16(): ?string
    {
        return $this->var16;
    }

    public function setVar16(?string $var16): self
    {
        $this->var16 = $var16;

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
}
