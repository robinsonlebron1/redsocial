<header>
    <div >
        <nav class="navbar navbar-dark bg-dark ">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo URL_PROJECT ?>"><span class="big"><i class="fas fa-home mr-1"></i></span>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo URL_PROJECT ?>/home/usuarios"><span class="big"><i class="fas fa-home mr-1"></i></span>Usuarios</a>
                    </li>
                    <li class="nav-item">
                        
                    </li>
                </ul>

                
                

                <div class="dropdown">
                    <span  id="actionPerfil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo URL_PROJECT . '/' . $datos['perfil']->fotoPerfil ?>" alt="perfil" class="img-perfil" />
                        <?php echo ucwords($_SESSION['usuario']); ?>
                    </span>
                    <div class="dropdown-menu" aria-labelledby="actionPerfil">
                        <a class="dropdown-item text-dark" href="<?php echo URL_PROJECT ?>/home/logout">Salir</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>