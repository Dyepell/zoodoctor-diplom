<?php
session_start();
include 'functions.php';


?>

<!doctype html>
<html lang="ru">
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

    <div class="container-fluid thumbnail d-inline-block relative osn" style="padding-top:0%;">
        <img src="img/uslugi.png"style="padding-left:0px;padding-right:0px ;" class="container-fluid" alt="">
        <div class=" uslugi-text  adaptive" style="color: #ba81f9; font-weight: bold;margin-top:10px;" >
        <div style="font-size: 200%; text-align: left;">Услуги:</div>
          <div style="color: #656565; font-weight: normal;font-size: 120%;" >
            <ul type="square" style=" text-align:left; padding-left: 10%; width: 200%;">
                <li><A class="linksv2" href="#vakcin">Терапия</A></li>
                <li><a class="linksv2" href="#surgery">Хирургия</a></li>
                <li><a class="linksv2" href="#diagnostics">Диагностика</a></li>
                <li><a class="linksv2" href="#laboratory">Лабораторные исследования</a></li>
                <li><a class="linksv2" href="price_list.php">Полный список услуг и их <br> стоимость</a></li>
            </ul>
        </div>
        </div>
    </div>
    <div class="container-fluid thumbnail d-inline-block relative osn adaptive" style="margin-top: 1%;">
        <img src="img/vakcin.png"style="padding-left:0px;padding-right:0px  " class="container-fluid" alt="">
        <div class=" thumbnail-text-left  adaptive" style="color: #ba81f9;margin-top:-10px; text-align: left; margin-left: 2%;"><A name="vakcin"></A><h3><a href='price_list.php#terapy' style='color:#ba81f9;'>Терапия</a> </h3>
          <div style="color: #656565; font-weight: normal; width: 120%;  margin-top:-10px;" >
          Общая терапия включает в себя правила и методы 
          <br>лечения, направленные на устранение причинных 
          <br>факторов заболевания, нормализацию обмена веществ, 
          восстановление нарушения функции отдельных органов и систем, продуктивных и репродуктивных качеств.
Частная терапия объединяет методы лечения при конкретных болезнях.
Современная терапия основывается на принципах физиологии, активности, комплексной и экономической эффективности.

 
        </div>
        </div>
        </div>

    <div class="container-fluid thumbnail d-inline-block relative osn adaptive" style="margin-top: 1%;">
            <img src="img/surgery.png"style="padding-left:0px;padding-right:0px; padding-bottom:40px;" class="container-fluid" alt="">
            <div class=" thumbnail-text-left  adaptive" style="color: #ba81f9;margin-top:-10px; text-align: left; margin-left: 2%; "><A name="surgery"></A></A><h3> <a href="price_list.php#surgery"  style='color:#ba81f9;'> Хирургия</a></h3>
              <div style="color: #656565; font-weight: normal; width: 120%;margin-top: -2%; " >
              Хирургические вмешательства у животных могут быть разного характера. У питомца при обследовании  нередко выявляют различные виды патологии: 
              мочекаменную болезнь, кисты и новообразования  органов и т.п., не требующих экстренного хирургического вмешательства,<br> 
              что позволяет назначить плановую операцию.<br> К  плановым хирургическим вмешательствам <br>относятся, 
              в том числе, популярные процедуры стерилизации и кастрации животных, которые<br> позволяют избежать им уличной инфекции,<br> многократной родовой деятельности.

            </div>
            </div>
            <div style="text-align:justify; margin-left:2%; color: #656565; " >
            Врачи клиники гарантируют полноценное и поэтапное проведение процесса операции у домашнего питомца:
<ul>
  <li>предварительно предлагается диагностика заболевания, включая лабораторные исследования, УЗИ, прежде чем принять решение об операции;</li>
  <li>в зависимости от тяжести заболевания решается вопрос о местной анестезии, общем наркозе;</li>
  <li>хозяина питомца информируют о послеоперационном уходе, диетическом питании;</li>
  <li>при необходимости животному назначают предоперационное медикаментозное лечение;</li>
  <li>jперационное поле тщательно обрабатывают, сбривают волосяной покров;</li>
  <li>хирургическое отделение и оборудование стерилизуется согласно правилам СанПина;</li>
  
</ul>
После операции обязательно проводятся реабилитационные мероприятия, за питомцем устанавливается постоянный контроль, осуществляются перевязки.









            </div>
        </div>

        <!-- ДИАГНОСТИКА-->



        <div class="container-fluid thumbnail d-inline-block relative osn adaptive" style="margin-top: 1%;">
            <img src="img/diagnostics.png"style="padding-left:0px;padding-right:0px; padding-bottom:40px;" class="container-fluid" alt="">
            <div class=" thumbnail-text-left  adaptive" style="color: #ba81f9;margin-top:-10px; text-align: left; margin-left: 2%; "><A name="diagnostics"></A></A><h3> <a href="price_list.php#diagnostics"  style='color:#ba81f9;'> Диагностика</a></h3>
              <div style="color: #656565; font-weight: normal; width: 120%;margin-top: -2%; " >
              Ветеринарная клиника «ЗооДоктор» выполняет все современные диагностические процедуры,<br> позволяющие поставить правильный диагноз.
<br>Проведение диагностики помогает, вовремя начать <br>лечение и не допустить осложнений и даже гибели питомца.
Наличие новейшего оборудования дает возможность выявлять на ранних стадиях даже редкие заболевания, причем возможно это в домашних условиях.

            </div>
            </div>
            <div style="text-align:justify; margin-left:2%; color: #656565; " >
            </div>
        </div>



        <!--Лаборатория-->

        <div class="container-fluid thumbnail d-inline-block relative osn adaptive" style="margin-top: 1%;">
            <img src="img/diagnostics.png"style="padding-left:0px;padding-right:0px; padding-bottom:40px;" class="container-fluid" alt="">
            <div class=" thumbnail-text-left  adaptive" style="color: #ba81f9;margin-top:-10px; text-align: left; margin-left: 2%; "><A name="laboratory"></A></A><h3> <a href="price_list.php#laboratory"  style='color:#ba81f9;'> Лабораторные исследования</a></h3>
              <div style="color: #656565; font-weight: normal; width: 120%;margin-top: -2%; " >
              Лабораторные исследования, которые осуществляет ветеринарная лаборатория, играет очень важную роль. 
              Именно результаты исследований позволяют<br> ветеринару верно установить причину недомогания животного и 
              поставить точный диагноз, что в дальнейшем позволяет назначить правильное лечение.

            </div>
            </div>
            <div style="text-align:justify; margin-left:2%; color: #656565; " >
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
<div class="footer-copyright text-center py-3" style="background:#A8FFFF;">© 2019 Copyright:Ветеринарная клиника "ЗооДоктор"
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
  
  </body>



</html>