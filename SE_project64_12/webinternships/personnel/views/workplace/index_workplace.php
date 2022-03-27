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
body {
  font-family: 'K2D', sans-serif;
  transition: background-color .5s;
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
  left:1200px;
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
<h2 style="position: relative;left:50px">สถานประกอบการ</h2>
<br>
<table border = 1>
<tr> 
<th>ชื่อสถานประกอบการ/หน่วยงาน</th>
<th>รายละเอียดงาน</th>
<th>ค่าตอบแทน</th>
<th>แก้ไข</th>
<th>ลบ</th>

</tr>
<a class="btn btn-primary btn-xs" style="float:right;position: relative;right:20px" href=?controller=workplace&action=newworkplace>เพิ่มข้อมูล</a><br>
<?php 
  foreach($workplaceList as $workplaceList)
{
    echo"<tr>
    <td>$workplaceList->name_workp</td>
    <td>$workplaceList->detail_workp</td>
    <td>$workplaceList->money_workp</td>
    ";?>
     <td><a class="btn btn-warning btn-xs" href=?controller=workplace&action=updateForm&<?php echo "id_workp=$workplaceList->id_workp";?>>📝</a></td>
     
     <td><form method="POST" action="?controller=workplace&action=delete">
      <input name="_method" type="hidden" value="DELETE">
      <input name="id_workp" type="hidden" value="<?php echo "$workplaceList->id_workp";?>">
      <button type="button" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" test="<?php echo "$workplaceList->name_workp";?>" title='Delete'>🗑️</button>
      </form></td>
    </tr>
    <?php
}
echo "</table>";
?>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          var test = $(this).attr("test");
          event.preventDefault();
          Swal.fire({
          title: 'แน่ใจว่าคุณต้องการลบ?',
          text: ""+test,
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'ลบ',
          cancelButtonText: 'ยกเลิก'
          }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
            .then(function() {
            form.submit(); // <--- submit form programmatically
            });
        }
        })
      });
  
</script>
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
document.getElementById("b").classList.add('active');
document.getElementById("c").classList.remove('active');
document.getElementById("d").classList.remove('active');
document.getElementById("e").classList.remove('active');
document.getElementById("f").classList.remove('active');
document.getElementById("g").classList.remove('active');
document.getElementById("h").classList.remove('active');
document.getElementById("i").classList.remove('active');
</script>
</html>