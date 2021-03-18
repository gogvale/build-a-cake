<!-- Detects browser language and redirect to apropriate subdomain -->
<script>
    let language = navigator.language;
    switch (true) {
        case (language.startsWith("es")):
            language = "es-mx";
            break;
        case (language.startsWith("pt")):
            language = "pt-br";
            break;
        default:
            language = "en";
    }
    document.location.href = `/${language}/`;
</script>