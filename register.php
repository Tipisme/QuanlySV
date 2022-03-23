<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="register.css"/>
</head>
<body>

<form method="post" action="register.php" class="form">

<h2>Đăng ký thành viên</h2>

Username: <input type="text" name="username" value="" required>

Password: <input type="password" name="password"  required/>

Repassword: <input type="password" name="repassword"  required/>

<input type="submit" name="dangky" value="Đăng Ký"/>
<p>Bạn đã có tài khoản,<a href='login.php'>Đăng nhập</a></p>
<?php require 'xuly.php';?>
</form>

</body>
</html>