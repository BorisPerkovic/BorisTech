<!-- main part where is all kind of products -->
        
<main id="main">
<?php
$category=$_GET['kategorija'];
?>
<div class="conrainer-fluid" style="padding-left: 15px; padding-right: 15px;">

<div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h3 class="text-center" id="filter_category"><?= $category ?></h3>
                <hr>
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
        <div class="row" id="result">
        <?php
        $sql="SELECT * FROM specification WHERE category='{$category}'";
        $result=$db->query($sql);
        while($row=$db->fetch_assoc($result))
        {
        ?>
                <!--Products cards-->
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6 filter_data">
                        <div class="card-deck">
                        <div class="card  border-secondary">
                                <img id="product" class="card-img-top" src='../pics/<?= $row['specification_id'];?>,v.jpg' alt='Responsive image'>
                                <div class="card-body">
                                <h5 class="card-title text-danger"><?= $row['price'];?> RSD</h5>
                                <p>
                                        <?= $row['products_brand']; ?><br>
                                        <?= $row['products_model']; ?><br>
                                </p>
                                <span class="viewMore"><a class="btn btn-warning btn-block " href="productinfo.php?kategorija=<?= $row['category'] ?>&sifraProizvoda=<?= $row['specification_id'] ?>">Više&nbsp;&raquo;</a></span>
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
                        
                
                
</div>

</main>
