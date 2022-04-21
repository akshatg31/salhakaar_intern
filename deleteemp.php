<?php
include_once('config.php');

if (isset($_POST['employeeID']))
{
    $user_id=$_POST['employeeID'];

    //Delete Query
    $sql="DELETE FROM `employee` WHERE `employeeID`='$user_id'"; 
    //Execution
    $result = $conn->query($sql);

    if($result == TRUE)
    {
        echo "Record Deleted Successfully.";
    }
    else{
        echo "ERROR" .$sql."<br>".$conn->error;
    }
}
?>
