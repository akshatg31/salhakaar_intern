<?php
include "config.php";
date_default_timezone_set('Asia/Kolkata');
$current_datetime = date('Y-m-d H:i:s');

if(isset($_POST['submit']))
    {
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $department = $_POST['department'];
        $password   = $_POST['password'];
        $contact   = $_POST['contact'];
        $employeeID = $_POST['employeeID'];

        if(empty($name) or empty($email) or empty($department) or empty($password) or empty($employeeID) or empty($contact))
        {
            echo "All fields are required";
        }
        else
        {
            $sql = "INSERT INTO employee (name, contact, email, department, password, employeeID, modified_datetime, created_datetime) VALUES ('$name', '$contact', '$email', '$department', '$password', '$employeeID', '$current_datetime', '$current_datetime')";
            $result = $conn->query($sql);
            if($result == TRUE)
            {
                echo "Employee Added Successfully";
            }
            else
            {
                echo "Error" .$sql."<br>".$conn->error;
            }
        }
        $conn->close(); 
    }    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style2.css">

  </head>
<body>

<div class="container" >
    <div class="row">
        <div class="col-sm-12">
            <h2 class="p-3" >  Add New Employee </h2>
        </div>

        <div class="p-4">
            <form method="post" action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name"  placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" name="department" class="form-control" id="department"  placeholder="Enter department">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                   
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="form-group">
                    <label for="EmployeeID">Employee ID</label>
                    <input type="text" name="employeeID" class="form-control" id="EmployeeID" placeholder="Employee ID">
                </div>

                <div class="form-group">
                    <label for="contact">Contact Number</label>
                    <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter Contact Number">
                </div>
            
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
            title: 'Welcome to the Employee Management System',
            text: 'This is a system to manage employees',
            icon: 'success',
            confirmButtonText: 'Cool'
        });
    </script> -->
</div>
</body> 
</html>

