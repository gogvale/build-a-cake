</body>
<script src="/JS/modernizr-custom.js"></script>
<script>
    if (Modernizr.emoji) {
        console.log("Emoji Supported");
    } else {
        console.log("Emoji not Supported");
        const nav_select = document.querySelector("#language");
        const languages = ["Select Language", "PT-BR", "ES-MX", "EN-US"];
        for (let i = 0; i < nav_select.childElementCount; i++) {
            nav_select.children[i].textContent = languages[i];
        }
        nav_select.style.fontSize = "1em";
        nav_select.style.width = "4em";
    }
</script>

</html>