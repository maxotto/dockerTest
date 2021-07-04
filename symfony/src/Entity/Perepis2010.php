<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perepis2010
 *
 * @ORM\Table(name="perepis2010", uniqueConstraints={@ORM\UniqueConstraint(name="UK_perepis2010_raw_id", columns={"raw_id"})}, indexes={@ORM\Index(name="IDX_perepis2010_region_id", columns={"region_id"})})
 * @ORM\Entity
 */
class Perepis2010
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
     * @ORM\Column(name="raw_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $rawId;

    /**
     * @var int
     *
     * @ORM\Column(name="latitude_1", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $latitude1;

    /**
     * @var int
     *
     * @ORM\Column(name="latitude_2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $latitude2;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitude3;

    /**
     * @var int
     *
     * @ORM\Column(name="longitude_1", type="integer", nullable=false)
     */
    private $longitude1;

    /**
     * @var int
     *
     * @ORM\Column(name="longitude_2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $longitude2;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitude3;

    /**
     * @var int
     *
     * @ORM\Column(name="region_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $regionId;

    /**
     * @var string
     *
     * @ORM\Column(name="rayon_txt", type="string", length=255, nullable=false)
     */
    private $rayonTxt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="np_txt", type="string", length=255, nullable=true)
     */
    private $npTxt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="citizen", type="integer", nullable=true)
     */
    private $citizen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRawId(): ?int
    {
        return $this->rawId;
    }

    public function setRawId(int $rawId): self
    {
        $this->rawId = $rawId;

        return $this;
    }

    public function getLatitude1(): ?int
    {
        return $this->latitude1;
    }

    public function setLatitude1(int $latitude1): self
    {
        $this->latitude1 = $latitude1;

        return $this;
    }

    public function getLatitude2(): ?int
    {
        return $this->latitude2;
    }

    public function setLatitude2(int $latitude2): self
    {
        $this->latitude2 = $latitude2;

        return $this;
    }

    public function getLatitude3(): ?float
    {
        return $this->latitude3;
    }

    public function setLatitude3(float $latitude3): self
    {
        $this->latitude3 = $latitude3;

        return $this;
    }

    public function getLongitude1(): ?int
    {
        return $this->longitude1;
    }

    public function setLongitude1(int $longitude1): self
    {
        $this->longitude1 = $longitude1;

        return $this;
    }

    public function getLongitude2(): ?int
    {
        return $this->longitude2;
    }

    public function setLongitude2(int $longitude2): self
    {
        $this->longitude2 = $longitude2;

        return $this;
    }

    public function getLongitude3(): ?float
    {
        return $this->longitude3;
    }

    public function setLongitude3(float $longitude3): self
    {
        $this->longitude3 = $longitude3;

        return $this;
    }

    public function getRegionId(): ?int
    {
        return $this->regionId;
    }

    public function setRegionId(int $regionId): self
    {
        $this->regionId = $regionId;

        return $this;
    }

    public function getRayonTxt(): ?string
    {
        return $this->rayonTxt;
    }

    public function setRayonTxt(string $rayonTxt): self
    {
        $this->rayonTxt = $rayonTxt;

        return $this;
    }

    public function getNpTxt(): ?string
    {
        return $this->npTxt;
    }

    public function setNpTxt(?string $npTxt): self
    {
        $this->npTxt = $npTxt;

        return $this;
    }

    public function getCitizen(): ?int
    {
        return $this->citizen;
    }

    public function setCitizen(?int $citizen): self
    {
        $this->citizen = $citizen;

        return $this;
    }


}
