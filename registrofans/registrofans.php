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
        <link href="cssregistrofans.css" rel="stylesheet" type="text/css"/>
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
                    
                </ul>
            </div>
            <div id="entrar">
                <a href="../login/login.php"><input type="button" value="ENTRAR"></a>
            </div>
        </header>
            <div id="formulariofans"> 
                <div id="datosfans">
                     <h3>Datos de Usuario</h3>
                <form accept-charset="" autocomplete="" method="POST"><br>
                    Usuario: <input type="text" name="usuario"><br>
                    Password:<input type="password" name="passsword"><br>
                    Confimar Password:<input type="password" name="password2"><br>
                    Email:<input type="email" name="email"><br>
                    
                    <div id="tituloEstilo">Estilo de musica que te gusta:</div> 
                   <div id="estilo">
                    Rock <input type="checkbox" name="estilo" value="rock">
                    POP <input type="checkbox" name="estilo" value="pop">
                    Jazz <input type="checkbox" name="estilo" value="jazz">
                    R&B <input type="checkbox" name="estilo" value="r&b">
                    Metal <input type="checkbox" name="estilo" value="metal">
                    Punk <input type="checkbox" name="estilo" value="punk">
                    </div>
                    <div id="daralta">
                        <a href="../fans/fans.php"><input type="button" value="DAR DE ALTA" name="ingresar"></a>
                    </div>
                </form>
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
