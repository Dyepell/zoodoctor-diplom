<?php
session_start();
include_once("bd.php");
include "functions.php";
session_check();
if (isset($_POST['log_out'])){
  log_out();
}

?>
<!doctype html5>

<link rel="shortcut icon" href="img\logo.ico" type="image/x-icon">



  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img\logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

    
    <title>zoochaik</title>
  </head>

 
  <body>

  <div class="container-fluid " style="background:#8cecdc; text-align:center; margin-bottom:10px;">
<div class="row" style='color: #656565; font-size:150%;' >
  <div class="col-sm-4 col-md-2" style='text-align-center; margin-right:10px; margin-top:15px;margin-bottom:5px;'><a href="index.php"><img src="/img/full_logo.png" alt="" width='150px' height='50px' style='cursor: pointer;' ></a> </div>
  <div class="col-sm-2 col-md-4" style='text-align:center;margin-top:25px;'><img src="/img/metka.png" alt="" height='30px;' style='margin-top:-12px;'> г. Чайковский, Кабалевского, 24</div>
  <div class="col-sm-2 col-md-5"style='margin-top:25px;'>Тел.<a href="tel:+79097269449" class="links"> 8-909-72-69-449</a></div>
</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="cabinet.php">Кабинет</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="pats.php">Питомцы <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="schedule.php">Запись на прием</a>
      </li>
      <li class="nav-item">
      <form action="cabinet.php" method="POST">
        <div class="polya">
            <button class="nav-link" style=' background:none; border:0px;margin-top:8px;' name="log_out">Выход</button>
            </div>
        </div>  
      </form>
      </li>
    </ul>
  </div>
</nav>
  
  
  <div class="navigation-wrapper">
    <div class="n-button" title="Меню" ><span class='mtext'>Меню</span>
      <i class="fa fa-bars"></i>
    </div>
    <div class="navigation-menu">
        <ul style="margin-right:-200px;">
        <li ><a href="index.php">Главная</a></li>
          <li><a href="uslugi.php">Услуги</a></li>
          <li><a href="tovari.php">Товары</a></li>

          <?php 
            if (isset($_SESSION["login"])) {
              echo "<li class='nav-item'>
              <li><a href='cabinet.php'>Личный кабинет</a></li>";
          }else{
              echo "<li><a href='reg.php'>Регистрация</a></li>
              <li><a href='log_in.php'>Вход</a></li>";
          }
            ?>
            
          <li><a href="https://vk.com/zoodokchaik" style='color:#4a76a8;'>Мы Вконтакте</a></li>
          
      </ul>
    </div>
  </div>
  
  
</div>
<script>
    var navButton = document.querySelector('.n-button');
var navMenu = document.querySelector('.navigation-menu');
var win = window;

function openMenu(event) {
  
  navButton.classList.toggle('active');
  navMenu.classList.toggle('active');

  event.preventDefault();
  event.stopImmediatePropagation();
}
  
function closeMenu(event) {
  if (navButton.classList.contains('active')) {
    navButton.classList.remove('active');
    navMenu.classList.remove('active');
  }
}
  navButton.addEventListener('click', openMenu, false);

win.addEventListener('click',closeMenu, false);
    
</script>
<?php
  $login=$_SESSION['login'];
	$query = ("SELECT * FROM polzovateli WHERE login='$login'");
  $sql = mysql_query($query) or die(mysql_error());
  $user=mysql_fetch_assoc($sql);
  $day_id=$_GET['day'];
  $day_query = mysql_query("SELECT * FROM June WHERE id='$day_id'") or die(mysql_error());
  $day_result = mysql_fetch_assoc($day_query);

  if($day_result['doctor']==1){
    $color='#ff806d';
}
if($day_result['doctor']==2){
    $color='#66c456';
}
if($day_result['doctor']==3){
    $color='#6d75ff';
}
if(date('m')>($day_result['id']+2)){
    $color='#d8d8d8';
}
$priem1_color='#d8d8d8';
$priem2_color='#d8d8d8';
$priem3_color='#d8d8d8';
$priem4_color='#d8d8d8';
$priem5_color='#d8d8d8';
$priem6_color='#d8d8d8';
$priem7_color='#d8d8d8';
$priem8_color='#d8d8d8';
$priem9_color='#d8d8d8';
$priem10_color='#d8d8d8';
$priem11_color='#d8d8d8';
$priem12_color='#d8d8d8';
$priem13_color='#d8d8d8';
$priem14_color='#d8d8d8';
$priem15_color='#d8d8d8';
$priem16_color='#d8d8d8';
$priem17_color='#d8d8d8';
$priem18_color='#d8d8d8';
$priem19_color='#d8d8d8';
$priem20_color='#d8d8d8';
$priem21_color='#d8d8d8';
$priem22_color='#d8d8d8';

if($day_result['priem1']!=0){
    $priem1_color='#ff806d';
}
if($day_result['priem2']!=0){
    $priem2_color='#ff806d';
}
if($day_result['priem3']!=0){
    $priem3_color='#ff806d';
}
if($day_result['priem4']!=0){
    $priem4_color='#ff806d';
}
if($day_result['priem5']!=0){
    $priem5_color='#ff806d';
}
if($day_result['priem6']!=0){
    $priem6_color='#ff806d';
}
if($day_result['priem7']!=0){
    $priem7_color='#ff806d';
}
if($day_result['priem8']!=0){
    $priem8_color='#ff806d';
}
if($day_result['priem9']!=0){
    $priem9_color='#ff806d';
}
if($day_result['priem10']!=0){
    $priem10_color='#ff806d';
}
if($day_result['priem11']!=0){
    $priem11_color='#ff806d';
}
if($day_result['priem12']!=0){
    $priem12_color='#ff806d';
}
if($day_result['priem13']!=0){
    $priem13_color='#ff806d';
}
if($day_result['priem14']!=0){
    $priem14_color='#ff806d';
}
if($day_result['priem15']!=0){
    $priem15_color='#ff806d';
}
if($day_result['priem16']!=0){
    $priem16_color='#ff806d';
}
if($day_result['priem17']!=0){
    $priem17_color='#ff806d';
}
if($day_result['priem18']!=0){
    $priem18_color='#ff806d';
}
if($day_result['priem19']!=0){
    $priem19_color='#ff806d';
}
if($day_result['priem20']!=0){
    $priem20_color='#ff806d';
}
if($day_result['priem21']!=0){
    $priem21_color='#ff806d';
}
if($day_result['priem22']!=0){
    $priem22_color='#ff806d';
}


  ?>

