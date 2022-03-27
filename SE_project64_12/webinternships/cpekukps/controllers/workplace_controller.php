<?php
class WorkplaceController
{
    public function index()
    {
        $workplaceList = workplace::getAll();
        require_once("./views/workplace/index_workplace.php");
    }
    public function search()
    {
        $key=$_GET['key'];
        $workplaceList = workplace::search($key);
        require_once("./views/workplace/index_workplace.php");
    }
}
?>