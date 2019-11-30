<?php
session_start();
include_once("bd.php");
date_default_timezone_set('Etc/GMT+5');

if (isset($_SESSION["login"])) {
    $user_login=$_SESSION['login'];
    $priem=$_GET['priem'];
    $day=$_GET['day'];
    $help_me='priem'.$priem;
    $query=("SELECT * FROM June WHERE id='$day'");
    $sql=mysql_query($query) or die(mysql_error());
    $check=mysql_fetch_assoc($sql);
    if ($check[$help_me]!=0){
        echo "<script>alert('Запись занята');</script>";
        echo "<script>document.location.href='record.php?day=$day'</script>";
        return;
    }
    
    
    $query = ("SELECT * FROM polzovateli WHERE login='$user_login'");
    $sql = mysql_query($query) or die(mysql_error());
    $user=mysql_fetch_assoc($sql);
    $user_id=$user['id'];
    $user_name=$user['name'];
    $user_lastname=$user['lastname'];
    $fullusrname=$user_name.' '.$user_lastname;
   

    $query=("SELECT * FROM records where user_id='$user_id' AND record_day='$day'");
    $sql=mysql_query($query) or die(mysql_error());

    $ccc = mysql_fetch_array($sql);


    if (mysql_num_rows($sql) == 0){
        
        switch ($priem){
            case 1: 
            $query=("UPDATE June SET priem1='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="9:00-9:30";
            break;
            case 2: 
            $query=("UPDATE June SET priem2='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="9:30-10:00";
            break;
            case 3: 
            $query=("UPDATE June SET priem3='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="10:00-10:30";
            break;
            case 4: 
            $query=("UPDATE June SET priem4='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="10:30-11:00";
            break;
            case 5: 
            $query=("UPDATE June SET priem5='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="11:00-11:30";
            break;
            case 6: 
            $query=("UPDATE June SET priem6='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="11:30-12:00";
            break;
            case 7: 
            $query=("UPDATE June SET priem7='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="12:00-12:30";
            break;
            case 8: 
            $query=("UPDATE June SET priem8='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="12:30-13:00";
            break;
            case 9: 
            $query=("UPDATE June SET priem9='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="13:00-13:30";
            break;
            case 10: 
            $query=("UPDATE June SET priem10='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="13:30-14:00";
            break;
            case 11: 
            $query=("UPDATE June SET priem11='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="14:00-14:30";
            break;
            case 12: 
            $query=("UPDATE June SET priem12='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="14:30-15:00";
            break;
            case 13: 
            $query=("UPDATE June SET priem13='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="15:00-15:30";
            break;
            case 14: 
            $query=("UPDATE June SET priem14='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="15:30-16:00";
            break;
            case 15: 
            $query=("UPDATE June SET priem15='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="16:00-16:30";
            break;
            case 16: 
            $query=("UPDATE June SET priem16='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="16:30-17:00";
            break;
            case 17: 
            $query=("UPDATE June SET priem17='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="17:00-17:30";
            break;
            case 18: 
            $query=("UPDATE June SET priem18='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="17:30-18:00";
            break;
            case 19: 
            $query=("UPDATE June SET priem19='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="18:00-18:30";
            break;
            case 20: 
            $query=("UPDATE June SET priem20='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="18:30-19:00";
            break;
            case 21: 
            $query=("UPDATE June SET priem21='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="19:00-19:30";
            break;
            case 22: 
            $query=("UPDATE June SET priem22='$user_id' WHERE id='$day'");
            $sql=mysql_query($query) or die(mysql_error());
            $record_time="19:30-20:00";
            break;
        }
        $query = "INSERT INTO records (user_id, record_day, record_time)
  VALUES ('$user_id', '$day', '$record_time')";
  $sql = mysql_query($query) or die(mysql_error());
  echo "<script>alert('Запись добавлена');</script>";


    $subject = "Запись на прием";
    $msg ="Пользователь $fullusrname ($user_login) записался на прием $day июня, на время $record_time";
    mail('dyepell@yandex.ru', $subject, $msg, 'From:zoodoctor@zoochaik.ru');
  echo "<script>document.location.href='cabinet.php'</script>";
    }else{
        echo "<script>alert('У вас уже есть запись на этот день');</script>";
        echo "<script>document.location.href='record.php?day=$day'</script>";
    }

}else{
    echo 'error';
    return;
}
Header("Location: record.php?day=$day");


    
    

?>