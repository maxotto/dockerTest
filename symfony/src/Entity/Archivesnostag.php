<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Archivesnostag
 *
 * @ORM\Table(name="ArchiveSnosTag")
 * @ORM\Entity
 */
class Archivesnostag
{
    /**
     * @var int
     *
     * @ORM\Column(name="archive_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $archiveId;

    /**
     * @var int
     *
     * @ORM\Column(name="tagId", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tagid;

    public function getArchiveId(): ?int
    {
        return $this->archiveId;
    }

    public function getTagid(): ?int
    {
        return $this->tagid;
    }


}
