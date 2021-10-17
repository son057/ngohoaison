<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";
//kiểm tra
// move_uploaded_file($_FILES['imgupload']['tmp_name'],"public/upload/".$_FILES['imgupload']['name']);
require "mvc/lib/helper.php";
$h=new Helper;
$h->doUpload('imgupload');
?>