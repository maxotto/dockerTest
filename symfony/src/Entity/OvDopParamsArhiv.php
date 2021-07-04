<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OvDopParamsArhiv
 *
 * @ORM\Table(name="ov_dop_params_arhiv", indexes={@ORM\Index(name="IX_ov_dop_params_arhiv_edited_when", columns={"edited_when"}), @ORM\Index(name="IX_ov_dop_params_arhiv_date_end", columns={"date_end"}), @ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class OvDopParamsArhiv
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="date", nullable=false)
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
     * @var int
     *
     * @ORM\Column(name="par06_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par07_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par08_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par09_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par10_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par11_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par12_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par13_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par14_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par15_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par16_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par17_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par18_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par19_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par20_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par21_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par22_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par23_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par25_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par26_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par27_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par28_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par29_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par30_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par31_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par32_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par33_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par34_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par35_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par36_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par37_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par38_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par39_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par40_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par41_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par42_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par43_doc", type="integer", nullable=false, options={"unsigned"=true})
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
     * @var int
     *
     * @ORM\Column(name="par44_doc", type="integer", nullable=false, options={"unsigned"=true})
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

    public function setDateEnd(\DateTimeInterface $dateEnd): self
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

    public function getPar06Doc(): ?int
    {
        return $this->par06Doc;
    }

    public function setPar06Doc(int $par06Doc): self
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

    public function getPar07Doc(): ?int
    {
        return $this->par07Doc;
    }

    public function setPar07Doc(int $par07Doc): self
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

    public function getPar08Doc(): ?int
    {
        return $this->par08Doc;
    }

    public function setPar08Doc(int $par08Doc): self
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

    public function getPar09Doc(): ?int
    {
        return $this->par09Doc;
    }

    public function setPar09Doc(int $par09Doc): self
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

    public function getPar10Doc(): ?int
    {
        return $this->par10Doc;
    }

    public function setPar10Doc(int $par10Doc): self
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

    public function getPar11Doc(): ?int
    {
        return $this->par11Doc;
    }

    public function setPar11Doc(int $par11Doc): self
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

    public function getPar12Doc(): ?int
    {
        return $this->par12Doc;
    }

    public function setPar12Doc(int $par12Doc): self
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

    public function getPar13Doc(): ?int
    {
        return $this->par13Doc;
    }

    public function setPar13Doc(int $par13Doc): self
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

    public function getPar14Doc(): ?int
    {
        return $this->par14Doc;
    }

    public function setPar14Doc(int $par14Doc): self
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

    public function getPar15Doc(): ?int
    {
        return $this->par15Doc;
    }

    public function setPar15Doc(int $par15Doc): self
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

    public function getPar16Doc(): ?int
    {
        return $this->par16Doc;
    }

    public function setPar16Doc(int $par16Doc): self
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

    public function getPar17Doc(): ?int
    {
        return $this->par17Doc;
    }

    public function setPar17Doc(int $par17Doc): self
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

    public function getPar18Doc(): ?int
    {
        return $this->par18Doc;
    }

    public function setPar18Doc(int $par18Doc): self
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

    public function getPar19Doc(): ?int
    {
        return $this->par19Doc;
    }

    public function setPar19Doc(int $par19Doc): self
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

    public function getPar20Doc(): ?int
    {
        return $this->par20Doc;
    }

    public function setPar20Doc(int $par20Doc): self
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

    public function getPar21Doc(): ?int
    {
        return $this->par21Doc;
    }

    public function setPar21Doc(int $par21Doc): self
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

    public function getPar22Doc(): ?int
    {
        return $this->par22Doc;
    }

    public function setPar22Doc(int $par22Doc): self
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

    public function getPar23Doc(): ?int
    {
        return $this->par23Doc;
    }

    public function setPar23Doc(int $par23Doc): self
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

    public function getPar25Doc(): ?int
    {
        return $this->par25Doc;
    }

    public function setPar25Doc(int $par25Doc): self
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

    public function getPar26Doc(): ?int
    {
        return $this->par26Doc;
    }

    public function setPar26Doc(int $par26Doc): self
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

    public function getPar27Doc(): ?int
    {
        return $this->par27Doc;
    }

    public function setPar27Doc(int $par27Doc): self
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

    public function getPar28Doc(): ?int
    {
        return $this->par28Doc;
    }

    public function setPar28Doc(int $par28Doc): self
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

    public function getPar29Doc(): ?int
    {
        return $this->par29Doc;
    }

    public function setPar29Doc(int $par29Doc): self
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

    public function getPar30Doc(): ?int
    {
        return $this->par30Doc;
    }

    public function setPar30Doc(int $par30Doc): self
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

    public function getPar31Doc(): ?int
    {
        return $this->par31Doc;
    }

    public function setPar31Doc(int $par31Doc): self
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

    public function getPar32Doc(): ?int
    {
        return $this->par32Doc;
    }

    public function setPar32Doc(int $par32Doc): self
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

    public function getPar33Doc(): ?int
    {
        return $this->par33Doc;
    }

    public function setPar33Doc(int $par33Doc): self
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

    public function getPar34Doc(): ?int
    {
        return $this->par34Doc;
    }

    public function setPar34Doc(int $par34Doc): self
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

    public function getPar35Doc(): ?int
    {
        return $this->par35Doc;
    }

    public function setPar35Doc(int $par35Doc): self
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

    public function getPar36Doc(): ?int
    {
        return $this->par36Doc;
    }

    public function setPar36Doc(int $par36Doc): self
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

    public function getPar37Doc(): ?int
    {
        return $this->par37Doc;
    }

    public function setPar37Doc(int $par37Doc): self
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

    public function getPar38Doc(): ?int
    {
        return $this->par38Doc;
    }

    public function setPar38Doc(int $par38Doc): self
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

    public function getPar39Doc(): ?int
    {
        return $this->par39Doc;
    }

    public function setPar39Doc(int $par39Doc): self
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

    public function getPar40Doc(): ?int
    {
        return $this->par40Doc;
    }

    public function setPar40Doc(int $par40Doc): self
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

    public function getPar41Doc(): ?int
    {
        return $this->par41Doc;
    }

    public function setPar41Doc(int $par41Doc): self
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

    public function getPar42Doc(): ?int
    {
        return $this->par42Doc;
    }

    public function setPar42Doc(int $par42Doc): self
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

    public function getPar43Doc(): ?int
    {
        return $this->par43Doc;
    }

    public function setPar43Doc(int $par43Doc): self
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

    public function getPar44Doc(): ?int
    {
        return $this->par44Doc;
    }

    public function setPar44Doc(int $par44Doc): self
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


}
