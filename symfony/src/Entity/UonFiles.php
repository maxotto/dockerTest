<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UonFiles
 *
 * @ORM\Table(name="uon_files", indexes={@ORM\Index(name="FK_uon_files_uon_docs_id", columns={"uon_docs_id"})})
 * @ORM\Entity
 */
class UonFiles
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
     * @ORM\Column(name="uid", type="bigint", nullable=false)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=false)
     */
    private $filename;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var \UonDocs
     *
     * @ORM\ManyToOne(targetEntity="UonDocs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uon_docs_id", referencedColumnName="id")
     * })
     */
    private $uonDocs;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getUonDocs(): ?UonDocs
    {
        return $this->uonDocs;
    }

    public function setUonDocs(?UonDocs $uonDocs): self
    {
        $this->uonDocs = $uonDocs;

        return $this;
    }


}
