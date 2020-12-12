<?php
    if(isset($_GET['funkcija']) AND isset($_GET['idKomentara']))
    {
        $funkcija=$_GET['funkcija'];
        $id=$_GET['idKomentara'];
        if($funkcija=="dozvoli")
        {
            $upit="UPDATE comments SET aproved=2 WHERE comments_id=$id";
            $db->query($upit);
            Log::upisiLog("../logs/odobravanja.txt", "{$_SESSION['users_name']} je dozvolio komentar broj $id");
        } 
        else
        {
            $upit="DELETE FROM comments WHERE comments_id=$id";
            $db->query($upit);
            Log::upisiLog("../logs/odobravanja.txt", "{$_SESSION['users_name']} je obrisao komentar broj $id");
        }
            
        
    }
?>