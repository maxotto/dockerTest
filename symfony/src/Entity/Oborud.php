<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oborud
 *
 * @ORM\Table(name="oborud", indexes={@ORM\Index(name="name", columns={"name"}), @ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class Oborud
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="fcp_object_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fcpObjectId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="root", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $root;

    /**
     * @var int
     *
     * @ORM\Column(name="lft", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lft;

    /**
     * @var int
     *
     * @ORM\Column(name="rgt", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rgt;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $level;

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

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $deleted = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="printed", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $printed = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="dogovor_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dogovorId;

    /**
     * @var int
     *
     * @ORM\Column(name="npp", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $npp;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=65535, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="edizm_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $edizmId;

    /**
     * @var int
     *
     * @ORM\Column(name="kol", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $kol;

    /**
     * @var string
     *
     * @ORM\Column(name="obor_type", type="text", length=65535, nullable=false)
     */
    private $oborType;

    /**
     * @var string
     *
     * @ORM\Column(name="zav_number", type="text", length=65535, nullable=false)
     */
    private $zavNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="stiom_obor", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $stiomObor = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="stiom_obor_temp", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $stiomOborTemp = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="percent_transp", type="decimal", precision=20, scale=2, nullable=false, options={"default"="3.00"})
     */
    private $percentTransp = '3.00';

    /**
     * @var string
     *
     * @ORM\Column(name="stiom_transp", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $stiomTransp = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="stiom_transp_temp", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $stiomTranspTemp = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="stiom_zag_skl", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $stiomZagSkl = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="stiom_zag_skl_temp", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $stiomZagSklTemp = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="percent_zag_skl", type="decimal", precision=20, scale=2, nullable=false, options={"default"="1.20"})
     */
    private $percentZagSkl = '1.20';

    /**
     * @var string
     *
     * @ORM\Column(name="stiom_komplekt", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $stiomKomplekt = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="stiom_komplekt_temp", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $stiomKomplektTemp = '0.00';

    /**
     * @var int
     *
     * @ORM\Column(name="lastingroup", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $lastingroup = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="check_1", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $check1 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="check_2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $check2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="check_3", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $check3 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="check_4", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $check4 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="check_5", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $check5 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="check_status", type="integer", nullable=true)
     */
    private $checkStatus = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="check_status_curator", type="integer", nullable=true)
     */
    private $checkStatusCurator = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="check_status_date", type="datetime", nullable=true)
     */
    private $checkStatusDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="check_status_curator_date", type="datetime", nullable=true)
     */
    private $checkStatusCuratorDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="check_text", type="text", length=65535, nullable=true)
     */
    private $checkText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="check_text_curator", type="text", length=65535, nullable=true)
     */
    private $checkTextCurator;

    /**
     * @var string|null
     *
     * @ORM\Column(name="answer_text", type="text", length=65535, nullable=true)
     */
    private $answerText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="answer_text_curator", type="text", length=65535, nullable=true)
     */
    private $answerTextCurator;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRoot(): ?int
    {
        return $this->root;
    }

    public function setRoot(?int $root): self
    {
        $this->root = $root;

        return $this;
    }

    public function getLft(): ?int
    {
        return $this->lft;
    }

    public function setLft(int $lft): self
    {
        $this->lft = $lft;

        return $this;
    }

    public function getRgt(): ?int
    {
        return $this->rgt;
    }

    public function setRgt(int $rgt): self
    {
        $this->rgt = $rgt;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

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

    public function getDeleted(): ?int
    {
        return $this->deleted;
    }

    public function setDeleted(int $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getPrinted(): ?int
    {
        return $this->printed;
    }

    public function setPrinted(int $printed): self
    {
        $this->printed = $printed;

        return $this;
    }

    public function getDogovorId(): ?int
    {
        return $this->dogovorId;
    }

    public function setDogovorId(int $dogovorId): self
    {
        $this->dogovorId = $dogovorId;

        return $this;
    }

    public function getNpp(): ?int
    {
        return $this->npp;
    }

    public function setNpp(int $npp): self
    {
        $this->npp = $npp;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEdizmId(): ?int
    {
        return $this->edizmId;
    }

    public function setEdizmId(int $edizmId): self
    {
        $this->edizmId = $edizmId;

        return $this;
    }

    public function getKol(): ?int
    {
        return $this->kol;
    }

    public function setKol(int $kol): self
    {
        $this->kol = $kol;

        return $this;
    }

    public function getOborType(): ?string
    {
        return $this->oborType;
    }

    public function setOborType(string $oborType): self
    {
        $this->oborType = $oborType;

        return $this;
    }

    public function getZavNumber(): ?string
    {
        return $this->zavNumber;
    }

    public function setZavNumber(string $zavNumber): self
    {
        $this->zavNumber = $zavNumber;

        return $this;
    }

    public function getStiomObor(): ?string
    {
        return $this->stiomObor;
    }

    public function setStiomObor(string $stiomObor): self
    {
        $this->stiomObor = $stiomObor;

        return $this;
    }

    public function getStiomOborTemp(): ?string
    {
        return $this->stiomOborTemp;
    }

    public function setStiomOborTemp(string $stiomOborTemp): self
    {
        $this->stiomOborTemp = $stiomOborTemp;

        return $this;
    }

    public function getPercentTransp(): ?string
    {
        return $this->percentTransp;
    }

    public function setPercentTransp(string $percentTransp): self
    {
        $this->percentTransp = $percentTransp;

        return $this;
    }

    public function getStiomTransp(): ?string
    {
        return $this->stiomTransp;
    }

    public function setStiomTransp(string $stiomTransp): self
    {
        $this->stiomTransp = $stiomTransp;

        return $this;
    }

    public function getStiomTranspTemp(): ?string
    {
        return $this->stiomTranspTemp;
    }

    public function setStiomTranspTemp(string $stiomTranspTemp): self
    {
        $this->stiomTranspTemp = $stiomTranspTemp;

        return $this;
    }

    public function getStiomZagSkl(): ?string
    {
        return $this->stiomZagSkl;
    }

    public function setStiomZagSkl(string $stiomZagSkl): self
    {
        $this->stiomZagSkl = $stiomZagSkl;

        return $this;
    }

    public function getStiomZagSklTemp(): ?string
    {
        return $this->stiomZagSklTemp;
    }

    public function setStiomZagSklTemp(string $stiomZagSklTemp): self
    {
        $this->stiomZagSklTemp = $stiomZagSklTemp;

        return $this;
    }

    public function getPercentZagSkl(): ?string
    {
        return $this->percentZagSkl;
    }

    public function setPercentZagSkl(string $percentZagSkl): self
    {
        $this->percentZagSkl = $percentZagSkl;

        return $this;
    }

    public function getStiomKomplekt(): ?string
    {
        return $this->stiomKomplekt;
    }

    public function setStiomKomplekt(string $stiomKomplekt): self
    {
        $this->stiomKomplekt = $stiomKomplekt;

        return $this;
    }

    public function getStiomKomplektTemp(): ?string
    {
        return $this->stiomKomplektTemp;
    }

    public function setStiomKomplektTemp(string $stiomKomplektTemp): self
    {
        $this->stiomKomplektTemp = $stiomKomplektTemp;

        return $this;
    }

    public function getLastingroup(): ?int
    {
        return $this->lastingroup;
    }

    public function setLastingroup(int $lastingroup): self
    {
        $this->lastingroup = $lastingroup;

        return $this;
    }

    public function getCheck1(): ?int
    {
        return $this->check1;
    }

    public function setCheck1(int $check1): self
    {
        $this->check1 = $check1;

        return $this;
    }

    public function getCheck2(): ?int
    {
        return $this->check2;
    }

    public function setCheck2(int $check2): self
    {
        $this->check2 = $check2;

        return $this;
    }

    public function getCheck3(): ?int
    {
        return $this->check3;
    }

    public function setCheck3(int $check3): self
    {
        $this->check3 = $check3;

        return $this;
    }

    public function getCheck4(): ?int
    {
        return $this->check4;
    }

    public function setCheck4(int $check4): self
    {
        $this->check4 = $check4;

        return $this;
    }

    public function getCheck5(): ?int
    {
        return $this->check5;
    }

    public function setCheck5(int $check5): self
    {
        $this->check5 = $check5;

        return $this;
    }

    public function getCheckStatus(): ?int
    {
        return $this->checkStatus;
    }

    public function setCheckStatus(?int $checkStatus): self
    {
        $this->checkStatus = $checkStatus;

        return $this;
    }

    public function getCheckStatusCurator(): ?int
    {
        return $this->checkStatusCurator;
    }

    public function setCheckStatusCurator(?int $checkStatusCurator): self
    {
        $this->checkStatusCurator = $checkStatusCurator;

        return $this;
    }

    public function getCheckStatusDate(): ?\DateTimeInterface
    {
        return $this->checkStatusDate;
    }

    public function setCheckStatusDate(?\DateTimeInterface $checkStatusDate): self
    {
        $this->checkStatusDate = $checkStatusDate;

        return $this;
    }

    public function getCheckStatusCuratorDate(): ?\DateTimeInterface
    {
        return $this->checkStatusCuratorDate;
    }

    public function setCheckStatusCuratorDate(?\DateTimeInterface $checkStatusCuratorDate): self
    {
        $this->checkStatusCuratorDate = $checkStatusCuratorDate;

        return $this;
    }

    public function getCheckText(): ?string
    {
        return $this->checkText;
    }

    public function setCheckText(?string $checkText): self
    {
        $this->checkText = $checkText;

        return $this;
    }

    public function getCheckTextCurator(): ?string
    {
        return $this->checkTextCurator;
    }

    public function setCheckTextCurator(?string $checkTextCurator): self
    {
        $this->checkTextCurator = $checkTextCurator;

        return $this;
    }

    public function getAnswerText(): ?string
    {
        return $this->answerText;
    }

    public function setAnswerText(?string $answerText): self
    {
        $this->answerText = $answerText;

        return $this;
    }

    public function getAnswerTextCurator(): ?string
    {
        return $this->answerTextCurator;
    }

    public function setAnswerTextCurator(?string $answerTextCurator): self
    {
        $this->answerTextCurator = $answerTextCurator;

        return $this;
    }


}
