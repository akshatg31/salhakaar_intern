<?php
include_once "config.php";


if(isset($_POST['submit']))
{
    //Get variables from the form.
    $e = $_POST['empid'];
    $sql="insert into empdash(EmployeeID) values ('$e')";
    $result=$conn->query($sql);

    if ($result == TRUE)
    {
        echo "Employee Verified Successfully.";
    }
    else{
        echo "Error" .$sql."<br>".$conn->error;
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
    <title>Attendance Portal</title>
    <link rel="stylesheet" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- This link is for icon -->
    <script src="https://kit.fontawesome.com/716d860306.js" crossorigin="anonymous"></script>
  </head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <div class="container">
  <div class="row"> </div>
    <div class="col-sm-8 p-4">
    

    </div>
    <div class="col-sm-4 p-4">
    <form action="" method="post">
      <div>
          <legend><h2><b> ATTENDANCE INFORMATION </b></h2></legend><br>
            Employee Id: <br>
                <input type="text"size="30"  name="empid" placeholder="Enter Employee Id"  />
		    <br><br>


            <input type="submit" value="Submit" name="submit" />
          </div>
        </div>
      </div>
    </div>
    <style>
      .container {
    display: flex;
    align-items: left;
    background-color: skyblue;
    justify-content: center;
    border: 1px solid black;
    width: 1000px;
    height: 500px;
    margin: auto;
  }

  @media screen and (max-width: 600px) {
      img{
        position: absolute;
        visibility: hidden;
      }
    }
  }
  </style>
  </form>
</body>
</html>