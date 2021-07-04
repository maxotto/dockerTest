<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OvOhvat
 *
 * @ORM\Table(name="ov_ohvat", indexes={@ORM\Index(name="UK_ov_ohvat_np_id", columns={"np_id"}), @ORM\Index(name="UK_ov_ohvat_level", columns={"level"}), @ORM\Index(name="UK_ov_ohvat_fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class OvOhvat
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
     * @ORM\Column(name="fcp_object_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fcpObjectId;

    /**
     * @var int
     *
     * @ORM\Column(name="np_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $npId;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $level = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="citizen", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $citizen = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFcpObjectId(): ?int
    {
        return $this->fcpObjectId;
    }

    public function setFcpObjectId(int $fcpObjectId): self
    {
        $this->fcpObjectId = $fcpObjectId;

        return $this;
    }

    public function getNpId(): ?int
    {
        return $this->npId;
    }

    public function setNpId(int $npId): self
    {
        $this->npId = $npId;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getCitizen(): ?int
    {
        return $this->citizen;
    }

    public function setCitizen(int $citizen): self
    {
        $this->citizen = $citizen;

        return $this;
    }


}
