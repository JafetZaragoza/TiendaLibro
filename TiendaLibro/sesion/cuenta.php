<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/estilocuenta.css">
    <script type="text/javascript" src="funcion.js"></script>
    <title>Cuenta</title>
</head>
<body>
    <div class="container">
        <aside class="registrar">
            <button id="registrar" onclick="mostrar('divregistrar', 'diviniciar')">Registrarse</button>
            <div id="divregistrar">
                <form>
                    <label>Nombre(s):</label>
                    <input type="text" name="nombre">
                    <div class="flex-row">
                        <div>
                            <label>Apellido Paterno:</label>
                            <input type="text" name="ApellidoPa">
                        </div>
                        <div>
                            <label>Apellido Materno:</label>
                            <input type="text" name="ApellidoMa">
                        </div>
                    </div>
                    <label>Correo Electrónico:</label>
                    <input type="email" name="Correo">
                    <label>Contraseña:</label>
                    <input type="password" name="passw">
                    <a href="condiciones.html">Términos y condiciones</a> 
                  <input type="submit" name="Aceptar" value="Aceptar">
                <div class="respuestaregistro"></div>
                </form>
            </div>
        </aside>
        <div class="divider"></div>
        <aside class="iniciar">
            <button id="btniniciar" onclick="mostrar('diviniciar', 'divregistrar')">Iniciar Sesión</button>
            <div id="diviniciar">
                <form>
                    <label>Nombre:</label>
                    <input type="text" name="usuario">
                    <label>Contraseña:</label>
                    <input type="password" name="password">
                    <input type="submit" value="Iniciar Sesión"> 
                    <div class="respuestainicio"></div>
                </form>
            </div>
        </aside>
    </div>
    <div class="regresar-container">
        <button type="button" class="btn-regresar" onclick="regresar()">Regresar</button>
    </div>
</body>
</html>
