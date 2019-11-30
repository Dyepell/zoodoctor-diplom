<?php
session_start();
include ("bd.php");

include 'functions.php';
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">



  
    <link rel="shortcut icon" href="img\logo.ico" type="image/x-icon">
    
    <title>zoochaik</title>
  </head>


  <body>
  <div class="container-fluid " style="background:#8cecdc; text-align:center; margin-bottom:10px;">
<div class="row" style='color: #656565; font-size:150%;' >
  <div class="col-sm-4 col-md-2" style='text-align-center; margin-right:10px; margin-top:15px;margin-bottom:5px;'><a href="index.php"><img src="/img/full_logo.png" alt="" width='150px' height='50px' style='cursor: pointer;' ></a> </div>
  <div class="col-sm-2 col-md-4" style='text-align:center;margin-top:25px;'><img src="/img/metka.png" alt="" height='30px;' style='margin-top:-12px;'> г. Чайковский, Кабалевского, 24</div>
  <div class="col-sm-2 col-md-5"style='margin-top:25px;'>Тел.<a href="tel:++79097269449" class="links"> +7-909-72-69-449</a></div>
</div>
</div>
  <div class="container">

  
  
  
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
   global $link;
   $a=$_GET['product'];
   $query = "SELECT * FROM tovari WHERE id=$a";
   $res = mysql_query($query,$link);
   $tovar = mysql_fetch_assoc($res);
    ?>
    <div class="row container-fluid adaptive" style="margin-top:15px;  margin-bottom:20px;"><span style="font-size:200%; margin-left:30px;"><?=$tovar['naimenovanie']?></span></div>
    <div class="row container-fluid">
      <div class="col-sm-3 prodpick"><img  src="<?=$tovar['picture']?>"  style="max-width:200px;">
      <p style="margin-top:20px; color:#353535; font-size:200%;">Цена товара:</p>
      <div class="prodrating">
      <span style='font-size:300%; color: #ba81f9;'><?=$tovar['price']?> руб.</span>
      </div>
      </div>
      
    <div class="col-sm  container-fluid" style="margin-left:30px;"><div class="full_description"><?=$tovar['full_description']?> </div>
        
    </div>
 
    </div>








  <footer class="page-footer font-small blue pt-4" style="margin-top:150px;">

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
          <li style="margin-top:-15px;"><p>&nbsp &nbsp &nbsp &nbsp<a href="tel:++79097269449" class="links"> 4-21-30</a></p></li>
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
  <div class="footer-copyright text-center py-3" style="background:#A8FFFF;">© 2019 Copyright Ветеринарная клиника "ЗооДоктор"
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  
  </body>



</html>