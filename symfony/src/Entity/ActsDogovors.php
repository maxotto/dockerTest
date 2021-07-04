<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActsDogovors
 *
 * @ORM\Table(name="acts_dogovors", uniqueConstraints={@ORM\UniqueConstraint(name="number", columns={"act_number", "act_data"})}, indexes={@ORM\Index(name="dogovor_id", columns={"dogovor_id"})})
 * @ORM\Entity
 */
class ActsDogovors
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
     * @var int|null
     *
     * @ORM\Column(name="dogovor_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $dogovorId;

    /**
     * @var string
     *
     * @ORM\Column(name="act_number", type="string", length=50, nullable=false, options={"default"="Введите номер Акта"})
     */
    private $actNumber = 'Введите номер Акта';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="act_data", type="date", nullable=false)
     */
    private $actData;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDogovorId(): ?int
    {
        return $this->dogovorId;
    }

    public function setDogovorId(?int $dogovorId): self
    {
        $this->dogovorId = $dogovorId;

        return $this;
    }

    public function getActNumber(): ?string
    {
        return $this->actNumber;
    }

    public function setActNumber(string $actNumber): self
    {
        $this->actNumber = $actNumber;

        return $this;
    }

    public function getActData(): ?\DateTimeInterface
    {
        return $this->actData;
    }

    public function setActData(\DateTimeInterface $actData): self
    {
        $this->actData = $actData;

        return $this;
    }


}
