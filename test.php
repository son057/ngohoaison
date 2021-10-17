<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method=post action='testupload.php' enctype='multipart/form-data'>
    <input type=file name=imgupload>
    <input type=file name=avatar>
    <input type=submit name=ok value=upload>
    </form>
</body>
</html> -->


<?php
require 'mvc/lib/helper.php';
$h=new Helper;
echo $h->to_alias('CHIẾC KHĂN GIÓ ẤM');