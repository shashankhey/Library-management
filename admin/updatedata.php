<?php

    include('../dbcon.php');

    $name=$_POST['name'];
    $dept=$_POST['dept'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    $id = $_POST['sid'];


    $qry = "UPDATE `student` SET  `name`='$name', `dept`='$dept', `phone`='$phone',`email`='$email' WHERE `id`=$id;";

    $run = mysqli_query($con,$qry);
    
    if(($run) == true)
    {
        // echo "query executed";
?>
    <script>
        alert("Data Updated to Student Database successfully");
        window.open('updateform.php?sid=<?php echo $id; ?>','_self');
    </script>
    <?php
    }
    else{
        echo "failed";
    }

?>