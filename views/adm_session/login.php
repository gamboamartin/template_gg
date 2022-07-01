<?php /** @var gamboamartin\controllers\controlador_adm_session $controlador */ ?>
<?php
if($controlador->existe_msj){
    ?>
    <div class="alert alert-danger alert-dismissible fade show font_regular col-md-4 offset-4 pc info mt-4 animate__animated animate__fadeIn"  role="alert">
        <?php echo $controlador->mensaje_html; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <!--<div class="alert alert-danger alert-dismissible fade show font_regular col-md-12 mobile info" role="alert">
    <?php echo $controlador->mensaje_html; ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>-->
    <?php
}
?>

<div class="col-md-12 txt_centrado">

</div>
<div class="container">
    <form method="post" action="./index.php?seccion=adm_session&accion=loguea" class="formulario">
        <div class="row justify-content-center crea-form">
            <div class="col-sm-3  negro_menu alto-medio"></div>
            <div class="col-md-12"></div>
            <h2 class="text-center mt-5 titulo">¡Hola!</h2>

            <div class="text-center">
                <img src="assets/img/user-logo.jpeg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                     width="100px" alt="profile">
            </div>
            <div class="col-md-12"></div>
            <div class="col-sm-3 mb-2  form-template ">
                <input type="text" class="form-control input-form input-style input" id="user" name ='user'
                       placeholder="Usuario"  required>
            </div>
            <div class="col-md-12"></div>
            <div class="col-sm-3 mb-2 form-template">
                <input type="password" class="form-control input-form input-style input" id="password" name ='password'
                       placeholder="Contraseña" required>
            </div>
            <div class="col-md-12"></div>

            <div class="text-center col-2 m-4">
                <button type="submit" class="btn btn-light px-5 mb-5 w-100 input">Login</button>
            </div>
        </div>
    </form>

    <div class="container">
        <div class="row">
            <div class="col-md-6" align="left"><img src="assets/img/URA_LOGO_BLANCO.png" class="" alt="" width="30%" height="auto"></div>

            <div class="col-md-6" align="right"><img src="assets/img/logo_PNG_BLANCO.png" class="" alt="" width="30%" height="auto"></div>
        </div>
    </div>

</div>
