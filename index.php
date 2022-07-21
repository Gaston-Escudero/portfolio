<?php 
    $pg ="inicio";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/GE.jpg" />
</head>

<body id="inicio" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete">
                <a href="proyectos.php"><img src="images/cohete.svg" alt="cohete"></a>
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <div class="my-4">
                    <p class="px-5 py-2">Bienvenid@ a mi sitio web sobre desarrollos de sistemas.</p>
                </div>
            </div>
            <div class="col-12 text-center pt-3 pb-5">
                <a href="proyectos.php" class="btn shadow">Conoce mis Proyectos</a>
            </div>
        </div>

    </main>
    <footer class="container mt-auto pb-4">
        <div class="row">
            <div class="col-3">
                <a href="https://github.com/Gaston-Escudero" target="_blank" title="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/gaston-escudero-9a0058150" target="_blank" title="Seguime en Likedin">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://depcsuite.com/?v=d72a48a8ebd2" target="_blank">DePCSuite</a>
            </div>
            <div class="col-3">
                <a href="mailto:gastonescudero95@gmail.com">gastonescudero95@gmail.com</a>
            </div>
            <div class="col-3">
                <a href="https://api.whatsapp.com/send?phone=543517408034" target="_blank"
                    title="Enviame un mensaje por Whatsapp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </div>

        </div>

    </footer>

</body>

</html>