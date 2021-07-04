<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OlapFilialEtapEav
 *
 * @ORM\Table(name="olap_filial_etap_eav", uniqueConstraints={@ORM\UniqueConstraint(name="UK_olap_eav", columns={"fact_id", "entity"})})
 * @ORM\Entity
 */
class OlapFilialEtapEav
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
     * @ORM\Column(name="fact_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $factId;

    /**
     * @var string
     *
     * @ORM\Column(name="entity", type="string", length=255, nullable=false)
     */
    private $entity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=0, nullable=true)
     */
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFactId(): ?int
    {
        return $this->factId;
    }

    public function setFactId(int $factId): self
    {
        $this->factId = $factId;

        return $this;
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

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
