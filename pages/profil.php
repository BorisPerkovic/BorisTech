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
    <title>Profil | BorisTech</title>
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
          
    <!-- end of navigation of categories-->
<div class="container" id="users_data">
    <h2 class="text-center">Lični podaci</h2>
    <div class="row">
        <?php
            $sql="SELECT * FROM users WHERE users_id='{$_SESSION['users_id']}'";
            $res=$db->query($sql);
            $row=$db->fetch_object($res);
        ?>
        <div class="col-md-5">
            <div class="table-responsive-sm">
                <table class="table">
                    <tr>
                       <th>Broj naloga</th>
                       <td id="acc_number"><?= $row->users_id ?><td> 
                    </tr>
                    <tr>
                       <th>Ime</th>
                        <td><?= $row->users_name ?><td> 
                    </tr>
                    <tr>
                       <th>Prezime</th>
                        <td><?= $row->users_lastname ?><td> 
                    </tr>
                    <tr>
                       <th>E-mail</th>
                        <td><?= $row->users_email ?><td> 
                    </tr>
                    <tr>
                       <th>Adresa</th>
                        <td><?= $row->users_addres ?><td> 
                    </tr>
                    <tr>
                       <th>Telefon</th>
                        <td><?= $row->users_phone ?><td> 
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
    <button class="btn btn-dark" id="personal_data">Izmenite lične podatke</button> <button class="btn btn-dark" id="personal_pass">Izmenite lozinku</button>
</div>

<div class="container" id="users_dataChange">
    <h2 class="text-center">Izmena ličnih podataka</h2>
    <div class="row">
        <div class="col-md-5">
            <div class="table-responsive-sm" id="data_table">
                
            </div>
        </div>
    </div>
    <button class="btn btn-dark" id="data_save">Sačuvaj izmene</button> <button class="btn btn-dark" id="data_back">Nazad</button>
</div>
<div class="container" id="users_passChange">
    <h2 class="text-center">Izmena lozinke</h2>
    <div class="row" id="users_password">
        <div class="col-md-5">
            <div class="table-responsive-sm" id="pass_table">
                <table class="table">
                    <tr>
                        <th>Stara lozinka</th>
                        <td><input type="password" name="old_password" id="old_password"></td>
                    </tr>
                    <tr>
                        <th>Nova lozinka</th>
                        <td><input type="password" name="change_password" id="change_password"></td>
                    </tr>
                    <tr>
                        <th>Ponovite novu lozinku</th>
                        <td><input type="password" name="repeat_password" id="repeat_password"></td>
                    </tr>
                </table><br><br>
                <button class="btn btn-dark" id="pass_save">Sačuvaj izmene</button> <button class="btn btn-dark" id="pass_back">Nazad</button>
            </div>
        </div>
    </div>
</div>
</div>
<hr>
<div class="container">
    <h2 class="text-center">Vaši kupljeni proizvodi</h2>
        <div class="row" id="result">
            <?php
                $query="SELECT * FROM orders WHERE accepted=2 AND users_id='{$_SESSION['users_id']}' ORDER BY shop_time DESC";
                $result=$db->query($query);
                while($row=$result->fetch_assoc())
                {
            ?>
            <!--Products cards-->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 filter_data">
                <div class="card-deck">
                    <div class="card shadow border-light">
                        <img id="product" class="card-img-top" src='../pics/<?= $row['specification_id'];?>,v.jpg' alt='Responsive image'>
                        <div class="card-body">
                            <p>Brand: <?= $row['products_brand']; ?></p>
                            <p>Model: <?= $row['products_model']; ?></p>
                            <p>Datum: <?= $row['shop_time']; ?></p>
                            <p>Broj porudžbine: #<?= $row['basket_id']; ?></p>
                            <p>Cena prozivoda: <?= $row['price'];?> RSD</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                };
            ?>
        </div>
</div>
    <!--footer-->
        <?php
            include("footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>