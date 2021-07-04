<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoryDetails
 *
 * @ORM\Table(name="history_details", indexes={@ORM\Index(name="IX_history_details_field_name", columns={"field_name"}), @ORM\Index(name="IX_history_details_user_id", columns={"user_id"}), @ORM\Index(name="IX_history_details_in_protocol", columns={"in_protocol"}), @ORM\Index(name="IX_history_details_table_name", columns={"table_name"}), @ORM\Index(name="Index 4", columns={"table_id"})})
 * @ORM\Entity
 */
class HistoryDetails
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
     * @ORM\Column(name="table_name", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="change_date", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $changeDate = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=50, nullable=false)
     */
    private $fieldName;

    /**
     * @var string
     *
     * @ORM\Column(name="old_value", type="text", length=0, nullable=false)
     */
    private $oldValue;

    /**
     * @var string
     *
     * @ORM\Column(name="new_value", type="text", length=0, nullable=false)
     */
    private $newValue;

    /**
     * @var int
     *
     * @ORM\Column(name="in_protocol", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $inProtocol = '0';

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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getChangeDate(): ?\DateTimeInterface
    {
        return $this->changeDate;
    }

    public function setChangeDate(\DateTimeInterface $changeDate): self
    {
        $this->changeDate = $changeDate;

        return $this;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function setFieldName(string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    public function getOldValue(): ?string
    {
        return $this->oldValue;
    }

    public function setOldValue(string $oldValue): self
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    public function getNewValue(): ?string
    {
        return $this->newValue;
    }

    public function setNewValue(string $newValue): self
    {
        $this->newValue = $newValue;

        return $this;
    }

    public function getInProtocol(): ?int
    {
        return $this->inProtocol;
    }

    public function setInProtocol(int $inProtocol): self
    {
        $this->inProtocol = $inProtocol;

        return $this;
    }


}
