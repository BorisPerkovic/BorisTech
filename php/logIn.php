<?php
session_start();
require_once("function.php");
require_once("classBase.php");
require_once("classLog.php");
if(isset($_GET['logoff']))
{
    Log::upisiLog("../logs/logovanja.txt", "Uspešna odjava korisnika {$_SESSION['users_name']}");
    unistiSesiju();
    header("location: ../Početna");
    
}
$db=new Baza();
$db->connect();
if(isset($_POST["username"]) and isset($_POST["password"]))
{
    $salt="lmQQBq5MqhyN";
    $username=$_POST["username"];
    $password=$_POST["password"];
    if(validanString($username) and validanString($password))
    {
        $sql="SELECT * FROM users WHERE users_email='{$username}'";
        $rez=$db->query($sql);
        if($db->num_rows($rez)>0)
        {
            $red=$db->fetch_object($rez);
            if($password==$red->users_password)
            {
                napraviSesiju($red);
                Log::upisiLog("../logs/logovanja.txt", "{$_SESSION['users_name']} se uspešno ulogovao");
                header("location: ../index.php");
            }
            else
            {
                echo "Lozinka";
                Log::upisiLog("../logs/logovanja.txt", "Pogrešna lozinka {$username} - otkucana lozinka je {$password}, poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
            }
        }
        else
        {
            echo "Email";
            Log::upisiLog("../logs/logovanja.txt", "Pogrešno korisničko ime {$username} - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
        }
    }
    else
    {
        echo "Karakter";
        Log::upisiLog("../logs/logovanja.txt", "Nedozvoljeni karakteri od strane {$username} - poslato sa IP adrese - ".$_SERVER['REMOTE_ADDR']);
    }
    
}
else
{
    echo "Svi podaci su obavezni!!";
}
?>
