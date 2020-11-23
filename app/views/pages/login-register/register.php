<?php

include_once URL_APP . '/views/custom/header.php';

?>
<div class="container">

<div class="row">

    <div class="col-lg-3 col-md-2"></div>
    <div class="col-lg-6 col-md-8 login-box">
        <div class="col-lg-12 login-key">
            <i class="fa fa-key" aria-hidden="true"></i>
        </div>
        <div class="col-lg-12 login-title">
            Registro
        </div>

        <div class="col-lg-12 login-form">
            <div class="col-lg-12 login-form">
            <form action="<?php echo URL_PROJECT ?>/home/register" method="POST">
                    <div class="form-group">
                        <label class="form-control-label">Email</label>
                        <input type="email" name="email" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Usuario</label>
                        <input type="usuario" name="usuario" class="form-control" i required>
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Contraseña</label>
                        <input type="password" name="contrasena" class="form-control" i required>
                    </div>
                    <?php if (isset($_SESSION['usuarioError'])) : ?>
                <div class="alert alert-danger alert-dismissible fade show mt-2 mb-2" role="alert">
                    <?php echo $_SESSION['usuarioError'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php unset($_SESSION['usuarioError']);
            endif ?>
        
                        <div class="contenido-link mt-2">
                <a href="<?php echo URL_PROJECT ?>/home/login">¿Ya tienes una cuenta? Ingresar</a>
            </div>
                        <div class="col-lg-6 login-btm login-button">
                            <button type="submit" class="btn btn-outline-success">Registrarme</button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-2"></div>
    </div>
</div>

<?php

include_once URL_APP . '/views/custom/footer.php';

?>