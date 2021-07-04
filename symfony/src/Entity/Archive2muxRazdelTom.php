<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archive2muxRazdelTom
 *
 * @ORM\Table(name="archive_2mux_razdel_tom", uniqueConstraints={@ORM\UniqueConstraint(name="UK_archive_2mux_razde_tom", columns={"archive_data_id", "razdel_id", "tom", "shifr"})}, indexes={@ORM\Index(name="IDX_archive_2mux_razde_tom_razdel_id", columns={"razdel_id"}), @ORM\Index(name="IDX_archive_2mux_razde_tom_archive_data_id", columns={"archive_data_id"})})
 * @ORM\Entity
 */
class Archive2muxRazdelTom
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
     * @ORM\Column(name="archive_data_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $archiveDataId;

    /**
     * @var int
     *
     * @ORM\Column(name="razdel_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $razdelId;

    /**
     * @var int
     *
     * @ORM\Column(name="doc_type_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $docTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="tom", type="string", length=25, nullable=false)
     */
    private $tom;

    /**
     * @var string
     *
     * @ORM\Column(name="shifr", type="string", length=25, nullable=false)
     */
    private $shifr;

    /**
     * @var string
     *
     * @ORM\Column(name="god", type="string", length=4, nullable=false)
     */
    private $god;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArchiveDataId(): ?int
    {
        return $this->archiveDataId;
    }

    public function setArchiveDataId(int $archiveDataId): self
    {
        $this->archiveDataId = $archiveDataId;

        return $this;
    }

    public function getRazdelId(): ?int
    {
        return $this->razdelId;
    }

    public function setRazdelId(int $razdelId): self
    {
        $this->razdelId = $razdelId;

        return $this;
    }

    public function getDocTypeId(): ?int
    {
        return $this->docTypeId;
    }

    public function setDocTypeId(int $docTypeId): self
    {
        $this->docTypeId = $docTypeId;

        return $this;
    }

    public function getTom(): ?string
    {
        return $this->tom;
    }

    public function setTom(string $tom): self
    {
        $this->tom = $tom;

        return $this;
    }

    public function getShifr(): ?string
    {
        return $this->shifr;
    }

    public function setShifr(string $shifr): self
    {
        $this->shifr = $shifr;

        return $this;
    }

    public function getGod(): ?string
    {
        return $this->god;
    }

    public function setGod(string $god): self
    {
        $this->god = $god;

        return $this;
    }


}
