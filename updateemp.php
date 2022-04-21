<?php
include_once('config.php');

$id = isset($_POST['id']) ? $_POST['id'] : '0';
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
        $department = isset($_POST['department']) ? $_POST['department'] : '';

        $msg = 'Fail! Something went wrong';
        if($id != '0'){
            $sql = $conn->query("UPDATE employee SET name = '$name', email = '$email', mobile = '$mobile', department = '$department', modified_datetime = '$current_datetime' WHERE id = '$id'");
            if($sql){
                $msg = 'Employee details updated successfully';
            }
        }

        echo $msg;
?>

    