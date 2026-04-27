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

        <!-- Sección Negocios -->
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <h1 class="text-center section-Titulo-h1">
                        <i class="fa-solid fa-handshake"></i> Negocios
                    </h1>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url(); ?>/views/negocios1.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/Negocios/carlos-maldonado-bancoestado.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Presidente Kast designa a Carlos Maldonado como director del BancoEstado
                                    </h5>
                                    <p class="card-text">
                                        El histórico exmilitante y presidente del Partido Radical asumirá su cargo en el consejo directivo entre los años 2026 y
                                        2030.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url(); ?>/views/negocios2.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/Negocios/seguridad-digital.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 id="titulo1" class="card-title">
                                        Ciberfraude al más alto nivel: expertos advierten sobre el auge del "Whaling" en empresas chilenas
                                    </h5>
                                    <p id="parr1" class="card-text">
                                        El uso de Inteligencia Artificial ha potenciado este riesgo, permitiendo incluso el vishing (fraude por voz) mediante la
                                        clonación de voz del ejecutivo.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url(); ?>/views/negocios3.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/Negocios/Aton_1146225.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 id="titulo1" class="card-title">
                                        Canasta básica de alimentos supera los $90.000 por persona: estos fueron los productos que subieron de precio
                                    </h5>
                                    <p id="parr1" class="card-text">
                                        El llamado de los expertos es preferir productos de temporada como las manzanas y los pepinos, que están a un precio más
                                        bajo.
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