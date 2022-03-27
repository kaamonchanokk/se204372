<?php
class DocumentController
{
    public function index()
    {
        $documentList = document::getAll();
        require_once("./views/document/index_document.php");
    }
    public function delete()
    {
        $id_doc = $_POST['id_doc'];
        document::delete($id_doc);
        echo "<script>window.location.href='../personnel/?controller=document&action=index'</script>";
    }
    public function newdocument()
    {
        require_once("./views/document/newdocument.php");
    }
    public function adddocument()
    {
        $date_doc = $_POST['date_doc'];
        $name_doc = $_POST['name_doc'];
    
        /*$filename = $_FILES["file_doc"]["name"];
        $file_doc = $filename;
        $tempname = $_FILES["file_doc"]["tmp_name"];  
        $folder =   $_SERVER['DOCUMENT_ROOT'] ."/webinternships/Admin/cpekukps/document1/".$filename;
        move_uploaded_file($tempname, $folder);
*/
        $fp = fopen($_FILES["file_doc"]["tmp_name"],"r");
        $ReadBinary = fread($fp,filesize($_FILES["file_doc"]["tmp_name"]));
        fclose($fp);
        $file_doc = addslashes($ReadBinary);
        document::Add($date_doc,$name_doc,$file_doc);
        echo "<script>window.location.href='../personnel/?controller=document&action=index'</script>";
    }
    public function updateForm()
    {
        $key=$_GET['id_doc'];
        $documentList = document::get($key);
        require_once("./views/document/updateForm.php");
    }
    public function update()
    {
        $id_doc = $_POST['id_doc'];
        $date_doc = $_POST['date_doc'];
        $name_doc = $_POST['name_doc'];
    
        /*$filename = $_FILES["file_doc"]["name"];
        $file_doc = $filename;
        $tempname = $_FILES["file_doc"]["tmp_name"];  
        $folder = "../SE/document1/".$filename;
        move_uploaded_file($tempname, $folder);
*/

        //document::update($date_doc,$name_doc,$file_doc,$id_doc);
        document::update($date_doc,$name_doc,$id_doc);
        //echo $id_workp;
        //$workplaceList = workplace::get($key);
        echo "<script>window.location.href='../personnel/?controller=document&action=index'</script>";
    }
    /*
    public function updateForm()
    {
        $key=$_GET['id_news'];
        $Newslist = news::get($key);
        require_once("./views/news/updateForm.php");
    }
    public function update()
    {
        $id_news = $_POST['id_news'];
        $date_news = $_POST['date_news'];
        $name_news = $_POST['name_news'];
        //$file_news = $_POST['file_news'];
        $detail_news = $_POST['detail_news'];

        $filename = $_FILES["file_news"]["name"];
        $file_news = $filename;
        $tempname = $_FILES["file_news"]["tmp_name"];  
        $folder = "../SE/imagenews/".$filename;
        move_uploaded_file($tempname, $folder);

        news::update($date_news,$name_news,$file_news,$detail_news,$id_news);
        //echo $id_workp;
        //$workplaceList = workplace::get($key);
        NewsController::index();
    }*/
}
?>