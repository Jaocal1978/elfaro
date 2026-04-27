<?php 
    require_once '../helpers/helpers.php';
    require_once 'Template/header.php';
?>

    <main>
        <section>
            <div class="container foot-Subtitulo">
                <div class="row">
                    <div class="col">
                        <div class="accordion mt-4 p-2" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="fa-solid fa-id-badge"></i> Contacto</span>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <form class="p-4" id="formContacto">
                                                    <div class="mb-3">
                                                        <label for="rut" class="form-label">RUT:</label>
                                                        <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingresa tu RUT" value="">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="nombre" class="form-label">Nombre:</label>
                                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" value="">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">Email:</label>
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="mensaje" class="form-label">Mensaje:</label>
                                                        <textarea class="form-control" id="mensaje" name="mensaje" rows="3" placeholder="Escribe tu mensaje aquí"></textarea>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-lg-end justify-content-sm-center mb-2 mb-lg-0">
                                                            <button type="submit" class="btn btn-primary w-100 w-md-auto w-lg-auto">
                                                                <i class="fa-solid fa-arrow-right-from-bracket"></i> Enviar mensaje
                                                            </button>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-lg-start justify-content-sm-center">
                                                            <a href="" id="btnCancelar" name="btnCancelar" type="button" class="btn btn-danger w-100 w-md-auto w-lg-auto">
                                                                <i class="fa-solid fa-circle-xmark"></i> Cancelar Mensaje
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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