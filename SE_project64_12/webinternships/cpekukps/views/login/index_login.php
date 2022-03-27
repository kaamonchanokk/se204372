<!DOCTYPE html>
<html>
<head>
<title>เข้าสู่ระบบ</title>
<link rel="icon" href="image/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Sarabun&display=swap');
table {
  font-family: 'Sarabun', sans-serif;
  margin: 25px auto;
  border-collapse: collapse;
  border-radius:1px;
  overflow:hidden;
  background:white;
  border: none;
  border-bottom: 2px solid #005723;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1), 0px 10px 20px rgba(0, 0, 0, 0.05), 0px 20px 20px rgba(0, 0, 0, 0.05), 0px 30px 20px rgba(0, 0, 0, 0.05);
}
table tr:hover {
  background: #f4f4f4;
}
table tr:hover td {
  color: #000;
}
table th, table td {
  color: #555;
  border: none;
  padding: 12px 35px;
  border-collapse: collapse;
}
table th {
  background: #979797;
  color: #fff;
  text-transform: uppercase;
}
table th.last {
  border-right: none;
}
.form__input {
  color: #333;
  font-size: 15px;
  font-family: 'Sarabun', sans-serif;
  padding: 10px 10px;
  border-radius: 30px;
  background-color: rgb(255, 255, 255);
  border: none;
  position:relative;
  left:1200px;
  Top:5px;
}
/* CSS */
.button-5 {
  align-items: center;
  background-clip: padding-box;
  background-color: #00C003;
  border: 1px solid transparent;
  border-radius: .25rem;
  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-flex;
  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 600;
  justify-content: center;
  line-height: 1.25;
  margin: 0;
  min-height: 3rem;
  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
  position: relative;
  text-decoration: none;
  transition: all 250ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  width: auto;
}

.button-5:hover,
.button-5:focus {
  background-color: #00DE03;
  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
}

.button-5:hover {
  transform: translateY(-1px);
}

.button-5:active {
  background-color: #c85000;
  box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
  transform: translateY(0);
}
.div2{
    background: url("picformenu/101112.png") no-repeat center; 
    background-size: cover;
    padding: 120px;
    position: relative;
    opacity: 0.8;
}
.div3{
    background-color: #111; 
    padding: 50px;
    opacity: 0.8;
}
p.a{
  color: #fff;
}
img.a{
  vertical-align: middle;
}
input[type=text], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=password], select, textarea {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=text2], select, textarea {
  width: 200px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=date2] {
  width: 200px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=date] {
  width: 500px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

</style>
<body>
<div class="div2">
</div>

<div class="form__group">

<br>
<br>
<center>
<form method="POST" action="?controller=login&action=getlogin" enctype="multipart/form-data" >
<h1 style="position: relative;right:180px">เข้าสู่ระบบ</h1>
<br>
<div class="col-75" style="position: relative;right:180px;bottom:10px" >บัญชืเครือข่ายนนทรี</div>
<div class="col-75"><input type="text" name="username" placeholder="เช่น b622xxxxxxx หรือ regxxx" style="position: relative;" required/></div>
<br>
<br>
<div class="col-75" style="position: relative;right:220px;bottom:10px" >รหัสผ่าน</div>
<div class="col-75"><input type="password" name="password" placeholder="รหัสผ่านบัญชีผู้ใช้" style="position: relative;" required/></div><br>
<button type="submit" class = "button-5"  style="width:32%" name="action" value="getlogin" >เข้าสู่ระบบ</button>
</center>
<br>
<br>
<br>
<br>
<br>
</body>
<div class="div3">
<img class="a" src="image/engKps-icon-1.png" width="120px" height="120px" align="left"/>
<p class="a">&emsp;คณะวิศวกรรมศาสตร์ กำแพงแสน<br>
&emsp;มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน<br><br>
&emsp;เลขที่ 1 ม. 6 ต.กำแพงแสน อ.กำแพงแสน จ.นครปฐม 73140<br>
&emsp;โทรศัพท์ : 034 – 351897, 09-2378-5995, 09-2378-5656</p>
</div>
</html>