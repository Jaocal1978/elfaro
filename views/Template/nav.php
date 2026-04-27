
<!-- Menu de navegación -->
        <nav class="navbar navbar-expand-lg " style="background-color: brown;" data-bs-theme="dark">
            <div class="container-fluid">
                <!-- Logo y nombre del sitio -->
                <a class="navbar-brand mx-auto d-flex align-items-center" href="#">
                    <img src="<?php echo media(); ?>/img/logo.png" alt="Logo El Faro" width="70" height="70" class="me-2">
                    <h4 class="titulo-nav-footer"><span>El Faro</span></h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>">
                                <i class="fa-solid fa-house-chimney"></i> Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>/views/deportes.php">
                                <i class="fa-solid fa-person-walking"></i> Deportes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>/views/negocios.php">
                                <i class="fa-solid fa-handshake"></i> Negocios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>/views/actualidad.php">
                                <i class="fa-solid fa-newspaper"></i> Actualidad
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>/views/tiempo.php">
                                <i class="fa-solid fa-cloud-sun"></i> Tiempo
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/views/contacto.php">
                                <i class="fa-solid fa-address-book"></i> Contacto
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/views/mensajes.php">
                                <i class="fa-solid fa-message"></i> Mensajes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/views/usuarios.php">
                                <i class="fa-solid fa-users"></i> Usuarios
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>