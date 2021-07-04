<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OvDopParams
 *
 * @ORM\Table(name="ov_dop_params", indexes={@ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class OvDopParams
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
     * @var int
     *
     * @ORM\Column(name="par06", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par06;

    /**
     * @var string
     *
     * @ORM\Column(name="par06_doc", type="text", length=65535, nullable=false)
     */
    private $par06Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par06_date", type="date", nullable=false)
     */
    private $par06Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par06_plan_date", type="date", nullable=false)
     */
    private $par06PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par07", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par07;

    /**
     * @var string
     *
     * @ORM\Column(name="par07_doc", type="text", length=65535, nullable=false)
     */
    private $par07Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par07_date", type="date", nullable=false)
     */
    private $par07Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par07_plan_date", type="date", nullable=false)
     */
    private $par07PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par08", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par08;

    /**
     * @var string
     *
     * @ORM\Column(name="par08_doc", type="text", length=65535, nullable=false)
     */
    private $par08Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par08_date", type="date", nullable=false)
     */
    private $par08Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par08_plan_date", type="date", nullable=false)
     */
    private $par08PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par09", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par09;

    /**
     * @var string
     *
     * @ORM\Column(name="par09_doc", type="text", length=65535, nullable=false)
     */
    private $par09Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par09_date", type="date", nullable=false)
     */
    private $par09Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par09_plan_date", type="date", nullable=false)
     */
    private $par09PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par10", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par10;

    /**
     * @var string
     *
     * @ORM\Column(name="par10_doc", type="text", length=65535, nullable=false)
     */
    private $par10Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par10_date", type="date", nullable=false)
     */
    private $par10Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par10_plan_date", type="date", nullable=false)
     */
    private $par10PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par11", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par11;

    /**
     * @var string
     *
     * @ORM\Column(name="par11_doc", type="text", length=65535, nullable=false)
     */
    private $par11Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par11_date", type="date", nullable=false)
     */
    private $par11Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par11_plan_date", type="date", nullable=false)
     */
    private $par11PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par12", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par12;

    /**
     * @var string
     *
     * @ORM\Column(name="par12_doc", type="text", length=65535, nullable=false)
     */
    private $par12Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par12_date", type="date", nullable=false)
     */
    private $par12Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par12_plan_date", type="date", nullable=false)
     */
    private $par12PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par13", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par13;

    /**
     * @var string
     *
     * @ORM\Column(name="par13_doc", type="text", length=65535, nullable=false)
     */
    private $par13Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par13_date", type="date", nullable=false)
     */
    private $par13Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par13_plan_date", type="date", nullable=false)
     */
    private $par13PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par14", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par14;

    /**
     * @var string
     *
     * @ORM\Column(name="par14_doc", type="text", length=65535, nullable=false)
     */
    private $par14Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par14_date", type="date", nullable=false)
     */
    private $par14Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par14_plan_date", type="date", nullable=false)
     */
    private $par14PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par15", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par15;

    /**
     * @var string
     *
     * @ORM\Column(name="par15_doc", type="text", length=65535, nullable=false)
     */
    private $par15Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par15_date", type="date", nullable=false)
     */
    private $par15Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par15_plan_date", type="date", nullable=false)
     */
    private $par15PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par16", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par16;

    /**
     * @var string
     *
     * @ORM\Column(name="par16_doc", type="text", length=65535, nullable=false)
     */
    private $par16Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par16_date", type="date", nullable=false)
     */
    private $par16Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par16_plan_date", type="date", nullable=false)
     */
    private $par16PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par17", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par17;

    /**
     * @var string
     *
     * @ORM\Column(name="par17_doc", type="text", length=65535, nullable=false)
     */
    private $par17Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par17_date", type="date", nullable=false)
     */
    private $par17Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par17_plan_date", type="date", nullable=false)
     */
    private $par17PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par18", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par18;

    /**
     * @var string
     *
     * @ORM\Column(name="par18_doc", type="text", length=65535, nullable=false)
     */
    private $par18Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par18_date", type="date", nullable=false)
     */
    private $par18Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par18_plan_date", type="date", nullable=false)
     */
    private $par18PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par19", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par19;

    /**
     * @var string
     *
     * @ORM\Column(name="par19_doc", type="text", length=65535, nullable=false)
     */
    private $par19Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par19_date", type="date", nullable=false)
     */
    private $par19Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par19_plan_date", type="date", nullable=false)
     */
    private $par19PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par20", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par20;

    /**
     * @var string
     *
     * @ORM\Column(name="par20_doc", type="text", length=65535, nullable=false)
     */
    private $par20Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par20_date", type="date", nullable=false)
     */
    private $par20Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par20_plan_date", type="date", nullable=false)
     */
    private $par20PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par21", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par21;

    /**
     * @var string
     *
     * @ORM\Column(name="par21_doc", type="text", length=65535, nullable=false)
     */
    private $par21Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par21_date", type="date", nullable=false)
     */
    private $par21Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par21_plan_date", type="date", nullable=false)
     */
    private $par21PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par22", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par22;

    /**
     * @var string
     *
     * @ORM\Column(name="par22_doc", type="text", length=65535, nullable=false)
     */
    private $par22Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par22_date", type="date", nullable=false)
     */
    private $par22Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par22_plan_date", type="date", nullable=false)
     */
    private $par22PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par23", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par23;

    /**
     * @var string
     *
     * @ORM\Column(name="par23_doc", type="text", length=65535, nullable=false)
     */
    private $par23Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par23_date", type="date", nullable=false)
     */
    private $par23Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par23_plan_date", type="date", nullable=false)
     */
    private $par23PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par24", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par24;

    /**
     * @var string
     *
     * @ORM\Column(name="par24_doc", type="text", length=65535, nullable=false)
     */
    private $par24Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par24_date", type="date", nullable=false)
     */
    private $par24Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par24_plan_date", type="date", nullable=false)
     */
    private $par24PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par25", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par25;

    /**
     * @var string
     *
     * @ORM\Column(name="par25_doc", type="text", length=65535, nullable=false)
     */
    private $par25Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par25_date", type="date", nullable=false)
     */
    private $par25Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par25_plan_date", type="date", nullable=false)
     */
    private $par25PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par26", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par26;

    /**
     * @var string
     *
     * @ORM\Column(name="par26_doc", type="text", length=65535, nullable=false)
     */
    private $par26Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par26_date", type="date", nullable=false)
     */
    private $par26Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par26_plan_date", type="date", nullable=false)
     */
    private $par26PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par27", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par27;

    /**
     * @var string
     *
     * @ORM\Column(name="par27_doc", type="text", length=65535, nullable=false)
     */
    private $par27Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par27_date", type="date", nullable=false)
     */
    private $par27Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par27_plan_date", type="date", nullable=false)
     */
    private $par27PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par28", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par28;

    /**
     * @var string
     *
     * @ORM\Column(name="par28_doc", type="text", length=65535, nullable=false)
     */
    private $par28Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par28_date", type="date", nullable=false)
     */
    private $par28Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par28_plan_date", type="date", nullable=false)
     */
    private $par28PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par29", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par29;

    /**
     * @var string
     *
     * @ORM\Column(name="par29_doc", type="text", length=65535, nullable=false)
     */
    private $par29Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par29_date", type="date", nullable=false)
     */
    private $par29Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par29_plan_date", type="date", nullable=false)
     */
    private $par29PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par30", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par30;

    /**
     * @var string
     *
     * @ORM\Column(name="par30_doc", type="text", length=65535, nullable=false)
     */
    private $par30Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par30_date", type="date", nullable=false)
     */
    private $par30Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par30_plan_date", type="date", nullable=false)
     */
    private $par30PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par31", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par31;

    /**
     * @var string
     *
     * @ORM\Column(name="par31_doc", type="text", length=65535, nullable=false)
     */
    private $par31Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par31_date", type="date", nullable=false)
     */
    private $par31Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par31_plan_date", type="date", nullable=false)
     */
    private $par31PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par32", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par32;

    /**
     * @var string
     *
     * @ORM\Column(name="par32_doc", type="text", length=65535, nullable=false)
     */
    private $par32Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par32_date", type="date", nullable=false)
     */
    private $par32Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par32_plan_date", type="date", nullable=false)
     */
    private $par32PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par33", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par33;

    /**
     * @var string
     *
     * @ORM\Column(name="par33_doc", type="text", length=65535, nullable=false)
     */
    private $par33Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par33_date", type="date", nullable=false)
     */
    private $par33Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par33_plan_date", type="date", nullable=false)
     */
    private $par33PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par34", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par34;

    /**
     * @var string
     *
     * @ORM\Column(name="par34_doc", type="text", length=65535, nullable=false)
     */
    private $par34Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par34_date", type="date", nullable=false)
     */
    private $par34Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par34_plan_date", type="date", nullable=false)
     */
    private $par34PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par35", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par35;

    /**
     * @var string
     *
     * @ORM\Column(name="par35_doc", type="text", length=65535, nullable=false)
     */
    private $par35Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par35_date", type="date", nullable=false)
     */
    private $par35Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par35_plan_date", type="date", nullable=false)
     */
    private $par35PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par36", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par36;

    /**
     * @var string
     *
     * @ORM\Column(name="par36_doc", type="text", length=65535, nullable=false)
     */
    private $par36Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par36_date", type="date", nullable=false)
     */
    private $par36Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par36_plan_date", type="date", nullable=false)
     */
    private $par36PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par37", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par37;

    /**
     * @var string
     *
     * @ORM\Column(name="par37_doc", type="text", length=65535, nullable=false)
     */
    private $par37Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par37_date", type="date", nullable=false)
     */
    private $par37Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par37_plan_date", type="date", nullable=false)
     */
    private $par37PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par38", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par38;

    /**
     * @var string
     *
     * @ORM\Column(name="par38_doc", type="text", length=65535, nullable=false)
     */
    private $par38Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par38_date", type="date", nullable=false)
     */
    private $par38Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par38_plan_date", type="date", nullable=false)
     */
    private $par38PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par39", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par39;

    /**
     * @var string
     *
     * @ORM\Column(name="par39_doc", type="text", length=65535, nullable=false)
     */
    private $par39Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par39_date", type="date", nullable=false)
     */
    private $par39Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par39_plan_date", type="date", nullable=false)
     */
    private $par39PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par40", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par40;

    /**
     * @var string
     *
     * @ORM\Column(name="par40_doc", type="text", length=65535, nullable=false)
     */
    private $par40Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par40_date", type="date", nullable=false)
     */
    private $par40Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par40_plan_date", type="date", nullable=false)
     */
    private $par40PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par41", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par41;

    /**
     * @var string
     *
     * @ORM\Column(name="par41_doc", type="text", length=65535, nullable=false)
     */
    private $par41Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par41_date", type="date", nullable=false)
     */
    private $par41Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par41_plan_date", type="date", nullable=false)
     */
    private $par41PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par42", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par42;

    /**
     * @var string
     *
     * @ORM\Column(name="par42_doc", type="text", length=65535, nullable=false)
     */
    private $par42Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par42_date", type="date", nullable=false)
     */
    private $par42Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par42_plan_date", type="date", nullable=false)
     */
    private $par42PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par43", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par43;

    /**
     * @var string
     *
     * @ORM\Column(name="par43_doc", type="text", length=65535, nullable=false)
     */
    private $par43Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par43_date", type="date", nullable=false)
     */
    private $par43Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par43_plan_date", type="date", nullable=false)
     */
    private $par43PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par44", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par44;

    /**
     * @var string
     *
     * @ORM\Column(name="par44_doc", type="text", length=65535, nullable=false)
     */
    private $par44Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par44_date", type="date", nullable=false)
     */
    private $par44Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par44_plan_date", type="date", nullable=false)
     */
    private $par44PlanDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Prim", type="text", length=65535, nullable=false)
     */
    private $prim;

    /**
     * @var int
     *
     * @ORM\Column(name="ready", type="integer", nullable=false)
     */
    private $ready = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="par45", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par45;

    /**
     * @var string
     *
     * @ORM\Column(name="par45_doc", type="text", length=65535, nullable=false)
     */
    private $par45Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par45_date", type="date", nullable=false)
     */
    private $par45Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par45_plan_date", type="date", nullable=false)
     */
    private $par45PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par46", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par46;

    /**
     * @var string
     *
     * @ORM\Column(name="par46_doc", type="text", length=65535, nullable=false)
     */
    private $par46Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par46_date", type="date", nullable=false)
     */
    private $par46Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par46_plan_date", type="date", nullable=false)
     */
    private $par46PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par47", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par47;

    /**
     * @var string
     *
     * @ORM\Column(name="par47_doc", type="text", length=65535, nullable=false)
     */
    private $par47Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par47_date", type="date", nullable=false)
     */
    private $par47Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par47_plan_date", type="date", nullable=false)
     */
    private $par47PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par48", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par48;

    /**
     * @var string
     *
     * @ORM\Column(name="par48_doc", type="text", length=65535, nullable=false)
     */
    private $par48Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par48_date", type="date", nullable=false)
     */
    private $par48Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par48_plan_date", type="date", nullable=false)
     */
    private $par48PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par49", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par49;

    /**
     * @var string
     *
     * @ORM\Column(name="par49_doc", type="text", length=65535, nullable=false)
     */
    private $par49Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par49_date", type="date", nullable=false)
     */
    private $par49Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par49_plan_date", type="date", nullable=false)
     */
    private $par49PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par50", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par50;

    /**
     * @var string
     *
     * @ORM\Column(name="par50_doc", type="text", length=65535, nullable=false)
     */
    private $par50Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par50_date", type="date", nullable=false)
     */
    private $par50Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par50_plan_date", type="date", nullable=false)
     */
    private $par50PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par51", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par51;

    /**
     * @var string
     *
     * @ORM\Column(name="par51_doc", type="text", length=65535, nullable=false)
     */
    private $par51Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par51_date", type="date", nullable=false)
     */
    private $par51Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par51_plan_date", type="date", nullable=false)
     */
    private $par51PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par52", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par52;

    /**
     * @var string
     *
     * @ORM\Column(name="par52_doc", type="text", length=65535, nullable=false)
     */
    private $par52Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par52_date", type="date", nullable=false)
     */
    private $par52Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par52_plan_date", type="date", nullable=false)
     */
    private $par52PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par53", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par53;

    /**
     * @var string
     *
     * @ORM\Column(name="par53_doc", type="text", length=65535, nullable=false)
     */
    private $par53Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par53_date", type="date", nullable=false)
     */
    private $par53Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par53_plan_date", type="date", nullable=false)
     */
    private $par53PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par54", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par54;

    /**
     * @var string
     *
     * @ORM\Column(name="par54_doc", type="text", length=65535, nullable=false)
     */
    private $par54Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par54_date", type="date", nullable=false)
     */
    private $par54Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par54_plan_date", type="date", nullable=false)
     */
    private $par54PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par55", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par55;

    /**
     * @var string
     *
     * @ORM\Column(name="par55_doc", type="text", length=65535, nullable=false)
     */
    private $par55Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par55_date", type="date", nullable=false)
     */
    private $par55Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par55_plan_date", type="date", nullable=false)
     */
    private $par55PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par56", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par56;

    /**
     * @var string
     *
     * @ORM\Column(name="par56_doc", type="text", length=65535, nullable=false)
     */
    private $par56Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par56_date", type="date", nullable=false)
     */
    private $par56Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par56_plan_date", type="date", nullable=false)
     */
    private $par56PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par57", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par57;

    /**
     * @var string
     *
     * @ORM\Column(name="par57_doc", type="text", length=65535, nullable=false)
     */
    private $par57Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par57_date", type="date", nullable=false)
     */
    private $par57Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par57_plan_date", type="date", nullable=false)
     */
    private $par57PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par58", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par58;

    /**
     * @var string
     *
     * @ORM\Column(name="par58_doc", type="text", length=65535, nullable=false)
     */
    private $par58Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par58_date", type="date", nullable=false)
     */
    private $par58Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par58_plan_date", type="date", nullable=false)
     */
    private $par58PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par59", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par59;

    /**
     * @var string
     *
     * @ORM\Column(name="par59_doc", type="text", length=65535, nullable=false)
     */
    private $par59Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par59_date", type="date", nullable=false)
     */
    private $par59Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par59_plan_date", type="date", nullable=false)
     */
    private $par59PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par60", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par60;

    /**
     * @var string
     *
     * @ORM\Column(name="par60_doc", type="text", length=65535, nullable=false)
     */
    private $par60Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par60_date", type="date", nullable=false)
     */
    private $par60Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par60_plan_date", type="date", nullable=false)
     */
    private $par60PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par61", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par61;

    /**
     * @var string
     *
     * @ORM\Column(name="par61_doc", type="text", length=65535, nullable=false)
     */
    private $par61Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par61_date", type="date", nullable=false)
     */
    private $par61Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par61_plan_date", type="date", nullable=false)
     */
    private $par61PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par62", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par62;

    /**
     * @var string
     *
     * @ORM\Column(name="par62_doc", type="text", length=65535, nullable=false)
     */
    private $par62Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par62_date", type="date", nullable=false)
     */
    private $par62Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par62_plan_date", type="date", nullable=false)
     */
    private $par62PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par63", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par63;

    /**
     * @var string
     *
     * @ORM\Column(name="par63_doc", type="text", length=65535, nullable=false)
     */
    private $par63Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par63_date", type="date", nullable=false)
     */
    private $par63Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par63_plan_date", type="date", nullable=false)
     */
    private $par63PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par64", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par64;

    /**
     * @var string
     *
     * @ORM\Column(name="par64_doc", type="text", length=65535, nullable=false)
     */
    private $par64Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par64_date", type="date", nullable=false)
     */
    private $par64Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par64_plan_date", type="date", nullable=false)
     */
    private $par64PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par65", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par65;

    /**
     * @var string
     *
     * @ORM\Column(name="par65_doc", type="text", length=65535, nullable=false)
     */
    private $par65Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par65_date", type="date", nullable=false)
     */
    private $par65Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par65_plan_date", type="date", nullable=false)
     */
    private $par65PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par66", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par66;

    /**
     * @var string
     *
     * @ORM\Column(name="par66_doc", type="text", length=65535, nullable=false)
     */
    private $par66Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par66_date", type="date", nullable=false)
     */
    private $par66Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par66_plan_date", type="date", nullable=false)
     */
    private $par66PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par67", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par67;

    /**
     * @var string
     *
     * @ORM\Column(name="par67_doc", type="text", length=65535, nullable=false)
     */
    private $par67Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par67_date", type="date", nullable=false)
     */
    private $par67Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par67_plan_date", type="date", nullable=false)
     */
    private $par67PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par68", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par68;

    /**
     * @var string
     *
     * @ORM\Column(name="par68_doc", type="text", length=65535, nullable=false)
     */
    private $par68Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par68_date", type="date", nullable=false)
     */
    private $par68Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par68_plan_date", type="date", nullable=false)
     */
    private $par68PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par69", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par69;

    /**
     * @var string
     *
     * @ORM\Column(name="par69_doc", type="text", length=65535, nullable=false)
     */
    private $par69Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par69_date", type="date", nullable=false)
     */
    private $par69Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par69_plan_date", type="date", nullable=false)
     */
    private $par69PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par70", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par70;

    /**
     * @var string
     *
     * @ORM\Column(name="par70_doc", type="text", length=65535, nullable=false)
     */
    private $par70Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par70_date", type="date", nullable=false)
     */
    private $par70Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par70_plan_date", type="date", nullable=false)
     */
    private $par70PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par71", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par71;

    /**
     * @var string
     *
     * @ORM\Column(name="par71_doc", type="text", length=65535, nullable=false)
     */
    private $par71Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par71_date", type="date", nullable=false)
     */
    private $par71Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par71_plan_date", type="date", nullable=false)
     */
    private $par71PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par72", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par72;

    /**
     * @var string
     *
     * @ORM\Column(name="par72_doc", type="text", length=65535, nullable=false)
     */
    private $par72Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par72_date", type="date", nullable=false)
     */
    private $par72Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par72_plan_date", type="date", nullable=false)
     */
    private $par72PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par73", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par73;

    /**
     * @var string
     *
     * @ORM\Column(name="par73_doc", type="text", length=65535, nullable=false)
     */
    private $par73Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par73_date", type="date", nullable=false)
     */
    private $par73Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par73_plan_date", type="date", nullable=false)
     */
    private $par73PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par74", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par74;

    /**
     * @var string
     *
     * @ORM\Column(name="par74_doc", type="text", length=65535, nullable=false)
     */
    private $par74Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par74_date", type="date", nullable=false)
     */
    private $par74Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par74_plan_date", type="date", nullable=false)
     */
    private $par74PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par75", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par75;

    /**
     * @var string
     *
     * @ORM\Column(name="par75_doc", type="text", length=65535, nullable=false)
     */
    private $par75Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par75_date", type="date", nullable=false)
     */
    private $par75Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par75_plan_date", type="date", nullable=false)
     */
    private $par75PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par76", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par76;

    /**
     * @var string
     *
     * @ORM\Column(name="par76_doc", type="text", length=65535, nullable=false)
     */
    private $par76Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par76_date", type="date", nullable=false)
     */
    private $par76Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par76_plan_date", type="date", nullable=false)
     */
    private $par76PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par77", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par77;

    /**
     * @var string
     *
     * @ORM\Column(name="par77_doc", type="text", length=65535, nullable=false)
     */
    private $par77Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par77_date", type="date", nullable=false)
     */
    private $par77Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par77_plan_date", type="date", nullable=false)
     */
    private $par77PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par78", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par78;

    /**
     * @var string
     *
     * @ORM\Column(name="par78_doc", type="text", length=65535, nullable=false)
     */
    private $par78Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par78_date", type="date", nullable=false)
     */
    private $par78Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par78_plan_date", type="date", nullable=false)
     */
    private $par78PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par79", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par79;

    /**
     * @var string
     *
     * @ORM\Column(name="par79_doc", type="text", length=65535, nullable=false)
     */
    private $par79Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par79_date", type="date", nullable=false)
     */
    private $par79Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par79_plan_date", type="date", nullable=false)
     */
    private $par79PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par80", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par80;

    /**
     * @var string
     *
     * @ORM\Column(name="par80_doc", type="text", length=65535, nullable=false)
     */
    private $par80Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par80_date", type="date", nullable=false)
     */
    private $par80Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par80_plan_date", type="date", nullable=false)
     */
    private $par80PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par81", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par81;

    /**
     * @var string
     *
     * @ORM\Column(name="par81_doc", type="text", length=65535, nullable=false)
     */
    private $par81Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par81_date", type="date", nullable=false)
     */
    private $par81Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par81_plan_date", type="date", nullable=false)
     */
    private $par81PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par82", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par82;

    /**
     * @var string
     *
     * @ORM\Column(name="par82_doc", type="text", length=65535, nullable=false)
     */
    private $par82Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par82_date", type="date", nullable=false)
     */
    private $par82Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par82_plan_date", type="date", nullable=false)
     */
    private $par82PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par83", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par83;

    /**
     * @var string
     *
     * @ORM\Column(name="par83_doc", type="text", length=65535, nullable=false)
     */
    private $par83Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par83_date", type="date", nullable=false)
     */
    private $par83Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par83_plan_date", type="date", nullable=false)
     */
    private $par83PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par84", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par84;

    /**
     * @var string
     *
     * @ORM\Column(name="par84_doc", type="text", length=65535, nullable=false)
     */
    private $par84Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par84_date", type="date", nullable=false)
     */
    private $par84Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par84_plan_date", type="date", nullable=false)
     */
    private $par84PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par85", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par85;

    /**
     * @var string
     *
     * @ORM\Column(name="par85_doc", type="text", length=65535, nullable=false)
     */
    private $par85Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par85_date", type="date", nullable=false)
     */
    private $par85Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par85_plan_date", type="date", nullable=false)
     */
    private $par85PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par86", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par86;

    /**
     * @var string
     *
     * @ORM\Column(name="par86_doc", type="text", length=65535, nullable=false)
     */
    private $par86Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par86_date", type="date", nullable=false)
     */
    private $par86Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par86_plan_date", type="date", nullable=false)
     */
    private $par86PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par87", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par87;

    /**
     * @var string
     *
     * @ORM\Column(name="par87_doc", type="text", length=65535, nullable=false)
     */
    private $par87Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par87_date", type="date", nullable=false)
     */
    private $par87Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par87_plan_date", type="date", nullable=false)
     */
    private $par87PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par88", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par88;

    /**
     * @var string
     *
     * @ORM\Column(name="par88_doc", type="text", length=65535, nullable=false)
     */
    private $par88Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par88_date", type="date", nullable=false)
     */
    private $par88Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par88_plan_date", type="date", nullable=false)
     */
    private $par88PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par89", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par89;

    /**
     * @var string
     *
     * @ORM\Column(name="par89_doc", type="text", length=65535, nullable=false)
     */
    private $par89Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par89_date", type="date", nullable=false)
     */
    private $par89Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par89_plan_date", type="date", nullable=false)
     */
    private $par89PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par90", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par90;

    /**
     * @var string
     *
     * @ORM\Column(name="par90_doc", type="text", length=65535, nullable=false)
     */
    private $par90Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par90_date", type="date", nullable=false)
     */
    private $par90Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par90_plan_date", type="date", nullable=false)
     */
    private $par90PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par91", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par91;

    /**
     * @var string
     *
     * @ORM\Column(name="par91_doc", type="text", length=65535, nullable=false)
     */
    private $par91Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par91_date", type="date", nullable=false)
     */
    private $par91Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par91_plan_date", type="date", nullable=false)
     */
    private $par91PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par92", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par92;

    /**
     * @var string
     *
     * @ORM\Column(name="par92_doc", type="text", length=65535, nullable=false)
     */
    private $par92Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par92_date", type="date", nullable=false)
     */
    private $par92Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par92_plan_date", type="date", nullable=false)
     */
    private $par92PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par93", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par93;

    /**
     * @var string
     *
     * @ORM\Column(name="par93_doc", type="text", length=65535, nullable=false)
     */
    private $par93Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par93_date", type="date", nullable=false)
     */
    private $par93Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par93_plan_date", type="date", nullable=false)
     */
    private $par93PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par94", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par94;

    /**
     * @var string
     *
     * @ORM\Column(name="par94_doc", type="text", length=65535, nullable=false)
     */
    private $par94Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par94_date", type="date", nullable=false)
     */
    private $par94Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par94_plan_date", type="date", nullable=false)
     */
    private $par94PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par95", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par95;

    /**
     * @var string
     *
     * @ORM\Column(name="par95_doc", type="text", length=65535, nullable=false)
     */
    private $par95Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par95_date", type="date", nullable=false)
     */
    private $par95Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par95_plan_date", type="date", nullable=false)
     */
    private $par95PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par96", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par96;

    /**
     * @var string
     *
     * @ORM\Column(name="par96_doc", type="text", length=65535, nullable=false)
     */
    private $par96Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par96_date", type="date", nullable=false)
     */
    private $par96Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par96_plan_date", type="date", nullable=false)
     */
    private $par96PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par97", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par97;

    /**
     * @var string
     *
     * @ORM\Column(name="par97_doc", type="text", length=65535, nullable=false)
     */
    private $par97Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par97_date", type="date", nullable=false)
     */
    private $par97Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par97_plan_date", type="date", nullable=false)
     */
    private $par97PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par98", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par98;

    /**
     * @var string
     *
     * @ORM\Column(name="par98_doc", type="text", length=65535, nullable=false)
     */
    private $par98Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par98_date", type="date", nullable=false)
     */
    private $par98Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par98_plan_date", type="date", nullable=false)
     */
    private $par98PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par99", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par99;

    /**
     * @var string
     *
     * @ORM\Column(name="par99_doc", type="text", length=65535, nullable=false)
     */
    private $par99Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par99_date", type="date", nullable=false)
     */
    private $par99Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par99_plan_date", type="date", nullable=false)
     */
    private $par99PlanDate;

    /**
     * @var int
     *
     * @ORM\Column(name="par100", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $par100;

    /**
     * @var string
     *
     * @ORM\Column(name="par100_doc", type="text", length=65535, nullable=false)
     */
    private $par100Doc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par100_date", type="date", nullable=false)
     */
    private $par100Date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="par100_plan_date", type="date", nullable=false)
     */
    private $par100PlanDate;

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

    public function getPar06(): ?int
    {
        return $this->par06;
    }

    public function setPar06(int $par06): self
    {
        $this->par06 = $par06;

        return $this;
    }

    public function getPar06Doc(): ?string
    {
        return $this->par06Doc;
    }

    public function setPar06Doc(string $par06Doc): self
    {
        $this->par06Doc = $par06Doc;

        return $this;
    }

    public function getPar06Date(): ?\DateTimeInterface
    {
        return $this->par06Date;
    }

    public function setPar06Date(\DateTimeInterface $par06Date): self
    {
        $this->par06Date = $par06Date;

        return $this;
    }

    public function getPar06PlanDate(): ?\DateTimeInterface
    {
        return $this->par06PlanDate;
    }

    public function setPar06PlanDate(\DateTimeInterface $par06PlanDate): self
    {
        $this->par06PlanDate = $par06PlanDate;

        return $this;
    }

    public function getPar07(): ?int
    {
        return $this->par07;
    }

    public function setPar07(int $par07): self
    {
        $this->par07 = $par07;

        return $this;
    }

    public function getPar07Doc(): ?string
    {
        return $this->par07Doc;
    }

    public function setPar07Doc(string $par07Doc): self
    {
        $this->par07Doc = $par07Doc;

        return $this;
    }

    public function getPar07Date(): ?\DateTimeInterface
    {
        return $this->par07Date;
    }

    public function setPar07Date(\DateTimeInterface $par07Date): self
    {
        $this->par07Date = $par07Date;

        return $this;
    }

    public function getPar07PlanDate(): ?\DateTimeInterface
    {
        return $this->par07PlanDate;
    }

    public function setPar07PlanDate(\DateTimeInterface $par07PlanDate): self
    {
        $this->par07PlanDate = $par07PlanDate;

        return $this;
    }

    public function getPar08(): ?int
    {
        return $this->par08;
    }

    public function setPar08(int $par08): self
    {
        $this->par08 = $par08;

        return $this;
    }

    public function getPar08Doc(): ?string
    {
        return $this->par08Doc;
    }

    public function setPar08Doc(string $par08Doc): self
    {
        $this->par08Doc = $par08Doc;

        return $this;
    }

    public function getPar08Date(): ?\DateTimeInterface
    {
        return $this->par08Date;
    }

    public function setPar08Date(\DateTimeInterface $par08Date): self
    {
        $this->par08Date = $par08Date;

        return $this;
    }

    public function getPar08PlanDate(): ?\DateTimeInterface
    {
        return $this->par08PlanDate;
    }

    public function setPar08PlanDate(\DateTimeInterface $par08PlanDate): self
    {
        $this->par08PlanDate = $par08PlanDate;

        return $this;
    }

    public function getPar09(): ?int
    {
        return $this->par09;
    }

    public function setPar09(int $par09): self
    {
        $this->par09 = $par09;

        return $this;
    }

    public function getPar09Doc(): ?string
    {
        return $this->par09Doc;
    }

    public function setPar09Doc(string $par09Doc): self
    {
        $this->par09Doc = $par09Doc;

        return $this;
    }

    public function getPar09Date(): ?\DateTimeInterface
    {
        return $this->par09Date;
    }

    public function setPar09Date(\DateTimeInterface $par09Date): self
    {
        $this->par09Date = $par09Date;

        return $this;
    }

    public function getPar09PlanDate(): ?\DateTimeInterface
    {
        return $this->par09PlanDate;
    }

    public function setPar09PlanDate(\DateTimeInterface $par09PlanDate): self
    {
        $this->par09PlanDate = $par09PlanDate;

        return $this;
    }

    public function getPar10(): ?int
    {
        return $this->par10;
    }

    public function setPar10(int $par10): self
    {
        $this->par10 = $par10;

        return $this;
    }

    public function getPar10Doc(): ?string
    {
        return $this->par10Doc;
    }

    public function setPar10Doc(string $par10Doc): self
    {
        $this->par10Doc = $par10Doc;

        return $this;
    }

    public function getPar10Date(): ?\DateTimeInterface
    {
        return $this->par10Date;
    }

    public function setPar10Date(\DateTimeInterface $par10Date): self
    {
        $this->par10Date = $par10Date;

        return $this;
    }

    public function getPar10PlanDate(): ?\DateTimeInterface
    {
        return $this->par10PlanDate;
    }

    public function setPar10PlanDate(\DateTimeInterface $par10PlanDate): self
    {
        $this->par10PlanDate = $par10PlanDate;

        return $this;
    }

    public function getPar11(): ?int
    {
        return $this->par11;
    }

    public function setPar11(int $par11): self
    {
        $this->par11 = $par11;

        return $this;
    }

    public function getPar11Doc(): ?string
    {
        return $this->par11Doc;
    }

    public function setPar11Doc(string $par11Doc): self
    {
        $this->par11Doc = $par11Doc;

        return $this;
    }

    public function getPar11Date(): ?\DateTimeInterface
    {
        return $this->par11Date;
    }

    public function setPar11Date(\DateTimeInterface $par11Date): self
    {
        $this->par11Date = $par11Date;

        return $this;
    }

    public function getPar11PlanDate(): ?\DateTimeInterface
    {
        return $this->par11PlanDate;
    }

    public function setPar11PlanDate(\DateTimeInterface $par11PlanDate): self
    {
        $this->par11PlanDate = $par11PlanDate;

        return $this;
    }

    public function getPar12(): ?int
    {
        return $this->par12;
    }

    public function setPar12(int $par12): self
    {
        $this->par12 = $par12;

        return $this;
    }

    public function getPar12Doc(): ?string
    {
        return $this->par12Doc;
    }

    public function setPar12Doc(string $par12Doc): self
    {
        $this->par12Doc = $par12Doc;

        return $this;
    }

    public function getPar12Date(): ?\DateTimeInterface
    {
        return $this->par12Date;
    }

    public function setPar12Date(\DateTimeInterface $par12Date): self
    {
        $this->par12Date = $par12Date;

        return $this;
    }

    public function getPar12PlanDate(): ?\DateTimeInterface
    {
        return $this->par12PlanDate;
    }

    public function setPar12PlanDate(\DateTimeInterface $par12PlanDate): self
    {
        $this->par12PlanDate = $par12PlanDate;

        return $this;
    }

    public function getPar13(): ?int
    {
        return $this->par13;
    }

    public function setPar13(int $par13): self
    {
        $this->par13 = $par13;

        return $this;
    }

    public function getPar13Doc(): ?string
    {
        return $this->par13Doc;
    }

    public function setPar13Doc(string $par13Doc): self
    {
        $this->par13Doc = $par13Doc;

        return $this;
    }

    public function getPar13Date(): ?\DateTimeInterface
    {
        return $this->par13Date;
    }

    public function setPar13Date(\DateTimeInterface $par13Date): self
    {
        $this->par13Date = $par13Date;

        return $this;
    }

    public function getPar13PlanDate(): ?\DateTimeInterface
    {
        return $this->par13PlanDate;
    }

    public function setPar13PlanDate(\DateTimeInterface $par13PlanDate): self
    {
        $this->par13PlanDate = $par13PlanDate;

        return $this;
    }

    public function getPar14(): ?int
    {
        return $this->par14;
    }

    public function setPar14(int $par14): self
    {
        $this->par14 = $par14;

        return $this;
    }

    public function getPar14Doc(): ?string
    {
        return $this->par14Doc;
    }

    public function setPar14Doc(string $par14Doc): self
    {
        $this->par14Doc = $par14Doc;

        return $this;
    }

    public function getPar14Date(): ?\DateTimeInterface
    {
        return $this->par14Date;
    }

    public function setPar14Date(\DateTimeInterface $par14Date): self
    {
        $this->par14Date = $par14Date;

        return $this;
    }

    public function getPar14PlanDate(): ?\DateTimeInterface
    {
        return $this->par14PlanDate;
    }

    public function setPar14PlanDate(\DateTimeInterface $par14PlanDate): self
    {
        $this->par14PlanDate = $par14PlanDate;

        return $this;
    }

    public function getPar15(): ?int
    {
        return $this->par15;
    }

    public function setPar15(int $par15): self
    {
        $this->par15 = $par15;

        return $this;
    }

    public function getPar15Doc(): ?string
    {
        return $this->par15Doc;
    }

    public function setPar15Doc(string $par15Doc): self
    {
        $this->par15Doc = $par15Doc;

        return $this;
    }

    public function getPar15Date(): ?\DateTimeInterface
    {
        return $this->par15Date;
    }

    public function setPar15Date(\DateTimeInterface $par15Date): self
    {
        $this->par15Date = $par15Date;

        return $this;
    }

    public function getPar15PlanDate(): ?\DateTimeInterface
    {
        return $this->par15PlanDate;
    }

    public function setPar15PlanDate(\DateTimeInterface $par15PlanDate): self
    {
        $this->par15PlanDate = $par15PlanDate;

        return $this;
    }

    public function getPar16(): ?int
    {
        return $this->par16;
    }

    public function setPar16(int $par16): self
    {
        $this->par16 = $par16;

        return $this;
    }

    public function getPar16Doc(): ?string
    {
        return $this->par16Doc;
    }

    public function setPar16Doc(string $par16Doc): self
    {
        $this->par16Doc = $par16Doc;

        return $this;
    }

    public function getPar16Date(): ?\DateTimeInterface
    {
        return $this->par16Date;
    }

    public function setPar16Date(\DateTimeInterface $par16Date): self
    {
        $this->par16Date = $par16Date;

        return $this;
    }

    public function getPar16PlanDate(): ?\DateTimeInterface
    {
        return $this->par16PlanDate;
    }

    public function setPar16PlanDate(\DateTimeInterface $par16PlanDate): self
    {
        $this->par16PlanDate = $par16PlanDate;

        return $this;
    }

    public function getPar17(): ?int
    {
        return $this->par17;
    }

    public function setPar17(int $par17): self
    {
        $this->par17 = $par17;

        return $this;
    }

    public function getPar17Doc(): ?string
    {
        return $this->par17Doc;
    }

    public function setPar17Doc(string $par17Doc): self
    {
        $this->par17Doc = $par17Doc;

        return $this;
    }

    public function getPar17Date(): ?\DateTimeInterface
    {
        return $this->par17Date;
    }

    public function setPar17Date(\DateTimeInterface $par17Date): self
    {
        $this->par17Date = $par17Date;

        return $this;
    }

    public function getPar17PlanDate(): ?\DateTimeInterface
    {
        return $this->par17PlanDate;
    }

    public function setPar17PlanDate(\DateTimeInterface $par17PlanDate): self
    {
        $this->par17PlanDate = $par17PlanDate;

        return $this;
    }

    public function getPar18(): ?int
    {
        return $this->par18;
    }

    public function setPar18(int $par18): self
    {
        $this->par18 = $par18;

        return $this;
    }

    public function getPar18Doc(): ?string
    {
        return $this->par18Doc;
    }

    public function setPar18Doc(string $par18Doc): self
    {
        $this->par18Doc = $par18Doc;

        return $this;
    }

    public function getPar18Date(): ?\DateTimeInterface
    {
        return $this->par18Date;
    }

    public function setPar18Date(\DateTimeInterface $par18Date): self
    {
        $this->par18Date = $par18Date;

        return $this;
    }

    public function getPar18PlanDate(): ?\DateTimeInterface
    {
        return $this->par18PlanDate;
    }

    public function setPar18PlanDate(\DateTimeInterface $par18PlanDate): self
    {
        $this->par18PlanDate = $par18PlanDate;

        return $this;
    }

    public function getPar19(): ?int
    {
        return $this->par19;
    }

    public function setPar19(int $par19): self
    {
        $this->par19 = $par19;

        return $this;
    }

    public function getPar19Doc(): ?string
    {
        return $this->par19Doc;
    }

    public function setPar19Doc(string $par19Doc): self
    {
        $this->par19Doc = $par19Doc;

        return $this;
    }

    public function getPar19Date(): ?\DateTimeInterface
    {
        return $this->par19Date;
    }

    public function setPar19Date(\DateTimeInterface $par19Date): self
    {
        $this->par19Date = $par19Date;

        return $this;
    }

    public function getPar19PlanDate(): ?\DateTimeInterface
    {
        return $this->par19PlanDate;
    }

    public function setPar19PlanDate(\DateTimeInterface $par19PlanDate): self
    {
        $this->par19PlanDate = $par19PlanDate;

        return $this;
    }

    public function getPar20(): ?int
    {
        return $this->par20;
    }

    public function setPar20(int $par20): self
    {
        $this->par20 = $par20;

        return $this;
    }

    public function getPar20Doc(): ?string
    {
        return $this->par20Doc;
    }

    public function setPar20Doc(string $par20Doc): self
    {
        $this->par20Doc = $par20Doc;

        return $this;
    }

    public function getPar20Date(): ?\DateTimeInterface
    {
        return $this->par20Date;
    }

    public function setPar20Date(\DateTimeInterface $par20Date): self
    {
        $this->par20Date = $par20Date;

        return $this;
    }

    public function getPar20PlanDate(): ?\DateTimeInterface
    {
        return $this->par20PlanDate;
    }

    public function setPar20PlanDate(\DateTimeInterface $par20PlanDate): self
    {
        $this->par20PlanDate = $par20PlanDate;

        return $this;
    }

    public function getPar21(): ?int
    {
        return $this->par21;
    }

    public function setPar21(int $par21): self
    {
        $this->par21 = $par21;

        return $this;
    }

    public function getPar21Doc(): ?string
    {
        return $this->par21Doc;
    }

    public function setPar21Doc(string $par21Doc): self
    {
        $this->par21Doc = $par21Doc;

        return $this;
    }

    public function getPar21Date(): ?\DateTimeInterface
    {
        return $this->par21Date;
    }

    public function setPar21Date(\DateTimeInterface $par21Date): self
    {
        $this->par21Date = $par21Date;

        return $this;
    }

    public function getPar21PlanDate(): ?\DateTimeInterface
    {
        return $this->par21PlanDate;
    }

    public function setPar21PlanDate(\DateTimeInterface $par21PlanDate): self
    {
        $this->par21PlanDate = $par21PlanDate;

        return $this;
    }

    public function getPar22(): ?int
    {
        return $this->par22;
    }

    public function setPar22(int $par22): self
    {
        $this->par22 = $par22;

        return $this;
    }

    public function getPar22Doc(): ?string
    {
        return $this->par22Doc;
    }

    public function setPar22Doc(string $par22Doc): self
    {
        $this->par22Doc = $par22Doc;

        return $this;
    }

    public function getPar22Date(): ?\DateTimeInterface
    {
        return $this->par22Date;
    }

    public function setPar22Date(\DateTimeInterface $par22Date): self
    {
        $this->par22Date = $par22Date;

        return $this;
    }

    public function getPar22PlanDate(): ?\DateTimeInterface
    {
        return $this->par22PlanDate;
    }

    public function setPar22PlanDate(\DateTimeInterface $par22PlanDate): self
    {
        $this->par22PlanDate = $par22PlanDate;

        return $this;
    }

    public function getPar23(): ?int
    {
        return $this->par23;
    }

    public function setPar23(int $par23): self
    {
        $this->par23 = $par23;

        return $this;
    }

    public function getPar23Doc(): ?string
    {
        return $this->par23Doc;
    }

    public function setPar23Doc(string $par23Doc): self
    {
        $this->par23Doc = $par23Doc;

        return $this;
    }

    public function getPar23Date(): ?\DateTimeInterface
    {
        return $this->par23Date;
    }

    public function setPar23Date(\DateTimeInterface $par23Date): self
    {
        $this->par23Date = $par23Date;

        return $this;
    }

    public function getPar23PlanDate(): ?\DateTimeInterface
    {
        return $this->par23PlanDate;
    }

    public function setPar23PlanDate(\DateTimeInterface $par23PlanDate): self
    {
        $this->par23PlanDate = $par23PlanDate;

        return $this;
    }

    public function getPar24(): ?int
    {
        return $this->par24;
    }

    public function setPar24(int $par24): self
    {
        $this->par24 = $par24;

        return $this;
    }

    public function getPar24Doc(): ?string
    {
        return $this->par24Doc;
    }

    public function setPar24Doc(string $par24Doc): self
    {
        $this->par24Doc = $par24Doc;

        return $this;
    }

    public function getPar24Date(): ?\DateTimeInterface
    {
        return $this->par24Date;
    }

    public function setPar24Date(\DateTimeInterface $par24Date): self
    {
        $this->par24Date = $par24Date;

        return $this;
    }

    public function getPar24PlanDate(): ?\DateTimeInterface
    {
        return $this->par24PlanDate;
    }

    public function setPar24PlanDate(\DateTimeInterface $par24PlanDate): self
    {
        $this->par24PlanDate = $par24PlanDate;

        return $this;
    }

    public function getPar25(): ?int
    {
        return $this->par25;
    }

    public function setPar25(int $par25): self
    {
        $this->par25 = $par25;

        return $this;
    }

    public function getPar25Doc(): ?string
    {
        return $this->par25Doc;
    }

    public function setPar25Doc(string $par25Doc): self
    {
        $this->par25Doc = $par25Doc;

        return $this;
    }

    public function getPar25Date(): ?\DateTimeInterface
    {
        return $this->par25Date;
    }

    public function setPar25Date(\DateTimeInterface $par25Date): self
    {
        $this->par25Date = $par25Date;

        return $this;
    }

    public function getPar25PlanDate(): ?\DateTimeInterface
    {
        return $this->par25PlanDate;
    }

    public function setPar25PlanDate(\DateTimeInterface $par25PlanDate): self
    {
        $this->par25PlanDate = $par25PlanDate;

        return $this;
    }

    public function getPar26(): ?int
    {
        return $this->par26;
    }

    public function setPar26(int $par26): self
    {
        $this->par26 = $par26;

        return $this;
    }

    public function getPar26Doc(): ?string
    {
        return $this->par26Doc;
    }

    public function setPar26Doc(string $par26Doc): self
    {
        $this->par26Doc = $par26Doc;

        return $this;
    }

    public function getPar26Date(): ?\DateTimeInterface
    {
        return $this->par26Date;
    }

    public function setPar26Date(\DateTimeInterface $par26Date): self
    {
        $this->par26Date = $par26Date;

        return $this;
    }

    public function getPar26PlanDate(): ?\DateTimeInterface
    {
        return $this->par26PlanDate;
    }

    public function setPar26PlanDate(\DateTimeInterface $par26PlanDate): self
    {
        $this->par26PlanDate = $par26PlanDate;

        return $this;
    }

    public function getPar27(): ?int
    {
        return $this->par27;
    }

    public function setPar27(int $par27): self
    {
        $this->par27 = $par27;

        return $this;
    }

    public function getPar27Doc(): ?string
    {
        return $this->par27Doc;
    }

    public function setPar27Doc(string $par27Doc): self
    {
        $this->par27Doc = $par27Doc;

        return $this;
    }

    public function getPar27Date(): ?\DateTimeInterface
    {
        return $this->par27Date;
    }

    public function setPar27Date(\DateTimeInterface $par27Date): self
    {
        $this->par27Date = $par27Date;

        return $this;
    }

    public function getPar27PlanDate(): ?\DateTimeInterface
    {
        return $this->par27PlanDate;
    }

    public function setPar27PlanDate(\DateTimeInterface $par27PlanDate): self
    {
        $this->par27PlanDate = $par27PlanDate;

        return $this;
    }

    public function getPar28(): ?int
    {
        return $this->par28;
    }

    public function setPar28(int $par28): self
    {
        $this->par28 = $par28;

        return $this;
    }

    public function getPar28Doc(): ?string
    {
        return $this->par28Doc;
    }

    public function setPar28Doc(string $par28Doc): self
    {
        $this->par28Doc = $par28Doc;

        return $this;
    }

    public function getPar28Date(): ?\DateTimeInterface
    {
        return $this->par28Date;
    }

    public function setPar28Date(\DateTimeInterface $par28Date): self
    {
        $this->par28Date = $par28Date;

        return $this;
    }

    public function getPar28PlanDate(): ?\DateTimeInterface
    {
        return $this->par28PlanDate;
    }

    public function setPar28PlanDate(\DateTimeInterface $par28PlanDate): self
    {
        $this->par28PlanDate = $par28PlanDate;

        return $this;
    }

    public function getPar29(): ?int
    {
        return $this->par29;
    }

    public function setPar29(int $par29): self
    {
        $this->par29 = $par29;

        return $this;
    }

    public function getPar29Doc(): ?string
    {
        return $this->par29Doc;
    }

    public function setPar29Doc(string $par29Doc): self
    {
        $this->par29Doc = $par29Doc;

        return $this;
    }

    public function getPar29Date(): ?\DateTimeInterface
    {
        return $this->par29Date;
    }

    public function setPar29Date(\DateTimeInterface $par29Date): self
    {
        $this->par29Date = $par29Date;

        return $this;
    }

    public function getPar29PlanDate(): ?\DateTimeInterface
    {
        return $this->par29PlanDate;
    }

    public function setPar29PlanDate(\DateTimeInterface $par29PlanDate): self
    {
        $this->par29PlanDate = $par29PlanDate;

        return $this;
    }

    public function getPar30(): ?int
    {
        return $this->par30;
    }

    public function setPar30(int $par30): self
    {
        $this->par30 = $par30;

        return $this;
    }

    public function getPar30Doc(): ?string
    {
        return $this->par30Doc;
    }

    public function setPar30Doc(string $par30Doc): self
    {
        $this->par30Doc = $par30Doc;

        return $this;
    }

    public function getPar30Date(): ?\DateTimeInterface
    {
        return $this->par30Date;
    }

    public function setPar30Date(\DateTimeInterface $par30Date): self
    {
        $this->par30Date = $par30Date;

        return $this;
    }

    public function getPar30PlanDate(): ?\DateTimeInterface
    {
        return $this->par30PlanDate;
    }

    public function setPar30PlanDate(\DateTimeInterface $par30PlanDate): self
    {
        $this->par30PlanDate = $par30PlanDate;

        return $this;
    }

    public function getPar31(): ?int
    {
        return $this->par31;
    }

    public function setPar31(int $par31): self
    {
        $this->par31 = $par31;

        return $this;
    }

    public function getPar31Doc(): ?string
    {
        return $this->par31Doc;
    }

    public function setPar31Doc(string $par31Doc): self
    {
        $this->par31Doc = $par31Doc;

        return $this;
    }

    public function getPar31Date(): ?\DateTimeInterface
    {
        return $this->par31Date;
    }

    public function setPar31Date(\DateTimeInterface $par31Date): self
    {
        $this->par31Date = $par31Date;

        return $this;
    }

    public function getPar31PlanDate(): ?\DateTimeInterface
    {
        return $this->par31PlanDate;
    }

    public function setPar31PlanDate(\DateTimeInterface $par31PlanDate): self
    {
        $this->par31PlanDate = $par31PlanDate;

        return $this;
    }

    public function getPar32(): ?int
    {
        return $this->par32;
    }

    public function setPar32(int $par32): self
    {
        $this->par32 = $par32;

        return $this;
    }

    public function getPar32Doc(): ?string
    {
        return $this->par32Doc;
    }

    public function setPar32Doc(string $par32Doc): self
    {
        $this->par32Doc = $par32Doc;

        return $this;
    }

    public function getPar32Date(): ?\DateTimeInterface
    {
        return $this->par32Date;
    }

    public function setPar32Date(\DateTimeInterface $par32Date): self
    {
        $this->par32Date = $par32Date;

        return $this;
    }

    public function getPar32PlanDate(): ?\DateTimeInterface
    {
        return $this->par32PlanDate;
    }

    public function setPar32PlanDate(\DateTimeInterface $par32PlanDate): self
    {
        $this->par32PlanDate = $par32PlanDate;

        return $this;
    }

    public function getPar33(): ?int
    {
        return $this->par33;
    }

    public function setPar33(int $par33): self
    {
        $this->par33 = $par33;

        return $this;
    }

    public function getPar33Doc(): ?string
    {
        return $this->par33Doc;
    }

    public function setPar33Doc(string $par33Doc): self
    {
        $this->par33Doc = $par33Doc;

        return $this;
    }

    public function getPar33Date(): ?\DateTimeInterface
    {
        return $this->par33Date;
    }

    public function setPar33Date(\DateTimeInterface $par33Date): self
    {
        $this->par33Date = $par33Date;

        return $this;
    }

    public function getPar33PlanDate(): ?\DateTimeInterface
    {
        return $this->par33PlanDate;
    }

    public function setPar33PlanDate(\DateTimeInterface $par33PlanDate): self
    {
        $this->par33PlanDate = $par33PlanDate;

        return $this;
    }

    public function getPar34(): ?int
    {
        return $this->par34;
    }

    public function setPar34(int $par34): self
    {
        $this->par34 = $par34;

        return $this;
    }

    public function getPar34Doc(): ?string
    {
        return $this->par34Doc;
    }

    public function setPar34Doc(string $par34Doc): self
    {
        $this->par34Doc = $par34Doc;

        return $this;
    }

    public function getPar34Date(): ?\DateTimeInterface
    {
        return $this->par34Date;
    }

    public function setPar34Date(\DateTimeInterface $par34Date): self
    {
        $this->par34Date = $par34Date;

        return $this;
    }

    public function getPar34PlanDate(): ?\DateTimeInterface
    {
        return $this->par34PlanDate;
    }

    public function setPar34PlanDate(\DateTimeInterface $par34PlanDate): self
    {
        $this->par34PlanDate = $par34PlanDate;

        return $this;
    }

    public function getPar35(): ?int
    {
        return $this->par35;
    }

    public function setPar35(int $par35): self
    {
        $this->par35 = $par35;

        return $this;
    }

    public function getPar35Doc(): ?string
    {
        return $this->par35Doc;
    }

    public function setPar35Doc(string $par35Doc): self
    {
        $this->par35Doc = $par35Doc;

        return $this;
    }

    public function getPar35Date(): ?\DateTimeInterface
    {
        return $this->par35Date;
    }

    public function setPar35Date(\DateTimeInterface $par35Date): self
    {
        $this->par35Date = $par35Date;

        return $this;
    }

    public function getPar35PlanDate(): ?\DateTimeInterface
    {
        return $this->par35PlanDate;
    }

    public function setPar35PlanDate(\DateTimeInterface $par35PlanDate): self
    {
        $this->par35PlanDate = $par35PlanDate;

        return $this;
    }

    public function getPar36(): ?int
    {
        return $this->par36;
    }

    public function setPar36(int $par36): self
    {
        $this->par36 = $par36;

        return $this;
    }

    public function getPar36Doc(): ?string
    {
        return $this->par36Doc;
    }

    public function setPar36Doc(string $par36Doc): self
    {
        $this->par36Doc = $par36Doc;

        return $this;
    }

    public function getPar36Date(): ?\DateTimeInterface
    {
        return $this->par36Date;
    }

    public function setPar36Date(\DateTimeInterface $par36Date): self
    {
        $this->par36Date = $par36Date;

        return $this;
    }

    public function getPar36PlanDate(): ?\DateTimeInterface
    {
        return $this->par36PlanDate;
    }

    public function setPar36PlanDate(\DateTimeInterface $par36PlanDate): self
    {
        $this->par36PlanDate = $par36PlanDate;

        return $this;
    }

    public function getPar37(): ?int
    {
        return $this->par37;
    }

    public function setPar37(int $par37): self
    {
        $this->par37 = $par37;

        return $this;
    }

    public function getPar37Doc(): ?string
    {
        return $this->par37Doc;
    }

    public function setPar37Doc(string $par37Doc): self
    {
        $this->par37Doc = $par37Doc;

        return $this;
    }

    public function getPar37Date(): ?\DateTimeInterface
    {
        return $this->par37Date;
    }

    public function setPar37Date(\DateTimeInterface $par37Date): self
    {
        $this->par37Date = $par37Date;

        return $this;
    }

    public function getPar37PlanDate(): ?\DateTimeInterface
    {
        return $this->par37PlanDate;
    }

    public function setPar37PlanDate(\DateTimeInterface $par37PlanDate): self
    {
        $this->par37PlanDate = $par37PlanDate;

        return $this;
    }

    public function getPar38(): ?int
    {
        return $this->par38;
    }

    public function setPar38(int $par38): self
    {
        $this->par38 = $par38;

        return $this;
    }

    public function getPar38Doc(): ?string
    {
        return $this->par38Doc;
    }

    public function setPar38Doc(string $par38Doc): self
    {
        $this->par38Doc = $par38Doc;

        return $this;
    }

    public function getPar38Date(): ?\DateTimeInterface
    {
        return $this->par38Date;
    }

    public function setPar38Date(\DateTimeInterface $par38Date): self
    {
        $this->par38Date = $par38Date;

        return $this;
    }

    public function getPar38PlanDate(): ?\DateTimeInterface
    {
        return $this->par38PlanDate;
    }

    public function setPar38PlanDate(\DateTimeInterface $par38PlanDate): self
    {
        $this->par38PlanDate = $par38PlanDate;

        return $this;
    }

    public function getPar39(): ?int
    {
        return $this->par39;
    }

    public function setPar39(int $par39): self
    {
        $this->par39 = $par39;

        return $this;
    }

    public function getPar39Doc(): ?string
    {
        return $this->par39Doc;
    }

    public function setPar39Doc(string $par39Doc): self
    {
        $this->par39Doc = $par39Doc;

        return $this;
    }

    public function getPar39Date(): ?\DateTimeInterface
    {
        return $this->par39Date;
    }

    public function setPar39Date(\DateTimeInterface $par39Date): self
    {
        $this->par39Date = $par39Date;

        return $this;
    }

    public function getPar39PlanDate(): ?\DateTimeInterface
    {
        return $this->par39PlanDate;
    }

    public function setPar39PlanDate(\DateTimeInterface $par39PlanDate): self
    {
        $this->par39PlanDate = $par39PlanDate;

        return $this;
    }

    public function getPar40(): ?int
    {
        return $this->par40;
    }

    public function setPar40(int $par40): self
    {
        $this->par40 = $par40;

        return $this;
    }

    public function getPar40Doc(): ?string
    {
        return $this->par40Doc;
    }

    public function setPar40Doc(string $par40Doc): self
    {
        $this->par40Doc = $par40Doc;

        return $this;
    }

    public function getPar40Date(): ?\DateTimeInterface
    {
        return $this->par40Date;
    }

    public function setPar40Date(\DateTimeInterface $par40Date): self
    {
        $this->par40Date = $par40Date;

        return $this;
    }

    public function getPar40PlanDate(): ?\DateTimeInterface
    {
        return $this->par40PlanDate;
    }

    public function setPar40PlanDate(\DateTimeInterface $par40PlanDate): self
    {
        $this->par40PlanDate = $par40PlanDate;

        return $this;
    }

    public function getPar41(): ?int
    {
        return $this->par41;
    }

    public function setPar41(int $par41): self
    {
        $this->par41 = $par41;

        return $this;
    }

    public function getPar41Doc(): ?string
    {
        return $this->par41Doc;
    }

    public function setPar41Doc(string $par41Doc): self
    {
        $this->par41Doc = $par41Doc;

        return $this;
    }

    public function getPar41Date(): ?\DateTimeInterface
    {
        return $this->par41Date;
    }

    public function setPar41Date(\DateTimeInterface $par41Date): self
    {
        $this->par41Date = $par41Date;

        return $this;
    }

    public function getPar41PlanDate(): ?\DateTimeInterface
    {
        return $this->par41PlanDate;
    }

    public function setPar41PlanDate(\DateTimeInterface $par41PlanDate): self
    {
        $this->par41PlanDate = $par41PlanDate;

        return $this;
    }

    public function getPar42(): ?int
    {
        return $this->par42;
    }

    public function setPar42(int $par42): self
    {
        $this->par42 = $par42;

        return $this;
    }

    public function getPar42Doc(): ?string
    {
        return $this->par42Doc;
    }

    public function setPar42Doc(string $par42Doc): self
    {
        $this->par42Doc = $par42Doc;

        return $this;
    }

    public function getPar42Date(): ?\DateTimeInterface
    {
        return $this->par42Date;
    }

    public function setPar42Date(\DateTimeInterface $par42Date): self
    {
        $this->par42Date = $par42Date;

        return $this;
    }

    public function getPar42PlanDate(): ?\DateTimeInterface
    {
        return $this->par42PlanDate;
    }

    public function setPar42PlanDate(\DateTimeInterface $par42PlanDate): self
    {
        $this->par42PlanDate = $par42PlanDate;

        return $this;
    }

    public function getPar43(): ?int
    {
        return $this->par43;
    }

    public function setPar43(int $par43): self
    {
        $this->par43 = $par43;

        return $this;
    }

    public function getPar43Doc(): ?string
    {
        return $this->par43Doc;
    }

    public function setPar43Doc(string $par43Doc): self
    {
        $this->par43Doc = $par43Doc;

        return $this;
    }

    public function getPar43Date(): ?\DateTimeInterface
    {
        return $this->par43Date;
    }

    public function setPar43Date(\DateTimeInterface $par43Date): self
    {
        $this->par43Date = $par43Date;

        return $this;
    }

    public function getPar43PlanDate(): ?\DateTimeInterface
    {
        return $this->par43PlanDate;
    }

    public function setPar43PlanDate(\DateTimeInterface $par43PlanDate): self
    {
        $this->par43PlanDate = $par43PlanDate;

        return $this;
    }

    public function getPar44(): ?int
    {
        return $this->par44;
    }

    public function setPar44(int $par44): self
    {
        $this->par44 = $par44;

        return $this;
    }

    public function getPar44Doc(): ?string
    {
        return $this->par44Doc;
    }

    public function setPar44Doc(string $par44Doc): self
    {
        $this->par44Doc = $par44Doc;

        return $this;
    }

    public function getPar44Date(): ?\DateTimeInterface
    {
        return $this->par44Date;
    }

    public function setPar44Date(\DateTimeInterface $par44Date): self
    {
        $this->par44Date = $par44Date;

        return $this;
    }

    public function getPar44PlanDate(): ?\DateTimeInterface
    {
        return $this->par44PlanDate;
    }

    public function setPar44PlanDate(\DateTimeInterface $par44PlanDate): self
    {
        $this->par44PlanDate = $par44PlanDate;

        return $this;
    }

    public function getPrim(): ?string
    {
        return $this->prim;
    }

    public function setPrim(string $prim): self
    {
        $this->prim = $prim;

        return $this;
    }

    public function getReady(): ?int
    {
        return $this->ready;
    }

    public function setReady(int $ready): self
    {
        $this->ready = $ready;

        return $this;
    }

    public function getPar45(): ?int
    {
        return $this->par45;
    }

    public function setPar45(int $par45): self
    {
        $this->par45 = $par45;

        return $this;
    }

    public function getPar45Doc(): ?string
    {
        return $this->par45Doc;
    }

    public function setPar45Doc(string $par45Doc): self
    {
        $this->par45Doc = $par45Doc;

        return $this;
    }

    public function getPar45Date(): ?\DateTimeInterface
    {
        return $this->par45Date;
    }

    public function setPar45Date(\DateTimeInterface $par45Date): self
    {
        $this->par45Date = $par45Date;

        return $this;
    }

    public function getPar45PlanDate(): ?\DateTimeInterface
    {
        return $this->par45PlanDate;
    }

    public function setPar45PlanDate(\DateTimeInterface $par45PlanDate): self
    {
        $this->par45PlanDate = $par45PlanDate;

        return $this;
    }

    public function getPar46(): ?int
    {
        return $this->par46;
    }

    public function setPar46(int $par46): self
    {
        $this->par46 = $par46;

        return $this;
    }

    public function getPar46Doc(): ?string
    {
        return $this->par46Doc;
    }

    public function setPar46Doc(string $par46Doc): self
    {
        $this->par46Doc = $par46Doc;

        return $this;
    }

    public function getPar46Date(): ?\DateTimeInterface
    {
        return $this->par46Date;
    }

    public function setPar46Date(\DateTimeInterface $par46Date): self
    {
        $this->par46Date = $par46Date;

        return $this;
    }

    public function getPar46PlanDate(): ?\DateTimeInterface
    {
        return $this->par46PlanDate;
    }

    public function setPar46PlanDate(\DateTimeInterface $par46PlanDate): self
    {
        $this->par46PlanDate = $par46PlanDate;

        return $this;
    }

    public function getPar47(): ?int
    {
        return $this->par47;
    }

    public function setPar47(int $par47): self
    {
        $this->par47 = $par47;

        return $this;
    }

    public function getPar47Doc(): ?string
    {
        return $this->par47Doc;
    }

    public function setPar47Doc(string $par47Doc): self
    {
        $this->par47Doc = $par47Doc;

        return $this;
    }

    public function getPar47Date(): ?\DateTimeInterface
    {
        return $this->par47Date;
    }

    public function setPar47Date(\DateTimeInterface $par47Date): self
    {
        $this->par47Date = $par47Date;

        return $this;
    }

    public function getPar47PlanDate(): ?\DateTimeInterface
    {
        return $this->par47PlanDate;
    }

    public function setPar47PlanDate(\DateTimeInterface $par47PlanDate): self
    {
        $this->par47PlanDate = $par47PlanDate;

        return $this;
    }

    public function getPar48(): ?int
    {
        return $this->par48;
    }

    public function setPar48(int $par48): self
    {
        $this->par48 = $par48;

        return $this;
    }

    public function getPar48Doc(): ?string
    {
        return $this->par48Doc;
    }

    public function setPar48Doc(string $par48Doc): self
    {
        $this->par48Doc = $par48Doc;

        return $this;
    }

    public function getPar48Date(): ?\DateTimeInterface
    {
        return $this->par48Date;
    }

    public function setPar48Date(\DateTimeInterface $par48Date): self
    {
        $this->par48Date = $par48Date;

        return $this;
    }

    public function getPar48PlanDate(): ?\DateTimeInterface
    {
        return $this->par48PlanDate;
    }

    public function setPar48PlanDate(\DateTimeInterface $par48PlanDate): self
    {
        $this->par48PlanDate = $par48PlanDate;

        return $this;
    }

    public function getPar49(): ?int
    {
        return $this->par49;
    }

    public function setPar49(int $par49): self
    {
        $this->par49 = $par49;

        return $this;
    }

    public function getPar49Doc(): ?string
    {
        return $this->par49Doc;
    }

    public function setPar49Doc(string $par49Doc): self
    {
        $this->par49Doc = $par49Doc;

        return $this;
    }

    public function getPar49Date(): ?\DateTimeInterface
    {
        return $this->par49Date;
    }

    public function setPar49Date(\DateTimeInterface $par49Date): self
    {
        $this->par49Date = $par49Date;

        return $this;
    }

    public function getPar49PlanDate(): ?\DateTimeInterface
    {
        return $this->par49PlanDate;
    }

    public function setPar49PlanDate(\DateTimeInterface $par49PlanDate): self
    {
        $this->par49PlanDate = $par49PlanDate;

        return $this;
    }

    public function getPar50(): ?int
    {
        return $this->par50;
    }

    public function setPar50(int $par50): self
    {
        $this->par50 = $par50;

        return $this;
    }

    public function getPar50Doc(): ?string
    {
        return $this->par50Doc;
    }

    public function setPar50Doc(string $par50Doc): self
    {
        $this->par50Doc = $par50Doc;

        return $this;
    }

    public function getPar50Date(): ?\DateTimeInterface
    {
        return $this->par50Date;
    }

    public function setPar50Date(\DateTimeInterface $par50Date): self
    {
        $this->par50Date = $par50Date;

        return $this;
    }

    public function getPar50PlanDate(): ?\DateTimeInterface
    {
        return $this->par50PlanDate;
    }

    public function setPar50PlanDate(\DateTimeInterface $par50PlanDate): self
    {
        $this->par50PlanDate = $par50PlanDate;

        return $this;
    }

    public function getPar51(): ?int
    {
        return $this->par51;
    }

    public function setPar51(int $par51): self
    {
        $this->par51 = $par51;

        return $this;
    }

    public function getPar51Doc(): ?string
    {
        return $this->par51Doc;
    }

    public function setPar51Doc(string $par51Doc): self
    {
        $this->par51Doc = $par51Doc;

        return $this;
    }

    public function getPar51Date(): ?\DateTimeInterface
    {
        return $this->par51Date;
    }

    public function setPar51Date(\DateTimeInterface $par51Date): self
    {
        $this->par51Date = $par51Date;

        return $this;
    }

    public function getPar51PlanDate(): ?\DateTimeInterface
    {
        return $this->par51PlanDate;
    }

    public function setPar51PlanDate(\DateTimeInterface $par51PlanDate): self
    {
        $this->par51PlanDate = $par51PlanDate;

        return $this;
    }

    public function getPar52(): ?int
    {
        return $this->par52;
    }

    public function setPar52(int $par52): self
    {
        $this->par52 = $par52;

        return $this;
    }

    public function getPar52Doc(): ?string
    {
        return $this->par52Doc;
    }

    public function setPar52Doc(string $par52Doc): self
    {
        $this->par52Doc = $par52Doc;

        return $this;
    }

    public function getPar52Date(): ?\DateTimeInterface
    {
        return $this->par52Date;
    }

    public function setPar52Date(\DateTimeInterface $par52Date): self
    {
        $this->par52Date = $par52Date;

        return $this;
    }

    public function getPar52PlanDate(): ?\DateTimeInterface
    {
        return $this->par52PlanDate;
    }

    public function setPar52PlanDate(\DateTimeInterface $par52PlanDate): self
    {
        $this->par52PlanDate = $par52PlanDate;

        return $this;
    }

    public function getPar53(): ?int
    {
        return $this->par53;
    }

    public function setPar53(int $par53): self
    {
        $this->par53 = $par53;

        return $this;
    }

    public function getPar53Doc(): ?string
    {
        return $this->par53Doc;
    }

    public function setPar53Doc(string $par53Doc): self
    {
        $this->par53Doc = $par53Doc;

        return $this;
    }

    public function getPar53Date(): ?\DateTimeInterface
    {
        return $this->par53Date;
    }

    public function setPar53Date(\DateTimeInterface $par53Date): self
    {
        $this->par53Date = $par53Date;

        return $this;
    }

    public function getPar53PlanDate(): ?\DateTimeInterface
    {
        return $this->par53PlanDate;
    }

    public function setPar53PlanDate(\DateTimeInterface $par53PlanDate): self
    {
        $this->par53PlanDate = $par53PlanDate;

        return $this;
    }

    public function getPar54(): ?int
    {
        return $this->par54;
    }

    public function setPar54(int $par54): self
    {
        $this->par54 = $par54;

        return $this;
    }

    public function getPar54Doc(): ?string
    {
        return $this->par54Doc;
    }

    public function setPar54Doc(string $par54Doc): self
    {
        $this->par54Doc = $par54Doc;

        return $this;
    }

    public function getPar54Date(): ?\DateTimeInterface
    {
        return $this->par54Date;
    }

    public function setPar54Date(\DateTimeInterface $par54Date): self
    {
        $this->par54Date = $par54Date;

        return $this;
    }

    public function getPar54PlanDate(): ?\DateTimeInterface
    {
        return $this->par54PlanDate;
    }

    public function setPar54PlanDate(\DateTimeInterface $par54PlanDate): self
    {
        $this->par54PlanDate = $par54PlanDate;

        return $this;
    }

    public function getPar55(): ?int
    {
        return $this->par55;
    }

    public function setPar55(int $par55): self
    {
        $this->par55 = $par55;

        return $this;
    }

    public function getPar55Doc(): ?string
    {
        return $this->par55Doc;
    }

    public function setPar55Doc(string $par55Doc): self
    {
        $this->par55Doc = $par55Doc;

        return $this;
    }

    public function getPar55Date(): ?\DateTimeInterface
    {
        return $this->par55Date;
    }

    public function setPar55Date(\DateTimeInterface $par55Date): self
    {
        $this->par55Date = $par55Date;

        return $this;
    }

    public function getPar55PlanDate(): ?\DateTimeInterface
    {
        return $this->par55PlanDate;
    }

    public function setPar55PlanDate(\DateTimeInterface $par55PlanDate): self
    {
        $this->par55PlanDate = $par55PlanDate;

        return $this;
    }

    public function getPar56(): ?int
    {
        return $this->par56;
    }

    public function setPar56(int $par56): self
    {
        $this->par56 = $par56;

        return $this;
    }

    public function getPar56Doc(): ?string
    {
        return $this->par56Doc;
    }

    public function setPar56Doc(string $par56Doc): self
    {
        $this->par56Doc = $par56Doc;

        return $this;
    }

    public function getPar56Date(): ?\DateTimeInterface
    {
        return $this->par56Date;
    }

    public function setPar56Date(\DateTimeInterface $par56Date): self
    {
        $this->par56Date = $par56Date;

        return $this;
    }

    public function getPar56PlanDate(): ?\DateTimeInterface
    {
        return $this->par56PlanDate;
    }

    public function setPar56PlanDate(\DateTimeInterface $par56PlanDate): self
    {
        $this->par56PlanDate = $par56PlanDate;

        return $this;
    }

    public function getPar57(): ?int
    {
        return $this->par57;
    }

    public function setPar57(int $par57): self
    {
        $this->par57 = $par57;

        return $this;
    }

    public function getPar57Doc(): ?string
    {
        return $this->par57Doc;
    }

    public function setPar57Doc(string $par57Doc): self
    {
        $this->par57Doc = $par57Doc;

        return $this;
    }

    public function getPar57Date(): ?\DateTimeInterface
    {
        return $this->par57Date;
    }

    public function setPar57Date(\DateTimeInterface $par57Date): self
    {
        $this->par57Date = $par57Date;

        return $this;
    }

    public function getPar57PlanDate(): ?\DateTimeInterface
    {
        return $this->par57PlanDate;
    }

    public function setPar57PlanDate(\DateTimeInterface $par57PlanDate): self
    {
        $this->par57PlanDate = $par57PlanDate;

        return $this;
    }

    public function getPar58(): ?int
    {
        return $this->par58;
    }

    public function setPar58(int $par58): self
    {
        $this->par58 = $par58;

        return $this;
    }

    public function getPar58Doc(): ?string
    {
        return $this->par58Doc;
    }

    public function setPar58Doc(string $par58Doc): self
    {
        $this->par58Doc = $par58Doc;

        return $this;
    }

    public function getPar58Date(): ?\DateTimeInterface
    {
        return $this->par58Date;
    }

    public function setPar58Date(\DateTimeInterface $par58Date): self
    {
        $this->par58Date = $par58Date;

        return $this;
    }

    public function getPar58PlanDate(): ?\DateTimeInterface
    {
        return $this->par58PlanDate;
    }

    public function setPar58PlanDate(\DateTimeInterface $par58PlanDate): self
    {
        $this->par58PlanDate = $par58PlanDate;

        return $this;
    }

    public function getPar59(): ?int
    {
        return $this->par59;
    }

    public function setPar59(int $par59): self
    {
        $this->par59 = $par59;

        return $this;
    }

    public function getPar59Doc(): ?string
    {
        return $this->par59Doc;
    }

    public function setPar59Doc(string $par59Doc): self
    {
        $this->par59Doc = $par59Doc;

        return $this;
    }

    public function getPar59Date(): ?\DateTimeInterface
    {
        return $this->par59Date;
    }

    public function setPar59Date(\DateTimeInterface $par59Date): self
    {
        $this->par59Date = $par59Date;

        return $this;
    }

    public function getPar59PlanDate(): ?\DateTimeInterface
    {
        return $this->par59PlanDate;
    }

    public function setPar59PlanDate(\DateTimeInterface $par59PlanDate): self
    {
        $this->par59PlanDate = $par59PlanDate;

        return $this;
    }

    public function getPar60(): ?int
    {
        return $this->par60;
    }

    public function setPar60(int $par60): self
    {
        $this->par60 = $par60;

        return $this;
    }

    public function getPar60Doc(): ?string
    {
        return $this->par60Doc;
    }

    public function setPar60Doc(string $par60Doc): self
    {
        $this->par60Doc = $par60Doc;

        return $this;
    }

    public function getPar60Date(): ?\DateTimeInterface
    {
        return $this->par60Date;
    }

    public function setPar60Date(\DateTimeInterface $par60Date): self
    {
        $this->par60Date = $par60Date;

        return $this;
    }

    public function getPar60PlanDate(): ?\DateTimeInterface
    {
        return $this->par60PlanDate;
    }

    public function setPar60PlanDate(\DateTimeInterface $par60PlanDate): self
    {
        $this->par60PlanDate = $par60PlanDate;

        return $this;
    }

    public function getPar61(): ?int
    {
        return $this->par61;
    }

    public function setPar61(int $par61): self
    {
        $this->par61 = $par61;

        return $this;
    }

    public function getPar61Doc(): ?string
    {
        return $this->par61Doc;
    }

    public function setPar61Doc(string $par61Doc): self
    {
        $this->par61Doc = $par61Doc;

        return $this;
    }

    public function getPar61Date(): ?\DateTimeInterface
    {
        return $this->par61Date;
    }

    public function setPar61Date(\DateTimeInterface $par61Date): self
    {
        $this->par61Date = $par61Date;

        return $this;
    }

    public function getPar61PlanDate(): ?\DateTimeInterface
    {
        return $this->par61PlanDate;
    }

    public function setPar61PlanDate(\DateTimeInterface $par61PlanDate): self
    {
        $this->par61PlanDate = $par61PlanDate;

        return $this;
    }

    public function getPar62(): ?int
    {
        return $this->par62;
    }

    public function setPar62(int $par62): self
    {
        $this->par62 = $par62;

        return $this;
    }

    public function getPar62Doc(): ?string
    {
        return $this->par62Doc;
    }

    public function setPar62Doc(string $par62Doc): self
    {
        $this->par62Doc = $par62Doc;

        return $this;
    }

    public function getPar62Date(): ?\DateTimeInterface
    {
        return $this->par62Date;
    }

    public function setPar62Date(\DateTimeInterface $par62Date): self
    {
        $this->par62Date = $par62Date;

        return $this;
    }

    public function getPar62PlanDate(): ?\DateTimeInterface
    {
        return $this->par62PlanDate;
    }

    public function setPar62PlanDate(\DateTimeInterface $par62PlanDate): self
    {
        $this->par62PlanDate = $par62PlanDate;

        return $this;
    }

    public function getPar63(): ?int
    {
        return $this->par63;
    }

    public function setPar63(int $par63): self
    {
        $this->par63 = $par63;

        return $this;
    }

    public function getPar63Doc(): ?string
    {
        return $this->par63Doc;
    }

    public function setPar63Doc(string $par63Doc): self
    {
        $this->par63Doc = $par63Doc;

        return $this;
    }

    public function getPar63Date(): ?\DateTimeInterface
    {
        return $this->par63Date;
    }

    public function setPar63Date(\DateTimeInterface $par63Date): self
    {
        $this->par63Date = $par63Date;

        return $this;
    }

    public function getPar63PlanDate(): ?\DateTimeInterface
    {
        return $this->par63PlanDate;
    }

    public function setPar63PlanDate(\DateTimeInterface $par63PlanDate): self
    {
        $this->par63PlanDate = $par63PlanDate;

        return $this;
    }

    public function getPar64(): ?int
    {
        return $this->par64;
    }

    public function setPar64(int $par64): self
    {
        $this->par64 = $par64;

        return $this;
    }

    public function getPar64Doc(): ?string
    {
        return $this->par64Doc;
    }

    public function setPar64Doc(string $par64Doc): self
    {
        $this->par64Doc = $par64Doc;

        return $this;
    }

    public function getPar64Date(): ?\DateTimeInterface
    {
        return $this->par64Date;
    }

    public function setPar64Date(\DateTimeInterface $par64Date): self
    {
        $this->par64Date = $par64Date;

        return $this;
    }

    public function getPar64PlanDate(): ?\DateTimeInterface
    {
        return $this->par64PlanDate;
    }

    public function setPar64PlanDate(\DateTimeInterface $par64PlanDate): self
    {
        $this->par64PlanDate = $par64PlanDate;

        return $this;
    }

    public function getPar65(): ?int
    {
        return $this->par65;
    }

    public function setPar65(int $par65): self
    {
        $this->par65 = $par65;

        return $this;
    }

    public function getPar65Doc(): ?string
    {
        return $this->par65Doc;
    }

    public function setPar65Doc(string $par65Doc): self
    {
        $this->par65Doc = $par65Doc;

        return $this;
    }

    public function getPar65Date(): ?\DateTimeInterface
    {
        return $this->par65Date;
    }

    public function setPar65Date(\DateTimeInterface $par65Date): self
    {
        $this->par65Date = $par65Date;

        return $this;
    }

    public function getPar65PlanDate(): ?\DateTimeInterface
    {
        return $this->par65PlanDate;
    }

    public function setPar65PlanDate(\DateTimeInterface $par65PlanDate): self
    {
        $this->par65PlanDate = $par65PlanDate;

        return $this;
    }

    public function getPar66(): ?int
    {
        return $this->par66;
    }

    public function setPar66(int $par66): self
    {
        $this->par66 = $par66;

        return $this;
    }

    public function getPar66Doc(): ?string
    {
        return $this->par66Doc;
    }

    public function setPar66Doc(string $par66Doc): self
    {
        $this->par66Doc = $par66Doc;

        return $this;
    }

    public function getPar66Date(): ?\DateTimeInterface
    {
        return $this->par66Date;
    }

    public function setPar66Date(\DateTimeInterface $par66Date): self
    {
        $this->par66Date = $par66Date;

        return $this;
    }

    public function getPar66PlanDate(): ?\DateTimeInterface
    {
        return $this->par66PlanDate;
    }

    public function setPar66PlanDate(\DateTimeInterface $par66PlanDate): self
    {
        $this->par66PlanDate = $par66PlanDate;

        return $this;
    }

    public function getPar67(): ?int
    {
        return $this->par67;
    }

    public function setPar67(int $par67): self
    {
        $this->par67 = $par67;

        return $this;
    }

    public function getPar67Doc(): ?string
    {
        return $this->par67Doc;
    }

    public function setPar67Doc(string $par67Doc): self
    {
        $this->par67Doc = $par67Doc;

        return $this;
    }

    public function getPar67Date(): ?\DateTimeInterface
    {
        return $this->par67Date;
    }

    public function setPar67Date(\DateTimeInterface $par67Date): self
    {
        $this->par67Date = $par67Date;

        return $this;
    }

    public function getPar67PlanDate(): ?\DateTimeInterface
    {
        return $this->par67PlanDate;
    }

    public function setPar67PlanDate(\DateTimeInterface $par67PlanDate): self
    {
        $this->par67PlanDate = $par67PlanDate;

        return $this;
    }

    public function getPar68(): ?int
    {
        return $this->par68;
    }

    public function setPar68(int $par68): self
    {
        $this->par68 = $par68;

        return $this;
    }

    public function getPar68Doc(): ?string
    {
        return $this->par68Doc;
    }

    public function setPar68Doc(string $par68Doc): self
    {
        $this->par68Doc = $par68Doc;

        return $this;
    }

    public function getPar68Date(): ?\DateTimeInterface
    {
        return $this->par68Date;
    }

    public function setPar68Date(\DateTimeInterface $par68Date): self
    {
        $this->par68Date = $par68Date;

        return $this;
    }

    public function getPar68PlanDate(): ?\DateTimeInterface
    {
        return $this->par68PlanDate;
    }

    public function setPar68PlanDate(\DateTimeInterface $par68PlanDate): self
    {
        $this->par68PlanDate = $par68PlanDate;

        return $this;
    }

    public function getPar69(): ?int
    {
        return $this->par69;
    }

    public function setPar69(int $par69): self
    {
        $this->par69 = $par69;

        return $this;
    }

    public function getPar69Doc(): ?string
    {
        return $this->par69Doc;
    }

    public function setPar69Doc(string $par69Doc): self
    {
        $this->par69Doc = $par69Doc;

        return $this;
    }

    public function getPar69Date(): ?\DateTimeInterface
    {
        return $this->par69Date;
    }

    public function setPar69Date(\DateTimeInterface $par69Date): self
    {
        $this->par69Date = $par69Date;

        return $this;
    }

    public function getPar69PlanDate(): ?\DateTimeInterface
    {
        return $this->par69PlanDate;
    }

    public function setPar69PlanDate(\DateTimeInterface $par69PlanDate): self
    {
        $this->par69PlanDate = $par69PlanDate;

        return $this;
    }

    public function getPar70(): ?int
    {
        return $this->par70;
    }

    public function setPar70(int $par70): self
    {
        $this->par70 = $par70;

        return $this;
    }

    public function getPar70Doc(): ?string
    {
        return $this->par70Doc;
    }

    public function setPar70Doc(string $par70Doc): self
    {
        $this->par70Doc = $par70Doc;

        return $this;
    }

    public function getPar70Date(): ?\DateTimeInterface
    {
        return $this->par70Date;
    }

    public function setPar70Date(\DateTimeInterface $par70Date): self
    {
        $this->par70Date = $par70Date;

        return $this;
    }

    public function getPar70PlanDate(): ?\DateTimeInterface
    {
        return $this->par70PlanDate;
    }

    public function setPar70PlanDate(\DateTimeInterface $par70PlanDate): self
    {
        $this->par70PlanDate = $par70PlanDate;

        return $this;
    }

    public function getPar71(): ?int
    {
        return $this->par71;
    }

    public function setPar71(int $par71): self
    {
        $this->par71 = $par71;

        return $this;
    }

    public function getPar71Doc(): ?string
    {
        return $this->par71Doc;
    }

    public function setPar71Doc(string $par71Doc): self
    {
        $this->par71Doc = $par71Doc;

        return $this;
    }

    public function getPar71Date(): ?\DateTimeInterface
    {
        return $this->par71Date;
    }

    public function setPar71Date(\DateTimeInterface $par71Date): self
    {
        $this->par71Date = $par71Date;

        return $this;
    }

    public function getPar71PlanDate(): ?\DateTimeInterface
    {
        return $this->par71PlanDate;
    }

    public function setPar71PlanDate(\DateTimeInterface $par71PlanDate): self
    {
        $this->par71PlanDate = $par71PlanDate;

        return $this;
    }

    public function getPar72(): ?int
    {
        return $this->par72;
    }

    public function setPar72(int $par72): self
    {
        $this->par72 = $par72;

        return $this;
    }

    public function getPar72Doc(): ?string
    {
        return $this->par72Doc;
    }

    public function setPar72Doc(string $par72Doc): self
    {
        $this->par72Doc = $par72Doc;

        return $this;
    }

    public function getPar72Date(): ?\DateTimeInterface
    {
        return $this->par72Date;
    }

    public function setPar72Date(\DateTimeInterface $par72Date): self
    {
        $this->par72Date = $par72Date;

        return $this;
    }

    public function getPar72PlanDate(): ?\DateTimeInterface
    {
        return $this->par72PlanDate;
    }

    public function setPar72PlanDate(\DateTimeInterface $par72PlanDate): self
    {
        $this->par72PlanDate = $par72PlanDate;

        return $this;
    }

    public function getPar73(): ?int
    {
        return $this->par73;
    }

    public function setPar73(int $par73): self
    {
        $this->par73 = $par73;

        return $this;
    }

    public function getPar73Doc(): ?string
    {
        return $this->par73Doc;
    }

    public function setPar73Doc(string $par73Doc): self
    {
        $this->par73Doc = $par73Doc;

        return $this;
    }

    public function getPar73Date(): ?\DateTimeInterface
    {
        return $this->par73Date;
    }

    public function setPar73Date(\DateTimeInterface $par73Date): self
    {
        $this->par73Date = $par73Date;

        return $this;
    }

    public function getPar73PlanDate(): ?\DateTimeInterface
    {
        return $this->par73PlanDate;
    }

    public function setPar73PlanDate(\DateTimeInterface $par73PlanDate): self
    {
        $this->par73PlanDate = $par73PlanDate;

        return $this;
    }

    public function getPar74(): ?int
    {
        return $this->par74;
    }

    public function setPar74(int $par74): self
    {
        $this->par74 = $par74;

        return $this;
    }

    public function getPar74Doc(): ?string
    {
        return $this->par74Doc;
    }

    public function setPar74Doc(string $par74Doc): self
    {
        $this->par74Doc = $par74Doc;

        return $this;
    }

    public function getPar74Date(): ?\DateTimeInterface
    {
        return $this->par74Date;
    }

    public function setPar74Date(\DateTimeInterface $par74Date): self
    {
        $this->par74Date = $par74Date;

        return $this;
    }

    public function getPar74PlanDate(): ?\DateTimeInterface
    {
        return $this->par74PlanDate;
    }

    public function setPar74PlanDate(\DateTimeInterface $par74PlanDate): self
    {
        $this->par74PlanDate = $par74PlanDate;

        return $this;
    }

    public function getPar75(): ?int
    {
        return $this->par75;
    }

    public function setPar75(int $par75): self
    {
        $this->par75 = $par75;

        return $this;
    }

    public function getPar75Doc(): ?string
    {
        return $this->par75Doc;
    }

    public function setPar75Doc(string $par75Doc): self
    {
        $this->par75Doc = $par75Doc;

        return $this;
    }

    public function getPar75Date(): ?\DateTimeInterface
    {
        return $this->par75Date;
    }

    public function setPar75Date(\DateTimeInterface $par75Date): self
    {
        $this->par75Date = $par75Date;

        return $this;
    }

    public function getPar75PlanDate(): ?\DateTimeInterface
    {
        return $this->par75PlanDate;
    }

    public function setPar75PlanDate(\DateTimeInterface $par75PlanDate): self
    {
        $this->par75PlanDate = $par75PlanDate;

        return $this;
    }

    public function getPar76(): ?int
    {
        return $this->par76;
    }

    public function setPar76(int $par76): self
    {
        $this->par76 = $par76;

        return $this;
    }

    public function getPar76Doc(): ?string
    {
        return $this->par76Doc;
    }

    public function setPar76Doc(string $par76Doc): self
    {
        $this->par76Doc = $par76Doc;

        return $this;
    }

    public function getPar76Date(): ?\DateTimeInterface
    {
        return $this->par76Date;
    }

    public function setPar76Date(\DateTimeInterface $par76Date): self
    {
        $this->par76Date = $par76Date;

        return $this;
    }

    public function getPar76PlanDate(): ?\DateTimeInterface
    {
        return $this->par76PlanDate;
    }

    public function setPar76PlanDate(\DateTimeInterface $par76PlanDate): self
    {
        $this->par76PlanDate = $par76PlanDate;

        return $this;
    }

    public function getPar77(): ?int
    {
        return $this->par77;
    }

    public function setPar77(int $par77): self
    {
        $this->par77 = $par77;

        return $this;
    }

    public function getPar77Doc(): ?string
    {
        return $this->par77Doc;
    }

    public function setPar77Doc(string $par77Doc): self
    {
        $this->par77Doc = $par77Doc;

        return $this;
    }

    public function getPar77Date(): ?\DateTimeInterface
    {
        return $this->par77Date;
    }

    public function setPar77Date(\DateTimeInterface $par77Date): self
    {
        $this->par77Date = $par77Date;

        return $this;
    }

    public function getPar77PlanDate(): ?\DateTimeInterface
    {
        return $this->par77PlanDate;
    }

    public function setPar77PlanDate(\DateTimeInterface $par77PlanDate): self
    {
        $this->par77PlanDate = $par77PlanDate;

        return $this;
    }

    public function getPar78(): ?int
    {
        return $this->par78;
    }

    public function setPar78(int $par78): self
    {
        $this->par78 = $par78;

        return $this;
    }

    public function getPar78Doc(): ?string
    {
        return $this->par78Doc;
    }

    public function setPar78Doc(string $par78Doc): self
    {
        $this->par78Doc = $par78Doc;

        return $this;
    }

    public function getPar78Date(): ?\DateTimeInterface
    {
        return $this->par78Date;
    }

    public function setPar78Date(\DateTimeInterface $par78Date): self
    {
        $this->par78Date = $par78Date;

        return $this;
    }

    public function getPar78PlanDate(): ?\DateTimeInterface
    {
        return $this->par78PlanDate;
    }

    public function setPar78PlanDate(\DateTimeInterface $par78PlanDate): self
    {
        $this->par78PlanDate = $par78PlanDate;

        return $this;
    }

    public function getPar79(): ?int
    {
        return $this->par79;
    }

    public function setPar79(int $par79): self
    {
        $this->par79 = $par79;

        return $this;
    }

    public function getPar79Doc(): ?string
    {
        return $this->par79Doc;
    }

    public function setPar79Doc(string $par79Doc): self
    {
        $this->par79Doc = $par79Doc;

        return $this;
    }

    public function getPar79Date(): ?\DateTimeInterface
    {
        return $this->par79Date;
    }

    public function setPar79Date(\DateTimeInterface $par79Date): self
    {
        $this->par79Date = $par79Date;

        return $this;
    }

    public function getPar79PlanDate(): ?\DateTimeInterface
    {
        return $this->par79PlanDate;
    }

    public function setPar79PlanDate(\DateTimeInterface $par79PlanDate): self
    {
        $this->par79PlanDate = $par79PlanDate;

        return $this;
    }

    public function getPar80(): ?int
    {
        return $this->par80;
    }

    public function setPar80(int $par80): self
    {
        $this->par80 = $par80;

        return $this;
    }

    public function getPar80Doc(): ?string
    {
        return $this->par80Doc;
    }

    public function setPar80Doc(string $par80Doc): self
    {
        $this->par80Doc = $par80Doc;

        return $this;
    }

    public function getPar80Date(): ?\DateTimeInterface
    {
        return $this->par80Date;
    }

    public function setPar80Date(\DateTimeInterface $par80Date): self
    {
        $this->par80Date = $par80Date;

        return $this;
    }

    public function getPar80PlanDate(): ?\DateTimeInterface
    {
        return $this->par80PlanDate;
    }

    public function setPar80PlanDate(\DateTimeInterface $par80PlanDate): self
    {
        $this->par80PlanDate = $par80PlanDate;

        return $this;
    }

    public function getPar81(): ?int
    {
        return $this->par81;
    }

    public function setPar81(int $par81): self
    {
        $this->par81 = $par81;

        return $this;
    }

    public function getPar81Doc(): ?string
    {
        return $this->par81Doc;
    }

    public function setPar81Doc(string $par81Doc): self
    {
        $this->par81Doc = $par81Doc;

        return $this;
    }

    public function getPar81Date(): ?\DateTimeInterface
    {
        return $this->par81Date;
    }

    public function setPar81Date(\DateTimeInterface $par81Date): self
    {
        $this->par81Date = $par81Date;

        return $this;
    }

    public function getPar81PlanDate(): ?\DateTimeInterface
    {
        return $this->par81PlanDate;
    }

    public function setPar81PlanDate(\DateTimeInterface $par81PlanDate): self
    {
        $this->par81PlanDate = $par81PlanDate;

        return $this;
    }

    public function getPar82(): ?int
    {
        return $this->par82;
    }

    public function setPar82(int $par82): self
    {
        $this->par82 = $par82;

        return $this;
    }

    public function getPar82Doc(): ?string
    {
        return $this->par82Doc;
    }

    public function setPar82Doc(string $par82Doc): self
    {
        $this->par82Doc = $par82Doc;

        return $this;
    }

    public function getPar82Date(): ?\DateTimeInterface
    {
        return $this->par82Date;
    }

    public function setPar82Date(\DateTimeInterface $par82Date): self
    {
        $this->par82Date = $par82Date;

        return $this;
    }

    public function getPar82PlanDate(): ?\DateTimeInterface
    {
        return $this->par82PlanDate;
    }

    public function setPar82PlanDate(\DateTimeInterface $par82PlanDate): self
    {
        $this->par82PlanDate = $par82PlanDate;

        return $this;
    }

    public function getPar83(): ?int
    {
        return $this->par83;
    }

    public function setPar83(int $par83): self
    {
        $this->par83 = $par83;

        return $this;
    }

    public function getPar83Doc(): ?string
    {
        return $this->par83Doc;
    }

    public function setPar83Doc(string $par83Doc): self
    {
        $this->par83Doc = $par83Doc;

        return $this;
    }

    public function getPar83Date(): ?\DateTimeInterface
    {
        return $this->par83Date;
    }

    public function setPar83Date(\DateTimeInterface $par83Date): self
    {
        $this->par83Date = $par83Date;

        return $this;
    }

    public function getPar83PlanDate(): ?\DateTimeInterface
    {
        return $this->par83PlanDate;
    }

    public function setPar83PlanDate(\DateTimeInterface $par83PlanDate): self
    {
        $this->par83PlanDate = $par83PlanDate;

        return $this;
    }

    public function getPar84(): ?int
    {
        return $this->par84;
    }

    public function setPar84(int $par84): self
    {
        $this->par84 = $par84;

        return $this;
    }

    public function getPar84Doc(): ?string
    {
        return $this->par84Doc;
    }

    public function setPar84Doc(string $par84Doc): self
    {
        $this->par84Doc = $par84Doc;

        return $this;
    }

    public function getPar84Date(): ?\DateTimeInterface
    {
        return $this->par84Date;
    }

    public function setPar84Date(\DateTimeInterface $par84Date): self
    {
        $this->par84Date = $par84Date;

        return $this;
    }

    public function getPar84PlanDate(): ?\DateTimeInterface
    {
        return $this->par84PlanDate;
    }

    public function setPar84PlanDate(\DateTimeInterface $par84PlanDate): self
    {
        $this->par84PlanDate = $par84PlanDate;

        return $this;
    }

    public function getPar85(): ?int
    {
        return $this->par85;
    }

    public function setPar85(int $par85): self
    {
        $this->par85 = $par85;

        return $this;
    }

    public function getPar85Doc(): ?string
    {
        return $this->par85Doc;
    }

    public function setPar85Doc(string $par85Doc): self
    {
        $this->par85Doc = $par85Doc;

        return $this;
    }

    public function getPar85Date(): ?\DateTimeInterface
    {
        return $this->par85Date;
    }

    public function setPar85Date(\DateTimeInterface $par85Date): self
    {
        $this->par85Date = $par85Date;

        return $this;
    }

    public function getPar85PlanDate(): ?\DateTimeInterface
    {
        return $this->par85PlanDate;
    }

    public function setPar85PlanDate(\DateTimeInterface $par85PlanDate): self
    {
        $this->par85PlanDate = $par85PlanDate;

        return $this;
    }

    public function getPar86(): ?int
    {
        return $this->par86;
    }

    public function setPar86(int $par86): self
    {
        $this->par86 = $par86;

        return $this;
    }

    public function getPar86Doc(): ?string
    {
        return $this->par86Doc;
    }

    public function setPar86Doc(string $par86Doc): self
    {
        $this->par86Doc = $par86Doc;

        return $this;
    }

    public function getPar86Date(): ?\DateTimeInterface
    {
        return $this->par86Date;
    }

    public function setPar86Date(\DateTimeInterface $par86Date): self
    {
        $this->par86Date = $par86Date;

        return $this;
    }

    public function getPar86PlanDate(): ?\DateTimeInterface
    {
        return $this->par86PlanDate;
    }

    public function setPar86PlanDate(\DateTimeInterface $par86PlanDate): self
    {
        $this->par86PlanDate = $par86PlanDate;

        return $this;
    }

    public function getPar87(): ?int
    {
        return $this->par87;
    }

    public function setPar87(int $par87): self
    {
        $this->par87 = $par87;

        return $this;
    }

    public function getPar87Doc(): ?string
    {
        return $this->par87Doc;
    }

    public function setPar87Doc(string $par87Doc): self
    {
        $this->par87Doc = $par87Doc;

        return $this;
    }

    public function getPar87Date(): ?\DateTimeInterface
    {
        return $this->par87Date;
    }

    public function setPar87Date(\DateTimeInterface $par87Date): self
    {
        $this->par87Date = $par87Date;

        return $this;
    }

    public function getPar87PlanDate(): ?\DateTimeInterface
    {
        return $this->par87PlanDate;
    }

    public function setPar87PlanDate(\DateTimeInterface $par87PlanDate): self
    {
        $this->par87PlanDate = $par87PlanDate;

        return $this;
    }

    public function getPar88(): ?int
    {
        return $this->par88;
    }

    public function setPar88(int $par88): self
    {
        $this->par88 = $par88;

        return $this;
    }

    public function getPar88Doc(): ?string
    {
        return $this->par88Doc;
    }

    public function setPar88Doc(string $par88Doc): self
    {
        $this->par88Doc = $par88Doc;

        return $this;
    }

    public function getPar88Date(): ?\DateTimeInterface
    {
        return $this->par88Date;
    }

    public function setPar88Date(\DateTimeInterface $par88Date): self
    {
        $this->par88Date = $par88Date;

        return $this;
    }

    public function getPar88PlanDate(): ?\DateTimeInterface
    {
        return $this->par88PlanDate;
    }

    public function setPar88PlanDate(\DateTimeInterface $par88PlanDate): self
    {
        $this->par88PlanDate = $par88PlanDate;

        return $this;
    }

    public function getPar89(): ?int
    {
        return $this->par89;
    }

    public function setPar89(int $par89): self
    {
        $this->par89 = $par89;

        return $this;
    }

    public function getPar89Doc(): ?string
    {
        return $this->par89Doc;
    }

    public function setPar89Doc(string $par89Doc): self
    {
        $this->par89Doc = $par89Doc;

        return $this;
    }

    public function getPar89Date(): ?\DateTimeInterface
    {
        return $this->par89Date;
    }

    public function setPar89Date(\DateTimeInterface $par89Date): self
    {
        $this->par89Date = $par89Date;

        return $this;
    }

    public function getPar89PlanDate(): ?\DateTimeInterface
    {
        return $this->par89PlanDate;
    }

    public function setPar89PlanDate(\DateTimeInterface $par89PlanDate): self
    {
        $this->par89PlanDate = $par89PlanDate;

        return $this;
    }

    public function getPar90(): ?int
    {
        return $this->par90;
    }

    public function setPar90(int $par90): self
    {
        $this->par90 = $par90;

        return $this;
    }

    public function getPar90Doc(): ?string
    {
        return $this->par90Doc;
    }

    public function setPar90Doc(string $par90Doc): self
    {
        $this->par90Doc = $par90Doc;

        return $this;
    }

    public function getPar90Date(): ?\DateTimeInterface
    {
        return $this->par90Date;
    }

    public function setPar90Date(\DateTimeInterface $par90Date): self
    {
        $this->par90Date = $par90Date;

        return $this;
    }

    public function getPar90PlanDate(): ?\DateTimeInterface
    {
        return $this->par90PlanDate;
    }

    public function setPar90PlanDate(\DateTimeInterface $par90PlanDate): self
    {
        $this->par90PlanDate = $par90PlanDate;

        return $this;
    }

    public function getPar91(): ?int
    {
        return $this->par91;
    }

    public function setPar91(int $par91): self
    {
        $this->par91 = $par91;

        return $this;
    }

    public function getPar91Doc(): ?string
    {
        return $this->par91Doc;
    }

    public function setPar91Doc(string $par91Doc): self
    {
        $this->par91Doc = $par91Doc;

        return $this;
    }

    public function getPar91Date(): ?\DateTimeInterface
    {
        return $this->par91Date;
    }

    public function setPar91Date(\DateTimeInterface $par91Date): self
    {
        $this->par91Date = $par91Date;

        return $this;
    }

    public function getPar91PlanDate(): ?\DateTimeInterface
    {
        return $this->par91PlanDate;
    }

    public function setPar91PlanDate(\DateTimeInterface $par91PlanDate): self
    {
        $this->par91PlanDate = $par91PlanDate;

        return $this;
    }

    public function getPar92(): ?int
    {
        return $this->par92;
    }

    public function setPar92(int $par92): self
    {
        $this->par92 = $par92;

        return $this;
    }

    public function getPar92Doc(): ?string
    {
        return $this->par92Doc;
    }

    public function setPar92Doc(string $par92Doc): self
    {
        $this->par92Doc = $par92Doc;

        return $this;
    }

    public function getPar92Date(): ?\DateTimeInterface
    {
        return $this->par92Date;
    }

    public function setPar92Date(\DateTimeInterface $par92Date): self
    {
        $this->par92Date = $par92Date;

        return $this;
    }

    public function getPar92PlanDate(): ?\DateTimeInterface
    {
        return $this->par92PlanDate;
    }

    public function setPar92PlanDate(\DateTimeInterface $par92PlanDate): self
    {
        $this->par92PlanDate = $par92PlanDate;

        return $this;
    }

    public function getPar93(): ?int
    {
        return $this->par93;
    }

    public function setPar93(int $par93): self
    {
        $this->par93 = $par93;

        return $this;
    }

    public function getPar93Doc(): ?string
    {
        return $this->par93Doc;
    }

    public function setPar93Doc(string $par93Doc): self
    {
        $this->par93Doc = $par93Doc;

        return $this;
    }

    public function getPar93Date(): ?\DateTimeInterface
    {
        return $this->par93Date;
    }

    public function setPar93Date(\DateTimeInterface $par93Date): self
    {
        $this->par93Date = $par93Date;

        return $this;
    }

    public function getPar93PlanDate(): ?\DateTimeInterface
    {
        return $this->par93PlanDate;
    }

    public function setPar93PlanDate(\DateTimeInterface $par93PlanDate): self
    {
        $this->par93PlanDate = $par93PlanDate;

        return $this;
    }

    public function getPar94(): ?int
    {
        return $this->par94;
    }

    public function setPar94(int $par94): self
    {
        $this->par94 = $par94;

        return $this;
    }

    public function getPar94Doc(): ?string
    {
        return $this->par94Doc;
    }

    public function setPar94Doc(string $par94Doc): self
    {
        $this->par94Doc = $par94Doc;

        return $this;
    }

    public function getPar94Date(): ?\DateTimeInterface
    {
        return $this->par94Date;
    }

    public function setPar94Date(\DateTimeInterface $par94Date): self
    {
        $this->par94Date = $par94Date;

        return $this;
    }

    public function getPar94PlanDate(): ?\DateTimeInterface
    {
        return $this->par94PlanDate;
    }

    public function setPar94PlanDate(\DateTimeInterface $par94PlanDate): self
    {
        $this->par94PlanDate = $par94PlanDate;

        return $this;
    }

    public function getPar95(): ?int
    {
        return $this->par95;
    }

    public function setPar95(int $par95): self
    {
        $this->par95 = $par95;

        return $this;
    }

    public function getPar95Doc(): ?string
    {
        return $this->par95Doc;
    }

    public function setPar95Doc(string $par95Doc): self
    {
        $this->par95Doc = $par95Doc;

        return $this;
    }

    public function getPar95Date(): ?\DateTimeInterface
    {
        return $this->par95Date;
    }

    public function setPar95Date(\DateTimeInterface $par95Date): self
    {
        $this->par95Date = $par95Date;

        return $this;
    }

    public function getPar95PlanDate(): ?\DateTimeInterface
    {
        return $this->par95PlanDate;
    }

    public function setPar95PlanDate(\DateTimeInterface $par95PlanDate): self
    {
        $this->par95PlanDate = $par95PlanDate;

        return $this;
    }

    public function getPar96(): ?int
    {
        return $this->par96;
    }

    public function setPar96(int $par96): self
    {
        $this->par96 = $par96;

        return $this;
    }

    public function getPar96Doc(): ?string
    {
        return $this->par96Doc;
    }

    public function setPar96Doc(string $par96Doc): self
    {
        $this->par96Doc = $par96Doc;

        return $this;
    }

    public function getPar96Date(): ?\DateTimeInterface
    {
        return $this->par96Date;
    }

    public function setPar96Date(\DateTimeInterface $par96Date): self
    {
        $this->par96Date = $par96Date;

        return $this;
    }

    public function getPar96PlanDate(): ?\DateTimeInterface
    {
        return $this->par96PlanDate;
    }

    public function setPar96PlanDate(\DateTimeInterface $par96PlanDate): self
    {
        $this->par96PlanDate = $par96PlanDate;

        return $this;
    }

    public function getPar97(): ?int
    {
        return $this->par97;
    }

    public function setPar97(int $par97): self
    {
        $this->par97 = $par97;

        return $this;
    }

    public function getPar97Doc(): ?string
    {
        return $this->par97Doc;
    }

    public function setPar97Doc(string $par97Doc): self
    {
        $this->par97Doc = $par97Doc;

        return $this;
    }

    public function getPar97Date(): ?\DateTimeInterface
    {
        return $this->par97Date;
    }

    public function setPar97Date(\DateTimeInterface $par97Date): self
    {
        $this->par97Date = $par97Date;

        return $this;
    }

    public function getPar97PlanDate(): ?\DateTimeInterface
    {
        return $this->par97PlanDate;
    }

    public function setPar97PlanDate(\DateTimeInterface $par97PlanDate): self
    {
        $this->par97PlanDate = $par97PlanDate;

        return $this;
    }

    public function getPar98(): ?int
    {
        return $this->par98;
    }

    public function setPar98(int $par98): self
    {
        $this->par98 = $par98;

        return $this;
    }

    public function getPar98Doc(): ?string
    {
        return $this->par98Doc;
    }

    public function setPar98Doc(string $par98Doc): self
    {
        $this->par98Doc = $par98Doc;

        return $this;
    }

    public function getPar98Date(): ?\DateTimeInterface
    {
        return $this->par98Date;
    }

    public function setPar98Date(\DateTimeInterface $par98Date): self
    {
        $this->par98Date = $par98Date;

        return $this;
    }

    public function getPar98PlanDate(): ?\DateTimeInterface
    {
        return $this->par98PlanDate;
    }

    public function setPar98PlanDate(\DateTimeInterface $par98PlanDate): self
    {
        $this->par98PlanDate = $par98PlanDate;

        return $this;
    }

    public function getPar99(): ?int
    {
        return $this->par99;
    }

    public function setPar99(int $par99): self
    {
        $this->par99 = $par99;

        return $this;
    }

    public function getPar99Doc(): ?string
    {
        return $this->par99Doc;
    }

    public function setPar99Doc(string $par99Doc): self
    {
        $this->par99Doc = $par99Doc;

        return $this;
    }

    public function getPar99Date(): ?\DateTimeInterface
    {
        return $this->par99Date;
    }

    public function setPar99Date(\DateTimeInterface $par99Date): self
    {
        $this->par99Date = $par99Date;

        return $this;
    }

    public function getPar99PlanDate(): ?\DateTimeInterface
    {
        return $this->par99PlanDate;
    }

    public function setPar99PlanDate(\DateTimeInterface $par99PlanDate): self
    {
        $this->par99PlanDate = $par99PlanDate;

        return $this;
    }

    public function getPar100(): ?int
    {
        return $this->par100;
    }

    public function setPar100(int $par100): self
    {
        $this->par100 = $par100;

        return $this;
    }

    public function getPar100Doc(): ?string
    {
        return $this->par100Doc;
    }

    public function setPar100Doc(string $par100Doc): self
    {
        $this->par100Doc = $par100Doc;

        return $this;
    }

    public function getPar100Date(): ?\DateTimeInterface
    {
        return $this->par100Date;
    }

    public function setPar100Date(\DateTimeInterface $par100Date): self
    {
        $this->par100Date = $par100Date;

        return $this;
    }

    public function getPar100PlanDate(): ?\DateTimeInterface
    {
        return $this->par100PlanDate;
    }

    public function setPar100PlanDate(\DateTimeInterface $par100PlanDate): self
    {
        $this->par100PlanDate = $par100PlanDate;

        return $this;
    }


}
