<?php

session_start();
require 'connection.php';



  if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM  `validation` WHERE email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
      if($password == $row['password']){
        $_SESSION["login"] = true;
        $_SESSION["email"] = $row["email"];
        if($email=='admin@gmail.com'||$password=='admin'){
            header('location:dashboard.php');

        }else{

            header("Location: vehiclesPage.php");
        }
      }
      else{
        echo
        "<script> alert('Wrong Password'); </script>";  
      }
    }
    else{
      echo
      "<script> alert('User Not Registered'); </script>";
    }
  }
  
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container ">
            <div class="row">
                <div class="col-lg-7 my-3">
                    <form action="" class="" method="POST" enctype="">
                        <h1 class="login text-center">Login here</h1>
                        <div class="form-row my-3">
                            <div class="col-lg-11   ">
                                <input type="email" placeholder="email address here" class="form-control" name="email"
                                    id="email" required>
                            </div>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-lg-11">
                                <input type="password" placeholder="pasword here" class="form-control" name="password"
                                    id="password" required>
                            </div>
                        </div>
                        <div class="form-row my-3 ">
                            <div class="col-lg-11 text-center ">
                                <button type="btn" class="btn1" name="submit">log in</button>

                            </div>
                        </div>
                        <div class="form-row text-center">
                            <a href="signup.php">Create an account?</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>