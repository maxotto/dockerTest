<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchiveLinks
 *
 * @ORM\Table(name="archive_links", indexes={@ORM\Index(name="IDX_archive_links", columns={"table_name", "table_id"})})
 * @ORM\Entity
 */
class ArchiveLinks
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
     * @ORM\Column(name="archive_id", type="integer", nullable=false)
     */
    private $archiveId;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArchiveId(): ?int
    {
        return $this->archiveId;
    }

    public function setArchiveId(int $archiveId): self
    {
        $this->archiveId = $archiveId;

        return $this;
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


}
