<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscriptions
 *
 * @ORM\Table(name="subscriptions", uniqueConstraints={@ORM\UniqueConstraint(name="table_field_user", columns={"table", "field", "user_id"})}, indexes={@ORM\Index(name="table_field", columns={"table", "field"}), @ORM\Index(name="user_id", columns={"user_id"}), @ORM\Index(name="IX_subscriptions_table", columns={"table"}), @ORM\Index(name="IX_subscriptions_field", columns={"field"})})
 * @ORM\Entity
 */
class Subscriptions
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
     * @var string
     *
     * @ORM\Column(name="table", type="string", length=50, nullable=false)
     */
    private $table;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=50, nullable=false)
     */
    private $field;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $userId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTable(): ?string
    {
        return $this->table;
    }

    public function setTable(string $table): self
    {
        $this->table = $table;

        return $this;
    }

    public function getField(): ?string
    {
        return $this->field;
    }

    public function setField(string $field): self
    {
        $this->field = $field;

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


}
