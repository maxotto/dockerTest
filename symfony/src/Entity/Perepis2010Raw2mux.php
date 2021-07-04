<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perepis2010Raw2mux
 *
 * @ORM\Table(name="Perepis_2010_raw_2mux", indexes={@ORM\Index(name="IDX_Perepis_2010_raw_2mux_code_4", columns={"code_4"}), @ORM\Index(name="IDX_Perepis_2010_raw_2mux_code_2", columns={"code_2"}), @ORM\Index(name="IDX_Perepis_2010_raw_2mux_code_3", columns={"code_3"}), @ORM\Index(name="IDX_Perepis_2010_raw_2mux_code_1", columns={"code_1"})})
 * @ORM\Entity
 */
class Perepis2010Raw2mux
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="check", type="string", length=255, nullable=true)
     */
    private $check;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region_id", type="string", length=255, nullable=true)
     */
    private $regionId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rayon_txt", type="string", length=255, nullable=true)
     */
    private $rayonTxt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="np_txt", type="string", length=255, nullable=true)
     */
    private $npTxt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude_1", type="string", length=255, nullable=true)
     */
    private $latitude1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude_2", type="string", length=255, nullable=true)
     */
    private $latitude2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude_3", type="string", length=255, nullable=true)
     */
    private $latitude3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude_1", type="string", length=255, nullable=true)
     */
    private $longitude1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude_2", type="string", length=255, nullable=true)
     */
    private $longitude2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude_3", type="string", length=255, nullable=true)
     */
    private $longitude3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="citizen", type="string", length=255, nullable=true)
     */
    private $citizen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_1", type="string", length=255, nullable=true)
     */
    private $code1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="citizen_1", type="string", length=255, nullable=true)
     */
    private $citizen1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_2", type="string", length=255, nullable=true)
     */
    private $code2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="citizen_2", type="string", length=255, nullable=true)
     */
    private $citizen2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_3", type="string", length=255, nullable=true)
     */
    private $code3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="citizen_3", type="string", length=255, nullable=true)
     */
    private $citizen3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_4", type="string", length=255, nullable=true)
     */
    private $code4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="citizen_4", type="string", length=255, nullable=true)
     */
    private $citizen4;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCheck(): ?string
    {
        return $this->check;
    }

    public function setCheck(?string $check): self
    {
        $this->check = $check;

        return $this;
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

    public function getCode1(): ?string
    {
        return $this->code1;
    }

    public function setCode1(?string $code1): self
    {
        $this->code1 = $code1;

        return $this;
    }

    public function getCitizen1(): ?string
    {
        return $this->citizen1;
    }

    public function setCitizen1(?string $citizen1): self
    {
        $this->citizen1 = $citizen1;

        return $this;
    }

    public function getCode2(): ?string
    {
        return $this->code2;
    }

    public function setCode2(?string $code2): self
    {
        $this->code2 = $code2;

        return $this;
    }

    public function getCitizen2(): ?string
    {
        return $this->citizen2;
    }

    public function setCitizen2(?string $citizen2): self
    {
        $this->citizen2 = $citizen2;

        return $this;
    }

    public function getCode3(): ?string
    {
        return $this->code3;
    }

    public function setCode3(?string $code3): self
    {
        $this->code3 = $code3;

        return $this;
    }

    public function getCitizen3(): ?string
    {
        return $this->citizen3;
    }

    public function setCitizen3(?string $citizen3): self
    {
        $this->citizen3 = $citizen3;

        return $this;
    }

    public function getCode4(): ?string
    {
        return $this->code4;
    }

    public function setCode4(?string $code4): self
    {
        $this->code4 = $code4;

        return $this;
    }

    public function getCitizen4(): ?string
    {
        return $this->citizen4;
    }

    public function setCitizen4(?string $citizen4): self
    {
        $this->citizen4 = $citizen4;

        return $this;
    }


}
