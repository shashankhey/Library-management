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
<table align="center">
<form action="deletestudent.php" method="post">
    <tr>
        <th>Enter Department</th>   
            <td><input type="text" name="dept" placeholder="Enter Department" required="required"/> </td>

        <th>Enter Student name</th>   
            <td><input type="text" name="name" placeholder="Enter Student Name" required="required"/> </td>
        <td colspan="2"><input type="submit" name="submit" value="Submit"/></td>
    </tr>
</form>
</table>


<table align="center" width="80%" border="1" style="margin-top:10px">
    <tr style="background-color:#000; color:#fff;">
    <th>S no.</th>
        <th>Name</th>
        <th>Dept.</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action</th>


    </tr>

<?php
    if(isset($_POST['submit'])){
        include('../dbcon.php');
        $standard = $_POST['dept'];
        $name = $_POST['name'];

        $sql =  "SELECT * FROM `student` WHERE `dept`='$standard' AND `name` like '%$name%'";
        $run = mysqli_query($con,$sql);

        if(mysqli_num_rows($run)<1)
        {
            echo "<tr><td colspan='5'>No Records Found</td></tr>";
        }
        else
        {   
            $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                $count++;
                ?>
            <tr align="center">
                <td><?php echo $count; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['dept']; ?></td>
                <td><?php echo $data['phone']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><a href="deleteform.php?sid=<?php echo $data['id']; ?>">Delete</a></td>


            </tr>

<?php


            }
        }
    }

?>
</table>