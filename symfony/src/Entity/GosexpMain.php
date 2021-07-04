<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GosexpMain
 *
 * @ORM\Table(name="gosexp_main", uniqueConstraints={@ORM\UniqueConstraint(name="fil_et_id", columns={"fil_et_id"})}, indexes={@ORM\Index(name="gip_user_id", columns={"gip_user_id"}), @ORM\Index(name="integrator_id", columns={"integrator_id"}), @ORM\Index(name="rtrs_user_id", columns={"rtrs_user_id"})})
 * @ORM\Entity
 */
class GosexpMain
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
     * @var int
     *
     * @ORM\Column(name="fil_et_id", type="integer", nullable=false)
     */
    private $filEtId;

    /**
     * @var int
     *
     * @ORM\Column(name="integrator_id", type="integer", nullable=false)
     */
    private $integratorId;

    /**
     * @var int
     *
     * @ORM\Column(name="rtrs_user_id", type="integer", nullable=false)
     */
    private $rtrsUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="gip_user_id", type="integer", nullable=false)
     */
    private $gipUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="ge_type", type="integer", nullable=false)
     */
    private $geType = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ge_place", type="integer", nullable=false)
     */
    private $gePlace = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="input_pd_status", type="integer", nullable=false)
     */
    private $inputPdStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="input_pd_plan", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $inputPdPlan = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="input_pd_fact", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $inputPdFact = '1970-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="input_pd_comment", type="text", length=65535, nullable=false)
     */
    private $inputPdComment;

    /**
     * @var int
     *
     * @ORM\Column(name="input_sd_status", type="integer", nullable=false)
     */
    private $inputSdStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="input_sd_plan", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $inputSdPlan = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="input_sd_fact", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $inputSdFact = '1970-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="input_sd_comment", type="text", length=65535, nullable=false)
     */
    private $inputSdComment;

    /**
     * @var int
     *
     * @ORM\Column(name="input_sp_status", type="integer", nullable=false)
     */
    private $inputSpStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="input_sp_plan", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $inputSpPlan = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="input_sp_fact", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $inputSpFact = '1970-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="input_sp_comment", type="text", length=65535, nullable=false)
     */
    private $inputSpComment;

    /**
     * @var int
     *
     * @ORM\Column(name="ge_check_pd_status", type="integer", nullable=false)
     */
    private $geCheckPdStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ge_check_pd_plan", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $geCheckPdPlan = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ge_check_pd_fact", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $geCheckPdFact = '1970-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="ge_check_pd_comment", type="text", length=65535, nullable=false)
     */
    private $geCheckPdComment;

    /**
     * @var int
     *
     * @ORM\Column(name="ge_check_sd_status", type="integer", nullable=false)
     */
    private $geCheckSdStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ge_check_sd_plan", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $geCheckSdPlan = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ge_check_sd_fact", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $geCheckSdFact = '1970-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="ge_check_sd_comment", type="text", length=65535, nullable=false)
     */
    private $geCheckSdComment;

    /**
     * @var string
     *
     * @ORM\Column(name="ge_zakl_number", type="text", length=65535, nullable=false)
     */
    private $geZaklNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ge_zakl_date", type="date", nullable=true, options={"default"="1970-01-01"})
     */
    private $geZaklDate = '1970-01-01';

    /**
     * @var int
     *
     * @ORM\Column(name="rospech_status", type="integer", nullable=false)
     */
    private $rospechStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rospech_plan", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $rospechPlan = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rospech_fact", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $rospechFact = '1970-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="rospech_comment", type="text", length=65535, nullable=false)
     */
    private $rospechComment;

    /**
     * @var string
     *
     * @ORM\Column(name="rospech_zakl_number", type="text", length=65535, nullable=false)
     */
    private $rospechZaklNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="zakl_in_rtrs_date_fact", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $zaklInRtrsDateFact = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="zakl_in_rtrs_date_plan", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $zaklInRtrsDatePlan = '1970-01-01';

    /**
     * @var int
     *
     * @ORM\Column(name="zakl_in_rtrs_ekz_count", type="integer", nullable=false)
     */
    private $zaklInRtrsEkzCount = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="final_psd_in_rtrs_fact", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $finalPsdInRtrsFact = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="final_psd_in_rtrs_plan", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $finalPsdInRtrsPlan = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="final_psd_in_filial_fact", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $finalPsdInFilialFact = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="final_psd_in_filial_plan", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $finalPsdInFilialPlan = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date", nullable=false)
     */
    private $dateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_end", type="date", nullable=true)
     */
    private $dateEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edited_when", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $editedWhen = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="edited_who", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $editedWho;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilEtId(): ?int
    {
        return $this->filEtId;
    }

    public function setFilEtId(int $filEtId): self
    {
        $this->filEtId = $filEtId;

        return $this;
    }

    public function getIntegratorId(): ?int
    {
        return $this->integratorId;
    }

    public function setIntegratorId(int $integratorId): self
    {
        $this->integratorId = $integratorId;

        return $this;
    }

    public function getRtrsUserId(): ?int
    {
        return $this->rtrsUserId;
    }

    public function setRtrsUserId(int $rtrsUserId): self
    {
        $this->rtrsUserId = $rtrsUserId;

        return $this;
    }

    public function getGipUserId(): ?int
    {
        return $this->gipUserId;
    }

    public function setGipUserId(int $gipUserId): self
    {
        $this->gipUserId = $gipUserId;

        return $this;
    }

    public function getGeType(): ?int
    {
        return $this->geType;
    }

    public function setGeType(int $geType): self
    {
        $this->geType = $geType;

        return $this;
    }

    public function getGePlace(): ?int
    {
        return $this->gePlace;
    }

    public function setGePlace(int $gePlace): self
    {
        $this->gePlace = $gePlace;

        return $this;
    }

    public function getInputPdStatus(): ?int
    {
        return $this->inputPdStatus;
    }

    public function setInputPdStatus(int $inputPdStatus): self
    {
        $this->inputPdStatus = $inputPdStatus;

        return $this;
    }

    public function getInputPdPlan(): ?\DateTimeInterface
    {
        return $this->inputPdPlan;
    }

    public function setInputPdPlan(\DateTimeInterface $inputPdPlan): self
    {
        $this->inputPdPlan = $inputPdPlan;

        return $this;
    }

    public function getInputPdFact(): ?\DateTimeInterface
    {
        return $this->inputPdFact;
    }

    public function setInputPdFact(\DateTimeInterface $inputPdFact): self
    {
        $this->inputPdFact = $inputPdFact;

        return $this;
    }

    public function getInputPdComment(): ?string
    {
        return $this->inputPdComment;
    }

    public function setInputPdComment(string $inputPdComment): self
    {
        $this->inputPdComment = $inputPdComment;

        return $this;
    }

    public function getInputSdStatus(): ?int
    {
        return $this->inputSdStatus;
    }

    public function setInputSdStatus(int $inputSdStatus): self
    {
        $this->inputSdStatus = $inputSdStatus;

        return $this;
    }

    public function getInputSdPlan(): ?\DateTimeInterface
    {
        return $this->inputSdPlan;
    }

    public function setInputSdPlan(\DateTimeInterface $inputSdPlan): self
    {
        $this->inputSdPlan = $inputSdPlan;

        return $this;
    }

    public function getInputSdFact(): ?\DateTimeInterface
    {
        return $this->inputSdFact;
    }

    public function setInputSdFact(\DateTimeInterface $inputSdFact): self
    {
        $this->inputSdFact = $inputSdFact;

        return $this;
    }

    public function getInputSdComment(): ?string
    {
        return $this->inputSdComment;
    }

    public function setInputSdComment(string $inputSdComment): self
    {
        $this->inputSdComment = $inputSdComment;

        return $this;
    }

    public function getInputSpStatus(): ?int
    {
        return $this->inputSpStatus;
    }

    public function setInputSpStatus(int $inputSpStatus): self
    {
        $this->inputSpStatus = $inputSpStatus;

        return $this;
    }

    public function getInputSpPlan(): ?\DateTimeInterface
    {
        return $this->inputSpPlan;
    }

    public function setInputSpPlan(\DateTimeInterface $inputSpPlan): self
    {
        $this->inputSpPlan = $inputSpPlan;

        return $this;
    }

    public function getInputSpFact(): ?\DateTimeInterface
    {
        return $this->inputSpFact;
    }

    public function setInputSpFact(\DateTimeInterface $inputSpFact): self
    {
        $this->inputSpFact = $inputSpFact;

        return $this;
    }

    public function getInputSpComment(): ?string
    {
        return $this->inputSpComment;
    }

    public function setInputSpComment(string $inputSpComment): self
    {
        $this->inputSpComment = $inputSpComment;

        return $this;
    }

    public function getGeCheckPdStatus(): ?int
    {
        return $this->geCheckPdStatus;
    }

    public function setGeCheckPdStatus(int $geCheckPdStatus): self
    {
        $this->geCheckPdStatus = $geCheckPdStatus;

        return $this;
    }

    public function getGeCheckPdPlan(): ?\DateTimeInterface
    {
        return $this->geCheckPdPlan;
    }

    public function setGeCheckPdPlan(\DateTimeInterface $geCheckPdPlan): self
    {
        $this->geCheckPdPlan = $geCheckPdPlan;

        return $this;
    }

    public function getGeCheckPdFact(): ?\DateTimeInterface
    {
        return $this->geCheckPdFact;
    }

    public function setGeCheckPdFact(\DateTimeInterface $geCheckPdFact): self
    {
        $this->geCheckPdFact = $geCheckPdFact;

        return $this;
    }

    public function getGeCheckPdComment(): ?string
    {
        return $this->geCheckPdComment;
    }

    public function setGeCheckPdComment(string $geCheckPdComment): self
    {
        $this->geCheckPdComment = $geCheckPdComment;

        return $this;
    }

    public function getGeCheckSdStatus(): ?int
    {
        return $this->geCheckSdStatus;
    }

    public function setGeCheckSdStatus(int $geCheckSdStatus): self
    {
        $this->geCheckSdStatus = $geCheckSdStatus;

        return $this;
    }

    public function getGeCheckSdPlan(): ?\DateTimeInterface
    {
        return $this->geCheckSdPlan;
    }

    public function setGeCheckSdPlan(\DateTimeInterface $geCheckSdPlan): self
    {
        $this->geCheckSdPlan = $geCheckSdPlan;

        return $this;
    }

    public function getGeCheckSdFact(): ?\DateTimeInterface
    {
        return $this->geCheckSdFact;
    }

    public function setGeCheckSdFact(\DateTimeInterface $geCheckSdFact): self
    {
        $this->geCheckSdFact = $geCheckSdFact;

        return $this;
    }

    public function getGeCheckSdComment(): ?string
    {
        return $this->geCheckSdComment;
    }

    public function setGeCheckSdComment(string $geCheckSdComment): self
    {
        $this->geCheckSdComment = $geCheckSdComment;

        return $this;
    }

    public function getGeZaklNumber(): ?string
    {
        return $this->geZaklNumber;
    }

    public function setGeZaklNumber(string $geZaklNumber): self
    {
        $this->geZaklNumber = $geZaklNumber;

        return $this;
    }

    public function getGeZaklDate(): ?\DateTimeInterface
    {
        return $this->geZaklDate;
    }

    public function setGeZaklDate(?\DateTimeInterface $geZaklDate): self
    {
        $this->geZaklDate = $geZaklDate;

        return $this;
    }

    public function getRospechStatus(): ?int
    {
        return $this->rospechStatus;
    }

    public function setRospechStatus(int $rospechStatus): self
    {
        $this->rospechStatus = $rospechStatus;

        return $this;
    }

    public function getRospechPlan(): ?\DateTimeInterface
    {
        return $this->rospechPlan;
    }

    public function setRospechPlan(\DateTimeInterface $rospechPlan): self
    {
        $this->rospechPlan = $rospechPlan;

        return $this;
    }

    public function getRospechFact(): ?\DateTimeInterface
    {
        return $this->rospechFact;
    }

    public function setRospechFact(\DateTimeInterface $rospechFact): self
    {
        $this->rospechFact = $rospechFact;

        return $this;
    }

    public function getRospechComment(): ?string
    {
        return $this->rospechComment;
    }

    public function setRospechComment(string $rospechComment): self
    {
        $this->rospechComment = $rospechComment;

        return $this;
    }

    public function getRospechZaklNumber(): ?string
    {
        return $this->rospechZaklNumber;
    }

    public function setRospechZaklNumber(string $rospechZaklNumber): self
    {
        $this->rospechZaklNumber = $rospechZaklNumber;

        return $this;
    }

    public function getZaklInRtrsDateFact(): ?\DateTimeInterface
    {
        return $this->zaklInRtrsDateFact;
    }

    public function setZaklInRtrsDateFact(\DateTimeInterface $zaklInRtrsDateFact): self
    {
        $this->zaklInRtrsDateFact = $zaklInRtrsDateFact;

        return $this;
    }

    public function getZaklInRtrsDatePlan(): ?\DateTimeInterface
    {
        return $this->zaklInRtrsDatePlan;
    }

    public function setZaklInRtrsDatePlan(\DateTimeInterface $zaklInRtrsDatePlan): self
    {
        $this->zaklInRtrsDatePlan = $zaklInRtrsDatePlan;

        return $this;
    }

    public function getZaklInRtrsEkzCount(): ?int
    {
        return $this->zaklInRtrsEkzCount;
    }

    public function setZaklInRtrsEkzCount(int $zaklInRtrsEkzCount): self
    {
        $this->zaklInRtrsEkzCount = $zaklInRtrsEkzCount;

        return $this;
    }

    public function getFinalPsdInRtrsFact(): ?\DateTimeInterface
    {
        return $this->finalPsdInRtrsFact;
    }

    public function setFinalPsdInRtrsFact(\DateTimeInterface $finalPsdInRtrsFact): self
    {
        $this->finalPsdInRtrsFact = $finalPsdInRtrsFact;

        return $this;
    }

    public function getFinalPsdInRtrsPlan(): ?\DateTimeInterface
    {
        return $this->finalPsdInRtrsPlan;
    }

    public function setFinalPsdInRtrsPlan(\DateTimeInterface $finalPsdInRtrsPlan): self
    {
        $this->finalPsdInRtrsPlan = $finalPsdInRtrsPlan;

        return $this;
    }

    public function getFinalPsdInFilialFact(): ?\DateTimeInterface
    {
        return $this->finalPsdInFilialFact;
    }

    public function setFinalPsdInFilialFact(\DateTimeInterface $finalPsdInFilialFact): self
    {
        $this->finalPsdInFilialFact = $finalPsdInFilialFact;

        return $this;
    }

    public function getFinalPsdInFilialPlan(): ?\DateTimeInterface
    {
        return $this->finalPsdInFilialPlan;
    }

    public function setFinalPsdInFilialPlan(\DateTimeInterface $finalPsdInFilialPlan): self
    {
        $this->finalPsdInFilialPlan = $finalPsdInFilialPlan;

        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->dateStart;
    }

    public function setDateStart(\DateTimeInterface $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->dateEnd;
    }

    public function setDateEnd(?\DateTimeInterface $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    public function getEditedWhen(): ?\DateTimeInterface
    {
        return $this->editedWhen;
    }

    public function setEditedWhen(\DateTimeInterface $editedWhen): self
    {
        $this->editedWhen = $editedWhen;

        return $this;
    }

    public function getEditedWho(): ?int
    {
        return $this->editedWho;
    }

    public function setEditedWho(int $editedWho): self
    {
        $this->editedWho = $editedWho;

        return $this;
    }


}
