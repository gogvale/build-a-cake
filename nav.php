<div class="yellow banner">
    <nav>
        <a <?php if ($fileName == '/index.php') echo 'class="active"'; ?> href="/">Inicio</a>
        <a <?php if ($fileName == '/nosotros.php') echo 'class="active"'; ?> href="nosotros.php">Nosotros</a>
        <a <?php if ($fileName == '/galeria.php') echo 'class="active"'; ?> href="galeria.php">Galería</a>
        <!-- <a <?php if ($fileName == '/build-it.php') echo 'class="active"'; ?> href="build-it.php">Build It!</a> -->
    </nav>
    <div style="visibility:hidden" class="buttons">
        <a href="#">
            <figure>
                <img src="./IMG/greencake.svg" alt="Green Cake" />
                <figcaption>
                    Registarse
                </figcaption>
            </figure>
        </a>

        <a href="#">
            <figure>
                <img src="./IMG/pinkcake.svg" alt="Pink Cake" />
                <figcaption>
                    Inicio de Sesión
                </figcaption>
            </figure>
        </a>
    </div>
</div>