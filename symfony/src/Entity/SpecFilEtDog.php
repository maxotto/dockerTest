<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecFilEtDog
 *
 * @ORM\Table(name="spec_fil_et_dog", uniqueConstraints={@ORM\UniqueConstraint(name="filial_etap_dog", columns={"filial_etap_id", "dogovor_id"})}, indexes={@ORM\Index(name="dogovor_id", columns={"dogovor_id"}), @ORM\Index(name="filial_etap_id", columns={"filial_etap_id"})})
 * @ORM\Entity
 */
class SpecFilEtDog
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
     * @ORM\Column(name="filial_etap_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $filialEtapId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="dogovor_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dogovorId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finish_date", type="date", nullable=false)
     */
    private $finishDate;

    /**
     * @var string
     *
     * @ORM\Column(name="etap_summ", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $etapSumm = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edited_when", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $editedWhen = 'CURRENT_TIMESTAMP';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilialEtapId(): ?int
    {
        return $this->filialEtapId;
    }

    public function setFilialEtapId(int $filialEtapId): self
    {
        $this->filialEtapId = $filialEtapId;

        return $this;
    }

    public function getDogovorId(): ?int
    {
        return $this->dogovorId;
    }

    public function setDogovorId(int $dogovorId): self
    {
        $this->dogovorId = $dogovorId;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getFinishDate(): ?\DateTimeInterface
    {
        return $this->finishDate;
    }

    public function setFinishDate(\DateTimeInterface $finishDate): self
    {
        $this->finishDate = $finishDate;

        return $this;
    }

    public function getEtapSumm(): ?string
    {
        return $this->etapSumm;
    }

    public function setEtapSumm(string $etapSumm): self
    {
        $this->etapSumm = $etapSumm;

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


}
