<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuickFormsFields
 *
 * @ORM\Table(name="quick_forms_fields", indexes={@ORM\Index(name="FK_quick_forms_fields_parent", columns={"parent"})})
 * @ORM\Entity
 */
class QuickFormsFields
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="data_type", type="string", length=25, nullable=false, options={"default"="text"})
     */
    private $dataType = 'text';

    /**
     * @var string
     *
     * @ORM\Column(name="dropdown", type="string", length=255, nullable=false, options={"default"="{'0': 'В плане', '1':'Имеется', '2': 'Нет данных' }"})
     */
    private $dropdown = '{"0": "В плане", "1":"Имеется", "2": "Нет данных" }';

    /**
     * @var string
     *
     * @ORM\Column(name="rules", type="string", length=255, nullable=false, options={"default"="{}"})
     */
    private $rules = '{}';

    /**
     * @var \QuickFormsTypes
     *
     * @ORM\ManyToOne(targetEntity="QuickFormsTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent", referencedColumnName="id")
     * })
     */
    private $parent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDataType(): ?string
    {
        return $this->dataType;
    }

    public function setDataType(string $dataType): self
    {
        $this->dataType = $dataType;

        return $this;
    }

    public function getDropdown(): ?string
    {
        return $this->dropdown;
    }

    public function setDropdown(string $dropdown): self
    {
        $this->dropdown = $dropdown;

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

    public function getParent(): ?QuickFormsTypes
    {
        return $this->parent;
    }

    public function setParent(?QuickFormsTypes $parent): self
    {
        $this->parent = $parent;

        return $this;
    }


}
