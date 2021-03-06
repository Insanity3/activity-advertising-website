<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="¿Necesitas una web profesional? ¿A bajo coste? ¡Entra ya y descúbrenos!">
    <title>InsanityDev Desarrollo Web Profesional</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="Front/Public/Plugins/fontawesome5/css/all.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="Front/Public/Css/reset.css">
    <link rel="stylesheet" href="Front/Public/Css/estilos.css">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php
        //Incluimos el header
        include 'Front/Views/Components/header.php';
        ?>
    </header>
    <main>
        <?php
        //Incluimos todas las secciones de la web
        include 'Front/Views/Sections/menu.php';
        include 'Front/Views/Sections/cabecera.php';
        include 'Front/Views/Sections/cards.php';
        include 'Front/Views/Sections/qr.php';
        include 'Front/Views/Sections/ecommerce.php';
        include 'Front/Views/Sections/renovacion.php';
        include 'Front/Views/Sections/nuevaweb.php';
        include 'Front/Views/Sections/seo.php';
        include 'Front/Views/Sections/contacto.php';
        ?>
    </main>
    <footer>
        <?php
        //Incluimos el footer
        include 'Front/Views/Components/footer.php';
        ?>
    </footer>
    
    <!-- Scripts -->
    <script src="Front/Public/JS/menu.js"></script>
    <script src="Front/Public/JS/slider.js"></script>
</body>
</html>