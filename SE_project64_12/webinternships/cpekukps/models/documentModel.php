<?php
class document
{
    public $id_doc,$date_doc,$name_doc,$file_doc;

    public function __construct($id_doc,$date_doc,$name_doc,$file_doc)
    {
        $this->id_doc= $id_doc;
        $this->date_doc= $date_doc;
        $this->name_doc= $name_doc;
        $this->file_doc= $file_doc;
    }
    public static function getAll()
    {
        $documentList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `document` ORDER BY date_doc DESC";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $id_doc = $my_row['id_doc'];
            $name_doc = $my_row['name_doc'];
            $date_doc = $my_row['date_doc'];
            $file_doc = $my_row['file_doc'];

            $documentList[] = new document($id_doc,$date_doc,$name_doc,$file_doc);
        }
        require("connection_close.php");
        return $documentList;
    }
    public static function search($key)
    {
        $documentList = [];
        require("connection_connect.php");
        $sql="SELECT * FROM document  WHERE name_doc like '%$key%' ORDER BY date_doc DESC";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_doc = $my_row['id_doc'];
            $name_doc = $my_row['name_doc'];
            $date_doc = $my_row['date_doc'];
            $file_doc = $my_row['file_doc'];

            $documentList[] = new document($id_doc,$date_doc,$name_doc,$file_doc);
        }
        require("connection_close.php");
        return $documentList;

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