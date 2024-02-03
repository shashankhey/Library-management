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
    include('titlehead.php');

    include('../dbcon.php');
    $sid = $_GET['sid'];

    $sql = "SELECT * FROM `student` WHERE `id`='$sid'";
    $run = mysqli_query($con,$sql);

    $data = mysqli_fetch_assoc($run);
?>

<form method="post" action="updatedata.php"> 
<table align="center" border="1" style="width:70%; margin-top:40px;">
<tr>
    <th>Name</th>
    <td><input type="text" name="name" value=<?php echo $data['name']; ?> </td>
</tr>
<tr>
    <th>Department</th>
    <td><input type="text" name="dept" value=<?php echo $data['dept']; ?> </td>
</tr><tr>
    <th>Phone</th>
    <td><input type="text" name="phone" value=<?php echo $data['phone']; ?> </td>
</tr><tr>
    <th>Email</th>
    <td><input type="text" name="email" value=<?php echo $data['email']; ?> </td>
</tr>
<tr>
    <td colspan="2" align="center">
    <input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />   
    
    <input type="submit" name="submit" value="Submit"></td>
</tr>

</table>
</form>