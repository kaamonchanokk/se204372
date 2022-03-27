<?php
class StatuspresentController
{
    public function index()
    {
        $id = $_SESSION['student_id'];
        $statuspelist = intpresent::get($id);
        require_once("./views/statuspresent/index_statuspresent.php");
    }
}
?>