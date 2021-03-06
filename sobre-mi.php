<?php 
    $pg ="sobre-mi";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/GE.jpg" />
</head>

<body id="sobre-mi" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main>
        <section class="container" id="descripcion">
            <div class="row mb-5">
                <div class="col-12 col-sm-7">
                    <h1 class="pb-5 pt-3">Sobre mí</h1>
                    <p>Comence a incursionar dentro del mundo de la tecnologia. Actualmente me encuentro realizando el curso de Programador Full Stack.</p>
                    <div class="my-5">
                        <a href="contacto.php" class="btn-rojo">Enviar mensaje</a>
                    </div>
                </div>
                <div class="col-12 col-sm-5 mx-auto text-center">
                    <img src="images/gaston-escudero.jpeg" alt="Gescudero" class="foto-perfil">
                </div>
            </div>
        </section>
        <section id="stack-tecnologico">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            Stack Tecnológico
                        </h2>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>HTML5</h3>
                            <img src="images/html5.png" alt="html5">
                        </div>                
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>CSS</h3>
                            <img src="images/css.png" alt="css">
                        </div>
                    </div>    
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Bootstrap</h3>
                            <img src="images/bootstrap.png" alt="bootstrap">  
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>GIT</h3>
                            <img src="images/git.png" alt="git"> 
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>PHP</h3>
                            <img src="images/php.jpg" alt="php"> 
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>MySQL</h3>
                            <img src="images/mysql.png" alt="mysql">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Laravel</h3>
                            <img src="images/laravel.png" alt="laravel">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Javascript</h3>
                            <img src="images/javascript.jpeg" alt="javascript">
                        </div>    
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>React.js</h3>
                            <img src="images/react.png" alt="react">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>jQuery</h3>
                            <img src="images/jquery.jpg" alt="jquery">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Apache</h3>
                            <img src="images/apache.png" alt="apache">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>MercadoPago</h3>
                            <img src="images/mercadopago.jpg" alt="mercadopago">
                        </div>
                    </div>                
                </div>
            </div> 
        </section>
        <section id="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            <i class="fa-solid fa-briefcase"></i> Experiencia laboral
                        </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-2 d-none d-sm-block p-5"> <!--de-none para que se muestre en mobile,d-sm-block para que se muestre en demas dispositivos-->
                        <img src="images/logo-depcsuite.svg" alt="DePc" class="img-fluid gris">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>DePC</h3>
                        <h4>FULL-STACK</h4>
                        <h5>2021 - actualidad</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo consectetur, accusamus iusto illum deserunt, veritatis debitis iste quisquam maxime id rerum magni 
                            voluptates rem delectus, quaerat quia itaque quidem earum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dolores inventore nulla repellat quaerat 
                            ad harum corrupti recusandae et minus sunt impedit sit nam earum optio, non velit quae quasi.
                        </p>
                    </div>
                    <div class="col-2 d-none d-sm-block p-5"> <!--de-none para que se muestre en mobile,d-sm-block para que se muestre en demas dispositivos-->
                        <img src="images/empresa.png" alt="empresa" class="img-fluid gris">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>CERTIFICADO DIGITAL</h3>
                        <h4>DESARROLADOR FREELANCE</h4>
                        <h5>ENE 2021 - ABRIL 2021</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, aut corrupti minima illum repellendus sunt inventore atque, quidem voluptas sit alias deleniti, earum illo. 
                            Nulla aperiam consectetur voluptatem eius praesentium. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci architecto ad voluptate obcaecati ratione natus 
                            illum esse aliquam ullam, inventore atque, deserunt, sit fugit quas numquam error animi illo delectus.
                        </p>
                    </div>

                    
                </div>    
                
                
            </div>    
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>
                        <i class="fa-solid fa-graduation-cap"></i> Formación Acádémica
                    </h2>
                </div>
            </div>        
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/facultad.jpg" class="img-fluid baw" title="facultad">   
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>CONTADOR PUBLICO</h3>
                            <h4>FACULTAD DE CIENCIAS ECONOMICAS - UNC</h4>
                            <h5>2013-PRESENTE</h5>
                            <p>Materias aprobadas 20 de 40, 50%.
                                https://www.unc.edu.ar/
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/carmen1.jfif" class="img-fluid baw" title="carmen">   
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>GESTION DE EMPRESAS</h3>
                            <h4>INSTITUTO PARROQUIAL NUESTRA SEÑORA DEL CARMEN</h4>
                            <h5>2012</h5>
                            <p>http://nsdelcarmen.edu.ar/site/</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="cursos" class="container pb-5">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>
                        <i class="fa-solid fa-graduation-cap"></i> Cursos de desarrollo profesional
                    </h2>
                </div>
            </div>        
            <div class="row shadow bg-white rounded p-1">
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-depcsuite.svg" class="img-fluid baw" title="depc">   
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>DESARROLLADOR FULL-STACK</h3>
                            <h4>DePC Suite</h4>
                            <h5>2022</h5>
                            <p>
                                https://depcsuite.com/?v=d72a48a8ebd2
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="row">
                        <div class="col-2 py-3 my-auto d-none d-sm-block">
                            <img src="images/logo-depcsuite.svg" class="img-fluid baw" title="depc">   
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3>PROGRAMACION EN PHYTON</h3>
                            <h4>DePC Suite</h4>
                            <h5>2023</h5>
                            <p>
                                https://depcsuite.com/?v=d72a48a8ebd2
                            </p>
                        </div>
                    </div>
                </div>
          </div>
        </section>
        
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12 pb-3 pb-sm-0">
                        <div class="row mr-sm-1 bg-white carta-idioma shadow me-sm-1">
                            <div class="col-4 text-center carta">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Básico</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white carta-idioma shadow ms-sm-1">
                            <div class="col-4 text-center carta">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Fútbol</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="container mt-auto pb-4 pt-4">
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