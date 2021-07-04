<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TotalityLinks
 *
 * @ORM\Table(name="totality_links")
 * @ORM\Entity
 */
class TotalityLinks
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
     * @ORM\Column(name="table_name", type="string", length=255, nullable=false)
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
     * @ORM\Column(name="totality_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $totalityId;

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

    public function getTotalityId(): ?int
    {
        return $this->totalityId;
    }

    public function setTotalityId(int $totalityId): self
    {
        $this->totalityId = $totalityId;

        return $this;
    }


}
