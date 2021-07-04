<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AntennaType
 *
 * @ORM\Table(name="antenna_type")
 * @ORM\Entity
 */
class AntennaType
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
     * @ORM\Column(name="text", type="string", length=150, nullable=false)
     */
    private $text;

    /**
     * @var int|null
     *
     * @ORM\Column(name="panels", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $panels;

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

    public function getPanels(): ?int
    {
        return $this->panels;
    }

    public function setPanels(?int $panels): self
    {
        $this->panels = $panels;

        return $this;
    }


}
