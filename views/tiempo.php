<?php 
    require_once '../helpers/helpers.php';
    require_once 'Template/header.php';
?>

    <main>
        <!--section de reloj -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="reloj text-center section-SubTitulo-h4" id="reloj">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección Actualidad -->
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <h1 class="text-center section-Titulo-h1">
                        <i class="fa-solid fa-cloud-sun"></i> Tiempo
                    </h1>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url(); ?>/views/tiempo1.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media();?>/img/Tiempo/LLUVIA-EL-NINO.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Viene El Niño a Chile.
                                    </h5>
                                    <p class="card-text">
                                        "Probablemente tengamos mucha lluvia en junio, julio y agosto".
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url(); ?>/views/tiempo2.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media();?>/img/Tiempo/Hasta_150_mm_Sistema_frontal_dejara_intensas.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 id="titulo1" class="card-title">
                                        Posibles inundaciones hasta salidas de cauces de ríos: ¿Fenómeno de El Niño vendrá con "Godzilla" a Chile?
                                    </h5>
                                    <p id="parr1" class="card-text">
                                        Experto advirtió que “Godzilla” no está en la naturaleza de El Niño, sino en la planificación urbana que tienen
                                        algunas ciudades y territorios.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url(); ?>/views/tiempo3.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media();?>/img/Tiempo/advertencia-agrometeorologica-calor.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 id="titulo1" class="card-title">
                                        Hasta 34°: emiten advertencia para la RM, O'Higgins y Maule por altas temperaturas
                                    </h5>
                                    <p id="parr1" class="card-text">
                                        El aumento de las máximas se percibirá desde este lunes, según informó la Dirección Meteorológica de Chile.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container pt-4">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center section-Titulo-h1">Esto está pasando</h2>
                        <div class="bg-danger text-white py-2">
                            <div class="container overflow-hidden">
                                <div class="ticker">
                                    <p class="mb-0 section-noticias-p">
                                        🔴 Última hora: Se anuncia nuevo acuerdo comercial... &nbsp;&nbsp;
                                        ⚽ Deportes: El equipo local gana el clásico... &nbsp;&nbsp;
                                        🌦️ Tiempo: Se esperan lluvias en Antofagasta... &nbsp;&nbsp;
                                        💼 Negocios: Nueva inversión minera fortalece la economía local... &nbsp;&nbsp;
                                        🎭 Cultura: Festival de teatro inicia este fin de semana... &nbsp;&nbsp;
                                        🚦 Tránsito: Congestión en la avenida principal por obras viales... &nbsp;&nbsp;
                                        🌍 Internacional: Cumbre global sobre cambio climático comienza hoy...
                                        &nbsp;&nbsp;
                                        📈 Economía: Bolsa de valores cierra con alza histórica...
                                    </p>
                                    <p class="mb-0 section-noticias-p">
                                        🔴 Última hora: Se anuncia nuevo acuerdo comercial... &nbsp;&nbsp;
                                        ⚽ Deportes: El equipo local gana el clásico... &nbsp;&nbsp;
                                        🌦️ Tiempo: Se esperan lluvias en Antofagasta... &nbsp;&nbsp;
                                        💼 Negocios: Nueva inversión minera fortalece la economía local... &nbsp;&nbsp;
                                        🎭 Cultura: Festival de teatro inicia este fin de semana... &nbsp;&nbsp;
                                        🚦 Tránsito: Congestión en la avenida principal por obras viales... &nbsp;&nbsp;
                                        🌍 Internacional: Cumbre global sobre cambio climático comienza hoy...
                                        &nbsp;&nbsp;
                                        📈 Economía: Bolsa de valores cierra con alza histórica...
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>


<script src="<?php echo media(); ?>/js/contacto.js"></script>

<?php require_once 'Template/footer.php'; ?>