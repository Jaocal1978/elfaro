<?php 
    require_once '../helpers/helpers.php';
    require_once 'Template/header.php';
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col mb-3 mt-3">
                <a href="<?php echo base_url(); ?>/views/suscripcion.php" class="btn btn-success">
                    <i class="fa-solid fa-circle-plus"></i> Nuevo
                </a>
            
                <div class="accordion mt-4" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa-solid fa-users"></i>  Usuarios
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table id="tableUsuarios" class="table text-center">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Rut</th>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbodyUser">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Modal Ver Usuario-->
<div class="modal fade" id="verUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ver-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="far fa-eye"></i> Ver Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="modalBody" class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form id="formModalUsuario">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer ver-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                    <i class="fa-solid fa-xmark"></i> Cerrar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar Usuario-->
<div class="modal fade" id="editarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header editar-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i> Editar Usuario
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="modalBody" class="modal-body">
                <div class="container">
                    <div class="row">
                        <form id="formActualizar" name="formActualizar" method="POST" class="p-4 border rounded bg-light">
                            <!-- RUT chileno -->
                            <div class="mb-3">
                                <label for="rut" class="form-label">RUT</label>
                                <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese su RUT" oninput="rutconpuntos()">
                            </div>

                            <!-- Nombre -->
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre">
                            </div>

                            <!-- Apellidos -->
                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese sus apellidos">
                            </div>
    
                            <!-- Correo electrónico -->
                            <div class="    mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su Email">
                            </div>

                            <!-- Teléfono -->
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su teléfono de 9 digitos: 912345678" oninput="formatoTelefono()">
                            </div>

                            <!-- Dirección -->
                            <div class="mb-3">
                                <label for="direccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese Dirección">
                            </div>

                            <!-- Ciudad -->
                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ingrese Ciudad">
                            </div>

                            <!-- Región -->
                            <div class="mb-3">
                                <label for="region" class="form-label">Región</label>
                                <select class="form-select" id="region" name="region">
                                    <option value="">Seleccione región...</option>
                                    <option value="Arica y Parinacota">Arica y Parinacota</option>
                                    <option value="Tarapaca">Tarapaca</option>
                                    <option value="Antofagasta">Antofagasta</option>
                                    <option value="Atacama">Atacama</option>
                                    <option value="Coquimbo">Coquimbo</option>
                                    <option value="Valparaíso">Valparaíso</option>
                                    <option value="Metropolitana">Metropolitana</option>
                                    <option value="O'Higgins">O'Higgins</option>
                                    <option value="Maule">Maule</option>
                                    <option value="Ñuble">Ñuble</option>
                                    <option value="Biobío">Biobío</option>
                                    <option value="Araucanía">Araucanía</option>
                                    <option value="Los Ríos">Los Ríos</option>
                                    <option value="Los Lagos">Los Lagos</option>
                                    <option value="Aysén">Aysén</option>
                                    <option value="Magallanes">Magallanes</option>
                                </select>
                            </div>

                            <!-- Plan de suscripción -->
                            <div class="mb-3">
                                <label for="plan" class="form-label">Plan de suscripción</label>
                                <select class="form-select" id="plan" name="plan">
                                    <option value="gratis">Gratis</option>
                                    <option value="mensual">Mensual</option>
                                    <option value="anual">Anual</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-lg-end justify-content-sm-center mb-2 mb-lg-0">
                                    <button type="submit" class="btn btn-primary w-100 w-md-auto w-lg-auto">
                                        <i class="fa-solid fa-pen"></i> Actualizar
                                    </button>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-lg-start justify-content-sm-center">
                                    <a href="" id="btnSalir" name="btnSalir" type="button" data-bs-dismiss="modal" class="btn btn-danger w-100 w-md-auto w-lg-auto">
                                        <i class="fa-solid fa-circle-xmark"></i> Salir
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer editar-footer">

            </div>
        </div>
    </div>
</div>


<script src="<?php echo media(); ?>/js/usuarios.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/2.3.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.3.7/js/dataTables.bootstrap5.js"></script>

<!-- Opcional: Botones de DataTables -->
<script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>

<?php require_once 'Template/footer.php'; ?>