<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecFilEt
 *
 * @ORM\Table(name="spec_fil_et", uniqueConstraints={@ORM\UniqueConstraint(name="filial_etap", columns={"filial_id", "etap_id"})}, indexes={@ORM\Index(name="etap_id", columns={"etap_id"}), @ORM\Index(name="filial_id", columns={"filial_id"}), @ORM\Index(name="IDX_spec_fil_et_pz_status", columns={"pz_status"})})
 * @ORM\Entity
 */
class SpecFilEt
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
     * @ORM\Column(name="filial_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $filialId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="etap_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $etapId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pz_status", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $pzStatus = 1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pz_date", type="date", nullable=true, options={"default"="1970-01-01"})
     */
    private $pzDate = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ks2filial_date", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $ks2filialDate = '1970-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="ks2filial_summa", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $ks2filialSumma = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ks2curator_date", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $ks2curatorDate = '1970-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="ks2curator_summa", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $ks2curatorSumma = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ks2smetchik", type="string", length=255, nullable=true)
     */
    private $ks2smetchik;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ks2prim", type="string", length=255, nullable=true)
     */
    private $ks2prim;

    /**
     * @var int
     *
     * @ORM\Column(name="curator_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $curatorId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sub_curator_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $subCuratorId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="ks2_check_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ks2CheckUserId = '0';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEtapId(): ?int
    {
        return $this->etapId;
    }

    public function setEtapId(int $etapId): self
    {
        $this->etapId = $etapId;

        return $this;
    }

    public function getPzStatus(): ?int
    {
        return $this->pzStatus;
    }

    public function setPzStatus(int $pzStatus): self
    {
        $this->pzStatus = $pzStatus;

        return $this;
    }

    public function getPzDate(): ?\DateTimeInterface
    {
        return $this->pzDate;
    }

    public function setPzDate(?\DateTimeInterface $pzDate): self
    {
        $this->pzDate = $pzDate;

        return $this;
    }

    public function getKs2filialDate(): ?\DateTimeInterface
    {
        return $this->ks2filialDate;
    }

    public function setKs2filialDate(\DateTimeInterface $ks2filialDate): self
    {
        $this->ks2filialDate = $ks2filialDate;

        return $this;
    }

    public function getKs2filialSumma(): ?string
    {
        return $this->ks2filialSumma;
    }

    public function setKs2filialSumma(string $ks2filialSumma): self
    {
        $this->ks2filialSumma = $ks2filialSumma;

        return $this;
    }

    public function getKs2curatorDate(): ?\DateTimeInterface
    {
        return $this->ks2curatorDate;
    }

    public function setKs2curatorDate(\DateTimeInterface $ks2curatorDate): self
    {
        $this->ks2curatorDate = $ks2curatorDate;

        return $this;
    }

    public function getKs2curatorSumma(): ?string
    {
        return $this->ks2curatorSumma;
    }

    public function setKs2curatorSumma(string $ks2curatorSumma): self
    {
        $this->ks2curatorSumma = $ks2curatorSumma;

        return $this;
    }

    public function getKs2smetchik(): ?string
    {
        return $this->ks2smetchik;
    }

    public function setKs2smetchik(?string $ks2smetchik): self
    {
        $this->ks2smetchik = $ks2smetchik;

        return $this;
    }

    public function getKs2prim(): ?string
    {
        return $this->ks2prim;
    }

    public function setKs2prim(?string $ks2prim): self
    {
        $this->ks2prim = $ks2prim;

        return $this;
    }

    public function getCuratorId(): ?int
    {
        return $this->curatorId;
    }

    public function setCuratorId(int $curatorId): self
    {
        $this->curatorId = $curatorId;

        return $this;
    }

    public function getSubCuratorId(): ?int
    {
        return $this->subCuratorId;
    }

    public function setSubCuratorId(int $subCuratorId): self
    {
        $this->subCuratorId = $subCuratorId;

        return $this;
    }

    public function getKs2CheckUserId(): ?int
    {
        return $this->ks2CheckUserId;
    }

    public function setKs2CheckUserId(int $ks2CheckUserId): self
    {
        $this->ks2CheckUserId = $ks2CheckUserId;

        return $this;
    }


}
