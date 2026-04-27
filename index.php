
<?php 
   
    require_once("helpers/helpers.php");
    include 'views/Template/header.php';

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

        <!-- Sección de carrusel -->
        <section>
            <div class="container border-bottom border-black border-2 d-none d-sm-block  d-xs-block">
                <div class="row">
                    <div class="col">
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="<?php echo base_url();?>/views/tiempo1.php">
                                        <img src="<?php echo media(); ?>/img/Tiempo/LLUVIA-EL-NINO.webp" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Viene El Niño a Chile.</h3>
                                            <p>"Probablemente tengamos mucha lluvia en junio, julio y agosto".</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="<?php echo base_url();?>/views/actualidad4.php">
                                        <img src="<?php echo media(); ?>/img/actualidad/Iran_anuncia_reapertura_del_estrecho_de_Ormuz.webp" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Irán anuncia reapertura del estrecho de Ormuz en medio de frágil tregua.</h3>
                                            <p>La medida permite el paso de buques comerciales bajo control iraní y provoca una fuerte caída en el precio del
                                                petróleo.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="carousel-item">|
                                    <a href="<?php echo base_url();?>/views/tiempo3.php">
                                        <img src="<?php echo media(); ?>/img/Tiempo/Hasta_150_mm_Sistema_frontal_dejara_intensas.webp" class="d-block w-100" alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Posibles inundaciones hasta salidas de cauces de ríos: ¿Fenómeno de El Niño vendrá con "Godzilla" a Chile?</h3>
                                            <p>
                                                Experto advirtió que “Godzilla” no está en la naturaleza de El Niño, sino en la planificación urbana que tienen
                                                algunas
                                                ciudades y territorios.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Sección principal con noticias generales y multimedia solo en dispositivos móviles -->
        <section class="noticiasGenerales pt-2">
            <div class="container">
                <div class="row">
                    <h1 class="text-center section-Titulo-h1">Ultimas Noticias</h1>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url(); ?>/views/tiempo1.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/Tiempo/LLUVIA-EL-NINO.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Viene El Niño a Chile.</h5>
                                    <p class="card-text">
                                        "Probablemente tengamos mucha lluvia en junio, julio y agosto".
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url(); ?>/views/actualidad4.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/actualidad/Iran_anuncia_reapertura_del_estrecho_de_Ormuz.webp" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 id="titulo1" class="card-title">Irán anuncia reapertura del estrecho de Ormuz en medio de frágil tregua.
                                    </h5>
                                    <p id="parr1" class="card-text">
                                        La medida permite el paso de buques comerciales bajo control iraní y provoca una fuerte caída en el precio
                                        del
                                        petróleo.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <a href="<?php echo base_url(); ?>/views/tiempo3.php">
                            <div class="card mb-5 animate__animated animate__fadeInUp">
                                <img src="<?php echo media(); ?>/img/Tiempo/Hasta_150_mm_Sistema_frontal_dejara_intensas.webp" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 id="titulo1" class="card-title">Posibles inundaciones hasta salidas de cauces de ríos: ¿Fenómeno de El Niño vendrá con "Godzilla" a Chile?
                                    </h5>
                                    <p id="parr1" class="card-text">
                                        Experto advirtió que “Godzilla” no está en la naturaleza de El Niño, sino en la planificación urbana que tienen
                                        algunas
                                        ciudades y territorios.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de multimedia -->
        <section class="multimedia">
            <div class="container pt-3">
                <div class="row">
                    <h1 class="text-center section-Titulo-h1">Multimedia</h1>
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="container my-4">
                            <h4 class="text-center section-SubTitulo-h4">Aprede a programar</h4>
                            <div class="ratio ratio-16x9">
                                <iframe width="600" height="350" src="https://www.youtube.com/embed/tEwLE3WmraA" title="Video de noticia"
                                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="container my-4">
                            <h4 class="text-center section-SubTitulo-h4">Noticias en Vivo</h4>
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/2wZ47eFQ_J8" title="Noticias en vivo" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <h4 class="text-center section-SubTitulo-h4">Intro de Noticias</h4>
                        <audio controls controls autoplay class="w-100">
                            <source src="<?php echo media(); ?>/audio/artmylife-daily-news-theme-477171.mp3"></iframe>" type="audio/mpeg">
                        </audio>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container pt-4">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center section-Titulo-h1">Esto está pasando</h1>
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
                                        🌍 Internacional: Cumbre global sobre cambio climático comienza hoy... &nbsp;&nbsp;
                                        📈 Economía: Bolsa de valores cierra con alza histórica...                                     
                                    </p>
                                    <p class="mb-0 section-noticias-p">
                                        🔴 Última hora: Se anuncia nuevo acuerdo comercial... &nbsp;&nbsp;
                                        ⚽ Deportes: El equipo local gana el clásico... &nbsp;&nbsp;
                                        🌦️ Tiempo: Se esperan lluvias en Antofagasta... &nbsp;&nbsp;
                                        💼 Negocios: Nueva inversión minera fortalece la economía local... &nbsp;&nbsp;
                                        🎭 Cultura: Festival de teatro inicia este fin de semana... &nbsp;&nbsp;
                                        🚦 Tránsito: Congestión en la avenida principal por obras viales... &nbsp;&nbsp;
                                        🌍 Internacional: Cumbre global sobre cambio climático comienza hoy... &nbsp;&nbsp;
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

<?php 
    include 'views/Template/footer.php';
?>