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
<form id="myform1" method="POST" action="?controller=intrequest&action=addintrequest" enctype="multipart/form-data"  novalidate>
<div class="block-1">
<br>
  <h2 style="position: relative;left:50px">ยื่นคำร้องฝึกงาน (ปีการศึกษา <?php echo "$yearlist->year_name"; ?>)</h2>
  <br>

    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">ชื่อ-นามสกุล</div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$studentList->student_name"; ?></p></div>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">ระบุชื่อของผู้ที่จะให้ภาควิชา ออกหนังสือขอความอนุเคราะห์ฝึกงาน/สหกิจ</div>
            <div class="col-75"><input type="text" name="p1_intre" class="form-control form-control-lg" style="position: relative;left:50px" required/>
            <div class="invalid-feedback" style="position: relative;left:50px"  >
                    กรุณาระบุชื่อ
                  </div>  
          </div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">รหัสนิสิต</div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$studentList->student_id"; ?></p></div>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">ชื่อสถานประกอบการ</div>
            <div class="col-75" style="position: relative;left:50px">
                                <select name="place_intre" onchange="opendiv(this.value)" style="width:500px"><br><br><br>
                                <?php foreach($workplaceList as $w) {echo "<option value = $w->name_workp>
                                $w->name_workp</option>";}?>
                                <option value="other">อื่นๆ</option>
                                </select><br />
                                <div id="myDiv" style="display:none">
                                <div class="col-25" style="position: relative;top:30px">โปรดระบุชื่อสถานที่</div>
                                <div class="col-75"><input type="text" style="position: relative;top:30px" name="place_intretxt"  ></div>

                                  <div class="col-25" style="position: relative;top:70px">ที่อยู่สถานที่ประกอบการ</div>
                                  <div class="col-75"><input type="text" style="position: relative;top:70px" name="add_intre"  ></div><br>
                        
                              </div></div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">วันที่เขียนคำร้อง</div>
            <div class="col-75"><p name="date_intre"style="position: relative;left:50px"><?php echo date("Y-m-d"); ?><p>
            <input name="date_intre" type="hidden" value="<?php echo date("Y-m-d"); ?>">
          </div><br>
        
          </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">เบอร์โทรศัพท์</div>
            <div class="col-75"><input type="text" name="phone_intre" class="form-control form-control-lg" pattern="^0([8|9|6])([0-9]{8}$)" style="position: relative;left:50px" required/>
            <div class="invalid-feedback" style="position: relative;left:50px"  >
                    กรุณากรอกเบอร์โทรศัพท์ 10 หลัก
                  </div>
          </div><br>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">ชื่อผู้ประสานงาน</div>
            <div class="col-75"><input type="text" name="p2_intre" class="form-control form-control-lg" style="position: relative;left:50px" required/>
            <div class="invalid-feedback" style="position: relative;left:50px"  >
                    กรุณาระบุชื่อผู้ประสานงาน
                  </div>
          </div><br>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">Facebook</div>
            <div class="col-75"><input type="text" name="facebook_intre" class="form-control form-control-lg" style="position: relative;left:50px" required/>
            <div class="invalid-feedback" style="position: relative;left:50px"  >
                    กรุณาระบุFacebook
                  </div>
          </div><br>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">เบอร์โทรของผู้ประสานงาน</div>
            <div class="col-75"><input type="text" name="phonep2_intre"  class="form-control form-control-lg" style="position: relative;left:50px" required/>
            <div class="invalid-feedback" style="position: relative;left:50px"  >
                    กรุณาระบุเบอร์โทรของผู้ประสานงาน
                  </div>
          </div><br>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">ตำแหน่งไปฝึกงาน</div>
            <div class="col-75"><input type="text" name="position_intre" class="form-control form-control-lg" style="position: relative;left:50px" required/>
            <div class="invalid-feedback" style="position: relative;left:50px"  >
                    กรุณาระบุตำแหน่งไปฝึกงาน
                  </div>
          </div><br>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">อีเมล์ของผู้ประสานงาน</div>
            <div class="col-75"><input type="text" name="emailp2_intre" pattern="^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control form-control-lg" 
            style="position: relative;left:50px" id="input_email" required/>
            <div class="invalid-feedback" style="position: relative;left:50px"  >
                    กรุณากรอกอีเมล์ผู้ประสานงานให้ถูกต้อง
                  </div>
          </div><br>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px">ระยะฝึกงาน</div>
                <div class="col-75">
                <div class="row" style="position: relative;left:65px;top:10px">
                  <p style="position: relative;top:15px" >เริ่มต้น</p><input type="date" name="datein_intre" class="form-control form-control-lg" style="position: relative;left:10px;width:440px" required/>
                  <div class="row" style="position: relative;left:20px">
                  <p style="position: relative;top:25px;right:5px">สิ้นสุด</p><input type="date" name="dateout_intre" class="form-control form-control-lg" style="position: relative;left:10px;width:440px;top:10px" required/>
                  </div>  
                </div>
                </div>
              </div>
        <div class="col">
              <div class="col-25" style="position: relative;left:50px">แนบไฟล์ยื่นคำร้องฝึกงาน/สหกิจ(.pdf)</div>
                 <div class="col-75" style="position: relative;left:50px;top:15px">
                    <input type="file" name="file_intre" value="" required/>
                    <div class="invalid-feedback"  >
            กรุณาแนบไฟล์
          </div>    <div style="position: relative;top:10px">
                    <div class="col-25">ประเภทฝึกงาน</div>
                    <div style="position: relative">
                    <input TYPE="Radio" Name="a_intre" ID="R1" Value="ฝึกงาน" required>
                    <label>ฝึกงาน</label>
                    <input TYPE="Radio" Name="a_intre" ID="R2" Value="สหกิจศึกษา" required>
                    <label>สหกิจศึกษา</label>
                    <div class="invalid-feedback"  >
                    กรุณาเลือกประเภทฝึกงาน
                  </div>  
                  </div> 
                                </div>      
                  </div>
              </div>
        </div>
        <div class="row">
            <div class="col">
              <input type="hidden"name="controller"value="test"/>
              <center>
              <br>
<br>
<br>
              <input name="year_internships" type="hidden" value="<?php echo "$yearlist->year_name"; ?>">
              <button type="submit" class = "btn btn-primary btn-lg"  style="position: relative;top:25px" name="action" value="addintrequest" >ส่งคำร้องฝึกงาน</button>
              </form>
            </center>
            </div>
          </div>
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

</div>


</body>
<script>
function opendiv(val){
	if(val=='other'){
		document.getElementById('myDiv').style.display='block';
	}else{
		document.getElementById('myDiv').style.display='none';
	}
}
</script>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
openNav()
document.getElementById("a").classList.remove('active');
document.getElementById("b").classList.add('active');
document.getElementById("c").classList.remove('active');
document.getElementById("d").classList.remove('active');
document.getElementById("e").classList.remove('active');
document.getElementById("f").classList.remove('active');
document.getElementById("g").classList.remove('active');


</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
$(function(){
     $("#myform1").on("submit",function(event){
         var form = $(this)[0];
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        else
        {
          
          if (confirm("ยืนยันการส่งฝึกงาน?")) {
          } else {
            event.preventDefault();
          event.stopPropagation();
          }
        }
        form.classList.add('was-validated'); 
     });     
});
</script>
</html>

