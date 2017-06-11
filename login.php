<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style1.css" type="text/css"/>
        <link rel="stylesheet" href="css/style2.css" type="text/css"/>
        <link rel="stylesheet" href="css/style3.css" type="text/css"/>
    </head>
    <body>
        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title"><img src="css/pictures/Profilbild_PSN.png" height="50" alt="EA"/> EatingAdvanced</h1>
                <nav>
                    <ul>
                        <li ><a href="./account.php">Mein Profil</a></li>
                        <li ><a href="./about.php">Über uns</a></li>
                        <li ><a href="./login.php">Login</a></li>                                                            
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <center> 
                    <br><br>
                    <form name="Login" style="border-style: solid; border-width: 1px; width: auto; max-width: 500px;">
                        <header>
                            <h1>Anmelden</h1>
                            <p>Geben Sie Ihre Email-Adresse ein:</p>
                        </header>
                        <input type="text" name="User/Email" value="" style="width:60%; border-color: #e80000; border-style: double"/><br>
                        <p>Geben Sie Ihr Passwort ein:</p>
                        <input type="password" name="c" value="" style="width:60%; border-color: #e80000; border-style: double"/>
                        <footer>
                            <a href="forgot.php" style="font-size: small">Passwort vergessen?</a><br><br>
                            <input type="submit" value="Anmelden" name="Anmelden" style="width:60%; height:25px; color: white; background:#e80000; border-style: none"/>   
                            <hr style="width:90%;">
                            <h4>Neu bei EatingAdvanced?</h4>
                            <input type="button" value="Erstellen Sie Ihr EatingAdvanced-Konto " name="Register" style="width:60%; height:25px; color: white; background:#e80000; border-style: none" 
                                   onClick="self.location.href = './account.php'"> 

                            <br><br>
                        </footer> 
                    </form> 
                    <br><br>
                </center>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>Alle Angaben ohne Gewähr</h3>
            </footer>
        </div>

    </body>
</html>
