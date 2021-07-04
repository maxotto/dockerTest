<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OborudActs
 *
 * @ORM\Table(name="oborud_acts", uniqueConstraints={@ORM\UniqueConstraint(name="oborud_act_unique", columns={"act_id", "oborud_id"})}, indexes={@ORM\Index(name="act_id", columns={"act_id"}), @ORM\Index(name="oborud_id", columns={"oborud_id"})})
 * @ORM\Entity
 */
class OborudActs
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
     * @var int
     *
     * @ORM\Column(name="oborud_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $oborudId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="act_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $actId = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOborudId(): ?int
    {
        return $this->oborudId;
    }

    public function setOborudId(int $oborudId): self
    {
        $this->oborudId = $oborudId;

        return $this;
    }

    public function getActId(): ?int
    {
        return $this->actId;
    }

    public function setActId(int $actId): self
    {
        $this->actId = $actId;

        return $this;
    }


}
