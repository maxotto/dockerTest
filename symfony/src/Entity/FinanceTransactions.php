<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FinanceTransactions
 *
 * @ORM\Table(name="finance_transactions", indexes={@ORM\Index(name="FK_finance_transactions_budget_stream", columns={"budget_stream"}), @ORM\Index(name="FK_finance_transactions_task", columns={"task"})})
 * @ORM\Entity
 */
class FinanceTransactions
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
     * @ORM\Column(name="table_name", type="string", length=25, nullable=false)
     */
    private $tableName;

    /**
     * @var int
     *
     * @ORM\Column(name="table_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tableId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="date", nullable=false)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="summa", type="decimal", precision=32, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $summa = '0.00';

    /**
     * @var \FinanceDataType
     *
     * @ORM\ManyToOne(targetEntity="FinanceDataType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="budget_stream", referencedColumnName="id")
     * })
     */
    private $budgetStream;

    /**
     * @var \FinanceType
     *
     * @ORM\ManyToOne(targetEntity="FinanceType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="task", referencedColumnName="id")
     * })
     */
    private $task;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    public function setTableName(string $tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }

    public function getTableId(): ?int
    {
        return $this->tableId;
    }

    public function setTableId(int $tableId): self
    {
        $this->tableId = $tableId;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getSumma(): ?string
    {
        return $this->summa;
    }

    public function setSumma(string $summa): self
    {
        $this->summa = $summa;

        return $this;
    }

    public function getBudgetStream(): ?FinanceDataType
    {
        return $this->budgetStream;
    }

    public function setBudgetStream(?FinanceDataType $budgetStream): self
    {
        $this->budgetStream = $budgetStream;

        return $this;
    }

    public function getTask(): ?FinanceType
    {
        return $this->task;
    }

    public function setTask(?FinanceType $task): self
    {
        $this->task = $task;

        return $this;
    }


}
