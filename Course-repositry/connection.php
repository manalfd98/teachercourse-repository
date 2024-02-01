<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'course_repository');

if (!$connect) {
    die("error".mysqli_connect_error());
}

?>