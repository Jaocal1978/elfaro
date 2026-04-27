<?php 
    require_once '../helpers/helpers.php';
    require_once 'Template/header.php';
?>


<!-- vista/suscripcion.php -->
<div class="container my-5">
    <h2 class="text-center pb-4">
        <i class="fa-solid fa-file-pen"></i> Formulario de Suscripción
    </h2>
    <form id="formSuscripcion" method="POST" class="p-4 border rounded bg-light">
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
                <button type="submit" class="btn btn-success w-100 w-md-auto w-lg-auto">
                    <i class="fa-solid fa-download"></i> Guardar
                </button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-lg-start justify-content-sm-center">
                <a href="" id="btnSalir" name="btnSalir" type="button" class="btn btn-danger w-100 w-md-auto w-lg-auto">
                    <i class="fa-solid fa-circle-xmark"></i> Salir
                </a>
            </div>
        </div>
    </form>
</div>

<script src="<?php echo media(); ?>/js/suscripcion.js"></script>

<?php require_once 'Template/footer.php'; ?>