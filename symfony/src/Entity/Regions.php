<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regions
 *
 * @ORM\Table(name="regions")
 * @ORM\Entity
 */
class Regions
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=50, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_short", type="string", length=50, nullable=true)
     */
    private $textShort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_rp", type="string", length=50, nullable=true, options={"comment"="Нименование региона в родительном падеже"})
     */
    private $textRp;

    /**
     * @var int
     *
     * @ORM\Column(name="filial_id", type="integer", nullable=false)
     */
    private $filialId;

    /**
     * @var int
     *
     * @ORM\Column(name="queue", type="integer", nullable=false)
     */
    private $queue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fo_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $foId;

    /**
     * @var int
     *
     * @ORM\Column(name="citizen", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $citizen = '0';

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getTextShort(): ?string
    {
        return $this->textShort;
    }

    public function setTextShort(?string $textShort): self
    {
        $this->textShort = $textShort;

        return $this;
    }

    public function getTextRp(): ?string
    {
        return $this->textRp;
    }

    public function setTextRp(?string $textRp): self
    {
        $this->textRp = $textRp;

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

    public function getQueue(): ?int
    {
        return $this->queue;
    }

    public function setQueue(int $queue): self
    {
        $this->queue = $queue;

        return $this;
    }

    public function getFoId(): ?int
    {
        return $this->foId;
    }

    public function setFoId(?int $foId): self
    {
        $this->foId = $foId;

        return $this;
    }

    public function getCitizen(): ?int
    {
        return $this->citizen;
    }

    public function setCitizen(int $citizen): self
    {
        $this->citizen = $citizen;

        return $this;
    }


}
