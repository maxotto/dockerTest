<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportsFilial
 *
 * @ORM\Table(name="reports_filial", uniqueConstraints={@ORM\UniqueConstraint(name="UK_reports_filial", columns={"report_id", "filial_id"})})
 * @ORM\Entity
 */
class ReportsFilial
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
     * @ORM\Column(name="report_id", type="integer", nullable=false)
     */
    private $reportId;

    /**
     * @var int
     *
     * @ORM\Column(name="filial_id", type="integer", nullable=false)
     */
    private $filialId;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReportId(): ?int
    {
        return $this->reportId;
    }

    public function setReportId(int $reportId): self
    {
        $this->reportId = $reportId;

        return $this;
    }

    public function getFilialId(): ?int
    {
        return $this->filialId;
    }

    public function setFilialId(int $filialId): self
    {
        $this->filialId = $filialId;

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


}
