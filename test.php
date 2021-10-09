<?php
require_once 'config.php';
require_once PATH_TO_CORE.'db.php';
$db=new Db;
$sql="insert into tenbang...";
$success=$db->query($sql);
var_dump($success);
?>