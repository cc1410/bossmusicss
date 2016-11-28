<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../homepage/csshomepage.css" rel="stylesheet" type="text/css"/>
        <link href="cssfans.css" rel="stylesheet" type="text/css"/>
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

        <div id="votar">
            <div id="votarConcierto">
                <form>
                    <ul> 
                        <h3>Votacion de Conciertos</h3>
                        <li>
                            Conciertos:  1<input type="radio" name="votarc1" value="1">
                            2<input type="radio" name="votarc1" value="2"> 
                            3<input type="radio" name="votarc1" value="3"> 
                            4<input type="radio" name="votarc1" value="4"> 
                            5<input type="radio" name="votarc1" value="5"> 
                        </li>
                        <li>
                            Conciertos:  1<input type="radio" name="votarc2" value="1">
                            2<input type="radio" name="votarc2" value="2"> 
                            3<input type="radio" name="votarc2" value="3"> 
                            4<input type="radio" name="votarc2" value="4"> 
                            5<input type="radio" name="votarc2" value="5"> 
                        </li>
                        <li>
                            Conciertos:  1<input type="radio" name="votarc3" value="1">
                            2<input type="radio" name="votarc3" value="2"> 
                            3<input type="radio" name="votarc3" value="3"> 
                            4<input type="radio" name="votarc3" value="4"> 
                            5<input type="radio" name="votarc3" value="5"> 
                        </li>
                        <li>
                            Conciertos:  1<input type="radio" name="votarc4" value="1">
                            2<input type="radio" name="votarc4" value="2"> 
                            3<input type="radio" name="votarc4" value="3"> 
                            4<input type="radio" name="votarc4" value="4"> 
                            5<input type="radio" name="votarc4" value="5"> 
                        </li>
                        <li>
                            Conciertos:  1<input type="radio" name="votarc5" value="1">
                            2<input type="radio" name="votarc5" value="2"> 
                            3<input type="radio" name="votarc5" value="3"> 
                            4<input type="radio" name="votarc5" value="4"> 
                            5<input type="radio" name="votarc5" value="5"> 
                        </li>
                        <li>
                            Conciertos:  1<input type="radio" name="votarc6" value="1">
                            2<input type="radio" name="votarc6" value="2"> 
                            3<input type="radio" name="votarc6" value="3"> 
                            4<input type="radio" name="votarc6" value="4"> 
                            5<input type="radio" name="votarc6" value="5"> 
                        </li>
                        <input type="submit" name="enviarc" value="votarConciertos">
                    </ul></form>
            </div>
            <div id="votarMusico">
                <form> <ul> 
                        <h3>Votacion de Músicos</h3>
                        <li>
                            Músicos:  1<input type="radio" name="votarm1" value="1">
                            2<input type="radio" name="votarm1" value="2"> 
                            3<input type="radio" name="votarm1" value="3"> 
                            4<input type="radio" name="votarm1" value="4"> 
                            5<input type="radio" name="votarm1" value="5"> 
                        </li>
                        <li>
                            Músicos:  1<input type="radio" name="votarm2" value="1">
                            2<input type="radio" name="votarm2" value="2"> 
                            3<input type="radio" name="votarm2" value="3"> 
                            4<input type="radio" name="votarm2" value="4"> 
                            5<input type="radio" name="votarm2" value="5"> 
                        </li>
                        <li>
                            Músicos:  1<input type="radio" name="votarm3" value="1">
                            2<input type="radio" name="votarm3" value="2"> 
                            3<input type="radio" name="votarm3" value="3"> 
                            4<input type="radio" name="votarm3" value="4"> 
                            5<input type="radio" name="votarm3" value="5"> 
                        </li>
                        <li>
                            Músicos:  1<input type="radio" name="votarm4" value="1">
                            2<input type="radio" name="votarm4" value="2"> 
                            3<input type="radio" name="votarm4" value="3"> 
                            4<input type="radio" name="votarm4" value="4"> 
                            5<input type="radio" name="votarm4" value="5"> 
                        </li>
                        <li>
                            Músicos:  1<input type="radio" name="votarm5" value="1">
                            2<input type="radio" name="votarm5" value="2"> 
                            3<input type="radio" name="votarm5" value="3"> 
                            4<input type="radio" name="votarm5" value="4"> 
                            5<input type="radio" name="votarm5" value="5"> 
                        </li>
                        <li>
                            Músicos:  1<input type="radio" name="votarm6" value="1">
                            2<input type="radio" name="votarm6" value="2"> 
                            3<input type="radio" name="votarm6" value="3"> 
                            4<input type="radio" name="votarm6" value="4"> 
                            5<input type="radio" name="votarm6" value="5"> 
                        </li>
                        <input type="submit" name="enviarm" value="votarMúsicos"
                    </ul></form>
            </div>
        </div>

        <div id="nuevos">
            <div>
                titulo 
                <p>
                    Estos son informacion de nuevos conciertos
                </p>
            </div>
            <div>
                titulo
                <p>
                    Estos son informacion de nuevos conciertos
                </p>

            </div>
            <div>
                titulo
                <p>
                    Estos son informacion de nuevos conciertos
                </p>
            </div>
            <div>
                titulo
                <p>
                    Estos son informacion de nuevos conciertos
                </p>
            </div>
            <div>
                titulo
                <p>
                    Estos son informacion de nuevos conciertos
                </p>
            </div>
            <div>
                titulo
                <p>
                    Estos son informacion de nuevos conciertos
                </p>
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
