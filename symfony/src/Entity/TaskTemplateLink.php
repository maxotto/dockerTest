<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskTemplateLink
 *
 * @ORM\Table(name="task_template_link", indexes={@ORM\Index(name="FK_task_template_link_template_type", columns={"template_type"})})
 * @ORM\Entity
 */
class TaskTemplateLink
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
     * @var \TaskTemplateTypes
     *
     * @ORM\ManyToOne(targetEntity="TaskTemplateTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="template_type", referencedColumnName="id")
     * })
     */
    private $templateType;

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

    public function getTemplateType(): ?TaskTemplateTypes
    {
        return $this->templateType;
    }

    public function setTemplateType(?TaskTemplateTypes $templateType): self
    {
        $this->templateType = $templateType;

        return $this;
    }


}
