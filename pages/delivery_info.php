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
    <script src="../jscript/jquery-3.5.0.js"></script>
    <script src="../jscript/_jscriptFunctions.js"></script>
    <link href="../css/icons/all.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <title>Korpa | BorisTech</title>
</head>
<body>
        <?php
            //SQL for delete or order prducts from basket
            include("../php/orders.php");
        ?>
    <!-- header where is logo, search, viber, whatsup-->
        <?php
            include("header.php");
        ?>
    <!-- end of header where is logo, search, viber, whatsup-->

    <!-- navigation of categories and navigation for login-->
        <?php
            include("navigation.php");
        ?>
          
    <!-- end of navigation of categories-->

    <!-- main of onlineShopTerms -->
<div class="container">
            <h2 class="text-center">Načini isporuke</h2>
            <h3>Obaveza pregleda uređaja</h3>
            <p>Molimo Vas da prilikom isporuke, a pre potpisivanja primopredajnog dokumenta pregledate uređaj i da sva eventualno uočena oštećenja robe unesete u zapisnik koji Vam je vozač dostavio i da se ODMAH, a najkasnije U ROKU OD 24H obratite službi reklamacija BorisTech na broj telefona <b>069/ 538 24 77</b>. Reklamacije na oštećenja koje su izjavljene protekom roka od 24h od isporuke će biti odbijene kao neblagovremene. Posebno ističemo da uređaje koji imaju fizička oštećenja niste u obavezi da primite.</p>
            <h3>Isporuka robe na teritoriji Beograda</h3>
                <ul>
                    <li>Za sve porudžbine na užoj teritoriji Beograda, BorisTech vrši besplatnu isporuku za porudžbine čija je minimalna vrednost <b>2000 RSD.</b></li>
                    <li>Za sve porudžbine čija je vrednost <b>ispod</b> 2000 RSD, isporuka se vrši putem kurirske službe; troškove isporuke snosi kupac i oni iznose <b>240 RSD</b></li>
                    <li>Isporuke se vrše <b>beskontaktno</b> jer brinemo o vašem i o našem zdravlju. U skladu sa vanrednim stanjem u državi, a u cilju prevencije, isporuka uređaja vršiće se u narednom periodu do ulaznih vrata kuće odnosno stana. Uređaji se isporučuju ispred ulaznih vrata i po želji primaoca otpakuju i pregledaju na licu mesta.</li>
                    <li>U zavisnosti od raspoložive količine određenog artikla i mogućnosti njegovog nabavljanja, a u skladu sa našom poslovnom politikom, očekivani rok isporuke proizvoda iz naše ponude je do 7 radnih dana.</li>
                    <li>Isporuke robe se vrše radnim danima do 16h (kurirska služba), dok Tehnomanijina vozila vrše isporuku radnim danima do 13h, a dodatno i subotom do 12h.</li>
                    <li>Kupac je dužan da prilikom isporuke a pre potpisivanja primopredajnog dokumenta pregleda uređaj i da sva eventualno uočena oštećenja robe unese u zapisnik koji mu je vozač dostavio i da se odmah obrati službi reklamacija BorisTech na broj telefona <b>069/538 24 77</b></li>
                </ul>
            <h3>Isporuka na teritoriji Srbije</h3>
                <ul>
                    <li>Isporuka robe na teritoriji Srbije realizuje se preko kurirske službe</li>
                    <li>Za sve porudžbine čija je vrednost <b>ispod</b> 2000 RSD, isporuka se vrši putem kurirske službe; troškove   isporuke snosi kupac i oni iznose <b>240 RSD</b></li>
                    <li>Isporuke se vrše <b>beskontaktno</b> jer brinemo o vašem i o našem zdravlju. U skladu sa vanrednim stanjem u državi, a u cilju prevencije, isporuka uređaja vršiće se u narednom periodu do ulaznih vrata kuće odnosno stana. Uređaji se isporučuju ispred ulaznih vrata i po želji primaoca otpakuju i pregledaju na licu mesta.</li>
                    <li>U zavisnosti od raspoložive količine određenog artikla i mogućnosti njegovog nabavljanja, a u skladu sa našom poslovnom politikom, očekivani rok isporuke proizvoda iz naše ponude je do 7 radnih dana.</li>
                    <li>Isporuke robe se vrše radnim danima do 16h (kurirska služba), dok Tehnomanijina vozila vrše isporuku radnim danima do 13h, a dodatno i subotom do 12h.</li>
                    <li>Kupac je dužan da prilikom isporuke a pre potpisivanja primopredajnog dokumenta pregleda uređaj i da sva eventualno uočena oštećenja robe unese u zapisnik koji mu je vozač dostavio i da se odmah obrati službi reklamacija BorisTech na broj telefona <b>069/538 24 77</b></li>
                </ul>
    
</div>
    <!-- end of main of onlineShopTerms -->

    <!--footer-->
        <?php
            include("footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>