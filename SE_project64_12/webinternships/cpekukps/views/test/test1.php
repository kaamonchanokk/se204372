<!DOCTYPE html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Sarabun&display=swap');
#content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
    width: 50%;
    margin: 20px auto;
}
form div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}
img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
}
.div2{
    background: url("picformenu/456.png") no-repeat center; 
    background-size: cover;
    padding: 120px;
    position: relative;
    opacity: 0.8;
}
</style>
<html>
<div class="div2">
</div>
<head>
    <title>Image Upload</title>
    <link rel="stylesheet" 
          type="text/css"
          href="style.css" />
</head>
  
<body>
    <div id="content">
    <form method="POST" action="?controller=test&action=addpic" enctype="multipart/form-data" >
            <div>
                <label>เลขที่โรงพยาบาลสนาม <input type="text" name="ID_Fh"/>
                <input type="file" name="uploadfile" value="" />
                <input type="hidden"name="controller"value="test"/>
                <button type="submit" name="action" value="addpic" >อัพโหลด 
                </button>
            </div>
        </form>
    </div>
</body>
  
</html>