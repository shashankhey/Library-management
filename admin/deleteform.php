<?php

    include('../dbcon.php');

    $id = $_REQUEST['sid'];


    $qry = "DELETE FROM `student`  WHERE `id`=$id;";

    $run = mysqli_query($con,$qry);
    
    if(($run) == true)
    {
        // echo "query executed";
?>
    <script>
        alert("Data Deleted");
        window.open('deletestudent.php?sid=<?php echo $id; ?>','_self');
    </script>
    <?php
    }
    else{
        echo "failed";
    }

?>