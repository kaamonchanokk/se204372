<?php
class DocumentfornisitController
{
    public function index()
    {
        $id = $_SESSION['student_id'];
        $documentfornisitList = documentfornisit::get($id);
        require_once("./views/documentfornisit/index_documentfornisit.php");
    }
}
?>