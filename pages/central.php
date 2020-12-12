<!-- main part where is all kind of products -->
        
<main id="main">
<?php
$category=$_GET['kategorija'];
?>
<div class="conrainer-fluid">
   <div class="row">
        <div class="col-lg-2">
                <!-- Left side with filters-->
                <h3>Filter proizvoda</h3>
                <hr>
                        <!--filters for products brand depend of chosen category from index page-->
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
        <div class="col-lg-10">
        
                <h3 class="text-center" id="filter_category"><?= $category ?></h3>
                <hr>
                <div class="text-center">
                        <img src="../pics/loading.gif" id="loader" width="200" style="display: none;">
                </div>      
                <div class="row filter_data" id="result">
                <?php
                  $sql="SELECT * FROM specification WHERE category='{$category}'";
                  $result=$db->query($sql);
                  while($row=$db->fetch_assoc($result))
                  {
                ?>
                <!--Products cards-->
                <div class="col-md-3 mb-1">
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

</main>
