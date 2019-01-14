<?php
    // Breadcrumb
    $breadcrumb = [
      [ 'Inicio', 'home','Pages'],
      [ 'Portal Proyectos','index','PortalProjects'],
      [ 'IDM','companies','PortalProjects'],
      [ 'Unidad de Transmisión Colombia','company','PortalProjects' ],
      [ 'Crecimiento','projects','PortalProjects'],
      [ '﻿Nueva Subestación MOCOA (RENACER) 230 kV', '','PortalProjects'],
    ];

    // Riesgos
    $risks = [
        [
            'name' => '1',
            'x' => 5,
            'y' => 2,
        ],
        [
            'name' => '2',
            'x' => 5,
            'y' => 2,
        ],
        [
            'name' => '3',
            'x' => 1,
            'y' => 1,
        ],
        [
            'name' => '4',
            'x' => 1,
            'y' => 3,
        ],
        [
            'name' => '5',
            'x' => 4,
            'y' => 3,
        ],
        [
            'name' => '6',
            'x' => 3,
            'y' => 3,
        ],
        [
            'name' => '7',
            'x' => 2,
            'y' => 1,
        ],
        [
            'name' => '8',
            'x' => 3,
            'y' => 4,
        ],
        [
            'name' => '9',
            'x' => 4,
            'y' => 5,
        ],
        [
            'name' => '10',
            'x' => 3,
            'y' => 2,
        ],
    ];
