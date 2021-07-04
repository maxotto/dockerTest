<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DogovorTypes
 *
 * @ORM\Table(name="dogovor_types")
 * @ORM\Entity
 */
class DogovorTypes
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
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=50, nullable=true)
     */
    private $text = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }


}