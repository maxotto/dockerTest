<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OkeiUnit
 *
 * @ORM\Table(name="okei_unit", uniqueConstraints={@ORM\UniqueConstraint(name="number_code", columns={"number_code"})}, indexes={@ORM\Index(name="okei_unit_group_id", columns={"okei_unit_group_id"}), @ORM\Index(name="okei_unit_type_id", columns={"okei_unit_type_id"})})
 * @ORM\Entity
 */
class OkeiUnit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="smallint", nullable=false, options={"comment"="pk"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false, options={"comment"="Наименование единицы измерения"})
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="number_code", type="string", length=5, nullable=false, options={"comment"="Код"})
     */
    private $numberCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rus_name1", type="string", length=50, nullable=true, options={"comment"="Условное обозначение национальное"})
     */
    private $rusName1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eng_name1", type="string", length=50, nullable=true, options={"comment"="Условное обозначение международное"})
     */
    private $engName1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rus_name2", type="string", length=50, nullable=true, options={"comment"="Кодовое буквенное обозначение национальное"})
     */
    private $rusName2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eng_name2", type="string", length=50, nullable=true, options={"comment"="Кодовое буквенное обозначение международное"})
     */
    private $engName2;

    /**
     * @var bool
     *
     * @ORM\Column(name="visible", type="boolean", nullable=false, options={"default"="1","comment"="Видимость"})
     */
    private $visible = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true, options={"comment"="Комментарий"})
     */
    private $comment;

    /**
     * @var \OkeiUnitGroup
     *
     * @ORM\ManyToOne(targetEntity="OkeiUnitGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="okei_unit_group_id", referencedColumnName="id")
     * })
     */
    private $okeiUnitGroup;

    /**
     * @var \OkeiUnitType
     *
     * @ORM\ManyToOne(targetEntity="OkeiUnitType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="okei_unit_type_id", referencedColumnName="id")
     * })
     */
    private $okeiUnitType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNumberCode(): ?string
    {
        return $this->numberCode;
    }

    public function setNumberCode(string $numberCode): self
    {
        $this->numberCode = $numberCode;

        return $this;
    }

    public function getRusName1(): ?string
    {
        return $this->rusName1;
    }

    public function setRusName1(?string $rusName1): self
    {
        $this->rusName1 = $rusName1;

        return $this;
    }

    public function getEngName1(): ?string
    {
        return $this->engName1;
    }

    public function setEngName1(?string $engName1): self
    {
        $this->engName1 = $engName1;

        return $this;
    }

    public function getRusName2(): ?string
    {
        return $this->rusName2;
    }

    public function setRusName2(?string $rusName2): self
    {
        $this->rusName2 = $rusName2;

        return $this;
    }

    public function getEngName2(): ?string
    {
        return $this->engName2;
    }

    public function setEngName2(?string $engName2): self
    {
        $this->engName2 = $engName2;

        return $this;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getOkeiUnitGroup(): ?OkeiUnitGroup
    {
        return $this->okeiUnitGroup;
    }

    public function setOkeiUnitGroup(?OkeiUnitGroup $okeiUnitGroup): self
    {
        $this->okeiUnitGroup = $okeiUnitGroup;

        return $this;
    }

    public function getOkeiUnitType(): ?OkeiUnitType
    {
        return $this->okeiUnitType;
    }

    public function setOkeiUnitType(?OkeiUnitType $okeiUnitType): self
    {
        $this->okeiUnitType = $okeiUnitType;

        return $this;
    }


}
