<?php
include 'connect.php';
if(isset($_POST['login']))
{
    echo"Thành Công";
}

?>



<form action="login.php" method=post>
<table>
<tr>
<td>Username</td><td><input type="text" name="username"></td>
</tr>
<td>Password</td><td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan=2><button type="submit" name="login"> Đăng Nhập</button> <input type="Reset" value=Reset></td>
</tr>
</table>
</form>