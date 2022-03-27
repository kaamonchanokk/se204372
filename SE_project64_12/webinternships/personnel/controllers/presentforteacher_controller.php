<?php
class PresentforteacherController
{
    public function index()
    {
        $Presentforteacherlist = presentforteacher::getAll();
        $yearlist = year::getAll();
        require_once("./views/presentforteacher/index_presentforteacher.php");
    }
    public function updatestatus()
    {
        $staff_id = $_SESSION['staff_id'];
        $status_intpre = $_POST['status_intpre'];
        $id = $_POST['id_intpre'];
        $Requestforteacherlist = presentforteacher::update($staff_id,$status_intpre,$id);
        echo "<script>window.location.href='../personnel/?controller=presentforteacher&action=index'</script>";
        
    }
    public function search()
    {
        $key=$_GET['key'];
        $Presentforteacherlist = presentforteacher::search($key);
        $yearlist = year::getAll();
        if($Presentforteacherlist===[])
        {
                require_once("./views/presentforteacher/index_presentforteacher2.php");  
        }else
        {
                require_once("./views/presentforteacher/index_presentforteacher.php");  
        }
    }
    public function selectsort()
    {
        $key=$_GET['selectname'];
        if($key==="date")
        {
            $Presentforteacherlist = presentforteacher::sortdate();
            $yearlist = year::getAll();
            require_once("./views/presentforteacher/index_presentforteacher.php");       
        }
        else if($key==="โปรดเลือก")
        {
            $Presentforteacherlist = presentforteacher::getAll();
            $yearlist = year::getAll();
            require_once("./views/presentforteacher/index_presentforteacher.php");       
        }
        else
        {
            $Presentforteacherlist = presentforteacher::sortother($key);
            $yearlist = year::getAll();
            if($Presentforteacherlist===[])
            {
                require_once("./views/presentforteacher/index_presentforteacher2.php");  
            }else
            {
                require_once("./views/presentforteacher/index_presentforteacher.php");  
            }
             
        }
    }
}
?>