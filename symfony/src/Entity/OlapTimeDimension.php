<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OlapTimeDimension
 *
 * @ORM\Table(name="olap_time_dimension", uniqueConstraints={@ORM\UniqueConstraint(name="UK_olap_time_dimension_date", columns={"date"})})
 * @ORM\Entity
 */
class OlapTimeDimension
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="y", type="smallint", nullable=true)
     */
    private $y;

    /**
     * @var int|null
     *
     * @ORM\Column(name="m", type="smallint", nullable=true)
     */
    private $m;

    /**
     * @var int|null
     *
     * @ORM\Column(name="d", type="smallint", nullable=true)
     */
    private $d;

    /**
     * @var int|null
     *
     * @ORM\Column(name="yw", type="smallint", nullable=true)
     */
    private $yw;

    /**
     * @var int|null
     *
     * @ORM\Column(name="w", type="smallint", nullable=true)
     */
    private $w;

    /**
     * @var int|null
     *
     * @ORM\Column(name="q", type="smallint", nullable=true)
     */
    private $q;

    /**
     * @var int|null
     *
     * @ORM\Column(name="wd", type="smallint", nullable=true)
     */
    private $wd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="m_name", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $mName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="m_name_d", type="string", length=10, nullable=true, options={"fixed"=true})
     */
    private $mNameD;

    /**
     * @var string|null
     *
     * @ORM\Column(name="wd_name", type="string", length=15, nullable=true, options={"fixed"=true})
     */
    private $wdName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getY(): ?int
    {
        return $this->y;
    }

    public function setY(?int $y): self
    {
        $this->y = $y;

        return $this;
    }

    public function getM(): ?int
    {
        return $this->m;
    }

    public function setM(?int $m): self
    {
        $this->m = $m;

        return $this;
    }

    public function getD(): ?int
    {
        return $this->d;
    }

    public function setD(?int $d): self
    {
        $this->d = $d;

        return $this;
    }

    public function getYw(): ?int
    {
        return $this->yw;
    }

    public function setYw(?int $yw): self
    {
        $this->yw = $yw;

        return $this;
    }

    public function getW(): ?int
    {
        return $this->w;
    }

    public function setW(?int $w): self
    {
        $this->w = $w;

        return $this;
    }

    public function getQ(): ?int
    {
        return $this->q;
    }

    public function setQ(?int $q): self
    {
        $this->q = $q;

        return $this;
    }

    public function getWd(): ?int
    {
        return $this->wd;
    }

    public function setWd(?int $wd): self
    {
        $this->wd = $wd;

        return $this;
    }

    public function getMName(): ?string
    {
        return $this->mName;
    }

    public function setMName(?string $mName): self
    {
        $this->mName = $mName;

        return $this;
    }

    public function getMNameD(): ?string
    {
        return $this->mNameD;
    }

    public function setMNameD(?string $mNameD): self
    {
        $this->mNameD = $mNameD;

        return $this;
    }

    public function getWdName(): ?string
    {
        return $this->wdName;
    }

    public function setWdName(?string $wdName): self
    {
        $this->wdName = $wdName;

        return $this;
    }


}
