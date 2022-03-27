<?php
class MainController
{
    public function home()
    {
        require_once("./views/main/Home.php");
    }
    public function error()
    {
        require_once("./views/news/Error.php");
    }
}
?>