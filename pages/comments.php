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
    <title>Komentari | BorisTech</title>
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

        <?php
            //SQl function for aprrove or delete comments
            include("../php/comments.php");
        ?>
    <div class="container">
        <h2 class="text-center">Komentari koji treba da se odobre / obrišu</h2>
        <?php
        //SQL query for comments that have to aprove or delete
          $query="SELECT * FROM comments WHERE aproved=1 ORDER BY comment_time DESC";
          $result=$db->query($query);
          if($db->num_rows($result)!=0)
          {
              while($row=$db->fetch_object($result))
              {
        ?>
                <div class="bg-warning cart-padding">
                    <p>komentar broj: <span class="comment_number"><?= $row->comments_id ?></span></p>
                    <p><b> <?= $row->users_name ?></b> - <?= $row->comment_time ?></p>
                    <p> <?= $row->comment ?></p>
                    <a href='comments.php?funkcija=dozvoli&idKomentara=<?=$row->comments_id?>'><button class="btn btn-dark">dozvoli komentar</button></a>  <a href='comments.php?funkcija=obrisi&idKomentara=<?=$row->comments_id?>'><button class="btn btn-dark">obriši komentar</button></a>
                </div>
        <?php
              }
          }
          else
            echo "<div style='padding: 80px;'>Nemate nijedan komentar za odobravanje!!</div>";
                  
         ?>      
        
            
        
    </div>     
    

    <!--footer-->
        <?php
            include("footer.php");
        ?>
	<!--end footer-->


          
</body>
</html>