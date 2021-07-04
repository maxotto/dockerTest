<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perepisrawdata2019
 *
 * @ORM\Table(name="perepisRawData2019")
 * @ORM\Entity
 */
class Perepisrawdata2019
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
     * @ORM\Column(name="multiplex", type="integer", nullable=true, options={"default"="1","unsigned"=true})
     */
    private $multiplex = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="region", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $region;

    /**
     * @var int
     *
     * @ORM\Column(name="filial", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $filial;

    /**
     * @var string
     *
     * @ORM\Column(name="np", type="string", length=255, nullable=false)
     */
    private $np;

    /**
     * @var int
     *
     * @ORM\Column(name="citizens", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $citizens;

    /**
     * @var int
     *
     * @ORM\Column(name="code1", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $code1;

    /**
     * @var int
     *
     * @ORM\Column(name="citizen1", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $citizen1;

    /**
     * @var int
     *
     * @ORM\Column(name="code2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $code2;

    /**
     * @var int
     *
     * @ORM\Column(name="citizen2", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $citizen2;

    /**
     * @var int
     *
     * @ORM\Column(name="code3", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $code3;

    /**
     * @var int
     *
     * @ORM\Column(name="citizen3", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $citizen3;

    /**
     * @var int
     *
     * @ORM\Column(name="code4", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $code4;

    /**
     * @var int
     *
     * @ORM\Column(name="citizen4", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $citizen4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMultiplex(): ?int
    {
        return $this->multiplex;
    }

    public function setMultiplex(?int $multiplex): self
    {
        $this->multiplex = $multiplex;

        return $this;
    }

    public function getRegion(): ?int
    {
        return $this->region;
    }

    public function setRegion(int $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getFilial(): ?int
    {
        return $this->filial;
    }

    public function setFilial(int $filial): self
    {
        $this->filial = $filial;

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

    public function getCitizens(): ?int
    {
        return $this->citizens;
    }

    public function setCitizens(int $citizens): self
    {
        $this->citizens = $citizens;

        return $this;
    }

    public function getCode1(): ?int
    {
        return $this->code1;
    }

    public function setCode1(int $code1): self
    {
        $this->code1 = $code1;

        return $this;
    }

    public function getCitizen1(): ?int
    {
        return $this->citizen1;
    }

    public function setCitizen1(int $citizen1): self
    {
        $this->citizen1 = $citizen1;

        return $this;
    }

    public function getCode2(): ?int
    {
        return $this->code2;
    }

    public function setCode2(int $code2): self
    {
        $this->code2 = $code2;

        return $this;
    }

    public function getCitizen2(): ?int
    {
        return $this->citizen2;
    }

    public function setCitizen2(int $citizen2): self
    {
        $this->citizen2 = $citizen2;

        return $this;
    }

    public function getCode3(): ?int
    {
        return $this->code3;
    }

    public function setCode3(int $code3): self
    {
        $this->code3 = $code3;

        return $this;
    }

    public function getCitizen3(): ?int
    {
        return $this->citizen3;
    }

    public function setCitizen3(int $citizen3): self
    {
        $this->citizen3 = $citizen3;

        return $this;
    }

    public function getCode4(): ?int
    {
        return $this->code4;
    }

    public function setCode4(int $code4): self
    {
        $this->code4 = $code4;

        return $this;
    }

    public function getCitizen4(): ?int
    {
        return $this->citizen4;
    }

    public function setCitizen4(int $citizen4): self
    {
        $this->citizen4 = $citizen4;

        return $this;
    }


}
