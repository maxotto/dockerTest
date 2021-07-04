<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Yiilog
 *
 * @ORM\Table(name="YiiLog")
 * @ORM\Entity
 */
class Yiilog
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
     * @ORM\Column(name="level", type="string", length=128, nullable=true)
     */
    private $level;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category", type="string", length=128, nullable=true)
     */
    private $category;

    /**
     * @var int|null
     *
     * @ORM\Column(name="logtime", type="integer", nullable=true)
     */
    private $logtime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=true)
     */
    private $message;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getLogtime(): ?int
    {
        return $this->logtime;
    }

    public function setLogtime(?int $logtime): self
    {
        $this->logtime = $logtime;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }


}
