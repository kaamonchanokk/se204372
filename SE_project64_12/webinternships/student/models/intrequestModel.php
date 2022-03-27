<?php
class intrequest
{
    public $id_intre,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
    ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$a_intre,$status_intre
    ,$student_id,$student_username,$student_password,$student_name,$student_year
    ,$staff_username,$staff_password,$staff_name,$staff_position,$file_intre,$year_internships,$reason_intre;

    public function __construct($id_intre,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
    ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$a_intre,$status_intre
    ,$student_id,$student_username,$student_password,$student_name,$student_year
    ,$staff_username,$staff_password,$staff_name,$staff_position,$file_intre,$year_internships,$reason_intre)
    {

        
        $this->id_intre= $id_intre;
        $this->date_intre= $date_intre;
        $this->phone_intre= $phone_intre;
        $this->facebook_intre= $facebook_intre;
        $this->position_intre= $position_intre;
        $this->datein_intre= $datein_intre;
        $this->dateout_intre= $dateout_intre;

        $this->p1_intre= $p1_intre;
        $this->place_intre= $place_intre;
        $this->add_intre= $add_intre;
        $this->p2_intre= $p2_intre;
        $this->phonep2_intre= $phonep2_intre;
        $this->emailp2_intre= $emailp2_intre;
        $this->a_intre= $a_intre;
        $this->status_intre= $status_intre;

        $this->student_id= $student_id;
        $this->student_username= $student_username;
        $this->student_password= $student_password;
        $this->student_name= $student_name;
        $this->student_year= $student_year;
        $this->staff_username= $staff_username;
        $this->staff_password= $staff_password;
        $this->staff_name= $staff_name;
        $this->staff_position= $staff_position;
        $this->file_intre= $file_intre;
        $this->year_internships= $year_internships;
        $this->reason_intre= $reason_intre;
    }
    public static function get($studentid_id)
    {
        $list = [];
        require("connection_connect.php");
        $sql="SELECT * FROM `int_request` NATURAL JOIN student LEFT JOIN staff ON int_request.staff_id = staff.staff_id WHERE student_id = '$studentid_id' ORDER BY date_intre";
        $result=$conn->query($sql);
        //$my_row=$result->fetch_assoc();
        while ($my_row = $result->fetch_assoc()) {
        $id_intre = $my_row['id_intre'];
        $date_intre = $my_row['date_intre'];
        $phone_intre = $my_row['phone_intre'];
        $facebook_intre = $my_row['facebook_intre'];
        $position_intre = $my_row['position_intre'];
        $datein_intre = $my_row['datein_intre'];
        $dateout_intre = $my_row['dateout_intre'];

        $p1_intre = $my_row['p1_intre'];
        $place_intre = $my_row['place_intre'];
        $add_intre = $my_row['add_intre'];
        $p2_intre = $my_row['p2_intre'];
        $phonep2_intre = $my_row['phonep2_intre'];
        $emailp2_intre = $my_row['emailp2_intre'];
        $a_intre = $my_row['a_intre'];
        $status_intre = $my_row['status_intre'];

        $student_id = $my_row['student_id'];
        $student_username = $my_row['student_username'];
        $student_password = $my_row['student_password'];
        $student_name = $my_row['student_name'];
        $student_year = $my_row['student_year'];
        $staff_username = $my_row['staff_username'];
        $staff_password = $my_row['staff_password'];
        $staff_name = $my_row['staff_name'];
        $staff_position = $my_row['staff_position'];

        $file_intre = $my_row['file_intre'];
        $year_internships = $my_row['year_internships'];
        $reason_intre = $my_row['reason_intre'];
        $list[] = new intrequest($id_intre,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
        ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$a_intre,$status_intre
        ,$student_id,$student_username,$student_password,$student_name,$student_year
        ,$staff_username,$staff_password,$staff_name,$staff_position,$file_intre,$year_internships,$reason_intre);
        }
        require("connection_close.php");
        return $list;
        

    }
    public static function get2($id_intre)
    {
        $list = [];
        require("connection_connect.php");
        $sql="SELECT * FROM `int_request` NATURAL JOIN student LEFT JOIN staff ON int_request.staff_id = staff.staff_id WHERE id_intre = '$id_intre'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_intre = $my_row['id_intre'];
        $date_intre = $my_row['date_intre'];
        $phone_intre = $my_row['phone_intre'];
        $facebook_intre = $my_row['facebook_intre'];
        $position_intre = $my_row['position_intre'];
        $datein_intre = $my_row['datein_intre'];
        $dateout_intre = $my_row['dateout_intre'];

        $p1_intre = $my_row['p1_intre'];
        $place_intre = $my_row['place_intre'];
        $add_intre = $my_row['add_intre'];
        $p2_intre = $my_row['p2_intre'];
        $phonep2_intre = $my_row['phonep2_intre'];
        $emailp2_intre = $my_row['emailp2_intre'];
        $a_intre = $my_row['a_intre'];
        $status_intre = $my_row['status_intre'];

        $student_id = $my_row['student_id'];
        $student_username = $my_row['student_username'];
        $student_password = $my_row['student_password'];
        $student_name = $my_row['student_name'];
        $student_year = $my_row['student_year'];
        $staff_username = $my_row['staff_username'];
        $staff_password = $my_row['staff_password'];
        $staff_name = $my_row['staff_name'];
        $staff_position = $my_row['staff_position'];

        $file_intre = $my_row['file_intre'];
        $year_internships = $my_row['year_internships'];
        $reason_intre = $my_row['reason_intre'];
        require("connection_close.php");
        return new intrequest($id_intre,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
        ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$a_intre,$status_intre
        ,$student_id,$student_username,$student_password,$student_name,$student_year
        ,$staff_username,$staff_password,$staff_name,$staff_position,$file_intre,$year_internships,$reason_intre);
        

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
    public static function Add($student_id,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
    ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$file_intre,$a_intre,$year_internships)
    { 
       require("connection_connect.php");
       $sql = "INSERT INTO `int_request` (`id_intre`, `date_intre`, `phone_intre`, `facebook_intre`,
        `position_intre`, `datein_intre`, `dateout_intre`, `p1_intre`, `place_intre`, `add_intre`,
         `p2_intre`, `phonep2_intre`, `emailp2_intre`, `file_intre`, `a_intre`, `status_intre`,
          `reason_intre`, `student_id`, `staff_id`, `year_internships`) 
       VALUES 
       (NULL, '$date_intre', '$phone_intre', '$facebook_intre', '$position_intre', '$datein_intre',
        '$dateout_intre', '$p1_intre', '$place_intre', '$add_intre', '$p2_intre', '$phonep2_intre', '$emailp2_intre', '$file_intre', '$a_intre', 'รออนุมัติ'
        , ' ', '$student_id', NULL,'$year_internships');";
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