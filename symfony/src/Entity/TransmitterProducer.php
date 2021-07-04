<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransmitterProducer
 *
 * @ORM\Table(name="transmitter_producer")
 * @ORM\Entity
 */
class TransmitterProducer
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
     * @ORM\Column(name="text", type="string", length=100, nullable=true)
     */
    private $text = '';

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


}
