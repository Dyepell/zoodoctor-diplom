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
  <div class="row container-fluid">
  <div class="col-sm">
  <form action="reg.php" method="POST">
        <div class="polya">

            <div class="pole"> <label for="e-mail">E-mail:</label> <input  type="email " class="" size="40" neme="e-mail"></div> 
            <div class="pole"><label for="login">Логин:</label><input  type="text " class="" size="40" name="login"></div> 
            <div class="pole"><label for="name">Имя:</label><input  type="text " class="" size="40" name="name"></div> 
            <div class="pole"><label for="lastname">Фамилия:</label><input  type="text " class="" size="40" name="lastname"></div> 
            <div class="pole"><label for="password">Пароль:</label><input  type="password" class="" size="40" name="password"></div> 
            <div class="pole"><label for="password2">Подтверждение пароля:</label><input  type="password" class="" size="40" name="password2"></div> 
            <button type="submit" class="btn-block btn btn-primary vhod"  name="reg">Зарегистрироваться</button>
            </div>
        </div>  
      </form>
      <div class="col-sm">123</div>
      </div>
 
      </div>
 
      </body>
      </html>

      <?php

include_once("bd.php");

if (isset($_POST['reg'])){
    if(empty($_POST['login']))  {
    echo '<br><font color="red"><alt="Введите логин"> Введите логин!</font>';
} 
elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
echo '<br><font color="red"><alt="В поле "Логин" введены недопустимые символы!">В поле "Логин" введены недопустимые символы! Только буквы, цифры и подчеркивание!</font>';
}
elseif(empty($_POST['password'])) {
echo '<br><font color="red"><alt="Введите пароль !">Введите пароль!</font>';
}
elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
echo '<br><font color="red"><alt="Пароль слишком короткий!">Пароль слишком короткий! Пароль должен быть не менее 6 символов! </font>';
}
elseif(empty($_POST['password2'])) {
echo '<br><font color="red"><alt="Введите подтверждение пароля!">Введите подтверждение пароля!</font>';
}
elseif($_POST['password'] != $_POST['password2']) {
echo '<br><font color="red"><alt="Введенные пароли не совпадают!">Введенные пароли не совпадают!</font>';
}
elseif(empty($_POST['e-mail'])) {
echo '<br><font color="red"><alt="Введите E-mail!">Введите E-mail! </font>';
}
elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['e-mail'])) {
echo '<br><font color="red"><alt="E-mail имеет недопустимий формат!">E-mail имеет недопустимий формат! Например, name@gmail.com! </font>';
}

else{
$login = $_POST['login'];
$password = $_POST['password'];
$mdPassword = md5($password);
$password2 = $_POST['password2'];
$email = $_POST['e-mail'];
$rdate = date("Y-m-d в H:i");
$name = $_POST['name'];
$lastname = $_POST['lastname'];  

$query = ("SELECT id FROM polzovateli WHERE login='$login'");
$sql = mysql_query($query) or die(mysql_error());

if (mysql_num_rows($sql) > 0) {
echo '<font color="red"><alt="Пользователь с таким логином зарегистрированый!">Пользователь с таким логином зарегистрирован!</font>';
}
else {
$query2 = ("SELECT id FROM polzovateli WHERE password='$password'");
$sql = mysql_query($query2) or die(mysql_error());
if (mysql_num_rows($sql) > 0){
echo '<font color="red"><alt="Пользователь с таким e-mail зарегистрированый!">Пользователь с таким e-mail уже зарегистрирован!</font>';
}
else{
$query = "INSERT INTO polzovateli (login, password, email, name, lastname)
VALUES ('$login', '$mdPassword', '$email', '$name', '$lastname')";
$result = mysql_query($query) or die(mysql_error());;
echo '<font color="green"><alt="Вы успешно зарегистрировались!">Вы успешно зарегистрировались!</font><br><a href="login.html">На главную</a>';
}
}
}
}
?>