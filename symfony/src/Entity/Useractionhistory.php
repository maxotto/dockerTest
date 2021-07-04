<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Useractionhistory
 *
 * @ORM\Table(name="useractionhistory", indexes={@ORM\Index(name="IX_useractionhistory_user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Useractionhistory
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
    private $userId = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="actiontime", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $actiontime = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="controller", type="string", length=50, nullable=false)
     */
    private $controller;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=50, nullable=false)
     */
    private $action;

    /**
     * @var int|null
     *
     * @ORM\Column(name="record_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $recordId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="request_params", type="text", length=0, nullable=true)
     */
    private $requestParams;

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

    public function getActiontime(): ?\DateTimeInterface
    {
        return $this->actiontime;
    }

    public function setActiontime(\DateTimeInterface $actiontime): self
    {
        $this->actiontime = $actiontime;

        return $this;
    }

    public function getController(): ?string
    {
        return $this->controller;
    }

    public function setController(string $controller): self
    {
        $this->controller = $controller;

        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(string $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getRecordId(): ?int
    {
        return $this->recordId;
    }

    public function setRecordId(?int $recordId): self
    {
        $this->recordId = $recordId;

        return $this;
    }

    public function getRequestParams(): ?string
    {
        return $this->requestParams;
    }

    public function setRequestParams(?string $requestParams): self
    {
        $this->requestParams = $requestParams;

        return $this;
    }


}
