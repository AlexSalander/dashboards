<?php
// Definir los textos para los distintos idiomas
$texto = [
    'es' => [
        'servicios_header' => 'Servicios',
        'automatizacion' => 'Automatización',
        'manufactura' => 'Manufactura CNC',
        'instalaciones' => 'Instalaciones Mecánicas',
        'productos_header' => 'Productos',
        'mica' => 'Mica Termoeléctrica',
        'aislamiento' => 'Aislamiento Eléctrico',
        'piezas_cnc' => 'Piezas Mecanizadas CNC',
        'cintas' => 'Cintas Dieléctricas',
        'fibra' => 'Fibra Cerámica'
    ],
    'en' => [
        'servicios_header' => 'Services',
        'automatizacion' => 'Automation',
        'manufactura' => 'CNC Manufacturing',
        'instalaciones' => 'Mechanical Installations',
        'productos_header' => 'Products',
        'mica' => 'Thermoelectric Mica',
        'aislamiento' => 'Electrical Insulation',
        'piezas_cnc' => 'CNC Machined Parts',
        'cintas' => 'Dielectric Tapes',
        'fibra' => 'Ceramic Fiber'
    ],
    'de' => [
        'servicios_header' => 'Dienstleistungen',
        'automatizacion' => 'Automatisierung',
        'manufactura' => 'CNC-Fertigung',
        'instalaciones' => 'Mechanische Installationen',
        'productos_header' => 'Produkte',
        'mica' => 'Thermoelektrische Mica',
        'aislamiento' => 'Elektrische Isolierung',
        'piezas_cnc' => 'CNC-bearbeitete Teile',
        'cintas' => 'Dielektrische Bänder',
        'fibra' => 'Keramische Faser'
    ]
];

// Asignar los textos correspondientes al idioma seleccionado
$selectedTexts = $texto[$idioma];
?>

<section class="py-5 bg-light">
    <div class="container">
        <!-- Encabezado de Servicios -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold text-dark"><?php echo $selectedTexts['servicios_header']; ?></h2>
            </div>
        </div>
        <!-- Sección de Servicios -->
        <div class="row g-4 justify-content-center">
            <?php
            $servicios = [
                ['href' => 'automatizacion.php', 'img' => './img/stein-15.jpg', 'label' => $selectedTexts['automatizacion']],
                ['href' => 'manufactura.php', 'img' => './img/stein-14.jpg', 'label' => $selectedTexts['manufactura']],
                ['href' => 'instalaciones.php', 'img' => './img/stein-13.jpg', 'label' => $selectedTexts['instalaciones']],
            ];

            foreach ($servicios as $item) {
                echo '
                <div class="col-md-4 col-sm-6">
                    <a href="' . $item['href'] . '" class="text-decoration-none">
                        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                            <img src="' . $item['img'] . '" class="card-img-top" alt="Background">
                            <div class="card-body text-center">
                                <h5 class="card-title text-dark">' . $item['label'] . '</h5>
                            </div>
                        </div>
                    </a>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <!-- Encabezado de Productos -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold text-dark"><?php echo $selectedTexts['productos_header']; ?></h2>
            </div>
        </div>
        <!-- Sección de Productos -->
        <div class="row g-4 justify-content-center">
            <?php
            $productos = [
                ['href' => 'micas.php', 'img' => './img/mica.jpg', 'label' => $selectedTexts['mica']],
                ['href' => 'aislamientos.php', 'img' => './img/automotriz.jpg', 'label' => $selectedTexts['aislamiento']],
                ['href' => 'piezas.php', 'img' => './img/cnc1.jpg', 'label' => $selectedTexts['piezas_cnc']],
                ['href' => 'cintas.php', 'img' => './img/cinta.jpg', 'label' => $selectedTexts['cintas']],
                ['href' => 'fibras.php', 'img' => './img/fibraC.jpg', 'label' => $selectedTexts['fibra']],
            ];

            foreach ($productos as $item) {
                echo '
                <div class="col-md-4 col-sm-6">
                    <a href="' . $item['href'] . '" class="text-decoration-none">
                        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                            <img src="' . $item['img'] . '" class="card-img-top" alt="Pic">
                            <div class="card-body text-center">
                                <h5 class="card-title text-dark mb-0">' . $item['label'] . '</h5>
                            </div>
                        </div>
                    </a>
                </div>';
            }
            ?>
        </div>
    </div>
</section>
