<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KsPosition
 *
 * @ORM\Table(name="ks_position", indexes={@ORM\Index(name="razdel_id", columns={"razdel_id"})})
 * @ORM\Entity
 */
class KsPosition
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
     * @ORM\Column(name="razdel_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $razdelId;

    /**
     * @var int
     *
     * @ORM\Column(name="edited_who", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $editedWho;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="edizm", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $edizm;

    /**
     * @var string
     *
     * @ORM\Column(name="author_quantity", type="decimal", precision=20, scale=7, nullable=false)
     */
    private $authorQuantity;

    /**
     * @var string
     *
     * @ORM\Column(name="check_quantity", type="decimal", precision=20, scale=7, nullable=false)
     */
    private $checkQuantity;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $status = '0';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getEditedWho(): ?int
    {
        return $this->editedWho;
    }

    public function setEditedWho(int $editedWho): self
    {
        $this->editedWho = $editedWho;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

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

    public function getEdizm(): ?int
    {
        return $this->edizm;
    }

    public function setEdizm(int $edizm): self
    {
        $this->edizm = $edizm;

        return $this;
    }

    public function getAuthorQuantity(): ?string
    {
        return $this->authorQuantity;
    }

    public function setAuthorQuantity(string $authorQuantity): self
    {
        $this->authorQuantity = $authorQuantity;

        return $this;
    }

    public function getCheckQuantity(): ?string
    {
        return $this->checkQuantity;
    }

    public function setCheckQuantity(string $checkQuantity): self
    {
        $this->checkQuantity = $checkQuantity;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }


}
