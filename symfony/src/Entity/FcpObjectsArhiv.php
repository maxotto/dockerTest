<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FcpObjectsArhiv
 *
 * @ORM\Table(name="fcp_objects_arhiv", indexes={@ORM\Index(name="Index 3", columns={"filial_id"}), @ORM\Index(name="Index 2", columns={"code"})})
 * @ORM\Entity
 */
class FcpObjectsArhiv
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
    private $fcpObjectId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=25, nullable=false)
     */
    private $code;

    /**
     * @var int
     *
     * @ORM\Column(name="multiplex_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $multiplexId;

    /**
     * @var int
     *
     * @ORM\Column(name="etap_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $etapId;

    /**
     * @var int
     *
     * @ORM\Column(name="etap_project_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Этап проектирования"})
     */
    private $etapProjectId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="reg_centre", type="integer", nullable=false, options={"unsigned"=true,"comment"="Признак регионального центра кодирования и мультиплексирования."})
     */
    private $regCentre = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="morethat100", type="integer", nullable=false, options={"unsigned"=true,"comment"="Признак города с населением более 100000"})
     */
    private $morethat100 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="veter_rayon", type="integer", nullable=false, options={"unsigned"=true,"comment"="ветровой район, от 1 до 7"})
     */
    private $veterRayon = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="transnettype", type="integer", nullable=false, options={"unsigned"=true,"comment"="Тип транспортной сети"})
     */
    private $transnettype = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="filial_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $filialId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="kladr_np_code", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $kladrNpCode;

    /**
     * @var int
     *
     * @ORM\Column(name="region_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $regionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rayon_id", type="integer", nullable=true, options={"unsigned"=true,"comment"="Заполняется как ссылка на часть кода из KLADR"})
     */
    private $rayonId;

    /**
     * @var int
     *
     * @ORM\Column(name="objtype_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $objtypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $deleted = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lastuser", type="integer", nullable=false)
     */
    private $lastuser = '0';

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
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"unsigned"=true,"comment"="Статус объекта по признаку документооборота"})
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="fin_status", type="integer", nullable=false, options={"unsigned"=true,"comment"="Статус объекта для финансистов"})
     */
    private $finStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="child_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $childId;

    /**
     * @var int
     *
     * @ORM\Column(name="build_status", type="integer", nullable=false, options={"unsigned"=true,"comment"="Статус готовности объекта к эксплуатации"})
     */
    private $buildStatus = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="problem_id", type="integer", nullable=false)
     */
    private $problemId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="problem_txt", type="string", length=255, nullable=false)
     */
    private $problemTxt;

    /**
     * @var int
     *
     * @ORM\Column(name="ready", type="integer", nullable=false)
     */
    private $ready = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="testshow", type="integer", nullable=false, options={"unsigned"=true,"comment"="Признак тестового вещания"})
     */
    private $testshow = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="criteria95", type="integer", nullable=false, options={"unsigned"=true,"comment"="Критерий 95%"})
     */
    private $criteria95 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="dorofeev_in_report", type="integer", nullable=true, options={"unsigned"=true,"comment"="Признак того, что в отчет по ходу строительства этот объект пойдет как построенный."})
     */
    private $dorofeevInReport = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="in_build_report", type="integer", nullable=true, options={"unsigned"=true,"comment"="Признак того, что данный объект в принципе пойдет в отчет по ходу строительства."})
     */
    private $inBuildReport = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="build_year", type="integer", nullable=true, options={"unsigned"=true,"comment"="Год строительства 1 мультиплекса"})
     */
    private $buildYear = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="build_year_2m", type="integer", nullable=true, options={"unsigned"=true,"comment"="Год строительства 2 мультиплекса"})
     */
    private $buildYear2m = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="build_year_dop_nm", type="integer", nullable=true, options={"unsigned"=true,"comment"="Год строительства дополнительных мультиплексов"})
     */
    private $buildYearDopNm = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="pnr_ready", type="integer", nullable=true, options={"unsigned"=true,"comment"="Признак того, что данный объект прошел ПНР"})
     */
    private $pnrReady = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rabkom_ready", type="integer", nullable=true, options={"unsigned"=true,"comment"="Признак того, что данный объект прошел стадию рабочих комиссий"})
     */
    private $rabkomReady = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="test_ready", type="integer", nullable=true, options={"unsigned"=true,"comment"="Признак того, что данный объект готов к тестовому вещанию"})
     */
    private $testReady = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="in_test", type="integer", nullable=true, options={"unsigned"=true,"comment"="Признак того, что данный объект в тестовом вещании"})
     */
    private $inTest = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="uved_gp", type="integer", nullable=true, options={"unsigned"=true,"comment"="Имеется уведомление о готовности от ГенПодрядчика"})
     */
    private $uvedGp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="razp_exp", type="integer", nullable=true, options={"unsigned"=true,"comment"="Имеется разрешение на эксплуатацию"})
     */
    private $razpExp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="priem_kom_works", type="integer", nullable=true, options={"unsigned"=true,"comment"="приемочная комиссия работает"})
     */
    private $priemKomWorks = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ready_priem_kom", type="integer", nullable=true, options={"unsigned"=true,"comment"="Принято рабочей комиссией"})
     */
    private $readyPriemKom = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="prj_developer_2mux", type="integer", nullable=true)
     */
    private $prjDeveloper2mux = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="queue_develop_2mux", type="integer", nullable=true)
     */
    private $queueDevelop2mux = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="integrator_id", type="integer", nullable=true)
     */
    private $integratorId = '0';

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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getMultiplexId(): ?int
    {
        return $this->multiplexId;
    }

    public function setMultiplexId(int $multiplexId): self
    {
        $this->multiplexId = $multiplexId;

        return $this;
    }

    public function getEtapId(): ?int
    {
        return $this->etapId;
    }

    public function setEtapId(int $etapId): self
    {
        $this->etapId = $etapId;

        return $this;
    }

    public function getEtapProjectId(): ?int
    {
        return $this->etapProjectId;
    }

    public function setEtapProjectId(int $etapProjectId): self
    {
        $this->etapProjectId = $etapProjectId;

        return $this;
    }

    public function getRegCentre(): ?int
    {
        return $this->regCentre;
    }

    public function setRegCentre(int $regCentre): self
    {
        $this->regCentre = $regCentre;

        return $this;
    }

    public function getMorethat100(): ?int
    {
        return $this->morethat100;
    }

    public function setMorethat100(int $morethat100): self
    {
        $this->morethat100 = $morethat100;

        return $this;
    }

    public function getVeterRayon(): ?int
    {
        return $this->veterRayon;
    }

    public function setVeterRayon(int $veterRayon): self
    {
        $this->veterRayon = $veterRayon;

        return $this;
    }

    public function getTransnettype(): ?int
    {
        return $this->transnettype;
    }

    public function setTransnettype(int $transnettype): self
    {
        $this->transnettype = $transnettype;

        return $this;
    }

    public function getFilialId(): ?int
    {
        return $this->filialId;
    }

    public function setFilialId(int $filialId): self
    {
        $this->filialId = $filialId;

        return $this;
    }

    public function getKladrNpCode(): ?int
    {
        return $this->kladrNpCode;
    }

    public function setKladrNpCode(?int $kladrNpCode): self
    {
        $this->kladrNpCode = $kladrNpCode;

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

    public function getRayonId(): ?int
    {
        return $this->rayonId;
    }

    public function setRayonId(?int $rayonId): self
    {
        $this->rayonId = $rayonId;

        return $this;
    }

    public function getObjtypeId(): ?int
    {
        return $this->objtypeId;
    }

    public function setObjtypeId(int $objtypeId): self
    {
        $this->objtypeId = $objtypeId;

        return $this;
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

    public function getLastuser(): ?int
    {
        return $this->lastuser;
    }

    public function setLastuser(int $lastuser): self
    {
        $this->lastuser = $lastuser;

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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getFinStatus(): ?int
    {
        return $this->finStatus;
    }

    public function setFinStatus(int $finStatus): self
    {
        $this->finStatus = $finStatus;

        return $this;
    }

    public function getChildId(): ?int
    {
        return $this->childId;
    }

    public function setChildId(int $childId): self
    {
        $this->childId = $childId;

        return $this;
    }

    public function getBuildStatus(): ?int
    {
        return $this->buildStatus;
    }

    public function setBuildStatus(int $buildStatus): self
    {
        $this->buildStatus = $buildStatus;

        return $this;
    }

    public function getProblemId(): ?int
    {
        return $this->problemId;
    }

    public function setProblemId(int $problemId): self
    {
        $this->problemId = $problemId;

        return $this;
    }

    public function getProblemTxt(): ?string
    {
        return $this->problemTxt;
    }

    public function setProblemTxt(string $problemTxt): self
    {
        $this->problemTxt = $problemTxt;

        return $this;
    }

    public function getReady(): ?int
    {
        return $this->ready;
    }

    public function setReady(int $ready): self
    {
        $this->ready = $ready;

        return $this;
    }

    public function getTestshow(): ?int
    {
        return $this->testshow;
    }

    public function setTestshow(int $testshow): self
    {
        $this->testshow = $testshow;

        return $this;
    }

    public function getCriteria95(): ?int
    {
        return $this->criteria95;
    }

    public function setCriteria95(int $criteria95): self
    {
        $this->criteria95 = $criteria95;

        return $this;
    }

    public function getDorofeevInReport(): ?int
    {
        return $this->dorofeevInReport;
    }

    public function setDorofeevInReport(?int $dorofeevInReport): self
    {
        $this->dorofeevInReport = $dorofeevInReport;

        return $this;
    }

    public function getInBuildReport(): ?int
    {
        return $this->inBuildReport;
    }

    public function setInBuildReport(?int $inBuildReport): self
    {
        $this->inBuildReport = $inBuildReport;

        return $this;
    }

    public function getBuildYear(): ?int
    {
        return $this->buildYear;
    }

    public function setBuildYear(?int $buildYear): self
    {
        $this->buildYear = $buildYear;

        return $this;
    }

    public function getBuildYear2m(): ?int
    {
        return $this->buildYear2m;
    }

    public function setBuildYear2m(?int $buildYear2m): self
    {
        $this->buildYear2m = $buildYear2m;

        return $this;
    }

    public function getBuildYearDopNm(): ?int
    {
        return $this->buildYearDopNm;
    }

    public function setBuildYearDopNm(?int $buildYearDopNm): self
    {
        $this->buildYearDopNm = $buildYearDopNm;

        return $this;
    }

    public function getPnrReady(): ?int
    {
        return $this->pnrReady;
    }

    public function setPnrReady(?int $pnrReady): self
    {
        $this->pnrReady = $pnrReady;

        return $this;
    }

    public function getRabkomReady(): ?int
    {
        return $this->rabkomReady;
    }

    public function setRabkomReady(?int $rabkomReady): self
    {
        $this->rabkomReady = $rabkomReady;

        return $this;
    }

    public function getTestReady(): ?int
    {
        return $this->testReady;
    }

    public function setTestReady(?int $testReady): self
    {
        $this->testReady = $testReady;

        return $this;
    }

    public function getInTest(): ?int
    {
        return $this->inTest;
    }

    public function setInTest(?int $inTest): self
    {
        $this->inTest = $inTest;

        return $this;
    }

    public function getUvedGp(): ?int
    {
        return $this->uvedGp;
    }

    public function setUvedGp(?int $uvedGp): self
    {
        $this->uvedGp = $uvedGp;

        return $this;
    }

    public function getRazpExp(): ?int
    {
        return $this->razpExp;
    }

    public function setRazpExp(?int $razpExp): self
    {
        $this->razpExp = $razpExp;

        return $this;
    }

    public function getPriemKomWorks(): ?int
    {
        return $this->priemKomWorks;
    }

    public function setPriemKomWorks(?int $priemKomWorks): self
    {
        $this->priemKomWorks = $priemKomWorks;

        return $this;
    }

    public function getReadyPriemKom(): ?int
    {
        return $this->readyPriemKom;
    }

    public function setReadyPriemKom(?int $readyPriemKom): self
    {
        $this->readyPriemKom = $readyPriemKom;

        return $this;
    }

    public function getPrjDeveloper2mux(): ?int
    {
        return $this->prjDeveloper2mux;
    }

    public function setPrjDeveloper2mux(?int $prjDeveloper2mux): self
    {
        $this->prjDeveloper2mux = $prjDeveloper2mux;

        return $this;
    }

    public function getQueueDevelop2mux(): ?int
    {
        return $this->queueDevelop2mux;
    }

    public function setQueueDevelop2mux(?int $queueDevelop2mux): self
    {
        $this->queueDevelop2mux = $queueDevelop2mux;

        return $this;
    }

    public function getIntegratorId(): ?int
    {
        return $this->integratorId;
    }

    public function setIntegratorId(?int $integratorId): self
    {
        $this->integratorId = $integratorId;

        return $this;
    }


}
