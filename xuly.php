<?php
header('Content-Type: text/html; charset=utf-8');
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost:3307', 'root', '', 'datasv') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['dangky'])){
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$repassword = trim($_POST['repassword']);

if (empty($username)) {
array_push($errors, "Username is required"); 
}
if (empty($repassword)) {
array_push($errors, "Repassword is required"); 
}
if (empty($password)) {
array_push($errors, "Two password do not match"); 
}
if($repassword != $password){
echo "Password must like repassword";
}
else{
// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM member WHERE username = '$username' ";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO member (username, password) VALUES ('$username','$password')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="login.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Tên đăng nhập: ".$_POST['username']."<br/>";
echo "Mật khẩu: " .$_POST['password']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
}
}
}
}
?>