?>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="https://www.amcharts.com/lib/3/gauge.js"></script>
<script src="https://www.amcharts.com/lib/3/lang/es.js"></script>
<script type="text/javascript">
/*
    // Porcentajes de avances
    AmCharts.makeChart("advance",
        {
            "type": "gauge",
            "theme": "light",
            "language": "es",
            "axes": [
                {
                    "axisAlpha": 0,
                    "tickAlpha": 0,
                    "labelsEnabled": false,
                    "startValue": 0,
                    "endValue": 100,
                    "startAngle": 0,
                    "endAngle": 360,
                    "bands": [
                        // Usuarios perdidos
                        {
                            "color": "#eee",
                            "startValue": 0,
                            "endValue": 100,
                            "radius": "100%",
                            "innerRadius": "70%",
                            "balloonText": "Avance planeado",
                        },
                        {
                            "color": "#A6CE39",
                            "startValue": 0,
                            "endValue": <?=$data1?>,
                            "radius": "100%",
                            "innerRadius": "70%",
                            "balloonText": "<?=$data1?>% Avance planeado",
                        },
                        // Usuarios pagos
                        {
                            "color": "#E6E6E6",
                            "startValue": 0,
                            "endValue": 100,
                            "radius": "70%",
                            "innerRadius": "40%",
                            "balloonText": "Ejecutado",
                        },
                        {
                            "color": "#2CACE3",
                            "startValue": 0,
                            "endValue": <?=$data2?>,
                            "radius": "70%",
                            "innerRadius": "40%",
                            "balloonText": "<?=$data2?>% Ejecutado",
                        },
                    ]
                }
            ],
            "export": {
                "enabled": false
            }
        }
    );

    // Curva de avance físico
    AmCharts.makeChart("caf",
        {
            "type": "serial",
            "categoryField": "date",
            "dataDateFormat": "YYYY-MM-DD",
            "fontFamily": "'Open Sans'",
            "theme": "default",
            "language": "es",
            "categoryAxis": {
                "equalSpacing": true,
                "gridPosition": "start",
                "minPeriod": "DD",
                "parseDates": true,
                "startOnAxis": true,
                "axisAlpha": 0,
                "gridAlpha": 0,
                "labelOffset": -1
            },
            "chartCursor": {
                "enabled": true,
                "categoryBalloonDateFormat": "DD MMM YYYY",
                "cursorColor": "#00A34B"
            },
            "chartScrollbar": {
                "enabled": true,
                "graph": "AmGraph-2",
                "graphType": "line",
                "gridCount": 7,
                "offset": 40,
                "oppositeAxis": false,
                "scrollbarHeight": 40
            },
            "trendLines": [],
            "graphs": [
                {
                    "customBullet": "",
                    "dashLength": 7,
                    "id": "AmGraph-1",
                    "labelPosition": "right",
                    "labelText": "",
                    "lineColor": "#2CACE3",
                    "lineThickness": 3,
                    "minBulletSize": 3,
                    "showAllValueLabels": true,
                    "title": "Ejecutado",
                    "valueField": "column-1"
                },
                {
                    "id": "AmGraph-2",
                    "lineColor": "#A6CE39",
                    "lineThickness": 3,
                    "title": "Planeado",
                    "valueField": "column-2"
                }
            ],
            "guides": [],
            "valueAxes": [
                {
                    "id": "ValueAxis-1",
                    "totalText": "",
                    "unit": "%",
                    "axisAlpha": 0,
                    "gridAlpha": 0.06,
                    "title": ""
                }
            ],
            "allLabels": [],
            "balloon": {},
            "legend": {
                "enabled": true,
                "autoMargins": false,
                "marginRight": 0,
                "markerSize": 15,
                "position": "top",
                "spacing": 16,
                "useGraphSettings": true
            },
            "titles": [],
            "dataProvider": [
                {
                    "date": "2014-01-17",
                    "column-1": "0",
                    "column-2": "0"
                },
                {
                    "date": "2014-02-17",
                    "column-1": "5",
                    "column-2": "6"
                },
                {
                    "date": "2014-03-17",
                    "column-1": "10",
                    "column-2": "12"
                },
                {
                    "date": "2014-04-17",
                    "column-1": "11",
                    "column-2": "15"
                },
                {
                    "date": "2014-05-17",
                    "column-1": "12",
                    "column-2": "20"
                },
                {
                    "date": "2014-06-17",
                    "column-1": "13",
                    "column-2": "22"
                },
                {
                    "date": "2014-07-17",
                    "column-1": "15",
                    "column-2": "30"
                },
                {
                    "date": "2014-08-17",
                    "column-1": "20",
                    "column-2": "30"
                },
                {
                    "date": "2014-09-17",
                    "column-1": "21",
                    "column-2": "32"
                },
                {
                    "date": "2014-10-17",
                    "column-1": "22",
                    "column-2": "35"
                },
                {
                    "date": "2014-11-17",
                    "column-1": null,
                    "column-2": "31"
                },
                {
                    "date": "2014-12-17",
                    "column-1": null,
                    "column-2": "30"
                },
                {
                    "date": "2015-01-17",
                    "column-1": null,
                    "column-2": "25"
                },
                {
                    "date": "2015-02-17",
                    "column-1": null,
                    "column-2": "27"
                },
                {
                    "date": "2015-03-17",
                    "column-1": null,
                    "column-2": "32"
                }
            ]
        }
    );

    // Gráfica acumulado
    AmCharts.makeChart("ga",
        {
            "type": "serial",
            "language": "es",
            "categoryField": "category",
            "startDuration": 1,
            "fontFamily": "'Open Sans'",
            "categoryAxis": {
                "gridPosition": "start",
                "axisAlpha": 0,
                "gridAlpha": 0
            },
            "trendLines": [],
            "graphs": [
                {
                    "balloonText": "[[title]] de [[category]]:[[value]]",
                    "cornerRadiusTop": 6,
                    "fillAlphas": 1,
                    "id": "AmGraph-1",
                    "lineColor": "#2CACE3",
                    "title": "Acumulado",
                    "type": "column",
                    "valueField": "column-1"
                }
            ],
            "guides": [],
            "valueAxes": [
                {
                    "id": "ValueAxis-1",
                    "unit": "$ ",
                    "unitPosition": "left",
                    "axisAlpha": 0,
                    "gridAlpha": 0.09,
                    "title": "Axis title",
                    "titleFontSize": 0,
                    "titleRotation": 0
                }
            ],
            "allLabels": [],
            "balloon": {},
            "titles": [],
            "dataProvider": [
                {
                    "category": "PPTO COP",
                    "column-1": "22000000000"
                },
                {
                    "category": "PPTO USD",
                    "column-1": "500000000"
                },
                {
                    "category": "AC COP",
                    "column-1": "36000000000"
                },
                {
                    "category": "AC USD",
                    "column-1": "1000000000"
                }
            ]
        }
    );
    */
