<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pzss
 *
 * @ORM\Table(name="pzss")
 * @ORM\Entity
 */
class Pzss
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
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=50, nullable=false)
     */
    private $text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }


}
