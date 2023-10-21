<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="bg--lightGreen">
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
    <?php include 'components/marcas.php'; ?>
    <?php include 'components/bannerContacto.php'; ?>

</main>
<?php include 'partials/footer.php'; ?>