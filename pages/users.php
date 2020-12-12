<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
require_once("../php/classLog.php");
$db=new Baza();
$db->connect();
$answer="";
if(!login())
{
	echo "Nemate pravo pristupa ovoj stranici<br>Vratite se na početnu!!<br>";
	echo "<a href='../index.php'>Početna</a>";
	exit();
}
if($_SESSION['users_status']!="Administrator")
{
    echo "Nemate pravo pristupa ovoj stranici<br>Vratite se na početnu!!<br>";
    echo "<a href='../index.php'>Početna</a>";
    exit();
}
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
    <title>BorisTech | Korisnici</title>
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
		<h1>UPRAVLJANJE KORISNICIMA</h1>
		</div>
	</div>
    <!--end central1-->

    <!--forms-->
	<div id="servis">
		<div class="wrapper">
		<h2>Korisnici</h2>
            <p>Izaberite korisnika za izmenu</p>
            <div id="korisnici"></div>
        <hr>
        <p>Sva polja su obavezna</p>
        <form action="#" method="POST" class="forma">
            <input type="text" name="users_id" id="users_id" placeholder="Unesite ID" disabled><br><br>
            <input type="text" name="users_name"  id="users_name" placeholder="Unesite ime"><br><br>
            <input type="text" name="users_lastname"  id="users_lastname" placeholder="Unesite prezime"><br><br>
            <input type="text" name="users_email"  id="users_email" placeholder="Unesite email"><br><br>
            <input type="password" name="users_password"  id="users_password" placeholder="Unesite lozinku"><br><br>
            <input type="password" name="confirm_password"  id="confirm_password" placeholder="Ponovite lozinku"><br><br>
            <select name="users_status" id="users_status">
                <option value="">--Izaberite status--</option>
                <option value="Administrator">Administrator</option>
                <option value="Direktor">Direktor</option>
                <option value="Menadžer">Menadžer</option>
				<option value="Dostavljač">Dostavljač</option>
                <option value="Prodavac">Prodavac</option>
            </select><br><br>
            <input type="text" name="users_addres" id="users_addres" placeholder="Unesite adresu"><br><br>
            <input type="text" name="users_phone"  id="users_phone" placeholder="Unesite telefon"><br><br>
        </form>
            
            <button id="clean">Očistite polja</button> <button id="record">Snimi korisnika</button> <button id="delete">Obriši korisnika</button><br><br>
    <div id="answer"></div>
        </div>
	</div>
    <!--footer-->
        <?php
            include("footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>