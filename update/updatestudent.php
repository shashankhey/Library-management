

<?php

    include('../dbcon.php');

    $sid = $_POST['sid'];
    $name=$_POST['name'];
    $dept=$_POST['dept'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];


    $qry = "UPDATE `student` SET  `name`='$name', `dept`='$dept', `phone`='$phone',`email`='$email' WHERE `sid`=$sid;";

    $run = mysqli_query($con,$qry);
    
    if(($run) == true)
    {
        // echo "query executed";
?>
    <script>
        alert("Data Updated to Student Database successfully");
        window.open('updatedata.php?sid=<?php echo $sid; ?>','_self');
    </script>
    <?php
    }
    else{
        echo "failed";
    }

?>