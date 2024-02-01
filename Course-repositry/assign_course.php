<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $teacher_name = $_POST['teacher_name'];
    $dep_name = $_POST['dep_name'];
    $course_name = $_POST['course_name'];
    $course_code = $_POST['course_code'];
    $credit_hour = $_POST['credit_hour'];

    $insert = mysqli_query($connect, "INSERT INTO `assign_course1`(`ac_id`, `teacher_name`, `dep_name`, `course_name`, `course_code`, `credit_hour`) 
    VALUES ('[value-1]','$teacher_name','$dep_name','$course_name','$course_code','$credit_hour')");

    if ($insert) {
        $msg = "Data inserted";
    } else {
        $msg = "not inserted";
    }
}

?>




<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="admin1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Assign Course</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" style="color: white"><img src="juwlogo.png" width="50px" class="rounded-pill"> Course Repository System</a>
        <div class="container">
            <a href="logout.php" class="text-white" style="margin-left: 100%">Logout</a>
        </div>

    </nav>

    <div class="sidebar">
        <a href="admindb.php">Dashboard</a>
        <a href="#dp">
            <label for="degprog">Degree Program</label></span><br>
            <select name="degprog" id="degprog">
                <option value="BS">BS</option>
                <option value="MS">MS</option>
            </select></a>
        <a href="#batch">
            <label for="batch">Batch</label><br>
            <select name="batch" id="batch">
                <option value="BSCS">BSCS</option>
                <option value="BSSE">BSSE</option>
                <option value="MSCS">MSCS</option>
                <option value="MSSE">MSSE</option>
            </select></a>
        <a href="#session">
            <label for="session">Session</label><br>
            <select name="session" id="session">
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
            </select></a>
        <a href="display_ac.php">Assign Course</a>
        <a href="#">Faculty</a>
        <a href="#admin">Admin</a>
    </div>


    <div class="content">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-10 col-md-6 col-lg-6 m-4" style="background-color: lightgray; border: 1px solid black;">
                    <center>
                        <h3 style="padding: 20px">Assign Course</h3>
                    </center>

                    <form method="POST">
                        <div class="form-group">
                            <label for="teacher_name">Teacher Name</label>
                            <select name="teacher_name" id="teacher_name1">
                                <option>Ms.Soomaiya</option>
                                <option>Ms.Anisa</option>
                                <option>Ms.Narmeen</option>
                                <option>Ms.Surraiya</option>
                                <option>Ms.Faseeha</option>
                                <option>Ms.Sumaira</option>
                                <option>Ms.Tehreem</option>
                                <option>Ms.Anum</option>
                                <option>Ms.Saba</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dep_name">Department Name</label>
                            <select name="dep_name" id="dep_name1">
                                <option>Computer science and software engineering</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="course_name">Course Name</label>
                            <select name="course_name" id="course_name1">
                                <option>Artificial Intelligence</option>
                                <option>Computer Network</option>
                                <option>Web Design & Development</option>
                                <option>Professional Practices</option>
                                <option>Human Computer Interaction</option>
                                <option>Data Structures and Algorithm</option>
                                <option>Linear Algebra</option>
                                <option>Communication and Presentation Skills</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="course_code">Course Code</label>
                            <select name="course_code" id="course_code1">
                                <option>CSC 3092</option>
                                <option>CSC 2051</option>
                                <option>CSC 3072</option>
                                <option>CSC 2092</option>
                                <option>CSC 3193</option>
                                <option>CSC 3265</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="credit_hour">Credit Hour</label>
                            <select name="credit_hour" id="credit_hour1">
                                <option>3+1</option>
                                <option>3+0</option>
                                <option>2+1</option>
                                <option>2+0</option>
                            </select>
                        </div>

                        <center><button type="submit" name="submit" class="btn btn-success m-2 col-8" style="margin-left: 10px">Submit</button></center>
                        <center><button class="btn btn-primary col-8 m-2" href="bs_course.php">Back</button></center>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>