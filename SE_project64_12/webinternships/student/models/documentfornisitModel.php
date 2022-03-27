<?php
class documentfornisit
{
    public $id_docnisit,$name_docnisit,$id_nisit,$file_docnisit,$date_docnisit;

    public function __construct($id_docnisit,$name_docnisit,$id_nisit,$file_docnisit,$date_docnisit)
    {
        $this->id_docnisit= $id_docnisit;
        $this->id_nisit= $id_nisit;
        $this->file_docnisit= $file_docnisit;
        $this->date_docnisit= $date_docnisit;
        $this->name_docnisit = $name_docnisit ;
    }

    public static function getAll()
    {
        $documentfornisitList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `documentfornisit` ORDER BY id_nisit,date_docnisit";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $id_docnisit = $my_row['id_docnisit'];
            $id_nisit = $my_row['id_nisit'];
            $file_docnisit = $my_row['file_docnisit'];
            $date_docnisit = $my_row['date_docnisit'];
            $name_docnisit = $my_row['name_docnisit'];
            $documentfornisitList[] = new documentfornisit($id_docnisit,$name_docnisit,$id_nisit,$file_docnisit,$date_docnisit);
        }
        require("connection_close.php");
        return $documentfornisitList;
    }
    public static function get($student_id)
    {
        $documentfornisitList = [];
        require("connection_connect.php");
        $sql="SELECT * FROM documentfornisit INNER JOIN student ON documentfornisit.id_nisit = student.student_id WHERE id_nisit='$student_id' ORDER BY date_docnisit";
        $result=$conn->query($sql);
        //$my_row=$result->fetch_assoc();
        while ($my_row = $result->fetch_assoc()) {
        
            $id_docnisit = $my_row['id_docnisit'];
            $id_nisit = $my_row['id_nisit'];
            $file_docnisit = $my_row['file_docnisit'];
            $date_docnisit = $my_row['date_docnisit'];
            $name_docnisit = $my_row['name_docnisit'];
            $documentfornisitList[] = new documentfornisit($id_docnisit,$name_docnisit,$id_nisit,$file_docnisit,$date_docnisit);
        }
        require("connection_close.php");
        return $documentfornisitList;
        

    }
    public static function Add($name_docnisit,$id_nisit,$file_docnisit,$date_docnisit)
    { 
       require("connection_connect.php");
       $sql = "INSERT INTO `documentfornisit` (`id_docnisit`, `id_nisit`, `name_docnisit`, `file_docnisit`, `date_docnisit`) 
       VALUES (NULL, '$id_nisit', '$name_docnisit', '$file_docnisit','$date_docnisit')";
       $result = $conn->query($sql);
       require("connection_close.php");
       return  ;
    }
    public static function delete($id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM documentfornisit WHERE id_docnisit = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
    /*
    public static function search($key)
    {
        $workplaceList = [];
        require("connection_connect.php");
        $sql="SELECT * FROM workplace  WHERE name_workp like '%$key%' ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_workp = $my_row['id_workp'];
            $name_workp = $my_row['name_workp'];
            $detail_workp = $my_row['detail_workp'];
            $money_workp = $my_row['money_workp'];
        
            $workplaceList[] = new workplace($id_workp,$name_workp,$detail_workp,$money_workp);
        }
        require("connection_close.php");
        return $workplaceList;

    }
    public static function get($id)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM workplace WHERE id_workp='$id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_workp = $my_row['id_workp'];
        $name_workp = $my_row['name_workp'];
        $detail_workp = $my_row['detail_workp'];
        $money_workp = $my_row['money_workp'];
        require("connection_close.php");
        return new workplace($id_workp,$name_workp,$detail_workp,$money_workp);

    }
    public static function update($name_workp,$detail_workp,$money_workp,$oldid)
    {
       require("connection_connect.php");
       $sql="UPDATE `workplace` SET `name_workp`='$name_workp',
       `detail_workp`='$detail_workp',`money_workp`='$money_workp' WHERE id_workp = '$oldid'";
       $result=$conn->query($sql);
       require("connection_close.php");
       return ;
    }
    public static function delete($id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM workplace WHERE id_workp = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
    public static function Add($name_workp,$detail_workp,$money_workp)
    { 
       require("connection_connect.php");
       $sql = "INSERT INTO `workplace` (`id_workp`, `name_workp`, `detail_workp`, `money_workp`) VALUES (NULL, '$name_workp', '$detail_workp', '$money_workp')";
       $result = $conn->query($sql);
       require("connection_close.php");
       return  ;
    }
    public static function get($id)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM Fieldhospitalbed NATURAL JOIN Fieldhospital WHERE ID_Hb='$id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_hb = $my_row[ID_Hb];
        $max_hb = $my_row[Max_Hb];
        $c_hb = $my_row[C_Hb];
        $id_fh = $my_row[ID_Fh];
        $name_fh = $my_row[Name_Fh];
        require("connection_close.php");
        return new Fieldhospitalbed($id_hb,$max_hb,$c_hb,$id_fh,$name_fh);

    }

    public static function update($id_hb,$name_fh,$max_hb,$c_hb,$oldid)
    {
       require("connection_connect.php");
       $sql="UPDATE `Fieldhospitalbed` SET `ID_Hb`='$id_hb',`ID_Fh`='$name_fh',
       `Max_Hb`='$max_hb',`C_Hb`='$c_hb' WHERE ID_Hb = '$oldid'";
       $result=$conn->query($sql);
       require("connection_close.php");
       return ;
    }
    public static function delete($id)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM Fieldhospitalbed WHERE ID_Hb = '$id'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }*/
}