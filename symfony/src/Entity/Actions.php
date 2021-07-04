<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actions
 *
 * @ORM\Table(name="actions", indexes={@ORM\Index(name="Index 2", columns={"role"})})
 * @ORM\Entity
 */
class Actions
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

    /**
     * @var int
     *
     * @ORM\Column(name="startstatus", type="integer", nullable=false)
     */
    private $startstatus;

    /**
     * @var int
     *
     * @ORM\Column(name="endstatus", type="integer", nullable=false)
     */
    private $endstatus;

    /**
     * @var int
     *
     * @ORM\Column(name="role", type="integer", nullable=false)
     */
    private $role;

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

    public function getStartstatus(): ?int
    {
        return $this->startstatus;
    }

    public function setStartstatus(int $startstatus): self
    {
        $this->startstatus = $startstatus;

        return $this;
    }

    public function getEndstatus(): ?int
    {
        return $this->endstatus;
    }

    public function setEndstatus(int $endstatus): self
    {
        $this->endstatus = $endstatus;

        return $this;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(int $role): self
    {
        $this->role = $role;

        return $this;
    }


}
