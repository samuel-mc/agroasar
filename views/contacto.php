<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<main>
    <section class="mw--1440">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1584.5904062849027!2d-102.05255237426142!3d19.159688695778886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x84320192ad0f1309%3A0xe016863aed1d6c3f!2sAGROASAR!5e0!3m2!1ses-419!2smx!4v1698116224419!5m2!1ses-419!2smx" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
    </section>
    <section class="mw--1440 row">
        <div class="col-12 col-md-7 p-2 p-md-5">
            <header>
                <h2 class="text--lg text--darkGreen">Contáctanos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit nulla adipiscing tincidunt interdum tellus du.</p>
            </header>
            <form class="bg--lightGrey p-3 p-md-5">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex flex-column mb-3 input--white">
                        <label for="nombre">Nombre completo</label>
                        <input type="text" id="nombre" name="nombre">
                    </div>
                    <div class="col-12 col-md-6 d-flex flex-column mb-3 input--white">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex flex-column mb-3 input--white">
                        <label for="telefono">Teléfono</label>
                        <input type="text" id="telefono" name="telefono">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 d-flex flex-column mb-3 input--white">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" cols="30" rows="10" style="resize: none;"></textarea>
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col-12 d-flex justify-content-start">
                        <button class="btn btn--darkGreen">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-5 bg--darkGreen text-white p-3 p-md-4 d-flex flex-column justify-content-between">
            <div></div>
            <div>
                <h2 class="text--lg mb-5">Detalle de contacto</h2>
                <div class="mb-3">
                    <h3 class="text--sm">Nuestra ubicación</h3>
                    <p class="text--lg">Carretera al Capire #129, Colonia Emiliano Zapata</p>
                </div>
                <div class="mb-3">
                    <h3 class="text--sm">Llámanos</h3>
                    <p class="text--lg">422 52 1 52 28</p>
                </div>
                <div class="mb-3">
                    <h3 class="text--sm">Envíanos un correo</h3>
                    <p class="text--lg">fertilizantes-andalla@hotmail.com</p>
                </div>
            </div>
            <div class="text-end">
                <a href="">
                    <img src="<?php echo __ROOT__; ?>/public/img/contacto/whatsapp.png">
                </a>
                <a href="">
                    <img src="<?php echo __ROOT__; ?>/public/img/contacto/phone.png">
                </a>
            </div>
        </div>
    </section>
</main>

<?php include 'partials/footer.php'; ?>