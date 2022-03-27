<?php
class WorkplaceController
{
    public function index()
    {
        $workplaceList = workplace::getAll();
        require_once("./views/workplace/index_workplace.php");
    }
    public function updateForm()
    {
        $key=$_GET['id_workp'];
        $workplaceList = workplace::get($key);
        require_once("./views/workplace/updateForm.php");
    }
    public function deleteConfirm()
    {
        $key=$_GET['id_workp'];
        $workplaceList = workplace::get($key);
        require_once("./views/workplace/deleteConfirm.php");
    }
    public function update()
    {
        $id_workp = $_POST['oldid'];
        $name_workp = $_POST['name_workp'];
        $detail_workp = $_POST['detail_workp'];
        $money_workp = $_POST['money_workp'];
        $add_workp = $_POST['add_workp'];
        workplace::update($name_workp,$detail_workp,$money_workp,$add_workp,$id_workp);
        //echo $id_workp;
        //$workplaceList = workplace::get($key);
        echo "<script>window.location.href='../personnel/?controller=workplace&action=index'</script>";
    }
    public function newworkplace()
    {
        require_once("./views/workplace/newworkplace.php");
    }
    public function add()
    {
        $name_workp = $_POST['name_workp'];
        $detail_workp = $_POST['detail_workp'];
        $money_workp = $_POST['money_workp'];
        $add_workp = $_POST['add_workp'];
        workplace::Add($name_workp,$detail_workp,$money_workp,$add_workp);
        echo "<script>window.location.href='../personnel/?controller=workplace&action=index'</script>";
    }
    public function delete()
    {
        //$id_workp2 = $_GET['id_workp'];
        $id_workp = $_POST['id_workp'];
        //$name_workp = $_POST['name_workp'];
        //$detail_workp = $_POST['detail_workp'];
        //$money_workp = $_POST['money_workp'];
        //workplace::update($name_workp,$detail_workp,$money_workp,$id_workp);
        //echo $id_workp;
        $workplaceList = workplace::delete($id_workp);
        echo "<script>window.location.href='../personnel/?controller=workplace&action=index'</script>";
    }
}
?>