</script>
<div class="section bcrumb project">
    <div class="breadcrumb-container">
        <?php foreach ($breadcrumb as $item): ?>
            <!-- <a href="<?= $item[1] ?>" class="breadcrumb"><?= $item[0] ?></a> -->
            <?php echo $this->Html->link($item[0],
              ['controller'=>$item[2], 'action'=>$item[1]],
              ['escape' => false,'class'=>'breadcrumb']
            );?>
        <?php endforeach; ?>
    </div>
    <!-- <<h1><?=$data1?></h1> -->
    <sidebar class="project-sidebar">
        <h1>Nueva Subestación MOCOA (RENACER) 230 kV</h1>
        <div class="project-sidebar-phase orange">
            <h2>Fase III</h2>
        </div>
        <div class="project-sidebar-percentages">
            <a class="copyright-amcharts" href="http://www.amcharts.com" title="JavaScript charts" target="_blank">JS chart por amCharts</a>
            <div class="chart" id="advance"></div>
            <div class="legend">
                <h3 class="secondary-text">62.3% Avance planeado</h3>
                <h3 class="accent-text">57.2% Ejecutado</h3>
            </div>
        </div>
        <div class="project-sidebar-info">
            <h2>Información general</h2>
            <p>Es la segunda empresa en transmisión de electricidad en Colombia, con una participación en el mercado del 12.5%. Cuenta con 1.504 km de circuitos a 230 kV activos en 17 subestaciones y la disponibilidad del sistema de transmisión a 31 de diciembre del 2015 fue del 99,93%, superior a la meta fijada por la CREG.</p>
        </div>
        <div class="project-sidebar-info">
            <h2>Alcance</h2>
            <p>El alcance del proyecto corresponde a la puesta en servicio de la línea doble circuito a 230kV, desde la Subestación Chivor II hasta la Subestación Norte y desde la Subestación Norte hasta la Subestación Bacatá, incluyendo la modificación de las subestaciones Chivor y Bacatá y la instalación de las nuevas subestaciones Chivor II y Norte. El proyecto no incluye la administración, operación y mantenimiento durante 25 años contados desde la fecha oficial de puesta en operación de acuerdo con lo establecido en la normatividad aplicable.</p>
        </div>
        <div class="project-sidebar-info">
            <h2>Solicitudes al MME modificaciones FOPO</h2>
            <p>1. Resolución 4-1185 en la cual se otorgan 422 días de 525 solicitados, dando como Fecha de Entrada en Operación el 26 de Diciembre de 2016.2. Resolución 4-1248 en la cual se otorgan 145 días de 254 solicitados, dando como Fecha de Entrada en Operación el 20 de Mayo de 2017.3. Resolución 4-0510 en la cual se otorgan 176 días de 411 solicitados, dando como Fecha de Entrada en Operación el 25 de Noviembre de 2017.</p>
        </div>
    </sidebar>

    <div class="project-content">
        <div class="data">
            <div class="data-distance">
                <?= $this->Html->image('icons/torre-blanca.svg') ?>
                <div class="data-distance-content">
                    <h2>Distancia</h2>
                    <h3>162 Km</h3>
                    <div class="line-distance"></div>
                    <h4>de líneas de transmisión de</h4>
                    <h5>230kV</h5>
                    <div class="divider white mt-3 mb-1"></div>
                    <h6>344 Torres</h6>
                </div>
                <?= $this->Html->image('icons/torre-blanca.svg') ?>
            </div>

            <div class="data-content">
                <ul>
                    <li>
                        <i class="material-icons">event</i>
                        <span>FoPo: Enero 10, 2018</span>
                    </li>
                    <li>
                        <i class="material-icons">event_note</i>
                        <span>Adjudicación: Enero 10, 2018</span>
                    </li>
                    <li>
                        <i class="material-icons">event_available</i>
                        <span>Aprobación: Enero 10, 2018</span>
                    </li>
                    <li>
                        <i class="material-icons">straighten</i>
                        <span>Longitud: 162 Km</span>
                    </li>
                    <li>
                        <i class="material-icons">place</i>
                        <span>No. de subestaciones: 2</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="map">
            <?= $this->Html->image('maps/mapa1.png') ?>
        </div>

        <div class="indicators">
            <h2>Indicadores de cronograma</h2>
            <div class="indicator primary">
                <h2>SPI <small>Interno</small></h2>
                <h3>0.91</h3>
                <?= $this->Html->image('isotype-light.svg') ?>
            </div>
            <div class="indicator light-blue darken-2">
                <h2>PORCENTAJE <small>AVANCE PLANEADO</small></h2>
                <h3>62%</h3>
                <?= $this->Html->image('isotype-light.svg') ?>
            </div>
            <div class="indicator light-blue darken-3">
                <h2>PORCENTAJE <small>EJECUTADO</small></h2>
                <h3>57%</h3>
                <?= $this->Html->image('isotype-light.svg') ?>
            </div>
            <div class="indicator light-blue darken-2">
                <h2>FePo</h2>
                <h4>Enero 15, 2018</h4>
                <?= $this->Html->image('isotype-light.svg') ?>
            </div>
        </div>

        <div class="indicators mb-4">
            <h2>Indicadores de presupuesto</h2>
            <a class="indicator light-green modal-trigger" href="#detailValueExecuted">
                <h2>AC</h2>
                <h4>USD 39.68 M</h4>
                <?= $this->Html->image('isotype-light.svg') ?>
            </a>
            <a class="indicator light-green darken-1 modal-trigger" href="#detailValueExecuted">
                <h2>PV</h2>
                <h4>USD 101 M</h4>
                <?= $this->Html->image('isotype-light.svg') ?>
            </a>
            <a class="indicator light-green darken-2 modal-trigger" href="#detailValueExecuted">
                <h2>AC <small>2018</small></h2>
                <h4><small>EN CONSTRUCCIÓN</small></h4>
                <?= $this->Html->image('isotype-light.svg') ?>
            </a>
            <a class="indicator light-green darken-3 modal-trigger" href="#detailValueExecuted">
                <h2>PV <small>2018</small></h2>
                <h4><small>EN CONSTRUCCIÓN</small></h4>
                <?= $this->Html->image('isotype-light.svg') ?>
            </a>
        </div>

        <div class="chart">
            <h2>Curva de Avance Físico</h2>
            <div class="chart-content" id="caf"></div>
            <a class="copyright-amcharts right-align" href="http://www.amcharts.com" title="JavaScript charts" target="_blank">JS chart por amCharts</a>
        </div>

        <div class="chart">
            <h2>Gráfica acumulado (en construcción)</h2>
            <div class="chart-content" id="ga"></div>
            <a class="copyright-amcharts right-align" href="http://www.amcharts.com" title="JavaScript charts" target="_blank">JS chart por amCharts</a>
        </div>

        <div class="chart">
            <h2>Riesgos</h2>
            <div class="chart-risk">
                <div class="chart-risk-list">
                    <ul>
                        <?php foreach ($risks as $risk): ?>
                        <li>
                            <a href="#detailRisk" class="modal-trigger">Riesgo <?= $risk['name'] ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="heatmap">
                    <table>
                        <tr>
                            <th class="title" rowspan="5"><h3 class="vert">Probabilidad</h3></th>
                            <th>MA</th>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 1 && $risk['y'] == 1 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 2 && $risk['y'] == 1 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 3 && $risk['y'] == 1 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 4 && $risk['y'] == 1 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 5 && $risk['y'] == 1 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>A</th>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 1 && $risk['y'] == 2 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 2 && $risk['y'] == 2 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 3 && $risk['y'] == 2 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 4 && $risk['y'] == 2 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="red">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 5 && $risk['y'] == 2 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>M</th>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 1 && $risk['y'] == 3 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 2 && $risk['y'] == 3 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 3 && $risk['y'] == 3 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 4 && $risk['y'] == 3 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="orange">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 5 && $risk['y'] == 3 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>B</th>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 1 && $risk['y'] == 4 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 2 && $risk['y'] == 4 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 3 && $risk['y'] == 4 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 4 && $risk['y'] == 4 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 5 && $risk['y'] == 4 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>MB</th>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 1 && $risk['y'] == 5 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 2 && $risk['y'] == 5 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 3 && $risk['y'] == 5 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="lime accent-4">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 4 && $risk['y'] == 5 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                            <td class="yellow">
                                <?php foreach ($risks as $risk):
                                    if($risk['x'] == 5 && $risk['y'] == 5 ) {
                                        echo '<span>' .$risk['name']. '</span>';
                                    };
                                endforeach; ?>
                            </td>
                        </tr>
                        <tr>
                            <th class="title" colspan="2"></th>
                            <th>MB</th>
                            <th>B</th>
                            <th>M</th>
                            <th>A</th>
                            <th>MA</th>
                        </tr>
                        <tr>
                            <th class="title" colspan="2"></th>
                            <th class="title" colspan="5">
                                <h3>Impacto</h3>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal detalle valor ejecutado -->
