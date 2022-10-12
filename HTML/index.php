<?php
    
    require "IniciarSesion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script><link href="../HTML/styles.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="../Css/Estilo.css">
    <link rel="stylesheet" href="../Css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>

    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
    <form action="./IniciarSesion.php" method="post">
        <?php 
        include("./IniciarSesion.php");
        ?>
    </form>
    <header>
        <div class="inner-width">
         <img src="../Imagenes/Logo2.png" style="height: 40px;" alt=""></a>
           <i class="menu-toggle-btn fas fa-bars"></i>
           <nav class="navigation-menu">
              <a href="../Index.html"><i class="fas fa-home home"></i>Inicio</a>
              <a href="./Documento1.html"><i class="fas fa-align-left About"></i> Acerca de ARMADYNE</a>
              <a href="./Contacto.html"><i class="fas fa-headset contact"></i> Contacto</a>
              <a href="./documento.html"><i class="fab fa-buffer works"></i>Informacion</a>
              <a href="./index.html"><i class="fas fa-users team"></i>Iniciar Sesion</a>
           </nav>
        </div>
      </header>


        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Electronico">
                       <span class="msg-error"><?php echo $email_err; ?></span>
                        <input type="password" placeholder="Contraseña">
                        <span class="msg-error"><?php echo $password_err; ?></span>

                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" placeholder="Nombre completo">
                        <input type="text" placeholder="Correo Electronico">
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <button>Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>