<div class="row container-fluid p-0 m-0 adaptive justify-content-center">

<div class="col-6" style='text-align:center;'>
Расписание на <span style='color:<?=$color?>;'> <?=$day_id?> </span>июня.<br>Записи отмеченные <span style='color:#ff806d'>красным</span> заняты.
</div>
</div>




<div class="row container-fluid p-0 m-0 adaptive justify-content-center" style='margin-top:20px!important;'>
<div class="col card" style='text-align:center;background-color:<?=$priem1_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block'  href='add_record.php?day=<?=$day_id?>&priem=1'>9:00<br>-<br>9:30</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem2_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=2'>9:30<br>-<br>10:00</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem3_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=3'>10:00<br>-<br>10:30</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem4_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=4'>10:30<br>-<br>11:00</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem5_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=5'>11:00<br>-<br>11:30</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem6_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=6'>11:30<br>-<br>12:00</a></div>
</div>

<div class="row container-fluid p-0 m-0 adaptive justify-content-center" style='margin-top:20px!important;'>
<div class="col card" style='text-align:center;background-color:<?=$priem7_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=7'>12:00<br>-<br>12:30</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem8_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=8'>12:30<br>-<br>13:00</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem9_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=9'>13:00<br>-<br>13:30</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem10_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=10'>13:30<br>-<br>14:00</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem11_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=11'>14:00<br>-<br>14:30</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem12_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=12'>14:30<br>-<br>15:00</a></div>
</div>
<div class="row container-fluid p-0 m-0 adaptive justify-content-center" style='margin-top:20px!important;'>
<div class='col' style='margin-left:5px;margin-right:5px;'></div>
<div class="col card" style='text-align:center;background-color:<?=$priem13_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=13'>15:00<br>-<br>15:30</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem14_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=14'>15:30<br>-<br>16:00</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem15_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=15'>16:00<br>-<br>16:30</a></div>
<div class="col card" style='text-align:center;background-color:<?=$priem16_color?>;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=16'>16:30<br>-<br>17:00</a></div>
<div class='col' style='margin-left:5px;margin-right:5px;'></div>
</div>

<?php

if (($day_result['week_day']<=5)){
    echo "
    <div class='row container-fluid p-0 m-0 adaptive justify-content-center' style='margin-top:20px!important;'>


<div class='col card' style='text-align:center;background-color:$priem17_color;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=17'>17:00<br>-<br>17:30</a></div>
<div class='col card' style='text-align:center;background-color:$priem18_color;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=<?=$day_id?>&priem=18'>17:30<br>-<br>18:00</a></div>
<div class='col card' style='text-align:center;background-color:$priem19_color;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=$day_id&priem=19'>18:00<br>-<br>18:30</a></div>
<div class='col card' style='text-align:center;background-color:$priem20_color;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=$day_id&priem=20'>18:30<br>-<br>19:00</a></div>
<div class='col card' style='text-align:center;background-color:$priem21_color;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=$day_id&priem=21'>19:00<br>-<br>19:30</a></div>
<div class='col card' style='text-align:center;background-color:$priem22_color;margin-left:5px;margin-right:5px;'><a class='stretched-link link-block' href='add_record.php?day=$day_id&priem=22'>19:30<br>-<br>20:00</a></div>

</div>";
}else{
}

?>

</div>







<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  

      <footer class="page-footer font-small blue pt-4" style="margin-top:230px;">

  <!-- Footer Links -->
  <div class="footerosn container-fluid text-center text-md-left " style="background:#8de6e6; padding-top:10px;">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="">Ветеринарная клиника "ЗооДоктор"</h5>
        <p style="margin-bottom: 0px;">Город Чайковский, улица Кабалевского, 24</p>
        <p >(вход с противоположной стороны от ЦЗН)</p>
        <p><img src="img\full_logo.png" width="150" height="50" alt="logo">
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">
      <ul class="list-unstyled" style="font-size:120%;" >
          <li><p>Тел. <a href="tel:++79097269449" class="links">+7-909-72-69-449</a></p></li>
          <li style="margin-top:-15px;"><p>&nbsp &nbsp &nbsp &nbsp<a href="tel:+79097269449" class="links"> 4-21-30</a></p></li>
          <li></li>
        <!-- Links -->
</ul> 

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" >Навигация</h5> 

        <ul class="list-unstyled" >
          <li>
            <a href="index.php" class="links">Главная</a>
          </li>
          <li>
            <a href="uslugi.php"class="links">Услуги</a>
          </li>
          <li>
            <a href="tovari.php"class="links">Товары</a>
          </li>
          <li>
          <a class="" href="https://vk.com/zoodokchaik"><p ><img style="margin-top:10px;" src="img\vklogo.png"  width="50" height="50" alt="logo" title='"ЗооДоктор" Вконтакте'></p></a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="background:#A8FFFF;">© 2019 Втеринарная клиника "ЗооДоктор"
    
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  
  </body>

      