<?php $title = isset($title) ? $title : 'Tanko';
?>

<header class="bg-white py-3 mx-5 my-3 d-none d-lg-block">
    <div class="mw--1440 d-flex justify-content-between align-items-center">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="logo--nav">
        <nav>
            <ul class="d-flex text--sm w-100 list--unstyled">
                <li class="mx-2"><a class="<?php echo $title == 'Inicio' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/">Inicio</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Acerca' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/acerca">Acerca</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Catálogo de productos' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>catalogo">Catálogo de productos</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Servicios' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/servicios">Servicios</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Ganadería' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/ganaderia">Ganadería</a></li>
                <li class="mx-2"><a class="<?php echo $title == 'Contacto' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/contacto">Contacto</a></li>
            </ul>
        </nav>

        <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn--darkGreen py-2 px-4 w--fit h--fit text--bold">
            Contáctanos
        </a>
    </div>
</header>

<header class="bg--lightBlue p-2 d-lg-none w-100">
    <div class="d-flex justify-content-between w-100">
        <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="logo--nav">
        <button class="btn btn--darkBlue btn--square px-3 " onclick="toggleShowMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</header>
<nav class="h--screen notShowed position-fixed z-10 bg-white w-100 py-2" id="mobileMenu" style="top: 0;">
    <div class="d-flex flex-column justify-content-between px-2 py-2 h-100">
        <div class="d-flex justify-content-between p-2">
            <img src="<?php echo __ROOT__; ?>/public/img/logo.png" class="logo--nav">
            <button class="btn btn-danger text-white btn--square px-3" onclick="toggleShowMenu()">
                <i class="fa-solid fa-x text--white"></i>
            </button>
        </div>
        <div class="my-10">
            <nav>
                <ul class="d-flex flex-column text--md w-100 list--unstyled">
                    <li class="mx-2"><a class="<?php echo $title == 'Inicio' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/">Inicio</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'Acerca' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/acerca">Acerca</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'Catálogo de productos' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>catalogo">Catálogo de productos</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'Servicios' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/servicios">Servicios</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'Ganadería' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/ganaderia">Ganadería</a></li>
                    <li class="mx-2"><a class="<?php echo $title == 'Contacto' ? 'a--brown text--bold' : 'a--grey' ?>" href="<?php echo __ROOT__; ?>/contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
        <div>
            <a href="<?php echo __ROOT__; ?>/contacto" class="btn btn-dark btn--rounded btn--darkBlue py-2 px-4 w--fit h--fit text--bold">
                Contacto
            </a>
        </div>
    </div>
</nav>