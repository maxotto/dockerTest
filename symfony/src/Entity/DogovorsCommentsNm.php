<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DogovorsCommentsNm
 *
 * @ORM\Table(name="dogovors_comments_nm", indexes={@ORM\Index(name="fk_posts_comments_comments", columns={"commentId"}), @ORM\Index(name="fk_posts_comments_posts", columns={"tableId"})})
 * @ORM\Entity
 */
class DogovorsCommentsNm
{
    /**
     * @var int
     *
     * @ORM\Column(name="tableId", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tableid;

    /**
     * @var int
     *
     * @ORM\Column(name="commentId", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $commentid;

    public function getTableid(): ?int
    {
        return $this->tableid;
    }

    public function getCommentid(): ?int
    {
        return $this->commentid;
    }


}
