<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link href="../homepage/csshomepage.css" rel="stylesheet" type="text/css"/>
        <link href="cssregistrolocal.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
      <header>
            <div id="imagenprincipal">
                <img src="../homepage/music.png" alt=""/>
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
                    <li><a href="">MENU</a></li>
                    <li><a href="../homepage/homepage.php">NOTICIAS</a></li>
                    <li><a href="">GRUPOS</a></li>
                    <li><a href="">CONCIERTOS</a></li>
                    <li><a href="">ARTICULOS</a></li>
                    
                </ul>
            </div>
            <div id="entrar">
                <a href="../login/login.php"><input type="button" value="ENTRAR"></a>
            </div>
           
           
        </header>
        
        
        
        <div id="formulariolocal">
            <div id="datosusuario">
                <h3>Datos de Usuario</h3>
                <form accept-charset="" autocomplete="" method="POST"><br>
                    Correo: <input type="email" name="email"><br>
                    Password:<input type="password" name="passsword"><br>
                    Confimar Password:<input type="password" name="password2"><br>
                </form>
                
            </div>
            <div id="datoslocal">
                <h3>Datos del Local</h3>
                <form action="" autocomplete="" method="POST"><br>
                    Nombre Local:<input type="text" name="local"><br>
                    Localidad:<input type="text" name="localidad"><br>
                    <a href="../Local/local.php"><input type="button" value="DAR DE ALTA" name="ingresar"></a>
                        
                </form>
                
            </div>
                 
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
         <div id="footer">
           <div id="legal">
               <ul>
                        <li><a href="">Terminos legales 1</a></li>
                        <li><a href="">Terminos legales 2</a></li>
                        <li><a href="">Terminos legales 3</a></li>
                        <li><a href="">Terminos legales 4</a></li>
                        <li><a href="">Terminos legales 5</a></li>
               </ul>
                
           </div>
           <div id="contactos">
                <ul>
                        <li><a href="">Contacto 1</a></li>
                        <li><a href="">Contacto 2</a></li>
                        <li><a href="">Contacto 3</a></li>
                        <li><a href="">Contacto 4</a></li>
                        <li><a href="">Contacto 5</a></li>
               </ul>
                
           </div>
           <div id="nosotros">
                <ul>
                        <li><a href="">Datos 1</a></li>
                        <li><a href="">Datos 2</a></li>
                        <li><a href="">Datos 3</a></li>
                        <li><a href="">Datos 4</a></li>
                        <li><a href="">Datos 5</a></li>
               </ul>
                
           </div>
        </div>
    </body>
</html>
