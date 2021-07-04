<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportsHistory
 *
 * @ORM\Table(name="reports_history", indexes={@ORM\Index(name="IDX_reports_history_user_id", columns={"user_id"}), @ORM\Index(name="IDX_reports_history_change_tim", columns={"change_time"}), @ORM\Index(name="IDX_reports_history_data_id", columns={"data_id"})})
 * @ORM\Entity
 */
class ReportsHistory
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
     * @var int|null
     *
     * @ORM\Column(name="data_id", type="integer", nullable=true)
     */
    private $dataId;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="change_time", type="datetime", nullable=false)
     */
    private $changeTime;

    /**
     * @var string
     *
     * @ORM\Column(name="old_value", type="text", length=0, nullable=false)
     */
    private $oldValue;

    /**
     * @var string
     *
     * @ORM\Column(name="new_value", type="text", length=0, nullable=false)
     */
    private $newValue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataId(): ?int
    {
        return $this->dataId;
    }

    public function setDataId(?int $dataId): self
    {
        $this->dataId = $dataId;

        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getChangeTime(): ?\DateTimeInterface
    {
        return $this->changeTime;
    }

    public function setChangeTime(\DateTimeInterface $changeTime): self
    {
        $this->changeTime = $changeTime;

        return $this;
    }

    public function getOldValue(): ?string
    {
        return $this->oldValue;
    }

    public function setOldValue(string $oldValue): self
    {
        $this->oldValue = $oldValue;

        return $this;
    }

    public function getNewValue(): ?string
    {
        return $this->newValue;
    }

    public function setNewValue(string $newValue): self
    {
        $this->newValue = $newValue;

        return $this;
    }


}
