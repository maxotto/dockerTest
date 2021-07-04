<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FcpFinModelArhiv
 *
 * @ORM\Table(name="fcp_fin_model_arhiv", indexes={@ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class FcpFinModelArhiv
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
     * @ORM\Column(name="pir_fact_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-бюжет-2010"})
     */
    private $pirFact2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-внебюджет-2010"})
     */
    private $pirFact2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-бюжет-2011"})
     */
    private $pirFact2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-внебюджет-2011"})
     */
    private $pirFact2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-бюжет-2012"})
     */
    private $pirFact2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-внебюджет-2012"})
     */
    private $pirFact2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-бюжет-2013"})
     */
    private $pirFact2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-внебюджет-2013"})
     */
    private $pirFact2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-бюжет-2014"})
     */
    private $pirFact2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-внебюджет-2014"})
     */
    private $pirFact2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-бюжет-2015"})
     */
    private $pirFact2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-внебюджет-2015"})
     */
    private $pirFact2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-бюжет-2016"})
     */
    private $pirFact2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_fact_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (смета)-внебюджет-2016"})
     */
    private $pirFact2016V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-бюжет-2010"})
     */
    private $oborFact2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-внебюджет-2010"})
     */
    private $oborFact2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-бюжет-2011"})
     */
    private $oborFact2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-внебюджет-2011"})
     */
    private $oborFact2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-бюжет-2012"})
     */
    private $oborFact2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-внебюджет-2012"})
     */
    private $oborFact2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-бюжет-2013"})
     */
    private $oborFact2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-внебюджет-2013"})
     */
    private $oborFact2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-бюжет-2014"})
     */
    private $oborFact2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-внебюджет-2014"})
     */
    private $oborFact2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-бюжет-2015"})
     */
    private $oborFact2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-внебюджет-2015"})
     */
    private $oborFact2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-бюжет-2016"})
     */
    private $oborFact2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="obor_fact_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Оборудование (смета)-внебюджет-2016"})
     */
    private $oborFact2016V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-бюжет-2010"})
     */
    private $smpFact2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-внебюджет-2010"})
     */
    private $smpFact2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-бюжет-2011"})
     */
    private $smpFact2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-внебюджет-2011"})
     */
    private $smpFact2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-бюжет-2012"})
     */
    private $smpFact2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-внебюджет-2012"})
     */
    private $smpFact2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-бюжет-2013"})
     */
    private $smpFact2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-внебюджет-2013"})
     */
    private $smpFact2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-бюжет-2014"})
     */
    private $smpFact2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-внебюджет-2014"})
     */
    private $smpFact2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-бюжет-2015"})
     */
    private $smpFact2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-внебюджет-2015"})
     */
    private $smpFact2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-бюжет-2016"})
     */
    private $smpFact2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="smp_fact_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="СМР (смета)-внебюджет-2016"})
     */
    private $smpFact2016V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-бюжет-2010"})
     */
    private $prochFact2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-внебюджет-2010"})
     */
    private $prochFact2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-бюжет-2011"})
     */
    private $prochFact2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-внебюджет-2011"})
     */
    private $prochFact2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-бюжет-2012"})
     */
    private $prochFact2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-внебюджет-2012"})
     */
    private $prochFact2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-бюжет-2013"})
     */
    private $prochFact2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-внебюджет-2013"})
     */
    private $prochFact2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-бюжет-2014"})
     */
    private $prochFact2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-внебюджет-2014"})
     */
    private $prochFact2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-бюжет-2015"})
     */
    private $prochFact2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-внебюджет-2015"})
     */
    private $prochFact2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-бюжет-2016"})
     */
    private $prochFact2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="proch_fact_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Прочие затраты (смета)-внебюджет-2016"})
     */
    private $prochFact2016V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-бюжет-2010"})
     */
    private $summFact2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-внебюджет-2010"})
     */
    private $summFact2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-бюжет-2011"})
     */
    private $summFact2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-внебюджет-2011"})
     */
    private $summFact2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-бюжет-2012"})
     */
    private $summFact2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-внебюджет-2012"})
     */
    private $summFact2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-бюжет-2013"})
     */
    private $summFact2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-внебюджет-2013"})
     */
    private $summFact2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-бюжет-2014"})
     */
    private $summFact2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-внебюджет-2014"})
     */
    private $summFact2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-бюжет-2015"})
     */
    private $summFact2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-внебюджет-2015"})
     */
    private $summFact2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-бюжет-2016"})
     */
    private $summFact2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_fact_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Сметная стоимость-внебюджет-2016"})
     */
    private $summFact2016V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-бюжет-2010"})
     */
    private $pirPlan2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-внебюджет-2010"})
     */
    private $pirPlan2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-бюжет-2011"})
     */
    private $pirPlan2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-внебюджет-2011"})
     */
    private $pirPlan2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-бюжет-2012"})
     */
    private $pirPlan2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-внебюджет-2012"})
     */
    private $pirPlan2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-бюжет-2013"})
     */
    private $pirPlan2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-внебюджет-2013"})
     */
    private $pirPlan2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-бюжет-2014"})
     */
    private $pirPlan2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-внебюджет-2014"})
     */
    private $pirPlan2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-бюжет-2015"})
     */
    private $pirPlan2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-внебюджет-2015"})
     */
    private $pirPlan2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-бюжет-2016"})
     */
    private $pirPlan2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="pir_plan_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="ПИР (пределы)-внебюджет-2016"})
     */
    private $pirPlan2016V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-бюжет-2010"})
     */
    private $storyPlan2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-внебюджет-2010"})
     */
    private $storyPlan2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-бюжет-2011"})
     */
    private $storyPlan2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-внебюджет-2011"})
     */
    private $storyPlan2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-бюжет-2012"})
     */
    private $storyPlan2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-внебюджет-2012"})
     */
    private $storyPlan2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-бюжет-2013"})
     */
    private $storyPlan2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-внебюджет-2013"})
     */
    private $storyPlan2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-бюжет-2014"})
     */
    private $storyPlan2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-внебюджет-2014"})
     */
    private $storyPlan2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-бюжет-2015"})
     */
    private $storyPlan2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-внебюджет-2015"})
     */
    private $storyPlan2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-бюжет-2016"})
     */
    private $storyPlan2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="story_plan_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Стройка (пределы)-внебюджет-2016"})
     */
    private $storyPlan2016V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-бюжет-2010"})
     */
    private $summPlan2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-внебюджет-2010"})
     */
    private $summPlan2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-бюжет-2011"})
     */
    private $summPlan2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-внебюджет-2011"})
     */
    private $summPlan2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-бюжет-2012"})
     */
    private $summPlan2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-внебюджет-2012"})
     */
    private $summPlan2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-бюжет-2013"})
     */
    private $summPlan2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-внебюджет-2013"})
     */
    private $summPlan2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-бюжет-2014"})
     */
    private $summPlan2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-внебюджет-2014"})
     */
    private $summPlan2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-бюжет-2015"})
     */
    private $summPlan2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-внебюджет-2015"})
     */
    private $summPlan2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-бюжет-2016"})
     */
    private $summPlan2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="summ_plan_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Предельная стоимость-внебюджет-2016"})
     */
    private $summPlan2016V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-бюжет-2010"})
     */
    private $vysAms2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-внебюджет-2010"})
     */
    private $vysAms2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-бюжет-2011"})
     */
    private $vysAms2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-внебюджет-2011"})
     */
    private $vysAms2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-бюжет-2012"})
     */
    private $vysAms2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-внебюджет-2012"})
     */
    private $vysAms2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-бюжет-2013"})
     */
    private $vysAms2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-внебюджет-2013"})
     */
    private $vysAms2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-бюжет-2014"})
     */
    private $vysAms2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-внебюджет-2014"})
     */
    private $vysAms2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-бюжет-2015"})
     */
    private $vysAms2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-внебюджет-2015"})
     */
    private $vysAms2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-бюжет-2016"})
     */
    private $vysAms2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="vys_ams_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Высотные АМС (стоимость)-внебюджет-2016"})
     */
    private $vysAms2016V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-бюжет-2010"})
     */
    private $buyBuilding2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-внебюджет-2010"})
     */
    private $buyBuilding2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-бюжет-2011"})
     */
    private $buyBuilding2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-внебюджет-2011"})
     */
    private $buyBuilding2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-бюжет-2012"})
     */
    private $buyBuilding2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-внебюджет-2012"})
     */
    private $buyBuilding2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-бюжет-2013"})
     */
    private $buyBuilding2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-внебюджет-2013"})
     */
    private $buyBuilding2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-бюжет-2014"})
     */
    private $buyBuilding2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-внебюджет-2014"})
     */
    private $buyBuilding2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-бюжет-2015"})
     */
    private $buyBuilding2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-внебюджет-2015"})
     */
    private $buyBuilding2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-бюжет-2016"})
     */
    private $buyBuilding2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="buy_building_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Покупка здания/комплекса (стоимость)-внебюджет-2016"})
     */
    private $buyBuilding2016V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-бюжет-2010"})
     */
    private $rvrAms2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-внебюджет-2010"})
     */
    private $rvrAms2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-бюжет-2011"})
     */
    private $rvrAms2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-внебюджет-2011"})
     */
    private $rvrAms2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-бюжет-2012"})
     */
    private $rvrAms2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-внебюджет-2012"})
     */
    private $rvrAms2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-бюжет-2013"})
     */
    private $rvrAms2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-внебюджет-2013"})
     */
    private $rvrAms2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-бюжет-2014"})
     */
    private $rvrAms2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-внебюджет-2014"})
     */
    private $rvrAms2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-бюжет-2015"})
     */
    private $rvrAms2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-внебюджет-2015"})
     */
    private $rvrAms2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-бюжет-2016"})
     */
    private $rvrAms2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_ams_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные на (АМС)-внебюджет-2016"})
     */
    private $rvrAms2016V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2010_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-бюжет-2010"})
     */
    private $rvrBuilding2010B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2010_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-внебюджет-2010"})
     */
    private $rvrBuilding2010V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2011_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-бюжет-2011"})
     */
    private $rvrBuilding2011B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2011_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-внебюджет-2011"})
     */
    private $rvrBuilding2011V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2012_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-бюжет-2012"})
     */
    private $rvrBuilding2012B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2012_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-внебюджет-2012"})
     */
    private $rvrBuilding2012V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2013_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-бюжет-2013"})
     */
    private $rvrBuilding2013B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2013_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-внебюджет-2013"})
     */
    private $rvrBuilding2013V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2014_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-бюжет-2014"})
     */
    private $rvrBuilding2014B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2014_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-внебюджет-2014"})
     */
    private $rvrBuilding2014V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2015_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-бюжет-2015"})
     */
    private $rvrBuilding2015B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2015_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-внебюджет-2015"})
     */
    private $rvrBuilding2015V = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2016_b", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-бюжет-2016"})
     */
    private $rvrBuilding2016B = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="rvr_building_2016_v", type="decimal", precision=20, scale=2, nullable=false, options={"default"="0.00","comment"="Ремонтно-восстановительные (помещения)-внебюджет-2016"})
     */
    private $rvrBuilding2016V = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_pir", type="date", nullable=false, options={"comment"="Дата начала финансирования (ПИР)"})
     */
    private $dateFinPir;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end_pir", type="date", nullable=false, options={"comment"="Дата окончания работ (ПИР)"})
     */
    private $dateEndPir;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_build", type="date", nullable=false, options={"comment"="Дата начала финансирования (Стройка)"})
     */
    private $dateFinBuild;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end_build", type="date", nullable=false, options={"comment"="Дата окончания работ (Стройка)"})
     */
    private $dateEndBuild;

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

    public function getPirFact2010B(): ?string
    {
        return $this->pirFact2010B;
    }

    public function setPirFact2010B(string $pirFact2010B): self
    {
        $this->pirFact2010B = $pirFact2010B;

        return $this;
    }

    public function getPirFact2010V(): ?string
    {
        return $this->pirFact2010V;
    }

    public function setPirFact2010V(string $pirFact2010V): self
    {
        $this->pirFact2010V = $pirFact2010V;

        return $this;
    }

    public function getPirFact2011B(): ?string
    {
        return $this->pirFact2011B;
    }

    public function setPirFact2011B(string $pirFact2011B): self
    {
        $this->pirFact2011B = $pirFact2011B;

        return $this;
    }

    public function getPirFact2011V(): ?string
    {
        return $this->pirFact2011V;
    }

    public function setPirFact2011V(string $pirFact2011V): self
    {
        $this->pirFact2011V = $pirFact2011V;

        return $this;
    }

    public function getPirFact2012B(): ?string
    {
        return $this->pirFact2012B;
    }

    public function setPirFact2012B(string $pirFact2012B): self
    {
        $this->pirFact2012B = $pirFact2012B;

        return $this;
    }

    public function getPirFact2012V(): ?string
    {
        return $this->pirFact2012V;
    }

    public function setPirFact2012V(string $pirFact2012V): self
    {
        $this->pirFact2012V = $pirFact2012V;

        return $this;
    }

    public function getPirFact2013B(): ?string
    {
        return $this->pirFact2013B;
    }

    public function setPirFact2013B(string $pirFact2013B): self
    {
        $this->pirFact2013B = $pirFact2013B;

        return $this;
    }

    public function getPirFact2013V(): ?string
    {
        return $this->pirFact2013V;
    }

    public function setPirFact2013V(string $pirFact2013V): self
    {
        $this->pirFact2013V = $pirFact2013V;

        return $this;
    }

    public function getPirFact2014B(): ?string
    {
        return $this->pirFact2014B;
    }

    public function setPirFact2014B(string $pirFact2014B): self
    {
        $this->pirFact2014B = $pirFact2014B;

        return $this;
    }

    public function getPirFact2014V(): ?string
    {
        return $this->pirFact2014V;
    }

    public function setPirFact2014V(string $pirFact2014V): self
    {
        $this->pirFact2014V = $pirFact2014V;

        return $this;
    }

    public function getPirFact2015B(): ?string
    {
        return $this->pirFact2015B;
    }

    public function setPirFact2015B(string $pirFact2015B): self
    {
        $this->pirFact2015B = $pirFact2015B;

        return $this;
    }

    public function getPirFact2015V(): ?string
    {
        return $this->pirFact2015V;
    }

    public function setPirFact2015V(string $pirFact2015V): self
    {
        $this->pirFact2015V = $pirFact2015V;

        return $this;
    }

    public function getPirFact2016B(): ?string
    {
        return $this->pirFact2016B;
    }

    public function setPirFact2016B(string $pirFact2016B): self
    {
        $this->pirFact2016B = $pirFact2016B;

        return $this;
    }

    public function getPirFact2016V(): ?string
    {
        return $this->pirFact2016V;
    }

    public function setPirFact2016V(string $pirFact2016V): self
    {
        $this->pirFact2016V = $pirFact2016V;

        return $this;
    }

    public function getOborFact2010B(): ?string
    {
        return $this->oborFact2010B;
    }

    public function setOborFact2010B(string $oborFact2010B): self
    {
        $this->oborFact2010B = $oborFact2010B;

        return $this;
    }

    public function getOborFact2010V(): ?string
    {
        return $this->oborFact2010V;
    }

    public function setOborFact2010V(string $oborFact2010V): self
    {
        $this->oborFact2010V = $oborFact2010V;

        return $this;
    }

    public function getOborFact2011B(): ?string
    {
        return $this->oborFact2011B;
    }

    public function setOborFact2011B(string $oborFact2011B): self
    {
        $this->oborFact2011B = $oborFact2011B;

        return $this;
    }

    public function getOborFact2011V(): ?string
    {
        return $this->oborFact2011V;
    }

    public function setOborFact2011V(string $oborFact2011V): self
    {
        $this->oborFact2011V = $oborFact2011V;

        return $this;
    }

    public function getOborFact2012B(): ?string
    {
        return $this->oborFact2012B;
    }

    public function setOborFact2012B(string $oborFact2012B): self
    {
        $this->oborFact2012B = $oborFact2012B;

        return $this;
    }

    public function getOborFact2012V(): ?string
    {
        return $this->oborFact2012V;
    }

    public function setOborFact2012V(string $oborFact2012V): self
    {
        $this->oborFact2012V = $oborFact2012V;

        return $this;
    }

    public function getOborFact2013B(): ?string
    {
        return $this->oborFact2013B;
    }

    public function setOborFact2013B(string $oborFact2013B): self
    {
        $this->oborFact2013B = $oborFact2013B;

        return $this;
    }

    public function getOborFact2013V(): ?string
    {
        return $this->oborFact2013V;
    }

    public function setOborFact2013V(string $oborFact2013V): self
    {
        $this->oborFact2013V = $oborFact2013V;

        return $this;
    }

    public function getOborFact2014B(): ?string
    {
        return $this->oborFact2014B;
    }

    public function setOborFact2014B(string $oborFact2014B): self
    {
        $this->oborFact2014B = $oborFact2014B;

        return $this;
    }

    public function getOborFact2014V(): ?string
    {
        return $this->oborFact2014V;
    }

    public function setOborFact2014V(string $oborFact2014V): self
    {
        $this->oborFact2014V = $oborFact2014V;

        return $this;
    }

    public function getOborFact2015B(): ?string
    {
        return $this->oborFact2015B;
    }

    public function setOborFact2015B(string $oborFact2015B): self
    {
        $this->oborFact2015B = $oborFact2015B;

        return $this;
    }

    public function getOborFact2015V(): ?string
    {
        return $this->oborFact2015V;
    }

    public function setOborFact2015V(string $oborFact2015V): self
    {
        $this->oborFact2015V = $oborFact2015V;

        return $this;
    }

    public function getOborFact2016B(): ?string
    {
        return $this->oborFact2016B;
    }

    public function setOborFact2016B(string $oborFact2016B): self
    {
        $this->oborFact2016B = $oborFact2016B;

        return $this;
    }

    public function getOborFact2016V(): ?string
    {
        return $this->oborFact2016V;
    }

    public function setOborFact2016V(string $oborFact2016V): self
    {
        $this->oborFact2016V = $oborFact2016V;

        return $this;
    }

    public function getSmpFact2010B(): ?string
    {
        return $this->smpFact2010B;
    }

    public function setSmpFact2010B(string $smpFact2010B): self
    {
        $this->smpFact2010B = $smpFact2010B;

        return $this;
    }

    public function getSmpFact2010V(): ?string
    {
        return $this->smpFact2010V;
    }

    public function setSmpFact2010V(string $smpFact2010V): self
    {
        $this->smpFact2010V = $smpFact2010V;

        return $this;
    }

    public function getSmpFact2011B(): ?string
    {
        return $this->smpFact2011B;
    }

    public function setSmpFact2011B(string $smpFact2011B): self
    {
        $this->smpFact2011B = $smpFact2011B;

        return $this;
    }

    public function getSmpFact2011V(): ?string
    {
        return $this->smpFact2011V;
    }

    public function setSmpFact2011V(string $smpFact2011V): self
    {
        $this->smpFact2011V = $smpFact2011V;

        return $this;
    }

    public function getSmpFact2012B(): ?string
    {
        return $this->smpFact2012B;
    }

    public function setSmpFact2012B(string $smpFact2012B): self
    {
        $this->smpFact2012B = $smpFact2012B;

        return $this;
    }

    public function getSmpFact2012V(): ?string
    {
        return $this->smpFact2012V;
    }

    public function setSmpFact2012V(string $smpFact2012V): self
    {
        $this->smpFact2012V = $smpFact2012V;

        return $this;
    }

    public function getSmpFact2013B(): ?string
    {
        return $this->smpFact2013B;
    }

    public function setSmpFact2013B(string $smpFact2013B): self
    {
        $this->smpFact2013B = $smpFact2013B;

        return $this;
    }

    public function getSmpFact2013V(): ?string
    {
        return $this->smpFact2013V;
    }

    public function setSmpFact2013V(string $smpFact2013V): self
    {
        $this->smpFact2013V = $smpFact2013V;

        return $this;
    }

    public function getSmpFact2014B(): ?string
    {
        return $this->smpFact2014B;
    }

    public function setSmpFact2014B(string $smpFact2014B): self
    {
        $this->smpFact2014B = $smpFact2014B;

        return $this;
    }

    public function getSmpFact2014V(): ?string
    {
        return $this->smpFact2014V;
    }

    public function setSmpFact2014V(string $smpFact2014V): self
    {
        $this->smpFact2014V = $smpFact2014V;

        return $this;
    }

    public function getSmpFact2015B(): ?string
    {
        return $this->smpFact2015B;
    }

    public function setSmpFact2015B(string $smpFact2015B): self
    {
        $this->smpFact2015B = $smpFact2015B;

        return $this;
    }

    public function getSmpFact2015V(): ?string
    {
        return $this->smpFact2015V;
    }

    public function setSmpFact2015V(string $smpFact2015V): self
    {
        $this->smpFact2015V = $smpFact2015V;

        return $this;
    }

    public function getSmpFact2016B(): ?string
    {
        return $this->smpFact2016B;
    }

    public function setSmpFact2016B(string $smpFact2016B): self
    {
        $this->smpFact2016B = $smpFact2016B;

        return $this;
    }

    public function getSmpFact2016V(): ?string
    {
        return $this->smpFact2016V;
    }

    public function setSmpFact2016V(string $smpFact2016V): self
    {
        $this->smpFact2016V = $smpFact2016V;

        return $this;
    }

    public function getProchFact2010B(): ?string
    {
        return $this->prochFact2010B;
    }

    public function setProchFact2010B(string $prochFact2010B): self
    {
        $this->prochFact2010B = $prochFact2010B;

        return $this;
    }

    public function getProchFact2010V(): ?string
    {
        return $this->prochFact2010V;
    }

    public function setProchFact2010V(string $prochFact2010V): self
    {
        $this->prochFact2010V = $prochFact2010V;

        return $this;
    }

    public function getProchFact2011B(): ?string
    {
        return $this->prochFact2011B;
    }

    public function setProchFact2011B(string $prochFact2011B): self
    {
        $this->prochFact2011B = $prochFact2011B;

        return $this;
    }

    public function getProchFact2011V(): ?string
    {
        return $this->prochFact2011V;
    }

    public function setProchFact2011V(string $prochFact2011V): self
    {
        $this->prochFact2011V = $prochFact2011V;

        return $this;
    }

    public function getProchFact2012B(): ?string
    {
        return $this->prochFact2012B;
    }

    public function setProchFact2012B(string $prochFact2012B): self
    {
        $this->prochFact2012B = $prochFact2012B;

        return $this;
    }

    public function getProchFact2012V(): ?string
    {
        return $this->prochFact2012V;
    }

    public function setProchFact2012V(string $prochFact2012V): self
    {
        $this->prochFact2012V = $prochFact2012V;

        return $this;
    }

    public function getProchFact2013B(): ?string
    {
        return $this->prochFact2013B;
    }

    public function setProchFact2013B(string $prochFact2013B): self
    {
        $this->prochFact2013B = $prochFact2013B;

        return $this;
    }

    public function getProchFact2013V(): ?string
    {
        return $this->prochFact2013V;
    }

    public function setProchFact2013V(string $prochFact2013V): self
    {
        $this->prochFact2013V = $prochFact2013V;

        return $this;
    }

    public function getProchFact2014B(): ?string
    {
        return $this->prochFact2014B;
    }

    public function setProchFact2014B(string $prochFact2014B): self
    {
        $this->prochFact2014B = $prochFact2014B;

        return $this;
    }

    public function getProchFact2014V(): ?string
    {
        return $this->prochFact2014V;
    }

    public function setProchFact2014V(string $prochFact2014V): self
    {
        $this->prochFact2014V = $prochFact2014V;

        return $this;
    }

    public function getProchFact2015B(): ?string
    {
        return $this->prochFact2015B;
    }

    public function setProchFact2015B(string $prochFact2015B): self
    {
        $this->prochFact2015B = $prochFact2015B;

        return $this;
    }

    public function getProchFact2015V(): ?string
    {
        return $this->prochFact2015V;
    }

    public function setProchFact2015V(string $prochFact2015V): self
    {
        $this->prochFact2015V = $prochFact2015V;

        return $this;
    }

    public function getProchFact2016B(): ?string
    {
        return $this->prochFact2016B;
    }

    public function setProchFact2016B(string $prochFact2016B): self
    {
        $this->prochFact2016B = $prochFact2016B;

        return $this;
    }

    public function getProchFact2016V(): ?string
    {
        return $this->prochFact2016V;
    }

    public function setProchFact2016V(string $prochFact2016V): self
    {
        $this->prochFact2016V = $prochFact2016V;

        return $this;
    }

    public function getSummFact2010B(): ?string
    {
        return $this->summFact2010B;
    }

    public function setSummFact2010B(string $summFact2010B): self
    {
        $this->summFact2010B = $summFact2010B;

        return $this;
    }

    public function getSummFact2010V(): ?string
    {
        return $this->summFact2010V;
    }

    public function setSummFact2010V(string $summFact2010V): self
    {
        $this->summFact2010V = $summFact2010V;

        return $this;
    }

    public function getSummFact2011B(): ?string
    {
        return $this->summFact2011B;
    }

    public function setSummFact2011B(string $summFact2011B): self
    {
        $this->summFact2011B = $summFact2011B;

        return $this;
    }

    public function getSummFact2011V(): ?string
    {
        return $this->summFact2011V;
    }

    public function setSummFact2011V(string $summFact2011V): self
    {
        $this->summFact2011V = $summFact2011V;

        return $this;
    }

    public function getSummFact2012B(): ?string
    {
        return $this->summFact2012B;
    }

    public function setSummFact2012B(string $summFact2012B): self
    {
        $this->summFact2012B = $summFact2012B;

        return $this;
    }

    public function getSummFact2012V(): ?string
    {
        return $this->summFact2012V;
    }

    public function setSummFact2012V(string $summFact2012V): self
    {
        $this->summFact2012V = $summFact2012V;

        return $this;
    }

    public function getSummFact2013B(): ?string
    {
        return $this->summFact2013B;
    }

    public function setSummFact2013B(string $summFact2013B): self
    {
        $this->summFact2013B = $summFact2013B;

        return $this;
    }

    public function getSummFact2013V(): ?string
    {
        return $this->summFact2013V;
    }

    public function setSummFact2013V(string $summFact2013V): self
    {
        $this->summFact2013V = $summFact2013V;

        return $this;
    }

    public function getSummFact2014B(): ?string
    {
        return $this->summFact2014B;
    }

    public function setSummFact2014B(string $summFact2014B): self
    {
        $this->summFact2014B = $summFact2014B;

        return $this;
    }

    public function getSummFact2014V(): ?string
    {
        return $this->summFact2014V;
    }

    public function setSummFact2014V(string $summFact2014V): self
    {
        $this->summFact2014V = $summFact2014V;

        return $this;
    }

    public function getSummFact2015B(): ?string
    {
        return $this->summFact2015B;
    }

    public function setSummFact2015B(string $summFact2015B): self
    {
        $this->summFact2015B = $summFact2015B;

        return $this;
    }

    public function getSummFact2015V(): ?string
    {
        return $this->summFact2015V;
    }

    public function setSummFact2015V(string $summFact2015V): self
    {
        $this->summFact2015V = $summFact2015V;

        return $this;
    }

    public function getSummFact2016B(): ?string
    {
        return $this->summFact2016B;
    }

    public function setSummFact2016B(string $summFact2016B): self
    {
        $this->summFact2016B = $summFact2016B;

        return $this;
    }

    public function getSummFact2016V(): ?string
    {
        return $this->summFact2016V;
    }

    public function setSummFact2016V(string $summFact2016V): self
    {
        $this->summFact2016V = $summFact2016V;

        return $this;
    }

    public function getPirPlan2010B(): ?string
    {
        return $this->pirPlan2010B;
    }

    public function setPirPlan2010B(string $pirPlan2010B): self
    {
        $this->pirPlan2010B = $pirPlan2010B;

        return $this;
    }

    public function getPirPlan2010V(): ?string
    {
        return $this->pirPlan2010V;
    }

    public function setPirPlan2010V(string $pirPlan2010V): self
    {
        $this->pirPlan2010V = $pirPlan2010V;

        return $this;
    }

    public function getPirPlan2011B(): ?string
    {
        return $this->pirPlan2011B;
    }

    public function setPirPlan2011B(string $pirPlan2011B): self
    {
        $this->pirPlan2011B = $pirPlan2011B;

        return $this;
    }

    public function getPirPlan2011V(): ?string
    {
        return $this->pirPlan2011V;
    }

    public function setPirPlan2011V(string $pirPlan2011V): self
    {
        $this->pirPlan2011V = $pirPlan2011V;

        return $this;
    }

    public function getPirPlan2012B(): ?string
    {
        return $this->pirPlan2012B;
    }

    public function setPirPlan2012B(string $pirPlan2012B): self
    {
        $this->pirPlan2012B = $pirPlan2012B;

        return $this;
    }

    public function getPirPlan2012V(): ?string
    {
        return $this->pirPlan2012V;
    }

    public function setPirPlan2012V(string $pirPlan2012V): self
    {
        $this->pirPlan2012V = $pirPlan2012V;

        return $this;
    }

    public function getPirPlan2013B(): ?string
    {
        return $this->pirPlan2013B;
    }

    public function setPirPlan2013B(string $pirPlan2013B): self
    {
        $this->pirPlan2013B = $pirPlan2013B;

        return $this;
    }

    public function getPirPlan2013V(): ?string
    {
        return $this->pirPlan2013V;
    }

    public function setPirPlan2013V(string $pirPlan2013V): self
    {
        $this->pirPlan2013V = $pirPlan2013V;

        return $this;
    }

    public function getPirPlan2014B(): ?string
    {
        return $this->pirPlan2014B;
    }

    public function setPirPlan2014B(string $pirPlan2014B): self
    {
        $this->pirPlan2014B = $pirPlan2014B;

        return $this;
    }

    public function getPirPlan2014V(): ?string
    {
        return $this->pirPlan2014V;
    }

    public function setPirPlan2014V(string $pirPlan2014V): self
    {
        $this->pirPlan2014V = $pirPlan2014V;

        return $this;
    }

    public function getPirPlan2015B(): ?string
    {
        return $this->pirPlan2015B;
    }

    public function setPirPlan2015B(string $pirPlan2015B): self
    {
        $this->pirPlan2015B = $pirPlan2015B;

        return $this;
    }

    public function getPirPlan2015V(): ?string
    {
        return $this->pirPlan2015V;
    }

    public function setPirPlan2015V(string $pirPlan2015V): self
    {
        $this->pirPlan2015V = $pirPlan2015V;

        return $this;
    }

    public function getPirPlan2016B(): ?string
    {
        return $this->pirPlan2016B;
    }

    public function setPirPlan2016B(string $pirPlan2016B): self
    {
        $this->pirPlan2016B = $pirPlan2016B;

        return $this;
    }

    public function getPirPlan2016V(): ?string
    {
        return $this->pirPlan2016V;
    }

    public function setPirPlan2016V(string $pirPlan2016V): self
    {
        $this->pirPlan2016V = $pirPlan2016V;

        return $this;
    }

    public function getStoryPlan2010B(): ?string
    {
        return $this->storyPlan2010B;
    }

    public function setStoryPlan2010B(string $storyPlan2010B): self
    {
        $this->storyPlan2010B = $storyPlan2010B;

        return $this;
    }

    public function getStoryPlan2010V(): ?string
    {
        return $this->storyPlan2010V;
    }

    public function setStoryPlan2010V(string $storyPlan2010V): self
    {
        $this->storyPlan2010V = $storyPlan2010V;

        return $this;
    }

    public function getStoryPlan2011B(): ?string
    {
        return $this->storyPlan2011B;
    }

    public function setStoryPlan2011B(string $storyPlan2011B): self
    {
        $this->storyPlan2011B = $storyPlan2011B;

        return $this;
    }

    public function getStoryPlan2011V(): ?string
    {
        return $this->storyPlan2011V;
    }

    public function setStoryPlan2011V(string $storyPlan2011V): self
    {
        $this->storyPlan2011V = $storyPlan2011V;

        return $this;
    }

    public function getStoryPlan2012B(): ?string
    {
        return $this->storyPlan2012B;
    }

    public function setStoryPlan2012B(string $storyPlan2012B): self
    {
        $this->storyPlan2012B = $storyPlan2012B;

        return $this;
    }

    public function getStoryPlan2012V(): ?string
    {
        return $this->storyPlan2012V;
    }

    public function setStoryPlan2012V(string $storyPlan2012V): self
    {
        $this->storyPlan2012V = $storyPlan2012V;

        return $this;
    }

    public function getStoryPlan2013B(): ?string
    {
        return $this->storyPlan2013B;
    }

    public function setStoryPlan2013B(string $storyPlan2013B): self
    {
        $this->storyPlan2013B = $storyPlan2013B;

        return $this;
    }

    public function getStoryPlan2013V(): ?string
    {
        return $this->storyPlan2013V;
    }

    public function setStoryPlan2013V(string $storyPlan2013V): self
    {
        $this->storyPlan2013V = $storyPlan2013V;

        return $this;
    }

    public function getStoryPlan2014B(): ?string
    {
        return $this->storyPlan2014B;
    }

    public function setStoryPlan2014B(string $storyPlan2014B): self
    {
        $this->storyPlan2014B = $storyPlan2014B;

        return $this;
    }

    public function getStoryPlan2014V(): ?string
    {
        return $this->storyPlan2014V;
    }

    public function setStoryPlan2014V(string $storyPlan2014V): self
    {
        $this->storyPlan2014V = $storyPlan2014V;

        return $this;
    }

    public function getStoryPlan2015B(): ?string
    {
        return $this->storyPlan2015B;
    }

    public function setStoryPlan2015B(string $storyPlan2015B): self
    {
        $this->storyPlan2015B = $storyPlan2015B;

        return $this;
    }

    public function getStoryPlan2015V(): ?string
    {
        return $this->storyPlan2015V;
    }

    public function setStoryPlan2015V(string $storyPlan2015V): self
    {
        $this->storyPlan2015V = $storyPlan2015V;

        return $this;
    }

    public function getStoryPlan2016B(): ?string
    {
        return $this->storyPlan2016B;
    }

    public function setStoryPlan2016B(string $storyPlan2016B): self
    {
        $this->storyPlan2016B = $storyPlan2016B;

        return $this;
    }

    public function getStoryPlan2016V(): ?string
    {
        return $this->storyPlan2016V;
    }

    public function setStoryPlan2016V(string $storyPlan2016V): self
    {
        $this->storyPlan2016V = $storyPlan2016V;

        return $this;
    }

    public function getSummPlan2010B(): ?string
    {
        return $this->summPlan2010B;
    }

    public function setSummPlan2010B(string $summPlan2010B): self
    {
        $this->summPlan2010B = $summPlan2010B;

        return $this;
    }

    public function getSummPlan2010V(): ?string
    {
        return $this->summPlan2010V;
    }

    public function setSummPlan2010V(string $summPlan2010V): self
    {
        $this->summPlan2010V = $summPlan2010V;

        return $this;
    }

    public function getSummPlan2011B(): ?string
    {
        return $this->summPlan2011B;
    }

    public function setSummPlan2011B(string $summPlan2011B): self
    {
        $this->summPlan2011B = $summPlan2011B;

        return $this;
    }

    public function getSummPlan2011V(): ?string
    {
        return $this->summPlan2011V;
    }

    public function setSummPlan2011V(string $summPlan2011V): self
    {
        $this->summPlan2011V = $summPlan2011V;

        return $this;
    }

    public function getSummPlan2012B(): ?string
    {
        return $this->summPlan2012B;
    }

    public function setSummPlan2012B(string $summPlan2012B): self
    {
        $this->summPlan2012B = $summPlan2012B;

        return $this;
    }

    public function getSummPlan2012V(): ?string
    {
        return $this->summPlan2012V;
    }

    public function setSummPlan2012V(string $summPlan2012V): self
    {
        $this->summPlan2012V = $summPlan2012V;

        return $this;
    }

    public function getSummPlan2013B(): ?string
    {
        return $this->summPlan2013B;
    }

    public function setSummPlan2013B(string $summPlan2013B): self
    {
        $this->summPlan2013B = $summPlan2013B;

        return $this;
    }

    public function getSummPlan2013V(): ?string
    {
        return $this->summPlan2013V;
    }

    public function setSummPlan2013V(string $summPlan2013V): self
    {
        $this->summPlan2013V = $summPlan2013V;

        return $this;
    }

    public function getSummPlan2014B(): ?string
    {
        return $this->summPlan2014B;
    }

    public function setSummPlan2014B(string $summPlan2014B): self
    {
        $this->summPlan2014B = $summPlan2014B;

        return $this;
    }

    public function getSummPlan2014V(): ?string
    {
        return $this->summPlan2014V;
    }

    public function setSummPlan2014V(string $summPlan2014V): self
    {
        $this->summPlan2014V = $summPlan2014V;

        return $this;
    }

    public function getSummPlan2015B(): ?string
    {
        return $this->summPlan2015B;
    }

    public function setSummPlan2015B(string $summPlan2015B): self
    {
        $this->summPlan2015B = $summPlan2015B;

        return $this;
    }

    public function getSummPlan2015V(): ?string
    {
        return $this->summPlan2015V;
    }

    public function setSummPlan2015V(string $summPlan2015V): self
    {
        $this->summPlan2015V = $summPlan2015V;

        return $this;
    }

    public function getSummPlan2016B(): ?string
    {
        return $this->summPlan2016B;
    }

    public function setSummPlan2016B(string $summPlan2016B): self
    {
        $this->summPlan2016B = $summPlan2016B;

        return $this;
    }

    public function getSummPlan2016V(): ?string
    {
        return $this->summPlan2016V;
    }

    public function setSummPlan2016V(string $summPlan2016V): self
    {
        $this->summPlan2016V = $summPlan2016V;

        return $this;
    }

    public function getVysAms2010B(): ?string
    {
        return $this->vysAms2010B;
    }

    public function setVysAms2010B(string $vysAms2010B): self
    {
        $this->vysAms2010B = $vysAms2010B;

        return $this;
    }

    public function getVysAms2010V(): ?string
    {
        return $this->vysAms2010V;
    }

    public function setVysAms2010V(string $vysAms2010V): self
    {
        $this->vysAms2010V = $vysAms2010V;

        return $this;
    }

    public function getVysAms2011B(): ?string
    {
        return $this->vysAms2011B;
    }

    public function setVysAms2011B(string $vysAms2011B): self
    {
        $this->vysAms2011B = $vysAms2011B;

        return $this;
    }

    public function getVysAms2011V(): ?string
    {
        return $this->vysAms2011V;
    }

    public function setVysAms2011V(string $vysAms2011V): self
    {
        $this->vysAms2011V = $vysAms2011V;

        return $this;
    }

    public function getVysAms2012B(): ?string
    {
        return $this->vysAms2012B;
    }

    public function setVysAms2012B(string $vysAms2012B): self
    {
        $this->vysAms2012B = $vysAms2012B;

        return $this;
    }

    public function getVysAms2012V(): ?string
    {
        return $this->vysAms2012V;
    }

    public function setVysAms2012V(string $vysAms2012V): self
    {
        $this->vysAms2012V = $vysAms2012V;

        return $this;
    }

    public function getVysAms2013B(): ?string
    {
        return $this->vysAms2013B;
    }

    public function setVysAms2013B(string $vysAms2013B): self
    {
        $this->vysAms2013B = $vysAms2013B;

        return $this;
    }

    public function getVysAms2013V(): ?string
    {
        return $this->vysAms2013V;
    }

    public function setVysAms2013V(string $vysAms2013V): self
    {
        $this->vysAms2013V = $vysAms2013V;

        return $this;
    }

    public function getVysAms2014B(): ?string
    {
        return $this->vysAms2014B;
    }

    public function setVysAms2014B(string $vysAms2014B): self
    {
        $this->vysAms2014B = $vysAms2014B;

        return $this;
    }

    public function getVysAms2014V(): ?string
    {
        return $this->vysAms2014V;
    }

    public function setVysAms2014V(string $vysAms2014V): self
    {
        $this->vysAms2014V = $vysAms2014V;

        return $this;
    }

    public function getVysAms2015B(): ?string
    {
        return $this->vysAms2015B;
    }

    public function setVysAms2015B(string $vysAms2015B): self
    {
        $this->vysAms2015B = $vysAms2015B;

        return $this;
    }

    public function getVysAms2015V(): ?string
    {
        return $this->vysAms2015V;
    }

    public function setVysAms2015V(string $vysAms2015V): self
    {
        $this->vysAms2015V = $vysAms2015V;

        return $this;
    }

    public function getVysAms2016B(): ?string
    {
        return $this->vysAms2016B;
    }

    public function setVysAms2016B(string $vysAms2016B): self
    {
        $this->vysAms2016B = $vysAms2016B;

        return $this;
    }

    public function getVysAms2016V(): ?string
    {
        return $this->vysAms2016V;
    }

    public function setVysAms2016V(string $vysAms2016V): self
    {
        $this->vysAms2016V = $vysAms2016V;

        return $this;
    }

    public function getBuyBuilding2010B(): ?string
    {
        return $this->buyBuilding2010B;
    }

    public function setBuyBuilding2010B(string $buyBuilding2010B): self
    {
        $this->buyBuilding2010B = $buyBuilding2010B;

        return $this;
    }

    public function getBuyBuilding2010V(): ?string
    {
        return $this->buyBuilding2010V;
    }

    public function setBuyBuilding2010V(string $buyBuilding2010V): self
    {
        $this->buyBuilding2010V = $buyBuilding2010V;

        return $this;
    }

    public function getBuyBuilding2011B(): ?string
    {
        return $this->buyBuilding2011B;
    }

    public function setBuyBuilding2011B(string $buyBuilding2011B): self
    {
        $this->buyBuilding2011B = $buyBuilding2011B;

        return $this;
    }

    public function getBuyBuilding2011V(): ?string
    {
        return $this->buyBuilding2011V;
    }

    public function setBuyBuilding2011V(string $buyBuilding2011V): self
    {
        $this->buyBuilding2011V = $buyBuilding2011V;

        return $this;
    }

    public function getBuyBuilding2012B(): ?string
    {
        return $this->buyBuilding2012B;
    }

    public function setBuyBuilding2012B(string $buyBuilding2012B): self
    {
        $this->buyBuilding2012B = $buyBuilding2012B;

        return $this;
    }

    public function getBuyBuilding2012V(): ?string
    {
        return $this->buyBuilding2012V;
    }

    public function setBuyBuilding2012V(string $buyBuilding2012V): self
    {
        $this->buyBuilding2012V = $buyBuilding2012V;

        return $this;
    }

    public function getBuyBuilding2013B(): ?string
    {
        return $this->buyBuilding2013B;
    }

    public function setBuyBuilding2013B(string $buyBuilding2013B): self
    {
        $this->buyBuilding2013B = $buyBuilding2013B;

        return $this;
    }

    public function getBuyBuilding2013V(): ?string
    {
        return $this->buyBuilding2013V;
    }

    public function setBuyBuilding2013V(string $buyBuilding2013V): self
    {
        $this->buyBuilding2013V = $buyBuilding2013V;

        return $this;
    }

    public function getBuyBuilding2014B(): ?string
    {
        return $this->buyBuilding2014B;
    }

    public function setBuyBuilding2014B(string $buyBuilding2014B): self
    {
        $this->buyBuilding2014B = $buyBuilding2014B;

        return $this;
    }

    public function getBuyBuilding2014V(): ?string
    {
        return $this->buyBuilding2014V;
    }

    public function setBuyBuilding2014V(string $buyBuilding2014V): self
    {
        $this->buyBuilding2014V = $buyBuilding2014V;

        return $this;
    }

    public function getBuyBuilding2015B(): ?string
    {
        return $this->buyBuilding2015B;
    }

    public function setBuyBuilding2015B(string $buyBuilding2015B): self
    {
        $this->buyBuilding2015B = $buyBuilding2015B;

        return $this;
    }

    public function getBuyBuilding2015V(): ?string
    {
        return $this->buyBuilding2015V;
    }

    public function setBuyBuilding2015V(string $buyBuilding2015V): self
    {
        $this->buyBuilding2015V = $buyBuilding2015V;

        return $this;
    }

    public function getBuyBuilding2016B(): ?string
    {
        return $this->buyBuilding2016B;
    }

    public function setBuyBuilding2016B(string $buyBuilding2016B): self
    {
        $this->buyBuilding2016B = $buyBuilding2016B;

        return $this;
    }

    public function getBuyBuilding2016V(): ?string
    {
        return $this->buyBuilding2016V;
    }

    public function setBuyBuilding2016V(string $buyBuilding2016V): self
    {
        $this->buyBuilding2016V = $buyBuilding2016V;

        return $this;
    }

    public function getRvrAms2010B(): ?string
    {
        return $this->rvrAms2010B;
    }

    public function setRvrAms2010B(string $rvrAms2010B): self
    {
        $this->rvrAms2010B = $rvrAms2010B;

        return $this;
    }

    public function getRvrAms2010V(): ?string
    {
        return $this->rvrAms2010V;
    }

    public function setRvrAms2010V(string $rvrAms2010V): self
    {
        $this->rvrAms2010V = $rvrAms2010V;

        return $this;
    }

    public function getRvrAms2011B(): ?string
    {
        return $this->rvrAms2011B;
    }

    public function setRvrAms2011B(string $rvrAms2011B): self
    {
        $this->rvrAms2011B = $rvrAms2011B;

        return $this;
    }

    public function getRvrAms2011V(): ?string
    {
        return $this->rvrAms2011V;
    }

    public function setRvrAms2011V(string $rvrAms2011V): self
    {
        $this->rvrAms2011V = $rvrAms2011V;

        return $this;
    }

    public function getRvrAms2012B(): ?string
    {
        return $this->rvrAms2012B;
    }

    public function setRvrAms2012B(string $rvrAms2012B): self
    {
        $this->rvrAms2012B = $rvrAms2012B;

        return $this;
    }

    public function getRvrAms2012V(): ?string
    {
        return $this->rvrAms2012V;
    }

    public function setRvrAms2012V(string $rvrAms2012V): self
    {
        $this->rvrAms2012V = $rvrAms2012V;

        return $this;
    }

    public function getRvrAms2013B(): ?string
    {
        return $this->rvrAms2013B;
    }

    public function setRvrAms2013B(string $rvrAms2013B): self
    {
        $this->rvrAms2013B = $rvrAms2013B;

        return $this;
    }

    public function getRvrAms2013V(): ?string
    {
        return $this->rvrAms2013V;
    }

    public function setRvrAms2013V(string $rvrAms2013V): self
    {
        $this->rvrAms2013V = $rvrAms2013V;

        return $this;
    }

    public function getRvrAms2014B(): ?string
    {
        return $this->rvrAms2014B;
    }

    public function setRvrAms2014B(string $rvrAms2014B): self
    {
        $this->rvrAms2014B = $rvrAms2014B;

        return $this;
    }

    public function getRvrAms2014V(): ?string
    {
        return $this->rvrAms2014V;
    }

    public function setRvrAms2014V(string $rvrAms2014V): self
    {
        $this->rvrAms2014V = $rvrAms2014V;

        return $this;
    }

    public function getRvrAms2015B(): ?string
    {
        return $this->rvrAms2015B;
    }

    public function setRvrAms2015B(string $rvrAms2015B): self
    {
        $this->rvrAms2015B = $rvrAms2015B;

        return $this;
    }

    public function getRvrAms2015V(): ?string
    {
        return $this->rvrAms2015V;
    }

    public function setRvrAms2015V(string $rvrAms2015V): self
    {
        $this->rvrAms2015V = $rvrAms2015V;

        return $this;
    }

    public function getRvrAms2016B(): ?string
    {
        return $this->rvrAms2016B;
    }

    public function setRvrAms2016B(string $rvrAms2016B): self
    {
        $this->rvrAms2016B = $rvrAms2016B;

        return $this;
    }

    public function getRvrAms2016V(): ?string
    {
        return $this->rvrAms2016V;
    }

    public function setRvrAms2016V(string $rvrAms2016V): self
    {
        $this->rvrAms2016V = $rvrAms2016V;

        return $this;
    }

    public function getRvrBuilding2010B(): ?string
    {
        return $this->rvrBuilding2010B;
    }

    public function setRvrBuilding2010B(string $rvrBuilding2010B): self
    {
        $this->rvrBuilding2010B = $rvrBuilding2010B;

        return $this;
    }

    public function getRvrBuilding2010V(): ?string
    {
        return $this->rvrBuilding2010V;
    }

    public function setRvrBuilding2010V(string $rvrBuilding2010V): self
    {
        $this->rvrBuilding2010V = $rvrBuilding2010V;

        return $this;
    }

    public function getRvrBuilding2011B(): ?string
    {
        return $this->rvrBuilding2011B;
    }

    public function setRvrBuilding2011B(string $rvrBuilding2011B): self
    {
        $this->rvrBuilding2011B = $rvrBuilding2011B;

        return $this;
    }

    public function getRvrBuilding2011V(): ?string
    {
        return $this->rvrBuilding2011V;
    }

    public function setRvrBuilding2011V(string $rvrBuilding2011V): self
    {
        $this->rvrBuilding2011V = $rvrBuilding2011V;

        return $this;
    }

    public function getRvrBuilding2012B(): ?string
    {
        return $this->rvrBuilding2012B;
    }

    public function setRvrBuilding2012B(string $rvrBuilding2012B): self
    {
        $this->rvrBuilding2012B = $rvrBuilding2012B;

        return $this;
    }

    public function getRvrBuilding2012V(): ?string
    {
        return $this->rvrBuilding2012V;
    }

    public function setRvrBuilding2012V(string $rvrBuilding2012V): self
    {
        $this->rvrBuilding2012V = $rvrBuilding2012V;

        return $this;
    }

    public function getRvrBuilding2013B(): ?string
    {
        return $this->rvrBuilding2013B;
    }

    public function setRvrBuilding2013B(string $rvrBuilding2013B): self
    {
        $this->rvrBuilding2013B = $rvrBuilding2013B;

        return $this;
    }

    public function getRvrBuilding2013V(): ?string
    {
        return $this->rvrBuilding2013V;
    }

    public function setRvrBuilding2013V(string $rvrBuilding2013V): self
    {
        $this->rvrBuilding2013V = $rvrBuilding2013V;

        return $this;
    }

    public function getRvrBuilding2014B(): ?string
    {
        return $this->rvrBuilding2014B;
    }

    public function setRvrBuilding2014B(string $rvrBuilding2014B): self
    {
        $this->rvrBuilding2014B = $rvrBuilding2014B;

        return $this;
    }

    public function getRvrBuilding2014V(): ?string
    {
        return $this->rvrBuilding2014V;
    }

    public function setRvrBuilding2014V(string $rvrBuilding2014V): self
    {
        $this->rvrBuilding2014V = $rvrBuilding2014V;

        return $this;
    }

    public function getRvrBuilding2015B(): ?string
    {
        return $this->rvrBuilding2015B;
    }

    public function setRvrBuilding2015B(string $rvrBuilding2015B): self
    {
        $this->rvrBuilding2015B = $rvrBuilding2015B;

        return $this;
    }

    public function getRvrBuilding2015V(): ?string
    {
        return $this->rvrBuilding2015V;
    }

    public function setRvrBuilding2015V(string $rvrBuilding2015V): self
    {
        $this->rvrBuilding2015V = $rvrBuilding2015V;

        return $this;
    }

    public function getRvrBuilding2016B(): ?string
    {
        return $this->rvrBuilding2016B;
    }

    public function setRvrBuilding2016B(string $rvrBuilding2016B): self
    {
        $this->rvrBuilding2016B = $rvrBuilding2016B;

        return $this;
    }

    public function getRvrBuilding2016V(): ?string
    {
        return $this->rvrBuilding2016V;
    }

    public function setRvrBuilding2016V(string $rvrBuilding2016V): self
    {
        $this->rvrBuilding2016V = $rvrBuilding2016V;

        return $this;
    }

    public function getDateFinPir(): ?\DateTimeInterface
    {
        return $this->dateFinPir;
    }

    public function setDateFinPir(\DateTimeInterface $dateFinPir): self
    {
        $this->dateFinPir = $dateFinPir;

        return $this;
    }

    public function getDateEndPir(): ?\DateTimeInterface
    {
        return $this->dateEndPir;
    }

    public function setDateEndPir(\DateTimeInterface $dateEndPir): self
    {
        $this->dateEndPir = $dateEndPir;

        return $this;
    }

    public function getDateFinBuild(): ?\DateTimeInterface
    {
        return $this->dateFinBuild;
    }

    public function setDateFinBuild(\DateTimeInterface $dateFinBuild): self
    {
        $this->dateFinBuild = $dateFinBuild;

        return $this;
    }

    public function getDateEndBuild(): ?\DateTimeInterface
    {
        return $this->dateEndBuild;
    }

    public function setDateEndBuild(\DateTimeInterface $dateEndBuild): self
    {
        $this->dateEndBuild = $dateEndBuild;

        return $this;
    }


}
