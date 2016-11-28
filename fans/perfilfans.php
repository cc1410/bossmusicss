<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="../homepage/csshomepage.css" rel="stylesheet" type="text/css"/>
        <link href="cssperfilfans.css" rel="stylesheet" type="text/css"/>
        <title></title>
    </head>
    <body>
        <header>
            <div id="imagenprincipal">
                <img src="../homepage/music.jpg" alt=""/>
            </div>
            <div id="logo">
                <img src="../homepage/logo1.png" alt=""/>
            </div>
            <div id="buscar">
                <form action="" autocomplete="" method="POST">
                    <input type="text"  name="buscar"/> <input type="submit" value="BUSCAR">
                </form>
            </div>
            <div id="menucabezera">
                <ul>
                    <li><a href="../homepage/homepage.php">INICIO</a></li>
                      <li><a href="../Quienes_Somos/quienes_somos.php">QUIENES SOMOS</a></li>
                      <li><a href="fans.php">FANS</a></li>
                </ul>
              
            </div>
            <div id="entrar">
                <a href="../login/login.php"><input type="button" value="SALIR"></a>
            </div>
            <div id="login">
                <img src="login.png" alt="" />
                <a href="perfilfans.php"><input type="button" value="Fans"></a>
            </div>
        </header>
        
        <form id="perfil">
            Nombre <input type="text" name="nombre"><br>
            Apellido <input type="text" name="apellido"><br>
            Password actual <input type="password" name="password"><br>
            Nuevo Password <input type="password" name="password1">
            <br>
            Email <input type="email" name="correo"><br>
            Codi Postal <input type="text" name="codi"><br>
            Ciudad <input type="text" name="ciudad"><br>
            Teléfono <input type="text" name="telefono"><br>
            <a href="fans.php"><input type="submit" name="modificar" value="modificar"></a>
            
        </form>
        
        
        <div id="footer">
            <div id="contactos">
                <ul>
                    <li><a href="../Quienes_Somos/quienes_somos.php">¿Quienes somos?</a></li>
                </ul>

            </div>
            <div id="nosotros">
                <ul>
                    <li>Correo: chen986755611@gmail.com</li>
                    <li>Contacto: 676437892</li>
                    <li>Facebook: bossmusicss</li>
                    <li>Twitter: bossmusicss</li>
                    <li>Instagram: bossmusicss</li>
                </ul>

            </div>
        </div>
    </body>
</html>
