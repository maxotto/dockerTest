<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UonDocs
 *
 * @ORM\Table(name="uon_docs")
 * @ORM\Entity
 */
class UonDocs
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
     * @ORM\Column(name="uon_code", type="string", length=255, nullable=false)
     */
    private $uonCode;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="doc_number", type="string", length=255, nullable=false)
     */
    private $docNumber = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="doc_date", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $docDate = '1970-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="doc_subject", type="text", length=65535, nullable=false)
     */
    private $docSubject;

    /**
     * @var string
     *
     * @ORM\Column(name="reg_number", type="string", length=255, nullable=false)
     */
    private $regNumber = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reg_date", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $regDate = '1970-01-01';

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=false)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=false)
     */
    private $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="doc_date_in", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $docDateIn = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="doc_date_from", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $docDateFrom = '1970-01-01';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="doc_date_to", type="date", nullable=false, options={"default"="1970-01-01"})
     */
    private $docDateTo = '1970-01-01';

    /**
     * @var int
     *
     * @ORM\Column(name="uid", type="bigint", nullable=false)
     */
    private $uid = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUonCode(): ?string
    {
        return $this->uonCode;
    }

    public function setUonCode(string $uonCode): self
    {
        $this->uonCode = $uonCode;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
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

    public function getDocSubject(): ?string
    {
        return $this->docSubject;
    }

    public function setDocSubject(string $docSubject): self
    {
        $this->docSubject = $docSubject;

        return $this;
    }

    public function getRegNumber(): ?string
    {
        return $this->regNumber;
    }

    public function setRegNumber(string $regNumber): self
    {
        $this->regNumber = $regNumber;

        return $this;
    }

    public function getRegDate(): ?\DateTimeInterface
    {
        return $this->regDate;
    }

    public function setRegDate(\DateTimeInterface $regDate): self
    {
        $this->regDate = $regDate;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getDocDateIn(): ?\DateTimeInterface
    {
        return $this->docDateIn;
    }

    public function setDocDateIn(\DateTimeInterface $docDateIn): self
    {
        $this->docDateIn = $docDateIn;

        return $this;
    }

    public function getDocDateFrom(): ?\DateTimeInterface
    {
        return $this->docDateFrom;
    }

    public function setDocDateFrom(\DateTimeInterface $docDateFrom): self
    {
        $this->docDateFrom = $docDateFrom;

        return $this;
    }

    public function getDocDateTo(): ?\DateTimeInterface
    {
        return $this->docDateTo;
    }

    public function setDocDateTo(\DateTimeInterface $docDateTo): self
    {
        $this->docDateTo = $docDateTo;

        return $this;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }


}
