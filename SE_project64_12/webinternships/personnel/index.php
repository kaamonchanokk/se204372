<?php 

    session_start();

    if ($_SESSION['staff_name'] === null) {
        header("location: https://bservcpe.eng.kps.ku.ac.th/db21/db21_097/webinternships/cpekukps/?controller=login&action=index");
    } else {
?>
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
<!DOCTYPE html>
<html>
<head>
<title>เว็ปฝึกงานสำหรับอาจารย์/บุคลากร</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="picformenu/favicon.ico" type="image/x-icon">
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
.sidenav {
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
  background-color: #2B2B2B;
  color:white;
  border-left: 5px solid #850024;
  text-decoration:none;
}
.sidenav a.active {
  border-left: 5px solid #850024;
  background: #2B2B2B;
  color:white;
}
.sidenav .closebtn {
  position: absolute;
  top: -18px;
  right: 35px;
  height: 5px;
  width: 5px;
  font-size: 36px;
  margin-left:250px;
}

#main {
  transition: margin-left .3s;

}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<body>
<div id="mySidenav" class="sidenav">
<center><p style="color:white;" >ชื่อผู้ใช้</p></center>
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div class="row" >
<?php
echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['staff_picture']) .'" width="100px" height="120px" style="position: relative;left:25px" />';
?>
<div class="col">
    <p style="color:white;position: relative;left:30px" ><?php echo $_SESSION['staff_name']; ?></p>
    <?php
        $staff_position = $_SESSION['staff_position'];
        if($staff_position==="อาจารย์")
        {
            echo '<p style="color:white;position: relative;left:30px" >อาจารย์</p>';
        }
        else
        {
          echo '<p style="color:white;position: relative;left:30px" >เจ้าหน้าที่<br>ผู้ประสานงาน</p>';
        } 
    ?>
  </div>
</div>
<div style="position: relative;top:25px">
  <a id="a" href="?controller=main&action=home">หน้าหลัก</a>
  <a id="c" href="?controller=requestforteacher&action=index">ตรวจสอบ<br>คำร้องขอฝึกงาน</a>
  <a id="d" href="?controller=documentfornisit&action=index">ออกเอกสาร</a>
  <a id="e" href="?controller=presentforteacher&action=index">ตรวจสอบ<br>นำเสนอการฝึกงาน</a>
  <a id="b" href="?controller=workplace&action=index">สถานประกอบการ</a>
  <a id="f" href="?controller=news&action=index">อัพโหลดข่าวสาร</a>
  <a id="g" href="?controller=document&action=index">อัพโหลดเอกสารฝึกงาน</a>
  <a id="h" href="../personnel/views/main/logout.php">ออกจากระบบ</a>
</div>
</div>
</body>
</html> 

<?php require_once("./routes.php"); ?>
<?php 

}
?>
