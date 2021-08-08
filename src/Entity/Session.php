<?php

namespace App\Entity;

use App\Repository\SessionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SessionRepository::class)
 */
class Session
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $datesession;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nombrefichieraffiches;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fichier;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombredemandeproposition;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $proprietaireaccord;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateannonceconcours;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $montant;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nombreinstallation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $methodeconclusion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $naturefinancement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $natureaccord;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateentreprisdossierparcomite;

    /**
     * @ORM\Column(type="string", length=900, nullable=true)
     */
    private $notecomite;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateapprobationparconseiladministration;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $notesconseil;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateconclusiontransaction;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nombrecontrat;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $datedebutaccomplissement;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $datenotificationobservatoire;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $periodeaccord;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $dateestimeetimbre;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $periodegarantie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $uniteconcerne;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatesession(): ?string
    {
        return $this->datesession;
    }

    public function setDatesession(string $datesession): self
    {
        $this->datesession = $datesession;

        return $this;
    }

    public function getNombrefichieraffiches(): ?string
    {
        return $this->nombrefichieraffiches;
    }

    public function setNombrefichieraffiches(?string $nombrefichieraffiches): self
    {
        $this->nombrefichieraffiches = $nombrefichieraffiches;

        return $this;
    }

    public function getFichier(): ?string
    {
        return $this->fichier;
    }

    public function setFichier(?string $fichier): self
    {
        $this->fichier = $fichier;

        return $this;
    }

    public function getNombredemandeproposition(): ?string
    {
        return $this->nombredemandeproposition;
    }

    public function setNombredemandeproposition(?string $nombredemandeproposition): self
    {
        $this->nombredemandeproposition = $nombredemandeproposition;

        return $this;
    }

    public function getProprietaireaccord(): ?string
    {
        return $this->proprietaireaccord;
    }

    public function setProprietaireaccord(?string $proprietaireaccord): self
    {
        $this->proprietaireaccord = $proprietaireaccord;

        return $this;
    }

    public function getDateannonceconcours()
    {
        return $this->dateannonceconcours;
    }

    public function setDateannonceconcours(string $dateannonceconcours): self
    {
        $this->dateannonceconcours = $dateannonceconcours;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(?string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getNombreinstallation(): ?string
    {
        return $this->nombreinstallation;
    }

    public function setNombreinstallation(?string $nombreinstallation): self
    {
        $this->nombreinstallation = $nombreinstallation;

        return $this;
    }

    public function getMethodeconclusion(): ?string
    {
        return $this->methodeconclusion;
    }

    public function setMethodeconclusion(?string $methodeconclusion): self
    {
        $this->methodeconclusion = $methodeconclusion;

        return $this;
    }

    public function getNaturefinancement(): ?string
    {
        return $this->naturefinancement;
    }

    public function setNaturefinancement(?string $naturefinancement): self
    {
        $this->naturefinancement = $naturefinancement;

        return $this;
    }

    public function getNatureaccord(): ?string
    {
        return $this->natureaccord;
    }

    public function setNatureaccord(?string $natureaccord): self
    {
        $this->natureaccord = $natureaccord;

        return $this;
    }

    public function getDateentreprisdossierparcomite()
    {
        return $this->dateentreprisdossierparcomite;
    }

    public function setDateentreprisdossierparcomite(string $dateentreprisdossierparcomite): self
    {
        $this->dateentreprisdossierparcomite = $dateentreprisdossierparcomite;

        return $this;
    }

    public function getNotecomite(): ?string
    {
        return $this->notecomite;
    }

    public function setNotecomite(?string $notecomite): self
    {
        $this->notecomite = $notecomite;

        return $this;
    }

    public function getDateapprobationparconseiladministration()
    {
        return $this->dateapprobationparconseiladministration;
    }

    public function setDateapprobationparconseiladministration(string $dateapprobationparconseiladministration): self
    {
        $this->dateapprobationparconseiladministration = $dateapprobationparconseiladministration;

        return $this;
    }

    public function getNotesconseil(): ?string
    {
        return $this->notesconseil;
    }

    public function setNotesconseil(?string $notesconseil): self
    {
        $this->notesconseil = $notesconseil;

        return $this;
    }

    public function getDateconclusiontransaction()
    {
        return $this->dateconclusiontransaction;
    }

    public function setDateconclusiontransaction(string $dateconclusiontransaction): self
    {
        $this->dateconclusiontransaction = $dateconclusiontransaction;

        return $this;
    }

    public function getNombrecontrat(): ?string
    {
        return $this->nombrecontrat;
    }

    public function setNombrecontrat(?string $nombrecontrat): self
    {
        $this->nombrecontrat = $nombrecontrat;

        return $this;
    }

    public function getDatedebutaccomplissement()
    {
        return $this->datedebutaccomplissement;
    }

    public function setDatedebutaccomplissement(string $datedebutaccomplissement): self
    {
        $this->datedebutaccomplissement = $datedebutaccomplissement;

        return $this;
    }

    public function getDatenotificationobservatoire()
    {
        return $this->datenotificationobservatoire;
    }

    public function setDatenotificationobservatoire(string $datenotificationobservatoire): self
    {
        $this->datenotificationobservatoire = $datenotificationobservatoire;

        return $this;
    }

    public function getPeriodeaccord(): ?string
    {
        return $this->periodeaccord;
    }

    public function setPeriodeaccord(?string $periodeaccord): self
    {
        $this->periodeaccord = $periodeaccord;

        return $this;
    }

    public function getDateestimeetimbre()
    {
        return $this->dateestimeetimbre;
    }

    public function setDateestimeetimbre(string $dateestimeetimbre): self
    {
        $this->dateestimeetimbre = $dateestimeetimbre;

        return $this;
    }

    public function getPeriodegarantie(): ?string
    {
        return $this->periodegarantie;
    }

    public function setPeriodegarantie(?string $periodegarantie): self
    {
        $this->periodegarantie = $periodegarantie;

        return $this;
    }

    public function getUniteconcerne(): ?string
    {
        return $this->uniteconcerne;
    }

    public function setUniteconcerne(?string $uniteconcerne): self
    {
        $this->uniteconcerne = $uniteconcerne;

        return $this;
    }


    public function __toString(){
        return $this->fichier;
    }

}
