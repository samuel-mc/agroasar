<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="bg--lightGreen">
    <section class="mw--1440 px-2 py-5">
        <header class="w--50 text-center">
            <h2 class="text--lg text--darkGreen fw-bold mb-3">Servicios</h2>
            <p class="text--sm text--grey">Todo lo que busca el agricultor en una empresa</p>
        </header>
        <div class="grid--3cols gap-4">
            <div class="p-lg-4 p-1 d-flex flex-column gap--24">
                <img src="<?php echo __ROOT__; ?>/public/img/servicios/img1.png" class="img-fluid">
                <div>
                    <img src="<?php echo __ROOT__; ?>/public/img/servicios/dron.png" class="img-fluid my-1">
                    <h2 class="text--lg text--darkGreen fw-bold my-2">Fumigación con dron</h2>
                    <p class="m-1 text--md">Lo más nuevo en tecnología agricola a su disposición, actualiza tu metodo de aplicación, ahorra tiempo y dinero.</p>
                </div>
            </div>
            <div class="p-lg-4 p-1 d-flex flex-column gap--24">
                <img src="<?php echo __ROOT__; ?>/public/img/servicios/img2.png" class="img-fluid">
            </div>
            <div class="p-lg-4 p-1 d-flex flex-column gap--24">
                <img src="<?php echo __ROOT__; ?>/public/img/servicios/img3.png" class="img-fluid">
            </div>
        </div>
    </section>
    <section class="mw--1440 px-2 py-5">
        <div>
            <video controls class="img-fluid px-1 px-lg-5">
                <source src="<?php echo __ROOT__; ?>/public/videos/servicios.mp4" type="video/mp4">
                Tu navegador no admite la reproducción de videos.
            </video>
        </div>
    </section>

    <section class="mw--1440 px-2 py-5">
        <header class="w--50 text-center">
            <h2 class="text--lg text--darkGreen fw-bold mb-3">Servicios</h2>
            <p class="text--sm text--grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus ipsum viverra etiam.</p>
        </header>
        <main class="grid--3cols gap-4">
            <div class="p-4">
                <img src="<?php echo __ROOT__; ?>/public/img/home/servicio1.png" style="width: 48px; height: 48px;">
                <h3 class="text--md my-3">Dron fumigador</h3>
                <p class="text--sm text--grey">
                    Lo más nuevo en tecnología agricola a su disposición, actualiza tu metodo de aplicación, ahorra tiempo y dinero.
                </p>
            </div>
            <div class="p-4">
                <img src="<?php echo __ROOT__; ?>/public/img/home/servicio2.png" style="width: 48px; height: 48px;">
                <h3 class="text--md my-3">Asesoría técnica</h3>
                <p class="text--sm text--grey">
                    Nuestros ingenieros están comprometidos con el rendimiento de tus cosechas, si hay algún problema en tus cultivos no dudes en contactarnos
                </p>
            </div>
            <div class="p-4">
                <img src="<?php echo __ROOT__; ?>/public/img/home/servicio3.png" style="width: 48px; height: 48px;">
                <h3 class="text--md my-3">Empacadora</h3>
                <p class="text--sm text--grey">
                    Contáctanos para empacar tus pastos.
                </p>
            </div>
            <div class="p-4">
                <img src="<?php echo __ROOT__; ?>/public/img/home/servicio4.png" style="width: 48px; height: 48px;">
                <h3 class="text--md my-3">Preparación de terreno</h3>
                <p class="text--sm text--grey">
                    Contamos con operadores experimentados para realizar los trabajos de preparación de suelo.
                </p>
            </div>
            <div class="p-4">
                <img src="<?php echo __ROOT__; ?>/public/img/home/servicio5.png" style="width: 48px; height: 48px;">
                <h3 class="text--md my-3">Transporte de mercancía</h3>
                <p class="text--sm text--grey">
                    Tus productos a donde los necesites, también puedes contar con nosotros para trasladar tu mercancía.
                </p>
            </div>
            <div class="p-4">
                <img src="<?php echo __ROOT__; ?>/public/img/home/servicio6.png" style="width: 48px; height: 48px;">
                <h3 class="text--md my-3">Sembradora de presición</h3>
                <p class="text--sm text--grey">
                    Sembradoras de precisión disponibles para ti.
                </p>
            </div>
        </main>
    </section>

    <?php include 'components/bannerContacto.php'; ?>

</main>
<?php include 'partials/footer.php'; ?>