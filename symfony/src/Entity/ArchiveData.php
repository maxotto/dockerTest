<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchiveData
 *
 * @ORM\Table(name="archive_data", indexes={@ORM\Index(name="razdel", columns={"razdel_id", "sub_razdel_id"}), @ORM\Index(name="year", columns={"year"}), @ORM\Index(name="isFaip", columns={"is_faip"}), @ORM\Index(name="fcpo", columns={"fcp_object_id"}), @ORM\Index(name="doc_type", columns={"doc_type_id"}), @ORM\Index(name="shifr", columns={"shifr"}), @ORM\Index(name="IDX_archive_data_multiplex_id", columns={"multiplex_id"}), @ORM\Index(name="orgs", columns={"org_id"})})
 * @ORM\Entity
 */
class ArchiveData
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
     * @ORM\Column(name="org_id", type="integer", nullable=false)
     */
    private $orgId;

    /**
     * @var int
     *
     * @ORM\Column(name="fcp_object_id", type="integer", nullable=false)
     */
    private $fcpObjectId;

    /**
     * @var int
     *
     * @ORM\Column(name="doc_type_id", type="integer", nullable=false)
     */
    private $docTypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="razdel_id", type="integer", nullable=false)
     */
    private $razdelId;

    /**
     * @var int
     *
     * @ORM\Column(name="sub_razdel_id", type="integer", nullable=false)
     */
    private $subRazdelId;

    /**
     * @var string
     *
     * @ORM\Column(name="tom", type="string", length=255, nullable=false)
     */
    private $tom = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="shifr", type="string", length=45, nullable=true)
     */
    private $shifr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="input_date", type="date", nullable=true)
     */
    private $inputDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="went_to_filial_date", type="date", nullable=true)
     */
    private $wentToFilialDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place_of_ekz_1", type="string", length=45, nullable=true)
     */
    private $placeOfEkz1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place_of_ekz_2", type="string", length=45, nullable=true)
     */
    private $placeOfEkz2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place_of_ekz_3", type="string", length=45, nullable=true)
     */
    private $placeOfEkz3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place_of_ekz_4", type="string", length=45, nullable=true)
     */
    private $placeOfEkz4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place_of_ekz_5", type="string", length=45, nullable=true)
     */
    private $placeOfEkz5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place_of_ekz_6", type="string", length=45, nullable=true)
     */
    private $placeOfEkz6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="place_of_ekz_7", type="string", length=45, nullable=true)
     */
    private $placeOfEkz7;

    /**
     * @var int
     *
     * @ORM\Column(name="is_faip", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $isFaip = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="multiplex_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $multiplexId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="final_version", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $finalVersion = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dogovor_txt", type="string", length=255, nullable=false)
     */
    private $dogovorTxt = '';

    /**
     * @var int
     *
     * @ORM\Column(name="has_sign", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $hasSign = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="project_type", type="integer", nullable=false, options={"default"="1"})
     */
    private $projectType = 1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrgId(): ?int
    {
        return $this->orgId;
    }

    public function setOrgId(int $orgId): self
    {
        $this->orgId = $orgId;

        return $this;
    }

    public function getFcpObjectId(): ?int
    {
        return $this->fcpObjectId;
    }

    public function setFcpObjectId(int $fcpObjectId): self
    {
        $this->fcpObjectId = $fcpObjectId;

        return $this;
    }

    public function getDocTypeId(): ?int
    {
        return $this->docTypeId;
    }

    public function setDocTypeId(int $docTypeId): self
    {
        $this->docTypeId = $docTypeId;

        return $this;
    }

    public function getRazdelId(): ?int
    {
        return $this->razdelId;
    }

    public function setRazdelId(int $razdelId): self
    {
        $this->razdelId = $razdelId;

        return $this;
    }

    public function getSubRazdelId(): ?int
    {
        return $this->subRazdelId;
    }

    public function setSubRazdelId(int $subRazdelId): self
    {
        $this->subRazdelId = $subRazdelId;

        return $this;
    }

    public function getTom(): ?string
    {
        return $this->tom;
    }

    public function setTom(string $tom): self
    {
        $this->tom = $tom;

        return $this;
    }

    public function getShifr(): ?string
    {
        return $this->shifr;
    }

    public function setShifr(?string $shifr): self
    {
        $this->shifr = $shifr;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getInputDate(): ?\DateTimeInterface
    {
        return $this->inputDate;
    }

    public function setInputDate(?\DateTimeInterface $inputDate): self
    {
        $this->inputDate = $inputDate;

        return $this;
    }

    public function getWentToFilialDate(): ?\DateTimeInterface
    {
        return $this->wentToFilialDate;
    }

    public function setWentToFilialDate(?\DateTimeInterface $wentToFilialDate): self
    {
        $this->wentToFilialDate = $wentToFilialDate;

        return $this;
    }

    public function getPlaceOfEkz1(): ?string
    {
        return $this->placeOfEkz1;
    }

    public function setPlaceOfEkz1(?string $placeOfEkz1): self
    {
        $this->placeOfEkz1 = $placeOfEkz1;

        return $this;
    }

    public function getPlaceOfEkz2(): ?string
    {
        return $this->placeOfEkz2;
    }

    public function setPlaceOfEkz2(?string $placeOfEkz2): self
    {
        $this->placeOfEkz2 = $placeOfEkz2;

        return $this;
    }

    public function getPlaceOfEkz3(): ?string
    {
        return $this->placeOfEkz3;
    }

    public function setPlaceOfEkz3(?string $placeOfEkz3): self
    {
        $this->placeOfEkz3 = $placeOfEkz3;

        return $this;
    }

    public function getPlaceOfEkz4(): ?string
    {
        return $this->placeOfEkz4;
    }

    public function setPlaceOfEkz4(?string $placeOfEkz4): self
    {
        $this->placeOfEkz4 = $placeOfEkz4;

        return $this;
    }

    public function getPlaceOfEkz5(): ?string
    {
        return $this->placeOfEkz5;
    }

    public function setPlaceOfEkz5(?string $placeOfEkz5): self
    {
        $this->placeOfEkz5 = $placeOfEkz5;

        return $this;
    }

    public function getPlaceOfEkz6(): ?string
    {
        return $this->placeOfEkz6;
    }

    public function setPlaceOfEkz6(?string $placeOfEkz6): self
    {
        $this->placeOfEkz6 = $placeOfEkz6;

        return $this;
    }

    public function getPlaceOfEkz7(): ?string
    {
        return $this->placeOfEkz7;
    }

    public function setPlaceOfEkz7(?string $placeOfEkz7): self
    {
        $this->placeOfEkz7 = $placeOfEkz7;

        return $this;
    }

    public function getIsFaip(): ?int
    {
        return $this->isFaip;
    }

    public function setIsFaip(int $isFaip): self
    {
        $this->isFaip = $isFaip;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMultiplexId(): ?int
    {
        return $this->multiplexId;
    }

    public function setMultiplexId(int $multiplexId): self
    {
        $this->multiplexId = $multiplexId;

        return $this;
    }

    public function getFinalVersion(): ?int
    {
        return $this->finalVersion;
    }

    public function setFinalVersion(int $finalVersion): self
    {
        $this->finalVersion = $finalVersion;

        return $this;
    }

    public function getDogovorTxt(): ?string
    {
        return $this->dogovorTxt;
    }

    public function setDogovorTxt(string $dogovorTxt): self
    {
        $this->dogovorTxt = $dogovorTxt;

        return $this;
    }

    public function getHasSign(): ?int
    {
        return $this->hasSign;
    }

    public function setHasSign(int $hasSign): self
    {
        $this->hasSign = $hasSign;

        return $this;
    }

    public function getProjectType(): ?int
    {
        return $this->projectType;
    }

    public function setProjectType(int $projectType): self
    {
        $this->projectType = $projectType;

        return $this;
    }


}
