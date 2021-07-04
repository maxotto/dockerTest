<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Galleryconfig
 *
 * @ORM\Table(name="galleryConfig")
 * @ORM\Entity
 */
class Galleryconfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=8, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="config", type="text", length=65535, nullable=false)
     */
    private $config;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getConfig(): ?string
    {
        return $this->config;
    }

    public function setConfig(string $config): self
    {
        $this->config = $config;

        return $this;
    }


}
