<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dogovors
 *
 * @ORM\Table(name="dogovors")
 * @ORM\Entity
 */
class Dogovors
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
     * @var int|null
     *
     * @ORM\Column(name="org_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $orgId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="dog_type", type="integer", nullable=true, options={"unsigned"=true,"comment"="Тип договора - на строительство, на проектирование и т.п. (reserved)"})
     */
    private $dogType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=50, nullable=false, options={"default"="Номер договора не присвоен"})
     */
    private $number = 'Номер договора не присвоен';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dog_data", type="date", nullable=false)
     */
    private $dogData;

    /**
     * @var string|null
     *
     * @ORM\Column(name="predmet", type="text", length=65535, nullable=true)
     */
    private $predmet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prim", type="text", length=65535, nullable=true)
     */
    private $prim;

    /**
     * @var string
     *
     * @ORM\Column(name="summa", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $summa = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="srok_isp", type="date", nullable=false)
     */
    private $srokIsp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source", type="string", length=20, nullable=true)
     */
    private $source;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $status = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop1_date", type="date", nullable=true)
     */
    private $dop1Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop1_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop1Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop1_srok_isp", type="date", nullable=true)
     */
    private $dop1SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop1_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop1Etap = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop2_date", type="date", nullable=true)
     */
    private $dop2Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop2_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop2Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop2_srok_isp", type="date", nullable=true)
     */
    private $dop2SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop2_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop2Etap = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop3_date", type="date", nullable=true)
     */
    private $dop3Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop3_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop3Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop3_srok_isp", type="date", nullable=true)
     */
    private $dop3SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop3_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop3Etap = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop4_date", type="date", nullable=true)
     */
    private $dop4Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop4_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop4Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop4_srok_isp", type="date", nullable=true)
     */
    private $dop4SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop4_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop4Etap = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop5_date", type="date", nullable=true)
     */
    private $dop5Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop5_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop5Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop5_srok_isp", type="date", nullable=true)
     */
    private $dop5SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop5_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop5Etap = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop6_date", type="date", nullable=true)
     */
    private $dop6Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop6_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop6Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop6_srok_isp", type="date", nullable=true)
     */
    private $dop6SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop6_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop6Etap = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop7_date", type="date", nullable=true)
     */
    private $dop7Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop7_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop7Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop7_srok_isp", type="date", nullable=true)
     */
    private $dop7SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop7_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop7Etap = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sogl_date", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $soglDate = '1970-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="sogl_text", type="string", length=254, nullable=false)
     */
    private $soglText = '';

    /**
     * @var string
     *
     * @ORM\Column(name="srok_isp_text", type="string", length=255, nullable=false)
     */
    private $srokIspText = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dop1_srok_isp_text", type="string", length=255, nullable=false)
     */
    private $dop1SrokIspText = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dop2_srok_isp_text", type="string", length=255, nullable=false)
     */
    private $dop2SrokIspText = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dop3_srok_isp_text", type="string", length=255, nullable=false)
     */
    private $dop3SrokIspText = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dop4_srok_isp_text", type="string", length=255, nullable=false)
     */
    private $dop4SrokIspText = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dop5_srok_isp_text", type="string", length=255, nullable=false)
     */
    private $dop5SrokIspText = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dop6_srok_isp_text", type="string", length=255, nullable=false)
     */
    private $dop6SrokIspText = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dop7_srok_isp_text", type="string", length=255, nullable=false)
     */
    private $dop7SrokIspText = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="final_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $finalSumma;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop8_date", type="date", nullable=true)
     */
    private $dop8Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop8_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop8Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop8_srok_isp", type="date", nullable=true)
     */
    private $dop8SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop8_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop8Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop8_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop8SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop9_date", type="date", nullable=true)
     */
    private $dop9Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop9_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop9Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop9_srok_isp", type="date", nullable=true)
     */
    private $dop9SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop9_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop9Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop9_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop9SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop10_date", type="date", nullable=true)
     */
    private $dop10Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop10_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop10Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop10_srok_isp", type="date", nullable=true)
     */
    private $dop10SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop10_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop10Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop10_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop10SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop11_date", type="date", nullable=true)
     */
    private $dop11Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop11_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop11Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop11_srok_isp", type="date", nullable=true)
     */
    private $dop11SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop11_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop11Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop11_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop11SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop12_date", type="date", nullable=true)
     */
    private $dop12Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop12_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop12Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop12_srok_isp", type="date", nullable=true)
     */
    private $dop12SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop12_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop12Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop12_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop12SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop13_date", type="date", nullable=true)
     */
    private $dop13Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop13_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop13Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop13_srok_isp", type="date", nullable=true)
     */
    private $dop13SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop13_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop13Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop13_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop13SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop14_date", type="date", nullable=true)
     */
    private $dop14Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop14_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop14Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop14_srok_isp", type="date", nullable=true)
     */
    private $dop14SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop14_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop14Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop14_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop14SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop15_date", type="date", nullable=true)
     */
    private $dop15Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop15_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop15Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop15_srok_isp", type="date", nullable=true)
     */
    private $dop15SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop15_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop15Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop15_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop15SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop16_date", type="date", nullable=true)
     */
    private $dop16Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop16_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop16Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop16_srok_isp", type="date", nullable=true)
     */
    private $dop16SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop16_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop16Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop16_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop16SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop17_date", type="date", nullable=true)
     */
    private $dop17Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop17_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop17Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop17_srok_isp", type="date", nullable=true)
     */
    private $dop17SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop17_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop17Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop17_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop17SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop18_date", type="date", nullable=true)
     */
    private $dop18Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop18_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop18Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop18_srok_isp", type="date", nullable=true)
     */
    private $dop18SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop18_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop18Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop18_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop18SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop19_date", type="date", nullable=true)
     */
    private $dop19Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop19_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop19Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop19_srok_isp", type="date", nullable=true)
     */
    private $dop19SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop19_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop19Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop19_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop19SrokIspText = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop20_date", type="date", nullable=true)
     */
    private $dop20Date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop20_summa", type="decimal", precision=20, scale=2, nullable=true)
     */
    private $dop20Summa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dop20_srok_isp", type="date", nullable=true)
     */
    private $dop20SrokIsp;

    /**
     * @var int
     *
     * @ORM\Column(name="dop20_etap", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dop20Etap = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dop20_srok_isp_text", type="string", length=255, nullable=true)
     */
    private $dop20SrokIspText = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrgId(): ?int
    {
        return $this->orgId;
    }

    public function setOrgId(?int $orgId): self
    {
        $this->orgId = $orgId;

        return $this;
    }

    public function getDogType(): ?int
    {
        return $this->dogType;
    }

    public function setDogType(?int $dogType): self
    {
        $this->dogType = $dogType;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getDogData(): ?\DateTimeInterface
    {
        return $this->dogData;
    }

    public function setDogData(\DateTimeInterface $dogData): self
    {
        $this->dogData = $dogData;

        return $this;
    }

    public function getPredmet(): ?string
    {
        return $this->predmet;
    }

    public function setPredmet(?string $predmet): self
    {
        $this->predmet = $predmet;

        return $this;
    }

    public function getPrim(): ?string
    {
        return $this->prim;
    }

    public function setPrim(?string $prim): self
    {
        $this->prim = $prim;

        return $this;
    }

    public function getSumma(): ?string
    {
        return $this->summa;
    }

    public function setSumma(string $summa): self
    {
        $this->summa = $summa;

        return $this;
    }

    public function getSrokIsp(): ?\DateTimeInterface
    {
        return $this->srokIsp;
    }

    public function setSrokIsp(\DateTimeInterface $srokIsp): self
    {
        $this->srokIsp = $srokIsp;

        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;

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

    public function getDop1Date(): ?\DateTimeInterface
    {
        return $this->dop1Date;
    }

    public function setDop1Date(?\DateTimeInterface $dop1Date): self
    {
        $this->dop1Date = $dop1Date;

        return $this;
    }

    public function getDop1Summa(): ?string
    {
        return $this->dop1Summa;
    }

    public function setDop1Summa(?string $dop1Summa): self
    {
        $this->dop1Summa = $dop1Summa;

        return $this;
    }

    public function getDop1SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop1SrokIsp;
    }

    public function setDop1SrokIsp(?\DateTimeInterface $dop1SrokIsp): self
    {
        $this->dop1SrokIsp = $dop1SrokIsp;

        return $this;
    }

    public function getDop1Etap(): ?int
    {
        return $this->dop1Etap;
    }

    public function setDop1Etap(int $dop1Etap): self
    {
        $this->dop1Etap = $dop1Etap;

        return $this;
    }

    public function getDop2Date(): ?\DateTimeInterface
    {
        return $this->dop2Date;
    }

    public function setDop2Date(?\DateTimeInterface $dop2Date): self
    {
        $this->dop2Date = $dop2Date;

        return $this;
    }

    public function getDop2Summa(): ?string
    {
        return $this->dop2Summa;
    }

    public function setDop2Summa(?string $dop2Summa): self
    {
        $this->dop2Summa = $dop2Summa;

        return $this;
    }

    public function getDop2SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop2SrokIsp;
    }

    public function setDop2SrokIsp(?\DateTimeInterface $dop2SrokIsp): self
    {
        $this->dop2SrokIsp = $dop2SrokIsp;

        return $this;
    }

    public function getDop2Etap(): ?int
    {
        return $this->dop2Etap;
    }

    public function setDop2Etap(int $dop2Etap): self
    {
        $this->dop2Etap = $dop2Etap;

        return $this;
    }

    public function getDop3Date(): ?\DateTimeInterface
    {
        return $this->dop3Date;
    }

    public function setDop3Date(?\DateTimeInterface $dop3Date): self
    {
        $this->dop3Date = $dop3Date;

        return $this;
    }

    public function getDop3Summa(): ?string
    {
        return $this->dop3Summa;
    }

    public function setDop3Summa(?string $dop3Summa): self
    {
        $this->dop3Summa = $dop3Summa;

        return $this;
    }

    public function getDop3SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop3SrokIsp;
    }

    public function setDop3SrokIsp(?\DateTimeInterface $dop3SrokIsp): self
    {
        $this->dop3SrokIsp = $dop3SrokIsp;

        return $this;
    }

    public function getDop3Etap(): ?int
    {
        return $this->dop3Etap;
    }

    public function setDop3Etap(int $dop3Etap): self
    {
        $this->dop3Etap = $dop3Etap;

        return $this;
    }

    public function getDop4Date(): ?\DateTimeInterface
    {
        return $this->dop4Date;
    }

    public function setDop4Date(?\DateTimeInterface $dop4Date): self
    {
        $this->dop4Date = $dop4Date;

        return $this;
    }

    public function getDop4Summa(): ?string
    {
        return $this->dop4Summa;
    }

    public function setDop4Summa(?string $dop4Summa): self
    {
        $this->dop4Summa = $dop4Summa;

        return $this;
    }

    public function getDop4SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop4SrokIsp;
    }

    public function setDop4SrokIsp(?\DateTimeInterface $dop4SrokIsp): self
    {
        $this->dop4SrokIsp = $dop4SrokIsp;

        return $this;
    }

    public function getDop4Etap(): ?int
    {
        return $this->dop4Etap;
    }

    public function setDop4Etap(int $dop4Etap): self
    {
        $this->dop4Etap = $dop4Etap;

        return $this;
    }

    public function getDop5Date(): ?\DateTimeInterface
    {
        return $this->dop5Date;
    }

    public function setDop5Date(?\DateTimeInterface $dop5Date): self
    {
        $this->dop5Date = $dop5Date;

        return $this;
    }

    public function getDop5Summa(): ?string
    {
        return $this->dop5Summa;
    }

    public function setDop5Summa(?string $dop5Summa): self
    {
        $this->dop5Summa = $dop5Summa;

        return $this;
    }

    public function getDop5SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop5SrokIsp;
    }

    public function setDop5SrokIsp(?\DateTimeInterface $dop5SrokIsp): self
    {
        $this->dop5SrokIsp = $dop5SrokIsp;

        return $this;
    }

    public function getDop5Etap(): ?int
    {
        return $this->dop5Etap;
    }

    public function setDop5Etap(int $dop5Etap): self
    {
        $this->dop5Etap = $dop5Etap;

        return $this;
    }

    public function getDop6Date(): ?\DateTimeInterface
    {
        return $this->dop6Date;
    }

    public function setDop6Date(?\DateTimeInterface $dop6Date): self
    {
        $this->dop6Date = $dop6Date;

        return $this;
    }

    public function getDop6Summa(): ?string
    {
        return $this->dop6Summa;
    }

    public function setDop6Summa(?string $dop6Summa): self
    {
        $this->dop6Summa = $dop6Summa;

        return $this;
    }

    public function getDop6SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop6SrokIsp;
    }

    public function setDop6SrokIsp(?\DateTimeInterface $dop6SrokIsp): self
    {
        $this->dop6SrokIsp = $dop6SrokIsp;

        return $this;
    }

    public function getDop6Etap(): ?int
    {
        return $this->dop6Etap;
    }

    public function setDop6Etap(int $dop6Etap): self
    {
        $this->dop6Etap = $dop6Etap;

        return $this;
    }

    public function getDop7Date(): ?\DateTimeInterface
    {
        return $this->dop7Date;
    }

    public function setDop7Date(?\DateTimeInterface $dop7Date): self
    {
        $this->dop7Date = $dop7Date;

        return $this;
    }

    public function getDop7Summa(): ?string
    {
        return $this->dop7Summa;
    }

    public function setDop7Summa(?string $dop7Summa): self
    {
        $this->dop7Summa = $dop7Summa;

        return $this;
    }

    public function getDop7SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop7SrokIsp;
    }

    public function setDop7SrokIsp(?\DateTimeInterface $dop7SrokIsp): self
    {
        $this->dop7SrokIsp = $dop7SrokIsp;

        return $this;
    }

    public function getDop7Etap(): ?int
    {
        return $this->dop7Etap;
    }

    public function setDop7Etap(int $dop7Etap): self
    {
        $this->dop7Etap = $dop7Etap;

        return $this;
    }

    public function getSoglDate(): ?\DateTimeInterface
    {
        return $this->soglDate;
    }

    public function setSoglDate(\DateTimeInterface $soglDate): self
    {
        $this->soglDate = $soglDate;

        return $this;
    }

    public function getSoglText(): ?string
    {
        return $this->soglText;
    }

    public function setSoglText(string $soglText): self
    {
        $this->soglText = $soglText;

        return $this;
    }

    public function getSrokIspText(): ?string
    {
        return $this->srokIspText;
    }

    public function setSrokIspText(string $srokIspText): self
    {
        $this->srokIspText = $srokIspText;

        return $this;
    }

    public function getDop1SrokIspText(): ?string
    {
        return $this->dop1SrokIspText;
    }

    public function setDop1SrokIspText(string $dop1SrokIspText): self
    {
        $this->dop1SrokIspText = $dop1SrokIspText;

        return $this;
    }

    public function getDop2SrokIspText(): ?string
    {
        return $this->dop2SrokIspText;
    }

    public function setDop2SrokIspText(string $dop2SrokIspText): self
    {
        $this->dop2SrokIspText = $dop2SrokIspText;

        return $this;
    }

    public function getDop3SrokIspText(): ?string
    {
        return $this->dop3SrokIspText;
    }

    public function setDop3SrokIspText(string $dop3SrokIspText): self
    {
        $this->dop3SrokIspText = $dop3SrokIspText;

        return $this;
    }

    public function getDop4SrokIspText(): ?string
    {
        return $this->dop4SrokIspText;
    }

    public function setDop4SrokIspText(string $dop4SrokIspText): self
    {
        $this->dop4SrokIspText = $dop4SrokIspText;

        return $this;
    }

    public function getDop5SrokIspText(): ?string
    {
        return $this->dop5SrokIspText;
    }

    public function setDop5SrokIspText(string $dop5SrokIspText): self
    {
        $this->dop5SrokIspText = $dop5SrokIspText;

        return $this;
    }

    public function getDop6SrokIspText(): ?string
    {
        return $this->dop6SrokIspText;
    }

    public function setDop6SrokIspText(string $dop6SrokIspText): self
    {
        $this->dop6SrokIspText = $dop6SrokIspText;

        return $this;
    }

    public function getDop7SrokIspText(): ?string
    {
        return $this->dop7SrokIspText;
    }

    public function setDop7SrokIspText(string $dop7SrokIspText): self
    {
        $this->dop7SrokIspText = $dop7SrokIspText;

        return $this;
    }

    public function getFinalSumma(): ?string
    {
        return $this->finalSumma;
    }

    public function setFinalSumma(?string $finalSumma): self
    {
        $this->finalSumma = $finalSumma;

        return $this;
    }

    public function getDop8Date(): ?\DateTimeInterface
    {
        return $this->dop8Date;
    }

    public function setDop8Date(?\DateTimeInterface $dop8Date): self
    {
        $this->dop8Date = $dop8Date;

        return $this;
    }

    public function getDop8Summa(): ?string
    {
        return $this->dop8Summa;
    }

    public function setDop8Summa(?string $dop8Summa): self
    {
        $this->dop8Summa = $dop8Summa;

        return $this;
    }

    public function getDop8SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop8SrokIsp;
    }

    public function setDop8SrokIsp(?\DateTimeInterface $dop8SrokIsp): self
    {
        $this->dop8SrokIsp = $dop8SrokIsp;

        return $this;
    }

    public function getDop8Etap(): ?int
    {
        return $this->dop8Etap;
    }

    public function setDop8Etap(int $dop8Etap): self
    {
        $this->dop8Etap = $dop8Etap;

        return $this;
    }

    public function getDop8SrokIspText(): ?string
    {
        return $this->dop8SrokIspText;
    }

    public function setDop8SrokIspText(?string $dop8SrokIspText): self
    {
        $this->dop8SrokIspText = $dop8SrokIspText;

        return $this;
    }

    public function getDop9Date(): ?\DateTimeInterface
    {
        return $this->dop9Date;
    }

    public function setDop9Date(?\DateTimeInterface $dop9Date): self
    {
        $this->dop9Date = $dop9Date;

        return $this;
    }

    public function getDop9Summa(): ?string
    {
        return $this->dop9Summa;
    }

    public function setDop9Summa(?string $dop9Summa): self
    {
        $this->dop9Summa = $dop9Summa;

        return $this;
    }

    public function getDop9SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop9SrokIsp;
    }

    public function setDop9SrokIsp(?\DateTimeInterface $dop9SrokIsp): self
    {
        $this->dop9SrokIsp = $dop9SrokIsp;

        return $this;
    }

    public function getDop9Etap(): ?int
    {
        return $this->dop9Etap;
    }

    public function setDop9Etap(int $dop9Etap): self
    {
        $this->dop9Etap = $dop9Etap;

        return $this;
    }

    public function getDop9SrokIspText(): ?string
    {
        return $this->dop9SrokIspText;
    }

    public function setDop9SrokIspText(?string $dop9SrokIspText): self
    {
        $this->dop9SrokIspText = $dop9SrokIspText;

        return $this;
    }

    public function getDop10Date(): ?\DateTimeInterface
    {
        return $this->dop10Date;
    }

    public function setDop10Date(?\DateTimeInterface $dop10Date): self
    {
        $this->dop10Date = $dop10Date;

        return $this;
    }

    public function getDop10Summa(): ?string
    {
        return $this->dop10Summa;
    }

    public function setDop10Summa(?string $dop10Summa): self
    {
        $this->dop10Summa = $dop10Summa;

        return $this;
    }

    public function getDop10SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop10SrokIsp;
    }

    public function setDop10SrokIsp(?\DateTimeInterface $dop10SrokIsp): self
    {
        $this->dop10SrokIsp = $dop10SrokIsp;

        return $this;
    }

    public function getDop10Etap(): ?int
    {
        return $this->dop10Etap;
    }

    public function setDop10Etap(int $dop10Etap): self
    {
        $this->dop10Etap = $dop10Etap;

        return $this;
    }

    public function getDop10SrokIspText(): ?string
    {
        return $this->dop10SrokIspText;
    }

    public function setDop10SrokIspText(?string $dop10SrokIspText): self
    {
        $this->dop10SrokIspText = $dop10SrokIspText;

        return $this;
    }

    public function getDop11Date(): ?\DateTimeInterface
    {
        return $this->dop11Date;
    }

    public function setDop11Date(?\DateTimeInterface $dop11Date): self
    {
        $this->dop11Date = $dop11Date;

        return $this;
    }

    public function getDop11Summa(): ?string
    {
        return $this->dop11Summa;
    }

    public function setDop11Summa(?string $dop11Summa): self
    {
        $this->dop11Summa = $dop11Summa;

        return $this;
    }

    public function getDop11SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop11SrokIsp;
    }

    public function setDop11SrokIsp(?\DateTimeInterface $dop11SrokIsp): self
    {
        $this->dop11SrokIsp = $dop11SrokIsp;

        return $this;
    }

    public function getDop11Etap(): ?int
    {
        return $this->dop11Etap;
    }

    public function setDop11Etap(int $dop11Etap): self
    {
        $this->dop11Etap = $dop11Etap;

        return $this;
    }

    public function getDop11SrokIspText(): ?string
    {
        return $this->dop11SrokIspText;
    }

    public function setDop11SrokIspText(?string $dop11SrokIspText): self
    {
        $this->dop11SrokIspText = $dop11SrokIspText;

        return $this;
    }

    public function getDop12Date(): ?\DateTimeInterface
    {
        return $this->dop12Date;
    }

    public function setDop12Date(?\DateTimeInterface $dop12Date): self
    {
        $this->dop12Date = $dop12Date;

        return $this;
    }

    public function getDop12Summa(): ?string
    {
        return $this->dop12Summa;
    }

    public function setDop12Summa(?string $dop12Summa): self
    {
        $this->dop12Summa = $dop12Summa;

        return $this;
    }

    public function getDop12SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop12SrokIsp;
    }

    public function setDop12SrokIsp(?\DateTimeInterface $dop12SrokIsp): self
    {
        $this->dop12SrokIsp = $dop12SrokIsp;

        return $this;
    }

    public function getDop12Etap(): ?int
    {
        return $this->dop12Etap;
    }

    public function setDop12Etap(int $dop12Etap): self
    {
        $this->dop12Etap = $dop12Etap;

        return $this;
    }

    public function getDop12SrokIspText(): ?string
    {
        return $this->dop12SrokIspText;
    }

    public function setDop12SrokIspText(?string $dop12SrokIspText): self
    {
        $this->dop12SrokIspText = $dop12SrokIspText;

        return $this;
    }

    public function getDop13Date(): ?\DateTimeInterface
    {
        return $this->dop13Date;
    }

    public function setDop13Date(?\DateTimeInterface $dop13Date): self
    {
        $this->dop13Date = $dop13Date;

        return $this;
    }

    public function getDop13Summa(): ?string
    {
        return $this->dop13Summa;
    }

    public function setDop13Summa(?string $dop13Summa): self
    {
        $this->dop13Summa = $dop13Summa;

        return $this;
    }

    public function getDop13SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop13SrokIsp;
    }

    public function setDop13SrokIsp(?\DateTimeInterface $dop13SrokIsp): self
    {
        $this->dop13SrokIsp = $dop13SrokIsp;

        return $this;
    }

    public function getDop13Etap(): ?int
    {
        return $this->dop13Etap;
    }

    public function setDop13Etap(int $dop13Etap): self
    {
        $this->dop13Etap = $dop13Etap;

        return $this;
    }

    public function getDop13SrokIspText(): ?string
    {
        return $this->dop13SrokIspText;
    }

    public function setDop13SrokIspText(?string $dop13SrokIspText): self
    {
        $this->dop13SrokIspText = $dop13SrokIspText;

        return $this;
    }

    public function getDop14Date(): ?\DateTimeInterface
    {
        return $this->dop14Date;
    }

    public function setDop14Date(?\DateTimeInterface $dop14Date): self
    {
        $this->dop14Date = $dop14Date;

        return $this;
    }

    public function getDop14Summa(): ?string
    {
        return $this->dop14Summa;
    }

    public function setDop14Summa(?string $dop14Summa): self
    {
        $this->dop14Summa = $dop14Summa;

        return $this;
    }

    public function getDop14SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop14SrokIsp;
    }

    public function setDop14SrokIsp(?\DateTimeInterface $dop14SrokIsp): self
    {
        $this->dop14SrokIsp = $dop14SrokIsp;

        return $this;
    }

    public function getDop14Etap(): ?int
    {
        return $this->dop14Etap;
    }

    public function setDop14Etap(int $dop14Etap): self
    {
        $this->dop14Etap = $dop14Etap;

        return $this;
    }

    public function getDop14SrokIspText(): ?string
    {
        return $this->dop14SrokIspText;
    }

    public function setDop14SrokIspText(?string $dop14SrokIspText): self
    {
        $this->dop14SrokIspText = $dop14SrokIspText;

        return $this;
    }

    public function getDop15Date(): ?\DateTimeInterface
    {
        return $this->dop15Date;
    }

    public function setDop15Date(?\DateTimeInterface $dop15Date): self
    {
        $this->dop15Date = $dop15Date;

        return $this;
    }

    public function getDop15Summa(): ?string
    {
        return $this->dop15Summa;
    }

    public function setDop15Summa(?string $dop15Summa): self
    {
        $this->dop15Summa = $dop15Summa;

        return $this;
    }

    public function getDop15SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop15SrokIsp;
    }

    public function setDop15SrokIsp(?\DateTimeInterface $dop15SrokIsp): self
    {
        $this->dop15SrokIsp = $dop15SrokIsp;

        return $this;
    }

    public function getDop15Etap(): ?int
    {
        return $this->dop15Etap;
    }

    public function setDop15Etap(int $dop15Etap): self
    {
        $this->dop15Etap = $dop15Etap;

        return $this;
    }

    public function getDop15SrokIspText(): ?string
    {
        return $this->dop15SrokIspText;
    }

    public function setDop15SrokIspText(?string $dop15SrokIspText): self
    {
        $this->dop15SrokIspText = $dop15SrokIspText;

        return $this;
    }

    public function getDop16Date(): ?\DateTimeInterface
    {
        return $this->dop16Date;
    }

    public function setDop16Date(?\DateTimeInterface $dop16Date): self
    {
        $this->dop16Date = $dop16Date;

        return $this;
    }

    public function getDop16Summa(): ?string
    {
        return $this->dop16Summa;
    }

    public function setDop16Summa(?string $dop16Summa): self
    {
        $this->dop16Summa = $dop16Summa;

        return $this;
    }

    public function getDop16SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop16SrokIsp;
    }

    public function setDop16SrokIsp(?\DateTimeInterface $dop16SrokIsp): self
    {
        $this->dop16SrokIsp = $dop16SrokIsp;

        return $this;
    }

    public function getDop16Etap(): ?int
    {
        return $this->dop16Etap;
    }

    public function setDop16Etap(int $dop16Etap): self
    {
        $this->dop16Etap = $dop16Etap;

        return $this;
    }

    public function getDop16SrokIspText(): ?string
    {
        return $this->dop16SrokIspText;
    }

    public function setDop16SrokIspText(?string $dop16SrokIspText): self
    {
        $this->dop16SrokIspText = $dop16SrokIspText;

        return $this;
    }

    public function getDop17Date(): ?\DateTimeInterface
    {
        return $this->dop17Date;
    }

    public function setDop17Date(?\DateTimeInterface $dop17Date): self
    {
        $this->dop17Date = $dop17Date;

        return $this;
    }

    public function getDop17Summa(): ?string
    {
        return $this->dop17Summa;
    }

    public function setDop17Summa(?string $dop17Summa): self
    {
        $this->dop17Summa = $dop17Summa;

        return $this;
    }

    public function getDop17SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop17SrokIsp;
    }

    public function setDop17SrokIsp(?\DateTimeInterface $dop17SrokIsp): self
    {
        $this->dop17SrokIsp = $dop17SrokIsp;

        return $this;
    }

    public function getDop17Etap(): ?int
    {
        return $this->dop17Etap;
    }

    public function setDop17Etap(int $dop17Etap): self
    {
        $this->dop17Etap = $dop17Etap;

        return $this;
    }

    public function getDop17SrokIspText(): ?string
    {
        return $this->dop17SrokIspText;
    }

    public function setDop17SrokIspText(?string $dop17SrokIspText): self
    {
        $this->dop17SrokIspText = $dop17SrokIspText;

        return $this;
    }

    public function getDop18Date(): ?\DateTimeInterface
    {
        return $this->dop18Date;
    }

    public function setDop18Date(?\DateTimeInterface $dop18Date): self
    {
        $this->dop18Date = $dop18Date;

        return $this;
    }

    public function getDop18Summa(): ?string
    {
        return $this->dop18Summa;
    }

    public function setDop18Summa(?string $dop18Summa): self
    {
        $this->dop18Summa = $dop18Summa;

        return $this;
    }

    public function getDop18SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop18SrokIsp;
    }

    public function setDop18SrokIsp(?\DateTimeInterface $dop18SrokIsp): self
    {
        $this->dop18SrokIsp = $dop18SrokIsp;

        return $this;
    }

    public function getDop18Etap(): ?int
    {
        return $this->dop18Etap;
    }

    public function setDop18Etap(int $dop18Etap): self
    {
        $this->dop18Etap = $dop18Etap;

        return $this;
    }

    public function getDop18SrokIspText(): ?string
    {
        return $this->dop18SrokIspText;
    }

    public function setDop18SrokIspText(?string $dop18SrokIspText): self
    {
        $this->dop18SrokIspText = $dop18SrokIspText;

        return $this;
    }

    public function getDop19Date(): ?\DateTimeInterface
    {
        return $this->dop19Date;
    }

    public function setDop19Date(?\DateTimeInterface $dop19Date): self
    {
        $this->dop19Date = $dop19Date;

        return $this;
    }

    public function getDop19Summa(): ?string
    {
        return $this->dop19Summa;
    }

    public function setDop19Summa(?string $dop19Summa): self
    {
        $this->dop19Summa = $dop19Summa;

        return $this;
    }

    public function getDop19SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop19SrokIsp;
    }

    public function setDop19SrokIsp(?\DateTimeInterface $dop19SrokIsp): self
    {
        $this->dop19SrokIsp = $dop19SrokIsp;

        return $this;
    }

    public function getDop19Etap(): ?int
    {
        return $this->dop19Etap;
    }

    public function setDop19Etap(int $dop19Etap): self
    {
        $this->dop19Etap = $dop19Etap;

        return $this;
    }

    public function getDop19SrokIspText(): ?string
    {
        return $this->dop19SrokIspText;
    }

    public function setDop19SrokIspText(?string $dop19SrokIspText): self
    {
        $this->dop19SrokIspText = $dop19SrokIspText;

        return $this;
    }

    public function getDop20Date(): ?\DateTimeInterface
    {
        return $this->dop20Date;
    }

    public function setDop20Date(?\DateTimeInterface $dop20Date): self
    {
        $this->dop20Date = $dop20Date;

        return $this;
    }

    public function getDop20Summa(): ?string
    {
        return $this->dop20Summa;
    }

    public function setDop20Summa(?string $dop20Summa): self
    {
        $this->dop20Summa = $dop20Summa;

        return $this;
    }

    public function getDop20SrokIsp(): ?\DateTimeInterface
    {
        return $this->dop20SrokIsp;
    }

    public function setDop20SrokIsp(?\DateTimeInterface $dop20SrokIsp): self
    {
        $this->dop20SrokIsp = $dop20SrokIsp;

        return $this;
    }

    public function getDop20Etap(): ?int
    {
        return $this->dop20Etap;
    }

    public function setDop20Etap(int $dop20Etap): self
    {
        $this->dop20Etap = $dop20Etap;

        return $this;
    }

    public function getDop20SrokIspText(): ?string
    {
        return $this->dop20SrokIspText;
    }

    public function setDop20SrokIspText(?string $dop20SrokIspText): self
    {
        $this->dop20SrokIspText = $dop20SrokIspText;

        return $this;
    }


}
