<?php

// Kết nối CSDL
$conn = mysqli_connect ('localhost:3307', 'root', '', 'datasv') or die ('Không thể kết nối tới database');
mysqli_set_charset($conn, 'UTF8');

// Khởi tạo SESSION
session_start();
if (isset($_SESSION['username'])){
unset($_SESSION['username']);
}

// Dùng Isset kẻm tra
if (isset($_POST['login'])) {

$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);

if (!$username || !$password) {
echo "Nhập đầy đủ thông tin <a href='javascript: history.go(-1)'>Trở lại</a>";
die();
}

// mã hóa pasword
$password = md5($password);

//Kiểm tra tên đăng nhập có tồn tại không
$query = "SELECT username, password FROM users WHERE username='$username'";

$result = mysqli_query($conn, $query) or die( mysqli_error($conn));

$row = mysqli_fetch_array($result);

//So sánh 2 mật khẩu có trùng khớp hay không
if ($password != $row['password']) {
echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
die();
}

//Lưu tên đăng nhập
$_SESSION['username'] = $username;
echo "Xin chào <b>" .$username . "</b>. Bạn đã đăng nhập thành công. <a href='giaodien.php'>Tiếp tục</a>";
die();
$connect->close();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="login.css"/>
</head>
<body>
<form method="post" action="login.php" class="form">
    <h2>Đăng nhập</h2>
Tên đăng nhập : <input type='text' name='username' required/>
Mật khẩu : <input type='password' name='password' required/>
<input type='submit' class="button" name="login" value='Đăng nhập' />
<p>Bạn chưa có tài khoản,<a href='register.php'>Đăng ký ngay</a></p>
<form>
</body>
</html>