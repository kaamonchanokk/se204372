<?php
class year
{
    public $year_id,$year_name,$year_status;

    public function __construct($year_id,$year_name,$year_status)
    {
        $this->year_id= $year_id;
        $this->year_name= $year_name;
        $this->year_status= $year_status;
    }
    public static function getAll()
    {
        $yearList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `year_internships`";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $year_id = $my_row['year_id'];
            $year_name = $my_row['year_name'];
            $year_status = $my_row['year_status'];      
            $yearList[] = new year($year_id,$year_name,$year_status);
        }
        require("connection_close.php");
        return $yearList;
    }
    public static function get()
    {
        require("connection_connect.php");
        $sql="SELECT * FROM year_internships  WHERE year_status = 'now' ";
        $result = $conn->query($sql);
        $my_row=$result->fetch_assoc();

        $year_id = $my_row['year_id'];
        $year_name = $my_row['year_name'];
        $year_status = $my_row['year_status']; 
        
        require("connection_close.php");
        return new year($year_id,$year_name,$year_status);

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