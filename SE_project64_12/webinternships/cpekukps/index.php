<?php
if(isset($_GET['controller']) && isset($_GET['action'])) 
{  
     $controller = $_GET['controller'];
    $action = $_GET['action'];

}else

{   
    $controller= 'main'; 
    $action = 'home';

} 
?>
<html>
<head>
<link rel="icon" href="image/favicon.ico" type="image/x-icon">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=K2D:wght@500&display=swap');
html,
body {
	height: 100%;
}

body {
	margin: 0;
	background: "white";
	font-family: 'K2D', sans-serif;
	font-weight: 100;
    background-repeat: no-repeat;
    background-attachment: fixed;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    padding: 14px 16px;
    text-align :right;
}

li {
    float: left;
}

li a {
    display: block;
    color: white; 
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
<body>
<center>
    <ul>
    <li><img src="picformenu/engbanner.png" width="333px" height="83px"/></li>
    <li style="margin-left:600px;margin-top:10px"><a href="?controller=main&action=home">หน้าหลัก</a></li>
    <li style="margin-top:10px"><a href="?controller=news&action=home">ข่าวสาร</a></li>
    <li style="margin-top:10px"><a href="?controller=workplace&action=index">สถานประกอบการ</a></li>
    <li style="margin-top:10px"><a href="?controller=document&action=index">เอกสารฝึกงาน</a></li>
    <!--<li><a href="?controller=test&action=home1">ทดสอบ</a></li>-->
    <li style="margin-top:10px"><a href="?controller=login&action=index">เข้าสู่ระบบ</a></li>
    <ul>
</center>
</body>
</html>
<?php require_once("./routes.php"); ?>