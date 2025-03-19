<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
    <script src="Assets/js/motor.js" defer></script>
    <link rel="stylesheet" href="Assets/css/styleRegistro.css"> 
</head>
<body>
    <img src="Assets/img/logo3.png" alt="Logo" id="logoPagina">
    <div id="botonLoginContainer">
        <a href="login.php" id="botonLogin">Ir a Login</a>
    </div>

    <div class="forminsercion">
        <div id="tituloAñadirUsuario" class="divTituloAñadir">
            <h2 class="tituloAñadir">REGISTRATE</h2>
        </div>
        <div id="contEmp2">
            <form id="formularioUsuario" action="#" method="POST">
                <div id="contDatosUsuario" class="contDatosForm1">    
                    <div class="contAñadir1" id="contAñadirUsuario1">
                        <label for="nom_usu">Nombre:</label>
                        <input type="text" id="nom_usu" name="nom_usu" required><br>
                        <span id="nom_usuError" class="error"></span>

                        <label for="ape_usu">Apellidos:</label>
                        <input type="text" id="ape_usu" name="ape_usu" required><br>
                        <span id="ape_usuError" class="error"></span>
                    </div>
                    <div class="contAñadir1" id="contAñadirUsuario2">
                        <label for="dni_usu">DNI:</label>
                        <input type="text" id="dni_usu" name="dni_usu" required><br>
                        <span id="dni_usuError" class="error"></span>
                        <label for="tlf_usu">Telefono:</label>
                        <input type="text" id="tlf_usu" name="tlf_usu" required ><br>
                        <span id="tlf_usuError" class="error"></span>
                    </div>
                    <div class="contAñadir1" id="contAñadirUsuario3">
                        <label for="ema_usu">Email:</label>
                        <input type="email" id="ema_usu" name="ema_usu" required><br>
                        <span id="ema_usuError" class="error"></span>
                        <label for="con_usu">Contraseña:</label>
                        <input type="password" id="con_usu" name="con_usu" required placeholder="Introduzca contraseña" autocomplete="new-password"><br>
                        <span id="con_usuError" class="error"></span>
                    </div>
                </div>
                <div id="divbotonAñadirUsuario" class="divBotonAñadir">
                    <button type="submit" id="botonAñadirUsuario" class="botonAñadir" name="botonAñadirUsuario">Guardar</button>
                </div>
                <div id="divRespuesta"> </div>
            </form>
        </div>
    </div>

</body>
</html>