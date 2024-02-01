<?php

include('connection.php');
$showAert = false;
if (isset($_POST['submit'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password =  $_POST['password'];
    $designation =  $_POST['designation'];


    $insertquery = "insert into `teacher`(`username`,`email`,`password`,`designation`)
     values('" . $username . "','" . $email . "','" . $password . "','" . $designation . "')";
    $result = mysqli_query($connect, $insertquery);
    if ($result) {
        $showAert = true;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="mystyle2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-custom">
    
        <a class="navbar-brand" style="color: white">
            <img src="juwlogo.png" width="50px" class="rounded-pill"> Course Repository</a>
    </nav>
    <?php
    if ($showAert) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Congrats!</strong> Your data is insert successfully
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <form class="form-container" action="registration2.php" name="myform" onsubmit="return validateform()" method="POST">

                    <center>
                        <h2>REGISTRATION</h2>
                    </center>


                    <div class="form-group">
                        <label class="username" for="Name1">User Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="john123">
                        <span id="username" class="text-danger"></span>

                    </div>
                    <div class="form-group">
                        <label class="email" for="Email1">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="john@gmail.com">
                        <span id="email1" class="text-danger"></span>

                    </div>
                    <div class="form-group">
                        <label class="password" for="Password1">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="*********">
                        <span id="password1" class="text-danger"></span>

                    </div>
                    <div class="form-group">
                        <label for="designation">Designation:</label>
                        <select name="designation" id="Designation1">
                            <option value="teacher">Faculty</option>
                            <option value="admin">Admin</option>
                            <option value="chairperson">Chairperson</option>
                        </select>

                        <div class="submit">
                            <button type="submit" name="submit" class="btn btn-primary btn-block active">Submit</button>
                        </div>

                        <p style="color: black; margin-top: 20px">Already a member? <a href="login1.php">Sign in</a></p>

                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>
    <script>

        function validateform() {
            var name=document.getElementById('name').value;
            var email=document.getElementById('email').value;
            var password=document.getElementById('password').value;

            if(name==""){
                document.getElementById('username').innerHTML="*Please fill the username field";
                return false;
            }
            if(name.length<=2){
                document.getElementById('username').innerHTML="*User length must be greate than 2";
                return false;
            }
            if(!isNaN(name)){
                document.getElementById('username').innerHTML="*Only Character Allowed";
                return false;
            }
            if(email==""){
                document.getElementById('email1').innerHTML="*Please fill the email field";
                return false;

            }
            if(email.indexOf('@')<=0){
                document.getElementById('email1').innerHTML="*Invalid Postion";
                return false;

            }
            if(email.charAt(email.length-4)!='.'){
                document.getElementById('email1').innerHTML="*Invalid Email";
                return false;

            }

            if(password==""){
                document.getElementById('password1').innerHTML="*Please fill the password field";
                return false;

            }




        }
    </script>

</body>

</html>