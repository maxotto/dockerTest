<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblUser
 *
 * @ORM\Table(name="tbl_user")
 * @ORM\Entity
 */
class TblUser
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=128, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=128, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=false)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profile", type="text", length=65535, nullable=true)
     */
    private $profile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="obj_table", type="string", length=50, nullable=true)
     */
    private $objTable;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="obj_id", type="boolean", nullable=true)
     */
    private $objId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(?string $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    public function getObjTable(): ?string
    {
        return $this->objTable;
    }

    public function setObjTable(?string $objTable): self
    {
        $this->objTable = $objTable;

        return $this;
    }

    public function getObjId(): ?bool
    {
        return $this->objId;
    }

    public function setObjId(?bool $objId): self
    {
        $this->objId = $objId;

        return $this;
    }


}
