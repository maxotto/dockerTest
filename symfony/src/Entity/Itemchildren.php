<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Itemchildren
 *
 * @ORM\Table(name="itemchildren", indexes={@ORM\Index(name="child", columns={"child"})})
 * @ORM\Entity
 */
class Itemchildren
{
    /**
     * @var string
     *
     * @ORM\Column(name="parent", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="child", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $child;

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function getChild(): ?string
    {
        return $this->child;
    }


}
