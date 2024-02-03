<?php
    session_start();

    if(isset($_SESSION['uid']))
    {
        // echo $_SESSION['uid'];
    }
    else
    {
        // echo "error";
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="updateform.css">
</head>
<body>
    
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    
    <header id="header">
      <div class="d-flex flex-column">
          <div class="clock">
            <div class="center-nut"></div>
            <div class="center-nut2"></div>
            <div class="indicators">
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
               <div></div>
            </div>
            <div class="sec-hand">
               <div class="sec"></div>
            </div>
            <div class="min-hand">
               <div class="min"></div>
            </div>
            <div class="hr-hand">
               <div class="hr"></div>
            </div>
         </div>
         <script>
            const sec = document.querySelector(".sec");
            const min = document.querySelector(".min");
            const hr = document.querySelector(".hr");
            setInterval(function(){
              let time  = new Date();
              let secs = time.getSeconds() * 6;
              let mins = time.getMinutes() * 6;
              let hrs = time.getHours() * 30;
              sec.style.transform = `rotateZ(${secs}deg)`;
              min.style.transform = `rotateZ(${mins}deg)`;
              hr.style.transform = `rotateZ(${hrs+(mins/12)}deg)`;
            });
         </script>
        </div>
        <nav id="navbar" class="nav-menu navbar">
          <ul>
            <li><a href="../Home/home.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Admin</span></a></li>
            <li><a href="../student/student.php" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Student</span></a></li>
            <li><a href="../issue/issue.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Issue</span></a></li>
            <li><a href="../return/return.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Return</span></a></li>
            <li><a href="../addbook/addbook.php" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Add Book</span></a></li>
            <li><a href="../searchbook/searchbook.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Search</span></a></li>
            <li><a href="../admin/logout.php" class="nav-link scrollto"><span>Log out</span></a></li>

          </ul>
        </nav>
      </div>
      
    </header>
    <section id="heading" class="d-flex flex-column justify-content-center align-items-center">
      <div class="heading-container">
        <h1>M.W.A  SCHOOL</h1>
      </div>
    </section>
    <?php

    include('../dbcon.php');
    $sid = $_GET['sid'];

    $sql = "SELECT * FROM `student` WHERE `sid`='$sid'";
    $run = mysqli_query($con,$sql);

    $data = mysqli_fetch_assoc($run);
?> 
    <section id="welcome" class="d-flex flex-column justify-content-center align-items-center">
      <div class="welcome-container ">
        <h1><span>Student</span></h1>
        <form method="post" action="updatestudent.php"> 
<table align="center" border="1" style="width:70%; margin-top:40px;">
<tr>
    <th>ID</th>
    <td><input type="text" name="sid" value=<?php echo $data['sid']; ?>> </td>
</tr>
<tr>
    <th>Name</th>
    <td><input type="text" name="name" value=<?php echo $data['name']; ?>> </td>
</tr>
<tr>
    <th>Department</th>
    <td><input type="text" name="dept" value=<?php echo $data['dept']; ?>> </td>
</tr><tr>
    <th>Phone</th>
    <td><input type="text" name="phone" value=<?php echo $data['phone']; ?>> </td>
</tr><tr>
    <th>Email</th>
    <td><input type="text" name="email" value=<?php echo $data['email']; ?>> </td>
</tr>
<tr>
    <td colspan="2" align="center">
    <input type="hidden" name="sid" value="<?php echo $data['sid']; ?>" />   
    
    <input type="submit" name="submit" value="Submit"></td>
</tr>

</table>
</form> 
    </div>
    </section>
        <footer id="footer">
          <div class="container">
            <div class="copyright">
              &copy; Copyright <strong><span>Shashank</span></strong>
            </div>
          </div>
        </footer>
</html>