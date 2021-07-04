<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObsledDefect
 *
 * @ORM\Table(name="obsled_defect", indexes={@ORM\Index(name="defect_type", columns={"defect_type"})})
 * @ORM\Entity
 */
class ObsledDefect
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
     * @ORM\Column(name="defect_type", type="integer", nullable=false, options={"unsigned"=true,"comment"="Признак того, к чему прицепляется дефект - к АМС(1) или к зданию(2)."})
     */
    private $defectType = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="obsled_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $obsledId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="defect_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $defectId = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDefectType(): ?int
    {
        return $this->defectType;
    }

    public function setDefectType(int $defectType): self
    {
        $this->defectType = $defectType;

        return $this;
    }

    public function getObsledId(): ?int
    {
        return $this->obsledId;
    }

    public function setObsledId(int $obsledId): self
    {
        $this->obsledId = $obsledId;

        return $this;
    }

    public function getDefectId(): ?int
    {
        return $this->defectId;
    }

    public function setDefectId(int $defectId): self
    {
        $this->defectId = $defectId;

        return $this;
    }


}
