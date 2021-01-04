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
<div class="container">
            <h2 class="text-center">Reklamacije, saobraznost i garancija</h2>
            <p>Poštovani potrošači, u skladu sa Zakonom o zaštiti potrošača (u daljem tekstu: Zakon) BorisTech odgovara za nesaobraznost robe koju prodaje u periodu od 2 (dve) godine od datuma vaše kupovine. Zakonska odgovornost BorisTech ne postoji ako isporučena roba:</p>
            <ul>
                <li>odgovara opisu koji je dao prodavac i ako ima svojstva robe koju je prodavac pokazao potrošaču kao uzorak ili model;</li>
                <li>ima svojstva potrebna za naročitu upotrebu za koju je potrošač nabavlja, a koja je bila poznata prodavcu ili mu je morala biti poznata u vreme zaključenja ugovora;</li>
                <li>ima svojstva potrebna za redovnu upotrebu robe iste vrste</li>
                <li>po kvalitetu i funkcionisanju odgovara onome što je uobičajeno kod robe iste vrste i što potrošač može osnovano da očekuje s obzirom na prirodu robe i javna obećanja o posebnim svojstvima robe data od strane prodavca, proizvođača ili njihovih predstavnika, naročito ako je obećanje učinjeno putem oglasa ili na ambalaži robe.</li>
            </ul>
            <p>BorisTech ne preuzima nikakvu odgovornost za podatke na računaru, hard disku ili bilo kom drugom uređaju koji služi za smeštanje podataka.
            Garancija predstavlja izjavu proizvođača kojom se potrošaču garantuju veća prava nego što je to propisano Zakonom. Dokumentacija za ostvarivanje prava po osnovu garancije se obično nalazi u originalnom pakovanju proizvoda. Ukoliko davalac garancije predviđa da se za ostvarivanje prava mora registrovati ili ulogovati na određeni sajt, potrošač je dužan da postupi po uputstvima davaoca garancije, kako bi ostvario pravo na istu.
            Za uređaje za koje proizvođač ne nudi posebne pogodnosti (npr. ispravno funkcionisanje stvari u periodu dužem od 2 godine) BorisTech nije u obavezi da izda garantni list. Garancija predstavlja voljni korak izdavaoca (proizvođača ili trgovca) kojim on nudi posebne pogodnosti za potrošača, ali isključivo veće od zakonom predviđenih.</p>
            <h3>Postupak reklamacije</h3>
            <p>Potrošač izjavljuje reklamaciju radi ostvarivanja prava po osnovu saobraznosti, garancije, pogrešno obračunate cene i drugih nedostataka lično u bilo kom od naših maloprodajnih objekata.
            U svakom našem maloprodajnom objektu postoji posebno određeno i obeleženo mesto i osobe zadužene za reklamacije kojoj se potrošač može obratiti i izjaviti reklamaciju.
            Obaveza potrošača jeste da prilikom izjavljivanja reklamacije priloži račun, kopiju računa, ugovor o prodaji na daljinu ili bilo koji drugi dokaz o kupovini, kao i da preda uređaj u bilo kom maloprodajnom objektu, ukoliko nije u pitanju uređaj bele tehnike.
            Iako Zakon ne predviđa obavezu da potrošač čuva ambalažu, niti je to uslov za rešavanje reklamacije niti razlog za odbijanje otklanjanja nesaobraznosti, naša preporuka je da ambalažu sačuvate radi obezbeđenja sigurnijeg transporta robe u ovlašćeni servis.</p><br>
            <p>Za uređaje bele tehnike:</p><br>
            <p>U slučaju da je u pitanju bela tehnika, <b>UREĐAJI SE NE DONOSE</b> u maloprodajni objekat već potrošač može reklamaciju izjaviti na sledeće načine:</p>
            <ul>
                <li>pozivanjem broja: 069/ 538 24 77</li>
                <li>slanjem e-mail-a na mail: borisperkovic89@yahoo.com</li>
            </ul><br>
            <p>BorisTech će poslati servisera na adresu potrošača kako bi se utvrdilo da li je reklamacija osnovana.<br>
            <b>VAŽNA NAPOMENA:</b> Obratite pažnju na uslove koje proizvođač propisuje u garantnom listu izdatom za ispravno funkcionisanje stvari u periodu dužem od 2 (dve) godine, jer je moguće da kao poseban uslov koji kupac mora da poštuje bude navedeno i čuvanje ambalaže ili registracija na sajtu.
            Nakon što izjavite reklamaciju na jedan od predviđenih načina i dostavite dokaz o kupovini i uređaj, osim u slučaju bele tehnike, dobićete pisanu potvrdu ili elektronskim putem će vam biti potvrđen prijem reklamacije, odnosno saopšten broj pod kojim je vaša reklamacija zavedena u evidenciji primljenih reklamacija. Nakon toga BorisTech o svom trošku, iz maloprodajnog objekta, šalje reklamiranu robu u ovlašćeni servis koji je jedini merodavan da proceni da li je roba saobrazna ugovoru ili nije. Ako se reklamacija ulaže za veće uređaje bele tehnike, ovlašćeni servis će o trošku BorisTech izaći na teren radi utvrđivanja nesaobraznosti i eventualne popravke. Nakon prijema nalaza od strane ovlašćenog servisa, a u roku od 8 dana od dana prijema reklamacije, pisanim ili elektronskm putem ćemo vam odgovoriti na izjavljenu reklamaciju.
            U slučaju da se reklamacija prihvata, ista će biti rešena u periodu od 15 dana od dana podnošenja reklamacije, odnosno u periodu od 30 dana od dana podnošenja reklamacije ukoliko je u pitanju tehnička roba u skladu sa vašim zahtevom. Uređaje pristigle sa servisa, a za koje je reklamacija prihvaćena, BorisTech vraća potrošaču. Potrošač je dužan da svoj uređaj preuzme ili omogući njegovo dostavljanje najkasnije u roku od 30 dana od trenutka kada je dobio obaveštenje da je roba popravljena i spremna za preuzimanje - isporuku. Nakon isteka tog perioda smatraće se da se potrošač na nesumnjiv način odrekao prava svojine na uređaju, te isti prelaze u svojinu Tehnomanije, u skladu sa Zakonom o osnovama svojinskopravnih odnosa ("Sl. list SFRJ", br. 6/80 i 36/90, "Sl. list SRJ", br. 29/96 i "Sl. glasnik RS", br. 115/2005 - dr. zakon).
            Ako se reklamacija ne prihvata (npr. slučajevi fizičkog oštećenja ne spadaju u nesaobraznost), potrošač snosi troškove slanja robe na servis i troškove dijagnostike kvara prema cenovniku ovlašćenog servisa.
            Pravo na reklamaciju i besplatno servisiranje od strane BorisTech potrošač gubi u slučaju neadekvatnog rukovanja uređajem i njegovim korišćenjem koje nije u skladu sa uputstvom za upotrebu, kao i u slučaju da su vršene bilo kakve popravke ili pokušaji popravki od strane neovlašćenih lica.
            Posle isteka zakonskog roka saobraznosti robe (2 godine), potrošač je sam odgovoran za slanje robe na servis i snosi troškove slanja, primanja robe i popravke. Spisak servisa isporučuje se zajedno sa dokumentacijom koja ide uz robu a pojedini proizvođači daju samo podatke o centralnom ovlašćenom servisu koji kupca dalje preusmerava na njemu najbliži ovlašćeni servis.
            BorisTech će rado izaći u susret potrošačima i pomoći im oko informacija o servisima posle isteka zakonskog perioda saobraznosti.</p>
         
</div>
    <!-- end of main of onlineShopTerms -->

    <!--footer-->
        <?php
            include("_footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>