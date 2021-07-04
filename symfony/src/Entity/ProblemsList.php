<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProblemsList
 *
 * @ORM\Table(name="problems_list")
 * @ORM\Entity
 */
class ProblemsList
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
     * @var int
     *
     * @ORM\Column(name="fcp_objects_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fcpObjectsId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="problem_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $problemId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="problem_txt", type="text", length=65535, nullable=true)
     */
    private $problemTxt;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $status = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $level = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="created_by_user_id", type="integer", nullable=false)
     */
    private $createdByUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_time", type="datetime", nullable=true)
     */
    private $createdTime;

    /**
     * @var int|null
     *
     * @ORM\Column(name="edited_by_user_id", type="integer", nullable=true)
     */
    private $editedByUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="edited_time", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $editedTime = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="redmine_status", type="string", length=255, nullable=false, options={"default"="Не установлен"})
     */
    private $redmineStatus = 'Не установлен';

    /**
     * @var int
     *
     * @ORM\Column(name="issue_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $issueId = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFcpObjectsId(): ?int
    {
        return $this->fcpObjectsId;
    }

    public function setFcpObjectsId(int $fcpObjectsId): self
    {
        $this->fcpObjectsId = $fcpObjectsId;

        return $this;
    }

    public function getProblemId(): ?int
    {
        return $this->problemId;
    }

    public function setProblemId(int $problemId): self
    {
        $this->problemId = $problemId;

        return $this;
    }

    public function getProblemTxt(): ?string
    {
        return $this->problemTxt;
    }

    public function setProblemTxt(?string $problemTxt): self
    {
        $this->problemTxt = $problemTxt;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getCreatedByUserId(): ?int
    {
        return $this->createdByUserId;
    }

    public function setCreatedByUserId(int $createdByUserId): self
    {
        $this->createdByUserId = $createdByUserId;

        return $this;
    }

    public function getCreatedTime(): ?\DateTimeInterface
    {
        return $this->createdTime;
    }

    public function setCreatedTime(?\DateTimeInterface $createdTime): self
    {
        $this->createdTime = $createdTime;

        return $this;
    }

    public function getEditedByUserId(): ?int
    {
        return $this->editedByUserId;
    }

    public function setEditedByUserId(?int $editedByUserId): self
    {
        $this->editedByUserId = $editedByUserId;

        return $this;
    }

    public function getEditedTime(): ?\DateTimeInterface
    {
        return $this->editedTime;
    }

    public function setEditedTime(?\DateTimeInterface $editedTime): self
    {
        $this->editedTime = $editedTime;

        return $this;
    }

    public function getRedmineStatus(): ?string
    {
        return $this->redmineStatus;
    }

    public function setRedmineStatus(string $redmineStatus): self
    {
        $this->redmineStatus = $redmineStatus;

        return $this;
    }

    public function getIssueId(): ?int
    {
        return $this->issueId;
    }

    public function setIssueId(int $issueId): self
    {
        $this->issueId = $issueId;

        return $this;
    }


}
