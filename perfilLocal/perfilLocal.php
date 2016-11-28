<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="../homepage/csshomepage.css" rel="stylesheet" type="text/css"/>
        <link href="cssperfilLocal.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
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
                     <li><a href="local.php">LOCAL</a></li>
                     
                    
                </ul>
            </div>
            <div id="entrar">
                <a href="../login/login.php"><input type="button" value="Salir"></a>
            </div>
            <div id="login">
                <img src="login.png" alt="" />
                <input type="button" value="Local">
            </div>
        </header>
        
        <div id="formulario">
            
            <div id="local1">
                
                <form action="" method="POST" autocomplete="on"><br>
                    Nombre:<input type="text" name="nombre"><br>
                    Apellidos:<input type="text" name="apellidos"><br>
                    Email:<input type="email" name="email"><br>
                    Nombre del Local:<input type="text" name="local"><br>
                    Aforo:<input type="text" name="aforo"><br>
                    Direccion:<input type="text" name="direccion"><br>
                    Codigo postal:<input type="text" name="postal"><br>
                    Ciudad:<input type="text" name="ciudad"><br>
                    Telefono:<input type="tel" name="telefono"><br>
                    Imagen:<input type="text" name="imagen"><br>
                </form>
                
            </div>
            <div id="local2">
                <form action="" method="POST" autocomplete="on"><br>
                    Password actual:<input type="password" name="passwordviejo"><br>
                    Nuevo password:<input type="password" name="passwordnuevo"><br>
                    Confirmar password:<input type="password" name="passwordconfirmar"><br>
                </form>
            </div>
            <div id="modificar">
                <input type="submit" value="Modificar">
            </div>
                
                
        </div>
        
        
        
        
        
        
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
