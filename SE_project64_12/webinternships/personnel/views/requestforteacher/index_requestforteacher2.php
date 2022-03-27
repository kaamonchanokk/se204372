<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Sarabun&display=swap');
body {
  font-family: 'K2D', sans-serif;
  transition: background-color .5s;
}

table {
  font-family: 'Sarabun', sans-serif;
  margin: 25px auto;
  border-collapse: collapse;
  border-radius:1px;
  background:white;
  border: 1px solid #BDBDBD;
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
  left:50px;
}

.button {
  display: inline-block;
  font-family: 'Sarabun', sans-serif;
  padding: 10px 10px;
  font-size: 15px;
  color: #fff;
  background-color: #0080ff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #005fbd;
  position:relative; 
}

.button:hover {background-color: #0070de}

.button:active {
  background-color: #0070de;
  box-shadow: 0 5px #005fbd;
  transform: translateY(4px);
}

.buttonA {
  display: inline-block;
  text-decoration:none;
  font-family: 'Sarabun', sans-serif;
  padding: 10px 10px;
  font-size: 15px;
  color: #fff;
  background-color: #0080ff;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #005fbd;
  position:relative; 
  left:1250px;
}

.buttonA:hover {background-color: #0070de}

.buttonA:active {
  background-color: #0070de;
  box-shadow: 0 5px #005fbd;
  transform: translateY(4px);
}

.buttonB {
  display: inline-block;
  text-decoration:none;
  font-family: 'Sarabun', sans-serif;
  padding: 10px 10px;
  font-size: 15px;
  color: #fff;
  background-color: #F3E800;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #CFC500;
}

.buttonB:hover {background-color: #DFD500}

.buttonB:active {
  background-color: #DFD500;
  box-shadow: 0 5px #CFC500;
  transform: translateY(4px);
}
.buttonC {
  display: inline-block;
  text-decoration:none;
  font-family: 'Sarabun', sans-serif;
  padding: 10px 10px;
  font-size: 15px;
  color: #fff;
  background-color: #FF1B00;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #D81700;
}

.buttonC:hover {background-color: #E31800}

.buttonC:active {
  background-color: #E31800;
  box-shadow: 0 5px #D81700;
  transform: translateY(4px);
}
.div2{
    background: url("picformenu/789.png") no-repeat center; 
    background-size: cover;
    padding: 120px;
    position: relative;
    opacity: 0.8;
}
.block-1 {
    width: 1300px;
    height: auto;
    background: #FFFFFF;
  box-shadow: 0 3px 6px rgba(0,0,0,0.75);
  text-align: left;
  
}
.div3{
    background-color: #111; 
    padding: 30px;
    opacity: 0.8;
    width:1800px;
}
.div4{
    background-color: #111; 
    padding: 10px;
    opacity: 0.8;
    width:1800px;
}
p.a{
  color: #fff;
}
p.b{
  color: #111;
  float :left;
}
img.a{
  vertical-align: middle;
}
img.b{
  height : 250px;
  weight : 250px;
}
input[type=text], select, textarea {
  width: 450px;
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

<body style="background-color:#F1F1F1;">

<div id="main">
<div class="div4" style="100px">
<div class="d-flex align-items-end">
  <div class="row">
        <div class="col">
  <span style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
  <img src="picformenu/engbanner.png" width="400px" height="100px"/>
  </div>
</div>
</div>
</div>
<br>
<br>
<br>
<center>
<div class="block-1">
<br>
  <h2 style="position: relative;left:50px">ตรวจสอบคำร้องฝึกงาน</h2>
  <br>
  <div class="form__group">
<form class="example" method="get" action="">
        <input type="text" class="form__input" name="key" placeholder="ค้นหา..." required="">
        <input type="hidden" name="controller" value="requestforteacher">
        <button class="btn btn-lg btn-primary" style="position: relative;left:50px" type="submit" name="action" value="search">🔍</button></div>
</form>

<form class="example" method="get" action="">
<div  class="row" style="position: relative;left:30px;top:10px">
<p style="position: relative;left:40px;top:10px" >เรียงตาม : </p>
<div style="position: relative;left:60px">
<select class="selectpicker" name="selectname">
<option>โปรดเลือก</option>
  <option value="date" >วันที่ยื่นร้องขอ</option>
  <optgroup label="ผลการอนุมัติ">
    <option>อนุมัติ</option>
    <option>ไม่อนุมัติ</option>
    <option>รออนุมัติ</option>
  </optgroup>
  <optgroup label="ปีการศึกษา">
    <?php foreach($yearlist as $y) {echo "<option value = $y->year_name>
    $y->year_name</option>";}?>
    </optgroup>
</select>
<input type="hidden" name="controller" value="requestforteacher">
        <button class="btn btn-xs btn-primary" style="position: relative;left:10px" type="submit" name="action" value="selectsort">GO</button>
</div>
</div>
</form>

  <table border = 1>
  <tr>
  <th>วันที่ส่งคำร้อง</th>
<th>ปีการศึกษา</th>
<th>รหัสนิสิต</th>
<th>ชื่อนิสิต</th>
<th>ชื่อ/หน่วยงาน</th>
<th>ดูรายละเอียดคำร้อง</th>
<th>สถานะ</th>
<th> </th>
<th> </th>
  </tr>
  <tr>
    <td> </td>
  </tr>
  <tr>
    <td> </td>
  </tr>
  <tr>
    <td> </td>
    <td> </td>
    <td> </td>
    <td>ไม่พบผลลัพท์</td>
    <td> </td>
    <td> </td>
    <td> </td>
  </tr>
  <tr>
    <td> </td>
  </tr>
  <tr>
    <td> </td>
  </tr>
</table>
<br>
<br>
<br>
<br>
</div>
</center>
<br>
<br>
<br>
<br>

<div class="div3">
<img class="a" src="picformenu/engKps-icon-1.png" width="120px" height="120px" align="left"/>
<p class="a">&emsp;คณะวิศวกรรมศาสตร์ กำแพงแสน<br>
&emsp;มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตกำแพงแสน<br><br>
&emsp;เลขที่ 1 ม. 6 ต.กำแพงแสน อ.กำแพงแสน จ.นครปฐม 73140<br>
&emsp;โทรศัพท์ : 034 – 351897, 09-2378-5995, 09-2378-5656</p>
</div>

</div>
</body>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
openNav()
document.getElementById("a").classList.remove('active');
document.getElementById("b").classList.remove('active');
document.getElementById("c").classList.add('active');
document.getElementById("d").classList.remove('active');
document.getElementById("e").classList.remove('active');
document.getElementById("f").classList.remove('active');
document.getElementById("g").classList.remove('active');
document.getElementById("h").classList.remove('active');
document.getElementById("i").classList.remove('active');
</script>
</html>


