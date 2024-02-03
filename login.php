<?php 
    session_start();
    if (isset($_POST['uid'])) {
        header('location:admin/admindash.php');
        
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>lms_login</title>
    <link href="css/login.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    
                <form class="form-container" action="login.php" method="post">
                <h1 align="center">Admin Login</h1>
                 <div class="mb-3">
                 <label  class="form-label" >Username</label>
                 <input type="text" class="form-control" name="uname"  required >
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label" >Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
                </div>
                 <button type="submit" class="btn btn-success btn-block" name="login"  value="Login" >Login</button>
                </form>
            </div>
        </div>
</body>

</html>

<?php
include('dbcon.php');

if (isset($_POST['login'])) {
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $qry = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password';";
    $qry_run = mysqli_query($con, $qry);

    $row = mysqli_num_rows($qry_run);
    if ($row < 1) {
?>
        <script>
            alert("username or password not match!!")
            window.open('login.php', '_self');
        </script>
<?php

    } else {
        $data = mysqli_fetch_assoc($qry_run);


        $id = $data['id'];
        echo "id=" . $id;

        session_start();
        $_SESSION['uid'] = $id;
        header('location:Home');
    }
}
?>