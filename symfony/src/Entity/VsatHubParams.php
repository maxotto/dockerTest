<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VsatHubParams
 *
 * @ORM\Table(name="vsat_hub_params", indexes={@ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class VsatHubParams
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
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=254, nullable=true)
     */
    private $address = '';

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
     * @ORM\Column(name="ant1_latitude_1", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ant1Latitude1;

    /**
     * @var int
     *
     * @ORM\Column(name="ant1_latitude_2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ant1Latitude2;

    /**
     * @var float
     *
     * @ORM\Column(name="ant1_latitude_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $ant1Latitude3;

    /**
     * @var int
     *
     * @ORM\Column(name="ant1_longitude_1", type="integer", nullable=false)
     */
    private $ant1Longitude1;

    /**
     * @var int
     *
     * @ORM\Column(name="ant1_longitude_2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ant1Longitude2;

    /**
     * @var float
     *
     * @ORM\Column(name="ant1_longitude_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $ant1Longitude3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant1_ka_orbit", type="string", length=100, nullable=true)
     */
    private $ant1KaOrbit = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ant1_ku_recieve", type="float", precision=10, scale=0, nullable=true)
     */
    private $ant1KuRecieve;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ant1_ku_transmitt", type="float", precision=10, scale=0, nullable=true)
     */
    private $ant1KuTransmitt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ant1_diameter", type="float", precision=10, scale=0, nullable=true)
     */
    private $ant1Diameter;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ant1_azimut", type="float", precision=10, scale=0, nullable=true)
     */
    private $ant1Azimut;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ant1_place_angle", type="float", precision=10, scale=0, nullable=true)
     */
    private $ant1PlaceAngle;

    /**
     * @var int
     *
     * @ORM\Column(name="ant2_latitude_1", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ant2Latitude1;

    /**
     * @var int
     *
     * @ORM\Column(name="ant2_latitude_2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ant2Latitude2;

    /**
     * @var float
     *
     * @ORM\Column(name="ant2_latitude_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $ant2Latitude3;

    /**
     * @var int
     *
     * @ORM\Column(name="ant2_longitude_1", type="integer", nullable=false)
     */
    private $ant2Longitude1;

    /**
     * @var int
     *
     * @ORM\Column(name="ant2_longitude_2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ant2Longitude2;

    /**
     * @var float
     *
     * @ORM\Column(name="ant2_longitude_3", type="float", precision=10, scale=0, nullable=false)
     */
    private $ant2Longitude3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ant2_ka_orbit", type="string", length=100, nullable=true)
     */
    private $ant2KaOrbit = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ant2_ku_recieve", type="float", precision=10, scale=0, nullable=true)
     */
    private $ant2KuRecieve;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ant2_ku_transmitt", type="float", precision=10, scale=0, nullable=true)
     */
    private $ant2KuTransmitt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ant2_diameter", type="float", precision=10, scale=0, nullable=true)
     */
    private $ant2Diameter;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ant2_azimut", type="float", precision=10, scale=0, nullable=true)
     */
    private $ant2Azimut;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ant2_place_angle", type="float", precision=10, scale=0, nullable=true)
     */
    private $ant2PlaceAngle;

    /**
     * @var float|null
     *
     * @ORM\Column(name="transmitt_frequency", type="float", precision=10, scale=0, nullable=true)
     */
    private $transmittFrequency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recieve_frequencies", type="text", length=65535, nullable=true)
     */
    private $recieveFrequencies;

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

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

    public function getAnt1Latitude1(): ?int
    {
        return $this->ant1Latitude1;
    }

    public function setAnt1Latitude1(int $ant1Latitude1): self
    {
        $this->ant1Latitude1 = $ant1Latitude1;

        return $this;
    }

    public function getAnt1Latitude2(): ?int
    {
        return $this->ant1Latitude2;
    }

    public function setAnt1Latitude2(int $ant1Latitude2): self
    {
        $this->ant1Latitude2 = $ant1Latitude2;

        return $this;
    }

    public function getAnt1Latitude3(): ?float
    {
        return $this->ant1Latitude3;
    }

    public function setAnt1Latitude3(float $ant1Latitude3): self
    {
        $this->ant1Latitude3 = $ant1Latitude3;

        return $this;
    }

    public function getAnt1Longitude1(): ?int
    {
        return $this->ant1Longitude1;
    }

    public function setAnt1Longitude1(int $ant1Longitude1): self
    {
        $this->ant1Longitude1 = $ant1Longitude1;

        return $this;
    }

    public function getAnt1Longitude2(): ?int
    {
        return $this->ant1Longitude2;
    }

    public function setAnt1Longitude2(int $ant1Longitude2): self
    {
        $this->ant1Longitude2 = $ant1Longitude2;

        return $this;
    }

    public function getAnt1Longitude3(): ?float
    {
        return $this->ant1Longitude3;
    }

    public function setAnt1Longitude3(float $ant1Longitude3): self
    {
        $this->ant1Longitude3 = $ant1Longitude3;

        return $this;
    }

    public function getAnt1KaOrbit(): ?string
    {
        return $this->ant1KaOrbit;
    }

    public function setAnt1KaOrbit(?string $ant1KaOrbit): self
    {
        $this->ant1KaOrbit = $ant1KaOrbit;

        return $this;
    }

    public function getAnt1KuRecieve(): ?float
    {
        return $this->ant1KuRecieve;
    }

    public function setAnt1KuRecieve(?float $ant1KuRecieve): self
    {
        $this->ant1KuRecieve = $ant1KuRecieve;

        return $this;
    }

    public function getAnt1KuTransmitt(): ?float
    {
        return $this->ant1KuTransmitt;
    }

    public function setAnt1KuTransmitt(?float $ant1KuTransmitt): self
    {
        $this->ant1KuTransmitt = $ant1KuTransmitt;

        return $this;
    }

    public function getAnt1Diameter(): ?float
    {
        return $this->ant1Diameter;
    }

    public function setAnt1Diameter(?float $ant1Diameter): self
    {
        $this->ant1Diameter = $ant1Diameter;

        return $this;
    }

    public function getAnt1Azimut(): ?float
    {
        return $this->ant1Azimut;
    }

    public function setAnt1Azimut(?float $ant1Azimut): self
    {
        $this->ant1Azimut = $ant1Azimut;

        return $this;
    }

    public function getAnt1PlaceAngle(): ?float
    {
        return $this->ant1PlaceAngle;
    }

    public function setAnt1PlaceAngle(?float $ant1PlaceAngle): self
    {
        $this->ant1PlaceAngle = $ant1PlaceAngle;

        return $this;
    }

    public function getAnt2Latitude1(): ?int
    {
        return $this->ant2Latitude1;
    }

    public function setAnt2Latitude1(int $ant2Latitude1): self
    {
        $this->ant2Latitude1 = $ant2Latitude1;

        return $this;
    }

    public function getAnt2Latitude2(): ?int
    {
        return $this->ant2Latitude2;
    }

    public function setAnt2Latitude2(int $ant2Latitude2): self
    {
        $this->ant2Latitude2 = $ant2Latitude2;

        return $this;
    }

    public function getAnt2Latitude3(): ?float
    {
        return $this->ant2Latitude3;
    }

    public function setAnt2Latitude3(float $ant2Latitude3): self
    {
        $this->ant2Latitude3 = $ant2Latitude3;

        return $this;
    }

    public function getAnt2Longitude1(): ?int
    {
        return $this->ant2Longitude1;
    }

    public function setAnt2Longitude1(int $ant2Longitude1): self
    {
        $this->ant2Longitude1 = $ant2Longitude1;

        return $this;
    }

    public function getAnt2Longitude2(): ?int
    {
        return $this->ant2Longitude2;
    }

    public function setAnt2Longitude2(int $ant2Longitude2): self
    {
        $this->ant2Longitude2 = $ant2Longitude2;

        return $this;
    }

    public function getAnt2Longitude3(): ?float
    {
        return $this->ant2Longitude3;
    }

    public function setAnt2Longitude3(float $ant2Longitude3): self
    {
        $this->ant2Longitude3 = $ant2Longitude3;

        return $this;
    }

    public function getAnt2KaOrbit(): ?string
    {
        return $this->ant2KaOrbit;
    }

    public function setAnt2KaOrbit(?string $ant2KaOrbit): self
    {
        $this->ant2KaOrbit = $ant2KaOrbit;

        return $this;
    }

    public function getAnt2KuRecieve(): ?float
    {
        return $this->ant2KuRecieve;
    }

    public function setAnt2KuRecieve(?float $ant2KuRecieve): self
    {
        $this->ant2KuRecieve = $ant2KuRecieve;

        return $this;
    }

    public function getAnt2KuTransmitt(): ?float
    {
        return $this->ant2KuTransmitt;
    }

    public function setAnt2KuTransmitt(?float $ant2KuTransmitt): self
    {
        $this->ant2KuTransmitt = $ant2KuTransmitt;

        return $this;
    }

    public function getAnt2Diameter(): ?float
    {
        return $this->ant2Diameter;
    }

    public function setAnt2Diameter(?float $ant2Diameter): self
    {
        $this->ant2Diameter = $ant2Diameter;

        return $this;
    }

    public function getAnt2Azimut(): ?float
    {
        return $this->ant2Azimut;
    }

    public function setAnt2Azimut(?float $ant2Azimut): self
    {
        $this->ant2Azimut = $ant2Azimut;

        return $this;
    }

    public function getAnt2PlaceAngle(): ?float
    {
        return $this->ant2PlaceAngle;
    }

    public function setAnt2PlaceAngle(?float $ant2PlaceAngle): self
    {
        $this->ant2PlaceAngle = $ant2PlaceAngle;

        return $this;
    }

    public function getTransmittFrequency(): ?float
    {
        return $this->transmittFrequency;
    }

    public function setTransmittFrequency(?float $transmittFrequency): self
    {
        $this->transmittFrequency = $transmittFrequency;

        return $this;
    }

    public function getRecieveFrequencies(): ?string
    {
        return $this->recieveFrequencies;
    }

    public function setRecieveFrequencies(?string $recieveFrequencies): self
    {
        $this->recieveFrequencies = $recieveFrequencies;

        return $this;
    }


}
