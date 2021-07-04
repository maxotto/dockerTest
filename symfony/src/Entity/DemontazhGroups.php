<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemontazhGroups
 *
 * @ORM\Table(name="demontazh_groups")
 * @ORM\Entity
 */
class DemontazhGroups
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
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var int|null
     *
     * @ORM\Column(name="perechen", type="integer", nullable=true)
     */
    private $perechen;

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

    public function getPerechen(): ?int
    {
        return $this->perechen;
    }

    public function setPerechen(?int $perechen): self
    {
        $this->perechen = $perechen;

        return $this;
    }


}
