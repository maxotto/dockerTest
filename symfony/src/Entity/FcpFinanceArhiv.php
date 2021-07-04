<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FcpFinanceArhiv
 *
 * @ORM\Table(name="fcp_finance_arhiv", indexes={@ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class FcpFinanceArhiv
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
     * @ORM\Column(name="fin_year", type="integer", nullable=false, options={"unsigned"=true,"comment"="Финасовый год"})
     */
    private $finYear;

    /**
     * @var string
     *
     * @ORM\Column(name="f01_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Оформление земельных участков для строительства новых объектов"})
     */
    private $f01Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Оформление земельных участков для строительства новых объектов"})
     */
    private $f01Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f011_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - затраты на составление градостроительных планов участков"})
     */
    private $f011Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f011_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - затраты на составление градостроительных планов участков"})
     */
    private $f011Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f012_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - получение санитарно-эпидемиологических заключений, заключений о наличии или отсутствии объектов историко-культурного наследия"})
     */
    private $f012Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f012_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - получение санитарно-эпидемиологических заключений, заключений о наличии или отсутствии объектов историко-культурного наследия"})
     */
    private $f012Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f013_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - затраты на составление межевых планов земельных участков"})
     */
    private $f013Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f013_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - затраты на составление межевых планов земельных участков"})
     */
    private $f013Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f014_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - государственная регистрация договоров аренды земельных участков"})
     */
    private $f014Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f014_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - государственная регистрация договоров аренды земельных участков"})
     */
    private $f014Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f015_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - получение справки о сейсмичности"})
     */
    private $f015Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f015_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - получение справки о сейсмичности"})
     */
    private $f015Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f016_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - топографо-геодезические работы для межевания"})
     */
    private $f016Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f016_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - топографо-геодезические работы для межевания"})
     */
    private $f016Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f017_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - кадастровые работы"})
     */
    private $f017Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f017_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - кадастровые работы"})
     */
    private $f017Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f018_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - подготовка документов для оформления акта выбора земельных участков"})
     */
    private $f018Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f018_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - подготовка документов для оформления акта выбора земельных участков"})
     */
    private $f018Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f019_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - экологические проекты"})
     */
    private $f019Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f019_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - экологические проекты"})
     */
    private $f019Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Оформление прав на существующие земельные участки"})
     */
    private $f01tPlan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Оформление прав на существующие земельные участки"})
     */
    private $f01tFact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t1_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - затраты на составление градостроительных планов участков-на существующие земельные участки"})
     */
    private $f01t1Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t1_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - затраты на составление градостроительных планов участков-на существующие земельные участки"})
     */
    private $f01t1Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t2_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - получение санитарно-эпидемиологических заключений, заключений о наличии или отсутствии объектов историко-культурного наследия-на существующие земельные участки"})
     */
    private $f01t2Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t2_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - получение санитарно-эпидемиологических заключений, заключений о наличии или отсутствии объектов историко-культурного наследия-на существующие земельные участки"})
     */
    private $f01t2Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t3_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - затраты на составление межевых планов земельных участков-на существующие земельные участки"})
     */
    private $f01t3Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t3_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - затраты на составление межевых планов земельных участков-на существующие земельные участки"})
     */
    private $f01t3Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t4_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - государственная регистрация договоров аренды земельных участков-на существующие земельные участки"})
     */
    private $f01t4Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t4_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - государственная регистрация договоров аренды земельных участков-на существующие земельные участки"})
     */
    private $f01t4Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t5_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - получение справки о сейсмичности-на существующие земельные участки"})
     */
    private $f01t5Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t5_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - получение справки о сейсмичности-на существующие земельные участки"})
     */
    private $f01t5Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t6_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - топографо-геодезические работы для межевания-на существующие земельные участки"})
     */
    private $f01t6Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t6_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - топографо-геодезические работы для межевания-на существующие земельные участки"})
     */
    private $f01t6Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t7_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - кадастровые работы-на существующие земельные участки"})
     */
    private $f01t7Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t7_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - кадастровые работы-на существующие земельные участки"})
     */
    private $f01t7Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t8_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - подготовка документов для оформления акта выбора земельных участков-на существующие земельные участки"})
     */
    private $f01t8Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t8_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - подготовка документов для оформления акта выбора земельных участков-на существующие земельные участки"})
     */
    private $f01t8Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t9_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - экологические проекты-на существующие земельные участки"})
     */
    private $f01t9Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f01t9_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - экологические проекты-на существующие земельные участки"})
     */
    private $f01t9Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f02_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Оплата услуг по технологическому присоединению к электрическим сетям и выполнение ТУ по присоединению"})
     */
    private $f02Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f02_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Оплата услуг по технологическому присоединению к электрическим сетям и выполнение ТУ по присоединению"})
     */
    private $f02Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f021_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - технологическое присоединение электрических установок"})
     */
    private $f021Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f021_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - технологическое присоединение электрических установок"})
     */
    private $f021Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f022_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - модернизация энергоснабжения"})
     */
    private $f022Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f022_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - модернизация энергоснабжения"})
     */
    private $f022Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f023_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - выполнение ТУ, в том числе строительство ЛЭП"})
     */
    private $f023Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f023_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - выполнение ТУ, в том числе строительство ЛЭП"})
     */
    private $f023Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f03_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Реконструкция АМС"})
     */
    private $f03Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f03_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Реконструкция АМС"})
     */
    private $f03Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f03t_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Обследование АМС "})
     */
    private $f03tPlan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f03t_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Обследование АМС "})
     */
    private $f03tFact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f04_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Проведение реконструкции помещений для размещения оборудования ЦТВ"})
     */
    private $f04Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f04_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Проведение реконструкции помещений для размещения оборудования ЦТВ"})
     */
    private $f04Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f05_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Инженерные изыскания для строительства новых объектов"})
     */
    private $f05Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f05_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Инженерные изыскания для строительства новых объектов"})
     */
    private $f05Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f051_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Инженерно-геологические изыскания для строительства новых объектов"})
     */
    private $f051Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f051_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Инженерно-геологические изыскания для строительства новых объектов"})
     */
    private $f051Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f052_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Инженерно-геодезические изыскания для строительства новых объектов"})
     */
    private $f052Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f052_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Инженерно-геодезические изыскания для строительства новых объектов"})
     */
    private $f052Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f05t_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Инженерные изыскания на существующих объектах связи"})
     */
    private $f05tPlan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f05t_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Инженерные изыскания на существующих объектах связи"})
     */
    private $f05tFact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f05t1_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Инженерно-геологические изыскания для строительства новых объектов-на существующих объектах связи"})
     */
    private $f05t1Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f05t1_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Инженерно-геологические изыскания для строительства новых объектов-на существующих объектах связи"})
     */
    private $f05t1Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f05t2_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Инженерно-геодезические изыскания для строительства новых объектов-на существующих объектах связи"})
     */
    private $f05t2Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f05t2_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Инженерно-геодезические изыскания для строительства новых объектов-на существующих объектах связи"})
     */
    private $f05t2Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f06_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Ограждение объектов ЦТВ"})
     */
    private $f06Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f06_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Ограждение объектов ЦТВ"})
     */
    private $f06Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f08_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Модернизация и строительство транспортных сетей (РРЛ, ВОЛС) для ЦТВ"})
     */
    private $f08Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f08_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Модернизация и строительство транспортных сетей (РРЛ, ВОЛС) для ЦТВ"})
     */
    private $f08Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f19_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Оформление прав хозяйственного ведения на новые строения, сооружения"})
     */
    private $f19Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f19_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Оформление прав хозяйственного ведения на новые строения, сооружения"})
     */
    private $f19Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f19t_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Регистрация прав хозяйственного ведения на существующие строения и сооружения сети"})
     */
    private $f19tPlan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f19t_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Регистрация прав хозяйственного ведения на существующие строения и сооружения сети"})
     */
    private $f19tFact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f21_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Заключение Росавиации"})
     */
    private $f21Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f21_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Заключение Росавиации"})
     */
    private $f21Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f39_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Формирование центра кодирования и мультиплексирования "})
     */
    private $f39Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f39_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Формирование центра кодирования и мультиплексирования "})
     */
    private $f39Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f50_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Строительство завода АМС"})
     */
    private $f50Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f50_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Строительство завода АМС"})
     */
    private $f50Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f60_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Ремонтно-восстановительные работы на АМС"})
     */
    private $f60Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f60_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Ремонтно-восстановительные работы на АМС"})
     */
    private $f60Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f61_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Арендные платежи за земельные участки"})
     */
    private $f61Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f61_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Арендные платежи за земельные участки"})
     */
    private $f61Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f62_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Строительство дорог, зданий, сооружений (кроме объектов связи)"})
     */
    private $f62Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f62_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Строительство дорог, зданий, сооружений (кроме объектов связи)"})
     */
    private $f62Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f63_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Строительство объектов связи"})
     */
    private $f63Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f63_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Строительство объектов связи"})
     */
    private $f63Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f64_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Организация временного варианта включения передатчиков ЦТВ"})
     */
    private $f64Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f64_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Организация временного варианта включения передатчиков ЦТВ"})
     */
    private $f64Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f65_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Охранные мероприятия"})
     */
    private $f65Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f65_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Охранные мероприятия"})
     */
    private $f65Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f66_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Санитарно-эпидемиологическое заключение на ПРТО"})
     */
    private $f66Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f66_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Санитарно-эпидемиологическое заключение на ПРТО"})
     */
    private $f66Fact = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f74_plan", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="План - Организация доставки оборудования и расходных материалов на труднодоступные объекты цифрового наземного телерадиовещания"})
     */
    private $f74Plan = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="f74_fact", type="decimal", precision=13, scale=2, nullable=false, options={"default"="0.00","comment"="Факт - Организация доставки оборудования и расходных материалов на труднодоступные объекты цифрового наземного телерадиовещания"})
     */
    private $f74Fact = '0.00';

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

    public function getFinYear(): ?int
    {
        return $this->finYear;
    }

    public function setFinYear(int $finYear): self
    {
        $this->finYear = $finYear;

        return $this;
    }

    public function getF01Plan(): ?string
    {
        return $this->f01Plan;
    }

    public function setF01Plan(string $f01Plan): self
    {
        $this->f01Plan = $f01Plan;

        return $this;
    }

    public function getF01Fact(): ?string
    {
        return $this->f01Fact;
    }

    public function setF01Fact(string $f01Fact): self
    {
        $this->f01Fact = $f01Fact;

        return $this;
    }

    public function getF011Plan(): ?string
    {
        return $this->f011Plan;
    }

    public function setF011Plan(string $f011Plan): self
    {
        $this->f011Plan = $f011Plan;

        return $this;
    }

    public function getF011Fact(): ?string
    {
        return $this->f011Fact;
    }

    public function setF011Fact(string $f011Fact): self
    {
        $this->f011Fact = $f011Fact;

        return $this;
    }

    public function getF012Plan(): ?string
    {
        return $this->f012Plan;
    }

    public function setF012Plan(string $f012Plan): self
    {
        $this->f012Plan = $f012Plan;

        return $this;
    }

    public function getF012Fact(): ?string
    {
        return $this->f012Fact;
    }

    public function setF012Fact(string $f012Fact): self
    {
        $this->f012Fact = $f012Fact;

        return $this;
    }

    public function getF013Plan(): ?string
    {
        return $this->f013Plan;
    }

    public function setF013Plan(string $f013Plan): self
    {
        $this->f013Plan = $f013Plan;

        return $this;
    }

    public function getF013Fact(): ?string
    {
        return $this->f013Fact;
    }

    public function setF013Fact(string $f013Fact): self
    {
        $this->f013Fact = $f013Fact;

        return $this;
    }

    public function getF014Plan(): ?string
    {
        return $this->f014Plan;
    }

    public function setF014Plan(string $f014Plan): self
    {
        $this->f014Plan = $f014Plan;

        return $this;
    }

    public function getF014Fact(): ?string
    {
        return $this->f014Fact;
    }

    public function setF014Fact(string $f014Fact): self
    {
        $this->f014Fact = $f014Fact;

        return $this;
    }

    public function getF015Plan(): ?string
    {
        return $this->f015Plan;
    }

    public function setF015Plan(string $f015Plan): self
    {
        $this->f015Plan = $f015Plan;

        return $this;
    }

    public function getF015Fact(): ?string
    {
        return $this->f015Fact;
    }

    public function setF015Fact(string $f015Fact): self
    {
        $this->f015Fact = $f015Fact;

        return $this;
    }

    public function getF016Plan(): ?string
    {
        return $this->f016Plan;
    }

    public function setF016Plan(string $f016Plan): self
    {
        $this->f016Plan = $f016Plan;

        return $this;
    }

    public function getF016Fact(): ?string
    {
        return $this->f016Fact;
    }

    public function setF016Fact(string $f016Fact): self
    {
        $this->f016Fact = $f016Fact;

        return $this;
    }

    public function getF017Plan(): ?string
    {
        return $this->f017Plan;
    }

    public function setF017Plan(string $f017Plan): self
    {
        $this->f017Plan = $f017Plan;

        return $this;
    }

    public function getF017Fact(): ?string
    {
        return $this->f017Fact;
    }

    public function setF017Fact(string $f017Fact): self
    {
        $this->f017Fact = $f017Fact;

        return $this;
    }

    public function getF018Plan(): ?string
    {
        return $this->f018Plan;
    }

    public function setF018Plan(string $f018Plan): self
    {
        $this->f018Plan = $f018Plan;

        return $this;
    }

    public function getF018Fact(): ?string
    {
        return $this->f018Fact;
    }

    public function setF018Fact(string $f018Fact): self
    {
        $this->f018Fact = $f018Fact;

        return $this;
    }

    public function getF019Plan(): ?string
    {
        return $this->f019Plan;
    }

    public function setF019Plan(string $f019Plan): self
    {
        $this->f019Plan = $f019Plan;

        return $this;
    }

    public function getF019Fact(): ?string
    {
        return $this->f019Fact;
    }

    public function setF019Fact(string $f019Fact): self
    {
        $this->f019Fact = $f019Fact;

        return $this;
    }

    public function getF01tPlan(): ?string
    {
        return $this->f01tPlan;
    }

    public function setF01tPlan(string $f01tPlan): self
    {
        $this->f01tPlan = $f01tPlan;

        return $this;
    }

    public function getF01tFact(): ?string
    {
        return $this->f01tFact;
    }

    public function setF01tFact(string $f01tFact): self
    {
        $this->f01tFact = $f01tFact;

        return $this;
    }

    public function getF01t1Plan(): ?string
    {
        return $this->f01t1Plan;
    }

    public function setF01t1Plan(string $f01t1Plan): self
    {
        $this->f01t1Plan = $f01t1Plan;

        return $this;
    }

    public function getF01t1Fact(): ?string
    {
        return $this->f01t1Fact;
    }

    public function setF01t1Fact(string $f01t1Fact): self
    {
        $this->f01t1Fact = $f01t1Fact;

        return $this;
    }

    public function getF01t2Plan(): ?string
    {
        return $this->f01t2Plan;
    }

    public function setF01t2Plan(string $f01t2Plan): self
    {
        $this->f01t2Plan = $f01t2Plan;

        return $this;
    }

    public function getF01t2Fact(): ?string
    {
        return $this->f01t2Fact;
    }

    public function setF01t2Fact(string $f01t2Fact): self
    {
        $this->f01t2Fact = $f01t2Fact;

        return $this;
    }

    public function getF01t3Plan(): ?string
    {
        return $this->f01t3Plan;
    }

    public function setF01t3Plan(string $f01t3Plan): self
    {
        $this->f01t3Plan = $f01t3Plan;

        return $this;
    }

    public function getF01t3Fact(): ?string
    {
        return $this->f01t3Fact;
    }

    public function setF01t3Fact(string $f01t3Fact): self
    {
        $this->f01t3Fact = $f01t3Fact;

        return $this;
    }

    public function getF01t4Plan(): ?string
    {
        return $this->f01t4Plan;
    }

    public function setF01t4Plan(string $f01t4Plan): self
    {
        $this->f01t4Plan = $f01t4Plan;

        return $this;
    }

    public function getF01t4Fact(): ?string
    {
        return $this->f01t4Fact;
    }

    public function setF01t4Fact(string $f01t4Fact): self
    {
        $this->f01t4Fact = $f01t4Fact;

        return $this;
    }

    public function getF01t5Plan(): ?string
    {
        return $this->f01t5Plan;
    }

    public function setF01t5Plan(string $f01t5Plan): self
    {
        $this->f01t5Plan = $f01t5Plan;

        return $this;
    }

    public function getF01t5Fact(): ?string
    {
        return $this->f01t5Fact;
    }

    public function setF01t5Fact(string $f01t5Fact): self
    {
        $this->f01t5Fact = $f01t5Fact;

        return $this;
    }

    public function getF01t6Plan(): ?string
    {
        return $this->f01t6Plan;
    }

    public function setF01t6Plan(string $f01t6Plan): self
    {
        $this->f01t6Plan = $f01t6Plan;

        return $this;
    }

    public function getF01t6Fact(): ?string
    {
        return $this->f01t6Fact;
    }

    public function setF01t6Fact(string $f01t6Fact): self
    {
        $this->f01t6Fact = $f01t6Fact;

        return $this;
    }

    public function getF01t7Plan(): ?string
    {
        return $this->f01t7Plan;
    }

    public function setF01t7Plan(string $f01t7Plan): self
    {
        $this->f01t7Plan = $f01t7Plan;

        return $this;
    }

    public function getF01t7Fact(): ?string
    {
        return $this->f01t7Fact;
    }

    public function setF01t7Fact(string $f01t7Fact): self
    {
        $this->f01t7Fact = $f01t7Fact;

        return $this;
    }

    public function getF01t8Plan(): ?string
    {
        return $this->f01t8Plan;
    }

    public function setF01t8Plan(string $f01t8Plan): self
    {
        $this->f01t8Plan = $f01t8Plan;

        return $this;
    }

    public function getF01t8Fact(): ?string
    {
        return $this->f01t8Fact;
    }

    public function setF01t8Fact(string $f01t8Fact): self
    {
        $this->f01t8Fact = $f01t8Fact;

        return $this;
    }

    public function getF01t9Plan(): ?string
    {
        return $this->f01t9Plan;
    }

    public function setF01t9Plan(string $f01t9Plan): self
    {
        $this->f01t9Plan = $f01t9Plan;

        return $this;
    }

    public function getF01t9Fact(): ?string
    {
        return $this->f01t9Fact;
    }

    public function setF01t9Fact(string $f01t9Fact): self
    {
        $this->f01t9Fact = $f01t9Fact;

        return $this;
    }

    public function getF02Plan(): ?string
    {
        return $this->f02Plan;
    }

    public function setF02Plan(string $f02Plan): self
    {
        $this->f02Plan = $f02Plan;

        return $this;
    }

    public function getF02Fact(): ?string
    {
        return $this->f02Fact;
    }

    public function setF02Fact(string $f02Fact): self
    {
        $this->f02Fact = $f02Fact;

        return $this;
    }

    public function getF021Plan(): ?string
    {
        return $this->f021Plan;
    }

    public function setF021Plan(string $f021Plan): self
    {
        $this->f021Plan = $f021Plan;

        return $this;
    }

    public function getF021Fact(): ?string
    {
        return $this->f021Fact;
    }

    public function setF021Fact(string $f021Fact): self
    {
        $this->f021Fact = $f021Fact;

        return $this;
    }

    public function getF022Plan(): ?string
    {
        return $this->f022Plan;
    }

    public function setF022Plan(string $f022Plan): self
    {
        $this->f022Plan = $f022Plan;

        return $this;
    }

    public function getF022Fact(): ?string
    {
        return $this->f022Fact;
    }

    public function setF022Fact(string $f022Fact): self
    {
        $this->f022Fact = $f022Fact;

        return $this;
    }

    public function getF023Plan(): ?string
    {
        return $this->f023Plan;
    }

    public function setF023Plan(string $f023Plan): self
    {
        $this->f023Plan = $f023Plan;

        return $this;
    }

    public function getF023Fact(): ?string
    {
        return $this->f023Fact;
    }

    public function setF023Fact(string $f023Fact): self
    {
        $this->f023Fact = $f023Fact;

        return $this;
    }

    public function getF03Plan(): ?string
    {
        return $this->f03Plan;
    }

    public function setF03Plan(string $f03Plan): self
    {
        $this->f03Plan = $f03Plan;

        return $this;
    }

    public function getF03Fact(): ?string
    {
        return $this->f03Fact;
    }

    public function setF03Fact(string $f03Fact): self
    {
        $this->f03Fact = $f03Fact;

        return $this;
    }

    public function getF03tPlan(): ?string
    {
        return $this->f03tPlan;
    }

    public function setF03tPlan(string $f03tPlan): self
    {
        $this->f03tPlan = $f03tPlan;

        return $this;
    }

    public function getF03tFact(): ?string
    {
        return $this->f03tFact;
    }

    public function setF03tFact(string $f03tFact): self
    {
        $this->f03tFact = $f03tFact;

        return $this;
    }

    public function getF04Plan(): ?string
    {
        return $this->f04Plan;
    }

    public function setF04Plan(string $f04Plan): self
    {
        $this->f04Plan = $f04Plan;

        return $this;
    }

    public function getF04Fact(): ?string
    {
        return $this->f04Fact;
    }

    public function setF04Fact(string $f04Fact): self
    {
        $this->f04Fact = $f04Fact;

        return $this;
    }

    public function getF05Plan(): ?string
    {
        return $this->f05Plan;
    }

    public function setF05Plan(string $f05Plan): self
    {
        $this->f05Plan = $f05Plan;

        return $this;
    }

    public function getF05Fact(): ?string
    {
        return $this->f05Fact;
    }

    public function setF05Fact(string $f05Fact): self
    {
        $this->f05Fact = $f05Fact;

        return $this;
    }

    public function getF051Plan(): ?string
    {
        return $this->f051Plan;
    }

    public function setF051Plan(string $f051Plan): self
    {
        $this->f051Plan = $f051Plan;

        return $this;
    }

    public function getF051Fact(): ?string
    {
        return $this->f051Fact;
    }

    public function setF051Fact(string $f051Fact): self
    {
        $this->f051Fact = $f051Fact;

        return $this;
    }

    public function getF052Plan(): ?string
    {
        return $this->f052Plan;
    }

    public function setF052Plan(string $f052Plan): self
    {
        $this->f052Plan = $f052Plan;

        return $this;
    }

    public function getF052Fact(): ?string
    {
        return $this->f052Fact;
    }

    public function setF052Fact(string $f052Fact): self
    {
        $this->f052Fact = $f052Fact;

        return $this;
    }

    public function getF05tPlan(): ?string
    {
        return $this->f05tPlan;
    }

    public function setF05tPlan(string $f05tPlan): self
    {
        $this->f05tPlan = $f05tPlan;

        return $this;
    }

    public function getF05tFact(): ?string
    {
        return $this->f05tFact;
    }

    public function setF05tFact(string $f05tFact): self
    {
        $this->f05tFact = $f05tFact;

        return $this;
    }

    public function getF05t1Plan(): ?string
    {
        return $this->f05t1Plan;
    }

    public function setF05t1Plan(string $f05t1Plan): self
    {
        $this->f05t1Plan = $f05t1Plan;

        return $this;
    }

    public function getF05t1Fact(): ?string
    {
        return $this->f05t1Fact;
    }

    public function setF05t1Fact(string $f05t1Fact): self
    {
        $this->f05t1Fact = $f05t1Fact;

        return $this;
    }

    public function getF05t2Plan(): ?string
    {
        return $this->f05t2Plan;
    }

    public function setF05t2Plan(string $f05t2Plan): self
    {
        $this->f05t2Plan = $f05t2Plan;

        return $this;
    }

    public function getF05t2Fact(): ?string
    {
        return $this->f05t2Fact;
    }

    public function setF05t2Fact(string $f05t2Fact): self
    {
        $this->f05t2Fact = $f05t2Fact;

        return $this;
    }

    public function getF06Plan(): ?string
    {
        return $this->f06Plan;
    }

    public function setF06Plan(string $f06Plan): self
    {
        $this->f06Plan = $f06Plan;

        return $this;
    }

    public function getF06Fact(): ?string
    {
        return $this->f06Fact;
    }

    public function setF06Fact(string $f06Fact): self
    {
        $this->f06Fact = $f06Fact;

        return $this;
    }

    public function getF08Plan(): ?string
    {
        return $this->f08Plan;
    }

    public function setF08Plan(string $f08Plan): self
    {
        $this->f08Plan = $f08Plan;

        return $this;
    }

    public function getF08Fact(): ?string
    {
        return $this->f08Fact;
    }

    public function setF08Fact(string $f08Fact): self
    {
        $this->f08Fact = $f08Fact;

        return $this;
    }

    public function getF19Plan(): ?string
    {
        return $this->f19Plan;
    }

    public function setF19Plan(string $f19Plan): self
    {
        $this->f19Plan = $f19Plan;

        return $this;
    }

    public function getF19Fact(): ?string
    {
        return $this->f19Fact;
    }

    public function setF19Fact(string $f19Fact): self
    {
        $this->f19Fact = $f19Fact;

        return $this;
    }

    public function getF19tPlan(): ?string
    {
        return $this->f19tPlan;
    }

    public function setF19tPlan(string $f19tPlan): self
    {
        $this->f19tPlan = $f19tPlan;

        return $this;
    }

    public function getF19tFact(): ?string
    {
        return $this->f19tFact;
    }

    public function setF19tFact(string $f19tFact): self
    {
        $this->f19tFact = $f19tFact;

        return $this;
    }

    public function getF21Plan(): ?string
    {
        return $this->f21Plan;
    }

    public function setF21Plan(string $f21Plan): self
    {
        $this->f21Plan = $f21Plan;

        return $this;
    }

    public function getF21Fact(): ?string
    {
        return $this->f21Fact;
    }

    public function setF21Fact(string $f21Fact): self
    {
        $this->f21Fact = $f21Fact;

        return $this;
    }

    public function getF39Plan(): ?string
    {
        return $this->f39Plan;
    }

    public function setF39Plan(string $f39Plan): self
    {
        $this->f39Plan = $f39Plan;

        return $this;
    }

    public function getF39Fact(): ?string
    {
        return $this->f39Fact;
    }

    public function setF39Fact(string $f39Fact): self
    {
        $this->f39Fact = $f39Fact;

        return $this;
    }

    public function getF50Plan(): ?string
    {
        return $this->f50Plan;
    }

    public function setF50Plan(string $f50Plan): self
    {
        $this->f50Plan = $f50Plan;

        return $this;
    }

    public function getF50Fact(): ?string
    {
        return $this->f50Fact;
    }

    public function setF50Fact(string $f50Fact): self
    {
        $this->f50Fact = $f50Fact;

        return $this;
    }

    public function getF60Plan(): ?string
    {
        return $this->f60Plan;
    }

    public function setF60Plan(string $f60Plan): self
    {
        $this->f60Plan = $f60Plan;

        return $this;
    }

    public function getF60Fact(): ?string
    {
        return $this->f60Fact;
    }

    public function setF60Fact(string $f60Fact): self
    {
        $this->f60Fact = $f60Fact;

        return $this;
    }

    public function getF61Plan(): ?string
    {
        return $this->f61Plan;
    }

    public function setF61Plan(string $f61Plan): self
    {
        $this->f61Plan = $f61Plan;

        return $this;
    }

    public function getF61Fact(): ?string
    {
        return $this->f61Fact;
    }

    public function setF61Fact(string $f61Fact): self
    {
        $this->f61Fact = $f61Fact;

        return $this;
    }

    public function getF62Plan(): ?string
    {
        return $this->f62Plan;
    }

    public function setF62Plan(string $f62Plan): self
    {
        $this->f62Plan = $f62Plan;

        return $this;
    }

    public function getF62Fact(): ?string
    {
        return $this->f62Fact;
    }

    public function setF62Fact(string $f62Fact): self
    {
        $this->f62Fact = $f62Fact;

        return $this;
    }

    public function getF63Plan(): ?string
    {
        return $this->f63Plan;
    }

    public function setF63Plan(string $f63Plan): self
    {
        $this->f63Plan = $f63Plan;

        return $this;
    }

    public function getF63Fact(): ?string
    {
        return $this->f63Fact;
    }

    public function setF63Fact(string $f63Fact): self
    {
        $this->f63Fact = $f63Fact;

        return $this;
    }

    public function getF64Plan(): ?string
    {
        return $this->f64Plan;
    }

    public function setF64Plan(string $f64Plan): self
    {
        $this->f64Plan = $f64Plan;

        return $this;
    }

    public function getF64Fact(): ?string
    {
        return $this->f64Fact;
    }

    public function setF64Fact(string $f64Fact): self
    {
        $this->f64Fact = $f64Fact;

        return $this;
    }

    public function getF65Plan(): ?string
    {
        return $this->f65Plan;
    }

    public function setF65Plan(string $f65Plan): self
    {
        $this->f65Plan = $f65Plan;

        return $this;
    }

    public function getF65Fact(): ?string
    {
        return $this->f65Fact;
    }

    public function setF65Fact(string $f65Fact): self
    {
        $this->f65Fact = $f65Fact;

        return $this;
    }

    public function getF66Plan(): ?string
    {
        return $this->f66Plan;
    }

    public function setF66Plan(string $f66Plan): self
    {
        $this->f66Plan = $f66Plan;

        return $this;
    }

    public function getF66Fact(): ?string
    {
        return $this->f66Fact;
    }

    public function setF66Fact(string $f66Fact): self
    {
        $this->f66Fact = $f66Fact;

        return $this;
    }

    public function getF74Plan(): ?string
    {
        return $this->f74Plan;
    }

    public function setF74Plan(string $f74Plan): self
    {
        $this->f74Plan = $f74Plan;

        return $this;
    }

    public function getF74Fact(): ?string
    {
        return $this->f74Fact;
    }

    public function setF74Fact(string $f74Fact): self
    {
        $this->f74Fact = $f74Fact;

        return $this;
    }


}
