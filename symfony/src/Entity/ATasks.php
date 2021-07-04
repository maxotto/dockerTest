<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ATasks
 *
 * @ORM\Table(name="a_tasks")
 * @ORM\Entity
 */
class ATasks
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
     * @ORM\Column(name="par_name_txt", type="string", length=255, nullable=true)
     */
    private $parNameTxt;

    /**
     * @var string
     *
     * @ORM\Column(name="task_group", type="string", length=50, nullable=false)
     */
    private $taskGroup = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="task_type_id", type="integer", nullable=true)
     */
    private $taskTypeId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParNameTxt(): ?string
    {
        return $this->parNameTxt;
    }

    public function setParNameTxt(?string $parNameTxt): self
    {
        $this->parNameTxt = $parNameTxt;

        return $this;
    }

    public function getTaskGroup(): ?string
    {
        return $this->taskGroup;
    }

    public function setTaskGroup(string $taskGroup): self
    {
        $this->taskGroup = $taskGroup;

        return $this;
    }

    public function getTaskTypeId(): ?int
    {
        return $this->taskTypeId;
    }

    public function setTaskTypeId(?int $taskTypeId): self
    {
        $this->taskTypeId = $taskTypeId;

        return $this;
    }


}
