<?php


$server = 'son:81';
$user = 'root';
$pass = '';
$database = 'ngohoaison';

$conn = new mysqLi($server, $user, $pass, $database);


if($conn){
    mysqLi_query($conn, "SETNAME 'utf8'");
    echo 'Đã kết nối database thành công';
}
else {
    echo 'Kết nối không thành công';
}
?>