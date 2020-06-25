<div class="yellow banner">
    <nav>
        <a <?php if ($fileName == '/en/index.php') echo 'class="active"'; ?> href="index.php">Inicio</a>
        <a <?php if ($fileName == '/en/nosotros.php') echo 'class="active"'; ?> href="nosotros.php">Nosotros</a>
        <a <?php if ($fileName == '/en/galeria.php') echo 'class="active"'; ?> href="galeria.php">Galería</a>
        <!-- <a <?php if ($fileName == '/en/build-it.php') echo 'class="active"'; ?> href="build-it.php">Build It!</a> -->
    </nav>
    <div style="visibility:hidden" class="buttons">
        <a href="#">
            <figure>
                <img src="/IMG/greencake.svg" alt="Green Cake" />
                <figcaption>
                    Registarse
                </figcaption>
            </figure>
        </a>

        <a href="#">
            <figure>
                <img src="/IMG/pinkcake.svg" alt="Pink Cake" />
                <figcaption>
                    Inicio de Sesión
                </figcaption>
            </figure>
        </a>
    </div>
</div>