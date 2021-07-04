<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchiveRazdel
 *
 * @ORM\Table(name="archive_razdel", uniqueConstraints={@ORM\UniqueConstraint(name="code", columns={"code"})}, indexes={@ORM\Index(name="IDX_archive_razdel_text", columns={"text"})})
 * @ORM\Entity
 */
class ArchiveRazdel
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
     * @ORM\Column(name="text", type="string", length=254, nullable=false)
     */
    private $text = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=10, nullable=false)
     */
    private $code;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_2_mult", type="integer", nullable=true)
     */
    private $is2Mult = '0';

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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getIs2Mult(): ?int
    {
        return $this->is2Mult;
    }

    public function setIs2Mult(?int $is2Mult): self
    {
        $this->is2Mult = $is2Mult;

        return $this;
    }


}
