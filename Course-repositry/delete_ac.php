<?php
include 'connection.php';

$id = $_GET['ac_id'];
$delete = "DELETE FROM `assign_course1` WHERE ac_id = '$id'";
$data = mysqli_query($connect, $delete);
header("Location:display_ac.php");




?>