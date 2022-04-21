<?php
   require("../condb.php");
  session_start();
   if(!isset($_SESSION['Adminlogin'])){
       header("location: ../adlogin.php");
   }

   $id = $_SESSION['Adminlogin'];
  
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="../dashboard/style.css" />
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                class="fas fa-user-secret me-2"></i>PayRoll S-M</div>
        <div class="list-group list-group-flush my-3">
            <a href="../dashboard/index.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                    class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-project-diagram me-2"></i>Attendance</a>
           <!-- <a href="../functionality/addemp.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                class="fas fa-gift me-2"></i>Employee</a> -->
                <div class="dropdown">
  <button class="btn btn-light dropdown-toggle list-group-item list-group-item-action bg-transparent second-text fw-bold" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="fas fa-gift me-2"></i> Employee
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="../functionality/addemp.php">Add Employee</a></li>
    <li><a class="dropdown-item" href="../functionality/viewrecord.php">Show ALL Employee</a></li>
    <!--<li><a class="dropdown-item" href="#">Something else here</a></li>-->
  </ul>
</div>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-paperclip me-2"></i>Reports</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-shopping-cart me-2"></i>Payroll</a>
          <form action="" method="post">
           <a href="#" class="list-group-item list-group-item-action bg-transparent text-primary fw-bold"><i
                    class="fas fa-power-off me-2"></i> <input type="submit" value="Logout" name="logout"></a>
                    </form>
        </div>
    </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php echo $id ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                              <!--  <li><a class="dropdown-item" href="#">Logout</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

           <h2 class="text-center bg-light">Fill Details Of Employee</h2>

             <div class="container bg-light rounded shadow mt-4 py-4">
             <form class="row g-3" method="post">
             <div class="col-12">
    <label for="username" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="fullname" placeholder="full name" name="fname">
  </div>
             <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-md-6">
    <label for="number" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="inputNumber" name="mno">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="add1">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="add2">
  </div>
  <div class="col-md-6">
    <label for="department" class="form-label">Department</label>
    <input type="text" class="form-control" id="department" placeholder="department" name="department">
  </div>
  <div class="col-md-6">
    <label for="salary" class="form-label">Salary</label>
    <input type="text" class="form-control" id="salary" name="salary">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip" name="zip">
  </div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="add">Submit</button>
  </div>
</form>
             </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>

<?php

if(isset($_POST['logout']))
{
  session_destroy();
  header("../adlogin.php");
}

?>

<?php

if(isset($_POST['add'])){
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $mno = $_POST['mno'];
    $add1 = $_POST['add1'];
    $add2 = $_POST['add2'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    $qry = "INSERT INTO `employee_record`(`fullname`, `email`, `mobno`, `address`, `address2`, `department`, `salary`, `city`, `state`, `zip`) VALUES ('$name','$email','$mno','$add1','$add2','$department','$salary','$city','$state','$zip')";
    $res = mysqli_query($con , $qry);
    if($res){
     header("location:addemp.php");
      // <script>alert("Added successful")</script>
    }
    else{
        echo "not inserted";
    }

}

?>