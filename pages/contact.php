

    <!-- main of onlineShopTerms -->
    <div id<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
require_once("../php/classLog.php");
$db=new Baza();
$db->connect();
?>
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="jscript/jquery-3.5.0.js"></script>
    <script src="jscript/jscriptFunctions.js"></script>
    <link href="css/icons/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Korpa | BorisTech</title>
</head>
<body>
    <!-- header where is logo, search, viber, whatsup-->
        <?php
            include("_header.php");
        ?>
    <!-- end of header where is logo, search, viber, whatsup-->

    <!-- navigation of categories and navigation for login-->
        <?php
            include("_navigation.php");
        ?>
<div class="container">
            <h3 class="text-center">Call Centar</h3>
            <p><b>Telefon:</b> 069/538 24 77 (važi za pozive iz svih mreža)</p><br>
            <p><b>Email adresa:</b></p><br>
            <ul>
                <li><b>Fizička lica:</b>prodaja@boristech.rs</li>
                <li><b>Pravna lica:</b>corporate@boristech.rs</li>
            </ul><br>
            <p><b>Radno vreme Call Centra:</b> ponedeljak - petak od 8 do 20h; subota od 9 do 16h; nedelja neradni dan</p><br>
            <p>Putem Call Centra BorisTech možete da:</p><br>
            <ul>
                <li>izvršite naručivanje robe</li>
                <li>informišete se o načinima plaćanja, radnom vremenu i uslovima isporuke</li>
                <li>dobijete ostale informacije u vezi kupovine u BorisTech</li>
            </ul>
            <h3>Ponude</h3>
            <p>Ukoliko ste zainteresovani za poslovnu saradnju sa nama ili nudite određenu robu ili usluge, molimo Vas kontaktirajte nas na sledeći email: <b>ponude@boristech.rs</b> </p>
            <h3>Zaposlenje</h3>
            <p>Ukoliko želite da se pridružite timu BorisTech prijavite se za posao na email <b>posao@boristech.rs</b></p>
</div>
    <!-- end of main of onlineShopTerms -->

    <!--footer-->
        <?php
            include("_footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>