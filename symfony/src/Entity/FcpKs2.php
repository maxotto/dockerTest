<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FcpKs2
 *
 * @ORM\Table(name="fcp_ks2", indexes={@ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class FcpKs2
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
     * @ORM\Column(name="fcp_object_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $fcpObjectId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="date", nullable=false)
     */
    private $dateStart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_end", type="date", nullable=true)
     */
    private $dateEnd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="edited_when", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $editedWhen = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="edited_who", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $editedWho;

    /**
     * @var string
     *
     * @ORM\Column(name="ks2_ostatok", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сумма остатка незакрытых актами СМР"})
     */
    private $ks2Ostatok = '0.00';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sogl_date", type="date", nullable=true, options={"default"="1970-01-01","comment"="Дата согласования КС-2 филиалом"})
     */
    private $soglDate = '1970-01-01';

    /**
     * @var int|null
     *
     * @ORM\Column(name="complect_is_ready", type="integer", nullable=true, options={"unsigned"=true,"comment"="Признак согласования полного комплетка КС-2"})
     */
    private $complectIsReady = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="complect_is_ready_comment", type="string", length=255, nullable=false, options={"comment"="Комментарий к признаку согласования полного комплетка КС-2"})
     */
    private $complectIsReadyComment = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="torg12_is_ready", type="integer", nullable=true, options={"unsigned"=true,"comment"="Признак согласования полного комплетка ТОРГ12"})
     */
    private $torg12IsReady = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="torg12_is_ready_comment", type="string", length=255, nullable=false, options={"comment"="Комментарий к признаку согласования полного комплетка ТОРГ12"})
     */
    private $torg12IsReadyComment = '';

    /**
     * @var string
     *
     * @ORM\Column(name="check_comment", type="string", length=255, nullable=false, options={"comment"="Комментарий проверющего"})
     */
    private $checkComment = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFcpObjectId(): ?int
    {
        return $this->fcpObjectId;
    }

    public function setFcpObjectId(int $fcpObjectId): self
    {
        $this->fcpObjectId = $fcpObjectId;

        return $this;
    }

    public function getDateStart(): ?\DateTimeInterface
    {
        return $this->dateStart;
    }

    public function setDateStart(\DateTimeInterface $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    public function getDateEnd(): ?\DateTimeInterface
    {
        return $this->dateEnd;
    }

    public function setDateEnd(?\DateTimeInterface $dateEnd): self
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    public function getEditedWhen(): ?\DateTimeInterface
    {
        return $this->editedWhen;
    }

    public function setEditedWhen(\DateTimeInterface $editedWhen): self
    {
        $this->editedWhen = $editedWhen;

        return $this;
    }

    public function getEditedWho(): ?int
    {
        return $this->editedWho;
    }

    public function setEditedWho(int $editedWho): self
    {
        $this->editedWho = $editedWho;

        return $this;
    }

    public function getKs2Ostatok(): ?string
    {
        return $this->ks2Ostatok;
    }

    public function setKs2Ostatok(string $ks2Ostatok): self
    {
        $this->ks2Ostatok = $ks2Ostatok;

        return $this;
    }

    public function getSoglDate(): ?\DateTimeInterface
    {
        return $this->soglDate;
    }

    public function setSoglDate(?\DateTimeInterface $soglDate): self
    {
        $this->soglDate = $soglDate;

        return $this;
    }

    public function getComplectIsReady(): ?int
    {
        return $this->complectIsReady;
    }

    public function setComplectIsReady(?int $complectIsReady): self
    {
        $this->complectIsReady = $complectIsReady;

        return $this;
    }

    public function getComplectIsReadyComment(): ?string
    {
        return $this->complectIsReadyComment;
    }

    public function setComplectIsReadyComment(string $complectIsReadyComment): self
    {
        $this->complectIsReadyComment = $complectIsReadyComment;

        return $this;
    }

    public function getTorg12IsReady(): ?int
    {
        return $this->torg12IsReady;
    }

    public function setTorg12IsReady(?int $torg12IsReady): self
    {
        $this->torg12IsReady = $torg12IsReady;

        return $this;
    }

    public function getTorg12IsReadyComment(): ?string
    {
        return $this->torg12IsReadyComment;
    }

    public function setTorg12IsReadyComment(string $torg12IsReadyComment): self
    {
        $this->torg12IsReadyComment = $torg12IsReadyComment;

        return $this;
    }

    public function getCheckComment(): ?string
    {
        return $this->checkComment;
    }

    public function setCheckComment(string $checkComment): self
    {
        $this->checkComment = $checkComment;

        return $this;
    }


}
