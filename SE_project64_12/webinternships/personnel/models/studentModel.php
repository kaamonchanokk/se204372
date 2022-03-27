<?php
class student
{
    public $student_id,$student_username,$student_password,$student_name,$student_year;

    public function __construct($student_id,$student_username,$student_password,$student_name,$student_year)
    {
        $this->student_id= $student_id;
        $this->student_username= $student_username;
        $this->student_password= $student_password;
        $this->student_name= $student_name;
        $this->student_year= $student_year;

    }
    public static function getAll()
    {
        $studentList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `student`";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $student_id = $my_row['student_id'];
        $student_username = $my_row['student_username'];
        $student_password = $my_row['student_password'];
        $student_name = $my_row['student_name'];
        $student_year = $my_row['student_year'];       
            $studentList[] = new student($student_id,$student_username,$student_password,$student_name,$student_year);
        }
        require("connection_close.php");
        return $studentList;
    }
    public static function get($id)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `student` WHERE student_id = '$id' ";
        $result = $conn->query($sql);
        $my_row=$result->fetch_assoc();
        $student_id = $my_row['student_id'];
        $student_username = $my_row['student_username'];
        $student_password = $my_row['student_password'];
        $student_name = $my_row['student_name'];
        $student_year = $my_row['student_year'];      
    
        require("connection_close.php");
        return new student($student_id,$student_username,$student_password,$student_name,$student_year);
    }
   

}