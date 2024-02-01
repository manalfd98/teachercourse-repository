<?php
include 'connection.php';

$id = $_GET['c_id'];
    $delete = "DELETE FROM `course` WHERE c_id = '$id'";
    $data = mysqli_query($connect, $delete);
    header("Location:bs_course.php");



?>