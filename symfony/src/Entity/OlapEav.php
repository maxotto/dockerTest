<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OlapEav
 *
 * @ORM\Table(name="olap_eav", uniqueConstraints={@ORM\UniqueConstraint(name="UK_olap_eav", columns={"fact_id", "entity", "attribute_level_1", "attribute_level_2", "attribute_level_3"})}, indexes={@ORM\Index(name="IDX_277EF0F156D5C2A", columns={"fact_id"})})
 * @ORM\Entity
 */
class OlapEav
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
     * @ORM\Column(name="entity", type="string", length=255, nullable=false)
     */
    private $entity;

    /**
     * @var string
     *
     * @ORM\Column(name="attribute_level_1", type="string", length=255, nullable=false)
     */
    private $attributeLevel1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="attribute_level_2", type="string", length=255, nullable=false)
     */
    private $attributeLevel2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="attribute_level_3", type="string", length=255, nullable=false)
     */
    private $attributeLevel3 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=0, nullable=true)
     */
    private $value;

    /**
     * @var \OlapByObjectData
     *
     * @ORM\ManyToOne(targetEntity="OlapByObjectData")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fact_id", referencedColumnName="id")
     * })
     */
    private $fact;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntity(): ?string
    {
        return $this->entity;
    }

    public function setEntity(string $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getAttributeLevel1(): ?string
    {
        return $this->attributeLevel1;
    }

    public function setAttributeLevel1(string $attributeLevel1): self
    {
        $this->attributeLevel1 = $attributeLevel1;

        return $this;
    }

    public function getAttributeLevel2(): ?string
    {
        return $this->attributeLevel2;
    }

    public function setAttributeLevel2(string $attributeLevel2): self
    {
        $this->attributeLevel2 = $attributeLevel2;

        return $this;
    }

    public function getAttributeLevel3(): ?string
    {
        return $this->attributeLevel3;
    }

    public function setAttributeLevel3(string $attributeLevel3): self
    {
        $this->attributeLevel3 = $attributeLevel3;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getFact(): ?OlapByObjectData
    {
        return $this->fact;
    }

    public function setFact(?OlapByObjectData $fact): self
    {
        $this->fact = $fact;

        return $this;
    }


}
