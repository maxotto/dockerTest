<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RawData
 *
 * @ORM\Table(name="raw_data", indexes={@ORM\Index(name="f2", columns={"f2"}), @ORM\Index(name="f1", columns={"f1"})})
 * @ORM\Entity
 */
class RawData
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
     * @var string|null
     *
     * @ORM\Column(name="f1", type="string", length=255, nullable=true)
     */
    private $f1 = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="f2", type="text", length=65535, nullable=true)
     */
    private $f2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f3", type="text", length=65535, nullable=true)
     */
    private $f3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f4", type="text", length=65535, nullable=true)
     */
    private $f4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f5", type="text", length=65535, nullable=true)
     */
    private $f5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f6", type="text", length=65535, nullable=true)
     */
    private $f6;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f7", type="text", length=65535, nullable=true)
     */
    private $f7;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f8", type="text", length=65535, nullable=true)
     */
    private $f8;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f9", type="text", length=65535, nullable=true)
     */
    private $f9;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f10", type="text", length=65535, nullable=true)
     */
    private $f10;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f11", type="text", length=65535, nullable=true)
     */
    private $f11;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f12", type="text", length=65535, nullable=true)
     */
    private $f12;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f13", type="text", length=65535, nullable=true)
     */
    private $f13;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f14", type="text", length=65535, nullable=true)
     */
    private $f14;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f15", type="text", length=65535, nullable=true)
     */
    private $f15;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f16", type="text", length=65535, nullable=true)
     */
    private $f16;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f17", type="text", length=65535, nullable=true)
     */
    private $f17;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f18", type="text", length=65535, nullable=true)
     */
    private $f18;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f19", type="text", length=65535, nullable=true)
     */
    private $f19;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f20", type="text", length=65535, nullable=true)
     */
    private $f20;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f21", type="text", length=65535, nullable=true)
     */
    private $f21;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f22", type="text", length=65535, nullable=true)
     */
    private $f22;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f23", type="text", length=65535, nullable=true)
     */
    private $f23;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f24", type="text", length=65535, nullable=true)
     */
    private $f24;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f25", type="text", length=65535, nullable=true)
     */
    private $f25;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f26", type="text", length=65535, nullable=true)
     */
    private $f26;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f27", type="text", length=65535, nullable=true)
     */
    private $f27;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f28", type="text", length=65535, nullable=true)
     */
    private $f28;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f29", type="text", length=65535, nullable=true)
     */
    private $f29;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f30", type="text", length=65535, nullable=true)
     */
    private $f30;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f31", type="text", length=65535, nullable=true)
     */
    private $f31;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f32", type="text", length=65535, nullable=true)
     */
    private $f32;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f33", type="text", length=65535, nullable=true)
     */
    private $f33;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f34", type="text", length=65535, nullable=true)
     */
    private $f34;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f35", type="text", length=65535, nullable=true)
     */
    private $f35;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f36", type="text", length=65535, nullable=true)
     */
    private $f36;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f37", type="text", length=65535, nullable=true)
     */
    private $f37;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f38", type="text", length=65535, nullable=true)
     */
    private $f38;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f39", type="text", length=65535, nullable=true)
     */
    private $f39;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f40", type="text", length=65535, nullable=true)
     */
    private $f40;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f41", type="text", length=65535, nullable=true)
     */
    private $f41;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f42", type="text", length=65535, nullable=true)
     */
    private $f42;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f43", type="text", length=65535, nullable=true)
     */
    private $f43;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f44", type="text", length=65535, nullable=true)
     */
    private $f44;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f45", type="text", length=65535, nullable=true)
     */
    private $f45;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f46", type="text", length=65535, nullable=true)
     */
    private $f46;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f47", type="text", length=65535, nullable=true)
     */
    private $f47;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f48", type="text", length=65535, nullable=true)
     */
    private $f48;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f49", type="text", length=65535, nullable=true)
     */
    private $f49;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f50", type="text", length=65535, nullable=true)
     */
    private $f50;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f51", type="text", length=65535, nullable=true)
     */
    private $f51;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f52", type="text", length=65535, nullable=true)
     */
    private $f52;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f53", type="text", length=65535, nullable=true)
     */
    private $f53;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f54", type="text", length=65535, nullable=true)
     */
    private $f54;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f55", type="text", length=65535, nullable=true)
     */
    private $f55;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f56", type="text", length=65535, nullable=true)
     */
    private $f56;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f57", type="text", length=65535, nullable=true)
     */
    private $f57;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f58", type="text", length=65535, nullable=true)
     */
    private $f58;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f59", type="text", length=65535, nullable=true)
     */
    private $f59;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f60", type="text", length=65535, nullable=true)
     */
    private $f60;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f61", type="text", length=65535, nullable=true)
     */
    private $f61;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f62", type="text", length=65535, nullable=true)
     */
    private $f62;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f63", type="text", length=65535, nullable=true)
     */
    private $f63;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f64", type="text", length=65535, nullable=true)
     */
    private $f64;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f65", type="text", length=65535, nullable=true)
     */
    private $f65;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f66", type="text", length=65535, nullable=true)
     */
    private $f66;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f67", type="text", length=65535, nullable=true)
     */
    private $f67;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f68", type="text", length=65535, nullable=true)
     */
    private $f68;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f69", type="text", length=65535, nullable=true)
     */
    private $f69;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f70", type="text", length=65535, nullable=true)
     */
    private $f70;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f71", type="text", length=65535, nullable=true)
     */
    private $f71;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f72", type="text", length=65535, nullable=true)
     */
    private $f72;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f73", type="text", length=65535, nullable=true)
     */
    private $f73;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f74", type="text", length=65535, nullable=true)
     */
    private $f74;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f75", type="text", length=65535, nullable=true)
     */
    private $f75;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f76", type="text", length=65535, nullable=true)
     */
    private $f76;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f77", type="text", length=65535, nullable=true)
     */
    private $f77;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f78", type="text", length=65535, nullable=true)
     */
    private $f78;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f79", type="text", length=65535, nullable=true)
     */
    private $f79;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f80", type="text", length=65535, nullable=true)
     */
    private $f80;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f81", type="text", length=65535, nullable=true)
     */
    private $f81;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f82", type="text", length=65535, nullable=true)
     */
    private $f82;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f83", type="text", length=65535, nullable=true)
     */
    private $f83;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f84", type="text", length=65535, nullable=true)
     */
    private $f84;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f85", type="text", length=65535, nullable=true)
     */
    private $f85;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f86", type="text", length=65535, nullable=true)
     */
    private $f86;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f87", type="text", length=65535, nullable=true)
     */
    private $f87;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f88", type="text", length=65535, nullable=true)
     */
    private $f88;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f89", type="text", length=65535, nullable=true)
     */
    private $f89;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f90", type="text", length=65535, nullable=true)
     */
    private $f90;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f91", type="text", length=65535, nullable=true)
     */
    private $f91;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f92", type="text", length=65535, nullable=true)
     */
    private $f92;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f93", type="text", length=65535, nullable=true)
     */
    private $f93;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f94", type="text", length=65535, nullable=true)
     */
    private $f94;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f95", type="text", length=65535, nullable=true)
     */
    private $f95;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f96", type="text", length=65535, nullable=true)
     */
    private $f96;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f97", type="text", length=65535, nullable=true)
     */
    private $f97;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f98", type="text", length=65535, nullable=true)
     */
    private $f98;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f99", type="text", length=65535, nullable=true)
     */
    private $f99;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f100", type="text", length=65535, nullable=true)
     */
    private $f100;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f101", type="text", length=65535, nullable=true)
     */
    private $f101;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f102", type="text", length=65535, nullable=true)
     */
    private $f102;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f103", type="text", length=65535, nullable=true)
     */
    private $f103;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f104", type="text", length=65535, nullable=true)
     */
    private $f104;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f105", type="text", length=65535, nullable=true)
     */
    private $f105;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f106", type="text", length=65535, nullable=true)
     */
    private $f106;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f107", type="text", length=65535, nullable=true)
     */
    private $f107;

    /**
     * @var string|null
     *
     * @ORM\Column(name="f108", type="text", length=65535, nullable=true)
     */
    private $f108;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getF1(): ?string
    {
        return $this->f1;
    }

    public function setF1(?string $f1): self
    {
        $this->f1 = $f1;

        return $this;
    }

    public function getF2(): ?string
    {
        return $this->f2;
    }

    public function setF2(?string $f2): self
    {
        $this->f2 = $f2;

        return $this;
    }

    public function getF3(): ?string
    {
        return $this->f3;
    }

    public function setF3(?string $f3): self
    {
        $this->f3 = $f3;

        return $this;
    }

    public function getF4(): ?string
    {
        return $this->f4;
    }

    public function setF4(?string $f4): self
    {
        $this->f4 = $f4;

        return $this;
    }

    public function getF5(): ?string
    {
        return $this->f5;
    }

    public function setF5(?string $f5): self
    {
        $this->f5 = $f5;

        return $this;
    }

    public function getF6(): ?string
    {
        return $this->f6;
    }

    public function setF6(?string $f6): self
    {
        $this->f6 = $f6;

        return $this;
    }

    public function getF7(): ?string
    {
        return $this->f7;
    }

    public function setF7(?string $f7): self
    {
        $this->f7 = $f7;

        return $this;
    }

    public function getF8(): ?string
    {
        return $this->f8;
    }

    public function setF8(?string $f8): self
    {
        $this->f8 = $f8;

        return $this;
    }

    public function getF9(): ?string
    {
        return $this->f9;
    }

    public function setF9(?string $f9): self
    {
        $this->f9 = $f9;

        return $this;
    }

    public function getF10(): ?string
    {
        return $this->f10;
    }

    public function setF10(?string $f10): self
    {
        $this->f10 = $f10;

        return $this;
    }

    public function getF11(): ?string
    {
        return $this->f11;
    }

    public function setF11(?string $f11): self
    {
        $this->f11 = $f11;

        return $this;
    }

    public function getF12(): ?string
    {
        return $this->f12;
    }

    public function setF12(?string $f12): self
    {
        $this->f12 = $f12;

        return $this;
    }

    public function getF13(): ?string
    {
        return $this->f13;
    }

    public function setF13(?string $f13): self
    {
        $this->f13 = $f13;

        return $this;
    }

    public function getF14(): ?string
    {
        return $this->f14;
    }

    public function setF14(?string $f14): self
    {
        $this->f14 = $f14;

        return $this;
    }

    public function getF15(): ?string
    {
        return $this->f15;
    }

    public function setF15(?string $f15): self
    {
        $this->f15 = $f15;

        return $this;
    }

    public function getF16(): ?string
    {
        return $this->f16;
    }

    public function setF16(?string $f16): self
    {
        $this->f16 = $f16;

        return $this;
    }

    public function getF17(): ?string
    {
        return $this->f17;
    }

    public function setF17(?string $f17): self
    {
        $this->f17 = $f17;

        return $this;
    }

    public function getF18(): ?string
    {
        return $this->f18;
    }

    public function setF18(?string $f18): self
    {
        $this->f18 = $f18;

        return $this;
    }

    public function getF19(): ?string
    {
        return $this->f19;
    }

    public function setF19(?string $f19): self
    {
        $this->f19 = $f19;

        return $this;
    }

    public function getF20(): ?string
    {
        return $this->f20;
    }

    public function setF20(?string $f20): self
    {
        $this->f20 = $f20;

        return $this;
    }

    public function getF21(): ?string
    {
        return $this->f21;
    }

    public function setF21(?string $f21): self
    {
        $this->f21 = $f21;

        return $this;
    }

    public function getF22(): ?string
    {
        return $this->f22;
    }

    public function setF22(?string $f22): self
    {
        $this->f22 = $f22;

        return $this;
    }

    public function getF23(): ?string
    {
        return $this->f23;
    }

    public function setF23(?string $f23): self
    {
        $this->f23 = $f23;

        return $this;
    }

    public function getF24(): ?string
    {
        return $this->f24;
    }

    public function setF24(?string $f24): self
    {
        $this->f24 = $f24;

        return $this;
    }

    public function getF25(): ?string
    {
        return $this->f25;
    }

    public function setF25(?string $f25): self
    {
        $this->f25 = $f25;

        return $this;
    }

    public function getF26(): ?string
    {
        return $this->f26;
    }

    public function setF26(?string $f26): self
    {
        $this->f26 = $f26;

        return $this;
    }

    public function getF27(): ?string
    {
        return $this->f27;
    }

    public function setF27(?string $f27): self
    {
        $this->f27 = $f27;

        return $this;
    }

    public function getF28(): ?string
    {
        return $this->f28;
    }

    public function setF28(?string $f28): self
    {
        $this->f28 = $f28;

        return $this;
    }

    public function getF29(): ?string
    {
        return $this->f29;
    }

    public function setF29(?string $f29): self
    {
        $this->f29 = $f29;

        return $this;
    }

    public function getF30(): ?string
    {
        return $this->f30;
    }

    public function setF30(?string $f30): self
    {
        $this->f30 = $f30;

        return $this;
    }

    public function getF31(): ?string
    {
        return $this->f31;
    }

    public function setF31(?string $f31): self
    {
        $this->f31 = $f31;

        return $this;
    }

    public function getF32(): ?string
    {
        return $this->f32;
    }

    public function setF32(?string $f32): self
    {
        $this->f32 = $f32;

        return $this;
    }

    public function getF33(): ?string
    {
        return $this->f33;
    }

    public function setF33(?string $f33): self
    {
        $this->f33 = $f33;

        return $this;
    }

    public function getF34(): ?string
    {
        return $this->f34;
    }

    public function setF34(?string $f34): self
    {
        $this->f34 = $f34;

        return $this;
    }

    public function getF35(): ?string
    {
        return $this->f35;
    }

    public function setF35(?string $f35): self
    {
        $this->f35 = $f35;

        return $this;
    }

    public function getF36(): ?string
    {
        return $this->f36;
    }

    public function setF36(?string $f36): self
    {
        $this->f36 = $f36;

        return $this;
    }

    public function getF37(): ?string
    {
        return $this->f37;
    }

    public function setF37(?string $f37): self
    {
        $this->f37 = $f37;

        return $this;
    }

    public function getF38(): ?string
    {
        return $this->f38;
    }

    public function setF38(?string $f38): self
    {
        $this->f38 = $f38;

        return $this;
    }

    public function getF39(): ?string
    {
        return $this->f39;
    }

    public function setF39(?string $f39): self
    {
        $this->f39 = $f39;

        return $this;
    }

    public function getF40(): ?string
    {
        return $this->f40;
    }

    public function setF40(?string $f40): self
    {
        $this->f40 = $f40;

        return $this;
    }

    public function getF41(): ?string
    {
        return $this->f41;
    }

    public function setF41(?string $f41): self
    {
        $this->f41 = $f41;

        return $this;
    }

    public function getF42(): ?string
    {
        return $this->f42;
    }

    public function setF42(?string $f42): self
    {
        $this->f42 = $f42;

        return $this;
    }

    public function getF43(): ?string
    {
        return $this->f43;
    }

    public function setF43(?string $f43): self
    {
        $this->f43 = $f43;

        return $this;
    }

    public function getF44(): ?string
    {
        return $this->f44;
    }

    public function setF44(?string $f44): self
    {
        $this->f44 = $f44;

        return $this;
    }

    public function getF45(): ?string
    {
        return $this->f45;
    }

    public function setF45(?string $f45): self
    {
        $this->f45 = $f45;

        return $this;
    }

    public function getF46(): ?string
    {
        return $this->f46;
    }

    public function setF46(?string $f46): self
    {
        $this->f46 = $f46;

        return $this;
    }

    public function getF47(): ?string
    {
        return $this->f47;
    }

    public function setF47(?string $f47): self
    {
        $this->f47 = $f47;

        return $this;
    }

    public function getF48(): ?string
    {
        return $this->f48;
    }

    public function setF48(?string $f48): self
    {
        $this->f48 = $f48;

        return $this;
    }

    public function getF49(): ?string
    {
        return $this->f49;
    }

    public function setF49(?string $f49): self
    {
        $this->f49 = $f49;

        return $this;
    }

    public function getF50(): ?string
    {
        return $this->f50;
    }

    public function setF50(?string $f50): self
    {
        $this->f50 = $f50;

        return $this;
    }

    public function getF51(): ?string
    {
        return $this->f51;
    }

    public function setF51(?string $f51): self
    {
        $this->f51 = $f51;

        return $this;
    }

    public function getF52(): ?string
    {
        return $this->f52;
    }

    public function setF52(?string $f52): self
    {
        $this->f52 = $f52;

        return $this;
    }

    public function getF53(): ?string
    {
        return $this->f53;
    }

    public function setF53(?string $f53): self
    {
        $this->f53 = $f53;

        return $this;
    }

    public function getF54(): ?string
    {
        return $this->f54;
    }

    public function setF54(?string $f54): self
    {
        $this->f54 = $f54;

        return $this;
    }

    public function getF55(): ?string
    {
        return $this->f55;
    }

    public function setF55(?string $f55): self
    {
        $this->f55 = $f55;

        return $this;
    }

    public function getF56(): ?string
    {
        return $this->f56;
    }

    public function setF56(?string $f56): self
    {
        $this->f56 = $f56;

        return $this;
    }

    public function getF57(): ?string
    {
        return $this->f57;
    }

    public function setF57(?string $f57): self
    {
        $this->f57 = $f57;

        return $this;
    }

    public function getF58(): ?string
    {
        return $this->f58;
    }

    public function setF58(?string $f58): self
    {
        $this->f58 = $f58;

        return $this;
    }

    public function getF59(): ?string
    {
        return $this->f59;
    }

    public function setF59(?string $f59): self
    {
        $this->f59 = $f59;

        return $this;
    }

    public function getF60(): ?string
    {
        return $this->f60;
    }

    public function setF60(?string $f60): self
    {
        $this->f60 = $f60;

        return $this;
    }

    public function getF61(): ?string
    {
        return $this->f61;
    }

    public function setF61(?string $f61): self
    {
        $this->f61 = $f61;

        return $this;
    }

    public function getF62(): ?string
    {
        return $this->f62;
    }

    public function setF62(?string $f62): self
    {
        $this->f62 = $f62;

        return $this;
    }

    public function getF63(): ?string
    {
        return $this->f63;
    }

    public function setF63(?string $f63): self
    {
        $this->f63 = $f63;

        return $this;
    }

    public function getF64(): ?string
    {
        return $this->f64;
    }

    public function setF64(?string $f64): self
    {
        $this->f64 = $f64;

        return $this;
    }

    public function getF65(): ?string
    {
        return $this->f65;
    }

    public function setF65(?string $f65): self
    {
        $this->f65 = $f65;

        return $this;
    }

    public function getF66(): ?string
    {
        return $this->f66;
    }

    public function setF66(?string $f66): self
    {
        $this->f66 = $f66;

        return $this;
    }

    public function getF67(): ?string
    {
        return $this->f67;
    }

    public function setF67(?string $f67): self
    {
        $this->f67 = $f67;

        return $this;
    }

    public function getF68(): ?string
    {
        return $this->f68;
    }

    public function setF68(?string $f68): self
    {
        $this->f68 = $f68;

        return $this;
    }

    public function getF69(): ?string
    {
        return $this->f69;
    }

    public function setF69(?string $f69): self
    {
        $this->f69 = $f69;

        return $this;
    }

    public function getF70(): ?string
    {
        return $this->f70;
    }

    public function setF70(?string $f70): self
    {
        $this->f70 = $f70;

        return $this;
    }

    public function getF71(): ?string
    {
        return $this->f71;
    }

    public function setF71(?string $f71): self
    {
        $this->f71 = $f71;

        return $this;
    }

    public function getF72(): ?string
    {
        return $this->f72;
    }

    public function setF72(?string $f72): self
    {
        $this->f72 = $f72;

        return $this;
    }

    public function getF73(): ?string
    {
        return $this->f73;
    }

    public function setF73(?string $f73): self
    {
        $this->f73 = $f73;

        return $this;
    }

    public function getF74(): ?string
    {
        return $this->f74;
    }

    public function setF74(?string $f74): self
    {
        $this->f74 = $f74;

        return $this;
    }

    public function getF75(): ?string
    {
        return $this->f75;
    }

    public function setF75(?string $f75): self
    {
        $this->f75 = $f75;

        return $this;
    }

    public function getF76(): ?string
    {
        return $this->f76;
    }

    public function setF76(?string $f76): self
    {
        $this->f76 = $f76;

        return $this;
    }

    public function getF77(): ?string
    {
        return $this->f77;
    }

    public function setF77(?string $f77): self
    {
        $this->f77 = $f77;

        return $this;
    }

    public function getF78(): ?string
    {
        return $this->f78;
    }

    public function setF78(?string $f78): self
    {
        $this->f78 = $f78;

        return $this;
    }

    public function getF79(): ?string
    {
        return $this->f79;
    }

    public function setF79(?string $f79): self
    {
        $this->f79 = $f79;

        return $this;
    }

    public function getF80(): ?string
    {
        return $this->f80;
    }

    public function setF80(?string $f80): self
    {
        $this->f80 = $f80;

        return $this;
    }

    public function getF81(): ?string
    {
        return $this->f81;
    }

    public function setF81(?string $f81): self
    {
        $this->f81 = $f81;

        return $this;
    }

    public function getF82(): ?string
    {
        return $this->f82;
    }

    public function setF82(?string $f82): self
    {
        $this->f82 = $f82;

        return $this;
    }

    public function getF83(): ?string
    {
        return $this->f83;
    }

    public function setF83(?string $f83): self
    {
        $this->f83 = $f83;

        return $this;
    }

    public function getF84(): ?string
    {
        return $this->f84;
    }

    public function setF84(?string $f84): self
    {
        $this->f84 = $f84;

        return $this;
    }

    public function getF85(): ?string
    {
        return $this->f85;
    }

    public function setF85(?string $f85): self
    {
        $this->f85 = $f85;

        return $this;
    }

    public function getF86(): ?string
    {
        return $this->f86;
    }

    public function setF86(?string $f86): self
    {
        $this->f86 = $f86;

        return $this;
    }

    public function getF87(): ?string
    {
        return $this->f87;
    }

    public function setF87(?string $f87): self
    {
        $this->f87 = $f87;

        return $this;
    }

    public function getF88(): ?string
    {
        return $this->f88;
    }

    public function setF88(?string $f88): self
    {
        $this->f88 = $f88;

        return $this;
    }

    public function getF89(): ?string
    {
        return $this->f89;
    }

    public function setF89(?string $f89): self
    {
        $this->f89 = $f89;

        return $this;
    }

    public function getF90(): ?string
    {
        return $this->f90;
    }

    public function setF90(?string $f90): self
    {
        $this->f90 = $f90;

        return $this;
    }

    public function getF91(): ?string
    {
        return $this->f91;
    }

    public function setF91(?string $f91): self
    {
        $this->f91 = $f91;

        return $this;
    }

    public function getF92(): ?string
    {
        return $this->f92;
    }

    public function setF92(?string $f92): self
    {
        $this->f92 = $f92;

        return $this;
    }

    public function getF93(): ?string
    {
        return $this->f93;
    }

    public function setF93(?string $f93): self
    {
        $this->f93 = $f93;

        return $this;
    }

    public function getF94(): ?string
    {
        return $this->f94;
    }

    public function setF94(?string $f94): self
    {
        $this->f94 = $f94;

        return $this;
    }

    public function getF95(): ?string
    {
        return $this->f95;
    }

    public function setF95(?string $f95): self
    {
        $this->f95 = $f95;

        return $this;
    }

    public function getF96(): ?string
    {
        return $this->f96;
    }

    public function setF96(?string $f96): self
    {
        $this->f96 = $f96;

        return $this;
    }

    public function getF97(): ?string
    {
        return $this->f97;
    }

    public function setF97(?string $f97): self
    {
        $this->f97 = $f97;

        return $this;
    }

    public function getF98(): ?string
    {
        return $this->f98;
    }

    public function setF98(?string $f98): self
    {
        $this->f98 = $f98;

        return $this;
    }

    public function getF99(): ?string
    {
        return $this->f99;
    }

    public function setF99(?string $f99): self
    {
        $this->f99 = $f99;

        return $this;
    }

    public function getF100(): ?string
    {
        return $this->f100;
    }

    public function setF100(?string $f100): self
    {
        $this->f100 = $f100;

        return $this;
    }

    public function getF101(): ?string
    {
        return $this->f101;
    }

    public function setF101(?string $f101): self
    {
        $this->f101 = $f101;

        return $this;
    }

    public function getF102(): ?string
    {
        return $this->f102;
    }

    public function setF102(?string $f102): self
    {
        $this->f102 = $f102;

        return $this;
    }

    public function getF103(): ?string
    {
        return $this->f103;
    }

    public function setF103(?string $f103): self
    {
        $this->f103 = $f103;

        return $this;
    }

    public function getF104(): ?string
    {
        return $this->f104;
    }

    public function setF104(?string $f104): self
    {
        $this->f104 = $f104;

        return $this;
    }

    public function getF105(): ?string
    {
        return $this->f105;
    }

    public function setF105(?string $f105): self
    {
        $this->f105 = $f105;

        return $this;
    }

    public function getF106(): ?string
    {
        return $this->f106;
    }

    public function setF106(?string $f106): self
    {
        $this->f106 = $f106;

        return $this;
    }

    public function getF107(): ?string
    {
        return $this->f107;
    }

    public function setF107(?string $f107): self
    {
        $this->f107 = $f107;

        return $this;
    }

    public function getF108(): ?string
    {
        return $this->f108;
    }

    public function setF108(?string $f108): self
    {
        $this->f108 = $f108;

        return $this;
    }


}
