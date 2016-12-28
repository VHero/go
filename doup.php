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
include 'function.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //判断是否有上传文件
    if (is_uploaded_file($_FILES['upfile']['tmp_name'])) {
        $upfile = $_FILES['upfile'];
        // print_r($upfile);
        // print_r($_FILES['upfile']);
  
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
        // if (file_exists("upload/" . $_FILES['file']['name'])) {
        //     echo $_FILES["file"]["name"] . " already exists. ";
        // } else {
        //     move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
        //     echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
        // }
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

        $tableName = "task";
		$columnArray = array("id" => "", "imgsrc" => "");
		$columnArray['imgsrc']=$imgsrc;
		insert($tableName,$columnArray);
        // echo " 宽度:" . $image_size[0];
        // echo " 长度:" . $image_size[1];
        // echo "<br> 大小:" . $file["size"] . " bytes";
        // if ($watermark == 1) {
        //     $iinfo = getimagesize($destination, $iinfo);
        //     $nimage = imagecreatetruecolor($image_size[0], $image_size[1]);
        //     $white = imagecolorallocate($nimage, 255, 255, 255);
        //     $black = imagecolorallocate($nimage, 0, 0, 0);
        //     $red = imagecolorallocate($nimage, 255, 0, 0);
        //     imagefill($nimage, 0, 0, $white);
        //     switch ($iinfo[2]) {
        //         case 1 :
        //             $simage = imagecreatefromgif($destination);
        //             break;
        //         case 2 :
        //             $simage = imagecreatefromjpeg($destination);
        //             break;
        //         case 3 :
        //             $simage = imagecreatefrompng($destination);
        //             break;
        //         case 6 :
        //             $simage = imagecreatefromwbmp($destination);
        //             break;
        //         default :
        //             die("不支持的文件类型");
        //             exit;
        //     }
        //     imagecopy($nimage, $simage, 0, 0, 0, 0, $image_size[0], $image_size[1]);
        //     imagefilledrectangle($nimage, 1, $image_size[1] - 15, 80, $image_size[1], $white);
        //     switch ($watertype) {
        //         case 1 : //加水印字符串
        //             imagestring($nimage, 2, 3, $image_size[1] - 15, $waterstring, $black);
        //             break;
        //         case 2 : //加水印图片
        //             $simage1 = imagecreatefromgif("xplore.gif");
        //             imagecopy($nimage, $simage1, 0, 0, 0, 0, 85, 15);
        //             imagedestroy($simage1);
        //             break;
        //     }
        //     switch ($iinfo[2]) {
        //         case 1 :
        //             //imagegif($nimage, $destination);
        //             imagejpeg($nimage, $destination);
        //             break;
        //         case 2 :
        //             imagejpeg($nimage, $destination);
        //             break;
        //         case 3 :
        //             imagepng($nimage, $destination);
        //             break;
        //         case 6 :
        //             imagewbmp($nimage, $destination);
        //             //imagejpeg($nimage, $destination);
        //             break;
        //     }
        //     //覆盖原上传文件
        //     imagedestroy($nimage);
        //     imagedestroy($simage);
        // }
    }
}
?>
</body>
</html>