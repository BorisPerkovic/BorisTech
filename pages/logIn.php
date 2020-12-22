<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
require_once("../php/classLog.php");
$db=new Baza();
$db->connect();
$poruka="";
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/icons/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i,700,700i&display=swap&subset=cyrillic-ext,latin-ext" rel="stylesheet">
    <title>BorisTech | Prijavljivanje</title>
</head>
<body id="logIn">
    <?php
        include("../php/logIn.php");
    ?>
    <!-- logIn and registration forms-->
    <div class="wrapper">
        <div class="backToIndex"><a href="../index.php">&laquo; Početna</a></div>
        <div class="message"><?= $poruka ?></div>
        <div id="middle">
            
            <div class="logIn">
                
                <p>Prijavite se</p>
                <form action="logIn.php" id="form" method="post">
                <input type="text" name="korime" class="username" placeholder="E-mail"><br>
                <input type="password" name="lozinka" class="password" placeholder="Šifra"><br>
                <input type="checkbox" class="check" name="remember">Zapamti me<br>
                <button>Ulogujte se</button><br>
                </form>
                                    
                <p>Nemate nalog?</p>
                <div id="registrationPage">
                <form action="registration.php" id="register" method="post">
                <button>Registrujte se</button>
                </form>
                </div>
            </div>
            
            <div id="logInImg"><img src="../pics/logo.jpg" alt="#"></div>
            
        </div>
                <div id="copy"><p>Copyright&copy; BorisTech</p></div>
    </div>
    <!-- end of logIn and registration forms -->
     
    
    
</body>
</html>