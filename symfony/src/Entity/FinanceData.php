<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FinanceData
 *
 * @ORM\Table(name="finance_data", indexes={@ORM\Index(name="FK_finance_data_data_type", columns={"data_type"}), @ORM\Index(name="IDX_finance_data", columns={"parent_table", "parent_id", "rashod_type"}), @ORM\Index(name="FK_finance_data_rashod_type", columns={"rashod_type"})})
 * @ORM\Entity
 */
class FinanceData
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
     * @var string|null
     *
     * @ORM\Column(name="parent_table", type="string", length=255, nullable=true)
     */
    private $parentTable;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="plan", type="decimal", precision=22, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="fact", type="decimal", precision=22, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $fact = '0.00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var \FinanceDataType
     *
     * @ORM\ManyToOne(targetEntity="FinanceDataType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="data_type", referencedColumnName="id")
     * })
     */
    private $dataType;

    /**
     * @var \FinanceType
     *
     * @ORM\ManyToOne(targetEntity="FinanceType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rashod_type", referencedColumnName="id")
     * })
     */
    private $rashodType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParentTable(): ?string
    {
        return $this->parentTable;
    }

    public function setParentTable(?string $parentTable): self
    {
        $this->parentTable = $parentTable;

        return $this;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    public function getPlan(): ?string
    {
        return $this->plan;
    }

    public function setPlan(string $plan): self
    {
        $this->plan = $plan;

        return $this;
    }

    public function getFact(): ?string
    {
        return $this->fact;
    }

    public function setFact(string $fact): self
    {
        $this->fact = $fact;

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

    public function getDataType(): ?FinanceDataType
    {
        return $this->dataType;
    }

    public function setDataType(?FinanceDataType $dataType): self
    {
        $this->dataType = $dataType;

        return $this;
    }

    public function getRashodType(): ?FinanceType
    {
        return $this->rashodType;
    }

    public function setRashodType(?FinanceType $rashodType): self
    {
        $this->rashodType = $rashodType;

        return $this;
    }


}
