<?php
// Establecer el idioma por defecto a Español
$idioma = 'es';

// Verificar si el usuario seleccionó un idioma diferente
if (isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en', 'de'])) {
    $idioma = $_GET['lang'];
}

// Textos por idioma
$texto = [
    'es' => [
        'empowering' => 'Empoderando Industrias',
        'home' => 'INICIO',
        'about' => 'Acerca de la Empresa',
        'team' => 'Nuestro Equipo',
        'vision' => 'Nuestra Visión 2030',
        'products' => 'Productos',
        'services' => 'Servicios',
        'contact' => '¡Contáctanos!',
        'company' => 'SteinMetal',
        'mica' => 'Mica Termoeléctrica',
        'cintas' => 'Cintas Dieléctricas',
        'aislamientos' => 'Aislamientos para EV',
        'piezas' => 'Piezas Mecanizadas CNC',
        'fibra' => 'Fibra Cerámica',
        'plato' => 'Plato Vibrador Hornos de Inducción',
        'vibro3' => 'Vibrocompactador Neumático Giratorio 3 pistones',
        'vibro2' => 'Vibrocompactador Neumático Giratorio 2 pistones',
        'manufactura' => 'Manufactura CNC',
        'instalaciones' => 'Instalaciones Electromecánicas',
        'automatizacion' => 'Automatización'
    ],
    'en' => [
        'empowering' => 'Empowering Industries',
        'home' => 'HOME',
        'about' => 'About the Company',
        'team' => 'Our Team',
        'vision' => 'Our Vision 2030',
        'products' => 'Products',
        'services' => 'Services',
        'industries' => 'Industries',
        'contact' => 'Contact Us!',
        'company' => 'SteinMetal',
        'mica' => 'Thermoelectric Mica',
        'cintas' => 'Dielectric Tapes',
        'aislamientos' => 'EV Insulation',
        'piezas' => 'CNC Machined Parts',
        'fibra' => 'Ceramic Fiber',
        'plato' => 'Induction Furnace Vibrating Plate',
        'vibro3' => 'Rotary Pneumatic Rammer 3 Pistons',
        'vibro2' => 'Rotary Pneumatic Rammer 2 Pistons',
        'manufactura' => 'CNC Manufacturing',
        'instalaciones' => 'Electromechanical Installations',
        'automatizacion' => 'Automation'
    ],
    'de' => [
        'empowering' => 'Industrien stärken',
        'home' => 'Zuhause',
        'about' => 'Über das Unternehmen',
        'team' => 'Unser Team',
        'vision' => 'Unsere Vision 2030',
        'products' => 'Produkte',
        'services' => 'Dienstleistungen',
        'industries' => 'Industrien',
        'contact' => 'Kontaktieren Sie uns!',
        'company' => 'SteinMetal',
        'mica' => 'Thermoelektrische Glimmer',
        'cintas' => 'Dielektrische Bänder',
        'aislamientos' => 'EV-Isolierungen',
        'piezas' => 'CNC-bearbeitete Teile',
        'fibra' => 'Keramikfaser',
        'plato' => 'Induktionsofen Vibrationsplatte',
        'vibro3' => 'Rotationsrammer mit 3 Kolben',
        'vibro2' => 'Rotationsrammer mit 2 Kolben',
        'manufactura' => 'CNC-Fertigung',
        'instalaciones' => 'Elektromechanische Installationen',
        'automatizacion' => 'Automatisierung'
    ]
];

$selectedTexts = $texto[$idioma];

// Banderas
$flagImages = [
    'es' => './img/flag-3.png',
    'en' => './img/flag-1.png',
    'de' => './img/flag-4.png'
];

$currentFlag = $flagImages[$idioma];
?>

