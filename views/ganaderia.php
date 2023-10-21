<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>
<main class="bg--lightGreen">
    <section class="mw--1440 px-2 py-5">
        <header class="w--50 text-center">
            <h2 class="text--lg text--darkGreen fw-bold mb-3">Catálogo de productos</h2>
            <p class="text--sm text--grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus ipsum viverra etiam.</p>
        </header>
        <div class="grid--4cols gap-4">
            <div class="p-1 d-flex flex-column gap--24">
                <img src="<?php echo __ROOT__; ?>/public/img/ganaderia/sorgo.png" class="img-fluid">
                <div class="text--bold">
                    <h3 class="text--md text--bold my-1 my-md-3">Sorgo molido</h3>
                </div>
            </div>
            <div class="p-1 d-flex flex-column gap--24">
                <img src="<?php echo __ROOT__; ?>/public/img/ganaderia/melazina.png" class="img-fluid">
                <div class="text--bold">
                    <h3 class="text--md text--bold my-1 my-md-3">Melazina Asar</h3>
                </div>
            </div>
            <div class="p-1 d-flex flex-column gap--24">
                <img src="<?php echo __ROOT__; ?>/public/img/ganaderia/pasta.png" class="img-fluid">
                <div class="text--bold">
                    <h3 class="text--md text--bold my-1 my-md-3">Pasta de soya</h3>
                </div>
            </div>
            <div class="p-1 d-flex flex-column gap--24">
                <img src="<?php echo __ROOT__; ?>/public/img/ganaderia/engorda.png" class="img-fluid">
                <div class="text--bold">
                    <h3 class="text--md text--bold my-1 my-md-3">Engorda ganado 14%</h3>
                </div>
            </div>
        </div>
        <div class="w-75 mr-lg-auto mr-0 py-4">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="24" fill="#096134"/><path d="M34.1938 25.5759L33.7303 25.907L33.2668 25.5759C30.5853 23.4903 26.8112 23.4903 24.0965 25.5759L23.6331 25.907L23.1696 25.5759C20.488 23.4903 16.7139 23.4903 13.9993 25.5759L13.5358 25.907L13.0723 25.5759C10.4569 23.5565 6.84841 23.4903 4.19995 25.3773V28.8534C7.11326 27.2312 10.8542 27.3968 13.6351 29.3169C15.158 28.2906 16.7802 27.7609 18.5679 27.7609C20.3225 27.7609 22.0771 28.2906 23.5999 29.3169C26.6457 27.2312 30.6184 27.2312 33.6641 29.3169C36.445 27.3968 40.0535 27.2643 42.9999 28.8534V25.3773C40.3846 23.4903 36.8092 23.5565 34.1938 25.5759Z" fill="white"/><path d="M34.1938 20.2791L33.7303 20.6101L33.2668 20.2791C30.5853 18.1934 26.8112 18.1934 24.0965 20.2791L23.6331 20.6101L23.1696 20.2791C20.488 18.1934 16.7139 18.1934 13.9993 20.2791L13.5358 20.6101L13.0723 20.2791C10.4569 18.2596 6.84841 18.1934 4.19995 20.0804V23.5565C7.11326 21.9344 10.8542 22.0999 13.6351 24.02C15.158 22.9937 16.7802 22.464 18.5679 22.464C20.3225 22.464 22.0771 22.9937 23.5999 24.02C26.6457 21.9344 30.6184 21.9344 33.6641 24.02C36.445 22.0999 40.0535 21.9675 42.9999 23.5565V20.0804C40.3846 18.1934 36.8092 18.2596 34.1938 20.2791Z" fill="white"/>            </svg>
            <h2 class="text--lg text--darkGreen fw-bold my-2">Mezclas de alimentos balanceados</h2>
            <p class="m-1 text--md">Dales a tu ganado una buena nutrición, contamos con la materia prima necesaria para elaborar alimentos balanceados de calidad.</p>
        </div>
    </section>

</main>
<?php include 'partials/footer.php'; ?>