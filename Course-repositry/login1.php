
<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-custom text-white">
    <a class="navbar-brand"><img src="juwlogo.png" width="50px" class="rounded-pill"> Course Repository</a>
  </nav>
  <!-- <?php
  if ($login) {

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congrats!</strong>login successfull
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
  }
  if ($showError) {

    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error  </strong>' . $showError . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
  }
  ?>
 -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <form class="form-container" action="login.php" method="POST">

          <center>
            <h2>LOG IN</h2>
          </center>

          <div class="form-group">
            <label class="username" for="UserName1" style="color: black">User Name</label>
            <input type="name" name="name" class="form-control" id="UserName1" placeholder="john123">
          </div>
          <div class="form-group">
            <label class="password" for="Password1">Password</label>
            <input type="password" name="password" class="form-control" id="Password1" placeholder="********">
          </div>

          <div class="checkbox">
            <label class="forgot-password">
              <input type="checkbox"> Forgot Password
            </label>
          </div>
          <div class="submit">
            <button type="submit" class="btn btn-primary btn-block active">Submit</button>
          </div>
          <p style="color:black; margin-top: 20px;">
            Not a member? <a href="registration2.php"> Sign up</a>
          </p>
        </form>

      </div>
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
  </div>


  </div>


</body>

</html>
<?php
include 'connection.php';
// $login = false;
// $showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['name'];
  $password = $_POST['password'];

  $sql = "Select * from teacher";
  // echo $sql;

  $result = mysqli_query($connect, $sql);
  while($row=mysqli_fetch_assoc($result)){
    if($row['username']==$username && $row['password']==$password){
    header("location:admindb.php");

  }
  else{
    echo "Login Unsuccessful Invalid data";
  }
}
  $check=mysqli_fetch_array($result);
  if(isset($check)){
    echo"Login Successful";

  }
}

?>