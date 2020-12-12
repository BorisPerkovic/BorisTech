<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
require_once("../php/classLog.php");
$db=new Baza();
$db->connect();
if(isset($_POST['users_id']) AND isset($_POST['old_password']) AND isset($_POST['change_password']) AND isset($_POST['repeat_password']))
{
    $users_id=$_POST['users_id'];
    $old_password=$_POST['old_password'];
    $change_password=$_POST['change_password'];
    $repeat_password=$_POST['repeat_password'];
    $sql="SELECT * FROM users WHERE  users_id='{$users_id}'";
    $res=$db->query($sql);
    $row=$db->fetch_object($res);
    if($old_password!=$row->users_password)
    {
        echo "lozinka";
    }
    elseif($change_password!=$repeat_password)
    {
        echo "novalozinka";
    }
    else
    {
        $query="UPDATE users SET users_password='{$change_password}', confirm_password='{$repeat_password}' WHERE users_id='{$users_id}'";
        $db->query($query);
        Log::upisiLog("../logs/profili.txt", "$row->users_name $row->users_lastname $row->users_email je uspešno izmenio svoju lozinku. Nova lozinka je $change_password");
    }
}
?>