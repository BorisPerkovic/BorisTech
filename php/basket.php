<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
require_once("../php/classLog.php");
$db=new Baza();
$db->connect();
if(login())
{
    if(isset($_GET['productsID']))
    {
        $productsID=$_GET['productsID'];
        $function=$_GET['funkcija'];
        $upit="SELECT * FROM users, specification WHERE users_id='{$_SESSION['users_id']}' AND specification_id='{$productsID}'";
        $rez=$db->query($upit);
        $red=$db->fetch_object($rez);
        $users_id=$_SESSION['users_id'];
        $users_name=$red->users_name;
        $users_lastname=$red->users_lastname;
        $users_email=$red->users_email;
        $users_addres=$red->users_addres;
        $users_phone=$red->users_phone;
        $brand=$red->products_brand;
        $model=$red->products_model;
        if($function=="basket")
        {
            $insert="INSERT INTO basket (users_id, users_name, users_lastname, users_email, users_addres, users_phone, products_brand, products_model ) VALUES ('{$users_id}', '{$users_name}', '{$users_lastname}', '{$red->users_email}', '{$users_addres}', '{$users_phone}', '{$brand}','{$model}') ";
            $db->query($insert);
            Log::upisiLog("../logs/korpa.txt", "{$_SESSION['users_name']} čiji je ID  {$_SESSION['users_id']} je dodao u korpu proizvod {$brand} {$model}");
        }
            
    }
}
else
{
    echo "login";
}

?>