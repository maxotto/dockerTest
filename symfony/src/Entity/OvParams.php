<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OvParams
 *
 * @ORM\Table(name="ov_params", indexes={@ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class OvParams
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
     * @ORM\Column(name="chtp_zone_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $chtpZoneId;

    /**
     * @var int
     *
     * @ORM\Column(name="tvk_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tvkId;

    /**
     * @var int
     *
     * @ORM\Column(name="pzss_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $pzssId;

    /**
     * @var int
     *
     * @ORM\Column(name="transmitt_power_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $transmittPowerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="feeder_model", type="string", length=255, nullable=true)
     */
    private $feederModel;

    /**
     * @var int
     *
     * @ORM\Column(name="feedertype_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $feedertypeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="feeders_count", type="integer", nullable=true, options={"default"="1","unsigned"=true})
     */
    private $feedersCount = 1;

    /**
     * @var float
     *
     * @ORM\Column(name="feeder_length", type="float", precision=10, scale=0, nullable=false)
     */
    private $feederLength;

    /**
     * @var float
     *
     * @ORM\Column(name="feeder_losts", type="float", precision=10, scale=0, nullable=false)
     */
    private $feederLosts;

    /**
     * @var int
     *
     * @ORM\Column(name="antenna_type_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $antennaTypeId;

    /**
     * @var float
     *
     * @ORM\Column(name="antenna_height_low", type="float", precision=10, scale=0, nullable=false)
     */
    private $antennaHeightLow;

    /**
     * @var float
     *
     * @ORM\Column(name="antenna_height_geo", type="float", precision=10, scale=0, nullable=false)
     */
    private $antennaHeightGeo;

    /**
     * @var float
     *
     * @ORM\Column(name="antenna_height_fasa", type="float", precision=10, scale=0, nullable=false)
     */
    private $antennaHeightFasa;

    /**
     * @var float
     *
     * @ORM\Column(name="antenna_ku", type="float", precision=10, scale=0, nullable=false)
     */
    private $antennaKu;

    /**
     * @var float
     *
     * @ORM\Column(name="antenna_power", type="float", precision=10, scale=0, nullable=false)
     */
    private $antennaPower;

    /**
     * @var int
     *
     * @ORM\Column(name="antenna_diag_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $antennaDiagId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="antennadiagtxt", type="string", length=100, nullable=true)
     */
    private $antennadiagtxt = '';

    /**
     * @var float
     *
     * @ORM\Column(name="ams_height", type="float", precision=10, scale=0, nullable=false)
     */
    private $amsHeight;

    /**
     * @var int
     *
     * @ORM\Column(name="ams_exist_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $amsExistId;

    /**
     * @var int
     *
     * @ORM\Column(name="ams_type", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $amsType;

    /**
     * @var int
     *
     * @ORM\Column(name="ams_base_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="если АМС существующая, то здесь надо вписать индекс  АМС из базы тех-средств"})
     */
    private $amsBaseId;

    /**
     * @var int
     *
     * @ORM\Column(name="supply_power_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $supplyPowerId;

    /**
     * @var string
     *
     * @ORM\Column(name="supply_power_value", type="decimal", precision=10, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $supplyPowerValue = '0.000';

    /**
     * @var int
     *
     * @ORM\Column(name="citizen_in_zone", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $citizenInZone;

    /**
     * @var int
     *
     * @ORM\Column(name="zone_square", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $zoneSquare;

    /**
     * @var int
     *
     * @ORM\Column(name="house_exist_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $houseExistId;

    /**
     * @var int
     *
     * @ORM\Column(name="house_is_container", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $houseIsContainer;

    /**
     * @var int
     *
     * @ORM\Column(name="containers", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $containers;

    /**
     * @var int
     *
     * @ORM\Column(name="containers_count", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $containersCount;

    /**
     * @var int
     *
     * @ORM\Column(name="bulidtype", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $bulidtype;

    /**
     * @var int
     *
     * @ORM\Column(name="need_change_filter_mask", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $needChangeFilterMask = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="citizen_in_zone_all", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $citizenInZoneAll = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="citizen_in_zone_uniq", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $citizenInZoneUniq = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="percent_ohvata", type="float", precision=10, scale=0, nullable=false)
     */
    private $percentOhvata = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="citizen_by_perepis", type="string", length=255, nullable=false, options={"default"="[]"})
     */
    private $citizenByPerepis = '[]';

    /**
     * @var int|null
     *
     * @ORM\Column(name="need_modern_electric_supply", type="integer", nullable=true, options={"unsigned"=true,"comment"="Необходимость модернизации существующей сети электроснабжаения (да/нет)"})
     */
    private $needModernElectricSupply = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="need_dop_container", type="integer", nullable=true, options={"unsigned"=true,"comment"="Необходимость установки дополнительного контейнера (да/нет)"})
     */
    private $needDopContainer = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="need_modern_afu", type="integer", nullable=true, options={"unsigned"=true,"comment"="Необходимость модернизации существующей АФУ (да/нет)"})
     */
    private $needModernAfu = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="transmitter_producer", type="integer", nullable=false, options={"unsigned"=true,"comment"="Производитель передатчика"})
     */
    private $transmitterProducer = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ams_weight", type="decimal", precision=8, scale=2, nullable=false, options={"default"="0.00","comment"="Вес АМС"})
     */
    private $amsWeight = '0.00';

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

    public function getChtpZoneId(): ?int
    {
        return $this->chtpZoneId;
    }

    public function setChtpZoneId(int $chtpZoneId): self
    {
        $this->chtpZoneId = $chtpZoneId;

        return $this;
    }

    public function getTvkId(): ?int
    {
        return $this->tvkId;
    }

    public function setTvkId(int $tvkId): self
    {
        $this->tvkId = $tvkId;

        return $this;
    }

    public function getPzssId(): ?int
    {
        return $this->pzssId;
    }

    public function setPzssId(int $pzssId): self
    {
        $this->pzssId = $pzssId;

        return $this;
    }

    public function getTransmittPowerId(): ?int
    {
        return $this->transmittPowerId;
    }

    public function setTransmittPowerId(int $transmittPowerId): self
    {
        $this->transmittPowerId = $transmittPowerId;

        return $this;
    }

    public function getFeederModel(): ?string
    {
        return $this->feederModel;
    }

    public function setFeederModel(?string $feederModel): self
    {
        $this->feederModel = $feederModel;

        return $this;
    }

    public function getFeedertypeId(): ?int
    {
        return $this->feedertypeId;
    }

    public function setFeedertypeId(int $feedertypeId): self
    {
        $this->feedertypeId = $feedertypeId;

        return $this;
    }

    public function getFeedersCount(): ?int
    {
        return $this->feedersCount;
    }

    public function setFeedersCount(?int $feedersCount): self
    {
        $this->feedersCount = $feedersCount;

        return $this;
    }

    public function getFeederLength(): ?float
    {
        return $this->feederLength;
    }

    public function setFeederLength(float $feederLength): self
    {
        $this->feederLength = $feederLength;

        return $this;
    }

    public function getFeederLosts(): ?float
    {
        return $this->feederLosts;
    }

    public function setFeederLosts(float $feederLosts): self
    {
        $this->feederLosts = $feederLosts;

        return $this;
    }

    public function getAntennaTypeId(): ?int
    {
        return $this->antennaTypeId;
    }

    public function setAntennaTypeId(int $antennaTypeId): self
    {
        $this->antennaTypeId = $antennaTypeId;

        return $this;
    }

    public function getAntennaHeightLow(): ?float
    {
        return $this->antennaHeightLow;
    }

    public function setAntennaHeightLow(float $antennaHeightLow): self
    {
        $this->antennaHeightLow = $antennaHeightLow;

        return $this;
    }

    public function getAntennaHeightGeo(): ?float
    {
        return $this->antennaHeightGeo;
    }

    public function setAntennaHeightGeo(float $antennaHeightGeo): self
    {
        $this->antennaHeightGeo = $antennaHeightGeo;

        return $this;
    }

    public function getAntennaHeightFasa(): ?float
    {
        return $this->antennaHeightFasa;
    }

    public function setAntennaHeightFasa(float $antennaHeightFasa): self
    {
        $this->antennaHeightFasa = $antennaHeightFasa;

        return $this;
    }

    public function getAntennaKu(): ?float
    {
        return $this->antennaKu;
    }

    public function setAntennaKu(float $antennaKu): self
    {
        $this->antennaKu = $antennaKu;

        return $this;
    }

    public function getAntennaPower(): ?float
    {
        return $this->antennaPower;
    }

    public function setAntennaPower(float $antennaPower): self
    {
        $this->antennaPower = $antennaPower;

        return $this;
    }

    public function getAntennaDiagId(): ?int
    {
        return $this->antennaDiagId;
    }

    public function setAntennaDiagId(int $antennaDiagId): self
    {
        $this->antennaDiagId = $antennaDiagId;

        return $this;
    }

    public function getAntennadiagtxt(): ?string
    {
        return $this->antennadiagtxt;
    }

    public function setAntennadiagtxt(?string $antennadiagtxt): self
    {
        $this->antennadiagtxt = $antennadiagtxt;

        return $this;
    }

    public function getAmsHeight(): ?float
    {
        return $this->amsHeight;
    }

    public function setAmsHeight(float $amsHeight): self
    {
        $this->amsHeight = $amsHeight;

        return $this;
    }

    public function getAmsExistId(): ?int
    {
        return $this->amsExistId;
    }

    public function setAmsExistId(int $amsExistId): self
    {
        $this->amsExistId = $amsExistId;

        return $this;
    }

    public function getAmsType(): ?int
    {
        return $this->amsType;
    }

    public function setAmsType(int $amsType): self
    {
        $this->amsType = $amsType;

        return $this;
    }

    public function getAmsBaseId(): ?int
    {
        return $this->amsBaseId;
    }

    public function setAmsBaseId(int $amsBaseId): self
    {
        $this->amsBaseId = $amsBaseId;

        return $this;
    }

    public function getSupplyPowerId(): ?int
    {
        return $this->supplyPowerId;
    }

    public function setSupplyPowerId(int $supplyPowerId): self
    {
        $this->supplyPowerId = $supplyPowerId;

        return $this;
    }

    public function getSupplyPowerValue(): ?string
    {
        return $this->supplyPowerValue;
    }

    public function setSupplyPowerValue(string $supplyPowerValue): self
    {
        $this->supplyPowerValue = $supplyPowerValue;

        return $this;
    }

    public function getCitizenInZone(): ?int
    {
        return $this->citizenInZone;
    }

    public function setCitizenInZone(int $citizenInZone): self
    {
        $this->citizenInZone = $citizenInZone;

        return $this;
    }

    public function getZoneSquare(): ?int
    {
        return $this->zoneSquare;
    }

    public function setZoneSquare(int $zoneSquare): self
    {
        $this->zoneSquare = $zoneSquare;

        return $this;
    }

    public function getHouseExistId(): ?int
    {
        return $this->houseExistId;
    }

    public function setHouseExistId(int $houseExistId): self
    {
        $this->houseExistId = $houseExistId;

        return $this;
    }

    public function getHouseIsContainer(): ?int
    {
        return $this->houseIsContainer;
    }

    public function setHouseIsContainer(int $houseIsContainer): self
    {
        $this->houseIsContainer = $houseIsContainer;

        return $this;
    }

    public function getContainers(): ?int
    {
        return $this->containers;
    }

    public function setContainers(int $containers): self
    {
        $this->containers = $containers;

        return $this;
    }

    public function getContainersCount(): ?int
    {
        return $this->containersCount;
    }

    public function setContainersCount(int $containersCount): self
    {
        $this->containersCount = $containersCount;

        return $this;
    }

    public function getBulidtype(): ?int
    {
        return $this->bulidtype;
    }

    public function setBulidtype(int $bulidtype): self
    {
        $this->bulidtype = $bulidtype;

        return $this;
    }

    public function getNeedChangeFilterMask(): ?int
    {
        return $this->needChangeFilterMask;
    }

    public function setNeedChangeFilterMask(int $needChangeFilterMask): self
    {
        $this->needChangeFilterMask = $needChangeFilterMask;

        return $this;
    }

    public function getCitizenInZoneAll(): ?int
    {
        return $this->citizenInZoneAll;
    }

    public function setCitizenInZoneAll(int $citizenInZoneAll): self
    {
        $this->citizenInZoneAll = $citizenInZoneAll;

        return $this;
    }

    public function getCitizenInZoneUniq(): ?int
    {
        return $this->citizenInZoneUniq;
    }

    public function setCitizenInZoneUniq(int $citizenInZoneUniq): self
    {
        $this->citizenInZoneUniq = $citizenInZoneUniq;

        return $this;
    }

    public function getPercentOhvata(): ?float
    {
        return $this->percentOhvata;
    }

    public function setPercentOhvata(float $percentOhvata): self
    {
        $this->percentOhvata = $percentOhvata;

        return $this;
    }

    public function getCitizenByPerepis(): ?string
    {
        return $this->citizenByPerepis;
    }

    public function setCitizenByPerepis(string $citizenByPerepis): self
    {
        $this->citizenByPerepis = $citizenByPerepis;

        return $this;
    }

    public function getNeedModernElectricSupply(): ?int
    {
        return $this->needModernElectricSupply;
    }

    public function setNeedModernElectricSupply(?int $needModernElectricSupply): self
    {
        $this->needModernElectricSupply = $needModernElectricSupply;

        return $this;
    }

    public function getNeedDopContainer(): ?int
    {
        return $this->needDopContainer;
    }

    public function setNeedDopContainer(?int $needDopContainer): self
    {
        $this->needDopContainer = $needDopContainer;

        return $this;
    }

    public function getNeedModernAfu(): ?int
    {
        return $this->needModernAfu;
    }

    public function setNeedModernAfu(?int $needModernAfu): self
    {
        $this->needModernAfu = $needModernAfu;

        return $this;
    }

    public function getTransmitterProducer(): ?int
    {
        return $this->transmitterProducer;
    }

    public function setTransmitterProducer(int $transmitterProducer): self
    {
        $this->transmitterProducer = $transmitterProducer;

        return $this;
    }

    public function getAmsWeight(): ?string
    {
        return $this->amsWeight;
    }

    public function setAmsWeight(string $amsWeight): self
    {
        $this->amsWeight = $amsWeight;

        return $this;
    }


}
