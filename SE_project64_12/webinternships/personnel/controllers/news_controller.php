<?php
class NewsController
{
    public function index()
    {
        $Newslist = news::getAll();
        require_once("./views/news/index_news.php");
    }
    public function delete()
    {
        $id_news = $_POST['id_news'];
        news::delete($id_news);
        echo "<script>window.location.href='../personnel/?controller=news&action=index'</script>";
    }
    public function newnews()
    {
        require_once("./views/news/newNews.php");
    }
    public function addnews()
    {
        $date_news = $_POST['date_news'];
        $name_news = $_POST['name_news'];
        //$file_news = $_POST['file_news'];
        $detail_news = $_POST['detail_news'];

        /*$filename = $_FILES["file_news"]["name"];
        $file_news = $filename;
        $tempname = $_FILES["file_news"]["tmp_name"];  
        $folder = $_SERVER['DOCUMENT_ROOT'] ."/webinternships/Admin/cpekukps/imagenews/".$filename;
        move_uploaded_file($tempname, $folder);*/
        
        $fp = fopen($_FILES["file_news"]["tmp_name"],"r");
        $ReadBinary = fread($fp,filesize($_FILES["file_news"]["tmp_name"]));
        fclose($fp);
        $file_news = addslashes($ReadBinary);
        news::Add($date_news,$name_news,$file_news,$detail_news);
        echo "<script>window.location.href='../personnel/?controller=news&action=index'</script>";
    }
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

        /*$filename = $_FILES["file_news"]["name"];
        $file_news = $filename;
        $tempname = $_FILES["file_news"]["tmp_name"];  
        $folder = "../SE/imagenews/".$filename;
        move_uploaded_file($tempname, $folder);
        */
        //news::update($date_news,$name_news,$file_news,$detail_news,$id_news);
      
        news::update($date_news,$name_news,$detail_news,$id_news);
        echo "<script>window.location.href='../personnel/?controller=news&action=index'</script>";
    }
}
?>