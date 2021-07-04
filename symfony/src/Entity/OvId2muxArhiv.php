<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OvId2muxArhiv
 *
 * @ORM\Table(name="ov_id2mux_arhiv", indexes={@ORM\Index(name="fcp_object_id", columns={"fcp_object_id"})})
 * @ORM\Entity
 */
class OvId2muxArhiv
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
     * @ORM\Column(name="ready", type="integer", nullable=false, options={"default"="1","unsigned"=true,"comment"="Фактический статус готовности объекта"})
     */
    private $ready = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="ready_prim", type="string", length=255, nullable=false)
     */
    private $readyPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="latitude_1", type="integer", nullable=false, options={"unsigned"=true,"comment"="Координаты АМС в формате WGS 84"})
     */
    private $latitude1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="latitude_1_prim", type="string", length=255, nullable=false)
     */
    private $latitude1Prim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="latitude_2", type="integer", nullable=false, options={"unsigned"=true,"comment"="Координаты АМС в формате WGS 85"})
     */
    private $latitude2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="latitude_2_prim", type="string", length=255, nullable=false)
     */
    private $latitude2Prim = '';

    /**
     * @var float
     *
     * @ORM\Column(name="latitude_3", type="float", precision=10, scale=0, nullable=false, options={"comment"="Координаты АМС в формате WGS 86"})
     */
    private $latitude3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="latitude_3_prim", type="string", length=255, nullable=false)
     */
    private $latitude3Prim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="longitude_1", type="integer", nullable=false, options={"comment"="Координаты АМС в формате WGS 87"})
     */
    private $longitude1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="longitude_1_prim", type="string", length=255, nullable=false)
     */
    private $longitude1Prim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="longitude_2", type="integer", nullable=false, options={"unsigned"=true,"comment"="Координаты АМС в формате WGS 88"})
     */
    private $longitude2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="longitude_2_prim", type="string", length=255, nullable=false)
     */
    private $longitude2Prim = '';

    /**
     * @var float
     *
     * @ORM\Column(name="longitude_3", type="float", precision=10, scale=0, nullable=false, options={"comment"="Координаты АМС в формате WGS 89"})
     */
    private $longitude3 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="longitude_3_prim", type="string", length=255, nullable=false)
     */
    private $longitude3Prim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="chtp_zone_txt", type="string", length=255, nullable=true, options={"comment"="SFN зона"})
     */
    private $chtpZoneTxt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="chtp_zone_txt_prim", type="string", length=255, nullable=false)
     */
    private $chtpZoneTxtPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="tvk_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Номер ТВК"})
     */
    private $tvkId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tvk_id_prim", type="string", length=255, nullable=false)
     */
    private $tvkIdPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="transmitt_power_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Мощность передатчика, кВт"})
     */
    private $transmittPowerId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="transmitt_power_id_prim", type="string", length=255, nullable=false)
     */
    private $transmittPowerIdPrim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="transmitt_marka", type="string", length=255, nullable=true, options={"comment"="Марка установленного передатчика"})
     */
    private $transmittMarka = '';

    /**
     * @var string
     *
     * @ORM\Column(name="transmitt_marka_prim", type="string", length=255, nullable=false)
     */
    private $transmittMarkaPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="transmitt_marka_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Марка установленного передатчика"})
     */
    private $transmittMarkaId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="transmitt_marka_id_prim", type="string", length=255, nullable=false)
     */
    private $transmittMarkaIdPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="cooling_system_type_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Тип системы охлаждения передатчика"})
     */
    private $coolingSystemTypeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="cooling_system_type_id_prim", type="string", length=255, nullable=false)
     */
    private $coolingSystemTypeIdPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="pol_filter_type_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Тип выходного полосового фильтра"})
     */
    private $polFilterTypeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="pol_filter_type_id_prim", type="string", length=255, nullable=false)
     */
    private $polFilterTypeIdPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="house_type_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Тип помещения"})
     */
    private $houseTypeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="house_type_id_prim", type="string", length=255, nullable=false)
     */
    private $houseTypeIdPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="antenna_type_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Тип антенны по данным поставщика"})
     */
    private $antennaTypeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="antenna_type_id_prim", type="string", length=255, nullable=false)
     */
    private $antennaTypeIdPrim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="antenna_type_txt_init", type="string", length=255, nullable=true, options={"comment"="Тип установленной антенны"})
     */
    private $antennaTypeTxtInit = '';

    /**
     * @var string
     *
     * @ORM\Column(name="antenna_type_txt_prim", type="string", length=255, nullable=false)
     */
    private $antennaTypeTxtPrim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="antenna_type_txt", type="string", length=255, nullable=true, options={"comment"="Тип установленной антенны"})
     */
    private $antennaTypeTxt = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="antenna_izg", type="string", length=255, nullable=true, options={"comment"="Производитель антенны"})
     */
    private $antennaIzg = '';

    /**
     * @var string
     *
     * @ORM\Column(name="antenna_izg_prim", type="string", length=255, nullable=false)
     */
    private $antennaIzgPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="antenna__panels_count", type="integer", nullable=false, options={"unsigned"=true,"comment"="Количество панелей антенны, шт"})
     */
    private $antennaPanelsCount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="antenna__panels_count_prim", type="string", length=255, nullable=false)
     */
    private $antennaPanelsCountPrim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="antennadiagtxt", type="string", length=255, nullable=true, options={"comment"="Диаграмма направленности "})
     */
    private $antennadiagtxt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="antennadiagtxt_prim", type="string", length=255, nullable=false)
     */
    private $antennadiagtxtPrim = '';

    /**
     * @var float
     *
     * @ORM\Column(name="antenna_ku", type="float", precision=10, scale=0, nullable=false, options={"comment"="Ку антенны на частоте первого мультиплекска, дБд"})
     */
    private $antennaKu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="antenna_ku_prim", type="string", length=255, nullable=false)
     */
    private $antennaKuPrim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="antenna_power_max", type="string", length=255, nullable=true, options={"comment"="Допустимая рабочая электрическая мощность антенны, кВт"})
     */
    private $antennaPowerMax = '';

    /**
     * @var string
     *
     * @ORM\Column(name="antenna_power_max_prim", type="string", length=255, nullable=false)
     */
    private $antennaPowerMaxPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="panels_montazh", type="integer", nullable=false, options={"unsigned"=true,"comment"="Способ размещения антенных паннелей"})
     */
    private $panelsMontazh = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="panels_montazh_prim", type="string", length=255, nullable=false)
     */
    private $panelsMontazhPrim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="panels_base", type="string", length=255, nullable=true, options={"comment"="База установки паннелей (растоянием от оси антенной системы до центра панелей), мм."})
     */
    private $panelsBase = '';

    /**
     * @var string
     *
     * @ORM\Column(name="panels_base_prim", type="string", length=255, nullable=false)
     */
    private $panelsBasePrim = '';

    /**
     * @var float
     *
     * @ORM\Column(name="antenna_height_geo", type="float", precision=10, scale=0, nullable=false, options={"comment"="Высота геометрического центра антенной системы над уровнем земли, м"})
     */
    private $antennaHeightGeo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="antenna_height_geo_prim", type="string", length=255, nullable=false)
     */
    private $antennaHeightGeoPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="antenna_neravn_zapitka", type="integer", nullable=false, options={"unsigned"=true,"comment"="Наличие неравномерной запитки антенных панелей"})
     */
    private $antennaNeravnZapitka = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="antenna_neravn_zapitka_prim", type="string", length=255, nullable=false)
     */
    private $antennaNeravnZapitkaPrim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="feeder_model_txt", type="string", length=255, nullable=true, options={"comment"="Модель фидера"})
     */
    private $feederModelTxt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="feeder_model_txt_prim", type="string", length=255, nullable=false)
     */
    private $feederModelTxtPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="feeder_model_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Модель фидера"})
     */
    private $feederModelId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="feeder_model_id_prim", type="string", length=255, nullable=false)
     */
    private $feederModelIdPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="two_feeders", type="integer", nullable=false, options={"unsigned"=true,"comment"="Наличие двух фидеров"})
     */
    private $twoFeeders = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="two_feeders_prim", type="string", length=255, nullable=false)
     */
    private $twoFeedersPrim = '';

    /**
     * @var float
     *
     * @ORM\Column(name="feeder_length", type="float", precision=10, scale=0, nullable=false, options={"comment"="Фактическая длина фидера, м"})
     */
    private $feederLength = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="feeder_length_prim", type="string", length=255, nullable=false)
     */
    private $feederLengthPrim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="feeder_main_connector_type_txt", type="string", length=255, nullable=true, options={"comment"="Тип разъема  главного фидера в аппаратной"})
     */
    private $feederMainConnectorTypeTxt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="feeder_main_connector_type_txt_prim", type="string", length=255, nullable=false)
     */
    private $feederMainConnectorTypeTxtPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="feeder_main_connector_type_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Тип разъема  главного фидера в аппаратной"})
     */
    private $feederMainConnectorTypeId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="feeder_main_connector_type_id_prim", type="string", length=255, nullable=false)
     */
    private $feederMainConnectorTypeIdPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="bridge_exists", type="integer", nullable=false, options={"unsigned"=true,"comment"="Наличие устройства сложения"})
     */
    private $bridgeExists = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bridge_exists_prim", type="string", length=255, nullable=false)
     */
    private $bridgeExistsPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="ams_type", type="integer", nullable=false, options={"unsigned"=true,"comment"="Тип АМС"})
     */
    private $amsType = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ams_type_prim", type="string", length=255, nullable=false)
     */
    private $amsTypePrim = '';

    /**
     * @var float
     *
     * @ORM\Column(name="ams_height", type="float", precision=10, scale=0, nullable=false, options={"comment"="Высота АМС"})
     */
    private $amsHeight = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ams_height_prim", type="string", length=255, nullable=false)
     */
    private $amsHeightPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="possible_second_satellite_antenna", type="integer", nullable=false, options={"unsigned"=true,"comment"="Возможность размещения второй приемной спутниковой антенны 2.4 м на существующем/проектируемом антенном посту"})
     */
    private $possibleSecondSatelliteAntenna = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="possible_second_satellite_antenna_prim", type="string", length=255, nullable=false)
     */
    private $possibleSecondSatelliteAntennaPrim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="chtp_zone_2mux_txt", type="string", length=255, nullable=true, options={"comment"="SFN зона"})
     */
    private $chtpZone2muxTxt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="chtp_zone_2mux_txt_prim", type="string", length=255, nullable=false)
     */
    private $chtpZone2muxTxtPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="tvk_2mux_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Номер ТВК"})
     */
    private $tvk2muxId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tvk_2mux_id_prim", type="string", length=255, nullable=false)
     */
    private $tvk2muxIdPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="transmitt_power_2mux_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Мощность передатчика, кВт"})
     */
    private $transmittPower2muxId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="transmitt_power_2mux_id_prim", type="string", length=255, nullable=false)
     */
    private $transmittPower2muxIdPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="oborud_2mux_height", type="integer", nullable=false, options={"unsigned"=true,"comment"="Высота оборудования размещаемого в существующей стойке, юнитов, (U) "})
     */
    private $oborud2muxHeight = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="oborud_2mux_height_prim", type="string", length=255, nullable=false)
     */
    private $oborud2muxHeightPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="dop_rackmount_x", type="integer", nullable=false, options={"unsigned"=true,"comment"="Размеры дополнительно устанавливаемой стойки передатчика (Ширина х Высота х Глубина),   мм."})
     */
    private $dopRackmountX = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dop_rackmount_x_prim", type="string", length=255, nullable=false)
     */
    private $dopRackmountXPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="dop_rackmount_y", type="integer", nullable=false, options={"unsigned"=true,"comment"="Размеры дополнительно устанавливаемой стойки передатчика (Ширина х Высота х Глубина),   мм."})
     */
    private $dopRackmountY = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dop_rackmount_y_prim", type="string", length=255, nullable=false)
     */
    private $dopRackmountYPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="dop_rackmount_z", type="integer", nullable=false, options={"unsigned"=true,"comment"="Размеры дополнительно устанавливаемой стойки передатчика (Ширина х Высота х Глубина),   мм."})
     */
    private $dopRackmountZ = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="dop_rackmount_z_prim", type="string", length=255, nullable=false)
     */
    private $dopRackmountZPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="bridge_2mux_size_x", type="integer", nullable=false, options={"unsigned"=true,"comment"="Размеры устройства сложения (Ширина х Высота х Глубина), мм."})
     */
    private $bridge2muxSizeX = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bridge_2mux_size_x_prim", type="string", length=255, nullable=false)
     */
    private $bridge2muxSizeXPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="bridge_2mux_size_y", type="integer", nullable=false, options={"unsigned"=true,"comment"="Размеры устройства сложения (Ширина х Высота х Глубина), мм."})
     */
    private $bridge2muxSizeY = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bridge_2mux_size_y_prim", type="string", length=255, nullable=false)
     */
    private $bridge2muxSizeYPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="bridge_2mux_size_z", type="integer", nullable=false, options={"unsigned"=true,"comment"="Размеры устройства сложения (Ширина х Высота х Глубина), мм."})
     */
    private $bridge2muxSizeZ = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="bridge_2mux_size_z_prim", type="string", length=255, nullable=false)
     */
    private $bridge2muxSizeZPrim = '';

    /**
     * @var float
     *
     * @ORM\Column(name="heat_power", type="float", precision=10, scale=0, nullable=false, options={"comment"="Тепловыделение от оборудования в аппаратный зал, кВт"})
     */
    private $heatPower = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="heat_power_prim", type="string", length=255, nullable=false)
     */
    private $heatPowerPrim = '';

    /**
     * @var float
     *
     * @ORM\Column(name="supply_power_2mux", type="float", precision=10, scale=0, nullable=false, options={"comment"="Потребление э/энергии оборудованием, кВт"})
     */
    private $supplyPower2mux = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="supply_power_2mux_prim", type="string", length=255, nullable=false)
     */
    private $supplyPower2muxPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="possible_2mux_in_exist_rackmount", type="integer", nullable=false, options={"unsigned"=true,"comment"="Возможность установки оборудования в существующую телекоммуникационную стойку"})
     */
    private $possible2muxInExistRackmount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="possible_2mux_in_exist_rackmount_prim", type="string", length=255, nullable=false)
     */
    private $possible2muxInExistRackmountPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="possible_2mux_add_rackmount", type="integer", nullable=false, options={"unsigned"=true,"comment"="Возможность установки новой стойки с передатчиком (да/нет)"})
     */
    private $possible2muxAddRackmount = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="possible_2mux_add_rackmount_prim", type="string", length=255, nullable=false)
     */
    private $possible2muxAddRackmountPrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="possible_2mux_add_bridge", type="integer", nullable=false, options={"unsigned"=true,"comment"="Возможность установки устройства сложения  вблизи  передатчиков первого и второго мультиплексов."})
     */
    private $possible2muxAddBridge = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="possible_2mux_add_bridge_prim", type="string", length=255, nullable=false)
     */
    private $possible2muxAddBridgePrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="possible_heat_get_away", type="integer", nullable=false, options={"unsigned"=true,"comment"="Возможность отведения тепла существующим оборудованием "})
     */
    private $possibleHeatGetAway = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="possible_heat_get_away_prim", type="string", length=255, nullable=false)
     */
    private $possibleHeatGetAwayPrim = '';

    /**
     * @var float
     *
     * @ORM\Column(name="zapas_supply_power_value", type="float", precision=10, scale=0, nullable=false, options={"comment"="Запас по электроснабжению  для подключения оборудования второго мультиплекса, кВт "})
     */
    private $zapasSupplyPowerValue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="zapas_supply_power_value_prim", type="string", length=255, nullable=false)
     */
    private $zapasSupplyPowerValuePrim = '';

    /**
     * @var int
     *
     * @ORM\Column(name="reliability_category", type="integer", nullable=false, options={"unsigned"=true,"comment"="Категория надежности электроснабжения (I особая, I, II, III) "})
     */
    private $reliabilityCategory = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="reliability_category_prim", type="string", length=255, nullable=false)
     */
    private $reliabilityCategoryPrim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prim", type="text", length=65535, nullable=true, options={"comment"="Примечание"})
     */
    private $prim;

    /**
     * @var string
     *
     * @ORM\Column(name="prim_prim", type="string", length=255, nullable=false)
     */
    private $primPrim = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="antenna_marka_txt", type="string", length=255, nullable=true, options={"comment"="марка антенной панели"})
     */
    private $antennaMarkaTxt = '';

    /**
     * @var string
     *
     * @ORM\Column(name="antenna_marka_txt_prim", type="string", length=255, nullable=false)
     */
    private $antennaMarkaTxtPrim = '';

    /**
     * @var int|null
     *
     * @ORM\Column(name="dop_rackmount_n", type="integer", nullable=true, options={"default"="1"})
     */
    private $dopRackmountN = 1;

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

    public function getReady(): ?int
    {
        return $this->ready;
    }

    public function setReady(int $ready): self
    {
        $this->ready = $ready;

        return $this;
    }

    public function getReadyPrim(): ?string
    {
        return $this->readyPrim;
    }

    public function setReadyPrim(string $readyPrim): self
    {
        $this->readyPrim = $readyPrim;

        return $this;
    }

    public function getLatitude1(): ?int
    {
        return $this->latitude1;
    }

    public function setLatitude1(int $latitude1): self
    {
        $this->latitude1 = $latitude1;

        return $this;
    }

    public function getLatitude1Prim(): ?string
    {
        return $this->latitude1Prim;
    }

    public function setLatitude1Prim(string $latitude1Prim): self
    {
        $this->latitude1Prim = $latitude1Prim;

        return $this;
    }

    public function getLatitude2(): ?int
    {
        return $this->latitude2;
    }

    public function setLatitude2(int $latitude2): self
    {
        $this->latitude2 = $latitude2;

        return $this;
    }

    public function getLatitude2Prim(): ?string
    {
        return $this->latitude2Prim;
    }

    public function setLatitude2Prim(string $latitude2Prim): self
    {
        $this->latitude2Prim = $latitude2Prim;

        return $this;
    }

    public function getLatitude3(): ?float
    {
        return $this->latitude3;
    }

    public function setLatitude3(float $latitude3): self
    {
        $this->latitude3 = $latitude3;

        return $this;
    }

    public function getLatitude3Prim(): ?string
    {
        return $this->latitude3Prim;
    }

    public function setLatitude3Prim(string $latitude3Prim): self
    {
        $this->latitude3Prim = $latitude3Prim;

        return $this;
    }

    public function getLongitude1(): ?int
    {
        return $this->longitude1;
    }

    public function setLongitude1(int $longitude1): self
    {
        $this->longitude1 = $longitude1;

        return $this;
    }

    public function getLongitude1Prim(): ?string
    {
        return $this->longitude1Prim;
    }

    public function setLongitude1Prim(string $longitude1Prim): self
    {
        $this->longitude1Prim = $longitude1Prim;

        return $this;
    }

    public function getLongitude2(): ?int
    {
        return $this->longitude2;
    }

    public function setLongitude2(int $longitude2): self
    {
        $this->longitude2 = $longitude2;

        return $this;
    }

    public function getLongitude2Prim(): ?string
    {
        return $this->longitude2Prim;
    }

    public function setLongitude2Prim(string $longitude2Prim): self
    {
        $this->longitude2Prim = $longitude2Prim;

        return $this;
    }

    public function getLongitude3(): ?float
    {
        return $this->longitude3;
    }

    public function setLongitude3(float $longitude3): self
    {
        $this->longitude3 = $longitude3;

        return $this;
    }

    public function getLongitude3Prim(): ?string
    {
        return $this->longitude3Prim;
    }

    public function setLongitude3Prim(string $longitude3Prim): self
    {
        $this->longitude3Prim = $longitude3Prim;

        return $this;
    }

    public function getChtpZoneTxt(): ?string
    {
        return $this->chtpZoneTxt;
    }

    public function setChtpZoneTxt(?string $chtpZoneTxt): self
    {
        $this->chtpZoneTxt = $chtpZoneTxt;

        return $this;
    }

    public function getChtpZoneTxtPrim(): ?string
    {
        return $this->chtpZoneTxtPrim;
    }

    public function setChtpZoneTxtPrim(string $chtpZoneTxtPrim): self
    {
        $this->chtpZoneTxtPrim = $chtpZoneTxtPrim;

        return $this;
    }

    public function getTvkId(): ?int
    {
        return $this->tvkId;
    }

    public function setTvkId(int $tvkId): self
    {
        $this->tvkId = $tvkId;

        return $this;
    }

    public function getTvkIdPrim(): ?string
    {
        return $this->tvkIdPrim;
    }

    public function setTvkIdPrim(string $tvkIdPrim): self
    {
        $this->tvkIdPrim = $tvkIdPrim;

        return $this;
    }

    public function getTransmittPowerId(): ?int
    {
        return $this->transmittPowerId;
    }

    public function setTransmittPowerId(int $transmittPowerId): self
    {
        $this->transmittPowerId = $transmittPowerId;

        return $this;
    }

    public function getTransmittPowerIdPrim(): ?string
    {
        return $this->transmittPowerIdPrim;
    }

    public function setTransmittPowerIdPrim(string $transmittPowerIdPrim): self
    {
        $this->transmittPowerIdPrim = $transmittPowerIdPrim;

        return $this;
    }

    public function getTransmittMarka(): ?string
    {
        return $this->transmittMarka;
    }

    public function setTransmittMarka(?string $transmittMarka): self
    {
        $this->transmittMarka = $transmittMarka;

        return $this;
    }

    public function getTransmittMarkaPrim(): ?string
    {
        return $this->transmittMarkaPrim;
    }

    public function setTransmittMarkaPrim(string $transmittMarkaPrim): self
    {
        $this->transmittMarkaPrim = $transmittMarkaPrim;

        return $this;
    }

    public function getTransmittMarkaId(): ?int
    {
        return $this->transmittMarkaId;
    }

    public function setTransmittMarkaId(int $transmittMarkaId): self
    {
        $this->transmittMarkaId = $transmittMarkaId;

        return $this;
    }

    public function getTransmittMarkaIdPrim(): ?string
    {
        return $this->transmittMarkaIdPrim;
    }

    public function setTransmittMarkaIdPrim(string $transmittMarkaIdPrim): self
    {
        $this->transmittMarkaIdPrim = $transmittMarkaIdPrim;

        return $this;
    }

    public function getCoolingSystemTypeId(): ?int
    {
        return $this->coolingSystemTypeId;
    }

    public function setCoolingSystemTypeId(int $coolingSystemTypeId): self
    {
        $this->coolingSystemTypeId = $coolingSystemTypeId;

        return $this;
    }

    public function getCoolingSystemTypeIdPrim(): ?string
    {
        return $this->coolingSystemTypeIdPrim;
    }

    public function setCoolingSystemTypeIdPrim(string $coolingSystemTypeIdPrim): self
    {
        $this->coolingSystemTypeIdPrim = $coolingSystemTypeIdPrim;

        return $this;
    }

    public function getPolFilterTypeId(): ?int
    {
        return $this->polFilterTypeId;
    }

    public function setPolFilterTypeId(int $polFilterTypeId): self
    {
        $this->polFilterTypeId = $polFilterTypeId;

        return $this;
    }

    public function getPolFilterTypeIdPrim(): ?string
    {
        return $this->polFilterTypeIdPrim;
    }

    public function setPolFilterTypeIdPrim(string $polFilterTypeIdPrim): self
    {
        $this->polFilterTypeIdPrim = $polFilterTypeIdPrim;

        return $this;
    }

    public function getHouseTypeId(): ?int
    {
        return $this->houseTypeId;
    }

    public function setHouseTypeId(int $houseTypeId): self
    {
        $this->houseTypeId = $houseTypeId;

        return $this;
    }

    public function getHouseTypeIdPrim(): ?string
    {
        return $this->houseTypeIdPrim;
    }

    public function setHouseTypeIdPrim(string $houseTypeIdPrim): self
    {
        $this->houseTypeIdPrim = $houseTypeIdPrim;

        return $this;
    }

    public function getAntennaTypeId(): ?int
    {
        return $this->antennaTypeId;
    }

    public function setAntennaTypeId(int $antennaTypeId): self
    {
        $this->antennaTypeId = $antennaTypeId;

        return $this;
    }

    public function getAntennaTypeIdPrim(): ?string
    {
        return $this->antennaTypeIdPrim;
    }

    public function setAntennaTypeIdPrim(string $antennaTypeIdPrim): self
    {
        $this->antennaTypeIdPrim = $antennaTypeIdPrim;

        return $this;
    }

    public function getAntennaTypeTxtInit(): ?string
    {
        return $this->antennaTypeTxtInit;
    }

    public function setAntennaTypeTxtInit(?string $antennaTypeTxtInit): self
    {
        $this->antennaTypeTxtInit = $antennaTypeTxtInit;

        return $this;
    }

    public function getAntennaTypeTxtPrim(): ?string
    {
        return $this->antennaTypeTxtPrim;
    }

    public function setAntennaTypeTxtPrim(string $antennaTypeTxtPrim): self
    {
        $this->antennaTypeTxtPrim = $antennaTypeTxtPrim;

        return $this;
    }

    public function getAntennaTypeTxt(): ?string
    {
        return $this->antennaTypeTxt;
    }

    public function setAntennaTypeTxt(?string $antennaTypeTxt): self
    {
        $this->antennaTypeTxt = $antennaTypeTxt;

        return $this;
    }

    public function getAntennaIzg(): ?string
    {
        return $this->antennaIzg;
    }

    public function setAntennaIzg(?string $antennaIzg): self
    {
        $this->antennaIzg = $antennaIzg;

        return $this;
    }

    public function getAntennaIzgPrim(): ?string
    {
        return $this->antennaIzgPrim;
    }

    public function setAntennaIzgPrim(string $antennaIzgPrim): self
    {
        $this->antennaIzgPrim = $antennaIzgPrim;

        return $this;
    }

    public function getAntennaPanelsCount(): ?int
    {
        return $this->antennaPanelsCount;
    }

    public function setAntennaPanelsCount(int $antennaPanelsCount): self
    {
        $this->antennaPanelsCount = $antennaPanelsCount;

        return $this;
    }

    public function getAntennaPanelsCountPrim(): ?string
    {
        return $this->antennaPanelsCountPrim;
    }

    public function setAntennaPanelsCountPrim(string $antennaPanelsCountPrim): self
    {
        $this->antennaPanelsCountPrim = $antennaPanelsCountPrim;

        return $this;
    }

    public function getAntennadiagtxt(): ?string
    {
        return $this->antennadiagtxt;
    }

    public function setAntennadiagtxt(?string $antennadiagtxt): self
    {
        $this->antennadiagtxt = $antennadiagtxt;

        return $this;
    }

    public function getAntennadiagtxtPrim(): ?string
    {
        return $this->antennadiagtxtPrim;
    }

    public function setAntennadiagtxtPrim(string $antennadiagtxtPrim): self
    {
        $this->antennadiagtxtPrim = $antennadiagtxtPrim;

        return $this;
    }

    public function getAntennaKu(): ?float
    {
        return $this->antennaKu;
    }

    public function setAntennaKu(float $antennaKu): self
    {
        $this->antennaKu = $antennaKu;

        return $this;
    }

    public function getAntennaKuPrim(): ?string
    {
        return $this->antennaKuPrim;
    }

    public function setAntennaKuPrim(string $antennaKuPrim): self
    {
        $this->antennaKuPrim = $antennaKuPrim;

        return $this;
    }

    public function getAntennaPowerMax(): ?string
    {
        return $this->antennaPowerMax;
    }

    public function setAntennaPowerMax(?string $antennaPowerMax): self
    {
        $this->antennaPowerMax = $antennaPowerMax;

        return $this;
    }

    public function getAntennaPowerMaxPrim(): ?string
    {
        return $this->antennaPowerMaxPrim;
    }

    public function setAntennaPowerMaxPrim(string $antennaPowerMaxPrim): self
    {
        $this->antennaPowerMaxPrim = $antennaPowerMaxPrim;

        return $this;
    }

    public function getPanelsMontazh(): ?int
    {
        return $this->panelsMontazh;
    }

    public function setPanelsMontazh(int $panelsMontazh): self
    {
        $this->panelsMontazh = $panelsMontazh;

        return $this;
    }

    public function getPanelsMontazhPrim(): ?string
    {
        return $this->panelsMontazhPrim;
    }

    public function setPanelsMontazhPrim(string $panelsMontazhPrim): self
    {
        $this->panelsMontazhPrim = $panelsMontazhPrim;

        return $this;
    }

    public function getPanelsBase(): ?string
    {
        return $this->panelsBase;
    }

    public function setPanelsBase(?string $panelsBase): self
    {
        $this->panelsBase = $panelsBase;

        return $this;
    }

    public function getPanelsBasePrim(): ?string
    {
        return $this->panelsBasePrim;
    }

    public function setPanelsBasePrim(string $panelsBasePrim): self
    {
        $this->panelsBasePrim = $panelsBasePrim;

        return $this;
    }

    public function getAntennaHeightGeo(): ?float
    {
        return $this->antennaHeightGeo;
    }

    public function setAntennaHeightGeo(float $antennaHeightGeo): self
    {
        $this->antennaHeightGeo = $antennaHeightGeo;

        return $this;
    }

    public function getAntennaHeightGeoPrim(): ?string
    {
        return $this->antennaHeightGeoPrim;
    }

    public function setAntennaHeightGeoPrim(string $antennaHeightGeoPrim): self
    {
        $this->antennaHeightGeoPrim = $antennaHeightGeoPrim;

        return $this;
    }

    public function getAntennaNeravnZapitka(): ?int
    {
        return $this->antennaNeravnZapitka;
    }

    public function setAntennaNeravnZapitka(int $antennaNeravnZapitka): self
    {
        $this->antennaNeravnZapitka = $antennaNeravnZapitka;

        return $this;
    }

    public function getAntennaNeravnZapitkaPrim(): ?string
    {
        return $this->antennaNeravnZapitkaPrim;
    }

    public function setAntennaNeravnZapitkaPrim(string $antennaNeravnZapitkaPrim): self
    {
        $this->antennaNeravnZapitkaPrim = $antennaNeravnZapitkaPrim;

        return $this;
    }

    public function getFeederModelTxt(): ?string
    {
        return $this->feederModelTxt;
    }

    public function setFeederModelTxt(?string $feederModelTxt): self
    {
        $this->feederModelTxt = $feederModelTxt;

        return $this;
    }

    public function getFeederModelTxtPrim(): ?string
    {
        return $this->feederModelTxtPrim;
    }

    public function setFeederModelTxtPrim(string $feederModelTxtPrim): self
    {
        $this->feederModelTxtPrim = $feederModelTxtPrim;

        return $this;
    }

    public function getFeederModelId(): ?int
    {
        return $this->feederModelId;
    }

    public function setFeederModelId(int $feederModelId): self
    {
        $this->feederModelId = $feederModelId;

        return $this;
    }

    public function getFeederModelIdPrim(): ?string
    {
        return $this->feederModelIdPrim;
    }

    public function setFeederModelIdPrim(string $feederModelIdPrim): self
    {
        $this->feederModelIdPrim = $feederModelIdPrim;

        return $this;
    }

    public function getTwoFeeders(): ?int
    {
        return $this->twoFeeders;
    }

    public function setTwoFeeders(int $twoFeeders): self
    {
        $this->twoFeeders = $twoFeeders;

        return $this;
    }

    public function getTwoFeedersPrim(): ?string
    {
        return $this->twoFeedersPrim;
    }

    public function setTwoFeedersPrim(string $twoFeedersPrim): self
    {
        $this->twoFeedersPrim = $twoFeedersPrim;

        return $this;
    }

    public function getFeederLength(): ?float
    {
        return $this->feederLength;
    }

    public function setFeederLength(float $feederLength): self
    {
        $this->feederLength = $feederLength;

        return $this;
    }

    public function getFeederLengthPrim(): ?string
    {
        return $this->feederLengthPrim;
    }

    public function setFeederLengthPrim(string $feederLengthPrim): self
    {
        $this->feederLengthPrim = $feederLengthPrim;

        return $this;
    }

    public function getFeederMainConnectorTypeTxt(): ?string
    {
        return $this->feederMainConnectorTypeTxt;
    }

    public function setFeederMainConnectorTypeTxt(?string $feederMainConnectorTypeTxt): self
    {
        $this->feederMainConnectorTypeTxt = $feederMainConnectorTypeTxt;

        return $this;
    }

    public function getFeederMainConnectorTypeTxtPrim(): ?string
    {
        return $this->feederMainConnectorTypeTxtPrim;
    }

    public function setFeederMainConnectorTypeTxtPrim(string $feederMainConnectorTypeTxtPrim): self
    {
        $this->feederMainConnectorTypeTxtPrim = $feederMainConnectorTypeTxtPrim;

        return $this;
    }

    public function getFeederMainConnectorTypeId(): ?int
    {
        return $this->feederMainConnectorTypeId;
    }

    public function setFeederMainConnectorTypeId(int $feederMainConnectorTypeId): self
    {
        $this->feederMainConnectorTypeId = $feederMainConnectorTypeId;

        return $this;
    }

    public function getFeederMainConnectorTypeIdPrim(): ?string
    {
        return $this->feederMainConnectorTypeIdPrim;
    }

    public function setFeederMainConnectorTypeIdPrim(string $feederMainConnectorTypeIdPrim): self
    {
        $this->feederMainConnectorTypeIdPrim = $feederMainConnectorTypeIdPrim;

        return $this;
    }

    public function getBridgeExists(): ?int
    {
        return $this->bridgeExists;
    }

    public function setBridgeExists(int $bridgeExists): self
    {
        $this->bridgeExists = $bridgeExists;

        return $this;
    }

    public function getBridgeExistsPrim(): ?string
    {
        return $this->bridgeExistsPrim;
    }

    public function setBridgeExistsPrim(string $bridgeExistsPrim): self
    {
        $this->bridgeExistsPrim = $bridgeExistsPrim;

        return $this;
    }

    public function getAmsType(): ?int
    {
        return $this->amsType;
    }

    public function setAmsType(int $amsType): self
    {
        $this->amsType = $amsType;

        return $this;
    }

    public function getAmsTypePrim(): ?string
    {
        return $this->amsTypePrim;
    }

    public function setAmsTypePrim(string $amsTypePrim): self
    {
        $this->amsTypePrim = $amsTypePrim;

        return $this;
    }

    public function getAmsHeight(): ?float
    {
        return $this->amsHeight;
    }

    public function setAmsHeight(float $amsHeight): self
    {
        $this->amsHeight = $amsHeight;

        return $this;
    }

    public function getAmsHeightPrim(): ?string
    {
        return $this->amsHeightPrim;
    }

    public function setAmsHeightPrim(string $amsHeightPrim): self
    {
        $this->amsHeightPrim = $amsHeightPrim;

        return $this;
    }

    public function getPossibleSecondSatelliteAntenna(): ?int
    {
        return $this->possibleSecondSatelliteAntenna;
    }

    public function setPossibleSecondSatelliteAntenna(int $possibleSecondSatelliteAntenna): self
    {
        $this->possibleSecondSatelliteAntenna = $possibleSecondSatelliteAntenna;

        return $this;
    }

    public function getPossibleSecondSatelliteAntennaPrim(): ?string
    {
        return $this->possibleSecondSatelliteAntennaPrim;
    }

    public function setPossibleSecondSatelliteAntennaPrim(string $possibleSecondSatelliteAntennaPrim): self
    {
        $this->possibleSecondSatelliteAntennaPrim = $possibleSecondSatelliteAntennaPrim;

        return $this;
    }

    public function getChtpZone2muxTxt(): ?string
    {
        return $this->chtpZone2muxTxt;
    }

    public function setChtpZone2muxTxt(?string $chtpZone2muxTxt): self
    {
        $this->chtpZone2muxTxt = $chtpZone2muxTxt;

        return $this;
    }

    public function getChtpZone2muxTxtPrim(): ?string
    {
        return $this->chtpZone2muxTxtPrim;
    }

    public function setChtpZone2muxTxtPrim(string $chtpZone2muxTxtPrim): self
    {
        $this->chtpZone2muxTxtPrim = $chtpZone2muxTxtPrim;

        return $this;
    }

    public function getTvk2muxId(): ?int
    {
        return $this->tvk2muxId;
    }

    public function setTvk2muxId(int $tvk2muxId): self
    {
        $this->tvk2muxId = $tvk2muxId;

        return $this;
    }

    public function getTvk2muxIdPrim(): ?string
    {
        return $this->tvk2muxIdPrim;
    }

    public function setTvk2muxIdPrim(string $tvk2muxIdPrim): self
    {
        $this->tvk2muxIdPrim = $tvk2muxIdPrim;

        return $this;
    }

    public function getTransmittPower2muxId(): ?int
    {
        return $this->transmittPower2muxId;
    }

    public function setTransmittPower2muxId(int $transmittPower2muxId): self
    {
        $this->transmittPower2muxId = $transmittPower2muxId;

        return $this;
    }

    public function getTransmittPower2muxIdPrim(): ?string
    {
        return $this->transmittPower2muxIdPrim;
    }

    public function setTransmittPower2muxIdPrim(string $transmittPower2muxIdPrim): self
    {
        $this->transmittPower2muxIdPrim = $transmittPower2muxIdPrim;

        return $this;
    }

    public function getOborud2muxHeight(): ?int
    {
        return $this->oborud2muxHeight;
    }

    public function setOborud2muxHeight(int $oborud2muxHeight): self
    {
        $this->oborud2muxHeight = $oborud2muxHeight;

        return $this;
    }

    public function getOborud2muxHeightPrim(): ?string
    {
        return $this->oborud2muxHeightPrim;
    }

    public function setOborud2muxHeightPrim(string $oborud2muxHeightPrim): self
    {
        $this->oborud2muxHeightPrim = $oborud2muxHeightPrim;

        return $this;
    }

    public function getDopRackmountX(): ?int
    {
        return $this->dopRackmountX;
    }

    public function setDopRackmountX(int $dopRackmountX): self
    {
        $this->dopRackmountX = $dopRackmountX;

        return $this;
    }

    public function getDopRackmountXPrim(): ?string
    {
        return $this->dopRackmountXPrim;
    }

    public function setDopRackmountXPrim(string $dopRackmountXPrim): self
    {
        $this->dopRackmountXPrim = $dopRackmountXPrim;

        return $this;
    }

    public function getDopRackmountY(): ?int
    {
        return $this->dopRackmountY;
    }

    public function setDopRackmountY(int $dopRackmountY): self
    {
        $this->dopRackmountY = $dopRackmountY;

        return $this;
    }

    public function getDopRackmountYPrim(): ?string
    {
        return $this->dopRackmountYPrim;
    }

    public function setDopRackmountYPrim(string $dopRackmountYPrim): self
    {
        $this->dopRackmountYPrim = $dopRackmountYPrim;

        return $this;
    }

    public function getDopRackmountZ(): ?int
    {
        return $this->dopRackmountZ;
    }

    public function setDopRackmountZ(int $dopRackmountZ): self
    {
        $this->dopRackmountZ = $dopRackmountZ;

        return $this;
    }

    public function getDopRackmountZPrim(): ?string
    {
        return $this->dopRackmountZPrim;
    }

    public function setDopRackmountZPrim(string $dopRackmountZPrim): self
    {
        $this->dopRackmountZPrim = $dopRackmountZPrim;

        return $this;
    }

    public function getBridge2muxSizeX(): ?int
    {
        return $this->bridge2muxSizeX;
    }

    public function setBridge2muxSizeX(int $bridge2muxSizeX): self
    {
        $this->bridge2muxSizeX = $bridge2muxSizeX;

        return $this;
    }

    public function getBridge2muxSizeXPrim(): ?string
    {
        return $this->bridge2muxSizeXPrim;
    }

    public function setBridge2muxSizeXPrim(string $bridge2muxSizeXPrim): self
    {
        $this->bridge2muxSizeXPrim = $bridge2muxSizeXPrim;

        return $this;
    }

    public function getBridge2muxSizeY(): ?int
    {
        return $this->bridge2muxSizeY;
    }

    public function setBridge2muxSizeY(int $bridge2muxSizeY): self
    {
        $this->bridge2muxSizeY = $bridge2muxSizeY;

        return $this;
    }

    public function getBridge2muxSizeYPrim(): ?string
    {
        return $this->bridge2muxSizeYPrim;
    }

    public function setBridge2muxSizeYPrim(string $bridge2muxSizeYPrim): self
    {
        $this->bridge2muxSizeYPrim = $bridge2muxSizeYPrim;

        return $this;
    }

    public function getBridge2muxSizeZ(): ?int
    {
        return $this->bridge2muxSizeZ;
    }

    public function setBridge2muxSizeZ(int $bridge2muxSizeZ): self
    {
        $this->bridge2muxSizeZ = $bridge2muxSizeZ;

        return $this;
    }

    public function getBridge2muxSizeZPrim(): ?string
    {
        return $this->bridge2muxSizeZPrim;
    }

    public function setBridge2muxSizeZPrim(string $bridge2muxSizeZPrim): self
    {
        $this->bridge2muxSizeZPrim = $bridge2muxSizeZPrim;

        return $this;
    }

    public function getHeatPower(): ?float
    {
        return $this->heatPower;
    }

    public function setHeatPower(float $heatPower): self
    {
        $this->heatPower = $heatPower;

        return $this;
    }

    public function getHeatPowerPrim(): ?string
    {
        return $this->heatPowerPrim;
    }

    public function setHeatPowerPrim(string $heatPowerPrim): self
    {
        $this->heatPowerPrim = $heatPowerPrim;

        return $this;
    }

    public function getSupplyPower2mux(): ?float
    {
        return $this->supplyPower2mux;
    }

    public function setSupplyPower2mux(float $supplyPower2mux): self
    {
        $this->supplyPower2mux = $supplyPower2mux;

        return $this;
    }

    public function getSupplyPower2muxPrim(): ?string
    {
        return $this->supplyPower2muxPrim;
    }

    public function setSupplyPower2muxPrim(string $supplyPower2muxPrim): self
    {
        $this->supplyPower2muxPrim = $supplyPower2muxPrim;

        return $this;
    }

    public function getPossible2muxInExistRackmount(): ?int
    {
        return $this->possible2muxInExistRackmount;
    }

    public function setPossible2muxInExistRackmount(int $possible2muxInExistRackmount): self
    {
        $this->possible2muxInExistRackmount = $possible2muxInExistRackmount;

        return $this;
    }

    public function getPossible2muxInExistRackmountPrim(): ?string
    {
        return $this->possible2muxInExistRackmountPrim;
    }

    public function setPossible2muxInExistRackmountPrim(string $possible2muxInExistRackmountPrim): self
    {
        $this->possible2muxInExistRackmountPrim = $possible2muxInExistRackmountPrim;

        return $this;
    }

    public function getPossible2muxAddRackmount(): ?int
    {
        return $this->possible2muxAddRackmount;
    }

    public function setPossible2muxAddRackmount(int $possible2muxAddRackmount): self
    {
        $this->possible2muxAddRackmount = $possible2muxAddRackmount;

        return $this;
    }

    public function getPossible2muxAddRackmountPrim(): ?string
    {
        return $this->possible2muxAddRackmountPrim;
    }

    public function setPossible2muxAddRackmountPrim(string $possible2muxAddRackmountPrim): self
    {
        $this->possible2muxAddRackmountPrim = $possible2muxAddRackmountPrim;

        return $this;
    }

    public function getPossible2muxAddBridge(): ?int
    {
        return $this->possible2muxAddBridge;
    }

    public function setPossible2muxAddBridge(int $possible2muxAddBridge): self
    {
        $this->possible2muxAddBridge = $possible2muxAddBridge;

        return $this;
    }

    public function getPossible2muxAddBridgePrim(): ?string
    {
        return $this->possible2muxAddBridgePrim;
    }

    public function setPossible2muxAddBridgePrim(string $possible2muxAddBridgePrim): self
    {
        $this->possible2muxAddBridgePrim = $possible2muxAddBridgePrim;

        return $this;
    }

    public function getPossibleHeatGetAway(): ?int
    {
        return $this->possibleHeatGetAway;
    }

    public function setPossibleHeatGetAway(int $possibleHeatGetAway): self
    {
        $this->possibleHeatGetAway = $possibleHeatGetAway;

        return $this;
    }

    public function getPossibleHeatGetAwayPrim(): ?string
    {
        return $this->possibleHeatGetAwayPrim;
    }

    public function setPossibleHeatGetAwayPrim(string $possibleHeatGetAwayPrim): self
    {
        $this->possibleHeatGetAwayPrim = $possibleHeatGetAwayPrim;

        return $this;
    }

    public function getZapasSupplyPowerValue(): ?float
    {
        return $this->zapasSupplyPowerValue;
    }

    public function setZapasSupplyPowerValue(float $zapasSupplyPowerValue): self
    {
        $this->zapasSupplyPowerValue = $zapasSupplyPowerValue;

        return $this;
    }

    public function getZapasSupplyPowerValuePrim(): ?string
    {
        return $this->zapasSupplyPowerValuePrim;
    }

    public function setZapasSupplyPowerValuePrim(string $zapasSupplyPowerValuePrim): self
    {
        $this->zapasSupplyPowerValuePrim = $zapasSupplyPowerValuePrim;

        return $this;
    }

    public function getReliabilityCategory(): ?int
    {
        return $this->reliabilityCategory;
    }

    public function setReliabilityCategory(int $reliabilityCategory): self
    {
        $this->reliabilityCategory = $reliabilityCategory;

        return $this;
    }

    public function getReliabilityCategoryPrim(): ?string
    {
        return $this->reliabilityCategoryPrim;
    }

    public function setReliabilityCategoryPrim(string $reliabilityCategoryPrim): self
    {
        $this->reliabilityCategoryPrim = $reliabilityCategoryPrim;

        return $this;
    }

    public function getPrim(): ?string
    {
        return $this->prim;
    }

    public function setPrim(?string $prim): self
    {
        $this->prim = $prim;

        return $this;
    }

    public function getPrimPrim(): ?string
    {
        return $this->primPrim;
    }

    public function setPrimPrim(string $primPrim): self
    {
        $this->primPrim = $primPrim;

        return $this;
    }

    public function getAntennaMarkaTxt(): ?string
    {
        return $this->antennaMarkaTxt;
    }

    public function setAntennaMarkaTxt(?string $antennaMarkaTxt): self
    {
        $this->antennaMarkaTxt = $antennaMarkaTxt;

        return $this;
    }

    public function getAntennaMarkaTxtPrim(): ?string
    {
        return $this->antennaMarkaTxtPrim;
    }

    public function setAntennaMarkaTxtPrim(string $antennaMarkaTxtPrim): self
    {
        $this->antennaMarkaTxtPrim = $antennaMarkaTxtPrim;

        return $this;
    }

    public function getDopRackmountN(): ?int
    {
        return $this->dopRackmountN;
    }

    public function setDopRackmountN(?int $dopRackmountN): self
    {
        $this->dopRackmountN = $dopRackmountN;

        return $this;
    }


}
