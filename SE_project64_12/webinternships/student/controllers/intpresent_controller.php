<?php
class IntpresentController
{
    public function newintpresent()
    {
        $id = $_SESSION['student_id'];
        $studentList = student::get($id);
        $workplaceList = workplace::getAll();
        $yearlist = year::get();
        require_once("./views/intpresent/newintpresent.php");
    }
    public function home()
    {
        require_once("./views/mainnisit/Home.php");
    }
    public function addintpresent()
    {
        
        if (isset($_POST['action'])) {

            $date_intpre = $_POST['date_intpre'];
            $student_id = $_SESSION['student_id'];
            $check= $_POST['place_intpre'];
            if($check==="other")
            {
                $place_intpre = $_POST['place_intpretxt'];
            }
            else
            {
                $place_intpre = $_POST['place_intpre'];
                $List = workplace::getplace($place_intpre);
                $place_intpre = $List->name_workp;
            }
            $a_intpre = $_POST['a_intpre'];
            //$file_intpre = $_POST['file_intpre'];
            $year_intpre = $_POST['year_intpre'];
            /*$filename = $_FILES["file_intpre"]["name"];
            $file_intpre = $filename;
            $tempname = $_FILES["file_intpre"]["tmp_name"];  
            $folder = $_SERVER['DOCUMENT_ROOT'] ."/webinternships/Admin/student/file_intpresent/".$filename;
            move_uploaded_file($tempname, $folder);*/
            $fp = fopen($_FILES["file_intpre"]["tmp_name"],"r");
            $ReadBinary = fread($fp,filesize($_FILES["file_intpre"]["tmp_name"]));
            fclose($fp);
            $file_intpre = addslashes($ReadBinary);
            intpresent::Add($date_intpre,$student_id,$place_intpre,$a_intpre,$file_intpre,$year_intpre);
        }
        echo "<script>window.location.href='../student/?controller=statuspresent&action=index'</script>";
    }
}
?>