<?php
include_once('config.php');
date_default_timezone_set('Asia/Kolkata');
$current_datetime = date('Y-m-d H:i:s');

$method = $_GET['method'];

$obj = new Employee();

if($method == 'addEmployee')
    $obj->addEmployee();
elseif($method == 'viewEmployees')
    $obj->viewEmployees();
elseif($method == 'deleteEmployee')
    $obj->deleteEmployee();
elseif($method == 'updateEmployee')
    $obj->updateEmployee();
else
    echo 'why are you here';

class Employee{
    function addEmployee(){
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : '';
        $emp_id = isset($_POST['emp_id']) ? $_POST['emp_id'] : '';
        $department = isset($_POST['department']) ? $_POST['department'] : '';
        
        $msg = 'Fail! Please try again.';
        if($email != '' && $password != ''){
            if($emp_id == ''){
                $emp_id = random_int(9999,1000000);
            }
            $sql_check = "SELECT id FROM employee WHERE employeeID LIKE '%$emp_id%' OR email LIKE '%$email%' AND is_delete = 0";
            $sql_check_result = $conn->query($sql_check);
            if($sql_check_result->num_rows > 0){
                $msg = "Employee ID or Email already exists";
            }
            else{
                $sql = "INSERT INTO employee (name, mobile, email, department, password, employeeID, modified_datetime, created_datetime) VALUES ('$name', '$mobile', '$email', '$department', '$password', '$emp_id', '$current_datetime', '$current_datetime')";
                $result = $conn->query($sql);
                if($result)
                {
                    $msg = "Employee Added Successfully";
                }
            }
        }

        echo $msg;
    }

    function viewEmployees(){
        $data = array();
        $sql = $conn->query("SELECT * FROM employee WHERE is_delete = 0");
        while($row = $sql->fetch_assoc()){
            $data[] = $row;
        }

        print_r($data);
    }

    function deleteEmployee(){
        $id = isset($_POST['id']) ? $_POST['id'] : '0';
        $is_delete = isset($_POST['is_delete']) ? $_POST['is_delete'] : '0';

        if($id != 0 && $is_delete != 0){
            $sql = $conn->quey("UPDATE employee SET is_delete = '1', modified_datetime = '$current_datetime' WHERE id = '$id'");
            if($sql){
                echo 'Employee deleted successfully.';
                return;
            }
        }
        echo "Fail! Something went wrong.";
    }

    function updateEmployee(){
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
    }
}
?>