<?php
session_start();
include_once("bd.php");
include "functions.php";
session_check();
if (isset($_POST['log_out'])){
  log_out();
}
date_default_timezone_set('Etc/GMT-5');
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
        <a class="nav-link" href="#">Запись на прием</a>
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
?>
<div class="row container-fluid p-o justify-content-center adaptive" style='margin-bottom:30px;margin-left:0px;margin-right:0px;'>
    <div class="col-4" style='text-align:center;background-color:#f1f1f1;'>Числа <span  style='color:#ff806d;'>красного</span> цвета - дни, в которые доступна запись к офтальмологу.</div>
    <div class="col-4" style='text-align:center;background-color:#f1f1f1;'>Числа <span  style='color:#66c456;'>зеленого</span> цвета - дни, в которые доступна запись к дерматологу.</div>
    <div class="col-4" style='text-align:center;background-color:#f1f1f1;'>Числа <span  style='color:#6d75ff;'>синего</span> цвета - дни, в которые доступна запись к нефрологу.</div>
</div>



<div class="container-fluid p-0" align="center">
    <div class="carousel slide  container-fluid fon"style="padding-left:0px;padding-right:0px;" id="carouselExampleIndicators"data-interval="false" data-ride="carousel">
      
      <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="row container-fluid p-o justify-content-center adaptive" style='font-size:250%;'><div class="col-4">Июнь</div></div>
<div class="row container-fluid p-o justify-content-center adaptive" style='color:#ba81f9; margin-bottom:30px;'>
<div class="col-1">Пн</div>
<div class="col-1">ВТ</div>
<div class="col-1">СР</div>
<div class="col-1">ЧТ</div>
<div class="col-1">ПТ</div>
<div class="col-1">СБ</div>
<div class="col-1">ВС</div>
</div>

 
 <?php
    $query="SELECT *, MAX(id) FROM June";
    $days=mysql_query($query) or die(mysql_error());
    $days_count=mysql_fetch_assoc($days);
    $days_count=$days_count['MAX(id)'];
    $day=0;
    
    for($i=1; $i<=5; $i++){
        echo "<div class='row container-fluid p-o justify-content-center adaptive' style='text-align-center; margin-top:10px;'>";
        if($i ==1){
        echo "<div class='col-1' style='color:#d8d8d8;'>27</div>";
        echo "<div class='col-1' style='color:#d8d8d8;'>28</div>";
        echo "<div class='col-1' style='color:#d8d8d8;'>29</div>";
        echo "<div class='col-1' style='color:#d8d8d8;'>30</div>";
        echo "<div class='col-1' style='color:#d8d8d8;'>31</div>";

    }
        for($j=1; $j<=7;){
            $day=$day+1;
            if($i==1){
                $j=$j+4;
            }
            if ($day>=$days_count){
                echo "<div class='col-1'> </div>";

            }else{
            $day_query=mysql_query("SELECT * from June where id='$day'") or die(mysql_error());
            
            $row = mysql_fetch_assoc($day_query);

            $aaa= $row['id'];
            if($row['doctor']==1){
                $color='#ff806d';
            }
            if($row['doctor']==2){
                $color='#66c456';
            }
            if($row['doctor']==3){
                $color='#6d75ff';
            }
            if(date('d')>($row['id'])){
                $color='#d8d8d8';
            }

            
            
            echo "<div class='col-1'><a  href='record.php?day=$aaa' style='color:$color;'>$aaa</a></div>";
        }
        $j=$j+1;
        }
        echo "</div>";

    }
    
      
    ?>
    



</div>
<!--
    
<div class="col-1">28</div>
<div class="col-1">29</div>
<div class="col-1">30</div>
<div class="col-1">21</div>
<div class="col-1">1</div>
<div class="col-1">2</div>
</div> -->
        
        <div class="carousel-item">

        <div class="row container-fluid p-o justify-content-center adaptive"><div class="col-4" style='font-size:150%;'>Июль</div></div>
<div class="row container-fluid p-o justify-content-center adaptive">
<div class="col-1">Пн</div>
<div class="col-1">ВТ</div>
<div class="col-1">СР</div>
<div class="col-1">ЧТ</div>
<div class="col-1">ПТ</div>
<div class="col-1">СБ</div>
<div class="col-1">ВС</div>

</div>
      </div>
      <a href="#carouselExampleIndicators"style='background-color:#656565;' class="carousel-control-prev" role="button" 
      data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a href="#carouselExampleIndicators"style='background-color:#656565;' class="carousel-control-next" role="button" 
      data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  </div>
</div>
<div class="row container-fluid p-o justify-content-center adaptive" style='margin-right:0px;margin-left:0px; margin-top:50px;'>
<div class="col-8" style='text-align:center;'>Со списком предлагаемых клиникой услуг вы можете ознакомиться в <a href="price_list.php" style='color:#ba81f9;'>прайс-листе</a>.</div>
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

      