<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");
?>

<div class="fondo_menu">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="http://localhost/login/asset/img/STboth.png" alt="Simpleteck"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <?php if(empty($_SESSION['usuario'])): ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a href="http://localhost/login/view/home/login.php" id="bottone1"><strong>Iniciar sesión</strong></a>
                        <a href="http://localhost/login/view/home/singup.php" id="bottone1" ><strong>Registrarme</strong></a>
                        <a href="http://localhost/login/view/home/eventos.php" id="bottone1"><strong>Eventos</strong></a>
                        <a href="http://localhost/login/view/home/hacerEvento.php" id="bottone1"><strong>Hacer mi evento</strong></a>
                    </div>
                
                <?php else: ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <a href="http://localhost/login/view/home/login.php" id="bottone1"><strong>Mis tickets</strong></a>
                        <a href="http://localhost/login/view/home/singup.php" id="bottone1" ><strong>Mi cuenta</strong></a>
                        <a href="http://localhost/login/view/home/logout.php" id="bottone1" >Cerrar Sesión</a>
                        <a href="http://localhost/login/view/home/hacerEvento.php" id="bottone1"><strong>Hacer mi evento</strong></a>
                    </div>
                <?php endif ?>

            </div>
        </nav>
    </div>
</div>




