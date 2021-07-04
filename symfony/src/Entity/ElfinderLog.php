<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElfinderLog
 *
 * @ORM\Table(name="elfinder_log")
 * @ORM\Entity
 */
class ElfinderLog
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
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="action_time", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $actionTime = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="cmd", type="string", length=25, nullable=false)
     */
    private $cmd;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="blob", length=65535, nullable=false)
     */
    private $result;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getActionTime(): ?\DateTimeInterface
    {
        return $this->actionTime;
    }

    public function setActionTime(\DateTimeInterface $actionTime): self
    {
        $this->actionTime = $actionTime;

        return $this;
    }

    public function getCmd(): ?string
    {
        return $this->cmd;
    }

    public function setCmd(string $cmd): self
    {
        $this->cmd = $cmd;

        return $this;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($result): self
    {
        $this->result = $result;

        return $this;
    }


}
