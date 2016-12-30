<?php
include "doup.php";
include "function.php";
date_default_timezone_set("PRC");
        $tableName = "comment";
        $comment=$_POST['comment'];
        $name=$_POST['name'];
        $time = time();
		$commentdate=date("Y-m-d",$time);
		$columnArray = array("id" =>" ", "imgsrc" =>"","comment"=>"","date"=>"","name"=>"");
		$columnArray['imgsrc']=$imgsrc;
		$columnArray['comment']= $comment;
		$columnArray['date']=$commentdate;
		$columnArray['name']=$name;
		insert($tableName,$columnArray);
?>