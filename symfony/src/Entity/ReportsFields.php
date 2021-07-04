<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportsFields
 *
 * @ORM\Table(name="reports_fields", indexes={@ORM\Index(name="IDX_report_fields", columns={"reports_id", "field_name"})})
 * @ORM\Entity
 */
class ReportsFields
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
     * @var int
     *
     * @ORM\Column(name="reports_id", type="integer", nullable=false)
     */
    private $reportsId;

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=25, nullable=false)
     */
    private $fieldName;

    /**
     * @var string
     *
     * @ORM\Column(name="field_type", type="string", length=25, nullable=false)
     */
    private $fieldType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source", type="string", length=25, nullable=true)
     */
    private $source;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReportsId(): ?int
    {
        return $this->reportsId;
    }

    public function setReportsId(int $reportsId): self
    {
        $this->reportsId = $reportsId;

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

    public function getFieldType(): ?string
    {
        return $this->fieldType;
    }

    public function setFieldType(string $fieldType): self
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }


}
