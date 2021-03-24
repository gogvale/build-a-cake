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
<!-- End: Load Cart --><a class="navbar-brand" href="index.php">Build a Cake&nbsp;<i class="fas fa-birthday-cake"></i></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav justify-content-lg-end">
                    <!-- Start: Inicio -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="index.php">Inicio</a></li><!-- End: Inicio -->
                    <!-- Start: Sobre Nosotros -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="about-us.php">Sobre Nosotros</a></li><!-- End: Sobre Nosotros -->
                    <!-- Start: Contacto -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="contact.php">Contáctanos</a></li><!-- End: Contacto -->
                    <!-- Start: Galeria -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="gallery.php">Galería</a></li><!-- End: Galeria -->
                    <!-- Start: Catalogo -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="catalog.php">Catálogo</a></li><!-- End: Catalogo -->
                    <!-- Start: Cart -->
                    <li class="nav-item" data-bss-hover-animate="rubberBand"><a class="nav-link" href="cart.php">Carrito&nbsp;<i class="fa fa-shopping-cart"></i><?php if(!$cart->empty()): ?>
    <span id="cart-count" class="badge rounded-pill bg-success">
        <?= $cart->size() ?>
    </span>
<?php endif ?>&nbsp;</a></li><!-- End: Cart -->
                </ul>
            </div>
        </div>
    </nav><!-- Start: 2 Rows 1+3 Columns -->
    <div class="container" style="padding: 2em 0;">
        <!-- Start: Aviso -->
        <div class="row" style="text-align: center;">
            <div class="col-auto col-lg-10 col-xl-8 col-xxl-6 offset-lg-1 offset-xl-2 offset-xxl-3" id="warning">
                <h1>¡Gracias por la preferencia!</h1>
                <p style="text-align: justify;">El cobro se realizará al momento de realizar la entrega. Nosotros recolectaremos tus datos y nos pondremos en contacto para verificar la compra y aclarar cualquier detalle con su pedido, asegúrese de llenar correctamente la información antes de enviar.</p>
            </div>
        </div><!-- End: Aviso -->
        <form method="POST" action="resources/send-delivery-mail.php">
            <div class="row">
                <div class="col-md-4">
                    <p style="padding-top: 2em;">Confirma tu pedido:</p>
                    <ul class="list-group">
                        <?php foreach ($cart->items() as $item) : ?>
                        <li class="list-group-item"><span><?= $item->name ?> - <?= $item->price() ?></span></li><?php endforeach ?>
                    </ul>
                    <h4 class="text-end">Total: $<?= $cart->total() ?></h4>
                </div>
                <div class="col-md-4">
                    <p style="text-align: center;padding-top: 2em;">Comentarios sobre tu pedido (opcional)</p><textarea class="form-control" rows="8" placeholder="Ejemplo: entregar en la caseta, sin cerezas, etc." name="details"></textarea>
                </div>
                <div class="col-md-4">
                    <!-- Start: Contact Form Clean -->
                    <section class="contact-clean" style="padding: 2em 0;">
                        <!-- Start: Nombre -->
                        <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Nombre*" required=""></div><!-- End: Nombre -->
                        <!-- Start: Teléfono -->
                        <div class="mb-3"><input class="form-control" type="tel" placeholder="Teléfono*" name="phone" required="">
                            <div class="form-check float-end"><input class="form-check-input" type="checkbox" id="formCheck-1" checked="" name="mobile"><label class="form-check-label" for="formCheck-1">Celular?</label></div>
                        </div><!-- End: Teléfono -->
                        <!-- Start: Correo -->
                        <div class="mb-3" name="email"><input class="form-control" type="email" placeholder="Correo Electrónico" name="email"></div><!-- End: Correo --><div class="mb-3">
                            <!-- Start: Seleccionado --><select class="form-select" name="city" required>
                                <optgroup label="Ciudades">
                                    <option value='-1' disabled selected>Seleccionar Ciudad…</option>
                                    <?php 
                                    require "resources/Ciudades.php";

                                    foreach($ciudades as $key => $ciudad)
                                    {
                                        echo "<option value='{$key}'>{$ciudad}</option>".PHP_EOL;
                                    }
                                    ?>
                                </optgroup>
                            </select><!-- End: Seleccionado -->
                        </div><!-- End: Ciudad --><!-- Start: Enviar --><!-- Start: Enviar -->
                        <div class="mb-3"><button class="btn btn-success btn-lg" type="submit">Enviar&nbsp;<i class="fa fa-paper-plane"></i></button></div><!-- End: Enviar -->
                    </section><!-- End: Contact Form Clean -->
                </div>
            </div>
        </form>
    </div><!-- End: 2 Rows 1+3 Columns -->
    <!-- Start: Footer Basic -->
    <footer class="footer-basic">
        <!-- Start: Social Icons -->
        <div class="social"><a href="https://www.instagram.com/mariza.carioca/" target="_blank"><i class="icon ion-social-instagram"></i></a><a href="https://www.facebook.com/cariocalanchesmty" target="_blank"><i class="icon ion-social-facebook"></i></a></div><!-- End: Social Icons -->
        <!-- Start: Copyright -->
        <p class="copyright">Carioca Lanches © 2021</p><!-- End: Copyright -->
        <!-- Start: Scroll To Top --><a id="scroll-to-top" title="Scroll to top" href="#"><i class="fas fa-angle-up"></i></a><!-- End: Scroll To Top -->
    </footer><!-- End: Footer Basic -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>