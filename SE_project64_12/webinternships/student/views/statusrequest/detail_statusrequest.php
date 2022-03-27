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
    width: 1250px;
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
  width: 500px;
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
                <form method="get" action="">
                  <input type="hidden"name="controller"value="statusrequest"/>
                  <button class="btn btn-danger btn-lg"  style="margin-left: 1100px;margin-top:30px" name="action" value="index" >ย้อนกลับ</button>
              </form> 
<br>
  <h2 style="position: relative;left:50px">คำร้องขอฝึกงาน ปีการศึกษา  <?php echo $statusrelist->year_internships; ?></h2>
  <div class="row">
  <h3 style="position:relative;left:65px;">สถานะ : </h3>
  <?php
  if($statusrelist->status_intre==="อนุมัติ")
  {
    echo '<h3 style="position:relative;left:65px;color:green">&ensp;อนุมัติ</h3>';
  }
  else if($statusrelist->status_intre==="ไม่อนุมัติ")
  {
    echo '<h3 style="position:relative;left:65px;color:red">&ensp;ไม่อนุมัติ</h3>';
  }
  else
  {
    echo '<h3 style="position:relative;left:65px;color:#FFD800">&ensp;รออนุมัติ</h3>';
  }
  ;?>
  </div>
  <br>

  <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>ชื่อ-นามสกุล</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->student_name"; ?></p></div>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>ระบุชื่อของผู้ที่จะให้ภาควิชา ออกหนังสือขอความอนุเคราะห์ฝึกงาน/สหกิจ</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->p1_intre"; ?></p></div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>รหัสนิสิต</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->student_id"; ?></p></div>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>ชื่อสถานประกอบการ</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->place_intre"; ?></p></div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>วันที่เขียนคำร้อง</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->date_intre"; ?></p></div>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>ที่อยู่สถานที่ประกอบการ</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->add_intre"; ?></p></div>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>เบอร์โทรศัพท์</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->phone_intre"; ?></p></div>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>ชื่อผู้ประสานงาน</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->p2_intre"; ?></p></div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>Facebook</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->facebook_intre"; ?></p></div>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>เบอร์โทรของผู้ประสานงาน</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->phonep2_intre"; ?></p></div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>ตำแหน่งไปฝึกงาน</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->position_intre"; ?></p></div>
        </div>
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>อีเมล์ของผู้ประสานงาน</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->emailp2_intre"; ?></p></div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>ระยะฝึกงาน</b></div>
                <div class="col-75">
                <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->datein_intre"; ?> ถึง <?php echo "$statusrelist->dateout_intre"; ?></p></div>
                </div>
              </div>
        <div class="col">
            <div class="row">
            <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>ดาวน์โหลดไฟล์คำร้อง</b></div>
            <?php
            echo '<a class="btn btn-primary btn-xs" style="position: relative;left:50px" href="data:application/pdf;base64,'.base64_encode($statusrelist->file_intre).' " onclick="debugBase64(this.href)" />ดาวน์โหลด</a>';
            ?>
            </div>
            <div class="col">
            <div class="col-25" style="position: relative;left:50px"><b>รูปแบบฝึกงาน</b></div>
            <div class="col-75" style="position: relative;left:50px"><p><?php echo "$statusrelist->a_intre"; ?></p></div>
            </div>
            </div>
        </div>
   
        </div>

    <br>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          var test = $(this).attr("test");
          var test2 = $(this).attr("test2");
          event.preventDefault();
          Swal.fire({
          title: 'ต้องการลงสถานะ '+test+'?',
          text: ""+test2,
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'ยืนยัน',
          cancelButtonText: 'ยกเลิก'
          }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById("reasonintre").value = ' ';
            Swal.fire(
              'ทำรายการสำเร็จ!',
              'ลงสถานะเรียบร้อย',
              'success'
            )
            .then(function() {
            form.submit(); // <--- submit form programmatically
            });
        }
        })
      });
  
</script>
<script type="text/javascript">

$('.show_confirm2').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          var test = $(this).attr("test");
          var test2 = $(this).attr("test2");
          event.preventDefault();
          Swal.fire({
          title: 'ต้องการลงสถานะ '+test+'?',
          text: ""+test2,
          icon: 'warning',
          input: 'textarea',
          inputPlaceholder: 'กรุณาระบุเหตุผล...',
          inputAttributes: {
            'aria-label': 'กรุณาระบุเหตุผล...'
          },
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'ยืนยัน',
          cancelButtonText: 'ยกเลิก'
          }).then((result) => {
          if (result.isConfirmed) {
            document.getElementById("reasonintre2").value = result.value;
            Swal.fire(
              'ทำรายการสำเร็จ!',
              'ลงสถานะเรียบร้อย',
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
document.getElementById("b").classList.remove('active');
document.getElementById("c").classList.add('active');
document.getElementById("d").classList.remove('active');
document.getElementById("e").classList.remove('active');
document.getElementById("f").classList.remove('active');
document.getElementById("g").classList.remove('active');
document.getElementById("h").classList.remove('active');
document.getElementById("i").classList.remove('active');
</script>
<script>
function debugBase64(base64URL){
    var win = window.open();
    win.document.write('<iframe src="' + base64URL  + '" frameborder="0" style="border:0; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%;" allowfullscreen></iframe>');
}
</script>
</html>

