<?php
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
          
    <!-- end of navigation of categories-->

    <!-- main of onlineShopTerms -->
<div class="container" style="margin-bottom: 80px;">
            <h2 class="text-center">Načini plaćanja</h2>
            
            <h4>INTERNET KUPOVINA</h4>
            <p><b>1. Plaćanje platnom karticom putem Interneta</b></p>
            <p>Porudžbinu možete platiti putem Interneta platnim karticama VISA, Maestro, MasterCard ili DinaCard koje podržavaju plaćanje preko Interneta.
            Proverite kod banke koja je karticu izdala da li Vaša kartica podržava plaćanje preko Interneta.</p><br>
            <p><b>2. Plaćanje pouzećem</b></p>
            <p>Kod plaćanja pouzećem porudžbinu plaćate prilikom isporuke i tada je moguće platiti:
            -Gotovinom
            -Čekovima mogućnost plaćanja na 12 rata bez kamate (prva rata ide odmah, a ostale narednih 11 meseci).</p><br>
            <p><b>3. Plaćanje preko računa</b></p>
            <p>Svoju porudžbinu možete platiti direktnom uplatom na račun BorisTech, uz obavezno navođenje odgovarajućeg poziva na broj koji se generiše prilikom naručivanja. Plaćanje možete izvršiti standardnom uplatnicom u bilo kojoj pošti ili banci, ili putem Interneta ako imate Internet pristup svom računu (web banking).</p>
           
</div>
    <!-- end of main of onlineShopTerms -->

    <!--footer-->
        <?php
            include("_footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>