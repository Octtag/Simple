<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");
    if(!empty($_SESSION['usuario'])){
        header("Location:panel_control.php");
    }
?>

<div class="fondo-login">
    <div class="logoChico">
        <a href="http://localhost/login/index.php"><img src="http://localhost/login/asset/img/STboth.png" alt="Simpleteck"></a>
    </div>
    
    <div class="titulo">
    <h2>Create tu cuenta en Simpleteck :)</h2>
    </div>
    <form action="store.php" method="POST" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="correo" value="<?= (!empty($_GET['correo'])) ? $_GET['correo'] : "" ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nombre</label>
            <input type="nombre" name="nombre" value="<?= (!empty($_GET['nombre'])) ? $_GET['nombre'] : "" ?>" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="exampleInputLastname" class="form-label">Apellido</label>
            <input type="apellido" name="apellido" value="<?= (!empty($_GET['apellido'])) ? $_GET['apellido'] : "" ?>" class="form-control" id="lastname">
        </div>
        <div class="mb-3">
            <label for="exampleInputDni" class="form-label">DNI</label>
            <input type="dni" name="dni" value="<?= (!empty($_GET['dni'])) ? $_GET['dni'] : "" ?>" class="form-control" id="dni">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" value="<?= (!empty($_GET['contraseña'])) ? $_GET['contraseña'] : "" ?>" class="form-control" id="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password2','eyepassword2')">
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarContraseña" value="<?= (!empty($_GET['confirmarContraseña'])) ? $_GET['confirmarContraseña'] : "" ?>" class="form-control" id="password2">
        </div>
        <?php if(!empty($_GET['error'])):?>
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
            </div>
        <?php endif;?>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">CREAR CUENTA</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
        Tenes una cuenta? <a href="login.php" style="text-decoration: none;">Inicia Sesión</a>
    </div>
</div>

<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>
