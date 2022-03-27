<?php
class NewsController
{
    public function home()
    {
        $newsList = news::getAll();
        require_once("./views/news/Home.php");
    }
    public function error()
    {
        require_once("./views/news/Error.php");
    }
}
?>