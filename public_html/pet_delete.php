<?php
session_start();
include_once("bd.php");

$login=$_SESSION['login'];
    $query = ("SELECT * FROM polzovateli WHERE login='$login'");
    $sql = mysql_query($query) or die(mysql_error());
    $user=mysql_fetch_assoc($sql);
    $user_id=$user['id'];
    $pet_id=$_GET['pet'];
    $query=("SELECT * FROM pats WHERE id='$pet_id' AND parent='$user_id'");
    $sql = mysql_query($query) or die(mysql_error());
    if (mysql_num_rows($sql) == 0){
        echo'error';
        return;
    }
    $sql = mysql_query($query) or die(mysql_error());
    $pet = mysql_fetch_assoc($sql);
    $query=("DELETE FROM pats WHERE id='$pet_id'");
    $sql = mysql_query($query) or die(mysql_error());

    Header("Location: pats.php");
?>