<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filial
 *
 * @ORM\Table(name="filial")
 * @ORM\Entity
 */
class Filial
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
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=50, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text_s", type="string", length=10, nullable=true)
     */
    private $textS;

    /**
     * @var string|null
     *
     * @ORM\Column(name="informer", type="text", length=65535, nullable=true)
     */
    private $informer;

    /**
     * @var int
     *
     * @ORM\Column(name="queue", type="integer", nullable=false)
     */
    private $queue = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sort", type="integer", nullable=false, options={"default"="1000","unsigned"=true})
     */
    private $sort = 1000;

    /**
     * @var int
     *
     * @ORM\Column(name="org_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $orgId;

    /**
     * @var int
     *
     * @ORM\Column(name="curator_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $curatorId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sub_curator_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $subCuratorId = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getTextS(): ?string
    {
        return $this->textS;
    }

    public function setTextS(?string $textS): self
    {
        $this->textS = $textS;

        return $this;
    }

    public function getInformer(): ?string
    {
        return $this->informer;
    }

    public function setInformer(?string $informer): self
    {
        $this->informer = $informer;

        return $this;
    }

    public function getQueue(): ?int
    {
        return $this->queue;
    }

    public function setQueue(int $queue): self
    {
        $this->queue = $queue;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(int $sort): self
    {
        $this->sort = $sort;

        return $this;
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

    public function getCuratorId(): ?int
    {
        return $this->curatorId;
    }

    public function setCuratorId(int $curatorId): self
    {
        $this->curatorId = $curatorId;

        return $this;
    }

    public function getSubCuratorId(): ?int
    {
        return $this->subCuratorId;
    }

    public function setSubCuratorId(int $subCuratorId): self
    {
        $this->subCuratorId = $subCuratorId;

        return $this;
    }


}
