<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
    width: 1200px;
    height: auto;
    background: #FFFFFF;
  box-shadow: 0 3px 6px rgba(0,0,0,0.75);
  text-align: left;
  
}
.div3{
    background-color: #111; 
    padding: 30px;
    opacity: 0.8;
}
.div4{
    background-color: #111; 
    padding: 10px;
    opacity: 0.8;
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
  width: 1100px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=text2], select, textarea {
    width: 1100px;
  height: 200px;
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
  <h2 style="position: relative;left:50px">แก้ไขเอกสารฝึกงาน</h2>
  <br>
  <form method="POST" action="?controller=document&action=update" enctype="multipart/form-data" >
    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">วันที่เพิ่มเอกสาร</div>
            <div class="col-75"><input type="date" name="date_doc" style="position: relative;left:50px"
            value="<?php echo "$documentList->date_doc" ;?>" required/></div>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">วันที่อัพเดตเอกสาร</div>
            <div class="col-75"><p style="position: relative;left:50px"><?php echo date("Y-m-d");?></p></div>
            <input name="date_doc" type="hidden" value="<?php echo date("Y-m-d"); ?>">
          </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">ชื่อเอกสาร</div>
            <div class="col-75"><input type="text" name="name_doc" style="position: relative;left:50px"
            value="<?php echo "$documentList->name_doc";?>" required/></div>
        </div>
    </div>
    <br>

    <!--<div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">อัพโหลดไฟล์</div>
            <div class="col-75"><input type="file" name="file_doc" value="" style="position: relative;left:50px;"/></div>
        </div>
    </div>-->
    
    
    <div class="row">
        <div class="col">
             <input type="hidden"name="id_doc"value="<?php echo $documentList->id_doc; ?>"/>
              <button type="submit" class = "btn btn-primary btn-xs"  style="position: relative;top:25px;left:500px" name="action">อัพเดต</button>
              </form>
        </div>
        <div class="col">
        <form method="get" action="">
                  <input type="hidden"name="controller"value="document"/>
                  <button class = "btn btn-danger btn-xs"  style="position: relative;top:25px" name="action" value="index" >ย้อนกลับ</button>
              </form> 
        </div>
    </div>
    <br>
<br>
<br>
<br>

</div>

</form>
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
document.getElementById("c").classList.remove('active');
document.getElementById("d").classList.remove('active');
document.getElementById("e").classList.remove('active');
document.getElementById("f").classList.remove('active');
document.getElementById("g").classList.add('active');
document.getElementById("h").classList.remove('active');
document.getElementById("i").classList.remove('active');
</script>
</html>

