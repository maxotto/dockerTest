<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblMigration
 *
 * @ORM\Table(name="tbl_migration")
 * @ORM\Entity
 */
class TblMigration
{
    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $version;

    /**
     * @var int|null
     *
     * @ORM\Column(name="apply_time", type="integer", nullable=true)
     */
    private $applyTime;

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function getApplyTime(): ?int
    {
        return $this->applyTime;
    }

    public function setApplyTime(?int $applyTime): self
    {
        $this->applyTime = $applyTime;

        return $this;
    }


}
