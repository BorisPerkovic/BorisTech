 <!-- navigation of categories-->
            <!--when display is lower bars icon show-->
            <div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navi">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
  </button>
        <!-- category button on click function-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown" id="category">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bars"></i> Kategorije
              </a>
        <!-- mega menu container-->
        <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
        <div class="row">
                    <!-- cellPhone category-->
                <div class="col-md-2 menu-part">
                    <h6><a href="products.php?kategorija=Telefoni" class="dropdown-item"><i class="fas fa-mobile-alt"></i> <b>Telefoni</b></a></h6>
                    <?php
                        $upit="SELECT * FROM cellphone";
                        $rez=$db->query($upit);
                        while($red=$db->fetch_object($rez))
                        {
                            echo "<p><a href='products_brand.php?kategorija=Telefoni&brand=$red->cellPhone_brand' class='dropdown-item'>$red->cellPhone_brand</a></p>";
                        }
                        
                    ?> 
                </div>
                    <!-- television catogory-->
                <div class="col-md-2 menu-part">
                    <h6><a href="products.php?kategorija=Televizori" class="dropdown-item"><i class="fas fa-tv"></i> <b>Televizori</b></a></h6>
                    <?php
                        $upit="SELECT * FROM television";
                        $rez=$db->query($upit);
                        while($red=$db->fetch_object($rez))
                        {
                            echo "<p><a href='products_brand.php?kategorija=Televizori&brand=$red->television_brand' class='dropdown-item'>$red->television_brand</a></p>";
                        }
                        
                    ?> 
                </div>
                    <!-- Laptops category-->
                    <div class="col-md-2 menu-part">
                    <h6><a href="products.php?kategorija=Laptopovi" class="dropdown-item"><i class="fas fa-laptop"></i> <b>Laptopovi</b></a></h6>
                    <?php
                        $upit="SELECT * FROM laptops";
                        $rez=$db->query($upit);
                        while($red=$db->fetch_object($rez))
                        {
                            echo "<p><a href='products_brand.php?kategorija=Laptopovi&brand=$red->laptops_brand' class='dropdown-item'>$red->laptops_brand</a></p>";
                        }
                        
                    ?> 
                </div>
                    <!-- audio category-->
                <div class="col-md-2 menu-part">
                    <h6><a href="products.php?kategorija=Audio" class="dropdown-item"><i class="fas fa-volume-up"></i> <b>Audio</b></a></h6>
                    <?php
                        $upit="SELECT * FROM audio";
                        $rez=$db->query($upit);
                        while($red=$db->fetch_object($rez))
                        {
                            echo "<p><a href='products_brand.php?kategorija=Audio&brand=$red->audio_brand' class='dropdown-item'>$red->audio_brand</a></p>";
                        }
                        
                    ?> 
                </div>
                    <!-- photo-camera category-->
                <div class="col-md-2 menu-part">
                    <h6><a href="products.php?kategorija=Foto-Kamere" class="dropdown-item"><i class="fas fa-camera"></i> <b>Foto-Kamere</b></a></h6>
                    <?php
                        $upit="SELECT * FROM photoCamera";
                        $rez=$db->query($upit);
                        while($red=$db->fetch_object($rez))
                        {
                            echo "<p><a href='products_brand.php?kategorija=Foto-Kamere&brand=$red->photoCamera_brand' class='dropdown-item'>$red->photoCamera_brand</a></p>";
                        }
                        
                    ?> 
                </div>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
    <!-- end of navigation of categories and navigation for login-->