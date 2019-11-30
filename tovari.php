<?php
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
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">



  
    <link rel="shortcut icon" href="img\logo.ico" type="image/x-icon">
    
    <title>zoochaik</title>
  </head>


  <body>
    <nav class="navbar navbar-expand-lg navbar-light bt" style="font-size: 120%; margin-bottom:1%;">
      <form  class="navbar-brand">
        <a href="index.html"><img src="img\full_logo.png" width="150" height="50" alt="logo"></a>
      
      <!-- <p class="tel">ул. Кабалевского, 24 -->
      </form>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"> 
            <li class="nav-item active">
                <a href="index.php" class="nav-link punkt" style="color : #ba81f9;font-weight:bold;  ">Главная</a>
              </li>
          <li class="nav-item active">
            <a href="uslugi.html" class="nav-link punkt" style="color : #ba81f9;font-weight:bold;">Услуги</a>
          </li>
          <li class="nav-item">
            <a href="tovari.html" class="nav-link punkt" style="color: #ba81f9; font-weight:bold;">Товары</a>
          </li>
          <li class="nav-item">
            <a href="tovari.html" class="nav-link punkt" style="color: #ba81f9; font-weight:bold;">Акции</a>
          </li>
          
        </ul>

         <!-- mobile -->

         <ul class="navbar-nav mr-auto mmenu" style="margin-left: -20px;"> 
            <a href="index.php" class="nav-link mpunkt" style="color : #ba81f9;font-weight:bold;  ">Главная</a>
        <li class="nav-item active">
          <a href="uslugi.html" class="nav-link mpunkt" style="color : #ba81f9;font-weight:bold;">Услуги</a>
        </li>
        <li class="nav-item">
          <a href="tovari.html" class="nav-link mpunkt" style="color: #ba81f9; font-weight:bold;">Товары</a>
        </li>
        <li class="nav-item">
          <a href="tovari.html" class="nav-link mpunkt" style="color: #ba81f9; font-weight:bold;">Акции</a>
        </li>
        
        <li class="nav-item">
            <a href="https://vk.com/zoodokchaik" class="nav-link mpunkt" style="color : #ba81f9; font-weight:bold; ">МЫ Вконтакте</a>
          </li>

        <li class="nav-item">
          <a href="#"data-toggle="modal" data-target="#registration" class="regm nav-link mpunkt " style=" color : #ffffff;  font-weight:bold; ">Регистрация</a>
        </li>
        <li class="nav-item">
            <a href=""data-toggle="modal" data-target="#vhod" class="nav-link mpunkt" style="color : #ba81f9; font-weight:bold; ">Вход</a>
          </li>
          
        
      </ul>
      <form class="form-inline my-2 my-lg-0 soc ">
          <a href=""  data-toggle="modal" data-target="#vhod"class="nav-link punkt" style="color : #ba81f9; font-weight:bold; ">Вход</a>
          <a  href="#" data-toggle="modal" data-target="#registration"class="punkt nav-link reg" style="font-weight:bold; ">Регистрация</a>
          <a class="vkpunkt" href="https://vk.com/zoodokchaik"><p ><img style="margin-top:10px;" src="img\vklogo.png"  width="50" height="50" alt="logo" title='"ЗооДоктор" Вконтакте'></p></a>
          
        </form>
      </div>
                   
  </nav>

    <!-- <div class="container-fluid p-0" align="center">
        <div class="carousel slide" id="carouselExampleIndicators"data-interval="5000" data-ride="carousel">
          <ol class="carousel-indicators">
            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
            <li data-target="#carouselExampleIndicators"  data-slide-to="1">
            </li>
            
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/test.png" alt="" class="d-block  img-fluid">
            </div>
            <div class="carousel-item">
              <img src="img/test2.png" alt="" class="d-block  img-fluid">
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
      </div> -->



      
      <div class="row ">
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
        <div class="row tov">
        <div class="col-2">
       <img src="<?=$img_path?>" width="<?=$width?>" height="<?=$height?>" alt=""/>
       </div>
       <div class="col tovsecondcol">
       <a class="tovname" href="?product=<?=$product['id']?>"><?=$product['naimenovanie']?></a><br><br>
        <p style="text-align:justify;"><?=$product['description']?></p>
        </div>
        <div class="col-3 colprice">
          <div class="tovrating">
        <?php for($i=$product['rating']; $i<>0; $i=$i-1){
          echo "<img style='margin-left:2px;' src='img/rating.png' width='18%' height='18%'\>";
        } ?>
        </div>
        <div class="pricebutt"><?=$product['price']?> руб.</div>
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
  
    

      <footer class="footer">
      <table width="100%" class="table-responsive">
        <tr>
          <td width="20%"><a href="https://vk.com/zoodokchaik"><img src="img\vklogo.png" style="margin-left: 10px;" width="40" height="40" alt="logo" title='"ЗооДоктор" Вконтакте'></a><td>
          <td width="60%" align="center">Ветеринарная клиника ЗооДоктор <br>Г. Чайковский ул. Кабалевского, 24 <br>
            <img id="tellogo" src="img\trubka.png" width="15" height="15">
            <a class="links" href="tel:+79223120254">+7(922)312-02-54</a> </td>
          <td width="20%"><td>
        </tr>
      </table>
  </footer>
  
  </body>



</html>