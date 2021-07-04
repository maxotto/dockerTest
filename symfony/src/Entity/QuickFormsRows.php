<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuickFormsRows
 *
 * @ORM\Table(name="quick_forms_rows", indexes={@ORM\Index(name="FK_quick_forms_rows_parent_form_id", columns={"parent_form_id"})})
 * @ORM\Entity
 */
class QuickFormsRows
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
     * @ORM\Column(name="table_id", type="integer", nullable=false)
     */
    private $tableId;

    /**
     * @var int
     *
     * @ORM\Column(name="fixed", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fixed = '0';

    /**
     * @var \QuickFormsTypes
     *
     * @ORM\ManyToOne(targetEntity="QuickFormsTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_form_id", referencedColumnName="id")
     * })
     */
    private $parentForm;

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

    public function getFixed(): ?int
    {
        return $this->fixed;
    }

    public function setFixed(int $fixed): self
    {
        $this->fixed = $fixed;

        return $this;
    }

    public function getParentForm(): ?QuickFormsTypes
    {
        return $this->parentForm;
    }

    public function setParentForm(?QuickFormsTypes $parentForm): self
    {
        $this->parentForm = $parentForm;

        return $this;
    }


}
