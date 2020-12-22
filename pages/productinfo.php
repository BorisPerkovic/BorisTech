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
    <title>Proizvodi | BorisTech</title>
</head>
<body>
    
<!-- header where is logo, search, login and register-->
<?php
        include("header.php");
?>
<!-- end of header where is logo, search, login and register--->

<!-- categories-->
    <?php
        include("navigation.php");
    ?>
        
<!-- end of categories-->

<!-- main products-->
<div class="container" id="product_info">
<?php
if(isset($_GET['sifraProizvoda']) AND isset($_GET['kategorija']))
{
   $id=$_GET['sifraProizvoda']; 
   $category=$_GET['kategorija']; 
}

?>
<?php
    $query="SELECT * FROM specification WHERE category='{$category}' AND specification_id='{$id}'";
    $result=$db->query($query);
    $row=$db->fetch_object($result);
?>
    <!--products info with carousel and basic information-->
        <!--left side with carousel-->
    <div class="row">
        <div class="col-md-5 col-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../pics/<?= $row->specification_id ?>,v.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="../pics/<?= $row->specification_id ?>,m.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        <!--right side with product information-->
        <div class="col-md-6 col-6" id="productInfo">
           <p class="newarrival text-center">NOVO</p> 
           <h2><?= $row->products_brand ?> <?=$row->products_model ?></h2>
           <p>Sifra proizvoda:<span id="product_id"> <?= $row->specification_id ?></span></p>
           <p class="price"><?= $row->price ?> RSD</p>
           <p><b>Dimenzije: <?= $row->dimension ?></b></p>
           <p><b>Boja:</b> <?= $row->color ?></p>
           <p><b>Težina:</b> <?= $row->weight ?></p>
           <button type="button" class="btn btn-warning btn-lg" id="cart"><i class='fas fa-shopping-cart'></i> Dodaj u korpu</a></button>
        </div>
    </div>

    <!--button for show specification and comments on click-->
    <div class="row justify-content-start" id="specComments" style="padding-right: 15px; padding-left: 15px">
            <!--button for show specification on click-->
            <div id="spec">
            <button class="btn btn-warning btn-lg spec">Specifikacije</button>
            </div>
            <!--button for show comments on click-->
            <div id="comments">
                <?php
                //SQL query for number of comments for this product 
                $sql="SELECT * FROM comments WHERE specification_specification_id='{$id}' AND aproved=2";
                $res=$db->query($sql);
                $row=$db->fetch_object($result);
                ?>
                <button class="btn btn-warning btn-lg comments">Komentari (<?= $db->num_rows($res) ?>)</button>
            </div>
    </div>
    <div class="row justify-content-start" id="table" style="padding-right: 15px; padding-left: 15px">
        <!--Table specification-->
        <div class="col-md-6" id="specInfo">
            <?php
                include("../php/_productinfo.php");
            ?>
        </div>
        <div class="col-md-6"  id="commentsInfo">
            <!-- form for insert comments for products -->
            <form action="#"  method="post">
                    <p>Unesite Vaše ime*</p>
                    <input type="text" name="users_name" id="users_name"><br><br>
                    <p>Unesite komentar* ( Maksimalno 200 karaktera )</p>
                    <textarea name="comment" id="comment" cols="100" rows="4"></textarea><br>
                    <button name="button">Pošalji</button>
            </form><br>
                <p>*Napomena- Komentar će postati vidljiv nakon što ga odobri Administrator.</p>
                <?php
                //SQL for inserting comments
                    if(isset($_POST['users_name']) and isset($_POST['comment']))
                    {
                        $users_name=$_POST['users_name'];
                        $comment=$_POST['comment'];
                        if($users_name!="" and $comment!="")
                        {
                            $ask="INSERT INTO comments (specification_specification_id, comment, users_name) VALUES ('{$id}','{$comment}','{$users_name}')";
                            $db->query($ask);
                            Log::upisiLog("../logs/komentari.txt", "{$users_name} je postavio sledeći komentar za proizvod sa ID {$id}: {$comment}");
                        }
                        else{
                            echo "<div class='bg-danger'>Svi podaci su obavezni!!!!</div>";
                        }
                    }
             ?>
                <?php
                    //SQL for comments that have been aprroved and show comments
                    $query="SELECT * FROM comments WHERE specification_specification_id='{$id}' AND aproved=2 ORDER BY comment_time DESC";
                    $result=$db->query($query);
                    while($row=$db->fetch_object($result))
                    {
                ?>
                    <div id="aprroved_comments">
                        <p><b> <?= $row->users_name ?> </b> - <?= $row->comment_time ?></p>
                        <p> <?=$row->comment ?> </p>
                    </div>
                <?php
                    }
                ?>
        </div>
    </div>

</div>
<!-- main products-->

<!--footer-->
    <?php
        include("footer.php");
    ?>
<!--end footer-->
         
</body>
</html>
