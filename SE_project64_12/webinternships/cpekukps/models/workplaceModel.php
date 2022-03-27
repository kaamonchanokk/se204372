<?php
class workplace
{
    public $id_workp,$name_workp,$detail_workp,$money_workp;

    public function __construct($id_workp,$name_workp,$detail_workp,$money_workp)
    {
        $this->id_workp= $id_workp;
        $this->name_workp= $name_workp;
        $this->detail_workp= $detail_workp;
        $this->money_workp= $money_workp;

    }

    public static function getAll()
    {
        $workplaceList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `workplace` ORDER BY id_workp";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $id_workp = $my_row['id_workp'];
            $name_workp = $my_row['name_workp'];
            $detail_workp = $my_row['detail_workp'];
            $money_workp = $my_row['money_workp'];
        
            $workplaceList[] = new workplace($id_workp,$name_workp,$detail_workp,$money_workp);
        }
        require("connection_close.php");
        return $workplaceList;
    }
    public static function search($key)
    {
        $workplaceList = [];
        require("connection_connect.php");
        $sql="SELECT * FROM workplace  WHERE name_workp like '%$key%' ORDER BY id_workp";
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
    /*public static function Add($id_hb,$name_fh,$max_hb,$c_hb)
    { 
       require("connection_connect.php");
       $sql = "INSERT INTO `Fieldhospitalbed` (`ID_Hb`, `ID_Fh`, `Max_Hb`, `C_Hb`) VALUES ('$id_hb', '$name_fh', '$max_hb', '$c_hb')";
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