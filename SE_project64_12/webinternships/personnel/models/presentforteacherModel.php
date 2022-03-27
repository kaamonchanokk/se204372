<?php
class presentforteacher
{
    public $id_intpre,$date_intpre,$place_intpre,$a_intpre,$file_intpre,
    $status_intpre,$year_intpre,$student_id,$student_name,$student_year,$staff_id,$staff_name;

    public function __construct($id_intpre,$date_intpre,$place_intpre,$a_intpre,$file_intpre,
    $status_intpre,$year_intpre
    ,$student_id,$student_name,$student_year,$staff_id,$staff_name)
    {
        $this->id_intpre= $id_intpre;
        $this->date_intpre= $date_intpre;
        $this->place_intpre= $place_intpre;
        $this->a_intpre= $a_intpre;
        $this->file_intpre= $file_intpre;
        $this->status_intpre= $status_intpre;
        $this->year_intpre= $year_intpre;

        $this->student_id= $student_id;
        $this->student_name= $student_name;
        $this->student_year= $student_year;
        $this->staff_id= $staff_id;
        $this->staff_name= $staff_name;
    }
    public static function getAll()
    {
        $list = [];
        require("connection_connect.php");
        $sql="SELECT * FROM `int_present` NATURAL JOIN student Left JOIN staff ON int_present.staff_id = staff.staff_id";
        $result=$conn->query($sql);
        //$my_row=$result->fetch_assoc();
        while ($my_row = $result->fetch_assoc()) {
        $id_intpre = $my_row['id_intpre'];
        $date_intpre = $my_row['date_intpre'];
        $place_intpre = $my_row['place_intpre'];
        $a_intpre = $my_row['a_intpre'];
        $file_intpre = $my_row['file_intpre'];
        $status_intpre = $my_row['status_intpre'];
        $year_intpre = $my_row['year_intpre'];

        $student_id = $my_row['student_id'];
        $student_name = $my_row['student_name'];
        $student_year = $my_row['student_year'];
        $staff_id = $my_row['staff_id'];
        $staff_name = $my_row['staff_name'];

        $list[] = new presentforteacher($id_intpre,$date_intpre,$place_intpre,$a_intpre,$file_intpre,
        $status_intpre,$year_intpre
        ,$student_id,$student_name,$student_year,$staff_id,$staff_name);
        }
        require("connection_close.php");
        return $list;
        

    }
    public static function update($staff_id,$status_intpre,$id)
    {
       require("connection_connect.php");
       $sql="UPDATE `int_present` SET `status_intpre`='$status_intpre',`staff_id`='$staff_id' WHERE id_intpre = '$id'";
       $result=$conn->query($sql);
       require("connection_close.php");
       return ;
    }
    public static function search($key)
    {
        $list=[];
        require("connection_connect.php");
        $sql="SELECT * FROM `int_present` NATURAL JOIN student Left JOIN staff ON int_present.staff_id = staff.staff_id WHERE (student_name like '%$key%' or place_intpre like '%$key%' or status_intpre = '$key' ) ORDER BY id_intpre";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_intpre = $my_row['id_intpre'];
            $date_intpre = $my_row['date_intpre'];
            $place_intpre = $my_row['place_intpre'];
            $a_intpre = $my_row['a_intpre'];
            $file_intpre = $my_row['file_intpre'];
            $status_intpre = $my_row['status_intpre'];
            $year_intpre = $my_row['year_intpre'];
    
            $student_id = $my_row['student_id'];
            $student_name = $my_row['student_name'];
            $student_year = $my_row['student_year'];
            $staff_id = $my_row['staff_id'];
            $staff_name = $my_row['staff_name'];

            $list[] = new presentforteacher($id_intpre,$date_intpre,$place_intpre,$a_intpre,$file_intpre,
        $status_intpre,$year_intpre
        ,$student_id,$student_name,$student_year,$staff_id,$staff_name);
        }
        require("connection_close.php");
        return $list;

    }
    public static function sortdate()
    {
        require("connection_connect.php");
        $sql="SELECT * FROM `int_present` NATURAL JOIN student Left JOIN staff ON int_present.staff_id = staff.staff_id  ORDER BY date_intpre";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_intpre = $my_row['id_intpre'];
            $date_intpre = $my_row['date_intpre'];
            $place_intpre = $my_row['place_intpre'];
            $a_intpre = $my_row['a_intpre'];
            $file_intpre = $my_row['file_intpre'];
            $status_intpre = $my_row['status_intpre'];
            $year_intpre = $my_row['year_intpre'];
    
            $student_id = $my_row['student_id'];
            $student_name = $my_row['student_name'];
            $student_year = $my_row['student_year'];
            $staff_id = $my_row['staff_id'];
            $staff_name = $my_row['staff_name'];

            $list[] = new presentforteacher($id_intpre,$date_intpre,$place_intpre,$a_intpre,$file_intpre,
            $status_intpre,$year_intpre
            ,$student_id,$student_name,$student_year,$staff_id,$staff_name);
        }
        require("connection_close.php");
        return $list;

    }
    public static function sortother($key)
    {
        $list=[];
        require("connection_connect.php");
        $sql="SELECT * FROM `int_present` NATURAL JOIN student Left JOIN staff ON int_present.staff_id = staff.staff_id WHERE (year_intpre = '$key' or status_intpre = '$key' ) ORDER BY id_intpre";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_intpre = $my_row['id_intpre'];
            $date_intpre = $my_row['date_intpre'];
            $place_intpre = $my_row['place_intpre'];
            $a_intpre = $my_row['a_intpre'];
            $file_intpre = $my_row['file_intpre'];
            $status_intpre = $my_row['status_intpre'];
            $year_intpre = $my_row['year_intpre'];
    
            $student_id = $my_row['student_id'];
            $student_name = $my_row['student_name'];
            $student_year = $my_row['student_year'];
            $staff_id = $my_row['staff_id'];
            $staff_name = $my_row['staff_name'];

            $list[] = new presentforteacher($id_intpre,$date_intpre,$place_intpre,$a_intpre,$file_intpre,
            $status_intpre,$year_intpre
            ,$student_id,$student_name,$student_year,$staff_id,$staff_name);
        }
        require("connection_close.php");
        return $list;

    }
    /*
    public static function getAll()
    {
        $fileList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `testpic`";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $id = $my_row['id'];
            $filename = $my_row['filename'];
        
            $fileList[] = new test($id,$filename);
        }
        require("connection_close.php");
        return $fileList;
    }*/
    public static function Add($date_intpre,$name_intpre,$no_intpre,$place_intpre,$a_intpre,$file_intpre)
    { 
       require("connection_connect.php");
       $sql = "INSERT INTO `int_present` (`id_intpre`, `date_intpre`, `name_intpre`, `no_intpre`, `place_intpre`
       , `file_intpre`, `a_intpre`, `status_intpre`) VALUES (NULL,'$date_intpre','$name_intpre','$no_intpre','$place_intpre','$file_intpre','$a_intpre','รออนุมัติ')";
       $result = $conn->query($sql);
       require("connection_close.php");
       return  ;
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