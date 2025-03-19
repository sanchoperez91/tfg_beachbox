

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modo de Uso</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/styles.css">
    <link rel="stylesheet" href="Assets/css/nuestrasPlayasStyles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="Assets/js/motor.js"></script>
    <script defer>
    $(document).ready(function() {
        function startCarousel(carouselId) {
        let index = 0;
        const images = $(carouselId + ' img');
        images.hide(); // Oculta todas las imágenes al inicio
        images.eq(index).show(); // Muestra solo la primera

        setInterval(() => {
            images.eq(index).fadeOut(500, function() { // Esconde la imagen actual
                index = (index + 1) % images.length; // Calcula la siguiente imagen
                images.eq(index).fadeIn(500); // Muestra la siguiente imagen
            });
        }, 4000);
    }
        startCarousel('#carousel-benidorm');
        startCarousel('#carousel-gandia');
        startCarousel('#carousel-nerja');
    });
</script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <?php require_once "Views/Shared/headerView.php"; ?>
    <?php require_once "Views/nuestrasPlayasView.php"; ?>
    <?php require_once "Views/Shared/footerView.php"; ?>


</body>
</html>