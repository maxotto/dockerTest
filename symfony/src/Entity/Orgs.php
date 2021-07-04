<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orgs
 *
 * @ORM\Table(name="orgs", indexes={@ORM\Index(name="orgs_name", columns={"orgs_name"}), @ORM\Index(name="IDX_orgs_email", columns={"email"})})
 * @ORM\Entity
 */
class Orgs
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
     * @var string
     *
     * @ORM\Column(name="orgs_name", type="string", length=255, nullable=false)
     */
    private $orgsName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="orgs_name_short", type="string", length=50, nullable=true)
     */
    private $orgsNameShort;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="boss_pos", type="string", length=255, nullable=true)
     */
    private $bossPos;

    /**
     * @var string
     *
     * @ORM\Column(name="boss", type="string", length=255, nullable=false)
     */
    private $boss;

    /**
     * @var string|null
     *
     * @ORM\Column(name="boss_pos_rp", type="string", length=50, nullable=true)
     */
    private $bossPosRp;

    /**
     * @var string
     *
     * @ORM\Column(name="boss_rp", type="string", length=255, nullable=false)
     */
    private $bossRp;

    /**
     * @var string
     *
     * @ORM\Column(name="tlf", type="string", length=50, nullable=false)
     */
    private $tlf;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=50, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_alt_list", type="text", length=65535, nullable=false)
     */
    private $emailAltList;

    /**
     * @var int
     *
     * @ORM\Column(name="org_type", type="integer", nullable=false, options={"unsigned"=true,"comment"="Типа организации - филиал, вышестоящие, контрагенты, прочие, корневая"})
     */
    private $orgType = '0';

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

    public function getOrgsName(): ?string
    {
        return $this->orgsName;
    }

    public function setOrgsName(string $orgsName): self
    {
        $this->orgsName = $orgsName;

        return $this;
    }

    public function getOrgsNameShort(): ?string
    {
        return $this->orgsNameShort;
    }

    public function setOrgsNameShort(?string $orgsNameShort): self
    {
        $this->orgsNameShort = $orgsNameShort;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getBossPos(): ?string
    {
        return $this->bossPos;
    }

    public function setBossPos(?string $bossPos): self
    {
        $this->bossPos = $bossPos;

        return $this;
    }

    public function getBoss(): ?string
    {
        return $this->boss;
    }

    public function setBoss(string $boss): self
    {
        $this->boss = $boss;

        return $this;
    }

    public function getBossPosRp(): ?string
    {
        return $this->bossPosRp;
    }

    public function setBossPosRp(?string $bossPosRp): self
    {
        $this->bossPosRp = $bossPosRp;

        return $this;
    }

    public function getBossRp(): ?string
    {
        return $this->bossRp;
    }

    public function setBossRp(string $bossRp): self
    {
        $this->bossRp = $bossRp;

        return $this;
    }

    public function getTlf(): ?string
    {
        return $this->tlf;
    }

    public function setTlf(string $tlf): self
    {
        $this->tlf = $tlf;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmailAltList(): ?string
    {
        return $this->emailAltList;
    }

    public function setEmailAltList(string $emailAltList): self
    {
        $this->emailAltList = $emailAltList;

        return $this;
    }

    public function getOrgType(): ?int
    {
        return $this->orgType;
    }

    public function setOrgType(int $orgType): self
    {
        $this->orgType = $orgType;

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