<div id="detailValueExecuted" class="modal">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2>Detalle valor ejecutado</h2>
        <ul class="collapsible collapsible-data">
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">keyboard_arrow_down</i>
                    <ul class="collapsible-header-content">
                        <li>
                            <small>Código (CBS)</small>
                            <h3>1</h3>
                        </li>
                        <li>
                            <small>Descripción</small>
                            <h3>Proyecto</h3>
                        </li>
                        <li>
                            <small>Monto (COP)</small>
                            <h3>$ 35,564,214,614</h3>
                        </li>
                        <li>
                            <small>Monto (USD)</small>
                            <h3>$ 1,564,214,614</h3>
                        </li>
                    </ul>
                </div>
                <div class="collapsible-body">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">keyboard_arrow_down</i>
                                <ul class="collapsible-header-content">
                                    <li>
                                        <small>Código (CBS)</small>
                                        <h3>1</h3>
                                    </li>
                                    <li>
                                        <small>Descripción</small>
                                        <h3>Proyecto</h3>
                                    </li>
                                    <li>
                                        <small>Monto (COP)</small>
                                        <h3>$ 35,564,214,614</h3>
                                    </li>
                                    <li>
                                        <small>Monto (USD)</small>
                                        <h3>$ 1,564,214,614</h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="collapsible-body">
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <!-- <i class="material-icons">keyboard_arrow_down</i> -->
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <i class="material-icons">keyboard_arrow_down</i>
                    <ul class="collapsible-header-content">
                        <li>
                            <small>Código (CBS)</small>
                            <h3>1</h3>
                        </li>
                        <li>
                            <small>Descripción</small>
                            <h3>Proyecto</h3>
                        </li>
                        <li>
                            <small>Monto (COP)</small>
                            <h3>$ 35,564,214,614</h3>
                        </li>
                        <li>
                            <small>Monto (USD)</small>
                            <h3>$ 1,564,214,614</h3>
                        </li>
                    </ul>
                </div>
                <div class="collapsible-body">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                                <i class="material-icons">keyboard_arrow_down</i>
                                <ul class="collapsible-header-content">
                                    <li>
                                        <small>Código (CBS)</small>
                                        <h3>1</h3>
                                    </li>
                                    <li>
                                        <small>Descripción</small>
                                        <h3>Proyecto</h3>
                                    </li>
                                    <li>
                                        <small>Monto (COP)</small>
                                        <h3>$ 35,564,214,614</h3>
                                    </li>
                                    <li>
                                        <small>Monto (USD)</small>
                                        <h3>$ 1,564,214,614</h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="collapsible-body">
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                                <ul class="collapsible">
                                    <li>
                                        <div class="collapsible-header">
                                            <ul class="collapsible-header-content">
                                                <li>
                                                    <small>Código (CBS)</small>
                                                    <h3>1</h3>
                                                </li>
                                                <li>
                                                    <small>Descripción</small>
                                                    <h3>Proyecto</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (COP)</small>
                                                    <h3>$ 35,564,214,614</h3>
                                                </li>
                                                <li>
                                                    <small>Monto (USD)</small>
                                                    <h3>$ 1,564,214,614</h3>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="collapsible-body">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- Modal detalle de riesgo -->
