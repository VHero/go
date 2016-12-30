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

$tableName = $_GET['tableName'];
$db = new DBUtil("localhost",'root','root','go',$tableName);

if ($type == 'query'){
    $rows = $db->loadProducts($currentPage,$pageSize);

    $countArray = $db->getCountProducts();
    $count = $countArray[0]['count'];
    array_push($rows,array("count"=>$count));
    echo json_encode($rows);
}