<html>
<head>
<title>ZwelL图片上传程序</title>
</head>
<body>
<form id="upfile" name="upform" enctype="multipart/form-data" method="post" action="">
  <label for="upfile">上传文件：</label>
  <input type="file" name="upfile" id="fileField" />
  <input type="submit" name="submit" value="上传"/>
</form>
</body></html>
<?php
include 'test_upload_pic.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //判断是否有上传文件
    if (is_uploaded_file($_FILES['upfile']['tmp_name'])) {
        $upfile = $_FILES['upfile'];

        $name = $upfile['name'];    //文件名
        $type = $upfile['type']; //文件类型
        $size = $upfile['size']; //文件大小
        $tmp_name = $upfile['tmp_name'];  //临时文件
        $error = $upfile['error']; //出错原因

        if ($max_file_size < $size) { //判断文件的大小
            echo '上传文件太大';
            exit ();
        }
        if (!in_array($type, $uptypes)) {        //判断文件的类型
            echo '上传文件类型不符' . $type;
            exit ();
        }
        if (!file_exists($destination_folder)) {
            mkdir($destination_folder);
        }

        $pinfo = pathinfo($name);
        $ftype = $pinfo['extension'];
        $destination = $destination_folder . time() . "." . $ftype;
        if (file_exists($destination) && $overwrite != true) {
            echo "同名的文件已经存在了";
            exit ();
        }
        if (!move_uploaded_file($tmp_name, $destination)) {
            echo "移动文件出错";
            exit ();
        }
        $pinfo = pathinfo($destination);
        $fname = $pinfo['basename'];
        $imgsrc=$destination_folder . $fname ;
        echo " <font color=red>已经成功上传</font><br>文件名: <font color=blue>" . $imgsrc . "</font><br>";
        /*插入数据库
        $tableName = "task";
		$columnArray = array("id" => "", "imgsrc" => "");
		$columnArray['imgsrc']=$imgsrc;
		insert($tableName,$columnArray);
        */
    }
}
?>
</body>
</html>