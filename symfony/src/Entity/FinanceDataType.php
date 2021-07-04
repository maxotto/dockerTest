<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FinanceDataType
 *
 * @ORM\Table(name="finance_data_type")
 * @ORM\Entity
 */
class FinanceDataType
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
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var int
     *
     * @ORM\Column(name="is_fact", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $isFact = '0';

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

    public function getIsFact(): ?int
    {
        return $this->isFact;
    }

    public function setIsFact(int $isFact): self
    {
        $this->isFact = $isFact;

        return $this;
    }


}
