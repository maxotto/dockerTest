<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DistanceToBorder
 *
 * @ORM\Table(name="distance_to_border", uniqueConstraints={@ORM\UniqueConstraint(name="UK_distance_to_border_fcp_object_id", columns={"fcp_object_id"})}, indexes={@ORM\Index(name="UK_distance_to_border_distance", columns={"distance"})})
 * @ORM\Entity
 */
class DistanceToBorder
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
     * @var int
     *
     * @ORM\Column(name="fcp_object_id", type="integer", nullable=false)
     */
    private $fcpObjectId;

    /**
     * @var float|null
     *
     * @ORM\Column(name="distance", type="float", precision=10, scale=0, nullable=true)
     */
    private $distance;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lat", type="string", length=255, nullable=true)
     */
    private $lat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="long", type="string", length=255, nullable=true)
     */
    private $long;

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

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(?float $distance): self
    {
        $this->distance = $distance;

        return $this;
    }

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(?string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLong(): ?string
    {
        return $this->long;
    }

    public function setLong(?string $long): self
    {
        $this->long = $long;

        return $this;
    }


}
