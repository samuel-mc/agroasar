<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="bg--lightGreen">
    <section class="bg--darkGreen">
        <div class="mw--1440 grid--2cols gap--24 px-2 py-5 align-items-center">
            <div class="text-white p-2">
                <h2 class="text--lg">¡Potencia tu cosecha con nuestros productos agrícolas de primera calidad!</h2>
                <p class="text--md my-5">Descubre la excelencia en cada cultivo con nuestra amplia gama de fertilizantes, semillas certificadas y soluciones innovadoras para el cuidado de tus cultivos.</p>
                <button class="btn btn--white fw-bold">Contáctanos</button>
            </div>
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/heroImg.png" class="w-100 mw-400">
            </div>
        </div>
    </section>
    <section class="mw--1440 grid--2cols gap--24 px-2 py-5">
        <div class="text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/home/qSomos.png" class="w-100 mw-400">
        </div>
        <div class="text-white p-2">
            <h4 class="text--sm text--brown fw-bold mb-2">Agrosar</h4>
            <h2 class="text--lg text--darkGreen fw-bold mb-3">Quienes somos</h2>
            <p class="text--md text--grey mb-5">Somos una empresa dedicada a la comercialización de productos y servicios para la agricultura, contamos con el equipo que necesitas para facilitar tus tareas en el campo.</p>
            <button class="btn btn--darkGreen fw-bold">Ver más</button>
        </div>
    </section>
    <section class="mw--1440 px-2 py-5">
        <header class="w--50 text-center">
            <h2 class="text--lg text--darkGreen fw-bold mb-3">Categorías de productos a la venta</h2>
            <p class="text--sm text--grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus ipsum viverra etiam.</p>
        </header>
        <main class="grid--3cols gap-4">
            <div class="card rounded p-4">
                <img src="<?php echo __ROOT__; ?>/public/img/home/agroquimicosIcon.png" style="width: 48px; height: 48px;">
                <h3 class="text--md my-3">Agroquimicos</h3>
                <p class="text--sm text--grey">
                    Enim nec rhoncus volutpat nullam eros sapien pharetra.
                </p>
            </div>
            <div class="card rounded p-4">
                <img src="<?php echo __ROOT__; ?>/public/img/home/fertilizantesIcon.png" style="width: 48px; height: 48px;">
                <h3 class="text--md my-3">Fertilizantes</h3>
                <p class="text--sm text--grey">
                    Enim nec rhoncus volutpat nullam eros sapien pharetra.
                </p>
            </div>
            <div class="card rounded p-4">
                <img src="<?php echo __ROOT__; ?>/public/img/home/semillasIcon.png" style="width: 48px; height: 48px;">
                <h3 class="text--md my-3">Semillas</h3>
                <p class="text--sm text--grey">
                    Enim nec rhoncus volutpat nullam eros sapien pharetra.
                </p>
            </div>
        </main>
    </section>
    <?php include 'components/marcas.php'; ?>
</main>
<?php include 'partials/footer.php'; ?>