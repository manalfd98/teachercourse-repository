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
    <title>Admin Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" style="color: white"><img src="juwlogo.png" width="50px" class="rounded-pill"> Course Repository System</a>
        <a class="logout" href="logout.php" style="color: white;">Logout</a>

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
            <select name="batch" id="batch" size="1" onchange="window.location.href=this.value;">
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
        <h2 style="margin-top: 20px">Dashboard</h2>

        <div class="row row-cols-1 row-cols-md-4 g-4 ">
            <div class="col">
                <div class="card border-dark mb-3" style="max-width: 20rem; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Courses</h5>
                        <p class="card-text" style="font-size: 20px">205</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-dark mb-3" style="max-width: 20rem; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Degree Programs</h5>
                        <p class="card-text" style="font-size: 20px">2</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-dark mb-3" style="max-width: 20rem; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Session</h5>
                        <p class="card-text" style="font-size: 20px">4</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-dark mb-3" style="max-width: 20rem; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Faculty</h5>
                        <p class="card-text" style="font-size: 20px">180</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border-dark mb-3" style="max-width: 20rem; height: 180px;">
                    <div class="card-body">
                        <h5 class="card-title">Batch</h5>
                        <p class="card-text" style="font-size: 20px">4</p>
                    </div>
                </div>
            </div>
        </div>
    </div>







</body>

</html>