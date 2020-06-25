<div class="yellow banner">
    <nav>
        <a <?php if ($_SERVER['PHP_SELF'] == '/en/index.php') echo 'class="active"'; ?> href="index.php">Start</a>
        <a <?php if ($_SERVER['PHP_SELF'] == '/en/nosotros.php') echo 'class="active"'; ?> href="nosotros.php">About Us</a>
        <a <?php if ($_SERVER['PHP_SELF'] == '/en/galeria.php') echo 'class="active"'; ?> href="galeria.php">Galery</a>
        <!-- <a <?php if ($_SERVER['PHP_SELF'] == '/en/build-it.php') echo 'class="active"'; ?> href="build-it.php">Build It!</a> -->
    </nav>
    <div style="visibility:hidden" class="buttons">
        <a href="#">
            <figure>
                <img src="/IMG/greencake.svg" alt="Green Cake" />
                <figcaption>
                    Sign Up
                </figcaption>
            </figure>
        </a>

        <a href="#">
            <figure>
                <img src="/IMG/pinkcake.svg" alt="Pink Cake" />
                <figcaption>
                    Sign In
                </figcaption>
            </figure>
        </a>
    </div>
</div>