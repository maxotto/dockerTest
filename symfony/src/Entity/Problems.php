<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Problems
 *
 * @ORM\Table(name="problems")
 * @ORM\Entity
 */
class Problems
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
     * @var int
     *
     * @ORM\Column(name="object_type", type="integer", nullable=false)
     */
    private $objectType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=false)
     */
    private $text;

    /**
     * @var int
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $projectId;

    /**
     * @var int
     *
     * @ORM\Column(name="redmine_tracker_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $redmineTrackerId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjectType(): ?int
    {
        return $this->objectType;
    }

    public function setObjectType(int $objectType): self
    {
        $this->objectType = $objectType;

        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    public function setProjectId(int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    public function getRedmineTrackerId(): ?int
    {
        return $this->redmineTrackerId;
    }

    public function setRedmineTrackerId(int $redmineTrackerId): self
    {
        $this->redmineTrackerId = $redmineTrackerId;

        return $this;
    }


}
