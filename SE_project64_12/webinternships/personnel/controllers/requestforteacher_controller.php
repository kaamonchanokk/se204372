<?php
class RequestforteacherController
{
    public function index()
    {
        $staff_position = $_SESSION['staff_position'];
        $Requestforteacherlist = requestforteacher::getAll();
        $yearlist = year::getAll();
        if($staff_position==="อาจารย์")
        {
            require_once("./views/requestforteacher/index_requestforteacher.php");
        }
        else
        {
            require_once("./views/requestforteacher/index_requestforstaff.php");
        }
    }
    public function detail()
    {
        $staff_position = $_SESSION['staff_position'];
        $id = $_GET['id_intre'];
        $Requestforteacherlist = requestforteacher::get($id);
        if($staff_position==="อาจารย์")
        {
            require_once("./views/requestforteacher/detail_requestforteacher.php");
        }
        else
        {
            require_once("./views/requestforteacher/detail_requestforstaff.php");
        }
    }
    public function updatestatus()
    {
        $staff_id = $_SESSION['staff_id'];
        $staff_name = $_SESSION['staff_name'];
        $status_intre = $_POST['status_intre'];
        if($status_intre==="ไม่อนุมัติ")
        {
            $a= $_POST['reason_intre2'];
            if($a==="")
            {
                $reason_intre = "โปรดติดต่ออาจารย์ $staff_name";
            }
            else
            {
                $reason_intre = $_POST['reason_intre2'];
            }
        }
        else
        {
            $reason_intre = $_POST['reason_intre'];
        }
        $id = $_POST['id_intre'];
        $Requestforteacherlist = requestforteacher::update($status_intre,$reason_intre,$id,$staff_id);
        echo "<script>window.location.href='../personnel/?controller=requestforteacher&action=index'</script>";
    }
    public function updatestatusofdetail()
    {
        $staff_id = $_SESSION['staff_id'];
        $staff_name = $_SESSION['staff_name'];
        $status_intre = $_POST['status_intre'];
        if($status_intre==="ไม่อนุมัติ")
        {
            $a= $_POST['reason_intre2'];
            if($a==="")
            {
                $reason_intre = "โปรดติดต่ออาจารย์ $staff_name";
            }
            else
            {
                $reason_intre = $_POST['reason_intre2'];
            }
        }
        else
        {
            $reason_intre = $_POST['reason_intre'];
        }
        $id = $_POST['id_intre'];
        requestforteacher::update($status_intre,$reason_intre,$id,$staff_id);
        $Requestforteacherlist = requestforteacher::get($id);
        require_once("./views/requestforteacher/detail_requestforteacher.php");
       
    }
    public function search()
    {
        $staff_position = $_SESSION['staff_position'];
        $key=$_GET['key'];
        $Requestforteacherlist = requestforteacher::search($key);
        $yearlist = year::getAll();
        if($Requestforteacherlist===[])
        {
                require_once("./views/requestforteacher/index_requestforteacher2.php");  
        }else
        {
            if($staff_position==="อาจารย์")
            {
                require_once("./views/requestforteacher/index_requestforteacher.php");
            }
            else
            {
                require_once("./views/requestforteacher/index_requestforstaff.php");
            }
        
        }
    }
    public function selectsort()
    {
        $staff_position = $_SESSION['staff_position'];
        $key=$_GET['selectname'];
        if($key==="date")
        {
            $Requestforteacherlist = requestforteacher::sortdate();
            $yearlist = year::getAll();
            if($staff_position==="อาจารย์")
            {
                require_once("./views/requestforteacher/index_requestforteacher.php");
            }
            else
            {
                require_once("./views/requestforteacher/index_requestforstaff.php");
            }   
        }
        else if($key==="โปรดเลือก")
        {
            $Requestforteacherlist = requestforteacher::getAll();
            $yearlist = year::getAll();
            if($staff_position==="อาจารย์")
            {
                require_once("./views/requestforteacher/index_requestforteacher.php");
            }
            else
            {
                require_once("./views/requestforteacher/index_requestforstaff.php");
            }       
        }
        else
        {
            $Requestforteacherlist = requestforteacher::sortother($key);
            $yearlist = year::getAll();
            if($Requestforteacherlist===[])
            {
                require_once("./views/requestforteacher/index_requestforteacher2.php");  
            }else
            {
                if($staff_position==="อาจารย์")
                {
                    require_once("./views/requestforteacher/index_requestforteacher.php");
                }
                else
                {
                    require_once("./views/requestforteacher/index_requestforstaff.php");
                }
            }
             
        }
    }
}
?>