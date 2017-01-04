<?php
include "doup.php";
include "function.php";

    $tableName = "resourceshare";
    $title=$_POST['title'];
    $author=$_POST['author'];
    $article=$_POST['article'];
    $time = time();
    $resourcesharedate=date("Y-m-d",$time);

    $columnArray = array("id" =>" ", "imgsrc" =>"","title"=>"","author"=>"","article"=>"","date"=>"");
    $columnArray['imgsrc']=$imgsrc;
    $columnArray['title']=$title;
    $columnArray['author']=$author;
    $columnArray['article']=$article;
    $columnArray['date']=$resourcesharedate;

    // print_r($columnArray);
    insert($tableName,$columnArray);
?>