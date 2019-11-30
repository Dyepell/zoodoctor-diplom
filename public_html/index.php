<?php
session_start();
include 'functions.php';
?>


<!doctype html5>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
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
  <div class="col-sm-2 col-md-5"style='margin-top:25px;'>Тел.<a href="tel:++79097269449" class="links"> +7-909-72-69-449</a></div>
</div>
</div>
  <div class="container">

  
  
  
  <div class="navigation-wrapper">
    <div class="n-button" ><span class='mtext'>Меню</span>
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
      
     


    
  <div class="container-fluid p-0" align="center">
    <div class="carousel slide  container-fluid fon"style="padding-left:0px;padding-right:0px;" id="carouselExampleIndicators"data-interval="7000" data-ride="carousel">
      <ol class="carousel-indicators">
        <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
        <li data-target="#carouselExampleIndicators"  data-slide-to="1">
        <li data-target="#carouselExampleIndicators"  data-slide-to="2">
        <li data-target="#carouselExampleIndicators"  data-slide-to="3">
        <li data-target="#carouselExampleIndicators"  data-slide-to="4">
        </li>

      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slide1.jpg" alt=""style="padding-left:0px;padding-right:0px;" class="d-block image container-fluid">
        </div>
        <div class="carousel-item">
          <img src="img/slide2.jpg" style="padding-left:0px;padding-right:0px;"alt="" class="d-block image container-fluid">
        </div>
        <div class="carousel-item">
          <img src="img/slide3.png" style="padding-left:0px;padding-right:0px;"alt="" class="d-block image container-fluid">
        </div>
        <div class="carousel-item">
          <img src="img/slide4.png" style="padding-left:0px;padding-right:0px;"alt="" class="d-block image container-fluid">
        </div>
        
      </div>
      <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" 
      data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" 
      data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  </div>

  <div class="container-fluid thumbnail d-inline-block relative osn ">
      <img src="img/terapy.png"style="padding-left:0px;padding-right:0px;" class="container-fluid image" alt="">
      <div class=" thumbnail-text-right  adaptive" style="color: #ba81f9; font-weight: bold;margin-top:10px;" >Ветеринарная терапия
        <div style="color: #656565; font-weight: normal;" >
        Раздел общей ветеринарии, посвященный выявлению, распознаванию и
        дифференциации (различению, разграничению) внутренних болезней животных, изучению причин 
        и механизмов развития патологических процессов и состояний, их профилактике и лечению консервативными,
        нехирургическими методами.
      </div>
      </div>
    </div>
  <div class="container-fluid thumbnail d-inline-block relative osn ">
        <img src="img/stomatology.png"style="padding-left:0px;padding-right:0px;" class="container-fluid" alt="">
        <div class=" thumbnail-text-left  adaptive" style="color: #ba81f9; font-weight: bold;margin-top:10px;" >Ветеринарная стоматология
          <div style="color: #656565; font-weight: normal;" >
          Лечение зубов, чистка и удаление зубного камня у кошек, собак и других животных, 
          пломбирование и шинирование зубов, проведение санаций ротовой полости.&nbsp; 
          Ветеринарный стоматолог оказывает весь спектр услуг для белоснежной и здоровой улыбки вашего питомца. 
        </div>
        </div>
    </div>


    <div class="container-fluid thumbnail d-inline-block relative osn ">
        <img src="img/podhod.png"style="padding-left:0px;padding-right:0px;" class="container-fluid" alt="">
        <div class=" thumbnail-text-right  adaptive" style="color: #ba81f9; font-weight: bold; margin-top:10px;" >Индивидуальный подход
          <div style="color: #656565; font-weight: normal;" >
            Для того, чтобы лечение в клинике было не только эффективным, но и приятным, мы разрабатываем для вас дисконтные программы, акции, 
            , фирменные подарки, а также создаем дружескую атмосферу внутри клиники, благодаря которой ваш питомец почувствует себя как дома. 
            Диалог с клиентом – один из приоритетов нашей работы.
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
  <div class="footer-copyright text-center py-3" style="background:#A8FFFF;">© 2019 Втеринарная клиника "ЗооДоктор"
    
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
  
  </body>



</html>