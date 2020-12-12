<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
require_once("../php/classLog.php");
$db=new Baza();
$db->connect();
$message="";
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/icons/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i,700,700i&display=swap&subset=cyrillic-ext,latin-ext" rel="stylesheet">
    <script src="../jscript/jquery-3.5.0.js"></script>
    <script src="../jscript/users.js"></script>
    <script src="../jscript/_search.js"></script>
    <title>BorisTech | Registracija</title>
</head>
<body>
    
    <!-- header where is logo, search, viber, whatsup-->
        <?php
            include("header.php");
        ?>
    <!-- end of header where is logo, search, viber, whatsup-->

    <!-- navigation of categories and navigation for login-->
        <?php
            include("navigation.php");
        ?>
          
    <!-- end of navigation of categories and navigation for login-->

    <!-- main of users -->
    
    <!-- end of main of users -->
    <div id="users">
		<div class="wrapper">
        <h1>Registracija</h1>
        <p>*Svi podaci su obavezni</p>
		</div>
	</div>
    <!--end central1-->

    <!-- registration forms-->
        <?php
            include("../php/_registration.php");
        ?>
	<div id="servis">
		<div class="wrapper">
            <form action="#" method="POST" class="forma">
                <input type="text" name="users_name"  id="users_name" placeholder="Unesite ime"><br><br>
                <input type="text" name="users_lastname"  id="users_lastname" placeholder="Unesite prezime"><br><br>
                <input type="text" name="users_email"  id="users_email" placeholder="Unesite email"><br><br>
                <input type="password" name="users_password"  id="users_password" placeholder="Unesite lozinku"><br><br>
                <input type="password" name="confirm_password"  id="confirm_password" placeholder="Ponovite lozinku"><br><br>
                <input type="text" name="users_addres" id="users_addres" placeholder="Unesite adresu"><br><br>
                <input type="text" name="users_phone"  id="users_phone" placeholder="Unesite telefon"><br><br>
                <button name="record" id="record">Registrujte se</button>
                <p><?= $message ?></p>
            </form><br><br>
        </div>
	</div>
    
    <!-- end of registration forms-->

    <!--footer-->
        <?php
            include("footer.php");
        ?>
	<!--end footer-->

          
</body>
</html>