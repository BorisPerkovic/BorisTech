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
        <?php
            //SQL for delete or order prducts from basket
            include("../php/orders.php");
        ?>
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

<div class="container" style="margin-bottom: 330px;">
        <h2 class="text-center">Korpa</h2>
            
    <div class="row" style="margin: 25px 5px 0px 0px;">
        

            <?php
            //SQL for showing cart products
            $query="SELECT * FROM orders WHERE accepted=1 AND users_id='{$_SESSION['users_id']}'";
            $result=$db->query($query);
            if($db->num_rows($result)==0)
            {         
                echo "<div style='padding: 80px; '>Vaša korpa je prazna. Nemate proizvoda u korpi!!</div>";
            }
            else
            {
                echo "<table class='table text-center'>
                        <thead>
                            <tr>
                            <th scope='col'>Šifra proizvoda</th>
                            <th scope='col'>Slika proizvoda</th>
                            <th scope='col'>Naziv proizvoda</th>
                            <th scope='col'>Cena</th>
                            </tr>
                        </thead>
                        <tbody>";
                while($row=$db->fetch_object($result))
                {
                    echo "<tr>
                     <th scope='row'>#$row->specification_id</th>
                            <td><img id='cartIMG' src='pics/$row->specification_id,v.jpg' alt='Responsive image'></td>
                            <td>$row->products_brand $row->products_model</td>
                            <td> $row->price RSD</td>
                            <td><a href='?id=$row->basket_id' title='obrisi iz korpe'><i class='fas fa-times cart-trash'></i></a></td>
                        </tr>";
                }
                            
                    echo "</tbody>
                    </table>";
            ?>
                <div class='d-flex justify-content-between cart-padding'>
                        <div style="margin-right: 20px;">
                            <a href='?funkcija=poruci'><button class='btn btn-warning'>Poručite</button></a>
                        </div>   

                        <div>
                        <?php
                            //SQL query for sum price of ordered products
                                $sql="SELECT SUM(price) AS sum FROM orders WHERE users_id='{$_SESSION['users_id']}' AND accepted=1";
                                $res=$db->query($sql);
                                $red=$db->fetch_object($res);
                                echo "<h5>Ukupna cena porudžbine: <b>".$red->sum." RSD</b></h5>";
                        ?>
                        </div>
                    </div>
            <?php       
            }
                
            ?>
        
                
    </div>
        
</div>



    <!--footer-->
        <?php
            include("_footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>