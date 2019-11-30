<?php
session_start();
include 'catalog.php';

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


      
      <div class="row">
      </div>
      <div id=“katalog” class="row container-fluid justify-content-center">
        <div class="col-sm-4 kat" style="font-size:120%;">
        <div class="wrapper">
       
          <div class="sidebar"><p>Каталог</p>

          <ul class="category">
          <?php echo $cat_menu;?>
          </ul>

          </div>
          <div class="content">

          </div>
        </div>
        </div>


        <div class="col-sm">


        <div class="row kroshki">
        <p> <a href="tovari.php">Каталог</a> / <?=$breadcrumbs;?></p>
        </div>

        <div>
       <p><?php foreach($products as $product): 
        if ($product["picture"] != "" && file_exists($product["picture"])){
          $img_path=$product["picture"];
          $max_width=200;
          $max_height=200;
          list($width,$height)=getimagesize($img_path);
          $ratioh=$max_height/$height;
          $ratiow=$max_width/$width;
          $ratio=min($ratioh,$ratiow);
          $width=intval($ratio*$width);
          $height=intval($ratio*$height);
        }else{
          $img_path="/img/NoImage.png";
          $width=140;
          $height=200;
        }?></p>
        <div class="row tov ">
        <div class="col-2 ">
       <img src="<?=$product["picture"]?>" width="140" height="200" alt=""/>
       </div>
       <div class="col tovsecondcol " style='margin-left:50px;'>
       <a class="tovname"href="product.php?product=<?=$product['id']?>"><?=$product['naimenovanie']?></a><span style='font-size:150%;'>-<span style='color:#ff806d;'><?=$product['price']?> руб.</span></span><br><br>
        <p style="text-align:justify;"><?=$product['description']?></p>
        </div>
        
       </div>
<?php endforeach;?>
</div>
</div>
</div>


      
      <p>
<br>
<br>
<br>
<br>
<br>




     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-1.9.0.min.js"></script>
	<script src="js/jquery.accordion.js"></script>
  <script src="js/jquery.cookie.js"></script>

    <script>
    
		$(document).ready(function(){
			$(".category").dcAccordion();
		});
	</script>
    
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