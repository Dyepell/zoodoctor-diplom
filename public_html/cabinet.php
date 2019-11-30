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
  $user_id=$user['id'];
  
  ?>

<div class="row container-fluid adaptive justify-content-center" >
<div class="col-5 " style='background-color: #f1f1f1; padding-right:0px;' >

<div class="row container-fluid p-0 justify-content-center" style='margin-right:0px; '><?=$user['login']?></div>
<div class="row">
<div class="col-4">
<div class="row" style='padding-left:5px;'>Имя:</div>
<div class="row" style='padding-left:5px;'>Фамилия:</div>
<div class="row"style='padding-left:5px;'>Телефон:</div>
<div class="row"style='padding-left:5px;'>E-mail:</div>
</div>
<div class="col-8 p-0"style='text-align:right;' >
<div class="row p-0" style='width:100%;'><div class="col"><?=$user['name']?></div></div>
<div class="row" style='width:100%;'><div class="col"><?=$user['lastname']?></div></div>
<div class="row" style='width:100%;'><div class="col"><?=$user['phone']?></div></div>
<div class="row" style='width:100%;'><div class="col"><?=$user['email']?></div></div>
</div>
</div>
</div>

<div class="row-offset container-fluid price_font justify-content-center" style='margin-top:50px;'>
  <div class="col-sm-1"></div>
  <div class="col-sm-10" style='text-align:center; font-size:150%;'>Ваши записи на прием</div>
  <div class="col-sm-1"></div>
</div>
<div class="row-offset container-fluid price_font">
<div class="col-sm-3"></div>
<div class="col-sm-6 " style='background-color:#8de6e6; font-size:150%;text-align:center;'>
  <div class="row">
    <div class="col-8" style='text-align:left;'>
    Дата
    </div>
    <div class="col-4">
    Время
    </div>
    
  </div>
  <?php
  $query=("SELECT * FROM records WHERE user_id='$user_id' ORDER BY record_day DESC");
  $sql=mysql_query($query) or die(mysql_error());
  $record_row=array();
  while($row = mysql_fetch_assoc($sql)){
    $record_row[] = $row;
    
  }

  if(count($record_row)==0){
    echo "<div class='row' style='background-color:#f1f1f1;margin-top:3px;'><div class='col' style='text-align:center;'>У вас пока нет записей</div></div>";

  }
  foreach($record_row as $record):
  ?>
  <div class="row" style='background-color:#f1f1f1;margin-top:3px;'>
    <div class="col-8" style='text-align:left;'>
    <?=$record['record_day']?> Июня 2019
    </div>
    <div class="col-4">
    <?=$record['record_time']?>
    </div>
    
  </div>

  <?php endforeach;?>
</div>


    

</div>
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

      