<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportsRow
 *
 * @ORM\Table(name="reports_row", indexes={@ORM\Index(name="IDX_reports_row_reports_filial", columns={"reports_filial_id"})})
 * @ORM\Entity
 */
class ReportsRow
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
     * @ORM\Column(name="reports_filial_id", type="integer", nullable=false)
     */
    private $reportsFilialId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReportsFilialId(): ?int
    {
        return $this->reportsFilialId;
    }

    public function setReportsFilialId(int $reportsFilialId): self
    {
        $this->reportsFilialId = $reportsFilialId;

        return $this;
    }


}
