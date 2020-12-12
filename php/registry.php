<?php
require_once("function.php");
require_once("classBase.php");
require_once("classLog.php");
$db=new Baza();
$db->connect();
$status="";
if(isset($_POST['name']) and isset($_POST['lastname']) and isset($_POST['email']) and isset($_POST['pass']) and isset($_POST['passrepeat']) and isset($_POST['addres'])and isset($_POST['phone']))
{
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $passrepeat=$_POST['passrepeat'];
    $addres=$_POST['addres'];
    $phone=$_POST['phone'];
    if($name!="" and $lastname!="" and $email!="" and $pass!="" and $passrepeat!="")
    {   
       if($pass==$passrepeat)
        {
          $sql="INSERT INTO users (users_name, users_lastname, users_email, users_password, confirm_password, users_status, users_addres, users_phone) VALUES ('{$name}', '{$lastname}', '{$email}', '{$pass}', '{$passrepeat}', '{$status}', '{$addres}','{$phone}') ";
            $db->query($sql);
            echo "Uspeh";
            Log::upisiLog("../logs/korisnici.txt", "$name $lastname $email se uspešno registrovao kao novi korisnik");
        }
        else
            echo"Lozinka"; 
        
    }
    else
        echo "Niste uneli sve podatke!!";
}

?>
