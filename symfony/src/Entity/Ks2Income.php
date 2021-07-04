<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ks2Income
 *
 * @ORM\Table(name="ks2_income", uniqueConstraints={@ORM\UniqueConstraint(name="UK_ks2_income", columns={"doc_number", "from_org"})}, indexes={@ORM\Index(name="IDX_ks2_income_check_user_id", columns={"check_user_id"})})
 * @ORM\Entity
 */
class Ks2Income
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
     * @var string
     *
     * @ORM\Column(name="doc_number", type="string", length=255, nullable=false)
     */
    private $docNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="doc_date", type="date", nullable=false)
     */
    private $docDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="register_time", type="datetime", nullable=false)
     */
    private $registerTime;

    /**
     * @var int
     *
     * @ORM\Column(name="from_org", type="integer", nullable=false)
     */
    private $fromOrg;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prim", type="text", length=65535, nullable=true)
     */
    private $prim;

    /**
     * @var int
     *
     * @ORM\Column(name="check_user_id", type="integer", nullable=false, options={"comment"="Пользователь, которому на проверку идет входящий"})
     */
    private $checkUserId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="summ", type="decimal", precision=20, scale=2, nullable=true, options={"default"="0.00","comment"="Сумма по входящему, первичная"})
     */
    private $summ = '0.00';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDocNumber(): ?string
    {
        return $this->docNumber;
    }

    public function setDocNumber(string $docNumber): self
    {
        $this->docNumber = $docNumber;

        return $this;
    }

    public function getDocDate(): ?\DateTimeInterface
    {
        return $this->docDate;
    }

    public function setDocDate(\DateTimeInterface $docDate): self
    {
        $this->docDate = $docDate;

        return $this;
    }

    public function getRegisterTime(): ?\DateTimeInterface
    {
        return $this->registerTime;
    }

    public function setRegisterTime(\DateTimeInterface $registerTime): self
    {
        $this->registerTime = $registerTime;

        return $this;
    }

    public function getFromOrg(): ?int
    {
        return $this->fromOrg;
    }

    public function setFromOrg(int $fromOrg): self
    {
        $this->fromOrg = $fromOrg;

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

    public function getCheckUserId(): ?int
    {
        return $this->checkUserId;
    }

    public function setCheckUserId(int $checkUserId): self
    {
        $this->checkUserId = $checkUserId;

        return $this;
    }

    public function getSumm(): ?string
    {
        return $this->summ;
    }

    public function setSumm(?string $summ): self
    {
        $this->summ = $summ;

        return $this;
    }


}
