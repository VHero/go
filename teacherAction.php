<?php
include "doup.php";
include "function.php";
        $tableName = "teacher";
        $introduction=$_POST['introduction'];
        $educationbg=$_POST['educationbg'];
        $score=$_POST['score'];
        $speciality=$_POST['speciality'];
        $name=$_POST['name'];
		$columnArray = array("id" =>" ", "imgsrc" =>"","introduction"=>"","educationbg"=>"","score"=>"","speciality"=>"","name"=>"");
		$columnArray['imgsrc']=$imgsrc;
		$columnArray['introduction']=$introduction;
		$columnArray['educationbg']=$educationbg;
		$columnArray['score']=$score;
		$columnArray['speciality']=$speciality;
		$columnArray['name']=$name;
		// print_r($columnArray);
		insert($tableName,$columnArray);
?>