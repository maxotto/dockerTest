<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oni
 *
 * @ORM\Table(name="oni", indexes={@ORM\Index(name="FK_oni_description", columns={"description"}), @ORM\Index(name="IDX_oni_region_id", columns={"region_id"}), @ORM\Index(name="FK_oni_group_id", columns={"group_id"}), @ORM\Index(name="FK_oni_oni_group_id", columns={"oni_group_id"}), @ORM\Index(name="FK_oni_tasks_template", columns={"tasks_template"}), @ORM\Index(name="FK_oni_project_complexity", columns={"project_complexity"}), @ORM\Index(name="IDX_oni_code_zu_uon", columns={"code_zu_uon"}), @ORM\Index(name="IDX_oni_inv_number", columns={"inv_number"}), @ORM\Index(name="IDX_oni_rnfi", columns={"rnfi"}), @ORM\Index(name="FK_oni_type_id", columns={"type_id"}), @ORM\Index(name="FK_oni_korzina_2020_11", columns={"korzina_2020_11"}), @ORM\Index(name="FK_oni_korzina_2021_05", columns={"korzina_2021_05"}), @ORM\Index(name="IDX_oni_code_oni_uon", columns={"code_oni_uon"}), @ORM\Index(name="FK_oni_category", columns={"category"})})
 * @ORM\Entity
 */
