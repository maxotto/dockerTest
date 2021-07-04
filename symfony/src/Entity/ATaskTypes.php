<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ATaskTypes
 *
 * @ORM\Table(name="a_task_types")
 * @ORM\Entity
 */
class ATaskTypes
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
     * @ORM\Column(name="task_type_txt", type="string", length=50, nullable=false)
     */
    private $taskTypeTxt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaskTypeTxt(): ?string
    {
        return $this->taskTypeTxt;
    }

    public function setTaskTypeTxt(string $taskTypeTxt): self
    {
        $this->taskTypeTxt = $taskTypeTxt;

        return $this;
    }


}
