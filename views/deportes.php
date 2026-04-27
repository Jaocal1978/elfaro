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

        <!-- Sección Deportes -->
        <section class="pt-2">
            <div class="container">
                <div class="row">
                    <h1 class="text-center section-Titulo-h1">
                        <i class="fa-solid fa-person-walking"></i> Deportes
                    </h1>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url(); ?>/views/deportes1.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/Deportes/Policella.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Rechazó a Chile, es goleador de Argentina y le dio la clasificación a la final del Sudamericano Sub 17</h5>
                                    <p class="card-text">
                                        Juan Cruz Policella marcó un gol y dio una asistencia en el triunfo ante Ecuador, y es el máximo anotador de la
                                        albiceleste.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url();?>/views/deportes2.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/Deportes/penal.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 id="titulo1" class="card-title">"Me voy, te dejo relatando a vos": Piero Maza protagoniza escándalo en Copa Libertadores tras cobro de penal
                                    </h5>
                                    <p id="parr1" class="card-text">
                                        El árbitro chileno causó polémica por su decisión en el duelo entre Palmeiras y Sporting Cristal.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url(); ?>/views/deportes3.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/Deportes/LAROJAsub-17.webp"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 id="titulo1" class="card-title">
                                        Solo falta uno: Estos son todos los clasificados de Conmebol al Mundial Sub 17
                                    </h5>
                                    <p id="parr1" class="card-text">
                                        El Sudamericano Sub 17 comienza a llegar a su fin y ya se conocen seis de los clasificados a la cita planetaria. El
                                        último cupo saldrá de una "finalísima" entre Bolivia y Venezuela.
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

    <script src="<?php echo media(); ?>/js/index.js"></script>

<?php require_once 'Template/footer.php'; ?>