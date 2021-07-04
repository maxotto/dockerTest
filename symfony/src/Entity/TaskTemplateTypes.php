<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaskTemplateTypes
 *
 * @ORM\Table(name="task_template_types")
 * @ORM\Entity
 */
class TaskTemplateTypes
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
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=false)
     */
    private $label = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sw_prefix", type="string", length=25, nullable=false)
     */
    private $swPrefix;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getSwPrefix(): ?string
    {
        return $this->swPrefix;
    }

    public function setSwPrefix(string $swPrefix): self
    {
        $this->swPrefix = $swPrefix;

        return $this;
    }


}
