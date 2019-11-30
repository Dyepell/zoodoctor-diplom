<?php
$result = mysql_query("SELECT * FROM tovari ", $link);
$count =0;
if (mysql_num_rows($result) > 0 )
{
  $row=mysql_fetch_array($result);
do{

  if ($row["picture"] != "" && file_exists($row["picture"])){
    $img_path=$row["picture"];
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
  }
  echo'<div class="col-xl slot" >';

    echo'
    <div class="col-sm" style="text-align:center;">
    <img src="'.$img_path.'" width="'.$width.'" height="'.$height.'"./>
    </div>
    <div  style="text-align:center;"><a class="namelink" href="#" title="'.$row["naimenovanie"].'" ><p class="name"> '.$row["naimenovanie"].'</p></a>
    <b>'.$row["price"].' руб.</b></div>
   
    ';
 
 
  
  echo'</div>';

}

while($row=mysql_fetch_array($result));

}
?>