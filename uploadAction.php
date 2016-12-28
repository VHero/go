<?php
include "doup.php";
include "function.php";
        $tableName = "task";
		$columnArray = array("id" => "", "imgsrc" => "");
		$columnArray['imgsrc']=$imgsrc;
		insert($tableName,$columnArray);
?>