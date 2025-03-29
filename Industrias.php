<?php
// Definir los textos para los distintos idiomas
$texto = [
    'es' => [
        'industries_header' => 'Atendemos industrias de Alto Voltaje en México y LATAM.',
        'industries_title' => 'Industrias',
        'automotriz' => 'Automotriz y EV',
        'fundicion' => 'Fundición de Autopartes y Siderurgia',
        'petroleo' => 'Petróleo y Gas',
        'aeronautica' => 'Aeronáutica',
        'altovoltaje' => 'Alto Voltaje',
        'industria_militar' => 'Industria Militar'
    ],
    'en' => [
        'industries_header' => 'We serve industries in High Voltage in Mexico and LATAM.',
        'industries_title' => 'Industries',
        'automotriz' => 'Automotive and EV',
        'fundicion' => 'Casting of Auto Parts and Steelmaking',
        'petroleo' => 'Oil and Gas',
        'aeronautica' => 'Aeronautics',
        'altovoltaje' => 'High Voltage',
        'industria_militar' => 'Military Industry'
    ],
    'de' => [
        'industries_header' => 'Wir bedienen Industrien in Hochspannung in Mexiko und LATAM.',
        'industries_title' => 'Industrien',
        'automotriz' => 'Automobil- und EV-Industrie',
        'fundicion' => 'Gießen von Autoteilen und Stahlherstellung',
        'petroleo' => 'Öl und Gas',
        'aeronautica' => 'Luft- und Raumfahrt',
        'altovoltaje' => 'Hochspannung',
        'industria_militar' => 'Militärindustrie'
    ]
];

// Asignar los textos correspondientes al idioma seleccionado
$selectedTexts = $texto[$idioma];
?>

<section>
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="display-4 mb-3">
                    <?php echo $selectedTexts['industries_header']; ?>
                    <span class="inline-block typed-text typed-text--cursor text-danger" data-typed-strings="de Fundición y Siderurgia, Automotrices y EV, Militares, Aeronáuticas, Petróleras y Gas, de Alto Voltaje"> de Alto Voltaje</span>
                </h1>
                <h2 class="lead text-muted">en México y LATAM.</h2>
            </div>
        </div>
    </div>
</section>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold text-dark">
                    <?php echo $selectedTexts['industries_title']; ?>
                </h2>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            $industries = [
                ['href' => 'automotriz.php', 'img' => './img/stein-6.jpg', 'label' => $selectedTexts['automotriz']],
                ['href' => 'fundicion.php', 'img' => './img/stein-7.jpg', 'label' => $selectedTexts['fundicion']],
                ['href' => 'petroleo.php', 'img' => './img/stein-8.jpg', 'label' => $selectedTexts['petroleo']],
                ['href' => 'aeronautica.php', 'img' => './img/stein-9.jpg', 'label' => $selectedTexts['aeronautica']],
                ['href' => 'altovoltaje.php', 'img' => './img/stein-10.jpg', 'label' => $selectedTexts['altovoltaje']],
                ['href' => 'industriamilitar.php', 'img' => './img/stein-11.jpg', 'label' => $selectedTexts['industria_militar']],
            ];

            foreach ($industries as $item) {
                echo '
                <div class="col-md-4 col-lg-2 col-sm-6">
                    <a href="' . $item['href'] . '" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 hover-shadow transition rounded-4">
                            <img src="' . $item['img'] . '" class="card-img-top rounded-top-4" alt="Pic">
                            <div class="card-body text-center">
                                <h6 class="text-dark m-0">' . $item['label'] . '</h6>
                            </div>
                        </div>
                    </a>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

