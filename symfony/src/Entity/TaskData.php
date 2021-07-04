<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskData
 *
 * @ORM\Table(name="task_data", uniqueConstraints={@ORM\UniqueConstraint(name="UK_task_data", columns={"task_id", "table_name", "table_id"})}, indexes={@ORM\Index(name="IDX_task_data_table_id", columns={"table_id"}), @ORM\Index(name="IDX_task_data_task_id", columns={"task_id"}), @ORM\Index(name="IDX_task_data_table_name", columns={"table_name"})})
 * @ORM\Entity
 */
class TaskData
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
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_plan_start", type="date", nullable=true)
     */
    private $datePlanStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_plan_finish", type="date", nullable=true)
     */
    private $datePlanFinish;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fact_start", type="date", nullable=true)
     */
    private $dateFactStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fact_finish", type="date", nullable=true)
     */
    private $dateFactFinish;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_id", type="string", length=50, nullable=true)
     */
    private $statusId;

    /**
     * @var \Tasks
     *
     * @ORM\ManyToOne(targetEntity="Tasks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="task_id", referencedColumnName="id")
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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getDatePlanStart(): ?\DateTimeInterface
    {
        return $this->datePlanStart;
    }

    public function setDatePlanStart(?\DateTimeInterface $datePlanStart): self
    {
        $this->datePlanStart = $datePlanStart;

        return $this;
    }

    public function getDatePlanFinish(): ?\DateTimeInterface
    {
        return $this->datePlanFinish;
    }

    public function setDatePlanFinish(?\DateTimeInterface $datePlanFinish): self
    {
        $this->datePlanFinish = $datePlanFinish;

        return $this;
    }

    public function getDateFactStart(): ?\DateTimeInterface
    {
        return $this->dateFactStart;
    }

    public function setDateFactStart(?\DateTimeInterface $dateFactStart): self
    {
        $this->dateFactStart = $dateFactStart;

        return $this;
    }

    public function getDateFactFinish(): ?\DateTimeInterface
    {
        return $this->dateFactFinish;
    }

    public function setDateFactFinish(?\DateTimeInterface $dateFactFinish): self
    {
        $this->dateFactFinish = $dateFactFinish;

        return $this;
    }

    public function getStatusId(): ?string
    {
        return $this->statusId;
    }

    public function setStatusId(?string $statusId): self
    {
        $this->statusId = $statusId;

        return $this;
    }

    public function getTask(): ?Tasks
    {
        return $this->task;
    }

    public function setTask(?Tasks $task): self
    {
        $this->task = $task;

        return $this;
    }


}
