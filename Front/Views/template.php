<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsanityDev Desarrollo Web Profesional</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="Front/Public/Plugins/fontawesome5/css/all.css">
    <!-- Estilos -->
    <link rel="stylesheet" href="Front/Public/Css/reset.css">
    <link rel="stylesheet" href="Front/Public/Css/estilos.css">
    <!-- Fuentes -->
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
        include 'Front/Views/Sections/cabecera.php';
        include 'Front/Views/Sections/cards.php';
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
</body>
</html>