<?php
function validanString($str)
{
    if(strpos($str, "=")!==false) return false;
    if(strpos($str, " ")!==false) return false;
    if(strpos($str, "(")!==false) return false;
    if(strpos($str, ")")!==false) return false;
    if(strpos($str, "'")!==false) return false;
    if(strpos($str, "/")!==false) return false;
    return true;
}

function login()
{
    if(isset($_SESSION['users_id']) and isset($_SESSION['users_name']) and isset($_SESSION['users_status']))
        return true;
    elseif(isset($_COOKIE['users_id']) and isset($_COOKIE['users_name']) and isset($_COOKIE['users_status']))
    {
        $_SESSION['users_id']=$_COOKIE['users_id'];
        $_SESSION['users_name']=$_COOKIE['users_name'];
        $_SESSION['users_status']=$_COOKIE['users_status'];
        return true;
    }
    else
        return false;
    
}
function unistiSesiju()
{
    session_unset();
    session_destroy();
    setcookie("users_id", "", time()-1,"/");
    setcookie("users_name", "", time()-1,"/");
    setcookie("users_status", "", time()-1,"/");
}
function napraviSesiju($red)
{
    $_SESSION['users_id']=$red->users_id;
    $_SESSION['users_name']="$red->users_name $red->users_lastname";
	$_SESSION['users_status']=$red->users_status;
	if(isset($_POST['remember']))
	{
		setcookie("users_id", $red->users_id, time()+86400,"/");
		setcookie("users_name", "$red->users_name $red->users_lastname", time()+86400,"/");
	    setcookie("users_status", $red->users_status, time()+86400,"/");
	}
}
?>