<?php
class TestController
{
    public function home1()
    {
        require_once("./views/test/test1.php");
    }
    public function home2()
    {
        $fileList = test::getAll();
        require_once("./views/test/test2.php");
    }
    public function addpic()
    {
        echo $_POST['ID_Fh'];
        if (isset($_POST['action'])) {
            //$filename = $_FILES["uploadfile"]["name"];
            //$tempname = $_FILES["uploadfile"]["tmp_name"];    
            $fp = fopen($_FILES["uploadfile"]["tmp_name"],"r");
            $ReadBinary = fread($fp,filesize($_FILES["uploadfile"]["tmp_name"]));
            fclose($fp);
            $FileData = addslashes($ReadBinary);
            //move_uploaded_file($tempname, $folder);
            test::Add($FileData);
        }
        

        TestController::home2();  
    }
}
?>