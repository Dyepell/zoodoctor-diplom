<?php

//Распечатка массива
function print_arr($array){
    echo "<pre>".print_r($array, true)."</pre>";
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

?>
