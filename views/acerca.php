<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="bg--lightGreen">
    <section class="mw--1440 grid--2cols gap--24 px-2 py-5 align-items-center">
        <div class="text-center">
            <img src="<?php echo __ROOT__; ?>/public/img/home/qSomos.png" class="w-100 mw-400">
        </div>
        <div class="text-white p-2">
            <h4 class="text--sm text--brown fw-bold mb-2">Agrosar</h4>
            <h2 class="text--lg text--darkGreen fw-bold mb-3">Lo que nos hace Agroasar</h2>
            <p class="text--md text--grey mb-5">Somos una empresa dedicada a la comercialización de productos y servicios para la agricultura, contamos con el equipo que necesitas para facilitar tus tareas en el campo.</p>
        </div>
    </section>

    <section class="grid--2cols gap-4 mw--1440 px-2 py-5">
        <div class="card rounded p-4 d-flex flex-md-row justify-start gap--24">
            <img src="<?php echo __ROOT__; ?>/public/img/icon/mision.png" style="width: 48px; height: 48px;">
            <div>
                <h3 class="text--md my-1 font-weight-bold my-md-3">Misión</h3>
                <p class="text--sm text--grey">
                    Comercializar productos y servicios de calidad, cuidando cada detalle y siempre dando soluciones, trabajando siempre con amabilidad y empatía hacia el agricultor, crear relaciones con el cliente para que tenga la confianza de que esta trabajando con personas competentes y honestas.
                </p>
            </div>
        </div>
        <div class="card rounded p-4 d-flex flex-md-row justify-start gap--24">
            <img src="<?php echo __ROOT__; ?>/public/img/icon/vision.png" style="width: 48px; height: 48px;">
            <div>
                <h3 class="text--md my-1 font-weight-bold my-md-3">Visión</h3>
                <p class="text--sm text--grey">
                    Ser líderes destacados en el sector agrícola, brindando de manera eficaz todos los servicios y productos que el agricultor busque, innovando con nuevas tecnologías, para que el cliente se convierta en un agrogestor.
                </p>
            </div>
        </div>
    </section>

    <section class="mw--1440">
        <header class="w--50 text-center">
            <h2 class="text--lg text--darkGreen fw-bold mb-3">¿Por qué comprar con nosotros?</h2>
            <p class="text--sm text--grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus ipsum viverra etiam.</p>
        </header>

        <main class="grid--2cols gap--24 px-2 py-5 align-items-center">
            <div class="text-white p-2">
                <h2 class="text--lg text--darkGreen fw-bold mb-3">¿Qué es lo que Agroasar te puede ofrecer?</h2>
                <p class="text--md text--grey mb-5">
                    Ofrecemos una amplia gama de productos y servicios esenciales para la agricultura, buscamos brindarte esa seguridad de que tus cultivos están en buenas manos, a diferencia del resto nos interesa que te conviertas en un agrogestor.
                </p>
            </div>
            <div class="text-center">
                <img src="<?php echo __ROOT__; ?>/public/img/home/acercaVaca.png" class="w-100 mw-400">
            </div>
        </main>
    </section>

    <?php include 'components/marcas.php'; ?>
    <?php include 'components/bannerContacto.php'; ?>

</main>
<?php include 'partials/footer.php'; ?>