<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css"/>
</head>
<body>

<form method="post" action="dangky.php" class="form">
<h2>Đăng ký thành viên</h2>
Firstname: <input type="text" name="firstname" value="" required/><br/>
Lastname: <input type="text" name="lastname" value="" required/><br/>
Username: <input type="text" name="username" value="" required/><br/>
Password: <input type="text" name="password" value="" required/><br/>
Email: <input type="email" name="email" value="" required/><br/>
Ngày đăng ký: <input type="text" name="date" value="" required/><br/>
<input type="submit" name="dangky" value="Đăng Ký"/><br/>
<?php require 'xuly.php';?>
</form>

</body>
</html>