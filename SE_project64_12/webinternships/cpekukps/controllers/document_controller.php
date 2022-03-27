<?php
class DocumentController
{
    public function index()
    {
        $documentList = document::getAll();
        require_once("./views/document/index_document.php");
    }
    public function search()
    {
        $key=$_GET['key'];
        $documentList = document::search($key);
        require_once("./views/document/index_document.php");
    }
}
?>