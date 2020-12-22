<!-- header where is logo, search, log in or register-->
<header style="padding-left: 15px; padding-right: 15px;">

<div class="container-fluid header">
    <div class="wrapper">

    <div class="row d-flex justify-content-lg-between">

        <!--Company logo-->
        <div class="col-xl-2 col-lg-3">
            <a class="navbar-brand" href="../Početna"><img src="../pics/logo.jpg" alt="logo"></a>
        </div>
        
        <!--Search input field-->
        <div class="col-xl-7 col-lg-6 margin" id="searchinput">
            <input id="searchText" name="search" class="form-control form-control-md mr-sm-2" type="search" placeholder="Unesite termin za pretragu..." aria-label="Search">
            <div id="searchList">
                    
            </div>
        </div>
        <?php
            //IF user is login buttons for login and registry are hide and show users name lastname status and shhoping cart
        if (login())
        {
            $sql="SELECT * FROM basket WHERE accepted=1 AND users_id='{$_SESSION['users_id']}'";
            $res=$db->query($sql);
            $rouw=$db->fetch_object($res);
            if($_SESSION['users_status']=="Administrator" )
            {
        ?>      
                <div class="btn-group profil">
                    <button type="button" class="btn btn-link profil-text dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo "{$_SESSION['users_name']} ({$_SESSION['users_status']}) <i class='fas fa-shopping-cart'></i> ".$db->num_rows($res); ?> 
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profil-link">
                        <button class="dropdown-item" type="button"><a href="basket.php">Korpa <?= $db->num_rows($res) ?></a></button>
                        <button class="dropdown-item" type="button"><a href="profil.php">Moj profil</a></button>
                        <button class="dropdown-item" type="button"><a href="comments.php">Komentari</a></button>
                        <button class="dropdown-item" type="button"><a href="logs.php">Logovi</a></button>
                        <button class="dropdown-item" type="button"><a href="logIn.php?logoff">Odjavite se</a></button>
                    </div>
                </div>

            <?php
                // IF users login have no status show users name lastname and shopping cart
            }
            else
            {
            ?>
                <div class="btn-group profil">
                    <button type="button" class="btn btn-link profil-text dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo "{$_SESSION['users_name']} <i class='fas fa-shopping-cart'></i> ".$db->num_rows($res); ?> 
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profil-link">
                        <button class="dropdown-item" type="button"><a href="basket.php">Korpa <?= $db->num_rows($res) ?></a></button>
                        <button class="dropdown-item" type="button"><a href="profil.php">Moj profil</a></button>
                        <button class="dropdown-item" type="button"><a href="../php/logIn.php?logoff">Odjavite se</a></button>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        }
        else
        {
        ?>
            <!--Buttons in header for login or register if user is not login-->
        <div class="col-xl-2 col-lg-3 margin" id="logreg">
            <ul class='nav'>
                    <li class='nav-item justify-content-right'>
                    <a href='' class='btn btn-warning log' data-toggle='modal' data-target='#signinPage'>Prijava</a>
                    </li>
                    <li class='nav-item'>
                    <a href='' class='btn btn-warning log' data-toggle='modal' data-target='#signupPage'>Registracija</a>
                    </li>
                </ul>
        </div>
        <?php
        }
        ?>
    </div>

    </div>

</div>
            <!--Modal-->
<!-- Log in Page Content-->
<div class="modal fade" id="signinPage">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header text-center">
                <h4 class="modal-title text-center w-100 font-weight-bold">Prijava</h4>
                <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button>
            </div>
            <div class="modal-body mx-4">
                <div class="md-form">
                    <input type="email" name="username" id="username" class="form-control validate" placeholder="E-mail">
                </div>
                <div class="md-form" >
                    <input type="password" name="password" id="password" class="form-control validate" placeholder="Šifra">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input">
                        <label class="form-check-label d-flex">Zapamti me</label>
                    </div>
                    <p class="font-small blue-text d-flex justify-content-center"><a href="" class="blue-text ml-1">Zaboravljena lozinka?</a></p>
                </div>

            </div>

            <div class="modal-footer d-flex justify-content-center">
                <a href="#" class="btn btn-warning btn-block log" id="logIn">Ulogujte se</a>
            </div>
        </div>
    </div>
</div>

<!-- Registry Page Content-->
<div class="modal fade" id="signupPage">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header text-center">
                <h4 class="modal-title text-center w-100 font-weight-bold">Registracija</h4>
                <button type="button" class="close" data-dismiss="modal" aria-lable="close">&times;</button>
            </div>
            <div class="modal-body mx-4">
                <div class="md-form">
                    <input type="text" name="name" id="name" class="form-control validate" placeholder="Ime">
                </div>
                <div class="md-form">
                    <input type="text" name="lastname" id="lastname" class="form-control validate" placeholder="Prezime">
                </div>
                <div class="md-form">
                    <input type="email" name="email" id="email" class="form-control validate" placeholder="E-mail">
                </div>
                <div class="md-form">
                    <input type="password" name="pass" id="pass" class="form-control validate" placeholder="Šifra">
                </div>
                <div class="md-form">
                    <input type="password" name="passrepeat" id="passrepeat" class="form-control validate" placeholder="Ponovite šifru">
                </div>
                <div class="md-form">
                    <input type="text" name="addres" id="addres" class="form-control validate" placeholder="Adresa">
                </div>
                <div class="md-form">
                    <input type="text" name="phone" id="phone" class="form-control validate" placeholder="Telefon">
                </div>

            </div>

            <div class="modal-footer d-flex justify-content-center">
                <a href="#" class="btn btn-warning btn-block log" id="registry">Registrujte se</a>
            </div>
        </div>
    </div>
</div>
</header>
    <!-- end of header where is logo, search, log in or register-->