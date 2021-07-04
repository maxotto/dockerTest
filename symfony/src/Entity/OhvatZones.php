<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OhvatZones
 *
 * @ORM\Table(name="ohvat_zones", uniqueConstraints={@ORM\UniqueConstraint(name="UK_ohvat_zones_fcp_object_id", columns={"fcp_object_id"})}, indexes={@ORM\Index(name="UK_ohvat_zones_north_east", columns={"north_east"}), @ORM\Index(name="UK_ohvat_zones_south_west", columns={"south_west"})})
 * @ORM\Entity
 */
class OhvatZones
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
     * @ORM\Column(name="fcp_object_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fcpObjectId;

    /**
     * @var string
     *
     * @ORM\Column(name="scale", type="string", length=50, nullable=false, options={"default"="1"})
     */
    private $scale = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="north", type="string", length=50, nullable=false)
     */
    private $north;

    /**
     * @var string
     *
     * @ORM\Column(name="south", type="string", length=50, nullable=false)
     */
    private $south;

    /**
     * @var string
     *
     * @ORM\Column(name="east", type="string", length=50, nullable=false)
     */
    private $east;

    /**
     * @var string
     *
     * @ORM\Column(name="west", type="string", length=50, nullable=false)
     */
    private $west;

    /**
     * @var string
     *
     * @ORM\Column(name="rotation", type="string", length=50, nullable=false)
     */
    private $rotation = '0';

    /**
     * @var point
     *
     * @ORM\Column(name="south_west", type="point", nullable=false)
     */
    private $southWest;

    /**
     * @var point
     *
     * @ORM\Column(name="north_east", type="point", nullable=false)
     */
    private $northEast;

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

    public function getScale(): ?string
    {
        return $this->scale;
    }

    public function setScale(string $scale): self
    {
        $this->scale = $scale;

        return $this;
    }

    public function getNorth(): ?string
    {
        return $this->north;
    }

    public function setNorth(string $north): self
    {
        $this->north = $north;

        return $this;
    }

    public function getSouth(): ?string
    {
        return $this->south;
    }

    public function setSouth(string $south): self
    {
        $this->south = $south;

        return $this;
    }

    public function getEast(): ?string
    {
        return $this->east;
    }

    public function setEast(string $east): self
    {
        $this->east = $east;

        return $this;
    }

    public function getWest(): ?string
    {
        return $this->west;
    }

    public function setWest(string $west): self
    {
        $this->west = $west;

        return $this;
    }

    public function getRotation(): ?string
    {
        return $this->rotation;
    }

    public function setRotation(string $rotation): self
    {
        $this->rotation = $rotation;

        return $this;
    }

    public function getSouthWest()
    {
        return $this->southWest;
    }

    public function setSouthWest($southWest): self
    {
        $this->southWest = $southWest;

        return $this;
    }

    public function getNorthEast()
    {
        return $this->northEast;
    }

    public function setNorthEast($northEast): self
    {
        $this->northEast = $northEast;

        return $this;
    }


}
