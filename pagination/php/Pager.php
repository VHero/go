<?php
/**
 * Created by PhpStorm.
 * User: p
 * Date: 2016/9/13
 * Time: 9:30
 */
require_once "DB.php";
$currentPage = $_GET['currentPage'];
$pageSize = $_GET['pageSize'];
$type = $_GET['type'];
<<<<<<< HEAD
$tableName = $_GET['tableName'];
$db = new DBUtil("localhost",'root','root','sz79',$tableName);
=======
$db = new DBUtil("localhost",'root','root','go');
>>>>>>> 8733288e80f0d9166fe640763b65c7b5453310df
if ($type == 'query'){
    $rows = $db->loadProducts($currentPage,$pageSize);

    $countArray = $db->getCountProducts();
    $count = $countArray[0]['count'];
    array_push($rows,array("count"=>$count));
    echo json_encode($rows);
}