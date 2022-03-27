<?php
class LoginController
{
    public function index()
    {
        require_once("./views/login/index_login.php");
    }
    public function getlogin()
    {
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $loginlist =  login::checkstudent($username,$password);
        $logintlist =  logint::checkteacher($username,$password);
        if($loginlist->student_id === "" && $logintlist->staff_id === "")
        {
            echo "<script>alert('กรอกชื่อผู้ใช้รหัสผ่านไม่ถูกต้อง กรุณากรอกใหม่อีกครั้ง');</script>";
            echo "<script>window.location.href='../cpekukps/?controller=login&action=index'</script>";
        }
        else if($loginlist->student_id === "")
        {
            $_SESSION['staff_username'] = $logintlist->staff_username;
            $_SESSION['staff_name'] = $logintlist->staff_name;
            $_SESSION['staff_id'] = $logintlist->staff_id;
            $_SESSION['staff_picture'] = $logintlist->staff_picture;
            $_SESSION['staff_position'] = $logintlist->staff_position;
            echo "<script>window.location.href='../personnel'</script>";
        }
        else
        {
            $_SESSION['student_picture'] = $loginlist->student_picture;
            $_SESSION['student_username'] = $loginlist->student_username;
            $_SESSION['student_name'] = $loginlist->student_name;
            $_SESSION['student_id'] = $loginlist->student_id;
            echo "<script>window.location.href='../student'</script>";
        }
    }
}
?>