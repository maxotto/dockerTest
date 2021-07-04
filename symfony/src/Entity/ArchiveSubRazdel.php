<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchiveSubRazdel
 *
 * @ORM\Table(name="archive_sub_razdel", indexes={@ORM\Index(name="razdel", columns={"razdel_id"})})
 * @ORM\Entity
 */
class ArchiveSubRazdel
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
     * @ORM\Column(name="razdel_id", type="integer", nullable=false)
     */
    private $razdelId;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="text", length=65535, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=254, nullable=true)
     */
    private $text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRazdelId(): ?int
    {
        return $this->razdelId;
    }

    public function setRazdelId(int $razdelId): self
    {
        $this->razdelId = $razdelId;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
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
