<?php 

    session_start();

    if ($_SESSION['student_username'] === null) {
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
    $controller= 'mainnisit'; 
    $action = 'home';

} 
?>
<!DOCTYPE html>
<html>
<head>
<title>เว็ปฝึกงานสำหรับนิสิต</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="picformenu/favicon.ico" type="image/x-icon">
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

</head>
<body>
<div id="mySidenav" class="sidenav" >
<center><p style="color:white;" >ชื่อผู้ใช้</p></center>
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<div class="row" >
<?php
echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['student_picture']) .'" width="100px" height="120px" style="position: relative;left:25px" />';
?>
<!--<img src=/webinternships/Admin/student/picprofile/<?php echo $_SESSION['student_picture']; ?> width="100px" height="120px" style="position: relative;left:25px"/>-->
<div class="col">
    <p style="color:white;position: relative;left:30px" ><?php echo $_SESSION['student_name']; ?></p>
  <p style="color:white;position: relative;left:30px" >นิสิต</p>
  </div>
</div>
<div style="position: relative;top:25px">
 
  <a id="a" href="?controller=mainnisit&action=home">หน้าหลัก</a>
  <a id="b" href="?controller=intrequest&action=newintrequest">คำร้องฝึกงาน</a>
  <a id="c" href="?controller=statusrequest&action=index">ตรวจสอบผลอนุมัติฝึกงาน</a>
  <a id="d" href="?controller=documentfornisit&action=index">เอกสารฝึกงาน</a>
  <a id="e" href="?controller=intpresent&action=newintpresent">นำเสนอฝึกงาน</a>
  <a id="f" href="?controller=statuspresent&action=index">ตรวจสอบการฝึกงาน</a>
  <a id="g" href="../student/views/mainnisit/logout.php">ออกจากระบบ</a>
</div>
</div>
</body>
<script>
</script>
</html> 

<?php require_once("./routes.php"); ?>
<?php 

}
?>
    