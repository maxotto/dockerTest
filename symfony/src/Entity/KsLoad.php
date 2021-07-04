<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KsLoad
 *
 * @ORM\Table(name="ks_load")
 * @ORM\Entity
 */
class KsLoad
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
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="loadtime", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $loadtime = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arps1", type="text", length=0, nullable=true)
     */
    private $arps1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="errors", type="text", length=0, nullable=true)
     */
    private $errors;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getLoadtime(): ?\DateTimeInterface
    {
        return $this->loadtime;
    }

    public function setLoadtime(?\DateTimeInterface $loadtime): self
    {
        $this->loadtime = $loadtime;

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

    public function getArps1(): ?string
    {
        return $this->arps1;
    }

    public function setArps1(?string $arps1): self
    {
        $this->arps1 = $arps1;

        return $this;
    }

    public function getErrors(): ?string
    {
        return $this->errors;
    }

    public function setErrors(?string $errors): self
    {
        $this->errors = $errors;

        return $this;
    }


}
