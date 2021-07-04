<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuickFormsData
 *
 * @ORM\Table(name="quick_forms_data", indexes={@ORM\Index(name="FK_quick_forms_data_parent_row_id", columns={"parent_row_id"}), @ORM\Index(name="FK_quick_forms_data_field_type", columns={"field_type"})})
 * @ORM\Entity
 */
class QuickFormsData
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
     * @ORM\Column(name="field_value", type="text", length=65535, nullable=false)
     */
    private $fieldValue;

    /**
     * @var string
     *
     * @ORM\Column(name="rules", type="string", length=255, nullable=false, options={"default"="{}"})
     */
    private $rules = '{}';

    /**
     * @var \QuickFormsFields
     *
     * @ORM\ManyToOne(targetEntity="QuickFormsFields")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="field_type", referencedColumnName="id")
     * })
     */
    private $fieldType;

    /**
     * @var \QuickFormsRows
     *
     * @ORM\ManyToOne(targetEntity="QuickFormsRows")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_row_id", referencedColumnName="id")
     * })
     */
    private $parentRow;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFieldValue(): ?string
    {
        return $this->fieldValue;
    }

    public function setFieldValue(string $fieldValue): self
    {
        $this->fieldValue = $fieldValue;

        return $this;
    }

    public function getRules(): ?string
    {
        return $this->rules;
    }

    public function setRules(string $rules): self
    {
        $this->rules = $rules;

        return $this;
    }

    public function getFieldType(): ?QuickFormsFields
    {
        return $this->fieldType;
    }

    public function setFieldType(?QuickFormsFields $fieldType): self
    {
        $this->fieldType = $fieldType;

        return $this;
    }

    public function getParentRow(): ?QuickFormsRows
    {
        return $this->parentRow;
    }

    public function setParentRow(?QuickFormsRows $parentRow): self
    {
        $this->parentRow = $parentRow;

        return $this;
    }


}
