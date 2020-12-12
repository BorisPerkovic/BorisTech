<?php
session_start();
require_once("classLog.php");
$db=mysqli_connect("localhost","root", "boris2020", "boristech");
if(mysqli_connect_error())
{
    echo "GRESKA!!!!<br>".mysqli_connect_error();
    exit;
}
mysqli_query($db, "SET NAMES UTF8");
$salt="lmQQBq5MqhyN";
$funkcija=$_GET['funkcija'];
if($funkcija=="update"){
    $id=$_POST['users_id'];
    $name=$_POST['users_name'];
    $lastname=$_POST['users_lastname'];
    $email=$_POST['users_email'];
    $password=$_POST['users_password'].$salt;
    $confirm_password=$_POST['confirm_password'].$salt;
    $status=$_POST['users_status'];
    $addres=$_POST['users_addres'];
    $phone=$_POST['users_phone'];
    if($id=="" or $name=="" or $lastname=="" or $email=="" or $confirm_password=="")
    {
        echo "Niste uneli sve podatke!!";
        exit;
    }
    elseif($password!=$confirm_password)
    {
        echo "Lozinka i ponovljena lozinka se ne poklapaju!!";
    }
    $sql="UPDATE users SET users_name='{$name}', users_lastname='{$lastname}', users_email='{$email}', users_password='{$password}', confirm_password='{$confirm_password}', users_status='{$status}', users_addres='{$addres}', users_phone='{$phone}' WHERE users_id={$id} ";
    mysqli_query($db, $sql);
    if(mysqli_error($db))
    {
        echo "GRESKA!!!!<br>".mysqli_error($db);
    }
    else
    {
        echo "Izmenjeno korisnika: ".mysqli_affected_rows($db);
        Log::upisiLog("../logs/korisnici.txt", "{$_SESSION['users_name']} je izmenio korisnika {$name} {$lastname} sa ID {$id} ");
        exit;
    }
         
}
if($funkcija=="insert"){
    $name=$_POST['users_name'];
    $lastname=$_POST['users_lastname'];
    $email=$_POST['users_email'];
    $password=$_POST['users_password'].$salt;
    $confirm_password=$_POST['confirm_password'].$salt;
    $status=$_POST['users_status'];
    $addres=$_POST['users_addres'];
    $phone=$_POST['users_phone'];
    if($name=="" or $lastname=="" or $email=="" or $password=="" or $confirm_password=="")
    {   
        echo "Niste uneli sve podatke!!";
        exit;
    }
    elseif($password!=$confirm_password)
    {
        echo "Lozinka i ponovljena lozinka se ne poklapaju!!";
        exit;
    }
    $sql="INSERT INTO users (users_name, users_lastname, users_email, users_password, confirm_password, users_status, users_addres, users_phone) VALUES ('{$name}', '{$lastname}', '{$email}', '{$password}', '{$confirm_password}', '{$status}', '{$addres}','{$phone}') ";
    mysqli_query($db, $sql);
    if(mysqli_error($db))
    {
        echo "GRESKA!!!!<br>".mysqli_error($db);
    }
    else
    {
        echo "Dodato korisnika: ".mysqli_affected_rows($db);
        Log::upisiLog("../logs/korisnici.txt", "{$_SESSION['users_name']} je dodao novog korisnika {$name} {$lastname} {$email} ");
    }    
}
if($funkcija=="delete")
{
    $id=$_POST['users_id'];
    if($id=="")
    {
        echo "Niste izabrali korisnika za brisanje!!!";
        exit;
    }
    $sql="DELETE FROM users WHERE users_id={$id}";
    mysqli_query($db, $sql);
        if(mysqli_error($db))
        {
            echo "GRESKA!!!!<br>".mysqli_error($db);
        }
        else
        {
            echo "Obrisano korisnika: ".mysqli_affected_rows($db);
            Log::upisiLog("../logs/korisnici.txt", "{$_SESSION['users_name']} je obrisao korisnika sa ID {$id} ");
        }
	
}
?>