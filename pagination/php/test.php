<?php
/**
 * Created by PhpStorm.
 * User: p
 * Date: 2016/9/13
 * Time: 9:39
 */
require_once "DB.php";

$db = new DBUtil("localhost",'root','root','go2');
$db->insertProducts();

//$db->loadProducts(2,30);

$countArray = $db->getCountProducts();
echo $countArray[0]['count'];
