<?php
include "doup.php";
include "function.php";
		$contents = $_POST['contents'];
		$name=$_POST['name'];
        $tableName = "case";
		$columnArray = array("id" =>" ", "imgsrc" =>"","article"=>"","name"=>"");
		$columnArray['imgsrc']=$imgsrc;
		$columnArray['article']=$contents;
		$columnArray['name']=$name;
		// echo $name;
		// echo $imgsrc;
		// echo $contents;
		// print_r($columnArray);
		insert($tableName,$columnArray);
		// INSERT INTO case (id,imgsrc,article,name) VALUES (' ','uploadimg/1482912197.png','1231231','1231241241')
		// INSERT INTO case (id,imgsrc,article,name) VALUES (' ','123','1231231','1231241241')
		// INSERT INTO `case` (`id`, `imgsrc`, `article`, `name`) VALUES ('', '1231', '124124', '12312');
		// INSERT INTO `case` (`id`, `imgsrc`, `article`, `name`) VALUES ('', 'Griffin', '35','12312')
?>