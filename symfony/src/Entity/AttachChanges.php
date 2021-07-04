<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AttachChanges
 *
 * @ORM\Table(name="attach_changes", indexes={@ORM\Index(name="IDX_attach_changes_change_date", columns={"change_date"}), @ORM\Index(name="IDX_AttachChanges_task", columns={"task"})})
 * @ORM\Entity
 */
class AttachChanges
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
     * @ORM\Column(name="task", type="string", length=50, nullable=false, options={"comment"="наименование задания, например, стройка"})
     */
    private $task;

    /**
     * @var string
     *
     * @ORM\Column(name="row_json", type="text", length=0, nullable=false, options={"comment"="данные элементарной строки изменений"})
     */
    private $rowJson;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="change_date", type="datetime", nullable=true, options={"comment"="время фиксируемого изменения для правильной сортировки"})
     */
    private $changeDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTask(): ?string
    {
        return $this->task;
    }

    public function setTask(string $task): self
    {
        $this->task = $task;

        return $this;
    }

    public function getRowJson(): ?string
    {
        return $this->rowJson;
    }

    public function setRowJson(string $rowJson): self
    {
        $this->rowJson = $rowJson;

        return $this;
    }

    public function getChangeDate(): ?\DateTimeInterface
    {
        return $this->changeDate;
    }

    public function setChangeDate(?\DateTimeInterface $changeDate): self
    {
        $this->changeDate = $changeDate;

        return $this;
    }


}
