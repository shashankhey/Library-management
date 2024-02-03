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

<?php
    include('header.php');
    include('titlehead.php')
?>

<form method="post" action="addstudent.php">
<table align="center" border="1px solid black" style="width:70%; margin-top:40px;">
<tr>
    <th>Name</th>
    <td><input type="text" name="name" placeholder="Enter name" required></td>
</tr>
<tr>
    <th>Dept.</th>
    <td><input type="text" name="dept" placeholder="Enter Dept." required></td>
</tr>
<tr>
    <th>Phone</th>
    <td><input type="text" name="phone" placeholder="Enter phone" required></td>
</tr>
<tr>
    <th>Email</th>
    <td><input type="email" name="email" placeholder="Enter email" required></td>
</tr>
<tr>
    <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
</tr>

</table>
</form>

</body>
</html>



<?php
    
    if(isset($_POST['submit'])){
        include("../dbcon.php");



        $name=$_POST['name'];
        $dept=$_POST['dept'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];

        $qry= "INSERT INTO `student`( `name`, `dept`, `phone`, `email`) VALUES ('$name','$dept','$phone','$email')";

        $run= mysqli_query($con,$qry);

        if($run==true){
            ?>

            <script>
                alert("Data enter successfully");
            </script>

            <?php
        }
        
    }





?>