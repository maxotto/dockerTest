<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskTemplates
 *
 * @ORM\Table(name="task_templates", uniqueConstraints={@ORM\UniqueConstraint(name="UK_task_templates", columns={"template_id", "task_id"})}, indexes={@ORM\Index(name="FK_task_templates_task_id", columns={"task_id"}), @ORM\Index(name="IDX_1002B0DF5DA0FB8", columns={"template_id"})})
 * @ORM\Entity
 */
class TaskTemplates
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
     * @var \Tasks
     *
     * @ORM\ManyToOne(targetEntity="Tasks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="task_id", referencedColumnName="id")
     * })
     */
    private $task;

    /**
     * @var \TaskTemplateTypes
     *
     * @ORM\ManyToOne(targetEntity="TaskTemplateTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="template_id", referencedColumnName="id")
     * })
     */
    private $template;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTask(): ?Tasks
    {
        return $this->task;
    }

    public function setTask(?Tasks $task): self
    {
        $this->task = $task;

        return $this;
    }

    public function getTemplate(): ?TaskTemplateTypes
    {
        return $this->template;
    }

    public function setTemplate(?TaskTemplateTypes $template): self
    {
        $this->template = $template;

        return $this;
    }


}
