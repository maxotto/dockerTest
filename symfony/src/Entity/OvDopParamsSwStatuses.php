<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OvDopParamsSwStatuses
 *
 * @ORM\Table(name="ov_dop_params_sw_statuses", uniqueConstraints={@ORM\UniqueConstraint(name="UK_simple_workflow_statuses", columns={"table_field", "table_id"})})
 * @ORM\Entity
 */
class OvDopParamsSwStatuses
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
     * @var int|null
     *
     * @ORM\Column(name="table_id", type="integer", nullable=true)
     */
    private $tableId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="table_field", type="string", length=25, nullable=true)
     */
    private $tableField;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=25, nullable=true)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTableId(): ?int
    {
        return $this->tableId;
    }

    public function setTableId(?int $tableId): self
    {
        $this->tableId = $tableId;

        return $this;
    }

    public function getTableField(): ?string
    {
        return $this->tableField;
    }

    public function setTableField(?string $tableField): self
    {
        $this->tableField = $tableField;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }


}