<div id="detailRisk" class="modal">
    <div class="modal-content">
        <a class="modal-close close">
            <i class="material-icons">close</i>
        </a>
        <h2>Detalle riesgo</h2>
        <table>
            <tr>
                <th width="20%">Risego</th>
                <td>1</td>
            </tr>
            <tr>
                <th>Nombre Riesgo</th>
                <td>NO ENTRADA EN OPERACIÓN DEL PROYECTO EN LA FECHA PREVISTA  LO  CUAL GENERA  POSIBLES COMPENSACIONES ANTE MME</td>
            </tr>
            <tr>
                <th>Probabilidad</th>
                <td>Muy Alta</td>
            </tr>
            <tr>
                <th>Impacto</th>
                <td>Muy Alto</td>
            </tr>
            <tr>
                <th>Impacto del riesgo</th>
                <td>25</td>
            </tr>
            <tr>
                <th>Plan de Respuesta 01</th>
                <td>Monitorear y controlar las diferentes actividades de las áreas de gestión del proyecto necesarias para demostrar la debida diligencia ante las autoridades</td>
            </tr>
            <tr>
                <th>Plan de Respuesta 02</th>
                <td>Solicitar ante el MME con todos los soportes necesarios y justificados la aprobación de prórroga de la FOPO</td>
            </tr>
            <tr>
                <th>Plan de Respuesta 03</th>
                <td>Gestión con la autoridad ambiental para el seguimiento del estado del trámite y la modulación de la respuesta de la misma para mitigar la posible desviación de cronograma del proyecto</td>
            </tr>
            <tr>
                <th>Plan de Respuesta 04</th>
                <td>En la sesión de informes quincenales y mensuales se presentará el monitoreo de redes sociales y medios de comunicación regionales y locales con el fin de valorar </td>
            </tr>
            <tr>
                <th>Plan de Respuesta 05</th>
                <td>_</td>
            </tr>
            <tr>
                <th>Calificación de Riesgo</th>
                <td>25</td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 01</th>
                <td>Se llevan a cabo reuniones de seguimiento. Se diligencia ATL con compromisos actualizados. Se monitorea y realiza seguimiento a los hitos de las áreas de gestión y del proyecto</td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 02</th>
                <td>A la fecha se ha ejecutado en varias ocasiones el plan de acción permitiendo obtener por parte de la UPME prórrogas sucesivas que extienden la FOPO - Fecha Oficial de Puesta en Operación del Proyecto.</td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 03</th>
                <td>La Gerencia del Proyecto y la Dirección de Desarrollo Sostenible llevan a cabo reuniones de alto nivel con la autoridad ambiental con el propósito de obtener retroalimentación del proceso de licenciamiento ambiental.</td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 04</th>
                <td>_</td>
            </tr>
            <tr>
                <th>Seguimiento al plan de respuesta 05</th>
                <td>Se está ejecutando de manera periódica según lo planeado</td>
            </tr>
            <tr>
                <th>Calificación Ponderada</th>
                <td>25</td>
            </tr>
        </table>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn btn-depressed">Aceptar</a>
    </div>
</div>
