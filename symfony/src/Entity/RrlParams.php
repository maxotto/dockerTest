<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RrlParams
 *
 * @ORM\Table(name="rrl_params", indexes={@ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class RrlParams
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
     * @ORM\Column(name="longitude_1", type="integer", nullable=false, options={"unsigned"=true})
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
    private $containersCount = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="buildtype", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $buildtype;

    /**
     * @var int
     *
     * @ORM\Column(name="pu_land", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $puLand;

    /**
     * @var string
     *
     * @ORM\Column(name="pu_land_doc", type="text", length=65535, nullable=false)
     */
    private $puLandDoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pu_land_date", type="date", nullable=false)
     */
    private $puLandDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pu_land_plan_date", type="date", nullable=false)
     */
    private $puLandPlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="pu_ams", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $puAms;

    /**
     * @var string
     *
     * @ORM\Column(name="pu_ams_doc", type="text", length=65535, nullable=false)
     */
    private $puAmsDoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pu_ams_date", type="date", nullable=false)
     */
    private $puAmsDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pu_ams_plan_date", type="date", nullable=false)
     */
    private $puAmsPlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="pu_house", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $puHouse;

    /**
     * @var string
     *
     * @ORM\Column(name="pu_house_doc", type="text", length=65535, nullable=false)
     */
    private $puHouseDoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pu_house_date", type="date", nullable=false)
     */
    private $puHouseDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pu_house_plan_date", type="date", nullable=false)
     */
    private $puHousePlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="ks14", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ks14;

    /**
     * @var string
     *
     * @ORM\Column(name="ks14_doc", type="text", length=65535, nullable=false)
     */
    private $ks14Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ks14_date", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $ks14Date = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ks14_plan_date", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $ks14PlanDate = '1970-01-01';

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

    public function getBuildtype(): ?int
    {
        return $this->buildtype;
    }

    public function setBuildtype(int $buildtype): self
    {
        $this->buildtype = $buildtype;

        return $this;
    }

    public function getPuLand(): ?int
    {
        return $this->puLand;
    }

    public function setPuLand(int $puLand): self
    {
        $this->puLand = $puLand;

        return $this;
    }

    public function getPuLandDoc(): ?string
    {
        return $this->puLandDoc;
    }

    public function setPuLandDoc(string $puLandDoc): self
    {
        $this->puLandDoc = $puLandDoc;

        return $this;
    }

    public function getPuLandDate(): ?\DateTimeInterface
    {
        return $this->puLandDate;
    }

    public function setPuLandDate(\DateTimeInterface $puLandDate): self
    {
        $this->puLandDate = $puLandDate;

        return $this;
    }

    public function getPuLandPlanDate(): ?\DateTimeInterface
    {
        return $this->puLandPlanDate;
    }

    public function setPuLandPlanDate(\DateTimeInterface $puLandPlanDate): self
    {
        $this->puLandPlanDate = $puLandPlanDate;

        return $this;
    }

    public function getPuAms(): ?int
    {
        return $this->puAms;
    }

    public function setPuAms(int $puAms): self
    {
        $this->puAms = $puAms;

        return $this;
    }

    public function getPuAmsDoc(): ?string
    {
        return $this->puAmsDoc;
    }

    public function setPuAmsDoc(string $puAmsDoc): self
    {
        $this->puAmsDoc = $puAmsDoc;

        return $this;
    }

    public function getPuAmsDate(): ?\DateTimeInterface
    {
        return $this->puAmsDate;
    }

    public function setPuAmsDate(\DateTimeInterface $puAmsDate): self
    {
        $this->puAmsDate = $puAmsDate;

        return $this;
    }

    public function getPuAmsPlanDate(): ?\DateTimeInterface
    {
        return $this->puAmsPlanDate;
    }

    public function setPuAmsPlanDate(\DateTimeInterface $puAmsPlanDate): self
    {
        $this->puAmsPlanDate = $puAmsPlanDate;

        return $this;
    }

    public function getPuHouse(): ?int
    {
        return $this->puHouse;
    }

    public function setPuHouse(int $puHouse): self
    {
        $this->puHouse = $puHouse;

        return $this;
    }

    public function getPuHouseDoc(): ?string
    {
        return $this->puHouseDoc;
    }

    public function setPuHouseDoc(string $puHouseDoc): self
    {
        $this->puHouseDoc = $puHouseDoc;

        return $this;
    }

    public function getPuHouseDate(): ?\DateTimeInterface
    {
        return $this->puHouseDate;
    }

    public function setPuHouseDate(\DateTimeInterface $puHouseDate): self
    {
        $this->puHouseDate = $puHouseDate;

        return $this;
    }

    public function getPuHousePlanDate(): ?\DateTimeInterface
    {
        return $this->puHousePlanDate;
    }

    public function setPuHousePlanDate(\DateTimeInterface $puHousePlanDate): self
    {
        $this->puHousePlanDate = $puHousePlanDate;

        return $this;
    }

    public function getKs14(): ?int
    {
        return $this->ks14;
    }

    public function setKs14(int $ks14): self
    {
        $this->ks14 = $ks14;

        return $this;
    }

    public function getKs14Doc(): ?string
    {
        return $this->ks14Doc;
    }

    public function setKs14Doc(string $ks14Doc): self
    {
        $this->ks14Doc = $ks14Doc;

        return $this;
    }

    public function getKs14Date(): ?\DateTimeInterface
    {
        return $this->ks14Date;
    }

    public function setKs14Date(\DateTimeInterface $ks14Date): self
    {
        $this->ks14Date = $ks14Date;

        return $this;
    }

    public function getKs14PlanDate(): ?\DateTimeInterface
    {
        return $this->ks14PlanDate;
    }

    public function setKs14PlanDate(\DateTimeInterface $ks14PlanDate): self
    {
        $this->ks14PlanDate = $ks14PlanDate;

        return $this;
    }


}
