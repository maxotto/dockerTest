<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportsData
 *
 * @ORM\Table(name="reports_data", indexes={@ORM\Index(name="IDX_reports_data", columns={"reports_row_id", "reports_field_id"})})
 * @ORM\Entity
 */
class ReportsData
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
     * @ORM\Column(name="reports_row_id", type="integer", nullable=false)
     */
    private $reportsRowId;

    /**
     * @var int
     *
     * @ORM\Column(name="reports_field_id", type="integer", nullable=false)
     */
    private $reportsFieldId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_int", type="integer", nullable=true)
     */
    private $valueInt = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_text", type="text", length=0, nullable=true)
     */
    private $valueText;

    /**
     * @var float|null
     *
     * @ORM\Column(name="value_double", type="float", precision=10, scale=0, nullable=true)
     */
    private $valueDouble = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="value_date", type="date", nullable=true)
     */
    private $valueDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="value_time", type="datetime", nullable=true)
     */
    private $valueTime;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReportsRowId(): ?int
    {
        return $this->reportsRowId;
    }

    public function setReportsRowId(int $reportsRowId): self
    {
        $this->reportsRowId = $reportsRowId;

        return $this;
    }

    public function getReportsFieldId(): ?int
    {
        return $this->reportsFieldId;
    }

    public function setReportsFieldId(int $reportsFieldId): self
    {
        $this->reportsFieldId = $reportsFieldId;

        return $this;
    }

    public function getValueInt(): ?int
    {
        return $this->valueInt;
    }

    public function setValueInt(?int $valueInt): self
    {
        $this->valueInt = $valueInt;

        return $this;
    }

    public function getValueText(): ?string
    {
        return $this->valueText;
    }

    public function setValueText(?string $valueText): self
    {
        $this->valueText = $valueText;

        return $this;
    }

    public function getValueDouble(): ?float
    {
        return $this->valueDouble;
    }

    public function setValueDouble(?float $valueDouble): self
    {
        $this->valueDouble = $valueDouble;

        return $this;
    }

    public function getValueDate(): ?\DateTimeInterface
    {
        return $this->valueDate;
    }

    public function setValueDate(?\DateTimeInterface $valueDate): self
    {
        $this->valueDate = $valueDate;

        return $this;
    }

    public function getValueTime(): ?\DateTimeInterface
    {
        return $this->valueTime;
    }

    public function setValueTime(?\DateTimeInterface $valueTime): self
    {
        $this->valueTime = $valueTime;

        return $this;
    }


}
