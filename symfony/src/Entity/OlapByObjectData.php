<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OlapByObjectData
 *
 * @ORM\Table(name="olap_by_object_data", uniqueConstraints={@ORM\UniqueConstraint(name="UK_olap_by_object_data", columns={"fcp_object_id", "fact_date"})})
 * @ORM\Entity
 */
class OlapByObjectData
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
     * @var \DateTime
     *
     * @ORM\Column(name="fact_date", type="date", nullable=false)
     */
    private $factDate;

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

    public function getFactDate(): ?\DateTimeInterface
    {
        return $this->factDate;
    }

    public function setFactDate(\DateTimeInterface $factDate): self
    {
        $this->factDate = $factDate;

        return $this;
    }


}
