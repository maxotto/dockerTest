<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Omrv
 *
 * @ORM\Table(name="omrv", indexes={@ORM\Index(name="FK_omrv_tasks_template", columns={"tasks_template"})})
 * @ORM\Entity
 */
class Omrv
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
     * @var int
     *
     * @ORM\Column(name="deleted", type="integer", nullable=false)
     */
    private $deleted = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="region_id", type="integer", nullable=true)
     */
    private $regionId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text", length=65535, nullable=false)
     */
    private $address;

    /**
     * @var point|null
     *
     * @ORM\Column(name="location", type="point", nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="rayon", type="string", length=255, nullable=false)
     */
    private $rayon;

    /**
     * @var string
     *
     * @ORM\Column(name="np", type="string", length=255, nullable=false)
     */
    private $np;

    /**
     * @var string
     *
     * @ORM\Column(name="address_clear", type="text", length=65535, nullable=false)
     */
    private $addressClear;

    /**
     * @var int
     *
     * @ORM\Column(name="zip_code", type="integer", nullable=false)
     */
    private $zipCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edited_when", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $editedWhen = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="address_internal", type="text", length=65535, nullable=false)
     */
    private $addressInternal;

    /**
     * @var int
     *
     * @ORM\Column(name="project_type", type="integer", nullable=false, options={"default"="3","unsigned"=true})
     */
    private $projectType = 3;

    /**
     * @var \TaskTemplateTypes
     *
     * @ORM\ManyToOne(targetEntity="TaskTemplateTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tasks_template", referencedColumnName="id")
     * })
     */
    private $tasksTemplate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeleted(): ?int
    {
        return $this->deleted;
    }

    public function setDeleted(int $deleted): self
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getRegionId(): ?int
    {
        return $this->regionId;
    }

    public function setRegionId(?int $regionId): self
    {
        $this->regionId = $regionId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getRayon(): ?string
    {
        return $this->rayon;
    }

    public function setRayon(string $rayon): self
    {
        $this->rayon = $rayon;

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

    public function getAddressClear(): ?string
    {
        return $this->addressClear;
    }

    public function setAddressClear(string $addressClear): self
    {
        $this->addressClear = $addressClear;

        return $this;
    }

    public function getZipCode(): ?int
    {
        return $this->zipCode;
    }

    public function setZipCode(int $zipCode): self
    {
        $this->zipCode = $zipCode;

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

    public function getAddressInternal(): ?string
    {
        return $this->addressInternal;
    }

    public function setAddressInternal(string $addressInternal): self
    {
        $this->addressInternal = $addressInternal;

        return $this;
    }

    public function getProjectType(): ?int
    {
        return $this->projectType;
    }

    public function setProjectType(int $projectType): self
    {
        $this->projectType = $projectType;

        return $this;
    }

    public function getTasksTemplate(): ?TaskTemplateTypes
    {
        return $this->tasksTemplate;
    }

    public function setTasksTemplate(?TaskTemplateTypes $tasksTemplate): self
    {
        $this->tasksTemplate = $tasksTemplate;

        return $this;
    }


}
