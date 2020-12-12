<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
require_once("../php/classLog.php");
$db=new Baza();
$db->connect();
if(isset($_POST['users_id']) AND isset($_POST['users_name']) AND isset($_POST['users_lastname']) AND isset($_POST['users_email']) AND isset($_POST['users_addres']) AND isset($_POST['users_phone']) AND isset($_POST['users_password']))
{
    $users_id=$_POST['users_id'];
    $users_name=$_POST['users_name'];
    $users_lastname=$_POST['users_lastname'];
    $users_email=$_POST['users_email'];
    $users_addres=$_POST['users_addres'];
    $users_phone=$_POST['users_phone'];
    $users_password=$_POST['users_password'];
    $sql="SELECT * FROM users WHERE  users_id='{$users_id}'";
    $res=$db->query($sql);
    $row=$db->fetch_object($res);
    if($users_password!=$row->users_password)
    {
        echo "lozinka";
    }
    else
    {
        $query="UPDATE users SET users_name='{$users_name}', users_lastname='{$users_lastname}', users_email='{$users_email}', users_addres='{$users_addres}', users_phone='{$users_phone}', users_password='{$users_password}' WHERE users_id='{$users_id}'";
        $db->query($query);
        Log::upisiLog("../logs/profili.txt", "$users_name $users_lastname $users_email je uspešno izmenio svoje podatke");
    }
}
?>