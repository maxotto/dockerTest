<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OlapByFilialEtapData
 *
 * @ORM\Table(name="olap_by_filial_etap_data", uniqueConstraints={@ORM\UniqueConstraint(name="UK_olap_by_filial_etap_data", columns={"spec_fil_et_id", "fact_date", "type"})})
 * @ORM\Entity
 */
class OlapByFilialEtapData
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
     * @ORM\Column(name="spec_fil_et_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $specFilEtId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fact_date", type="date", nullable=false)
     */
    private $factDate;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $type = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSpecFilEtId(): ?int
    {
        return $this->specFilEtId;
    }

    public function setSpecFilEtId(int $specFilEtId): self
    {
        $this->specFilEtId = $specFilEtId;

        return $this;
    }

    public function getFactDate(): ?\DateTimeInterface
    {
        return $this->factDate;
    }

    public function setFactDate(\DateTimeInterface $factDate): self
    {
        $this->factDate = $factDate;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }


}
