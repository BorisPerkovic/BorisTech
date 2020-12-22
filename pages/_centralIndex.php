<!-- main part where is all kind of products -->
    <!--Product over the middle IMG-->
<div class="container headline">
        <h2 class="text-center textChange">Izdvajamo iz ponude</h2>
</div>
<div class="container-fluid">
    <div class="wrapper">

        <div class="row" id="result">
            <?php
                $sql="SELECT * FROM specification ORDER BY rand() LIMIT 12";
                $result=$db->query($sql);
                while($row=$result->fetch_assoc())
                {
            ?>
            <!--Products cards-->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 filter_data">
                <div class="card-group">
                    <div class="card  shadow border-light">
                        <img id="product" class="card-img-top img-fluid" src='pics/<?= $row['specification_id'];?>,v.jpg' alt='Responsive image'>
                        <div class="card-body">
                            <h5 class="card-title text-danger"><?= $row['price'];?> RSD</h5>
                            <p class="card-text">
                                <?= $row['products_brand']; ?><br>
                                <?= $row['products_model']; ?><br>
                            </p>
                          <span class="viewMore"><a class="btn btn-warning btn-block " href="<?= $row['category'] ?>/<?= $row['specification_id'] ?>">Više&nbsp;&raquo;</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                };
            ?>
        </div>
    </div>
</div>      
                <!-- middle IMG-->
<div class="container-fluid">
    <div class="wrapper">
        <img class="middle" src="pics/72_14011.jpg" alt="">
    </div>
    
</div>

    <!--Products above middle IMG-->
    <div class="container headline">
        <h2 class="text-center textChange">Najprodavanije</h2>
    </div>
<div class="container-fluid">
    <div class="wrapper">
        <div class="row" id="result">
            <?php
                $sql="SELECT * FROM specification ORDER BY rand() LIMIT 12";
                $result=$db->query($sql);
                while($row=$result->fetch_assoc())
                {
            ?>
            <!--Products cards-->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 filter_data">
                <div class="card-deck">
                    <div class="card  shadow border-light">
                        <img id="product" class="card-img-top img-fluid" src='pics/<?= $row['specification_id'];?>,v.jpg' alt='Responsive image'>
                        <div class="card-body">
                            <h5 class="card-title text-danger"><?= $row['price'];?> RSD</h5>
                            <p>
                                <?= $row['products_brand']; ?><br>
                                <?= $row['products_model']; ?><br>
                            </p>
                          <span class="viewMore"><a class="btn btn-warning btn-block " href="<?= $row['category'] ?>/<?= $row['specification_id'] ?>">Više&nbsp;&raquo;</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                };
            ?>
        </div>
            </div>
</div>
<!-- end of main part where is all kind of products -->