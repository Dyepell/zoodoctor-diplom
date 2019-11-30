<?php 
include ("bd.php");
include ("functions.php");
$categories=get_cat();
$cat_tree=map_tree($categories);
$cat_menu=cat_to_string($cat_tree);
if (isset($_GET['category'])){
    $id=(int)$_GET['category'];
    //хлебные крошки
    $breadcrumbs_array = breadcrumbs($categories, $id);
    if($breadcrumbs_array){
        foreach($breadcrumbs_array as $id =>$title){
            $breadcrumbs .="<a href='?category={$id} '>{$title}</a> / ";
        }
        $breadcrumbs=rtrim($breadcrumbs, " / ");
        $breadcrumbs = preg_replace('#(.+)?<a.+>(.+)</a>$#', "$1$2", $breadcrumbs);
    }
    //ID дочерних категорий
    $ids = cats_id($categories,$id);
    $ids=!$ids ? $id : rtrim($ids," , ");
}
    $products = get_products($ids);


?>