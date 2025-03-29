<?php
// Definir los textos para los distintos idiomas
$texto = [
    'es' => [
        'productos' => 'Productos',
        'industrias' => 'Industrias',
        'servicios' => 'Servicios',
        'steinmetal' => 'SteinMetal',
        'empowering' => 'Empoderando Industrias',
        'privacy_policy' => 'Política de privacidad',
        'acerca_empresa' => 'Acerca de la empresa',
        'nuestro_equipo' => 'Nuestro equipo',
        'nuestra_vision' => 'Nuestra Visión 2030',
        'mica_termoelectrica' => 'Mica Termoeléctrica',
        'aislamiento_electrico' => 'Aislamiento Eléctrico',
        'piezas_impresas_3d' => 'Piezas Impresas en 3D',
        'piezas_mecanizadas_cnc' => 'Piezas Mecanizadas CNC',
        'cintas_dieletricas' => 'Cintas Dieléctricas',
        'fibra_ceramica' => 'Fibra Cerámica',
        'plato_vibrador_hornos' => 'Plato Vibrador Para Hornos',
        'vibrocompactador_3pistones' => 'Vibrocompactador 3 pistones',
        'vibrocompactador_2pistones' => 'Vibrocompactador 2 pistones',
        'automotriz_ev' => 'Automotriz & EV',
        'fundicion_siderurgia' => 'Fundición y Siderurgia',
        'petroleo_gas' => 'Petróleo y Gas',
        'aeronautica' => 'Aeronáutica',
        'alto_voltaje' => 'Alto Voltaje',
        'industria_militar' => 'Industria Militar',
        'manufactura_robotizada_cnc' => 'Manufactura Robotizada y CNC',
        'automatizacion' => 'Automatización',
        'soldadura_montaje' => 'Soldadura y Montaje'
    ],
    'en' => [
        'productos' => 'Products',
        'industrias' => 'Industries',
        'servicios' => 'Services',
        'steinmetal' => 'SteinMetal',
        'empowering' => 'Empowering Industries',
        'privacy_policy' => 'Privacy Policy',
        'acerca_empresa' => 'About the Company',
        'nuestro_equipo' => 'Our Team',
        'nuestra_vision' => 'Our Vision 2030',
        'mica_termoelectrica' => 'Thermoelectric Mica',
        'aislamiento_electrico' => 'Electrical Insulation',
        'piezas_impresas_3d' => '3D Printed Parts',
        'piezas_mecanizadas_cnc' => 'CNC Machined Parts',
        'cintas_dieletricas' => 'Dielectric Tapes',
        'fibra_ceramica' => 'Ceramic Fiber',
        'plato_vibrador_hornos' => 'Vibrator Plate for Ovens',
        'vibrocompactador_3pistones' => '3 Pistons Vibrocompactor',
        'vibrocompactador_2pistones' => '2 Pistons Vibrocompactor',
        'automotriz_ev' => 'Automotive & EV',
        'fundicion_siderurgia' => 'Casting and Steelmaking',
        'petroleo_gas' => 'Oil and Gas',
        'aeronautica' => 'Aeronautics',
        'alto_voltaje' => 'High Voltage',
        'industria_militar' => 'Military Industry',
        'manufactura_robotizada_cnc' => 'Robotic and CNC Manufacturing',
        'automatizacion' => 'Automation',
        'soldadura_montaje' => 'Welding and Assembly'
    ],
    'de' => [
        'productos' => 'Produkte',
        'industrias' => 'Industrien',
        'servicios' => 'Dienstleistungen',
        'steinmetal' => 'SteinMetal',
        'empowering' => 'Industrien stärken',
        'privacy_policy' => 'Datenschutzrichtlinie',
        'acerca_empresa' => 'Über das Unternehmen',
        'nuestro_equipo' => 'Unser Team',
        'nuestra_vision' => 'Unsere Vision 2030',
        'mica_termoelectrica' => 'Thermoelektrische Mica',
        'aislamiento_electrico' => 'Elektrische Isolierung',
        'piezas_impresas_3d' => '3D-gedruckte Teile',
        'piezas_mecanizadas_cnc' => 'CNC-bearbeitete Teile',
        'cintas_dieletricas' => 'Dielektrische Bänder',
        'fibra_ceramica' => 'Keramikfaser',
        'plato_vibrador_hornos' => 'Vibrationsplatte für Öfen',
        'vibrocompactador_3pistones' => '3 Kolben Vibrokompaktor',
        'vibrocompactador_2pistones' => '2 Kolben Vibrokompaktor',
        'automotriz_ev' => 'Automobil & EV',
        'fundicion_siderurgia' => 'Gießen und Stahlherstellung',
        'petroleo_gas' => 'Öl und Gas',
        'aeronautica' => 'Luft- und Raumfahrt',
        'alto_voltaje' => 'Hochspannung',
        'industria_militar' => 'Militärindustrie',
        'manufactura_robotizada_cnc' => 'Roboter- und CNC-Fertigung',
        'automatizacion' => 'Automatisierung',
        'soldadura_montaje' => 'Schweißen und Montage'
    ]
];

