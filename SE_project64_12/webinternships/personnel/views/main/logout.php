<?php 

    session_start();
    session_destroy();
    header("location: https://bservcpe.eng.kps.ku.ac.th/db21/db21_097/webinternships/cpekukps/?controller=login&action=index");


?>