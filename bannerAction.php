<?php
include "doup.php";
include "function.php";
        $tableName = "banner";
        $keyword=$_POST['keyword'];
		$columnArray = array("id" =>" ", "bannersrc" =>"","keyword"=>"");
		$columnArray['bannersrc']=$imgsrc;
		$columnArray['keyword']= $keyword;
		// echo $imgsrc;
		// echo $name;
		// echo $imgsrc;
		// echo $contents;
		// print_r($columnArray);
		insert($tableName,$columnArray);

?>