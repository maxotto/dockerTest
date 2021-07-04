<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ATables
 *
 * @ORM\Table(name="a_tables")
 * @ORM\Entity
 */
class ATables
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tableName;

    /**
     * @var string
     *
     * @ORM\Column(name="table_name_txt", type="string", length=255, nullable=false)
     */
    private $tableNameTxt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    public function getTableNameTxt(): ?string
    {
        return $this->tableNameTxt;
    }

    public function setTableNameTxt(string $tableNameTxt): self
    {
        $this->tableNameTxt = $tableNameTxt;

        return $this;
    }


}
