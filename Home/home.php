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
    <link rel="stylesheet" href="home.css">
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
            <li><a href="#admin" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Admin</span></a></li>
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
        <h1>K.K MANDAL SCIENCE COLLEGE</h1>
      </div>
    </section>
    
    <section id="welcome" class="d-flex flex-column justify-content-center align-items-center">
      <div class="welcome-container bg">
        <h1>WELCOME TO</h1>
        <p><span>LIBRARY</span></p>
        <p>Opens at:- 9:00 A.M. <br> Closes at:- 6:00 P.M.</p>
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