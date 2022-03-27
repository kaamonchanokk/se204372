<?php
class StatusrequestController
{
    public function index()
    {
        $id = $_SESSION['student_id'];
        $statusrelist = intrequest::get($id);
        $documentlist = documentfornisit::get($id);
        require_once("./views/statusrequest/index_statusrequest.php");
    }
    public function detail()
    {
        $id = $_GET['id_intre'];
        $statusrelist = intrequest::get2($id);
        //$documentlist = documentfornisit::get($id);
        require_once("./views/statusrequest/detail_statusrequest.php");
    }
}
?>