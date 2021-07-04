<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OvBuildAdditions
 *
 * @ORM\Table(name="ov_build_additions", uniqueConstraints={@ORM\UniqueConstraint(name="UK_ov_build_main", columns={"fcp_object_id", "job", "param_name"})})
 * @ORM\Entity
 */
class OvBuildAdditions
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
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=5, nullable=false)
     */
    private $job;

    /**
     * @var string
     *
     * @ORM\Column(name="param_name", type="string", length=25, nullable=false)
     */
    private $paramName = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="param_value", type="blob", length=65535, nullable=false)
     */
    private $paramValue;

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

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getParamName(): ?string
    {
        return $this->paramName;
    }

    public function setParamName(string $paramName): self
    {
        $this->paramName = $paramName;

        return $this;
    }

    public function getParamValue()
    {
        return $this->paramValue;
    }

    public function setParamValue($paramValue): self
    {
        $this->paramValue = $paramValue;

        return $this;
    }


}
