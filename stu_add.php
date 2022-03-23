<?php
require_once ('dbhelp.php');

$s_fullname = $s_age = $s_address = $s_gender = $s_email = $s_phone = $s_score = '';

if (!empty($_POST)) {
	$s_id = '';

	if (isset($_POST['fullname'])) {
		$s_fullname = $_POST['fullname'];
	}

	if (isset($_POST['age'])) {
		$s_age = $_POST['age'];
	}

	if (isset($_POST['address'])) {
		$s_address = $_POST['address'];
	}

	if (isset($_POST['id'])) {
		$s_id = $_POST['id'];
	}
    if (isset($_POST['gender'])){
        $s_gender = $_POST['gender'];
    }
    if (isset($_POST['email'])){
        $s_email = $_POST['email'];
    }
    if (isset($_POST['phone'])){
        $s_phone = $_POST['phone'];
    }
    if (isset($_POST['score'])){
        $s_score = $_POST['score'];
    }

	$s_fullname = str_replace('\'', '\\\'', $s_fullname);
	$s_age      = str_replace('\'', '\\\'', $s_age);
	$s_address  = str_replace('\'', '\\\'', $s_address);
	$s_id       = str_replace('\'', '\\\'', $s_id);
    $s_gender   = str_replace('\'', '\\\'', $s_gender);
    $s_email    = str_replace('\'', '\\\'', $s_email);
    $s_phone    = str_replace('\'', '\\\'', $s_phone);
    $s_score    = str_replace('\'', '\\\'', $s_score);

	if ($s_id != '') {
		//update
		$sql = "update student set fullname = '$s_fullname', age = '$s_age', address = '$s_address',
				gender = '$s_gender', email = '$s_email', phone = '$s_phone', score = '$s_score' where id = " .$s_id;
	} else {
		//insert
		$sql = "insert into student(fullname, age, gender, address, email, phone, score) value 
        ('$s_fullname', '$s_age','$s_gender', '$s_address', '$s_email', '$s_phone', '$s_score')";
	}

	// echo $sql;

	execute($sql);

	header('Location: stu_list.php');
	die();
}

$id = '';
if (isset($_GET['id'])) {
	$id          = $_GET['id'];
	$sql         = 'select * from student where id = '.$id;
	$studentList = executeResult($sql);
	if ($studentList != null && count($studentList) > 0) {
		$std        = $studentList[0];
		$s_fullname = $std['fullname'];
		$s_age      = $std['age'];
		$s_address  = $std['address'];
        $s_gender   = $std['gender'];
        $s_email    = $std['email'];
        $s_phone    = $std['phone'];
        $s_score    = $std['score'];
	} else {
		$id = '';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<button class="btn btn-success" onclick="window.open('index.php','_self')">Đăng suất</button>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Add Student</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
					  <label for="usr">Name:</label>
					  <input type="number" name="id" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$s_fullname?>">
					</div>
					<div class="form-group">
					  <label for="birthday">Age:</label>
					  <input type="number" class="form-control" id="age" name="age" value="<?=$s_age?>">
					</div>
                    <div class="from-group">
                        <label for="gender">Gender:</label>
                        <input type="text" class="form-control" id="gender" name="gender" value="<?=$s_gender?>">
                    </div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input type="text" class="form-control" id="address" name="address" value="<?=$s_address?>">
					</div>
                    <div class="from-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?=$s_email?>">
                    </div>
                    <div class="from-group">
                        <label for="phone">Phone:</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="<?=$s_phone?>">
                    </div>
                    <div class="from-group">
                        <label for="score">Score:</label>
                        <input type="text" class="form-control" id="score" name="score" value="<?=$s_score?>">
                    </div>
					<button class="btn btn-success">Lưu</button>
				</form>
			</div>
		</div>
	</div>
	<button class="btn btn-success" onclick="window.open('giaodien.php','_self')">Thoát</button>
</body>
</html>