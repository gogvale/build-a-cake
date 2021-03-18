<div class="yellow banner">
    <nav>
        <a <?php if ($_SERVER['PHP_SELF'] == '/pt-br/index.php') echo 'class="active"'; ?> href="index.php">Inicio</a>
        <a <?php if ($_SERVER['PHP_SELF'] == '/pt-br/nosotros.php') echo 'class="active"'; ?> href="nosotros.php">Sobre Nós</a>
        <a <?php if ($_SERVER['PHP_SELF'] == '/pt-br/galeria.php') echo 'class="active"'; ?> href="galeria.php">Galeria</a>
        <!-- <a <?php if ($_SERVER['PHP_SELF'] == '/pt-br/build-it.php') echo 'class="active"'; ?> href="build-it.php">Build It!</a> -->
    </nav>
    <div style="visibility:hidden" class="buttons">
        <a href="#">
            <figure>
                <img src="/IMG/greencake.svg" alt="Green Cake" />
                <figcaption>
                    Registro
                </figcaption>
            </figure>
        </a>

        <a href="#">
            <figure>
                <img src="/IMG/pinkcake.svg" alt="Pink Cake" />
                <figcaption>
                    Login
                </figcaption>
            </figure>
        </a>
    </div>
</div>