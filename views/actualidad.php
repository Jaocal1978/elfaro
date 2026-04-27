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
                        <i class="fa-solid fa-newspaper"></i> Actualidad
                    </h1>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url();?>/views/actualidad1.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/actualidad/Hasta_16_en_el_sur_Esto_subirian_las_cuentas_de.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        Hasta 16% en el sur: Esto subirían las cuentas de la luz a partir de julio
                                    </h5>
                                    <p class="card-text">
                                        La SEC postergó el alza para julio de 2026, pero proyecciones anticipan fuertes aumentos, especialmente en el sur del
                                        país.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url();?>/views/actualidad2.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/actualidad/Comienza_la_semana_de_42_horas_asi_se_aplicara.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 id="titulo1" class="card-title">
                                        Ley 40 Horas: así se aplicará la reducción a 42 horas y qué pasa con el artículo 22
                                    </h5>
                                    <p id="parr1" class="card-text">
                                        Desde el 26 de abril entra en vigencia la reducción de jornada en Chile. La Dirección del Trabajo fijó reglas clave
                                        sobre cómo aplicar las 42 horas y redefinió el uso del artículo 22.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url();?>/views/actualidad3.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/actualidad/Foto_comunicado_Creditos_hipotecarios_1.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 id="titulo1" class="card-title">
                                        Fue de 14%: caída en entrega de créditos hipotecarios en 2025 respondería a cambios en estrategias de compra
                                    </h5>
                                    <p id="parr1" class="card-text">
                                        “El acceso a la vivienda siempre ha estado marcado por dos barreras: juntar el pie y poder sostener el dividendo mes a
                                        mes. En los últimos cinco años, ambas se han vuelto más exigentes", sostienen.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url();?>/views/actualidad4.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/actualidad/Iran_anuncia_reapertura_del_estrecho_de_Ormuz.webp" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 id="titulo1" class="card-title">
                                        Irán anuncia reapertura del estrecho de Ormuz en medio de frágil tregua.
                                    </h5>
                                    <p id="parr1" class="card-text">
                                        La medida permite el paso de buques comerciales bajo control iraní y provoca una fuerte caída en el precio del petróleo.
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