<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AParams
 *
 * @ORM\Table(name="a_params")
 * @ORM\Entity
 */
class AParams
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
     * @ORM\Column(name="table_name", type="string", length=50, nullable=false)
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="par_name", type="string", length=50, nullable=false)
     */
    private $parName;

    /**
     * @var int
     *
     * @ORM\Column(name="task_field_id", type="integer", nullable=false)
     */
    private $taskFieldId;

    /**
     * @var int
     *
     * @ORM\Column(name="task_id", type="integer", nullable=false)
     */
    private $taskId;

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

    public function getParName(): ?string
    {
        return $this->parName;
    }

    public function setParName(string $parName): self
    {
        $this->parName = $parName;

        return $this;
    }

    public function getTaskFieldId(): ?int
    {
        return $this->taskFieldId;
    }

    public function setTaskFieldId(int $taskFieldId): self
    {
        $this->taskFieldId = $taskFieldId;

        return $this;
    }

    public function getTaskId(): ?int
    {
        return $this->taskId;
    }

    public function setTaskId(int $taskId): self
    {
        $this->taskId = $taskId;

        return $this;
    }


}
