<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perepis2010Raw
 *
 * @ORM\Table(name="perepis2010_raw", indexes={@ORM\Index(name="UK_perepis2010_raw_Column33", columns={"Column33"}), @ORM\Index(name="UK_perepis2010_raw_Column21", columns={"Column21"}), @ORM\Index(name="UK_perepis2010_raw_Column27", columns={"Column27"}), @ORM\Index(name="UK_perepis2010_raw_Column15", columns={"Column15"})})
 * @ORM\Entity
 */
class Perepis2010Raw
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region_id", type="string", length=255, nullable=true)
     */
    private $regionId = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="rayon_txt", type="string", length=255, nullable=true)
     */
    private $rayonTxt = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="np_txt", type="string", length=255, nullable=true)
     */
    private $npTxt = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude_1", type="string", length=255, nullable=true)
     */
    private $latitude1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude_2", type="string", length=255, nullable=true)
     */
    private $latitude2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude_3", type="string", length=255, nullable=true)
     */
    private $latitude3 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude_1", type="string", length=255, nullable=true)
     */
    private $longitude1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude_2", type="string", length=255, nullable=true)
     */
    private $longitude2 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude_3", type="string", length=255, nullable=true)
     */
    private $longitude3 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="citizen", type="string", length=255, nullable=true)
     */
    private $citizen = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Column15", type="string", length=255, nullable=true)
     */
    private $column15 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Column16", type="string", length=255, nullable=true)
     */
    private $column16 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Column21", type="string", length=255, nullable=true)
     */
    private $column21 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Column22", type="string", length=255, nullable=true)
     */
    private $column22 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Column27", type="string", length=255, nullable=true)
     */
    private $column27 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Column28", type="string", length=255, nullable=true)
     */
    private $column28 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Column33", type="string", length=255, nullable=true)
     */
    private $column33 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Column34", type="string", length=255, nullable=true)
     */
    private $column34 = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegionId(): ?string
    {
        return $this->regionId;
    }

    public function setRegionId(?string $regionId): self
    {
        $this->regionId = $regionId;

        return $this;
    }

    public function getRayonTxt(): ?string
    {
        return $this->rayonTxt;
    }

    public function setRayonTxt(?string $rayonTxt): self
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

    public function getLatitude1(): ?string
    {
        return $this->latitude1;
    }

    public function setLatitude1(?string $latitude1): self
    {
        $this->latitude1 = $latitude1;

        return $this;
    }

    public function getLatitude2(): ?string
    {
        return $this->latitude2;
    }

    public function setLatitude2(?string $latitude2): self
    {
        $this->latitude2 = $latitude2;

        return $this;
    }

    public function getLatitude3(): ?string
    {
        return $this->latitude3;
    }

    public function setLatitude3(?string $latitude3): self
    {
        $this->latitude3 = $latitude3;

        return $this;
    }

    public function getLongitude1(): ?string
    {
        return $this->longitude1;
    }

    public function setLongitude1(?string $longitude1): self
    {
        $this->longitude1 = $longitude1;

        return $this;
    }

    public function getLongitude2(): ?string
    {
        return $this->longitude2;
    }

    public function setLongitude2(?string $longitude2): self
    {
        $this->longitude2 = $longitude2;

        return $this;
    }

    public function getLongitude3(): ?string
    {
        return $this->longitude3;
    }

    public function setLongitude3(?string $longitude3): self
    {
        $this->longitude3 = $longitude3;

        return $this;
    }

    public function getCitizen(): ?string
    {
        return $this->citizen;
    }

    public function setCitizen(?string $citizen): self
    {
        $this->citizen = $citizen;

        return $this;
    }

    public function getColumn15(): ?string
    {
        return $this->column15;
    }

    public function setColumn15(?string $column15): self
    {
        $this->column15 = $column15;

        return $this;
    }

    public function getColumn16(): ?string
    {
        return $this->column16;
    }

    public function setColumn16(?string $column16): self
    {
        $this->column16 = $column16;

        return $this;
    }

    public function getColumn21(): ?string
    {
        return $this->column21;
    }

    public function setColumn21(?string $column21): self
    {
        $this->column21 = $column21;

        return $this;
    }

    public function getColumn22(): ?string
    {
        return $this->column22;
    }

    public function setColumn22(?string $column22): self
    {
        $this->column22 = $column22;

        return $this;
    }

    public function getColumn27(): ?string
    {
        return $this->column27;
    }

    public function setColumn27(?string $column27): self
    {
        $this->column27 = $column27;

        return $this;
    }

    public function getColumn28(): ?string
    {
        return $this->column28;
    }

    public function setColumn28(?string $column28): self
    {
        $this->column28 = $column28;

        return $this;
    }

    public function getColumn33(): ?string
    {
        return $this->column33;
    }

    public function setColumn33(?string $column33): self
    {
        $this->column33 = $column33;

        return $this;
    }

    public function getColumn34(): ?string
    {
        return $this->column34;
    }

    public function setColumn34(?string $column34): self
    {
        $this->column34 = $column34;

        return $this;
    }


}
