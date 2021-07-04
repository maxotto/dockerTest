<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OkeiUnitType
 *
 * @ORM\Table(name="okei_unit_type")
 * @ORM\Entity
 */
class OkeiUnitType
{
    /**
     * @var bool
     *
     * @ORM\Column(name="id", type="boolean", nullable=false, options={"comment"="pk"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"comment"="Наименование раздела/приложения"})
     */
    private $name;

    public function getId(): ?bool
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


}
