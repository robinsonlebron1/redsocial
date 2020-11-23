<?php

include_once URL_APP . '/views/custom/header.php';

?>


<div class="completarPerfil">
    <div class="container">
        
            <h2 style="color:#ffffff;" class="text-center">¡Faltan algunos pasos!</h2>
            <h6 style="color:#ffffff;"  class="text-center">Debes rellenar los siguientes campos para completar la informacion de tu perfil</h6>
            <hr>
            <div class="content-completar-perfil center">
                <form action="<?php echo URL_PROJECT ?>/home/insertarRegistrosPerfil" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_user" value="<?php echo $_SESSION['logueado'] ?>">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="telefono" class="form-control" placeholder="Telefono"  required>
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="imagen" id="imagen" required>
                            <label class="custom-file-label" for="imagen">Seleccionar una foto</label>
                        </div>
                    </div>
                    
                    <button class="btn btn-outline-success">Registrar datos</button>
                </form>
                
            </div>
           
        
    </div>
</div>

<?php

include_once URL_APP . '/views/custom/footer.php';

?>