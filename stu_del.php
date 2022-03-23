<?php
require_once ('dbhelp.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Management</title>
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
				Quản lý thông tin sinh viên
				<form method="get">
					<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Họ & Tên</th>
                            <th>Tuổi</th>
                            <th>Giới tính</th>
							<th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Số đt</th>
                            <th>Điểm</th>
							<th width="60px"></th>
						</tr>
					</thead>
					<tbody>
<?php
if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from student where fullname like "%'.$_GET['s'].'%"';
} else {
	$sql = 'select * from student';
}

$studentList = executeResult($sql);


foreach ($studentList as $std) {
	echo '<tr>
			<td>'.$std['id'].'</td>
			<td>'.$std['fullname'].'</td>
			<td>'.$std['age'].'</td>
            <td>'.$std['gender'].'</td>
			<td>'.$std['address'].'</td>
            <td>'.$std['email'].'</td>
            <td>'.$std['phone'].'</td>
            <td>'.$std['score'].'</td>
			<td><button class="btn btn-danger" onclick="deleteStudent('.$std['id'].')">Delete</button></td>
		</tr>';
}
?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function deleteStudent(id) {
			option = confirm('Bạn có muốn xoá sinh viên này không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('delete_student.php', {
				'id': id
			}, function(data) {
				alert(data)
				location.reload()
			})
		}
	</script>
	<button class="btn btn-success" onclick="window.open('giaodien.php','_self')">Thoát</button>
</body>
</html>