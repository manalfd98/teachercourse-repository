<?php
include 'connection.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="admin1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>faculty</title>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" style="color: white"><img src="juwlogo.png" width="50px" class="rounded-pill"> Course Repository System</a>
        <div class="container">
            <a href="logout.php" class="text-white" style="margin-left: 100%">Logout</a>
        </div>

    </nav>

    <div class="sidebar">
        <a href="admindb.php"> Dashboard</a>
        <a href="#dp">
            <label for="degprog">Degree Program</label></span><br>
            <select name="degprog" id="degprog">
                <option value="">Select</option>
                <option value="BS">BS</option>
                <option value="MS">MS</option>
            </select></a>
        <a href="#batch">
            <label for="batch">Batch</label><br>
            <select name="batch" id="batch">
                <option value="">Select</option>
                <option value="bs_course.php">BSCS</option>
                <option value="BSSE">BSSE</option>
                <option value="MSCS">MSCS</option>
                <option value="MSSE">MSSE</option>
            </select></a>
        <a href="#session">
            <label for="session">Session</label><br>
            <select name="session" id="session">
                <option value="">Select</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
            </select></a>
        <a href="display_ac.php">Assign Course</a>
        <a href="faculty.php">Faculty</a>
        <a href="#admin">Admin</a>
    </div>



    <div class="content">
        <div class="container-fluid">
            <h2 style="margin-top: 20px">All Faculty</h2>

        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Department</th>
                    <th scope="col">Course Code</th>

                </tr>
                <?php

                $select = mysqli_query($connect, "SELECT ac.teacher_name,c.name,ac.dep_name,c.course_code FROM course as c, assign_course1 as ac WHERE c.course_code=ac.course_code");
                $num = mysqli_num_rows($select);
                if ($num > 0) {
                    while ($result = mysqli_fetch_assoc($select)) {
                        echo " 
                        <tr>
                           
                            <td>" . $result['teacher_name'] . "</td>
                            <td>" . $result['name'] . "</td>
                            <td>" . $result['dep_name'] . "</td>
                            <td>" . $result['course_code'] . "</td>
                
                        </tr>
                        ";
                    }
                }
                ?>
        </table>
    </div>

</body>

</html>