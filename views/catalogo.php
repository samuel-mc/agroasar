<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="bg--lightGreen">
    <section class="mw--1440 px-2 py-5">
        <header class="w--50 text-center">
            <h2 class="text--lg text--darkGreen fw-bold mb-3">Catálogo de productos</h2>
            <p class="text--sm text--grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus ipsum viverra etiam.</p>
        </header>
        <div class="grid--3cols gap-4">

            <div class="p-lg-4 p-1 d-flex flex-column gap--24">
                <img src="<?php echo __ROOT__; ?>/public/img/catalogo/agroquimicos.png" class="img-fluid">
                <div class="text--bold">
                    <h3 class="text--md text--bold my-1 my-md-3">Agroquimicos</h3>
                    <p class="m-1">Insecticida</p>
                    <p class="m-1">Herbicida</p>
                    <p class="m-1">Reguladores de crecimiento</p>
                    <p class="m-1">Coadyuvante</p>
                    <p class="m-1">Adherentes</p>
                </div>
            </div>
            <div class="p-lg-4 p-1 d-flex flex-column gap--24">
                <img src="<?php echo __ROOT__; ?>/public/img/catalogo/fertilizantes.png" class="img-fluid">
                <div class="text--bold">
                    <h3 class="text--md text--bold my-1 my-md-3">Fertilizantes</h3>
                    <p class="m-1">Fertilizantes solubles</p>
                    <p class="m-1">Fertilizantes granulados</p>
                    <p class="m-1">Fertilizante foliar</p>
                </div>
            </div>
            <div class="p-lg-4 p-1 d-flex flex-column gap--24">
                <img src="<?php echo __ROOT__; ?>/public/img/catalogo/semillas.png" class="img-fluid">
                <div class="text--bold">
                    <h3 class="text--md text--bold my-1 my-md-3">Semillas</h3>
                    <p class="m-1">Semilla de arroz Agroasar</p>
                    <p class="m-1">Semilla de maíz</p>
                    <p class="m-1">Semilla de sorgo</p>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include 'partials/footer.php'; ?>