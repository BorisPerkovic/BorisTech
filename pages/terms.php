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
            include("navigation.php");
        ?>
          
    <!-- end of navigation of categories-->

    <!-- main of onlineShopTerms -->
<div class="container">
            <h2 class="text-center">Uslovi korišćenja</h2>
            <p><b>Pažnja:</b> molimo vas da pažljivo pročitate uslove korišćenja pre upotrebe internet sajta ili aplikacije BorisTech. Korišćenjem našeg internet sajta ili aplikacije potvrđujete da ste pročitali, razumeli i prihvatili ove uslove korišćenja (u daljem tekstu: Uslovi). BorisTech Beograd zadržava pravo da u bilo kom trenutku izmeni Uslove unošenjem izmena u ovaj tekst. Predlažemo da s vremena na vreme posetite ovu internet stranicu i proverite da li su se Uslovi možda promenili od vaše poslednje posete.
            Sadržaji objavljeni na internet sajtu ili aplikaciji BorisTech, vlasništvo su BorisTech Beograd i mogu se upotrebljavati samo u nekomercijalne svrhe, pri čemu se moraju poštovati i sva navedena upozorenja o autorskim pravima. Nije dozvoljeno menjati sadržaj ovog sajta niti aplikacije ni na koji način, niti ga reprodukovati ili javno prikazivati, izvoditi, distribuirati ili na drugi način koristiti u javne ili komercijalne svrhe. Ukoliko želite da koristite sadržaje objavljene na ovom internet sajtu ili aplikaciji u druge svrhe od ovde navedenih potrebno je da nas kontaktirate radi dobijanja dozvole.</p>
            <h3>Kada koristite naš internet sajt ili aplikaciju nije dozvoljeno da:</h3>
            <ul>
                <li>Ometate ili onemogućavate bilo koje funkcije povezane sa sigurnošću na sajtu ili funkcije koje sprečavaju ili ograničavaju upotrebu ili kopiranje dostupnog sadržaja</li>
                <li>Objavljujete ili prenosite na internet sajt ili na aplikaciju svaki materijal koji je preteći, klevetnički, nepristojan, uvredljiv, pornografski ili zlostavljački. Takođe materijal kojim možete inicirati rasnu mržnju, uzrokujete uznemiravanje ili bilo koje neprijatnosti usled kršenja privatnosti, poverenja određenim diskriminacionim, pretećim ili izazivačkim komentarima</li>
                <li>Dajete netačne informacije koje se tiču ličnih podataka u vašem profilu</li>
                <li>Koristite tuđe lične podatke bez dozvole te osobe ili lažno predstavljate da istupate u ime trećeg lica, firme ili organizacije</li>
                <li>Bavite se bilo kojim nezakonitim ili protivpravnim ponašanjem</li>
                <li>Modifikujete, ometate, presrećete ili hakujete internet sajt ili aplikaciju u cilju njihovog onesposobljavanja</li>
                <li>Koristite specijalizovane programe radi preuzimanja sadržaja sa sajta ili aplikacije</li>
            </ul>
            <p>Ako prekršite bilo koji od ovih Uslova mi Vas možemo sprečiti da koristite ovaj internet sajt ili aplikaciju na stalnom ili privremenom nivou. Mi možemo preduzeti i druge mere, uključujući ali ne ograničavajući se na to da Vas prijavimo nadležnim državnim organima, pošaljemo upozorenje ili podnesemo tužbu.</p>
       
</div>
    <!-- end of main of onlineShopTerms -->

    <!--footer-->
        <?php
            include("_footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>