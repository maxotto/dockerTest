<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoryDetailsAdditionFields
 *
 * @ORM\Table(name="history_details_addition_fields", uniqueConstraints={@ORM\UniqueConstraint(name="UK_history_details_addition_fi", columns={"history_details_id", "param"})})
 * @ORM\Entity
 */
class HistoryDetailsAdditionFields
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
     * @ORM\Column(name="history_details_id", type="integer", nullable=false)
     */
    private $historyDetailsId;

    /**
     * @var string
     *
     * @ORM\Column(name="param", type="string", length=255, nullable=false, options={"comment"="имя дополнительного параметра"})
     */
    private $param;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="text", length=0, nullable=false, options={"comment"="значение дополнительного поля"})
     */
    private $value;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHistoryDetailsId(): ?int
    {
        return $this->historyDetailsId;
    }

    public function setHistoryDetailsId(int $historyDetailsId): self
    {
        $this->historyDetailsId = $historyDetailsId;

        return $this;
    }

    public function getParam(): ?string
    {
        return $this->param;
    }

    public function setParam(string $param): self
    {
        $this->param = $param;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }


}
