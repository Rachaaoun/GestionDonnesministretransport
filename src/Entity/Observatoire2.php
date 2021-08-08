<?php

namespace App\Entity;

use App\Repository\Observatoire2Repository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Observatoire2Repository::class)
 */
class Observatoire2
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check1;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check2;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check3;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check4;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check5;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check6;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check7;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check8;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $text1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $text2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $text3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $text4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $text5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $text6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tab1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tab2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tab3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tab4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tab5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tab6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tab7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tab8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tab9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tab10;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tab11;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabdeux1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabdeux2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabdeux3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabdeux4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $text7;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check10;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check11;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check12;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabtrois1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabtrois2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabtrois3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabtrois4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabtrois5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabtrois6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabquatre1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabquatre2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabquatre3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabquatre4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabquatre5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabquatre6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcinq1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabcinq2;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check13;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check14;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check15;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $check16;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabsix1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabsix2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabsix3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabsix4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabsix5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $conclusion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $conclusion1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $conclusion2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $conclusion3;

    /**
     * @ORM\ManyToOne(targetEntity=Date::class, inversedBy="observatoire2s")
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

    public function getCheck1(): ?bool
    {
        return $this->check1;
    }

    public function setCheck1(?bool $check1): self
    {
        $this->check1 = $check1;

        return $this;
    }

    public function getCheck2(): ?bool
    {
        return $this->check2;
    }

    public function setCheck2(?bool $check2): self
    {
        $this->check2 = $check2;

        return $this;
    }

    public function getCheck3(): ?bool
    {
        return $this->check3;
    }

    public function setCheck3(?bool $check3): self
    {
        $this->check3 = $check3;

        return $this;
    }

    public function getCheck4(): ?bool
    {
        return $this->check4;
    }

    public function setCheck4(?bool $check4): self
    {
        $this->check4 = $check4;

        return $this;
    }

    public function getCheck5(): ?bool
    {
        return $this->check5;
    }

    public function setCheck5(?bool $check5): self
    {
        $this->check5 = $check5;

        return $this;
    }

    public function getCheck6(): ?bool
    {
        return $this->check6;
    }

    public function setCheck6(?bool $check6): self
    {
        $this->check6 = $check6;

        return $this;
    }

    public function getCheck7(): ?bool
    {
        return $this->check7;
    }

    public function setCheck7(?bool $check7): self
    {
        $this->check7 = $check7;

        return $this;
    }

    public function getCheck8(): ?bool
    {
        return $this->check8;
    }

    public function setCheck8(?bool $check8): self
    {
        $this->check8 = $check8;

        return $this;
    }

    public function getCheck9(): ?bool
    {
        return $this->check9;
    }

    public function setCheck9(?bool $check9): self
    {
        $this->check9 = $check9;

        return $this;
    }

    public function getText1(): ?string
    {
        return $this->text1;
    }

    public function setText1(?string $text1): self
    {
        $this->text1 = $text1;

        return $this;
    }

    public function getText2(): ?string
    {
        return $this->text2;
    }

    public function setText2(?string $text2): self
    {
        $this->text2 = $text2;

        return $this;
    }

    public function getText3(): ?string
    {
        return $this->text3;
    }

    public function setText3(?string $text3): self
    {
        $this->text3 = $text3;

        return $this;
    }

    public function getText4(): ?string
    {
        return $this->text4;
    }

    public function setText4(?string $text4): self
    {
        $this->text4 = $text4;

        return $this;
    }

    public function getText5(): ?string
    {
        return $this->text5;
    }

    public function setText5(?string $text5): self
    {
        $this->text5 = $text5;

        return $this;
    }

    public function getText6(): ?string
    {
        return $this->text6;
    }

    public function setText6(string $text6): self
    {
        $this->text6 = $text6;

        return $this;
    }

    public function getTab1(): ?string
    {
        return $this->tab1;
    }

    public function setTab1(?string $tab1): self
    {
        $this->tab1 = $tab1;

        return $this;
    }

    public function getTab2(): ?string
    {
        return $this->tab2;
    }

    public function setTab2(?string $tab2): self
    {
        $this->tab2 = $tab2;

        return $this;
    }

    public function getTab3(): ?string
    {
        return $this->tab3;
    }

    public function setTab3(?string $tab3): self
    {
        $this->tab3 = $tab3;

        return $this;
    }

    public function getTab4(): ?string
    {
        return $this->tab4;
    }

    public function setTab4(?string $tab4): self
    {
        $this->tab4 = $tab4;

        return $this;
    }

    public function getTab5(): ?string
    {
        return $this->tab5;
    }

    public function setTab5(?string $tab5): self
    {
        $this->tab5 = $tab5;

        return $this;
    }

    public function getTab6(): ?string
    {
        return $this->tab6;
    }

    public function setTab6(?string $tab6): self
    {
        $this->tab6 = $tab6;

        return $this;
    }

    public function getTab7(): ?string
    {
        return $this->tab7;
    }

    public function setTab7(?string $tab7): self
    {
        $this->tab7 = $tab7;

        return $this;
    }

    public function getTab8(): ?string
    {
        return $this->tab8;
    }

    public function setTab8(?string $tab8): self
    {
        $this->tab8 = $tab8;

        return $this;
    }

    public function getTab9(): ?string
    {
        return $this->tab9;
    }

    public function setTab9(?string $tab9): self
    {
        $this->tab9 = $tab9;

        return $this;
    }

    public function getTab10(): ?string
    {
        return $this->tab10;
    }

    public function setTab10(?string $tab10): self
    {
        $this->tab10 = $tab10;

        return $this;
    }

    public function getTab11(): ?string
    {
        return $this->tab11;
    }

    public function setTab11(?string $tab11): self
    {
        $this->tab11 = $tab11;

        return $this;
    }

    public function getTabdeux1(): ?string
    {
        return $this->tabdeux1;
    }

    public function setTabdeux1(?string $tabdeux1): self
    {
        $this->tabdeux1 = $tabdeux1;

        return $this;
    }

    public function getTabdeux2(): ?string
    {
        return $this->tabdeux2;
    }

    public function setTabdeux2(?string $tabdeux2): self
    {
        $this->tabdeux2 = $tabdeux2;

        return $this;
    }

    public function getTabdeux3(): ?string
    {
        return $this->tabdeux3;
    }

    public function setTabdeux3(?string $tabdeux3): self
    {
        $this->tabdeux3 = $tabdeux3;

        return $this;
    }

    public function getTabdeux4(): ?string
    {
        return $this->tabdeux4;
    }

    public function setTabdeux4(?string $tabdeux4): self
    {
        $this->tabdeux4 = $tabdeux4;

        return $this;
    }

    public function getText7(): ?string
    {
        return $this->text7;
    }

    public function setText7(?string $text7): self
    {
        $this->text7 = $text7;

        return $this;
    }

    public function getCheck10(): ?bool
    {
        return $this->check10;
    }

    public function setCheck10(?bool $check10): self
    {
        $this->check10 = $check10;

        return $this;
    }

    public function getCheck11(): ?bool
    {
        return $this->check11;
    }

    public function setCheck11(?bool $check11): self
    {
        $this->check11 = $check11;

        return $this;
    }

    public function getCheck12(): ?bool
    {
        return $this->check12;
    }

    public function setCheck12(?bool $check12): self
    {
        $this->check12 = $check12;

        return $this;
    }

    public function getTabtrois1(): ?string
    {
        return $this->tabtrois1;
    }

    public function setTabtrois1(?string $tabtrois1): self
    {
        $this->tabtrois1 = $tabtrois1;

        return $this;
    }

    public function getTabtrois2(): ?string
    {
        return $this->tabtrois2;
    }

    public function setTabtrois2(?string $tabtrois2): self
    {
        $this->tabtrois2 = $tabtrois2;

        return $this;
    }

    public function getTabtrois3(): ?string
    {
        return $this->tabtrois3;
    }

    public function setTabtrois3(?string $tabtrois3): self
    {
        $this->tabtrois3 = $tabtrois3;

        return $this;
    }

    public function getTabtrois4(): ?string
    {
        return $this->tabtrois4;
    }

    public function setTabtrois4(?string $tabtrois4): self
    {
        $this->tabtrois4 = $tabtrois4;

        return $this;
    }

    public function getTabtrois5(): ?string
    {
        return $this->tabtrois5;
    }

    public function setTabtrois5(?string $tabtrois5): self
    {
        $this->tabtrois5 = $tabtrois5;

        return $this;
    }

    public function getTabtrois6(): ?string
    {
        return $this->tabtrois6;
    }

    public function setTabtrois6(?string $tabtrois6): self
    {
        $this->tabtrois6 = $tabtrois6;

        return $this;
    }

    public function getTabquatre1(): ?string
    {
        return $this->tabquatre1;
    }

    public function setTabquatre1(?string $tabquatre1): self
    {
        $this->tabquatre1 = $tabquatre1;

        return $this;
    }

    public function getTabquatre2(): ?string
    {
        return $this->tabquatre2;
    }

    public function setTabquatre2(?string $tabquatre2): self
    {
        $this->tabquatre2 = $tabquatre2;

        return $this;
    }

    public function getTabquatre3(): ?string
    {
        return $this->tabquatre3;
    }

    public function setTabquatre3(?string $tabquatre3): self
    {
        $this->tabquatre3 = $tabquatre3;

        return $this;
    }

    public function getTabquatre4(): ?string
    {
        return $this->tabquatre4;
    }

    public function setTabquatre4(?string $tabquatre4): self
    {
        $this->tabquatre4 = $tabquatre4;

        return $this;
    }

    public function getTabquatre5(): ?string
    {
        return $this->tabquatre5;
    }

    public function setTabquatre5(?string $tabquatre5): self
    {
        $this->tabquatre5 = $tabquatre5;

        return $this;
    }

    public function getTabquatre6(): ?string
    {
        return $this->tabquatre6;
    }

    public function setTabquatre6(?string $tabquatre6): self
    {
        $this->tabquatre6 = $tabquatre6;

        return $this;
    }

    public function getTabcinq1(): ?string
    {
        return $this->tabcinq1;
    }

    public function setTabcinq1(?string $tabcinq1): self
    {
        $this->tabcinq1 = $tabcinq1;

        return $this;
    }

    public function getTabcinq2(): ?string
    {
        return $this->tabcinq2;
    }

    public function setTabcinq2(?string $tabcinq2): self
    {
        $this->tabcinq2 = $tabcinq2;

        return $this;
    }

    public function getCheck13(): ?bool
    {
        return $this->check13;
    }

    public function setCheck13(?bool $check13): self
    {
        $this->check13 = $check13;

        return $this;
    }

    public function getCheck14(): ?bool
    {
        return $this->check14;
    }

    public function setCheck14(?bool $check14): self
    {
        $this->check14 = $check14;

        return $this;
    }

    public function getCheck15(): ?bool
    {
        return $this->check15;
    }

    public function setCheck15(?bool $check15): self
    {
        $this->check15 = $check15;

        return $this;
    }

    public function getCheck16(): ?bool
    {
        return $this->check16;
    }

    public function setCheck16(?bool $check16): self
    {
        $this->check16 = $check16;

        return $this;
    }

    public function getTabsix1(): ?string
    {
        return $this->tabsix1;
    }

    public function setTabsix1(?string $tabsix1): self
    {
        $this->tabsix1 = $tabsix1;

        return $this;
    }

    public function getTabsix2(): ?string
    {
        return $this->tabsix2;
    }

    public function setTabsix2(?string $tabsix2): self
    {
        $this->tabsix2 = $tabsix2;

        return $this;
    }

    public function getTabsix3(): ?string
    {
        return $this->tabsix3;
    }

    public function setTabsix3(?string $tabsix3): self
    {
        $this->tabsix3 = $tabsix3;

        return $this;
    }

    public function getTabsix4(): ?string
    {
        return $this->tabsix4;
    }

    public function setTabsix4(?string $tabsix4): self
    {
        $this->tabsix4 = $tabsix4;

        return $this;
    }

    public function getTabsix5(): ?string
    {
        return $this->tabsix5;
    }

    public function setTabsix5(?string $tabsix5): self
    {
        $this->tabsix5 = $tabsix5;

        return $this;
    }

    public function getConclusion(): ?string
    {
        return $this->conclusion;
    }

    public function setConclusion(?string $conclusion): self
    {
        $this->conclusion = $conclusion;

        return $this;
    }

    public function getConclusion1(): ?string
    {
        return $this->conclusion1;
    }

    public function setConclusion1(?string $conclusion1): self
    {
        $this->conclusion1 = $conclusion1;

        return $this;
    }

    public function getConclusion2(): ?string
    {
        return $this->conclusion2;
    }

    public function setConclusion2(?string $conclusion2): self
    {
        $this->conclusion2 = $conclusion2;

        return $this;
    }

    public function getConclusion3(): ?string
    {
        return $this->conclusion3;
    }

    public function setConclusion3(?string $conclusion3): self
    {
        $this->conclusion3 = $conclusion3;

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
