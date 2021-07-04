<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zu
 *
 * @ORM\Table(name="zu", uniqueConstraints={@ORM\UniqueConstraint(name="UK_zu_code_zu_uon", columns={"code_zu_uon"})}, indexes={@ORM\Index(name="IDX_zu_code_zu_uon", columns={"code_zu_uon"}), @ORM\Index(name="IDX_zu_region_id", columns={"region_id"}), @ORM\Index(name="FK_zu_group_id", columns={"group_id"}), @ORM\Index(name="FK_zu_korzina_2020_11", columns={"korzina_2020_11"}), @ORM\Index(name="FK_zu_korzina_2021_05", columns={"korzina_2021_05"}), @ORM\Index(name="IDX_zu_kadastr_number", columns={"kadastr_number"}), @ORM\Index(name="IDX_zu_rnfi", columns={"rnfi"}), @ORM\Index(name="FK_zu_parent", columns={"parent"}), @ORM\Index(name="FK_zu_tasks_template", columns={"tasks_template"})})
 * @ORM\Entity
 */
class Zu
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
     * @var string|null
     *
     * @ORM\Column(name="code_zu_uon", type="string", length=20, nullable=true)
     */
    private $codeZuUon;

    /**
     * @var string
     *
     * @ORM\Column(name="kadastr_number", type="string", length=50, nullable=false)
     */
    private $kadastrNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="kadastr_stoim", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $kadastrStoim;

    /**
     * @var string
     *
     * @ORM\Column(name="square", type="decimal", precision=20, scale=2, nullable=false)
     */
    private $square;

    /**
     * @var string
     *
     * @ORM\Column(name="category_vid", type="text", length=65535, nullable=false)
     */
    private $categoryVid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arenda_nalog", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $arendaNalog;

    /**
     * @var string
     *
     * @ORM\Column(name="pravo_rtrs", type="string", length=255, nullable=false)
     */
    private $pravoRtrs;

    /**
     * @var string|null
     *
     * @ORM\Column(name="forma_sobsbtv", type="string", length=50, nullable=true)
     */
    private $formaSobsbtv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rnfi", type="string", length=12, nullable=true)
     */
    private $rnfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="group_txt", type="string", length=50, nullable=true)
     */
    private $groupTxt = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="has_uncounted_txt", type="text", length=65535, nullable=true)
     */
    private $hasUncountedTxt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="has_uncounted", type="integer", nullable=true)
     */
    private $hasUncounted;

    /**
     * @var int|null
     *
     * @ORM\Column(name="in_peredat_act", type="integer", nullable=true)
     */
    private $inPeredatAct = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="included_by_filial", type="integer", nullable=true)
     */
    private $includedByFilial = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="uchten_in_svod", type="integer", nullable=true)
     */
    private $uchtenInSvod = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="exists_in_1c", type="integer", nullable=true)
     */
    private $existsIn1c = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="mob_zadanie", type="integer", nullable=true)
     */
    private $mobZadanie = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="has_samovol", type="integer", nullable=true)
     */
    private $hasSamovol = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="dom_ru", type="integer", nullable=true)
     */
    private $domRu = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="invest_privl", type="integer", nullable=true)
     */
    private $investPrivl = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="prim", type="text", length=65535, nullable=false)
     */
    private $prim;

    /**
     * @var string|null
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=true)
     */
    private $question = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="check_1c", type="string", length=255, nullable=true)
     */
    private $check1c = '';

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
     * @var \Omrv
     *
     * @ORM\ManyToOne(targetEntity="Omrv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent", referencedColumnName="id")
     * })
     */
    private $parent;

    /**
     * @var \TaskTemplateTypes
     *
     * @ORM\ManyToOne(targetEntity="TaskTemplateTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tasks_template", referencedColumnName="id")
     * })
     */
    private $tasksTemplate;

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

    public function getCodeZuUon(): ?string
    {
        return $this->codeZuUon;
    }

    public function setCodeZuUon(?string $codeZuUon): self
    {
        $this->codeZuUon = $codeZuUon;

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

    public function getKadastrStoim(): ?string
    {
        return $this->kadastrStoim;
    }

    public function setKadastrStoim(string $kadastrStoim): self
    {
        $this->kadastrStoim = $kadastrStoim;

        return $this;
    }

    public function getSquare(): ?string
    {
        return $this->square;
    }

    public function setSquare(string $square): self
    {
        $this->square = $square;

        return $this;
    }

    public function getCategoryVid(): ?string
    {
        return $this->categoryVid;
    }

    public function setCategoryVid(string $categoryVid): self
    {
        $this->categoryVid = $categoryVid;

        return $this;
    }

    public function getArendaNalog(): ?string
    {
        return $this->arendaNalog;
    }

    public function setArendaNalog(?string $arendaNalog): self
    {
        $this->arendaNalog = $arendaNalog;

        return $this;
    }

    public function getPravoRtrs(): ?string
    {
        return $this->pravoRtrs;
    }

    public function setPravoRtrs(string $pravoRtrs): self
    {
        $this->pravoRtrs = $pravoRtrs;

        return $this;
    }

    public function getFormaSobsbtv(): ?string
    {
        return $this->formaSobsbtv;
    }

    public function setFormaSobsbtv(?string $formaSobsbtv): self
    {
        $this->formaSobsbtv = $formaSobsbtv;

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

    public function getGroupTxt(): ?string
    {
        return $this->groupTxt;
    }

    public function setGroupTxt(?string $groupTxt): self
    {
        $this->groupTxt = $groupTxt;

        return $this;
    }

    public function getHasUncountedTxt(): ?string
    {
        return $this->hasUncountedTxt;
    }

    public function setHasUncountedTxt(?string $hasUncountedTxt): self
    {
        $this->hasUncountedTxt = $hasUncountedTxt;

        return $this;
    }

    public function getHasUncounted(): ?int
    {
        return $this->hasUncounted;
    }

    public function setHasUncounted(?int $hasUncounted): self
    {
        $this->hasUncounted = $hasUncounted;

        return $this;
    }

    public function getInPeredatAct(): ?int
    {
        return $this->inPeredatAct;
    }

    public function setInPeredatAct(?int $inPeredatAct): self
    {
        $this->inPeredatAct = $inPeredatAct;

        return $this;
    }

    public function getIncludedByFilial(): ?int
    {
        return $this->includedByFilial;
    }

    public function setIncludedByFilial(?int $includedByFilial): self
    {
        $this->includedByFilial = $includedByFilial;

        return $this;
    }

    public function getUchtenInSvod(): ?int
    {
        return $this->uchtenInSvod;
    }

    public function setUchtenInSvod(?int $uchtenInSvod): self
    {
        $this->uchtenInSvod = $uchtenInSvod;

        return $this;
    }

    public function getExistsIn1c(): ?int
    {
        return $this->existsIn1c;
    }

    public function setExistsIn1c(?int $existsIn1c): self
    {
        $this->existsIn1c = $existsIn1c;

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

    public function getHasSamovol(): ?int
    {
        return $this->hasSamovol;
    }

    public function setHasSamovol(?int $hasSamovol): self
    {
        $this->hasSamovol = $hasSamovol;

        return $this;
    }

    public function getDomRu(): ?int
    {
        return $this->domRu;
    }

    public function setDomRu(?int $domRu): self
    {
        $this->domRu = $domRu;

        return $this;
    }

    public function getInvestPrivl(): ?int
    {
        return $this->investPrivl;
    }

    public function setInvestPrivl(?int $investPrivl): self
    {
        $this->investPrivl = $investPrivl;

        return $this;
    }

    public function getPrim(): ?string
    {
        return $this->prim;
    }

    public function setPrim(string $prim): self
    {
        $this->prim = $prim;

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

    public function getCheck1c(): ?string
    {
        return $this->check1c;
    }

    public function setCheck1c(?string $check1c): self
    {
        $this->check1c = $check1c;

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

    public function getParent(): ?Omrv
    {
        return $this->parent;
    }

    public function setParent(?Omrv $parent): self
    {
        $this->parent = $parent;

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


}
