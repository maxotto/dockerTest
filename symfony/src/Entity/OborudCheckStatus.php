<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OborudCheckStatus
 *
 * @ORM\Table(name="oborud_check_status")
 * @ORM\Entity
 */
class OborudCheckStatus
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
     * @ORM\Column(name="role_id", type="integer", nullable=true)
     */
    private $roleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="string", length=100, nullable=true)
     */
    private $text = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="ready_state", type="integer", nullable=true, options={"comment"="0 - не проверялось, 1 - полная готовность, до 19 включительно - предупреждение, от 20 и выше - ошибка"})
     */
    private $readyState = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort", type="integer", nullable=true)
     */
    private $sort;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoleId(): ?int
    {
        return $this->roleId;
    }

    public function setRoleId(?int $roleId): self
    {
        $this->roleId = $roleId;

        return $this;
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

    public function getReadyState(): ?int
    {
        return $this->readyState;
    }

    public function setReadyState(?int $readyState): self
    {
        $this->readyState = $readyState;

        return $this;
    }

    public function getSort(): ?int
    {
        return $this->sort;
    }

    public function setSort(?int $sort): self
    {
        $this->sort = $sort;

        return $this;
    }


}