class Oni
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
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="region_id", type="integer", nullable=false)
     */
    private $regionId;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=false)
     */
    private $address;

    /**
     * @var point|null
     *
     * @ORM\Column(name="location", type="point", nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="rayon", type="string", length=255, nullable=false)
     */
    private $rayon;

    /**
     * @var string
     *
     * @ORM\Column(name="np", type="string", length=255, nullable=false)
     */
    private $np;

    /**
     * @var string
     *
     * @ORM\Column(name="address_clear", type="text", length=65535, nullable=false)
     */
    private $addressClear;

    /**
     * @var int
     *
     * @ORM\Column(name="zip_code", type="integer", nullable=false)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="code_oni_uon", type="string", length=20, nullable=false)
     */
    private $codeOniUon;

    /**
     * @var string
     *
     * @ORM\Column(name="code_zu_uon", type="string", length=20, nullable=false)
     */
    private $codeZuUon;

    /**
     * @var string
     *
     * @ORM\Column(name="inv_number", type="string", length=50, nullable=false)
     */
    private $invNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="perv_stoim", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $pervStoim;

    /**
     * @var string
     *
     * @ORM\Column(name="ost_stoim", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $ostStoim;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rnfi", type="string", length=12, nullable=true)
     */
    private $rnfi;

    /**
     * @var string
     *
     * @ORM\Column(name="kadastr_number", type="string", length=50, nullable=false)
     */
    private $kadastrNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="pravo_hoz_ved", type="string", length=100, nullable=false)
     */
    private $pravoHozVed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pravo_sobstvn_rf", type="string", length=100, nullable=true)
     */
    private $pravoSobstvnRf;

    /**
     * @var string
     *
     * @ORM\Column(name="teh_sost_txt", type="string", length=255, nullable=false)
     */
    private $tehSostTxt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="teh_sost_id", type="integer", nullable=true)
     */
    private $tehSostId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true)
     */
    private $note = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="filial_note", type="string", length=255, nullable=true)
     */
    private $filialNote = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=true)
     */
    private $question = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_txt", type="string", length=50, nullable=true)
     */
    private $groupTxt = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edited_when", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $editedWhen = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="address_internal", type="text", length=65535, nullable=false)
     */
    private $addressInternal;

    /**
     * @var string
     *
     * @ORM\Column(name="n_perech", type="string", length=50, nullable=false)
     */
    private $nPerech = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="mob_zadanie", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $mobZadanie = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="why_in_uon", type="string", length=255, nullable=true)
     */
    private $whyInUon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arenda_sqr", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $arendaSqr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="height", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $height;

    /**
     * @var string|null
     *
     * @ORM\Column(name="deep", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $deep;

    /**
     * @var int|null
     *
     * @ORM\Column(name="expl_in_year", type="integer", nullable=true, options={"unsigned"=true,"comment"="Год ввода в эксплуатацию"})
     */
    private $explInYear;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rnfi_date", type="date", nullable=true)
     */
    private $rnfiDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="house_number", type="string", length=25, nullable=true)
     */
    private $houseNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="living_sqr", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $livingSqr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inv_number_liter", type="string", length=255, nullable=true)
     */
    private $invNumberLiter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="korpus", type="string", length=25, nullable=true)
     */
    private $korpus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="common_sqr", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $commonSqr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zasroy_sqr", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $zasroySqr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="undergroud_floors_count", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $undergroudFloorsCount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="length", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $length;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number_type", type="string", length=25, nullable=true)
     */
    private $numberType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street", type="string", length=255, nullable=true)
     */
    private $street;

    /**
     * @var int|null
     *
     * @ORM\Column(name="floors_count", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $floorsCount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fcp_code", type="string", length=9, nullable=true)
     */
    private $fcpCode;

    /**
     * @var int
     *
     * @ORM\Column(name="for_snos", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $forSnos = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="parent", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parent;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uon_link", type="string", length=255, nullable=true)
     */
    private $uonLink;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rospech_request_num", type="string", length=255, nullable=true)
     */
    private $rospechRequestNum;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rospech_request_date", type="date", nullable=true)
     */
    private $rospechRequestDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rospech_answer_num", type="string", length=255, nullable=true)
     */
    private $rospechAnswerNum;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="rospech_answer_date", type="date", nullable=true)
     */
    private $rospechAnswerDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uon_prim", type="text", length=65535, nullable=true)
     */
    private $uonPrim;

    /**
     * @var int
     *
     * @ORM\Column(name="is_ini_demontazh", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $isIniDemontazh = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ros_reestr_json", type="text", length=65535, nullable=true)
     */
    private $rosReestrJson;

    /**
     * @var \OniCategory
     *
     * @ORM\ManyToOne(targetEntity="OniCategory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \OniDescription
     *
     * @ORM\ManyToOne(targetEntity="OniDescription")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="description", referencedColumnName="id")
     * })
     */
    private $description;

    /**
     * @var \DemontazhGroups
     *
     * @ORM\ManyToOne(targetEntity="DemontazhGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var \DemontazhGroups
     *
     * @ORM\ManyToOne(targetEntity="DemontazhGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="korzina_2020_11", referencedColumnName="id")
     * })
     */
    private $korzina202011;

    /**
     * @var \DemontazhGroups
     *
     * @ORM\ManyToOne(targetEntity="DemontazhGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="korzina_2021_05", referencedColumnName="id")
     * })
     */
    private $korzina202105;

    /**
     * @var \OniGroups
     *
     * @ORM\ManyToOne(targetEntity="OniGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="oni_group_id", referencedColumnName="id")
     * })
     */
    private $oniGroup;

    /**
     * @var \OniProjectComplexity
     *
     * @ORM\ManyToOne(targetEntity="OniProjectComplexity")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_complexity", referencedColumnName="id")
     * })
     */
    private $projectComplexity;

    /**
     * @var \TaskTemplateTypes
     *
     * @ORM\ManyToOne(targetEntity="TaskTemplateTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tasks_template", referencedColumnName="id")
     * })
     */
    private $tasksTemplate;

    /**
     * @var \OniTypes
     *
     * @ORM\ManyToOne(targetEntity="OniTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeleted(): ?int
    {
        return $this->deleted;
    }

    public function setDeleted(int $deleted): self
    {
        $this->deleted = $deleted;

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getRayon(): ?string
    {
        return $this->rayon;
    }

    public function setRayon(string $rayon): self
    {
        $this->rayon = $rayon;

        return $this;
    }

    public function getNp(): ?string
    {
        return $this->np;
    }

    public function setNp(string $np): self
    {
        $this->np = $np;

        return $this;
    }

    public function getAddressClear(): ?string
    {
        return $this->addressClear;
    }

    public function setAddressClear(string $addressClear): self
    {
        $this->addressClear = $addressClear;

        return $this;
    }

    public function getZipCode(): ?int
    {
        return $this->zipCode;
    }

    public function setZipCode(int $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCodeOniUon(): ?string
    {
        return $this->codeOniUon;
    }

    public function setCodeOniUon(string $codeOniUon): self
    {
        $this->codeOniUon = $codeOniUon;

        return $this;
    }

    public function getCodeZuUon(): ?string
    {
        return $this->codeZuUon;
    }

    public function setCodeZuUon(string $codeZuUon): self
    {
        $this->codeZuUon = $codeZuUon;

        return $this;
    }

    public function getInvNumber(): ?string
    {
        return $this->invNumber;
    }

    public function setInvNumber(string $invNumber): self
    {
        $this->invNumber = $invNumber;

        return $this;
    }

    public function getPervStoim(): ?string
    {
        return $this->pervStoim;
    }

    public function setPervStoim(string $pervStoim): self
    {
        $this->pervStoim = $pervStoim;

        return $this;
    }

    public function getOstStoim(): ?string
    {
        return $this->ostStoim;
    }

    public function setOstStoim(string $ostStoim): self
    {
        $this->ostStoim = $ostStoim;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRnfi(): ?string
    {
        return $this->rnfi;
    }

    public function setRnfi(?string $rnfi): self
    {
        $this->rnfi = $rnfi;

        return $this;
    }

    public function getKadastrNumber(): ?string
    {
        return $this->kadastrNumber;
    }

    public function setKadastrNumber(string $kadastrNumber): self
    {
        $this->kadastrNumber = $kadastrNumber;

        return $this;
    }

    public function getPravoHozVed(): ?string
    {
        return $this->pravoHozVed;
    }

    public function setPravoHozVed(string $pravoHozVed): self
    {
        $this->pravoHozVed = $pravoHozVed;

        return $this;
    }

    public function getPravoSobstvnRf(): ?string
    {
        return $this->pravoSobstvnRf;
    }

    public function setPravoSobstvnRf(?string $pravoSobstvnRf): self
    {
        $this->pravoSobstvnRf = $pravoSobstvnRf;

        return $this;
    }

    public function getTehSostTxt(): ?string
    {
        return $this->tehSostTxt;
    }

    public function setTehSostTxt(string $tehSostTxt): self
    {
        $this->tehSostTxt = $tehSostTxt;

        return $this;
    }

    public function getTehSostId(): ?int
    {
        return $this->tehSostId;
    }

    public function setTehSostId(?int $tehSostId): self
    {
        $this->tehSostId = $tehSostId;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getFilialNote(): ?string
    {
        return $this->filialNote;
    }

    public function setFilialNote(?string $filialNote): self
    {
        $this->filialNote = $filialNote;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getGroupTxt(): ?string
    {
        return $this->groupTxt;
    }

    public function setGroupTxt(?string $groupTxt): self
    {
        $this->groupTxt = $groupTxt;

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

    public function getAddressInternal(): ?string
    {
        return $this->addressInternal;
    }

    public function setAddressInternal(string $addressInternal): self
    {
        $this->addressInternal = $addressInternal;

        return $this;
    }

    public function getNPerech(): ?string
    {
        return $this->nPerech;
    }

    public function setNPerech(string $nPerech): self
    {
        $this->nPerech = $nPerech;

        return $this;
    }

    public function getMobZadanie(): ?int
    {
        return $this->mobZadanie;
    }

    public function setMobZadanie(?int $mobZadanie): self
    {
        $this->mobZadanie = $mobZadanie;

        return $this;
    }

    public function getWhyInUon(): ?string
    {
        return $this->whyInUon;
    }

    public function setWhyInUon(?string $whyInUon): self
    {
        $this->whyInUon = $whyInUon;

        return $this;
    }

    public function getArendaSqr(): ?string
    {
        return $this->arendaSqr;
    }

    public function setArendaSqr(?string $arendaSqr): self
    {
        $this->arendaSqr = $arendaSqr;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(?string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getDeep(): ?string
    {
        return $this->deep;
    }

    public function setDeep(?string $deep): self
    {
        $this->deep = $deep;

        return $this;
    }

    public function getExplInYear(): ?int
    {
        return $this->explInYear;
    }

    public function setExplInYear(?int $explInYear): self
    {
        $this->explInYear = $explInYear;

        return $this;
    }

    public function getRnfiDate(): ?\DateTimeInterface
    {
        return $this->rnfiDate;
    }

    public function setRnfiDate(?\DateTimeInterface $rnfiDate): self
    {
        $this->rnfiDate = $rnfiDate;

        return $this;
    }

    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(?string $houseNumber): self
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    public function getLivingSqr(): ?string
    {
        return $this->livingSqr;
    }

    public function setLivingSqr(?string $livingSqr): self
    {
        $this->livingSqr = $livingSqr;

        return $this;
    }

    public function getInvNumberLiter(): ?string
    {
        return $this->invNumberLiter;
    }

    public function setInvNumberLiter(?string $invNumberLiter): self
    {
        $this->invNumberLiter = $invNumberLiter;

        return $this;
    }

    public function getKorpus(): ?string
    {
        return $this->korpus;
    }

    public function setKorpus(?string $korpus): self
    {
        $this->korpus = $korpus;

        return $this;
    }

    public function getCommonSqr(): ?string
    {
        return $this->commonSqr;
    }

    public function setCommonSqr(?string $commonSqr): self
    {
        $this->commonSqr = $commonSqr;

        return $this;
    }

    public function getZasroySqr(): ?string
    {
        return $this->zasroySqr;
    }

    public function setZasroySqr(?string $zasroySqr): self
    {
        $this->zasroySqr = $zasroySqr;

        return $this;
    }

    public function getUndergroudFloorsCount(): ?int
    {
        return $this->undergroudFloorsCount;
    }

    public function setUndergroudFloorsCount(?int $undergroudFloorsCount): self
    {
        $this->undergroudFloorsCount = $undergroudFloorsCount;

        return $this;
    }

    public function getLength(): ?string
    {
        return $this->length;
    }

    public function setLength(?string $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getNumberType(): ?string
    {
        return $this->numberType;
    }

    public function setNumberType(?string $numberType): self
    {
        $this->numberType = $numberType;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getFloorsCount(): ?int
    {
        return $this->floorsCount;
    }

    public function setFloorsCount(?int $floorsCount): self
    {
        $this->floorsCount = $floorsCount;

        return $this;
    }

    public function getFcpCode(): ?string
    {
        return $this->fcpCode;
    }

    public function setFcpCode(?string $fcpCode): self
    {
        $this->fcpCode = $fcpCode;

        return $this;
    }

    public function getForSnos(): ?int
    {
        return $this->forSnos;
    }

    public function setForSnos(int $forSnos): self
    {
        $this->forSnos = $forSnos;

        return $this;
    }

    public function getParent(): ?int
    {
        return $this->parent;
    }

    public function setParent(int $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getUonLink(): ?string
    {
        return $this->uonLink;
    }

    public function setUonLink(?string $uonLink): self
    {
        $this->uonLink = $uonLink;

        return $this;
    }

    public function getRospechRequestNum(): ?string
    {
        return $this->rospechRequestNum;
    }

    public function setRospechRequestNum(?string $rospechRequestNum): self
    {
        $this->rospechRequestNum = $rospechRequestNum;

        return $this;
    }

    public function getRospechRequestDate(): ?\DateTimeInterface
    {
        return $this->rospechRequestDate;
    }

    public function setRospechRequestDate(?\DateTimeInterface $rospechRequestDate): self
    {
        $this->rospechRequestDate = $rospechRequestDate;

        return $this;
    }

    public function getRospechAnswerNum(): ?string
    {
        return $this->rospechAnswerNum;
    }

    public function setRospechAnswerNum(?string $rospechAnswerNum): self
    {
        $this->rospechAnswerNum = $rospechAnswerNum;

        return $this;
    }

    public function getRospechAnswerDate(): ?\DateTimeInterface
    {
        return $this->rospechAnswerDate;
    }

    public function setRospechAnswerDate(?\DateTimeInterface $rospechAnswerDate): self
    {
        $this->rospechAnswerDate = $rospechAnswerDate;

        return $this;
    }

    public function getUonPrim(): ?string
    {
        return $this->uonPrim;
    }

    public function setUonPrim(?string $uonPrim): self
    {
        $this->uonPrim = $uonPrim;

        return $this;
    }

    public function getIsIniDemontazh(): ?int
    {
        return $this->isIniDemontazh;
    }

    public function setIsIniDemontazh(int $isIniDemontazh): self
    {
        $this->isIniDemontazh = $isIniDemontazh;

        return $this;
    }

    public function getRosReestrJson(): ?string
    {
        return $this->rosReestrJson;
    }

    public function setRosReestrJson(?string $rosReestrJson): self
    {
        $this->rosReestrJson = $rosReestrJson;

        return $this;
    }

    public function getCategory(): ?OniCategory
    {
        return $this->category;
    }

    public function setCategory(?OniCategory $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getDescription(): ?OniDescription
    {
        return $this->description;
    }

    public function setDescription(?OniDescription $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getGroup(): ?DemontazhGroups
    {
        return $this->group;
    }

    public function setGroup(?DemontazhGroups $group): self
    {
        $this->group = $group;

        return $this;
    }

    public function getKorzina202011(): ?DemontazhGroups
    {
        return $this->korzina202011;
    }

    public function setKorzina202011(?DemontazhGroups $korzina202011): self
    {
        $this->korzina202011 = $korzina202011;

        return $this;
    }

    public function getKorzina202105(): ?DemontazhGroups
    {
        return $this->korzina202105;
    }

    public function setKorzina202105(?DemontazhGroups $korzina202105): self
    {
        $this->korzina202105 = $korzina202105;

        return $this;
    }

    public function getOniGroup(): ?OniGroups
    {
        return $this->oniGroup;
    }

    public function setOniGroup(?OniGroups $oniGroup): self
    {
        $this->oniGroup = $oniGroup;

        return $this;
    }

    public function getProjectComplexity(): ?OniProjectComplexity
    {
        return $this->projectComplexity;
    }

    public function setProjectComplexity(?OniProjectComplexity $projectComplexity): self
    {
        $this->projectComplexity = $projectComplexity;

        return $this;
    }

    public function getTasksTemplate(): ?TaskTemplateTypes
    {
        return $this->tasksTemplate;
    }

    public function setTasksTemplate(?TaskTemplateTypes $tasksTemplate): self
    {
        $this->tasksTemplate = $tasksTemplate;

        return $this;
    }

    public function getType(): ?OniTypes
    {
        return $this->type;
    }

    public function setType(?OniTypes $type): self
    {
        $this->type = $type;

        return $this;
    }


}
