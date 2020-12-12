<!-- main part where is all kind of products -->
    <!--Product over the middle IMG-->
<div class="container headline">
        <h2 class="text-center" id="textChange">Izdvajamo iz ponude</h2>
        <hr>
</div>
<div class="container-fluid">
    <div class="log-lg-9">
        <div class="row" id="result">
            <?php
                $sql="SELECT * FROM specification ORDER BY rand() LIMIT 12";
                $result=$db->query($sql);
                while($row=$result->fetch_assoc())
                {
            ?>
            <!--Products cards-->
            <div class="col-md-2 mb-1">
                <div class="card-deck">
                    <div class="card  border-secondary">
                        <img id="product" class="card-img-top" src='pics/<?= $row['specification_id'];?>,v.jpg' alt='Responsive image'>
                        <div class="card-body">
                            <h5 class="card-title text-danger"><?= $row['price'];?> RSD</h5>
                            <p>
                                <?= $row['products_brand']; ?><br>
                                <?= $row['products_model']; ?><br>
                            </p>
                          <span class="viewMore"><a class="btn btn-warning btn-block " href="pages/productinfo.php?kategorija=<?= $row['category'] ?>&sifraProizvoda=<?= $row['specification_id'] ?>">Više&nbsp;&raquo;</a></span>
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
    <img class="middle" src="pics/72_14011.jpg" alt="">
</div>

    <!--Products above middle IMG-->
    <div class="container headline">
        <h2 class="text-center" id="textChange">Najprodavanije</h2>
        <hr>
</div>
<div class="container-fluid">
    <div class="log-lg-9">
        <div class="row" id="result">
            <?php
                $sql="SELECT * FROM specification ORDER BY rand() LIMIT 12";
                $result=$db->query($sql);
                while($row=$result->fetch_assoc())
                {
            ?>
            <!--Products cards-->
            <div class="col-md-2 mb-1">
                <div class="card-deck">
                    <div class="card  border-secondary">
                        <img id="product" class="card-img-top" src='pics/<?= $row['specification_id'];?>,v.jpg' alt='Responsive image'>
                        <div class="card-body">
                            <h5 class="card-title text-danger"><?= $row['price'];?> RSD</h5>
                            <p>
                                <?= $row['products_brand']; ?><br>
                                <?= $row['products_model']; ?><br>
                            </p>
                          <span class="viewMore"><a class="btn btn-warning btn-block " href="pages/productinfo.php?kategorija=<?= $row['category'] ?>&sifraProizvoda=<?= $row['specification_id'] ?>">Više&nbsp;&raquo;</a></span>
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