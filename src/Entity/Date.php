<?php

namespace App\Entity;

use App\Repository\DateRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DateRepository::class)
 */
class Date
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $annee;

    /**
     * @ORM\OneToMany(targetEntity=Form5Trimestre1::class, mappedBy="date")
     */
    private $form5;

    /**
     * @ORM\OneToMany(targetEntity=TabCA::class, mappedBy="date")
     */
    private $tabCas;

    /**
     * @ORM\OneToMany(targetEntity=TabCaSimple::class, mappedBy="date")
     */
    private $tabCaSimples;

    /**
     * @ORM\OneToMany(targetEntity=Form5Trimestre2::class, mappedBy="date")
     */
    private $form5Trimestre2s;

    /**
     * @ORM\OneToMany(targetEntity=Form5Trimestre3::class, mappedBy="date")
     */
    private $form5Trimestre3s;

    /**
     * @ORM\OneToMany(targetEntity=Form5Trimestre4::class, mappedBy="date")
     */
    private $form5Trimestre4s;

    /**
     * @ORM\OneToMany(targetEntity=Carte2::class, mappedBy="date")
     */
    private $carte2s;

    /**
     * @ORM\OneToMany(targetEntity=Carte3::class, mappedBy="date")
     */
    private $carte3s;

    /**
     * @ORM\OneToMany(targetEntity=Carte5::class, mappedBy="date")
     */
    private $carte5s;

    /**
     * @ORM\OneToMany(targetEntity=Invitation::class, mappedBy="date")
     */
    private $invitations;

    /**
     * @ORM\OneToMany(targetEntity=Maquette2::class, mappedBy="date")
     */
    private $maquette2s;

    /**
     * @ORM\OneToMany(targetEntity=Maquette3::class, mappedBy="date")
     */
    private $maquette3s;

    /**
     * @ORM\OneToMany(targetEntity=Maquette5::class, mappedBy="date")
     */
    private $maquette5s;

    /**
     * @ORM\OneToMany(targetEntity=Observatoire2::class, mappedBy="date")
     */
    private $observatoire2s;

    /**
     * @ORM\OneToMany(targetEntity=Observatoire3::class, mappedBy="date")
     */
    private $observatoire3s;

    /**
     * @ORM\OneToMany(targetEntity=TableAffaire::class, mappedBy="date")
     */
    private $tableAffaires;

    /**
     * @ORM\OneToMany(targetEntity=CommissionFinal::class, mappedBy="date")
     */
    private $commissionFinals;

    /**
     * @ORM\OneToMany(targetEntity=TabCaFinal::class, mappedBy="date")
     */
    private $tabCaFinals;

    public function __construct()
    {
        $this->form5 = new ArrayCollection();
        $this->tabCas = new ArrayCollection();
        $this->tabCaSimples = new ArrayCollection();
        $this->form5trimestre2 = new ArrayCollection();
        $this->form5Trimestre2s = new ArrayCollection();
        $this->form5Trimestre3s = new ArrayCollection();
        $this->form5Trimestre4s = new ArrayCollection();
        $this->carte2s = new ArrayCollection();
        $this->carte3s = new ArrayCollection();
        $this->carte5s = new ArrayCollection();
        $this->invitations = new ArrayCollection();
        $this->maquette2s = new ArrayCollection();
        $this->maquette3s = new ArrayCollection();
        $this->maquette5s = new ArrayCollection();
        $this->observatoire2s = new ArrayCollection();
        $this->observatoire3s = new ArrayCollection();
        $this->tableAffaires = new ArrayCollection();
        $this->commissionFinals = new ArrayCollection();
        $this->tabCaFinals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnnee(): ?string
    {
        return $this->annee;
    }

    public function setAnnee(string $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * @return Collection|Form5Trimestre1[]
     */
    public function getForm5(): Collection
    {
        return $this->form5;
    }

    public function addForm5(Form5Trimestre1 $form5): self
    {
        if (!$this->form5->contains($form5)) {
            $this->form5[] = $form5;
            $form5->setDate($this);
        }

        return $this;
    }

    public function removeForm5(Form5Trimestre1 $form5): self
    {
        if ($this->form5->removeElement($form5)) {
            // set the owning side to null (unless already changed)
            if ($form5->getDate() === $this) {
                $form5->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TabCa[]
     */
    public function getTabCas(): Collection
    {
        return $this->tabCas;
    }

    public function addTabCa(TabCa $tabCa): self
    {
        if (!$this->tabCas->contains($tabCa)) {
            $this->tabCas[] = $tabCa;
            $tabCa->setDate($this);
        }

        return $this;
    }

    public function removeTabCa(TabCa $tabCa): self
    {
        if ($this->tabCas->removeElement($tabCa)) {
            // set the owning side to null (unless already changed)
            if ($tabCa->getDate() === $this) {
                $tabCa->setDate(null);
            }
        }

        return $this;
    }

    public function __toString() : String
    {
        return $this->getAnnee();
    }

    /**
     * @return Collection|TabCaSimple[]
     */
    public function getTabCaSimples(): Collection
    {
        return $this->tabCaSimples;
    }

    public function addTabCaSimple(TabCaSimple $tabCaSimple): self
    {
        if (!$this->tabCaSimples->contains($tabCaSimple)) {
            $this->tabCaSimples[] = $tabCaSimple;
            $tabCaSimple->setDate($this);
        }

        return $this;
    }

    public function removeTabCaSimple(TabCaSimple $tabCaSimple): self
    {
        if ($this->tabCaSimples->removeElement($tabCaSimple)) {
            // set the owning side to null (unless already changed)
            if ($tabCaSimple->getDate() === $this) {
                $tabCaSimple->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Form5Trimestre2[]
     */
    public function getForm5Trimestre2s(): Collection
    {
        return $this->form5Trimestre2s;
    }

    public function addForm5Trimestre2(Form5Trimestre2 $form5Trimestre2): self
    {
        if (!$this->form5Trimestre2s->contains($form5Trimestre2)) {
            $this->form5Trimestre2s[] = $form5Trimestre2;
            $form5Trimestre2->setDate($this);
        }

        return $this;
    }

    public function removeForm5Trimestre2(Form5Trimestre2 $form5Trimestre2): self
    {
        if ($this->form5Trimestre2s->removeElement($form5Trimestre2)) {
            // set the owning side to null (unless already changed)
            if ($form5Trimestre2->getDate() === $this) {
                $form5Trimestre2->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Form5Trimestre3[]
     */
    public function getForm5Trimestre3s(): Collection
    {
        return $this->form5Trimestre3s;
    }

    public function addForm5Trimestre3(Form5Trimestre3 $form5Trimestre3): self
    {
        if (!$this->form5Trimestre3s->contains($form5Trimestre3)) {
            $this->form5Trimestre3s[] = $form5Trimestre3;
            $form5Trimestre3->setDate($this);
        }

        return $this;
    }

    public function removeForm5Trimestre3(Form5Trimestre3 $form5Trimestre3): self
    {
        if ($this->form5Trimestre3s->removeElement($form5Trimestre3)) {
            // set the owning side to null (unless already changed)
            if ($form5Trimestre3->getDate() === $this) {
                $form5Trimestre3->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Form5Trimestre4[]
     */
    public function getForm5Trimestre4s(): Collection
    {
        return $this->form5Trimestre4s;
    }

    public function addForm5Trimestre4(Form5Trimestre4 $form5Trimestre4): self
    {
        if (!$this->form5Trimestre4s->contains($form5Trimestre4)) {
            $this->form5Trimestre4s[] = $form5Trimestre4;
            $form5Trimestre4->setDate($this);
        }

        return $this;
    }

    public function removeForm5Trimestre4(Form5Trimestre4 $form5Trimestre4): self
    {
        if ($this->form5Trimestre4s->removeElement($form5Trimestre4)) {
            // set the owning side to null (unless already changed)
            if ($form5Trimestre4->getDate() === $this) {
                $form5Trimestre4->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Carte2[]
     */
    public function getCarte2s(): Collection
    {
        return $this->carte2s;
    }

    public function addCarte2(Carte2 $carte2): self
    {
        if (!$this->carte2s->contains($carte2)) {
            $this->carte2s[] = $carte2;
            $carte2->setDate($this);
        }

        return $this;
    }

    public function removeCarte2(Carte2 $carte2): self
    {
        if ($this->carte2s->removeElement($carte2)) {
            // set the owning side to null (unless already changed)
            if ($carte2->getDate() === $this) {
                $carte2->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Carte3[]
     */
    public function getCarte3s(): Collection
    {
        return $this->carte3s;
    }

    public function addCarte3(Carte3 $carte3): self
    {
        if (!$this->carte3s->contains($carte3)) {
            $this->carte3s[] = $carte3;
            $carte3->setDate($this);
        }

        return $this;
    }

    public function removeCarte3(Carte3 $carte3): self
    {
        if ($this->carte3s->removeElement($carte3)) {
            // set the owning side to null (unless already changed)
            if ($carte3->getDate() === $this) {
                $carte3->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Carte5[]
     */
    public function getCarte5s(): Collection
    {
        return $this->carte5s;
    }

    public function addCarte5(Carte5 $carte5): self
    {
        if (!$this->carte5s->contains($carte5)) {
            $this->carte5s[] = $carte5;
            $carte5->setDate($this);
        }

        return $this;
    }

    public function removeCarte5(Carte5 $carte5): self
    {
        if ($this->carte5s->removeElement($carte5)) {
            // set the owning side to null (unless already changed)
            if ($carte5->getDate() === $this) {
                $carte5->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Invitation[]
     */
    public function getInvitations(): Collection
    {
        return $this->invitations;
    }

    public function addInvitation(Invitation $invitation): self
    {
        if (!$this->invitations->contains($invitation)) {
            $this->invitations[] = $invitation;
            $invitation->setDate($this);
        }

        return $this;
    }

    public function removeInvitation(Invitation $invitation): self
    {
        if ($this->invitations->removeElement($invitation)) {
            // set the owning side to null (unless already changed)
            if ($invitation->getDate() === $this) {
                $invitation->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Maquette2[]
     */
    public function getMaquette2s(): Collection
    {
        return $this->maquette2s;
    }

    public function addMaquette2(Maquette2 $maquette2): self
    {
        if (!$this->maquette2s->contains($maquette2)) {
            $this->maquette2s[] = $maquette2;
            $maquette2->setDate($this);
        }

        return $this;
    }

    public function removeMaquette2(Maquette2 $maquette2): self
    {
        if ($this->maquette2s->removeElement($maquette2)) {
            // set the owning side to null (unless already changed)
            if ($maquette2->getDate() === $this) {
                $maquette2->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Maquette3[]
     */
    public function getMaquette3s(): Collection
    {
        return $this->maquette3s;
    }

    public function addMaquette3(Maquette3 $maquette3): self
    {
        if (!$this->maquette3s->contains($maquette3)) {
            $this->maquette3s[] = $maquette3;
            $maquette3->setDate($this);
        }

        return $this;
    }

    public function removeMaquette3(Maquette3 $maquette3): self
    {
        if ($this->maquette3s->removeElement($maquette3)) {
            // set the owning side to null (unless already changed)
            if ($maquette3->getDate() === $this) {
                $maquette3->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Maquette5[]
     */
    public function getMaquette5s(): Collection
    {
        return $this->maquette5s;
    }

    public function addMaquette5(Maquette5 $maquette5): self
    {
        if (!$this->maquette5s->contains($maquette5)) {
            $this->maquette5s[] = $maquette5;
            $maquette5->setDate($this);
        }

        return $this;
    }

    public function removeMaquette5(Maquette5 $maquette5): self
    {
        if ($this->maquette5s->removeElement($maquette5)) {
            // set the owning side to null (unless already changed)
            if ($maquette5->getDate() === $this) {
                $maquette5->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Observatoire2[]
     */
    public function getObservatoire2s(): Collection
    {
        return $this->observatoire2s;
    }

    public function addObservatoire2(Observatoire2 $observatoire2): self
    {
        if (!$this->observatoire2s->contains($observatoire2)) {
            $this->observatoire2s[] = $observatoire2;
            $observatoire2->setDate($this);
        }

        return $this;
    }

    public function removeObservatoire2(Observatoire2 $observatoire2): self
    {
        if ($this->observatoire2s->removeElement($observatoire2)) {
            // set the owning side to null (unless already changed)
            if ($observatoire2->getDate() === $this) {
                $observatoire2->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Observatoire3[]
     */
    public function getObservatoire3s(): Collection
    {
        return $this->observatoire3s;
    }

    public function addObservatoire3(Observatoire3 $observatoire3): self
    {
        if (!$this->observatoire3s->contains($observatoire3)) {
            $this->observatoire3s[] = $observatoire3;
            $observatoire3->setDate($this);
        }

        return $this;
    }

    public function removeObservatoire3(Observatoire3 $observatoire3): self
    {
        if ($this->observatoire3s->removeElement($observatoire3)) {
            // set the owning side to null (unless already changed)
            if ($observatoire3->getDate() === $this) {
                $observatoire3->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TableAffaire[]
     */
    public function getTableAffaires(): Collection
    {
        return $this->tableAffaires;
    }

    public function addTableAffaire(TableAffaire $tableAffaire): self
    {
        if (!$this->tableAffaires->contains($tableAffaire)) {
            $this->tableAffaires[] = $tableAffaire;
            $tableAffaire->setDate($this);
        }

        return $this;
    }

    public function removeTableAffaire(TableAffaire $tableAffaire): self
    {
        if ($this->tableAffaires->removeElement($tableAffaire)) {
            // set the owning side to null (unless already changed)
            if ($tableAffaire->getDate() === $this) {
                $tableAffaire->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CommissionFinal[]
     */
    public function getCommissionFinals(): Collection
    {
        return $this->commissionFinals;
    }

    public function addCommissionFinal(CommissionFinal $commissionFinal): self
    {
        if (!$this->commissionFinals->contains($commissionFinal)) {
            $this->commissionFinals[] = $commissionFinal;
            $commissionFinal->setDate($this);
        }

        return $this;
    }

    public function removeCommissionFinal(CommissionFinal $commissionFinal): self
    {
        if ($this->commissionFinals->removeElement($commissionFinal)) {
            // set the owning side to null (unless already changed)
            if ($commissionFinal->getDate() === $this) {
                $commissionFinal->setDate(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TabCaFinal[]
     */
    public function getTabCaFinals(): Collection
    {
        return $this->tabCaFinals;
    }

    public function addTabCaFinal(TabCaFinal $tabCaFinal): self
    {
        if (!$this->tabCaFinals->contains($tabCaFinal)) {
            $this->tabCaFinals[] = $tabCaFinal;
            $tabCaFinal->setDate($this);
        }

        return $this;
    }

    public function removeTabCaFinal(TabCaFinal $tabCaFinal): self
    {
        if ($this->tabCaFinals->removeElement($tabCaFinal)) {
            // set the owning side to null (unless already changed)
            if ($tabCaFinal->getDate() === $this) {
                $tabCaFinal->setDate(null);
            }
        }

        return $this;
    }




  
}