<!-- BARRA SUPERIOR -->
<section class="bar bar-3 bar--sm bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="bar__module">
                    <span class="h3 font-weight-bold text-white"><?php echo $selectedTexts['empowering']; ?></span>
                </div>
            </div>
            <div class="col-lg-6 text-right text-left-xs text-left-sm text-white">
                <div class="bar__module">
                    <ul class="menu-horizontal list-inline">
                        <li class="dropdown dropdown--absolute">
                            <span class="dropdown__trigger text-white">
                                <img alt="Flag" class="flag" src="<?php echo $currentFlag; ?>" />
                                <?php echo strtoupper($idioma) == 'ES' ? 'ESP' : (strtoupper($idioma) == 'EN' ? 'ENG' : 'GER'); ?>
                            </span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-2 dropdown__content" style="margin-left: -1rem;">
                                            <ul class="menu-vertical text-left list-unstyled" style="padding-left: 0;">
                                                <?php
                                                foreach (['es' => 'ESP', 'en' => 'ENG', 'de' => 'GER'] as $lang => $label) {
                                                    if ($lang !== $idioma) {
                                                        echo '<li><a href="?lang=' . $lang . '"><img alt="Flag" class="flag" src="' . $flagImages[$lang] . '" /> ' . $label . '</a></li>';
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MENÚ -->
<nav id="menu1" class="bar bar--sm bar-1 hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-2 hidden-xs">
                <div class="bar__module">
                    <a href="index.php">
                        <img class="logo logo-dark" alt="logo" src="./img/logo-dark.png" />
                        <img class="logo logo-light" alt="logo" src="./img/logo-light.png" />
                    </a>
                </div>
            </div>
            <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                <div class="bar__module">
                    <ul class="menu-horizontal text-left list-inline">
                        <li class="dropdown"><a href="index.php" class="dropdown-item"><?php echo $selectedTexts['home']; ?></a></li>
                        
                        <li class="dropdown">
                            <span class="dropdown__trigger"><?php echo $selectedTexts['company']; ?></span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="dropdown__content col-lg-4 col-md-5">
                                            <ul class="menu-vertical">
                                                <li><a href="acercaempresa.php" class="dropdown-item"><?php echo $selectedTexts['about']; ?></a></li>
                                                <li><a href="nuestroequipo.php" class="dropdown-item"><?php echo $selectedTexts['team']; ?></a></li>
                                                <li><a href="estructuraideologica.php" class="dropdown-item"><?php echo $selectedTexts['vision']; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <span class="dropdown__trigger"><?php echo $selectedTexts['products']; ?></span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="dropdown__content col-lg-6 col-md-5">
                                            <ul class="menu-vertical">
                                                <li><a href="micas.php" class="dropdown-item"><?php echo $selectedTexts['mica']; ?></a></li>
                                                <li><a href="cintas.php" class="dropdown-item"><?php echo $selectedTexts['cintas']; ?></a></li>
                                                <li><a href="aislamientos.php" class="dropdown-item"><?php echo $selectedTexts['aislamientos']; ?></a></li>
                                                <li><a href="piezas.php" class="dropdown-item"><?php echo $selectedTexts['piezas']; ?></a></li>
                                                <li><a href="fibra.php" class="dropdown-item"><?php echo $selectedTexts['fibra']; ?></a></li>
                                                <li><a href="plato.php" class="dropdown-item"><?php echo $selectedTexts['plato']; ?></a></li>
                                                <li><a href="vibro3.php" class="dropdown-item"><?php echo $selectedTexts['vibro3']; ?></a></li>
                                                <li><a href="vibro2.php" class="dropdown-item"><?php echo $selectedTexts['vibro2']; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <span class="dropdown__trigger"><?php echo $selectedTexts['services']; ?></span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="dropdown__content col-lg-4 col-md-5">
                                            <ul class="menu-vertical">
                                                <li><a href="manufactura.php" class="dropdown-item"><?php echo $selectedTexts['manufactura']; ?></a></li>
                                                <li><a href="instalaciones.php" class="dropdown-item"><?php echo $selectedTexts['instalaciones']; ?></a></li>
                                                <li><a href="automatizacion.php" class="dropdown-item"><?php echo $selectedTexts['automatizacion']; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li><a class="btn btn--sm type--uppercase" href="contacto.php" class="dropdown-item"><?php echo $selectedTexts['contact']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
