<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cronresults
 *
 * @ORM\Table(name="cronresults", indexes={@ORM\Index(name="UK_cronresults_time", columns={"time"}), @ORM\Index(name="UK_cronresults_task", columns={"task"})})
 * @ORM\Entity
 */
class Cronresults
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
     * @ORM\Column(name="task", type="string", length=50, nullable=false)
     */
    private $task;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime", nullable=false)
     */
    private $time;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=0, nullable=true)
     */
    private $text;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTask(): ?string
    {
        return $this->task;
    }

    public function setTask(string $task): self
    {
        $this->task = $task;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

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
