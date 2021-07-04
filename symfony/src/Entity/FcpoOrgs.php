<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FcpoOrgs
 *
 * @ORM\Table(name="fcpo_orgs", indexes={@ORM\Index(name="UK_fcpo_orgs_fcp_object_id", columns={"fcp_object_id"}), @ORM\Index(name="UK_fcpo_orgs", columns={"fcp_object_id", "org_id", "param_name"}), @ORM\Index(name="UK_fcpo_orgs_org_id", columns={"org_id"})})
 * @ORM\Entity
 */
class FcpoOrgs
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
     * @ORM\Column(name="org_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $orgId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="param_name", type="string", length=50, nullable=true)
     */
    private $paramName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="param_value", type="text", length=65535, nullable=true)
     */
    private $paramValue;

    /**
     * @var \FcpObjects
     *
     * @ORM\ManyToOne(targetEntity="FcpObjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fcp_object_id", referencedColumnName="id")
     * })
     */
    private $fcpObject;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrgId(): ?int
    {
        return $this->orgId;
    }

    public function setOrgId(int $orgId): self
    {
        $this->orgId = $orgId;

        return $this;
    }

    public function getParamName(): ?string
    {
        return $this->paramName;
    }

    public function setParamName(?string $paramName): self
    {
        $this->paramName = $paramName;

        return $this;
    }

    public function getParamValue(): ?string
    {
        return $this->paramValue;
    }

    public function setParamValue(?string $paramValue): self
    {
        $this->paramValue = $paramValue;

        return $this;
    }

    public function getFcpObject(): ?FcpObjects
    {
        return $this->fcpObject;
    }

    public function setFcpObject(?FcpObjects $fcpObject): self
    {
        $this->fcpObject = $fcpObject;

        return $this;
    }


}
