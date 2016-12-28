<!doctype html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
 <style type="text/css">
table {
width: 95%;
padding: 0;
margin: 0;
border-collapse:collapse;
border-spacing:0;
}
th {
font: bold 11px "Trebuchet MS", Verdana, Arial, Helvetica, sans-serif;
color: #4f6b72;
border: 1px solid #C1DAD7;
letter-spacing: 2px;
text-transform: uppercase;
text-align: left;
padding: 5px 5px 5px 10px;
background: #CAE8EA url(images/bg_header.jpg) no-repeat;
}
 
td {
border: 1px solid #C1DAD7;
background: #fff;
font-size: 11px;
padding: 5px 5px 5px 10px;
color: #4f6b72;
word-wrap: break-word;
word-break: normal;
white-space: nowrap;
}
</style>
<?php
include 'function.php';
$tableName = "user";
$columnArray = array("id" => "", "name" => "", "age" => "", "sex" => "", "birth" => "");
$id = "5";
$currentPage = 1;
$pageSize = 10;
$order = "birth";
$sort = "desc";
$paramSql = null;
$list = search($tableName, $currentPage, $pageSize, $order, $sort, $columnArray, $paramSql);
 
?>
<table>
<tr><th>ID</th><th>姓名</th><th>年龄</th><th>性别</th><th>生日</th></tr>
<tr><th>ID</th><th>路径</th></tr>
<?php
print_r($list);
foreach($list as $obj) {
echo "<tr><td>" . $obj['id'] . "</td><td>" . $obj['name'] . "</td><td>" . $obj['age'] . "</td><td>" . $obj['sex'] . "</td><td>" . $obj['birth'] . "</td></tr>";
} 
 // $columnArray['name']="饭3";
 // $columnArray['age']="11";
 // $columnArray['sex']="女";
 // $columnArray['birth']="2011-02-11";
 // insert($tableName,$columnArray);
 // print_r($columnArray);
 $tname='task';
 $columnArr=array("id"=>"","imgsrc"=>"");
 $order1="id";
 $list1=search($tname, $currentPage, $pageSize, $order1, $sort, $columnArr, $paramSql);
 print_r($list1);
 foreach($list1 as $obj) {
echo "<tr><td>" . $obj['id'] . "</td><td>" . $obj['imgsrc'] . "</td></tr>";
} 
?>
</table>
 </body>
</html>