// Asignar los textos correspondientes al idioma seleccionado
$selectedTexts = $texto[$idioma];
?>

<footer class="footer-3 text-center-xs space--xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img alt="Image" class="logo" src="./img/steinmetal.webp"/>
                <ul class="list-inline list--hover">
                    <li class="list-inline-item">
                        <a href="mailto:sales@steinmetal.com">
                            <span style="font-size: 1.25rem; margin-top: 0; margin-bottom: .5rem; font-weight: 500; line-height: 1.2;">sales@steinmetal.com</span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://wa.me/+524427870612">
                            <span style="font-size: 1.25rem; margin-top: 0; margin-bottom: .5rem; font-weight: 500; line-height: 1.2;">WhatsApp</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" style="padding-top: 60px; padding-bottom: 20px;">
            <div class="col-md-6 col-lg-4 col-6">
                <h6 class="type--uppercase"><?php echo $selectedTexts['productos']; ?></h6>
                <ul class="list--hover pl-0">
                    <li><a href="micas.php"><?php echo $selectedTexts['mica_termoelectrica']; ?></a></li>
                    <li><a href="aislamientos.php"><?php echo $selectedTexts['aislamiento_electrico']; ?></a></li>
                    <li><a href="#"><?php echo $selectedTexts['piezas_impresas_3d']; ?></a></li>
                    <li><a href="piezas.php"><?php echo $selectedTexts['piezas_mecanizadas_cnc']; ?></a></li>
                    <li><a href="cintas.php"><?php echo $selectedTexts['cintas_dieletricas']; ?></a></li>
                    <li><a href="fibras.php"><?php echo $selectedTexts['fibra_ceramica']; ?></a></li>
                    <li><a href="platoVibrador.php"><?php echo $selectedTexts['plato_vibrador_hornos']; ?></a></li>
                    <li><a href="vibrocompactador3pistones.php"><?php echo $selectedTexts['vibrocompactador_3pistones']; ?></a></li>
                    <li><a href="vibrocompactador2pistones.php"><?php echo $selectedTexts['vibrocompactador_2pistones']; ?></a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 col-6">
                <h6 class="type--uppercase"><?php echo $selectedTexts['industrias']; ?></h6>
                <ul class="list--hover pl-0">
                    <li><a href="automotriz.php"><?php echo $selectedTexts['automotriz_ev']; ?></a></li>
                    <li><a href="fundicion.php"><?php echo $selectedTexts['fundicion_siderurgia']; ?></a></li>
                    <li><a href="petroleo.php"><?php echo $selectedTexts['petroleo_gas']; ?></a></li>
                    <li><a href="aeronautica.php"><?php echo $selectedTexts['aeronautica']; ?></a></li>
                    <li><a href="altovoltaje.php"><?php echo $selectedTexts['alto_voltaje']; ?></a></li>
                    <li><a href="industriamilitar.php"><?php echo $selectedTexts['industria_militar']; ?></a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 col-6">
                <h6 class="type--uppercase"><?php echo $selectedTexts['servicios']; ?></h6>
                <ul class="list--hover pl-0">
                    <li><a href="manufactura.php"><?php echo $selectedTexts['manufactura_robotizada_cnc']; ?></a></li>
                    <li><a href="automatizacion.php"><?php echo $selectedTexts['automatizacion']; ?></a></li>
                    <li><a href="instalaciones.php"><?php echo $selectedTexts['soldadura_montaje']; ?></a></li>
                </ul>
                <h6 class="type--uppercase" style="margin-bottom: 0;"><?php echo $selectedTexts['steinmetal']; ?></h6>
                <ul class="list--hover pl-0">
                    <li><a href="acercaempresa.php"><?php echo $selectedTexts['acerca_empresa']; ?></a></li>
                    <li><a href="nuestroequipo.php"><?php echo $selectedTexts['nuestro_equipo']; ?></a></li>
                    <li><a href="estructuraideologica.php"><?php echo $selectedTexts['nuestra_vision']; ?></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="politicas.php"><?php echo $selectedTexts['privacy_policy']; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
