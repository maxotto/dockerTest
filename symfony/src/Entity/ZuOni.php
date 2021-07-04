<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZuOni
 *
 * @ORM\Table(name="zu_oni", indexes={@ORM\Index(name="IDX_zu_oni_code_zu_uon", columns={"code_zu_uon"}), @ORM\Index(name="IDX_zu_oni_code_oni_uon", columns={"code_oni_uon"})})
 * @ORM\Entity
 */
class ZuOni
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
     * @var \Oni
     *
     * @ORM\ManyToOne(targetEntity="Oni")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_oni_uon", referencedColumnName="code_oni_uon")
     * })
     */
    private $codeOniUon;

    /**
     * @var \Zu
     *
     * @ORM\ManyToOne(targetEntity="Zu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_zu_uon", referencedColumnName="code_zu_uon")
     * })
     */
    private $codeZuUon;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeOniUon(): ?Oni
    {
        return $this->codeOniUon;
    }

    public function setCodeOniUon(?Oni $codeOniUon): self
    {
        $this->codeOniUon = $codeOniUon;

        return $this;
    }

    public function getCodeZuUon(): ?Zu
    {
        return $this->codeZuUon;
    }

    public function setCodeZuUon(?Zu $codeZuUon): self
    {
        $this->codeZuUon = $codeZuUon;

        return $this;
    }


}
