<?php
    require_once '../helpers/helpers.php';
    require_once 'Template/header.php';
?>

<main>
    <section>
        <h1 class="mb-4 mt-4 text-center"><i class="fa-solid fa-message"></i> Mensajes</h1>
        <div class="container mt-4">
            <div id="cards" class="row">
                   
            </div>
        </div>
    </section>
</main>

<script  src="<?php echo media();?>/js/mensaje.js"></script>

<?php require_once 'Template/footer.php'; ?>