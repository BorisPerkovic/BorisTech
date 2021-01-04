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
 <h2 class="text-center">Uslovi online kupovine</h2>
            <p>Poštovani potrošači,
            molimo vas da pažljivo pročitate uslove korišćenja pre upotrebe BorisTech internet sajta. Korišćenjem našeg internet sajta potvrđujete da ste pročitali, razumeli i prihvatili ove uslove korišćenja (u daljem tekstu: Uslovi).
            BorisTech Beograd zadržava pravo da u bilo kom trenutku izmeni Uslove unošenjem izmena u ovaj tekst. Predlažemo da s vremena na vreme posetite ovu internet stranicu i proverite da li su se Uslovi možda promenili od vaše poslednje posete.
            1. Korisnik je svako lice koje pristupa sajtu www.boristech.rs i svim njegovim sadržajima.
            2. Potrošač je fizičko lice koje kupuje proizvod radi namirenja individualnih potreba, a ne radi obavljanja profesionalne delatnosti.
            3. Prodavac u konkretnom slučaju je BorisTech.
            BorisTech na sajtu sadržaje objavljuje u dobroj nameri. Sve sadržaje www.boristech.rs sajta koristite isključivo na vlastitu odgovornost i BorisTech se ne može smatrati odgovornom za bilo kakvu štetu nastalu korišćenjem.
            Sadržaji objavljeni na internet sajtu BorisTech, vlasništvo su BorisTech i mogu se upotrebljavati samo u nekomercijalne svrhe, pri čemu se moraju poštovati i sva navedena upozorenja o autorskim pravima.
            Sadržaj prikazan na ovom sajtu kao što su stranice, dizajnerski elementi (dugmići, ikonice i sl), tekstovi, logotipi, audio zapisi i softver su vlasništvo BorisTech i ne mogu se koristiti bez prethodne saglasnosti.
            Nije dozvoljeno menjati sadržaj ovog sajta ni na koji način, niti ga reprodukovati ili javno prikazivati, izvoditi, distribuirati ili na drugi način koristiti u javne ili komercijalne svrhe. Ukoliko želite da koristite sadržaje objavljene na ovom internet sajtu u druge svrhe od ovde navedenih potrebno je da nas kontaktirate radi dobijanja dozvole.</p>
            <h3>Uputstvo za online kupovinu</h3>
            <ul>
                <li>Registrujte se da biste mogli da naručite proizvode. Registracija se vrši popunjavanjem Formulara za registraciju;</li>
                <li>Kada pronađete proizvod koji želite da naručite, kliknite na njegovu sličicu ili naziv pored sličice da uđete na stranu sa detaljnim prikazom ili na dugme "Poruči" ukoliko želite odmah da kupite;</li>
                <li>Na strani sa detaljnim prikazom kliknite dugme "Poruči" da biste ubacili proizvod za kupovinu;</li>
                <li>Vaša porudžbenica je uspešno kreirana. Ukoliko je naručena roba dostupna i spremna za realizaciju naše saradnje naš operater će Vas kontaktirati u roku ne dužem od jednog radnog dana od trenutka prijema narudžbenice radi provere ispravnosti Vaših podataka i potvrde narudžbenice. Trenutni status Vaše porudžbine je – na čekanju. Status Vaše porudžbine možete proveriti kroz Vaš nalog na sajtu.</li>
            </ul>
            <p>Na sajtu BorisTech nije moguće obaviti kupovinu i kao gost, odnosno bez registracije.</p>
            <h3>Cene</h3>
            <p>Sve cene navedene na sajtu su finalne na dan porudžbine i u njih je uključen PDV. Sve cene su date u dinarima.
            Po zaključenju porudžbine na sajtu, dobićete e-mail potvrdu porudžbine. Ovaj e-mail sadrži vaše podatke, koje ste ostavili prilikom poručivanja. Tek nakon dostavljanja potvrde od strane BorisTech na mail potrošača, ugovor o prodaji se smatra zaključenim. U slučaju da nismo u mogućnosti da potvrdimo porudžbinu i zaključimo ugovor, bićete obavešteni.</p>
            <h3>Odustanak od ugovora</h3>
            <p>Potrošač ima pravo da odustane od ugovora zaključenog na daljinu, odnosno izvan poslovnih prostorija u roku od 15 dana od dana od dana dostavljanja naručenog proizvoda, bez navođenja razloga.
            Potrošač ostvaruje pravo na odustanak od ugovora izjavom koju može dati na posebnom obrascu za odustanak od ugovora zaključenog na daljinu odnosno izvan poslovnih prostorija, koji se dostavlja na mail potrošača, a isti možete preuzeti i ovde.
            Potrošač je dužan da proizvod vrati bez odlaganja, a najkasnije u roku od 15 dana od dana kada je poslao obrazac za odustanak. Po isteku roka od 15 dana od dana kada je poslao obrazac za odustanak, proizvod se više ne može vratiti. Troškove povraćaja robe u slučaju odustanka snosi potrošač. Roba se vraća na adresu navedenu na obrascu za odustanak.
            Moguće je vratiti samo proizvode koji su neoštećeni i, po mogućnosti, u originalnoj ambalaži, sa svim dodacima i propratnom dokumentacijom (garantni list, uputstva, itd.).
            Po prijemu proizvoda, utvrdiće se da li je proizvod ispravan i neoštećen. Potrošač je isključivo odgovoran za umanjenu vrednost robe koja nastane kao posledica rukovanja robom na način koji nije adekvatan, odnosno prevazilazi ono što je neophodno da bi se ustanovili priroda, karakteristike i funkcionalnost robe. Procenat oštećenja utvđuje ovlašćeno lice u BorisTech, te se za utvrđeni procenat umanjuje iznos koji se vraća potrošaču. Ukoliko se utvrdi da je nastupila neispravnost ili oštećenje proizvoda krivicom kupca u tolikoj meri da se proizvod više ne može prodavati, odbiće se vraćanje cene i proizvod će mu biti vraćen na njegov trošak.
            Prodavac je u slučaju zakonitog odustanka od ugovora dužan da kupcu bez odlaganja vrati iznos koji je kupac platio po osnovu ugovora, a najkasnije u roku od 14 dana od dana kada je primio obrazac za odustanak. Prodavac može da odloži povraćaj sredstava dok ne dobije robu koja se vraća, ili dok kupac ne dostavi dokaz da je poslao robu Prodavcu u zavisnosti od toga šta nastupa prvo.
            U slučaju vraćanja robe i povraćaja sredstava kupcu koji je prethodno platio nekom od platnih kartica putem interneta, delimično ili u celosti, a bez obzira na razlog vraćanja, BorisTech je u obavezi da povraćaj vrši isključivo preko VISA i Maestro metoda plaćanja, što znači da će banka na zahtev prodavca obaviti povraćaj sredstava na račun korisnika kartice. U slučaju plaćanja gotovinom, potrošaču se gotovina i vraća.</p>
            <h3>Zabrana zloupotrebe sajta</h3>
            <p>Korisnicima našeg internet sajta nije dozvoljeno da:</p>
            <ul>
                <li>Ometaju i/ili onemogućavaju bilo koje funkcije povezane sa sigurnošću na sajtu ili funkcije koje sprečavaju ili ograničavaju upotrebu ili kopiranje dostupnog sadržaja;</li>
                <li>Objavljuju i/ili prenose na internet sajt svaki materijal koji je preteći, klevetnički, nepristojan, uvredljiv, pornografski ili zlostavljački. Takođe materijal kojim se može inicirati rasnu mržnju, uzrokujete uznemiravanje ili bilo koje neprijatnosti usled kršenja privatnosti, poverenja određenim diskriminacionim, pretećim ili izazivačkim komentarima.</li>
                <li>Daju netačne informacije koje se tiču ličnih podataka;</li>
                <li>Koriste tuđe lične podatke bez dozvole te osobe ili lažno predstavljaju da istupaju u ime trećeg lica, firme ili organizacije;</li>
                <li>Bave se bilo kojim nezakonitim ili protivpravnim ponašanjem koristeći naš sajt;</li>
                <li>Modifikuju, ometaju, presreću ili hakuju internet sajt u cilju njegovog onesposobljavanja;</li>
                <li>Koriste specijalizovane programe radi preuzimanja sadržaja sa sajta.</li>
                <p>Ukoliko se prekrši bilo koji od navedenih Uslova mi korisnika možemo onemogućiti da koristi ovaj internet sajt na stalnom ili privremenom nivou. Takođe, možemo preduzeti i druge mere, uključujući ali ne ograničavajući se na to da prijavimo nadležnim organima.</p>
            </ul>
 </div>

    <!--footer-->
        <?php
            include("_footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>