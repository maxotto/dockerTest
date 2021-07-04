<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KladrKladr
 *
 * @ORM\Table(name="kladr_kladr", indexes={@ORM\Index(name="Index 1", columns={"code"})})
 * @ORM\Entity
 */
class KladrKladr
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
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=13, nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=40, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="socr", type="string", length=10, nullable=true)
     */
    private $socr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="index", type="string", length=6, nullable=true)
     */
    private $index;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gninmb", type="string", length=4, nullable=true)
     */
    private $gninmb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uno", type="string", length=4, nullable=true)
     */
    private $uno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="okatd", type="string", length=11, nullable=true)
     */
    private $okatd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSocr(): ?string
    {
        return $this->socr;
    }

    public function setSocr(?string $socr): self
    {
        $this->socr = $socr;

        return $this;
    }

    public function getIndex(): ?string
    {
        return $this->index;
    }

    public function setIndex(?string $index): self
    {
        $this->index = $index;

        return $this;
    }

    public function getGninmb(): ?string
    {
        return $this->gninmb;
    }

    public function setGninmb(?string $gninmb): self
    {
        $this->gninmb = $gninmb;

        return $this;
    }

    public function getUno(): ?string
    {
        return $this->uno;
    }

    public function setUno(?string $uno): self
    {
        $this->uno = $uno;

        return $this;
    }

    public function getOkatd(): ?string
    {
        return $this->okatd;
    }

    public function setOkatd(?string $okatd): self
    {
        $this->okatd = $okatd;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }


}
