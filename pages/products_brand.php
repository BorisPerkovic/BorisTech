<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
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
<!-- header where is logo, search, login and registry-->
<?php
        include("header.php");
    ?>
<!-- end of header where is logo, search, login and registry-->

<!-- navigation of categories-->
    <?php
        include("navigation.php");
    ?>      
<!-- end of navigation of categories-->

<!-- main part where is all kind of products depends on chosen brand-->        
<main id="main">
<?php
$category=$_GET['kategorija'];
$brand=$_GET['brand'];
?>
<div class="wrapper">

<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-bottom: 25px;">
                <h3 class="text-center" id="filter_category"><?= $category ?></h3>
                <div class="text-center">
                        <img src="../pics/loading.gif" id="loader" width="200" style="display: none;">
                </div> 
        </div>
                
</div>
                           
 <!--filters for products brand depend of chosen category from index page-->
<div class="row">

        <!-- Left side with filters-->
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-12">
                <h6 class="text-info">Brand</h6>
                <ul class="list-group">
                <?php
                        $sql="SELECT DISTINCT products_brand FROM specification WHERE category='{$category}' ORDER BY products_brand";
                        $result=$db->query($sql);
                        while($row=$db->fetch_assoc($result))
                        {
                ?>
                        <li class="list-group-item checkbox">
                                <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input common_selector brand" value="<?php echo $row['products_brand'];  ?>"> <?php echo $row['products_brand'];  ?>
                                </label>     
                                </div>
                        </li>
                <?php         
                        }
                ?>
                </ul>
        </div>

        <!-- Right side with showing products-->
        <div class="col-xl-10 col-lg-10 col-md-8 col-sm-8 col-12">
        <div class="row" id="result" style="padding-bottom: 95px;">
        <?php
        $sql="SELECT * FROM specification WHERE category='{$category}' AND products_brand='{$brand}'";
        $result=$db->query($sql);
        while($row=$db->fetch_assoc($result))
        {
        ?>
                <!--Products cards-->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 filter_data">
                        <div class="card-deck">
                        <div class="card  shadow border-light">
                                <img id="product" class="card-img-top" src='../pics/<?= $row['specification_id'];?>,v.jpg' alt='Responsive image'>
                                <div class="card-body">
                                <h5 class="card-title text-danger"><?= $row['price'];?> RSD</h5>
                                <p>
                                        <?= $row['products_brand']; ?><br>
                                        <?= $row['products_model']; ?><br>
                                </p>
                                <span class="viewMore"><a class="btn btn-warning btn-block " href="../<?= $row['category'] ?>/<?= $row['specification_id'] ?>">Više&nbsp;&raquo;</a></span>
                                </div>
                        </div>
                        </div>
                </div>
        <?php
        }
        ?>
        </div>
        </div>

</div>    

</main>
<!--footer-->
<?php
        include("footer.php");
?>
<!--end footer-->


          
</body>
</html>
