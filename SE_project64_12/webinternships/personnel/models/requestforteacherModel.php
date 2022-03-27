<?php
class requestforteacher
{
    public $id_intre,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
    ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$a_intre,$status_intre
    ,$student_id,$student_username,$student_password,$student_name,$student_year
    ,$staff_username,$staff_password,$staff_name,$staff_position,$file_intre;

    public function __construct($id_intre,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
    ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$a_intre,$status_intre
    ,$student_id,$student_username,$student_password,$student_name,$student_year
    ,$staff_username,$staff_password,$staff_name,$staff_position,$file_intre,$year_internships)
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
        $this->file_intre= $file_intre;
        $this->student_id= $student_id;
        $this->student_username= $student_username;
        $this->student_password= $student_password;
        $this->student_name= $student_name;
        $this->student_year= $student_year;
        $this->staff_username= $staff_username;
        $this->staff_password= $staff_password;
        $this->staff_name= $staff_name;
        $this->staff_position= $staff_position;
        $this->year_internships= $year_internships;
    }
    public static function getAll()
    {
        $list = [];
        require("connection_connect.php");
        $sql="SELECT * FROM `int_request` NATURAL JOIN student Left JOIN staff ON int_request.staff_id = staff.staff_id";
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
        $list[] = new requestforteacher($id_intre,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
        ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$a_intre,$status_intre
        ,$student_id,$student_username,$student_password,$student_name,$student_year
        ,$staff_username,$staff_password,$staff_name,$staff_position,$file_intre,$year_internships);
        }
        require("connection_close.php");
        return $list;
        

    }
    public static function get($id)
    {
        $list = [];
        require("connection_connect.php");
        $sql="SELECT * FROM `int_request` NATURAL JOIN student WHERE id_intre = '$id'";
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
        $staff_username = "";
        $staff_password = "";
        $staff_name = "";
        $staff_position = "";

        $file_intre = $my_row['file_intre'];
        $year_internships = $my_row['year_internships'];
        require("connection_close.php");
        return new requestforteacher($id_intre,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
        ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$a_intre,$status_intre
        ,$student_id,$student_username,$student_password,$student_name,$student_year
        ,$staff_username,$staff_password,$staff_name,$staff_position,$file_intre,$year_internships);
        

    }
    public static function search($key)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM `int_request` NATURAL JOIN student Left JOIN staff ON int_request.staff_id = staff.staff_id WHERE (student_name like '%$key%' or place_intre like '%$key%' or status_intre = '$key' ) ORDER BY id_intre";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
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
            $list[] = new requestforteacher($id_intre,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
            ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$a_intre,$status_intre
            ,$student_id,$student_username,$student_password,$student_name,$student_year
            ,$staff_username,$staff_password,$staff_name,$staff_position,$file_intre,$year_internships);
        }
        require("connection_close.php");
        return $list;

    }
    public static function update($status_intre,$reason_intre,$id,$staff_id)
    {
       require("connection_connect.php");
       $sql="UPDATE `int_request` SET `status_intre`='$status_intre',`reason_intre`='$reason_intre',`staff_id`='$staff_id' WHERE id_intre = '$id'";
       $result=$conn->query($sql);
       require("connection_close.php");
       return ;
    }
    public static function sortdate()
    {
        require("connection_connect.php");
        $sql="SELECT * FROM `int_request` NATURAL JOIN student Left JOIN staff ON int_request.staff_id = staff.staff_id  ORDER BY date_intre";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
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
            $list[] = new requestforteacher($id_intre,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
            ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$a_intre,$status_intre
            ,$student_id,$student_username,$student_password,$student_name,$student_year
            ,$staff_username,$staff_password,$staff_name,$staff_position,$file_intre,$year_internships);
        }
        require("connection_close.php");
        return $list;

    }
    public static function sortother($key)
    {
        $list=[];
        require("connection_connect.php");
        $sql="SELECT * FROM `int_request` NATURAL JOIN student Left JOIN staff ON int_request.staff_id = staff.staff_id WHERE (year_internships = '$key' or status_intre = '$key' ) ORDER BY id_intre";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
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
            $list[] = new requestforteacher($id_intre,$date_intre,$phone_intre,$facebook_intre,$position_intre,$datein_intre,$dateout_intre
            ,$p1_intre,$place_intre,$add_intre,$p2_intre,$phonep2_intre,$emailp2_intre,$a_intre,$status_intre
            ,$student_id,$student_username,$student_password,$student_name,$student_year
            ,$staff_username,$staff_password,$staff_name,$staff_position,$file_intre,$year_internships);
        }
        require("connection_close.php");
        return $list;

    }

}