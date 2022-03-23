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
            width: 1300px;
            height: 1000px;
            background: #e7e7e7;
            border: 1px solid #000;
            float: left;
            margin-bottom: 10px;
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
                <button class="btn btn-success" onclick="window.open('register.php', '_self')">Đăng ký</button>
                <button class="btn btn-success" onclick="window.open('login.php', '_self')">Đăng nhập</button>
            </div>
            <p><center><h1>Chào mừng đến với trang quản lý sinh viên</h1></center></p>
        </div>
        <div class="main">
            <div class="content">
            <img src="background.jpg" alt="Cinque Terre" width="1300" height="1000">
            </div>
        </div>
    </div>
</html>