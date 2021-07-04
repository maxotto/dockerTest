<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CkmParams
 *
 * @ORM\Table(name="ckm_params", indexes={@ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class CkmParams
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
     * @ORM\Column(name="date_start", type="date", nullable=false)
     */
    private $dateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_end", type="date", nullable=true)
     */
    private $dateEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edited_when", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $editedWhen = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="edited_who", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $editedWho;

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
     * @ORM\Column(name="ant_latitude_1", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $antLatitude1;

    /**
     * @var int
     *
     * @ORM\Column(name="ant_latitude_2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $antLatitude2;

    /**
     * @var float
     *
     * @ORM\Column(name="ant_latitude_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $antLatitude3;

    /**
     * @var int
     *
     * @ORM\Column(name="ant_longitude_1", type="integer", nullable=false)
     */
    private $antLongitude1;

    /**
     * @var int
     *
     * @ORM\Column(name="ant_longitude_2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $antLongitude2;

    /**
     * @var float
     *
     * @ORM\Column(name="ant_longitude_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $antLongitude3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zona", type="string", length=1, nullable=true, options={"default"=" "})
     */
    private $zona = ' ';

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=254, nullable=true, options={"default"="Введите адрес ЦКиМ!"})
     */
    private $address = 'Введите адрес ЦКиМ!';

    /**
     * @var int
     *
     * @ORM\Column(name="ckm_control_system_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ckmControlSystemId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="address2", type="string", length=255, nullable=true)
     */
    private $address2;

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

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->dateStart;
    }

    public function setDateStart(\DateTimeInterface $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->dateEnd;
    }

    public function setDateEnd(?\DateTimeInterface $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    public function getEditedWhen(): ?\DateTimeInterface
    {
        return $this->editedWhen;
    }

    public function setEditedWhen(\DateTimeInterface $editedWhen): self
    {
        $this->editedWhen = $editedWhen;

        return $this;
    }

    public function getEditedWho(): ?int
    {
        return $this->editedWho;
    }

    public function setEditedWho(int $editedWho): self
    {
        $this->editedWho = $editedWho;

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

    public function getAntLatitude1(): ?int
    {
        return $this->antLatitude1;
    }

    public function setAntLatitude1(int $antLatitude1): self
    {
        $this->antLatitude1 = $antLatitude1;

        return $this;
    }

    public function getAntLatitude2(): ?int
    {
        return $this->antLatitude2;
    }

    public function setAntLatitude2(int $antLatitude2): self
    {
        $this->antLatitude2 = $antLatitude2;

        return $this;
    }

    public function getAntLatitude3(): ?float
    {
        return $this->antLatitude3;
    }

    public function setAntLatitude3(float $antLatitude3): self
    {
        $this->antLatitude3 = $antLatitude3;

        return $this;
    }

    public function getAntLongitude1(): ?int
    {
        return $this->antLongitude1;
    }

    public function setAntLongitude1(int $antLongitude1): self
    {
        $this->antLongitude1 = $antLongitude1;

        return $this;
    }

    public function getAntLongitude2(): ?int
    {
        return $this->antLongitude2;
    }

    public function setAntLongitude2(int $antLongitude2): self
    {
        $this->antLongitude2 = $antLongitude2;

        return $this;
    }

    public function getAntLongitude3(): ?float
    {
        return $this->antLongitude3;
    }

    public function setAntLongitude3(float $antLongitude3): self
    {
        $this->antLongitude3 = $antLongitude3;

        return $this;
    }

    public function getZona(): ?string
    {
        return $this->zona;
    }

    public function setZona(?string $zona): self
    {
        $this->zona = $zona;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCkmControlSystemId(): ?int
    {
        return $this->ckmControlSystemId;
    }

    public function setCkmControlSystemId(int $ckmControlSystemId): self
    {
        $this->ckmControlSystemId = $ckmControlSystemId;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }


}
