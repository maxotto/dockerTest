<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DogovorFcpo
 *
 * @ORM\Table(name="dogovor_fcpo", uniqueConstraints={@ORM\UniqueConstraint(name="UK_dogovor_fcpo", columns={"dogovor_id", "fcp_object_id"})}, indexes={@ORM\Index(name="IDX_dogovor_fcpo_fcp_object_id", columns={"fcp_object_id"}), @ORM\Index(name="IDX_dogovor_fcpo_dogovor_id", columns={"dogovor_id"})})
 * @ORM\Entity
 */
class DogovorFcpo
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
     * @ORM\Column(name="dogovor_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $dogovorId;

    /**
     * @var int
     *
     * @ORM\Column(name="fcp_object_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fcpObjectId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="date", nullable=true, options={"default"="1970-01-01"})
     */
    private $startDate = '1970-01-01';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="finish_date", type="date", nullable=true, options={"default"="1970-01-01"})
     */
    private $finishDate = '1970-01-01';

    /**
     * @var int
     *
     * @ORM\Column(name="vne_budget", type="integer", nullable=false, options={"unsigned"=true,"comment"="Признак внебюджета"})
     */
    private $vneBudget = '0';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getFcpObjectId(): ?int
    {
        return $this->fcpObjectId;
    }

    public function setFcpObjectId(int $fcpObjectId): self
    {
        $this->fcpObjectId = $fcpObjectId;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getFinishDate(): ?\DateTimeInterface
    {
        return $this->finishDate;
    }

    public function setFinishDate(?\DateTimeInterface $finishDate): self
    {
        $this->finishDate = $finishDate;

        return $this;
    }

    public function getVneBudget(): ?int
    {
        return $this->vneBudget;
    }

    public function setVneBudget(int $vneBudget): self
    {
        $this->vneBudget = $vneBudget;

        return $this;
    }


}
