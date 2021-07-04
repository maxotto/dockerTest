<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demontazh1cData
 *
 * @ORM\Table(name="demontazh_1c_data", indexes={@ORM\Index(name="IDX_demontazh_1c_data_guid", columns={"guid"}), @ORM\Index(name="IDX_demontazh_1c_data_code_ais_uon", columns={"code_ais_uon"})})
 * @ORM\Entity
 */
class Demontazh1cData
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="guid", type="string", length=255, nullable=true)
     */
    private $guid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_os", type="string", length=255, nullable=true)
     */
    private $groupOs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="schet_bu", type="string", length=255, nullable=true)
     */
    private $schetBu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="schet_bu_opisanie", type="string", length=255, nullable=true)
     */
    private $schetBuOpisanie;

    /**
     * @var string|null
     *
     * @ORM\Column(name="os", type="string", length=255, nullable=true)
     */
    private $os;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_filiala", type="string", length=255, nullable=true)
     */
    private $codeFiliala;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filial_txt", type="string", length=255, nullable=true)
     */
    private $filialTxt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_ais_uon", type="string", length=255, nullable=true)
     */
    private $codeAisUon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rnfi", type="string", length=255, nullable=true)
     */
    private $rnfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=true)
     */
    private $place;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="n_pasporta", type="string", length=255, nullable=true)
     */
    private $nPasporta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="issue_date", type="string", length=255, nullable=true)
     */
    private $issueDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inv_number", type="string", length=255, nullable=true)
     */
    private $invNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kadastr_number", type="string", length=255, nullable=true)
     */
    private $kadastrNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kadastr_stoim", type="string", length=255, nullable=true)
     */
    private $kadastrStoim;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(?string $guid): self
    {
        $this->guid = $guid;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getGroupOs(): ?string
    {
        return $this->groupOs;
    }

    public function setGroupOs(?string $groupOs): self
    {
        $this->groupOs = $groupOs;

        return $this;
    }

    public function getSchetBu(): ?string
    {
        return $this->schetBu;
    }

    public function setSchetBu(?string $schetBu): self
    {
        $this->schetBu = $schetBu;

        return $this;
    }

    public function getSchetBuOpisanie(): ?string
    {
        return $this->schetBuOpisanie;
    }

    public function setSchetBuOpisanie(?string $schetBuOpisanie): self
    {
        $this->schetBuOpisanie = $schetBuOpisanie;

        return $this;
    }

    public function getOs(): ?string
    {
        return $this->os;
    }

    public function setOs(?string $os): self
    {
        $this->os = $os;

        return $this;
    }

    public function getCodeFiliala(): ?string
    {
        return $this->codeFiliala;
    }

    public function setCodeFiliala(?string $codeFiliala): self
    {
        $this->codeFiliala = $codeFiliala;

        return $this;
    }

    public function getFilialTxt(): ?string
    {
        return $this->filialTxt;
    }

    public function setFilialTxt(?string $filialTxt): self
    {
        $this->filialTxt = $filialTxt;

        return $this;
    }

    public function getCodeAisUon(): ?string
    {
        return $this->codeAisUon;
    }

    public function setCodeAisUon(?string $codeAisUon): self
    {
        $this->codeAisUon = $codeAisUon;

        return $this;
    }

    public function getRnfi(): ?string
    {
        return $this->rnfi;
    }

    public function setRnfi(?string $rnfi): self
    {
        $this->rnfi = $rnfi;

        return $this;
    }

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(?string $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getNPasporta(): ?string
    {
        return $this->nPasporta;
    }

    public function setNPasporta(?string $nPasporta): self
    {
        $this->nPasporta = $nPasporta;

        return $this;
    }

    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }

    public function setIssueDate(?string $issueDate): self
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    public function getInvNumber(): ?string
    {
        return $this->invNumber;
    }

    public function setInvNumber(?string $invNumber): self
    {
        $this->invNumber = $invNumber;

        return $this;
    }

    public function getKadastrNumber(): ?string
    {
        return $this->kadastrNumber;
    }

    public function setKadastrNumber(?string $kadastrNumber): self
    {
        $this->kadastrNumber = $kadastrNumber;

        return $this;
    }

    public function getKadastrStoim(): ?string
    {
        return $this->kadastrStoim;
    }

    public function setKadastrStoim(?string $kadastrStoim): self
    {
        $this->kadastrStoim = $kadastrStoim;

        return $this;
    }


}
