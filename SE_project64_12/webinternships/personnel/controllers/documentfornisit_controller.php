<?php
class DocumentfornisitController
{
    public function index()
    {
        $documentfornisitList = documentfornisit::getAll();
        require_once("./views/documentfornisit/index_documentfornisit.php");
    }
    public function newdocumentfornisit()
    {
        $studentList = student::getAll();
        require_once("./views/documentfornisit/newdocumentfornisit.php");
    }
    public function adddocumentfornisit()
    {
        $name_docnisit = $_POST['name_docnisit'];
        $id_nisit = $_POST['id_nisit'];
        $date_docnisit = $_POST['date_docnisit'];
        $name_docnisit = $_POST['name_docnisit'];
        /*$filename = $_FILES["file_docnisit"]["name"];
        $file_docnisit = $filename;
        $tempname = $_FILES["file_docnisit"]["tmp_name"];  
        $folder =  $_SERVER['DOCUMENT_ROOT'] ."/webinternships/Admin/teacher/file_docnisit/".$filename;
        move_uploaded_file($tempname, $folder);*/

        $fp = fopen($_FILES["file_docnisit"]["tmp_name"],"r");
        $ReadBinary = fread($fp,filesize($_FILES["file_docnisit"]["tmp_name"]));
        fclose($fp);
        $file_docnisit = addslashes($ReadBinary);
        documentfornisit::Add($name_docnisit,$id_nisit,$file_docnisit,$date_docnisit);
        echo "<script>window.location.href='../personnel/?controller=documentfornisit&action=index'</script>";
    }
    public function delete()
    {
        //$id_workp2 = $_GET['id_workp'];
        $id_docnisit = $_POST['id_docnisit'];
        //$name_workp = $_POST['name_workp'];
        //$detail_workp = $_POST['detail_workp'];
        //$money_workp = $_POST['money_workp'];
        //workplace::update($name_workp,$detail_workp,$money_workp,$id_workp);
        //echo $id_workp;
        documentfornisit::delete($id_docnisit);
        echo "<script>window.location.href='../personnel/?controller=documentfornisit&action=index'</script>";
    }

}
?>