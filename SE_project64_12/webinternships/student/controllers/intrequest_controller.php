<?php
class IntrequestController
{
    public function newintrequest()
    {
        $id = $_SESSION['student_id'];
        $studentList = student::get($id);
        $workplaceList = workplace::getAll();
        $yearlist = year::get();
        require_once("./views/intrequest/newintrequest.php");
    }
    public function home()
    {
        require_once("./views/mainnisit/Home.php");
    }
    public function addintrequest()
    {
        
        if (isset($_POST['action'])) {

            $student_id = $_SESSION['student_id'];
            $date_intre = $_POST['date_intre'];
            $phone_intre = $_POST['phone_intre'];
            $facebook_intre = $_POST['facebook_intre'];
            $position_intre = $_POST['position_intre'];
            $datein_intre = $_POST['datein_intre'];
            $dateout_intre = $_POST['dateout_intre'];
            $p1_intre = $_POST['p1_intre'];
            $year_internships = $_POST['year_internships'];

            //$place_intre = $_POST['place_intre'];
            $p2_intre = $_POST['p2_intre'];
            $phonep2_intre = $_POST['phonep2_intre'];
            $emailp2_intre = $_POST['emailp2_intre'];
            $a_intre = $_POST['a_intre'];

            $check= $_POST['place_intre'];
            if($check==="other")
            {
                $place_intre = $_POST['place_intretxt'];
                $add_intre = $_POST['add_intre'];
            }
            else
            {
                $place_intre = $_POST['place_intre'];
                $List = workplace::getplace($place_intre);
                $place_intre = $List->name_workp;
                $add_intre = $List->add_workp;
            }
            
            /*$filename = $_FILES["file_intre"]["name"];
            $file_intre = $filename;
            $tempname = $_FILES["file_intre"]["tmp_name"];  
            $folder = $_SERVER['DOCUMENT_ROOT'] ."/webinternships/Admin/student/file_intre/".$filename;
            move_uploaded_file($tempname, $folder);*/
            $fp = fopen($_FILES["file_intre"]["tmp_name"],"r");
            $ReadBinary = fread($fp,filesize($_FILES["file_intre"]["tmp_name"]));
            fclose($fp);
            $file_intre = addslashes($ReadBinary);
            intrequest::Add($student_id,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
            ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$file_intre,$a_intre,$year_internships);
            
        }
        

        echo "<script>window.location.href='../student/?controller=statusrequest&action=index'</script>";
    }
}
?>