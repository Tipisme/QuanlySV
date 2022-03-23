<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset= UTF-8"/>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .wrapper{
            position: relative;
            width: 1300px;
            margin: 0 auto;
        }
        .head{
            position: relative;
            /* height: 100px;
            background: #e7e7e7;
            border: 1px solid #000;
            margin-bottom: 10px; */

        }
        .bottomright{
            position: absolute;
            bottom: 10px;
            right: 0px;
            font-size: 18px;
        }
        main{
            width: 1300px;
            height: 1000px;
            clear: both;

        }
        .content{
            width: 1130px;
            height: 1000px;
            background: #e7e7e7;
            border: 1px solid #000;
            float: left;
            margin-bottom: 10px;
        }
        .sidebar{
            width: 150px;
            height: 100px;
            background: #e7e7e7;
            border: 1px solid #000;
            float: right;
        }
        .footer{
            height: 100px;
            background: #e7e7e7;
            border: 1px solid #000;
            clear: both;
        }
    </style>
    <div class="wrapper">
        <div class="head">
            <div class="bottomright">
                <button class="btn btn-success" onclick="window.open('index.php', '_self')">Đăng xuất</button>
            </div>
            <p><center><h1>Chào mừng đến với trang quản lý sinh viên</h1></center></p>
        </div>
        <div class="main">
            <div class="content">
            <img src="background.jpg" alt="Cinque Terre" width="1130" height="1000">
            </div>
            <div class="sidebar">
                <button class="btn btn-success" onclick="window.open('stu_list.php', '_self')">Danh sách sinh viên</button>
                <button class="btn btn-success" onclick="window.open('stu_add.php', '_self')">Thêm sinh viên</button>
                <button class="btn btn-success" onclick="window.open('stu_edit.php', '_self')">Sửa thông tin</button>
                <button class="btn btn-success" onclick="window.open('stu_del.php', '_self')">Xóa sinh viên</button>
            </div>
        </div>
    </div>
</html>