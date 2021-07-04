<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assignments
 *
 * @ORM\Table(name="assignments")
 * @ORM\Entity
 */
class Assignments
{
    /**
     * @var string
     *
     * @ORM\Column(name="itemname", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $itemname;

    /**
     * @var string
     *
     * @ORM\Column(name="userid", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bizrule", type="text", length=65535, nullable=true)
     */
    private $bizrule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    public function getItemname(): ?string
    {
        return $this->itemname;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function getBizrule(): ?string
    {
        return $this->bizrule;
    }

    public function setBizrule(?string $bizrule): self
    {
        $this->bizrule = $bizrule;

        return $this;
    }

    public function getData(): ?string
    {
        return $this->data;
    }

    public function setData(?string $data): self
    {
        $this->data = $data;

        return $this;
    }


}
