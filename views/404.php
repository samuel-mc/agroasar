<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <section class="mw--1440 text-center p-2">
        <header class="w--50">
            <h2 class="text--lg text--darkGreen fw-bold mb-3">Página no encontrada</h2>
            <p class="text--sm text--grey">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
        </header>
        <img src="<?php echo __ROOT__; ?>/public/img/404.png" class="img-fluid my-1">
        <div class="py-4">
            <a href="<?php echo __ROOT__; ?>" class="btn btn--darkGreen fw-bold">Regresa al inicio</a>
        </div>
        <div class="py-4">
            <h2 class="text--lg text--darkGreen fw-bold mb-3">No lo pienses más ponte en contacto con nosotros</h2>
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--brown fw-bold">Empezar</a>
        </div>

    </section>
</main>

<?php include 'partials/footer.php'; ?>