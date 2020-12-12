<?php
session_start();
require_once("../php/function.php");
require_once("../php/classBase.php");
require_once("../php/classLog.php");
$db=new Baza();
$db->connect();
if(isset($_POST['users_id']))
{
    $users_id=$_POST['users_id'];
    $sql="SELECT * FROM users WHERE  users_id='{$users_id}'";
    $res=$db->query($sql);
    $row=$db->fetch_object($res);
?>
    <table class="table">
        <tr>
            <th>Broj naloga</th>
            <td><input type="text" name="users_id" id="users_id" value="<?= $row->users_id ?>"></td>
        </tr>
        <tr>
            <th>Ime</th>
            <td><input type="text" name="users_name" id="users_name" value="<?= $row->users_name ?>"></td>
        </tr>
        <tr>
            <th>Prezime</th>
            <td><input type="text" name="users_lastname" id="users_lastname" value="<?= $row->users_lastname ?>"></td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td><input type="email" name="users_email" id="users_email" value="<?= $row->users_email ?>"></td>
        </tr>
        <tr>
            <th>Adresa</th>
            <td><input type="text" name="users_addres" id="users_addres" value="<?= $row->users_addres ?>"></td>
        </tr>
        <tr>
            <th>Telefon</th>
            <td><input type="text" name="users_phone" id="users_phone" value="<?= $row->users_phone ?>"></td>
        </tr>
        <tr>
            <th>Otkucajte lozinku</th>
            <td><input type="password" name="users_password" id="users_password"></td>
        </tr>
    </table>
<?php
}
?>