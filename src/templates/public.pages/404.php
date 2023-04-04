<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('./src/templates/public.component/head.php') ?>
    <link rel="stylesheet" href="<?= $DATA['http_domain'] ?>public/css.public/404.css">
</head>

<body>

    <header>
        <?php include('./src/templates/public.component/header.php') ?>
    </header>

    <main class="animate__animated animate__fadeIn">
        <div class="container">
            <img src="<?= $DATA['http_domain'] ?>public/img/404.png" alt="Ilustracion 404">
            <h2>Oops, la página que buscas no existe.</h2>
            <p>Parece que has llegado a una página que no está disponible o se ha eliminado.</p>
            <br><br>
            <a href="<?= $DATA['http_domain'] ?>">
                <i class="fas fa-arrow-left"></i>
                <span>Volver al inicio</span>
            </a>
        </div>

    </main>

    <!-- <footer id="section-footer">
        <?php include('./src/templates/public.component/footer.php') ?>
    </footer> -->
</body>

<foot>
    <?php include('./src/templates/public.component/foot.php') ?>
</foot>

</html>