<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Build-a-cake | Carioca Lanches™</title>
    <meta name="description" content="Página web para encomienda de pasteles por parte de Carioca Lances - Entregas en el área metropolitana de Monterrey.">
    <meta property="og:description" content="Página web para encomienda de pasteles por parte de Carioca Lances - Entregas en el área metropolitana de Monterrey.
">
    <meta name="twitter:description" content="Página web para encomienda de pasteles por parte de Carioca Lances - Entregas en el área metropolitana de Monterrey.">
    <meta name="twitter:title" content="Build-a-cake | Carioca Lanches™">
    <meta name="twitter:image" content="http://buildacakemty.com/assets/img/Logo.png">
    <meta name="twitter:card" content="summary">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://buildacakemty.com/assets/img/Logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md sticky-top bg-danger bg-gradient">
        <div class="container-fluid">
            <!-- Start: Load Cart --><?php 
require_once "resources/Cart.php";
?>
<!-- End: Load Cart --><a class="navbar-brand" href="index.php">Build a Cake&nbsp;<i class="fas fa-birthday-cake"></i></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span><?php if(!$cart->empty()): ?>
    <span id="cart-count-mobile" class="badge rounded-pill bg-warning">
        <?= $cart->size() ?>
    </span>
<?php endif ?></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav justify-content-lg-end">
                    <!-- Start: Inicio -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="index.php">Inicio</a></li><!-- End: Inicio -->
                    <!-- Start: Catalogo -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="catalog.php">Catálogo</a></li><!-- End: Catalogo -->
                    <!-- Start: Galeria -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="gallery.php">Galería</a></li><!-- End: Galeria -->
                    <!-- Start: Contacto -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="contact.php">Contáctanos</a></li><!-- End: Contacto -->
                    <!-- Start: Sobre Nosotros -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="about-us.php">Sobre Nosotros</a></li><!-- End: Sobre Nosotros -->
                    <!-- Start: Cart -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link active" href="cart.php">Carrito&nbsp;<i class="fa fa-shopping-cart"></i><?php if(!$cart->empty()): ?>
    <span id="cart-count" class="badge rounded-pill bg-success">
        <?= $cart->size() ?>
    </span>
<?php endif ?>&nbsp;</a></li><!-- End: Cart -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container d-flex flex-column justify-content-between align-items-xxl-center" style="padding: 2em;">
        <h1>Carrito de Compras</h1><!-- Start: if !empty() --><?php if($cart->empty()) : ?><!-- End: if !empty() -->
        <!-- Start: No items message -->
        <div class="d-inline-flex flex-column" style="text-align: center;"><i class="fa fa-exclamation-circle"></i><small style="margin: 2em;color: var(--bs-gray);">No hay ningún producto en el carrito de compra</small><a class="btn btn-success" role="button" href="catalog.php">Seguir Comprando&nbsp;<i class="fa fa-shopping-cart"></i></a></div><!-- End: No items message -->
        <!-- Start: else --><?php else : ?><!-- End: else -->
        <!-- Start: Cart Items -->
        <div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-light">
                        <tr>
                            <th colspan="2">Producto</th>
                            <th>Precio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart->items() as $id=>$item) : ?>
                        <tr>
                            <td style="width: auto;padding: 0;text-align: center;"></td>
                            <td><?= $item->name ?></td>
                            <td><?="$". $item->price() ?></td>
                            <td style="text-align: center;"><div role="group" class="btn-group"><a class="btn btn-success" role="button" href="add-to-cart.php?product_id=<?=$item->id ?>"><i class="fa fa-plus"></i></a><a class="btn btn-danger" role="button" href="remove-from-cart.php?product_id=<?=$id ?>" ><i class="fa fa-trash"></i></a></div></td>
                        </tr><?php endforeach ?>
                    </tbody>
                </table>
            </div><!-- Start: Total -->
            <p style="text-align: right;">Total: <strong>$
<?= $cart->total() ?>
</strong></p><!-- End: Total -->
        </div><!-- End: Cart Items -->
        <div class="btn-group btn-group-lg" role="group"><a class="btn btn-warning btn-lg" role="button" href="catalog.php">Seguir Comprando&nbsp;<i class="fa fa-shopping-cart"></i></a><a class="btn btn-success btn-lg" role="button" href="checkout.php">Checkout&nbsp;<i class="fa fa-truck"></i></a></div>
    </div><!-- Start: endif --><?php endif ?><!-- End: endif -->
    <!-- Start: Footer Basic -->
    <footer class="footer-basic">
        <!-- Start: Social Icons -->
        <div class="social"><a href="https://www.instagram.com/mariza.carioca/" target="_blank"><i class="icon ion-social-instagram"></i></a><a href="https://www.facebook.com/cariocalanchesmty" target="_blank"><i class="icon ion-social-facebook"></i></a></div><!-- End: Social Icons -->
        <!-- Start: Copyright -->
        <p class="copyright">Carioca Lanches © 2021</p><!-- End: Copyright -->
        <!-- Start: Scroll To Top --><a id="scroll-to-top" title="Scroll to top" href="#"><i class="fas fa-angle-up"></i></a><!-- End: Scroll To Top -->
    </footer><!-- End: Footer Basic -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>