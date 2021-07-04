<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Doubt
 *
 * @ORM\Table(name="doubt", uniqueConstraints={@ORM\UniqueConstraint(name="IX_doubt", columns={"table_name", "table_id", "field_name"})})
 * @ORM\Entity
 */
class Doubt
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
     * @ORM\Column(name="table_name", type="string", length=50, nullable=false)
     */
    private $tableName;

    /**
     * @var int
     *
     * @ORM\Column(name="table_id", type="integer", nullable=false)
     */
    private $tableId;

    /**
     * @var string
     *
     * @ORM\Column(name="field_name", type="string", length=50, nullable=false)
     */
    private $fieldName;

    /**
     * @var int
     *
     * @ORM\Column(name="doubt_request_user", type="integer", nullable=false)
     */
    private $doubtRequestUser;

    /**
     * @var string
     *
     * @ORM\Column(name="doubt_request_text", type="text", length=65535, nullable=false)
     */
    private $doubtRequestText;

    /**
     * @var int
     *
     * @ORM\Column(name="response_filial_user", type="integer", nullable=false)
     */
    private $responseFilialUser = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="response_filial_text", type="text", length=65535, nullable=false)
     */
    private $responseFilialText;

    /**
     * @var int
     *
     * @ORM\Column(name="response_integr_user", type="integer", nullable=false)
     */
    private $responseIntegrUser = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="response_integr_text", type="text", length=65535, nullable=false)
     */
    private $responseIntegrText;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="gd_date", type="date", nullable=true)
     */
    private $gdDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fil_date", type="date", nullable=true)
     */
    private $filDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pro_date", type="date", nullable=true)
     */
    private $proDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTableName(): ?string
    {
        return $this->tableName;
    }

    public function setTableName(string $tableName): self
    {
        $this->tableName = $tableName;

        return $this;
    }

    public function getTableId(): ?int
    {
        return $this->tableId;
    }

    public function setTableId(int $tableId): self
    {
        $this->tableId = $tableId;

        return $this;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function setFieldName(string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    public function getDoubtRequestUser(): ?int
    {
        return $this->doubtRequestUser;
    }

    public function setDoubtRequestUser(int $doubtRequestUser): self
    {
        $this->doubtRequestUser = $doubtRequestUser;

        return $this;
    }

    public function getDoubtRequestText(): ?string
    {
        return $this->doubtRequestText;
    }

    public function setDoubtRequestText(string $doubtRequestText): self
    {
        $this->doubtRequestText = $doubtRequestText;

        return $this;
    }

    public function getResponseFilialUser(): ?int
    {
        return $this->responseFilialUser;
    }

    public function setResponseFilialUser(int $responseFilialUser): self
    {
        $this->responseFilialUser = $responseFilialUser;

        return $this;
    }

    public function getResponseFilialText(): ?string
    {
        return $this->responseFilialText;
    }

    public function setResponseFilialText(string $responseFilialText): self
    {
        $this->responseFilialText = $responseFilialText;

        return $this;
    }

    public function getResponseIntegrUser(): ?int
    {
        return $this->responseIntegrUser;
    }

    public function setResponseIntegrUser(int $responseIntegrUser): self
    {
        $this->responseIntegrUser = $responseIntegrUser;

        return $this;
    }

    public function getResponseIntegrText(): ?string
    {
        return $this->responseIntegrText;
    }

    public function setResponseIntegrText(string $responseIntegrText): self
    {
        $this->responseIntegrText = $responseIntegrText;

        return $this;
    }

    public function getGdDate(): ?\DateTimeInterface
    {
        return $this->gdDate;
    }

    public function setGdDate(?\DateTimeInterface $gdDate): self
    {
        $this->gdDate = $gdDate;

        return $this;
    }

    public function getFilDate(): ?\DateTimeInterface
    {
        return $this->filDate;
    }

    public function setFilDate(?\DateTimeInterface $filDate): self
    {
        $this->filDate = $filDate;

        return $this;
    }

    public function getProDate(): ?\DateTimeInterface
    {
        return $this->proDate;
    }

    public function setProDate(?\DateTimeInterface $proDate): self
    {
        $this->proDate = $proDate;

        return $this;
    }


}
