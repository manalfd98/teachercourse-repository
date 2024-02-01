<?php
include 'connection.php';

$id = $_GET['c_id'];
$update = "SELECT * FROM course WHERE c_id = '$id'";
$data = mysqli_query($connect, $update);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);



?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="admin1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Update Course</title>
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
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-6 col-lg-6" style="background-color: lightgray; border: 1px solid black;">
                    <center>
                        <h3 style="padding: 10px">Update Course</h3>
                    </center>

                    <form method="POST">

                        <div class="form-group">
                            <label for="name">Course Name</label>
                            <input type="text" value="<?php echo $result['name'];  ?>" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="course_code">Course Code</label>
                            <input type="text" value="<?php echo $result['course_code'];  ?>" class="form-control" name="course_code">
                        </div>
                        <div class="form-group">
                            <label for="credit_hours">Credit Hours</label>
                            <input type="text" value="<?php echo $result['credit_hours'];  ?>" class="form-control" name="credit_hours">
                        </div>
                        <div class="form-group">
                            <label for="clos">CLOs</label>
                            <input type="text" value="<?php echo $result['clos'];  ?>" class="form-control" name="clos">
                        </div>
                        <div class="form-group">
                            <label for="reference_books">Reference Books</label>
                            <input type="text" value="<?php echo $result['reference_books'];  ?>" class="form-control" name="reference_books">
                        </div>
                        <div class="form-group">
                            <label for="outline">Outline</label>
                            <input type="text" value="<?php echo $result['outline'];  ?>" class="form-control" name="outline">
                        </div>
                        <div class="form-group">
                            <label for="theory_wb">Theory Weekly Breakup</label>
                            <input type="text" value="<?php echo $result['theory_wb'];  ?>" class="form-control" name="theory_wb">
                        </div>
                        <div class="form-group">
                            <label for="lab_wb">Lab Weekly Breakup</label>
                            <input type="text" value="<?php echo $result['lab_wb'];  ?>" class="form-control" name="lab_wb">
                        </div>
                        <div class="form-group">
                            <label for="objectives">Objectives</label>
                            <input type="text" value="<?php echo $result['objectives'];  ?>" class="form-control" name="objectives">
                        </div>

                        <center><button type="submit" name="update" class="btn btn-success m-2 col-8" style="margin-left: 15px">Update</button></center>
                        <center><button class="btn btn-primary col-8 m-2" href="bs_course.php">Back</button></center>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $course_code = $_POST['course_code'];
    $credit_hours = $_POST['credit_hours'];
    $clos = $_POST['clos'];
    $reference_books = $_POST['reference_books'];
    $outline = $_POST['outline'];
    $theory_wb = $_POST['theory_wb'];
    $lab_wb = $_POST['lab_wb'];
    $objectives = $_POST['objectives'];

    $query = "UPDATE course set name='$name',course_code='$course_code',credit_hours='$credit_hours',
    clos='$clos',reference_books='$reference_books',outline='$outline',theory_wb='$theory_wb',lab_wb='$lab_wb',objectives='$objectives' WHERE c_id='$id'";


    $result = mysqli_query($connect, $query);


    if ($result) {
        echo "Course Updated";
    } else {
        echo "Course Not Updated";
    }
}
?>