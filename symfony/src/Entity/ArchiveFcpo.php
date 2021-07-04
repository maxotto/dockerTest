<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArchiveFcpo
 *
 * @ORM\Table(name="archive_fcpo", uniqueConstraints={@ORM\UniqueConstraint(name="data_fcpo", columns={"data_id", "fcp_object_id"})}, indexes={@ORM\Index(name="fcpo", columns={"fcp_object_id"}), @ORM\Index(name="data_id", columns={"data_id"})})
 * @ORM\Entity
 */
class ArchiveFcpo
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
     * @ORM\Column(name="data_id", type="integer", nullable=false)
     */
    private $dataId;

    /**
     * @var int
     *
     * @ORM\Column(name="fcp_object_id", type="integer", nullable=false)
     */
    private $fcpObjectId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataId(): ?int
    {
        return $this->dataId;
    }

    public function setDataId(int $dataId): self
    {
        $this->dataId = $dataId;

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


}
