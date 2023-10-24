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

    <section class="mw--1440 px-2 py-5">
        <header class="w--50 text-center">
            <h2 class="text--lg text--darkGreen fw-bold mb-3">Ganadería</h2>
            <p class="text--sm text--grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus ipsum viverra etiam.</p>
        </header>
        <main>
            <img src="<?php echo __ROOT__; ?>/public/img/home/ganaderia.png" class="w-100">
        </main>
    </section>

    <?php include 'components/bannerContacto.php'; ?>

    <section class="mw--1440 px-2 py-5">
        <header class="w--50 text-center">
            <h2 class="text--lg text--darkGreen fw-bold mb-3">¿Tienes alguna duda?</h2>
            <p class="text--sm text--grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus ipsum viverra etiam.</p>
        </header>
        <main class="w--50">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim lorem hac a ultricies. Id ornare turpis vulputate enim sed magna sit. A id cursus dolor urna. Aliquam diam integer vitae eget.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim lorem hac a ultricies. Id ornare turpis vulputate enim sed magna sit. A id cursus dolor urna. Aliquam diam integer vitae eget.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim lorem hac a ultricies. Id ornare turpis vulputate enim sed magna sit. A id cursus dolor urna. Aliquam diam integer vitae eget.
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <section class="mw--1440 px-2 py-2 py-lg-5">
        <div class="sobreponerForm position-relative">
            <img class="img-fluid" src="<?php echo __ROOT__; ?>/public/img/home/formBg.png">
            <div class="position-absolute top-0 start-50 m-3 py-0 py-lg-5">
                <form class="bg--lightGrey p-3 p-md-5 rounded--24">
                    <header class="px-2 py-4">
                        <h2 class="text--lg text--darkGreen text--bold">Ponte en contacto</h2>
                    </header>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex flex-column mb-3 input--lightGrey">
                            <label for="nombre">Nombre completo</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column mb-3 input--lightGrey">
                            <label for="email">Correo electrónico</label>
                            <input type="email" id="email" name="email" placeholder="ejemplo@email.com">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex flex-column mb-3 input--lightGrey">
                            <label for="telefono">Teléfono</label>
                            <input type="text" id="telefono" name="telefono" placeholder="(123) 456 - 789">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex flex-column mb-3 input--lightGrey">
                            <label for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="10"  placeholder="Escribe aquí tu mensaje..." style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button class="btn btn--darkGreen">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>
<?php include 'partials/footer.php'; ?>