<?php
class login
{
    public $student_id,$student_username,$student_password,$student_name,$student_picture;

    public function __construct($student_id,$student_username,$student_password,$student_name,$student_picture)
    {
        $this->student_id= $student_id;
        $this->student_username= $student_username;
        $this->student_password= $student_password;
        $this->student_name= $student_name;
        $this->student_picture= $student_picture;
    }
    public static function checkstudent($student_username,$student_password)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM student WHERE student_username='$student_username' AND student_password= '$student_password'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        if($my_row===null)
        {
            $student_id = "";
            $student_username = "";
            $student_password =  "";
            $student_name = "";
            $student_picture = "";
        }
        else{
        $student_id = $my_row['student_id'];
        $student_username = $my_row['student_username'];
        $student_password = $my_row['student_password'];
        $student_name = $my_row['student_name'];
        $student_picture = $my_row['student_picture'];
        }
        require("connection_close.php");
        return new login($student_id,$student_username,$student_password,$student_name,$student_picture);

    }
    /*
    public static function getAll()
    {
        $newsList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `news`";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $id_news = $my_row['id_news'];
            $name_news = $my_row['name_news'];
            $file_news = $my_row['file_news'];
            $detail_news = $my_row['detail_news'];

            $newsList[] = new news($id_news,$name_news,$file_news,$detail_news);
        }
        require("connection_close.php");
        return $newsList;
    }
    public static function Add($id_hb,$name_fh,$max_hb,$c_hb)
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