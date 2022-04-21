<?php
include "config.php";

//On clicking Submit Button, Process the form.
if(isset($_POST['submit']))
{
    //Get variables from the form.
    $n = $_POST['nm'];
    $e = $_POST['eid'];
    $p = $_POST['pass'];

    $sql="insert into hr(Name,EmployeeID,Password) values ('$n','$e','$p')";

    //Executing it.
    $result=$conn->query($sql);

    if ($result == TRUE)
    {
        echo "Account Created Successfully.";
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
    <title>LOGIN</title>
    <link rel="stylesheet" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- This link is for icon -->
    <script src="https://kit.fontawesome.com/716d860306.js" crossorigin="anonymous"></script>

    <link rel="style sheet" href="style1.css">
  </head>
<body>
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-light pt-3 pb-3">
        <div class="container-fluid">

            <a class="navbar-brand me-4" href="create.php"><span id="burgundy">Happy</span><span id="orange">_Performer</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 ms-4  mb-lg-0">
                    <li class="nav-item me-2">
                        <a class="nav-link text-secondary" aria-current="page" href="create.php">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link text-secondary" href="/about.html">About</a>
                    </li>
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle text-secondary" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Partner with us
                        </a>
                        <ul class="dropdown-menu text-secondary" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Performer</a></li>
                            <li><a class="dropdown-item" href="#">Talent Acquistion</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Careers</a></li>
                            <a class="dropdown-item" href="#">HappyPerformer for work</a>
                    </li>
                </ul>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link text-secondary" href="/contact.html">Contact us</a>
                </li>
                </ul>

                <div class="mx-2">
                    <!-- <button class="btn btn-outline-warning me-2 my-2" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Login</button> -->
                    <button class="btn btn-outline-warning me-2 my-2" data-bs-toggle="modal"
                        data-bs-target="#signupModal">Admin Login</button>
                </div>
            </div>
        </div>
    </nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <div class="container">
  <div class="row"> </div>
    <div class="col-sm-8 p-4">
      <img src ="1.png" style="width:100%; height:600px; padding-right: 50px;">

    </div>
    <div class="col-sm-4 p-4">
    <form action="" method="post">
      <div>
          <legend><h2><b> LOGIN INFORMATION </b></h2></legend><br>
            Name: <br>
                <input type="text"size="30"  name="nm" placeholder="Enter Name"  />
		    <br><br>
            Email Address: <br>
                <input type="text"size="30" name="eid" placeholder="Enter Your Email Address" required />
		    <br><br>
            Password: <br>
                <input type="text"size="30" name="pass" placeholder="Enter Password" required />
		    <br><br>

            <input type="submit" value="Submit" name="submit" />
            <input type="button" onclick="window.location='view.php'" class="Redirect" value="Forgot Password"/>
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
  img {
    max-width: 100%;
    max-height: 450px;
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
