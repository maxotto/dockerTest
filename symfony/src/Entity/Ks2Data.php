<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ks2Data
 *
 * @ORM\Table(name="ks2_data", uniqueConstraints={@ORM\UniqueConstraint(name="UK_ks2_data", columns={"fcp_object_id", "akt_number"})}, indexes={@ORM\Index(name="UK_ks2_data_work_type", columns={"work_type"}), @ORM\Index(name="IDX_4A657BF18DB7304A", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class Ks2Data
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
     * @var string
     *
     * @ORM\Column(name="akt_number", type="string", length=255, nullable=false, options={"comment"="Номер акта"})
     */
    private $aktNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="akt_data", type="date", nullable=true, options={"comment"="Дата акта"})
     */
    private $aktData;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ls_number", type="string", length=255, nullable=true, options={"comment"="Номер локальной сметы"})
     */
    private $lsNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="work_type", type="string", length=255, nullable=false, options={"comment"="Вид работы"})
     */
    private $workType;

    /**
     * @var string
     *
     * @ORM\Column(name="summ", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сумма акта (руб.)"})
     */
    private $summ = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edited_when", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $editedWhen = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="income", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $income;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $deleted;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=false, options={"default"="swKs2Data/A"})
     */
    private $status = 'swKs2Data/A';

    /**
     * @var \FcpObjects
     *
     * @ORM\ManyToOne(targetEntity="FcpObjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcp_object_id", referencedColumnName="id")
     * })
     */
    private $fcpObject;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAktNumber(): ?string
    {
        return $this->aktNumber;
    }

    public function setAktNumber(string $aktNumber): self
    {
        $this->aktNumber = $aktNumber;

        return $this;
    }

    public function getAktData(): ?\DateTimeInterface
    {
        return $this->aktData;
    }

    public function setAktData(?\DateTimeInterface $aktData): self
    {
        $this->aktData = $aktData;

        return $this;
    }

    public function getLsNumber(): ?string
    {
        return $this->lsNumber;
    }

    public function setLsNumber(?string $lsNumber): self
    {
        $this->lsNumber = $lsNumber;

        return $this;
    }

    public function getWorkType(): ?string
    {
        return $this->workType;
    }

    public function setWorkType(string $workType): self
    {
        $this->workType = $workType;

        return $this;
    }

    public function getSumm(): ?string
    {
        return $this->summ;
    }

    public function setSumm(string $summ): self
    {
        $this->summ = $summ;

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

    public function getIncome(): ?int
    {
        return $this->income;
    }

    public function setIncome(int $income): self
    {
        $this->income = $income;

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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getFcpObject(): ?FcpObjects
    {
        return $this->fcpObject;
    }

    public function setFcpObject(?FcpObjects $fcpObject): self
    {
        $this->fcpObject = $fcpObject;

        return $this;
    }


}
