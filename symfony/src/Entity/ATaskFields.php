<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ATaskFields
 *
 * @ORM\Table(name="a_task_fields")
 * @ORM\Entity
 */
class ATaskFields
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
     * @ORM\Column(name="task_field_txt", type="string", length=255, nullable=false)
     */
    private $taskFieldTxt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaskFieldTxt(): ?string
    {
        return $this->taskFieldTxt;
    }

    public function setTaskFieldTxt(string $taskFieldTxt): self
    {
        $this->taskFieldTxt = $taskFieldTxt;

        return $this;
    }


}
