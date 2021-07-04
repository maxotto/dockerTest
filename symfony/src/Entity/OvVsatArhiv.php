<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OvVsatArhiv
 *
 * @ORM\Table(name="ov_vsat_arhiv", indexes={@ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class OvVsatArhiv
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
     * @var int
     *
     * @ORM\Column(name="terminal", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $terminal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ka_orbit", type="string", length=100, nullable=true)
     */
    private $kaOrbit = '';

    /**
     * @var int
     *
     * @ORM\Column(name="terminal_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $terminalId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=true)
     */
    private $ip = '';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $status;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="turn_on_date", type="date", nullable=true)
     */
    private $turnOnDate;

    /**
     * @var string
     *
     * @ORM\Column(name="cross_polar", type="decimal", precision=5, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $crossPolar = '0.00';

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

    public function getTerminal(): ?int
    {
        return $this->terminal;
    }

    public function setTerminal(int $terminal): self
    {
        $this->terminal = $terminal;

        return $this;
    }

    public function getKaOrbit(): ?string
    {
        return $this->kaOrbit;
    }

    public function setKaOrbit(?string $kaOrbit): self
    {
        $this->kaOrbit = $kaOrbit;

        return $this;
    }

    public function getTerminalId(): ?int
    {
        return $this->terminalId;
    }

    public function setTerminalId(int $terminalId): self
    {
        $this->terminalId = $terminalId;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

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

    public function getTurnOnDate(): ?\DateTimeInterface
    {
        return $this->turnOnDate;
    }

    public function setTurnOnDate(?\DateTimeInterface $turnOnDate): self
    {
        $this->turnOnDate = $turnOnDate;

        return $this;
    }

    public function getCrossPolar(): ?string
    {
        return $this->crossPolar;
    }

    public function setCrossPolar(string $crossPolar): self
    {
        $this->crossPolar = $crossPolar;

        return $this;
    }


}
