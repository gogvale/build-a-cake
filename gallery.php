<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Build-a-Cake</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
</head>

<body><?php require "resources/functions.php"; ?>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-warning">
        <div class="container-fluid"><?php 
require "resources/Cart.php";
?>
<a class="navbar-brand" href="index.php">Build a Cake&nbsp;<i class="fas fa-birthday-cake"></i></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav justify-content-lg-end">
                    <!-- Start: Inicio -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="index.php">Inicio</a></li><!-- End: Inicio -->
                    <!-- Start: Sobre Nosotros -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="about-us.php">Sobre Nosotros</a></li><!-- End: Sobre Nosotros -->
                    <!-- Start: Contacto -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="contact.php">Contáctanos</a></li><!-- End: Contacto -->
                    <!-- Start: Galeria -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link active" href="gallery.php">Galería</a></li><!-- End: Galeria -->
                    <!-- Start: Catalogo -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="catalog.php">Catálogo</a></li><!-- End: Catalogo -->
                    <!-- Start: Cart -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="cart.php">Carrito&nbsp;<i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;<?php if(!$cart->empty()): ?>
    <span class="badge rounded-pill bg-danger">
        <?= $cart->size() ?>
    </span>
<?php endif ?>&nbsp;</a></li><!-- End: Cart -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <!-- Start: Lightbox Gallery -->
        <section class="photo-gallery">
            <div class="container">
                <!-- Start: Intro -->
                <div class="intro">
                    <h2 class="text-center">Galería</h2>
                    <p class="text-center" target="_blank">Para más fotos, síguenos en&nbsp;<a href="https://www.instagram.com/mariza.carioca/" target="_blank">Instagram</a></p>
                </div><!-- End: Intro -->
                <!-- Start: Photos -->
                <div class="row photos" data-bss-baguettebox=""><?php foreach($gallery_array as $picture): ?>
    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?= $gallery_path . $picture ?>"><img class="img-fluid" src="<?= $gallery_path . $picture ?>" loading="lazy"></a></div>
<?php endforeach; ?></div><!-- End: Photos -->
            </div>
        </section><!-- End: Lightbox Gallery -->
    </div><!-- Start: Footer Basic -->
    <footer class="footer-basic">
        <!-- Start: Social Icons -->
        <div class="social"><a href="https://www.instagram.com/mariza.carioca/" target="_blank"><i class="icon ion-social-instagram"></i></a><a href="https://www.facebook.com/cariocalanchesmty" target="_blank"><i class="icon ion-social-facebook"></i></a></div><!-- End: Social Icons -->
        <!-- Start: Copyright -->
        <p class="copyright">Carioca Lanches © 2021</p><!-- End: Copyright -->
    </footer><!-- End: Footer Basic -->
    <!-- Start: Scroll To Top --><a id="scroll-to-top" title="Scroll to top" href="#"><i class="fas fa-angle-up"></i></a><!-- End: Scroll To Top -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>