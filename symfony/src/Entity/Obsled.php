<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Obsled
 *
 * @ORM\Table(name="obsled", indexes={@ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class Obsled
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_obsl_fund_ams", type="date", nullable=true, options={"comment"="Дата последнего обследования фундамента"})
     */
    private $lastObslFundAms;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_obsl_met", type="date", nullable=true, options={"comment"="Дата последнего обследования металлоконструкций"})
     */
    private $lastObslMet;

    /**
     * @var int
     *
     * @ORM\Column(name="afu_new_work_needs", type="integer", nullable=false, options={"unsigned"=true,"comment"="Для размещения цифрового оборудования требуются дополнительные работы"})
     */
    private $afuNewWorkNeeds = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="replace_aafu_needs", type="integer", nullable=false, options={"unsigned"=true,"comment"="Требуется перенос/демонтаж аналогового АФУ для размещения цифрового АФУ"})
     */
    private $replaceAafuNeeds = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dog_r_psd_perenos", type="date", nullable=true, options={"comment"="Дата заключение договора на разработку ПСД на перенос оборудования"})
     */
    private $dogRPsdPerenos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contragent_psd", type="text", length=65535, nullable=true, options={"comment"="Контрагент (разработчик ПСД)"})
     */
    private $contragentPsd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_psd", type="date", nullable=true, options={"comment"="Дата утверждения  ПСД"})
     */
    private $datePsd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_dog_per_afu", type="date", nullable=true, options={"comment"="Дата заключение договора на перенос/демонтаж аналогового АФУ"})
     */
    private $dateDogPerAfu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contragent_work_afu", type="text", length=65535, nullable=true, options={"comment"="Контрагент"})
     */
    private $contragentWorkAfu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_work_afu", type="date", nullable=true, options={"comment"="Дата завершения работ по договору"})
     */
    private $dateFinishWorkAfu;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_work_afu_fact", type="date", nullable=true, options={"comment"="Дата фактического завершения работ"})
     */
    private $dateFinishWorkAfuFact;

    /**
     * @var int
     *
     * @ORM\Column(name="new_obsl_ams_needs", type="integer", nullable=false, options={"unsigned"=true,"comment"="Требуется новое обследование с учетом размещения дополнительного АФУ"})
     */
    private $newObslAmsNeeds = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_dog_obsl_ams", type="date", nullable=true, options={"comment"="Дата заключение договора на проведение обследований АМС"})
     */
    private $dateDogObslAms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contragent_ams", type="text", length=65535, nullable=true, options={"comment"="Контрагент"})
     */
    private $contragentAms;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_work_ams", type="date", nullable=true, options={"comment"="Дата завершения работ по договору"})
     */
    private $dateFinishWorkAms;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_work_ams_fact", type="date", nullable=true, options={"comment"="Дата фактического завершения работ"})
     */
    private $dateFinishWorkAmsFact;

    /**
     * @var int
     *
     * @ORM\Column(name="dop_obor", type="integer", nullable=false, options={"unsigned"=true,"comment"="Заключение о возможности размещения дополнительного оборудования на АМС"})
     */
    private $dopObor = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_god_psd_rvr", type="date", nullable=true, options={"comment"="Дата заключение договора на разработку ПСД на проведение РВР"})
     */
    private $dateGodPsdRvr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contragent_psd_rvr", type="text", length=65535, nullable=true, options={"comment"="Контрагент (разработчик ПСД)"})
     */
    private $contragentPsdRvr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_utv_psd_rvr", type="date", nullable=true, options={"comment"="Дата утверждения  ПСД"})
     */
    private $dateUtvPsdRvr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_god_rvr", type="date", nullable=true, options={"comment"="Дата заключение договора на проведение ремонтных работ"})
     */
    private $dateGodRvr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contragent_rvr", type="text", length=65535, nullable=true, options={"comment"="Контрагент"})
     */
    private $contragentRvr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_work_rvr", type="date", nullable=true, options={"comment"="Срок завершения РВР по договору"})
     */
    private $dateFinishWorkRvr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_work_rvr_fact", type="date", nullable=true, options={"comment"="Фактический срок завершения РВР"})
     */
    private $dateFinishWorkRvrFact;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_zakl_rvr", type="date", nullable=true, options={"comment"="Дата Получение заключения о соответствии"})
     */
    private $dateZaklRvr;

    /**
     * @var int
     *
     * @ORM\Column(name="povt_obsl", type="integer", nullable=false, options={"unsigned"=true,"comment"="Проведение повторного обследования"})
     */
    private $povtObsl = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_god_povt_obsl", type="date", nullable=true, options={"comment"="Дата заключение договора на проведение обследований АМС"})
     */
    private $dateGodPovtObsl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contragent_povt_obsl", type="text", length=65535, nullable=true, options={"comment"="Контрагент"})
     */
    private $contragentPovtObsl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_povt_obsl", type="date", nullable=true, options={"comment"="Дата завершения работ по договору"})
     */
    private $dateFinishPovtObsl;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_povt_obsl_fact", type="date", nullable=true, options={"comment"="Дата фактического завершения работ"})
     */
    private $dateFinishPovtObslFact;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_obsl_fund_zd", type="date", nullable=true, options={"comment"="Дата последнего обследования фундамента"})
     */
    private $lastObslFundZd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_obsl_zd", type="date", nullable=true, options={"comment"="Дата последнего обследования здания"})
     */
    private $lastObslZd;

    /**
     * @var int
     *
     * @ORM\Column(name="zd_new_work_needs", type="integer", nullable=false, options={"unsigned"=true,"comment"="Для размещения цифрового оборудования требуются дополнительные работы"})
     */
    private $zdNewWorkNeeds = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="zd_new_obsl_needs", type="integer", nullable=false, options={"unsigned"=true,"comment"="Требуется новое обследование с учетом размещения дополнительного АФУ"})
     */
    private $zdNewObslNeeds = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_god_obsl_zd", type="date", nullable=true, options={"comment"="Дата заключение договора на проведение обследований помещения"})
     */
    private $dateGodObslZd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contragent_obsl_zd", type="text", length=65535, nullable=true, options={"comment"="Контрагент"})
     */
    private $contragentObslZd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_obsl_zd", type="date", nullable=true, options={"comment"="Дата завершения работ по договору"})
     */
    private $dateFinishObslZd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_obsl_zd_fact", type="date", nullable=true, options={"comment"="Дата фактического завершения работ"})
     */
    private $dateFinishObslZdFact;

    /**
     * @var int
     *
     * @ORM\Column(name="zd_dop_obor", type="integer", nullable=false, options={"unsigned"=true,"comment"="Заключение о возможности размещения дополнительного оборудования в помещении"})
     */
    private $zdDopObor = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_god_psd_rvr_zd", type="date", nullable=true, options={"comment"="Дата заключение договора на разработку ПСД на проведение РВР"})
     */
    private $dateGodPsdRvrZd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contragent_psd_rvr_zd", type="text", length=65535, nullable=true, options={"comment"="Контрагент (разработчик ПСД)"})
     */
    private $contragentPsdRvrZd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_utv_psd_rvr_zd", type="date", nullable=true, options={"comment"="Дата утверждения  ПСД"})
     */
    private $dateUtvPsdRvrZd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_god_rvr_zd", type="date", nullable=true, options={"comment"="Дата заключение договора на проведение ремонтных работ"})
     */
    private $dateGodRvrZd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contragent_rvr_zd", type="text", length=65535, nullable=true, options={"comment"="Контрагент"})
     */
    private $contragentRvrZd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_work_rvr_zd", type="date", nullable=true, options={"comment"="Срок завершения РВР по договору"})
     */
    private $dateFinishWorkRvrZd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_work_rvr_fact_zd", type="date", nullable=true, options={"comment"="Фактический срок завершения РВР"})
     */
    private $dateFinishWorkRvrFactZd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_zakl_rvr_zd", type="date", nullable=true, options={"comment"="Дата Получение заключения о соответствии"})
     */
    private $dateZaklRvrZd;

    /**
     * @var int
     *
     * @ORM\Column(name="zd_povt_obsl", type="integer", nullable=false, options={"unsigned"=true,"comment"="Проведение повторного обследования"})
     */
    private $zdPovtObsl = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_god_povt_obsl_zd", type="date", nullable=true, options={"comment"="Дата заключение договора на проведение обследований АМС"})
     */
    private $dateGodPovtObslZd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contragent_povt_obsl_zd", type="text", length=65535, nullable=true, options={"comment"="Контрагент"})
     */
    private $contragentPovtObslZd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_povt_obsl_zd", type="date", nullable=true, options={"comment"="Дата завершения работ по договору"})
     */
    private $dateFinishPovtObslZd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_finish_povt_obsl_fact_zd", type="date", nullable=true, options={"comment"="Дата фактического завершения работ"})
     */
    private $dateFinishPovtObslFactZd;

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

    public function getLastObslFundAms(): ?\DateTimeInterface
    {
        return $this->lastObslFundAms;
    }

    public function setLastObslFundAms(?\DateTimeInterface $lastObslFundAms): self
    {
        $this->lastObslFundAms = $lastObslFundAms;

        return $this;
    }

    public function getLastObslMet(): ?\DateTimeInterface
    {
        return $this->lastObslMet;
    }

    public function setLastObslMet(?\DateTimeInterface $lastObslMet): self
    {
        $this->lastObslMet = $lastObslMet;

        return $this;
    }

    public function getAfuNewWorkNeeds(): ?int
    {
        return $this->afuNewWorkNeeds;
    }

    public function setAfuNewWorkNeeds(int $afuNewWorkNeeds): self
    {
        $this->afuNewWorkNeeds = $afuNewWorkNeeds;

        return $this;
    }

    public function getReplaceAafuNeeds(): ?int
    {
        return $this->replaceAafuNeeds;
    }

    public function setReplaceAafuNeeds(int $replaceAafuNeeds): self
    {
        $this->replaceAafuNeeds = $replaceAafuNeeds;

        return $this;
    }

    public function getDogRPsdPerenos(): ?\DateTimeInterface
    {
        return $this->dogRPsdPerenos;
    }

    public function setDogRPsdPerenos(?\DateTimeInterface $dogRPsdPerenos): self
    {
        $this->dogRPsdPerenos = $dogRPsdPerenos;

        return $this;
    }

    public function getContragentPsd(): ?string
    {
        return $this->contragentPsd;
    }

    public function setContragentPsd(?string $contragentPsd): self
    {
        $this->contragentPsd = $contragentPsd;

        return $this;
    }

    public function getDatePsd(): ?\DateTimeInterface
    {
        return $this->datePsd;
    }

    public function setDatePsd(?\DateTimeInterface $datePsd): self
    {
        $this->datePsd = $datePsd;

        return $this;
    }

    public function getDateDogPerAfu(): ?\DateTimeInterface
    {
        return $this->dateDogPerAfu;
    }

    public function setDateDogPerAfu(?\DateTimeInterface $dateDogPerAfu): self
    {
        $this->dateDogPerAfu = $dateDogPerAfu;

        return $this;
    }

    public function getContragentWorkAfu(): ?string
    {
        return $this->contragentWorkAfu;
    }

    public function setContragentWorkAfu(?string $contragentWorkAfu): self
    {
        $this->contragentWorkAfu = $contragentWorkAfu;

        return $this;
    }

    public function getDateFinishWorkAfu(): ?\DateTimeInterface
    {
        return $this->dateFinishWorkAfu;
    }

    public function setDateFinishWorkAfu(?\DateTimeInterface $dateFinishWorkAfu): self
    {
        $this->dateFinishWorkAfu = $dateFinishWorkAfu;

        return $this;
    }

    public function getDateFinishWorkAfuFact(): ?\DateTimeInterface
    {
        return $this->dateFinishWorkAfuFact;
    }

    public function setDateFinishWorkAfuFact(?\DateTimeInterface $dateFinishWorkAfuFact): self
    {
        $this->dateFinishWorkAfuFact = $dateFinishWorkAfuFact;

        return $this;
    }

    public function getNewObslAmsNeeds(): ?int
    {
        return $this->newObslAmsNeeds;
    }

    public function setNewObslAmsNeeds(int $newObslAmsNeeds): self
    {
        $this->newObslAmsNeeds = $newObslAmsNeeds;

        return $this;
    }

    public function getDateDogObslAms(): ?\DateTimeInterface
    {
        return $this->dateDogObslAms;
    }

    public function setDateDogObslAms(?\DateTimeInterface $dateDogObslAms): self
    {
        $this->dateDogObslAms = $dateDogObslAms;

        return $this;
    }

    public function getContragentAms(): ?string
    {
        return $this->contragentAms;
    }

    public function setContragentAms(?string $contragentAms): self
    {
        $this->contragentAms = $contragentAms;

        return $this;
    }

    public function getDateFinishWorkAms(): ?\DateTimeInterface
    {
        return $this->dateFinishWorkAms;
    }

    public function setDateFinishWorkAms(?\DateTimeInterface $dateFinishWorkAms): self
    {
        $this->dateFinishWorkAms = $dateFinishWorkAms;

        return $this;
    }

    public function getDateFinishWorkAmsFact(): ?\DateTimeInterface
    {
        return $this->dateFinishWorkAmsFact;
    }

    public function setDateFinishWorkAmsFact(?\DateTimeInterface $dateFinishWorkAmsFact): self
    {
        $this->dateFinishWorkAmsFact = $dateFinishWorkAmsFact;

        return $this;
    }

    public function getDopObor(): ?int
    {
        return $this->dopObor;
    }

    public function setDopObor(int $dopObor): self
    {
        $this->dopObor = $dopObor;

        return $this;
    }

    public function getDateGodPsdRvr(): ?\DateTimeInterface
    {
        return $this->dateGodPsdRvr;
    }

    public function setDateGodPsdRvr(?\DateTimeInterface $dateGodPsdRvr): self
    {
        $this->dateGodPsdRvr = $dateGodPsdRvr;

        return $this;
    }

    public function getContragentPsdRvr(): ?string
    {
        return $this->contragentPsdRvr;
    }

    public function setContragentPsdRvr(?string $contragentPsdRvr): self
    {
        $this->contragentPsdRvr = $contragentPsdRvr;

        return $this;
    }

    public function getDateUtvPsdRvr(): ?\DateTimeInterface
    {
        return $this->dateUtvPsdRvr;
    }

    public function setDateUtvPsdRvr(?\DateTimeInterface $dateUtvPsdRvr): self
    {
        $this->dateUtvPsdRvr = $dateUtvPsdRvr;

        return $this;
    }

    public function getDateGodRvr(): ?\DateTimeInterface
    {
        return $this->dateGodRvr;
    }

    public function setDateGodRvr(?\DateTimeInterface $dateGodRvr): self
    {
        $this->dateGodRvr = $dateGodRvr;

        return $this;
    }

    public function getContragentRvr(): ?string
    {
        return $this->contragentRvr;
    }

    public function setContragentRvr(?string $contragentRvr): self
    {
        $this->contragentRvr = $contragentRvr;

        return $this;
    }

    public function getDateFinishWorkRvr(): ?\DateTimeInterface
    {
        return $this->dateFinishWorkRvr;
    }

    public function setDateFinishWorkRvr(?\DateTimeInterface $dateFinishWorkRvr): self
    {
        $this->dateFinishWorkRvr = $dateFinishWorkRvr;

        return $this;
    }

    public function getDateFinishWorkRvrFact(): ?\DateTimeInterface
    {
        return $this->dateFinishWorkRvrFact;
    }

    public function setDateFinishWorkRvrFact(?\DateTimeInterface $dateFinishWorkRvrFact): self
    {
        $this->dateFinishWorkRvrFact = $dateFinishWorkRvrFact;

        return $this;
    }

    public function getDateZaklRvr(): ?\DateTimeInterface
    {
        return $this->dateZaklRvr;
    }

    public function setDateZaklRvr(?\DateTimeInterface $dateZaklRvr): self
    {
        $this->dateZaklRvr = $dateZaklRvr;

        return $this;
    }

    public function getPovtObsl(): ?int
    {
        return $this->povtObsl;
    }

    public function setPovtObsl(int $povtObsl): self
    {
        $this->povtObsl = $povtObsl;

        return $this;
    }

    public function getDateGodPovtObsl(): ?\DateTimeInterface
    {
        return $this->dateGodPovtObsl;
    }

    public function setDateGodPovtObsl(?\DateTimeInterface $dateGodPovtObsl): self
    {
        $this->dateGodPovtObsl = $dateGodPovtObsl;

        return $this;
    }

    public function getContragentPovtObsl(): ?string
    {
        return $this->contragentPovtObsl;
    }

    public function setContragentPovtObsl(?string $contragentPovtObsl): self
    {
        $this->contragentPovtObsl = $contragentPovtObsl;

        return $this;
    }

    public function getDateFinishPovtObsl(): ?\DateTimeInterface
    {
        return $this->dateFinishPovtObsl;
    }

    public function setDateFinishPovtObsl(?\DateTimeInterface $dateFinishPovtObsl): self
    {
        $this->dateFinishPovtObsl = $dateFinishPovtObsl;

        return $this;
    }

    public function getDateFinishPovtObslFact(): ?\DateTimeInterface
    {
        return $this->dateFinishPovtObslFact;
    }

    public function setDateFinishPovtObslFact(?\DateTimeInterface $dateFinishPovtObslFact): self
    {
        $this->dateFinishPovtObslFact = $dateFinishPovtObslFact;

        return $this;
    }

    public function getLastObslFundZd(): ?\DateTimeInterface
    {
        return $this->lastObslFundZd;
    }

    public function setLastObslFundZd(?\DateTimeInterface $lastObslFundZd): self
    {
        $this->lastObslFundZd = $lastObslFundZd;

        return $this;
    }

    public function getLastObslZd(): ?\DateTimeInterface
    {
        return $this->lastObslZd;
    }

    public function setLastObslZd(?\DateTimeInterface $lastObslZd): self
    {
        $this->lastObslZd = $lastObslZd;

        return $this;
    }

    public function getZdNewWorkNeeds(): ?int
    {
        return $this->zdNewWorkNeeds;
    }

    public function setZdNewWorkNeeds(int $zdNewWorkNeeds): self
    {
        $this->zdNewWorkNeeds = $zdNewWorkNeeds;

        return $this;
    }

    public function getZdNewObslNeeds(): ?int
    {
        return $this->zdNewObslNeeds;
    }

    public function setZdNewObslNeeds(int $zdNewObslNeeds): self
    {
        $this->zdNewObslNeeds = $zdNewObslNeeds;

        return $this;
    }

    public function getDateGodObslZd(): ?\DateTimeInterface
    {
        return $this->dateGodObslZd;
    }

    public function setDateGodObslZd(?\DateTimeInterface $dateGodObslZd): self
    {
        $this->dateGodObslZd = $dateGodObslZd;

        return $this;
    }

    public function getContragentObslZd(): ?string
    {
        return $this->contragentObslZd;
    }

    public function setContragentObslZd(?string $contragentObslZd): self
    {
        $this->contragentObslZd = $contragentObslZd;

        return $this;
    }

    public function getDateFinishObslZd(): ?\DateTimeInterface
    {
        return $this->dateFinishObslZd;
    }

    public function setDateFinishObslZd(?\DateTimeInterface $dateFinishObslZd): self
    {
        $this->dateFinishObslZd = $dateFinishObslZd;

        return $this;
    }

    public function getDateFinishObslZdFact(): ?\DateTimeInterface
    {
        return $this->dateFinishObslZdFact;
    }

    public function setDateFinishObslZdFact(?\DateTimeInterface $dateFinishObslZdFact): self
    {
        $this->dateFinishObslZdFact = $dateFinishObslZdFact;

        return $this;
    }

    public function getZdDopObor(): ?int
    {
        return $this->zdDopObor;
    }

    public function setZdDopObor(int $zdDopObor): self
    {
        $this->zdDopObor = $zdDopObor;

        return $this;
    }

    public function getDateGodPsdRvrZd(): ?\DateTimeInterface
    {
        return $this->dateGodPsdRvrZd;
    }

    public function setDateGodPsdRvrZd(?\DateTimeInterface $dateGodPsdRvrZd): self
    {
        $this->dateGodPsdRvrZd = $dateGodPsdRvrZd;

        return $this;
    }

    public function getContragentPsdRvrZd(): ?string
    {
        return $this->contragentPsdRvrZd;
    }

    public function setContragentPsdRvrZd(?string $contragentPsdRvrZd): self
    {
        $this->contragentPsdRvrZd = $contragentPsdRvrZd;

        return $this;
    }

    public function getDateUtvPsdRvrZd(): ?\DateTimeInterface
    {
        return $this->dateUtvPsdRvrZd;
    }

    public function setDateUtvPsdRvrZd(?\DateTimeInterface $dateUtvPsdRvrZd): self
    {
        $this->dateUtvPsdRvrZd = $dateUtvPsdRvrZd;

        return $this;
    }

    public function getDateGodRvrZd(): ?\DateTimeInterface
    {
        return $this->dateGodRvrZd;
    }

    public function setDateGodRvrZd(?\DateTimeInterface $dateGodRvrZd): self
    {
        $this->dateGodRvrZd = $dateGodRvrZd;

        return $this;
    }

    public function getContragentRvrZd(): ?string
    {
        return $this->contragentRvrZd;
    }

    public function setContragentRvrZd(?string $contragentRvrZd): self
    {
        $this->contragentRvrZd = $contragentRvrZd;

        return $this;
    }

    public function getDateFinishWorkRvrZd(): ?\DateTimeInterface
    {
        return $this->dateFinishWorkRvrZd;
    }

    public function setDateFinishWorkRvrZd(?\DateTimeInterface $dateFinishWorkRvrZd): self
    {
        $this->dateFinishWorkRvrZd = $dateFinishWorkRvrZd;

        return $this;
    }

    public function getDateFinishWorkRvrFactZd(): ?\DateTimeInterface
    {
        return $this->dateFinishWorkRvrFactZd;
    }

    public function setDateFinishWorkRvrFactZd(?\DateTimeInterface $dateFinishWorkRvrFactZd): self
    {
        $this->dateFinishWorkRvrFactZd = $dateFinishWorkRvrFactZd;

        return $this;
    }

    public function getDateZaklRvrZd(): ?\DateTimeInterface
    {
        return $this->dateZaklRvrZd;
    }

    public function setDateZaklRvrZd(?\DateTimeInterface $dateZaklRvrZd): self
    {
        $this->dateZaklRvrZd = $dateZaklRvrZd;

        return $this;
    }

    public function getZdPovtObsl(): ?int
    {
        return $this->zdPovtObsl;
    }

    public function setZdPovtObsl(int $zdPovtObsl): self
    {
        $this->zdPovtObsl = $zdPovtObsl;

        return $this;
    }

    public function getDateGodPovtObslZd(): ?\DateTimeInterface
    {
        return $this->dateGodPovtObslZd;
    }

    public function setDateGodPovtObslZd(?\DateTimeInterface $dateGodPovtObslZd): self
    {
        $this->dateGodPovtObslZd = $dateGodPovtObslZd;

        return $this;
    }

    public function getContragentPovtObslZd(): ?string
    {
        return $this->contragentPovtObslZd;
    }

    public function setContragentPovtObslZd(?string $contragentPovtObslZd): self
    {
        $this->contragentPovtObslZd = $contragentPovtObslZd;

        return $this;
    }

    public function getDateFinishPovtObslZd(): ?\DateTimeInterface
    {
        return $this->dateFinishPovtObslZd;
    }

    public function setDateFinishPovtObslZd(?\DateTimeInterface $dateFinishPovtObslZd): self
    {
        $this->dateFinishPovtObslZd = $dateFinishPovtObslZd;

        return $this;
    }

    public function getDateFinishPovtObslFactZd(): ?\DateTimeInterface
    {
        return $this->dateFinishPovtObslFactZd;
    }

    public function setDateFinishPovtObslFactZd(?\DateTimeInterface $dateFinishPovtObslFactZd): self
    {
        $this->dateFinishPovtObslFactZd = $dateFinishPovtObslFactZd;

        return $this;
    }


}
