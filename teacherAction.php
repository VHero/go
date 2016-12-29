<?php
include "doup.php";
include "function.php";
        $tableName = "teacher";
        $introduction=$_POST['introduction'];
        $educationbg=$_POST['educationbg'];
        $score=$_POST['score'];
        $speciality=$_POST['speciality'];
		$columnArray = array("id" =>" ", "imgsrc" =>"","introduction"=>"","educationbg"=>"","score"=>"","speciality"=>"");
		$columnArray['imgsrc']=$imgsrc;
		$columnArray['introduction']=$introduction;
		$columnArray['educationbg']=$educationbg;
		$columnArray['score']=$score;
		$columnArray['speciality']=$speciality;
		// print_r($columnArray);
		insert($tableName,$columnArray);
?>