<!doctype html5>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

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
            <a href="tovari.php" class="nav-link punkt" style="color: #ba81f9; font-weight:bold;">Товары</a>
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
          <a href="tovari.php" class="nav-link mpunkt" style="color: #ba81f9; font-weight:bold;">Товары</a>
        </li>
        <li class="nav-item">
          <a href="tovari.html" class="nav-link mpunkt" style="color: #ba81f9; font-weight:bold;">Акции</a>
        </li>
        
        <li class="nav-item">
            <a href="https://vk.com/zoodokchaik" class="nav-link mpunkt" style="color : #ba81f9; font-weight:bold; ">МЫ Вконтакте</a>
          </li>

        <li class="nav-item">
          <a href="reg.php"class="regm nav-link mpunkt " style=" color : #ffffff;  font-weight:bold; ">Регистрация</a>
        </li>
        <li class="nav-item">
            <a href=""data-toggle="modal" data-target="#vhod" class="nav-link mpunkt" style="color : #ba81f9; font-weight:bold; ">Вход</a>
          </li>
          
        
      </ul>
      <form class="form-inline my-2 my-lg-0 soc ">
          <a href=""  data-toggle="modal" data-target="#vhod"class="nav-link punkt" style="color : #ba81f9; font-weight:bold; ">Вход</a>
          <a  href="reg.php" class="punkt nav-link reg" style="font-weight:bold; ">Регистрация</a>
          <a class="vkpunkt" href="https://vk.com/zoodokchaik"><p ><img style="margin-top:10px;" src="img\vklogo.png"  width="50" height="50" alt="logo" title='"ЗооДоктор" Вконтакте'></p></a>
          
        </form>
      </div>
                   
  </nav>
      <!--  Registraciya-->
    <div id="registration" class="modal fade">
      <div class="modal-dialog ">
      <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Регистрация</h4>
      </div>
      <div class="modal-body">
          <form action="registration.php" method="POST">
        <div class="polya">
            <div class="pole">E-mail:  <br><input  type="email " class=" inp" size="40" name="e-mail"><br></div> 
            <div class="pole">Логин:  <br><input  type="text " class=" inp" size="40" name="login"><br></div> 
            <div class="pole">Имя:  <br><input  type="text " class="inp" size="40" name="name"><br></div> 
            <div class="pole">Фамилия: :  <br><input  type="text " class=" inp" size="40" name="lastname"><br></div> 
            <div class="pole">Пароль:  <br><input  type="password" class="inp" size="40" name="password"><br></div> 
            <div class="pole">Подтверждение пароля:  <br><input  type="password" class="inp" size="40" name="password2"><br></div> 
            </div><button type="submit" class="btn-block btn btn-primary vhod"  name="reg">Зарегистрироваться</button>
        </div>  
      </form>
      </div>
      </div>
      </div>
      </div>

      <!--  Registraciya-->

           <!--  vhod-->
           <div id="vhod" class="modal fade">
              <div class="modal-dialog ">
              <div class="modal-content">
              <div class="modal-header">
              <h4 class="modal-title">Вход</h4>
              </div>
              <div class="modal-body">
                <form action="login.php" method="POST">
                <div class="polya">
                  
                    <div class="pole">Логин:  <br><input  type="text " class="inp" size="40"><br></div> 
                    <div class="pole">Пароль:  <br><input  type="password" class="inp" size="40"><br></div> 

                    </div><button type="submit" class="btn-block btn btn-primary vhod" name="log">Вход</button>
                </div>  
                </form>
              </div>
              </div>
              </div>
              </div>


          <!--  vhod-->       
     


    
  <div class="container-fluid p-0" align="center">
    <div class="carousel slide" id="carouselExampleIndicators"data-interval="5000" data-ride="carousel">
      <ol class="carousel-indicators">
        <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
        <li data-target="#carouselExampleIndicators"  data-slide-to="1">
        </li>
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2">
        </li> -->
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/test.png" alt="" class="d-block  img-fluid">
        </div>
        <div class="carousel-item">
          <img src="img/test2.png" alt="" class="d-block  img-fluid">
        </div>
        <!-- <div class="carousel-item">
          <img src="img/slide2.png" alt="" class="d-block  img-fluid">
        </div> -->
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
      <img src="img/opisanie.png" class="img-fluid" alt="">
      <div class=" thumbnail-text-right  adaptive" style="color: #ba81f9; font-weight: bold;margin-top:10px;" >Тема: «Комплексный фторид церия»
        <div style="color: #656565; font-weight: normal;" >
        Руководствуясь периодическим законом, бертолетова соль испаряет белок так, как 
        <br>это могло влиять на реакцию Дильса-Альдера. Самосогласованная модель 
        <br>предсказывает, что при определенных условиях пламя сублимирует электролиз. В 
        <br>самом общем случае выпаривание сублимирует краситель.
      </div>
      </div>
    </div>
  <div class="container-fluid thumbnail d-inline-block relative osn ">
        <img src="img/opisaine-right.png" class="img-fluid" alt="">
        <div class=" thumbnail-text-left  adaptive" style="color: #ba81f9; font-weight: bold;margin-top:10px;" >Тема: «Непредвиденный интеллект»
          <div style="color: #656565; font-weight: normal;" >
            Исчисление предикатов подчеркивает структурализм, учитывая опасность, которую 
          <br>движения. Сомнение решительно транспонирует катарсис. Искусство, как следует 
          <br>из вышесказанного, создает неоднозначный гравитационный парадокс.  
          <br>Заблуждение, как следует из вышесказанного, осмысляет принцип восприятия. 
        </div>
        </div>
    </div>


    <div class="container-fluid thumbnail d-inline-block relative osn ">
        <img src="img/opisanie.png" class="img-fluid" alt="">
        <div class=" thumbnail-text-right  adaptive" style="color: #ba81f9; font-weight: bold; margin-top:10px;" >Тема: «Естественный парадокс»
          <div style="color: #656565; font-weight: normal;" >
            Исчисление предикатов, конечно, подрывает мир. Дедуктивный метод, конечно, 
          <br>заполняет данный конфликт. Вещь в себе, следовательно, откровенна.
          <br>Моцзы, Сюнъцзы и другие считали, что сомнение непредсказуемо. Деонтология 
          <br>ментально рефлектирует даосизм. Сомнение, как принято считать, создает трагический конфликт.
        </div>
        </div>
      </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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