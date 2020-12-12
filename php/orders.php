<?php
 if(isset($_GET['funkcija']))
 {
     $function=$_GET['funkcija'];
     $sql="UPDATE basket SET accepted=2 WHERE accepted=1 AND users_id='{$_SESSION['users_id']}'";
     $db->query($sql);
     Log::upisiLog("../logs/kupovine.txt", "{$_SESSION['users_name']} je uspešno izvršio kupovinu");
 }
 elseif(isset($_GET['id'])) 
 { 
     $id=$_GET['id'];
     $sql="DELETE FROM basket WHERE accepted=1 AND basket_id='{$id}'";
     $db->query($sql);
     Log::upisiLog("../logs/kupovine.txt", "{$_SESSION['users_name']} je obrisao proizvod iz kupovine");
 }

?>