<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransmittPower
 *
 * @ORM\Table(name="transmitt_power")
 * @ORM\Entity
 */
class TransmittPower
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
     * @var float
     *
     * @ORM\Column(name="power", type="float", precision=10, scale=0, nullable=false)
     */
    private $power;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPower(): ?float
    {
        return $this->power;
    }

    public function setPower(float $power): self
    {
        $this->power = $power;

        return $this;
    }


}
