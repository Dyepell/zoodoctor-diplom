<?php
date_default_timezone_set('Etc/GMT+5');
//Распечатка массива
function print_arr($array){
    echo "<pre>".print_r($array, true)."</pre>";
}
function session_check(){
  session_start();
  if (isset($_SESSION['login'])){

  }else{
    echo "<script>document.location.href='log_in.php'</script>";
  }
}


//Построение дерева
function map_tree($dataset) {
	$tree = array();

	foreach ($dataset as $id=>&$node) {    
		if (!$node['parent']){
			$tree[$id] = &$node;
		}else{ 
            $dataset[$node['parent']]['childs'][$id] = &$node;
		}
	}

	return $tree;
}


// Массив категорий
function get_cat(){
    global $link;
    $query="SELECT * FROM categories";
    $res=mysql_query($query,$link);

    $arr_cat=array();
    while($row=mysql_fetch_assoc($res)){
        $arr_cat[$row['id']]=$row;
    }
    return $arr_cat;
}

// Дерево в строку HTML 
function cat_to_string($data){
    foreach($data as $item){
        $string .= cat_to_template($item);
    }
    return $string;

}
// Шаблон вывода категорий
function cat_to_template($category){
    ob_start();
    include 'cat_template.php';
    return ob_get_clean();

}
//Хлебные крошки
function breadcrumbs($array,$id){
    if(!$id) return false;
    $count = count($array);
    $breadcrumbs_array = array();
    for($i=0; $i<$count; $i++){
        if($array[$id]){
            $breadcrumbs_array[$array[$id]['id']]=$array[$id]['title'];
            $id=$array[$id]['parent'];
        }else break;
    }
    return array_reverse($breadcrumbs_array, true);
}
//  Получение ID дочерних категорий
function cats_id($array, $id){
	if(!$id) return false;

	foreach($array as $item){
		if($item['parent'] == $id){
			$data .= $item['id'] . ",";
			$data .= cats_id($array, $item['id']);
		}
	}
	return $data;
}
//получение товаров
function get_products($ids = false){
	global $link;
	if($ids){
		$query = "SELECT * FROM tovari WHERE parent IN($ids) ORDER BY naimenovanie";
	}else{
		$query = "SELECT * FROM tovari ORDER BY naimenovanie";
	}
	$res = mysql_query($query,$link);
	$products = array();
	while($row = mysql_fetch_assoc($res)){
		$products[] = $row;
	}
	return $products;
}
function registration(){
	

	  if(empty($_POST['login']))  {
		echo "<script>alert('Введите Логин!!');</script>";
  } 
  elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
	echo "<script>alert('В поле Логин введены недоступные символы!');</script>";

  
  }elseif(empty($_POST['name1'])) {
    echo "<script>alert('Введите Имя!');</script>";
  
    }
    elseif(empty($_POST['lastname'])) {
      echo "<script>alert('Введите Фамилию!');</script>";
    
      }
  elseif(empty($_POST['password'])) {
	echo "<script>alert('Введите Пароль!');</script>";

  }
  elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
	echo "<script>alert('Пароль должен быть не менее 6 символов и состоять из букв латинского алфавита и цифр!');</script>";

  }
  
  elseif(empty($_POST['mail'])) {
	echo "<script>alert('Введите E-mail!');</script>";

  
  }
  elseif (!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/", $_POST['mail'])) {
	echo "<script>alert('E-mail имеет недопустимый формат!');</script>";

  }
  
  else{
  $login = $_POST['login'];
  $password = $_POST['password'];
  $mdPassword = md5($password);
  $email = $_POST['mail'];
  $name = $_POST['name1'];
  $lastname = $_POST['lastname'];  
  $phone = $_POST['phone'];
  $tok=getToken(32);
  $query = ("SELECT id FROM polzovateli WHERE login='$login'");
  $sql = mysql_query($query) or die(mysql_error());
  
  if (mysql_num_rows($sql) > 0) {
	echo "<script>alert('Пользователь с таким Логином зарегистрирован');</script>";

  
  }
  else {
  $query2 = ("SELECT id FROM polzovateli WHERE email='$email'");
  $sql = mysql_query($query2) or die(mysql_error());
  if (mysql_num_rows($sql) > 0){
	echo "<script>alert('Пользователь с таким E-mail уже зарегистрирован');</script>";

  
  }
  else{
  $query = "INSERT INTO polzovateli (login, password, email, name, lastname, phone, token)
  VALUES ('$login', '$mdPassword', '$email', '$name', '$lastname', '$phone', '$tok')";
  $result = mysql_query($query) or die(mysql_error());
  send_mail($email,$tok, $login, $password);
  echo "<script>alert('На указанную почту отправленно письмо с сылкой для подтверждения');</script>";
  echo "<script>document.location.href='index.php'</script>
  ";
  }
  }
  }
}
function vhod(){
	if(empty($_POST['login']))  {
		echo "<script>alert('Введите Логин!!');</script>";
  } 
  elseif (!preg_match("/^\w{3,}$/", $_POST['login'])) {
	echo "<script>alert('В поле Логин введены недоступные символы!');</script>";

  
  }
  elseif(empty($_POST['password'])) {
	echo "<script>alert('Введите Пароль!');</script>";

  }
  elseif (!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])) {
	echo "<script>alert('Пароль должен быть не менее 6 символов и состоять из букв латинского алфавита и цифр!');</script>";

  }else{
	$login = $_POST['login'];
	$password = $_POST['password'];
	$mdPassword = md5($password);
	$query = ("SELECT id FROM polzovateli WHERE login='$login'");
	$sql = mysql_query($query) or die(mysql_error());
	if (mysql_num_rows($sql) == 0){
    echo "<script>alert('Пользователя с таким логином не зарегистрировано!');</script>";
    return;
	}
	$query2 = ("SELECT * FROM polzovateli WHERE login='$login'");
    $sql2 = mysql_query($query2) or die(mysql_error());
    $user=mysql_fetch_assoc($sql2);
    if ($user['token']!=NULL){
      echo "<script>alert('Подтвердите адрес электронной почты');</script>";
      return;
    }

  	if ($user['password'] == $mdPassword){
		echo "<script>alert('Вы успешно вошли!');</script>";
    $_SESSION['login']=$login;
    echo "<script>document.location.href='cabinet.php'</script>";
	  }else{
		echo "<script>alert('Введен не верный пароль!');</script>";
	  }
}
}
function log_out(){
  session_unset();
  Header("Location: index.php");
}
function send_mail($pochta,$key, $loggin, $pass){
$subject = "Подтверждение почты";



$msg ="Спасибо за регистрацию на сайте ветеринарной клиники 'ЗооДоктор', для окончания регистрации пройдите по ссылке: http://d92231ft.beget.tech/email_accept.php?tok=$key 
Ваш логин: $loggin
Ваш пароль: $pass";
mail($pochta, $subject, $msg, 'From:zoodoctor@zoochaik.ru');

}

function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); // edited

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    return $token;
}

function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; // not so random...
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; // length in bytes
    $bits = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    } while ($rnd > $range);
    return $min + $rnd;
}

function  pet_add(){

  if(empty($_POST['type']))  {
    echo "<script>alert('Пожалуйста, укажите вид животного');</script>";
    echo "<script>document.location.href='pats.php#openModal'</script>";
  }elseif(empty($_POST['name'])){
    echo "<script>alert('Пожалуйста, введите ключку животного');</script>";
    echo "<script>document.location.href='pats.php#openModal'</script>";
  }else{
    $name =$_POST['name'];
    $type=$_POST['type'];
    $gender =$_POST['gender'];

    $login=$_SESSION['login'];
    $query = ("SELECT * FROM polzovateli WHERE login='$login'");
    $sql = mysql_query($query) or die(mysql_error());
    $user=mysql_fetch_assoc($sql);
    $user_id=$user['id'];  
    $date=date('Y-m-d');

     
    $pet_add= "INSERT INTO pats (name, type, gender, parent, date)
  VALUES ('$name', '$type', '$gender','$user_id', '$date')";
   $result = mysql_query($pet_add) or die(mysql_error());
   Header("Location: pats.php");


 

  }

}
function calendar(){

}

?>
