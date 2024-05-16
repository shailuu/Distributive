<?php
include 'connection.php';

  if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM `validation` WHERE email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        // print_r($email);
      echo "<script> alert('Email Has Already Taken'); </script>";
    }
    else{
      if($password == $confirmpassword){
        $sql="INSERT INTO `validation` (`email`, `password`) VALUES ('$email', '$password')";
        $result=mysqli_query($conn,$sql);

        // mysqli_query($conn, $query);
        echo "<script> alert('Registration Successful'); </script>";
        header('location:login.php');
      }
      else{
        echo
        "<script> alert('Password Does Not Match'); </script>";
      }
    }
  }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration page</title>
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <section>
        <div class="container ">
            <div class="row">
                <div class="col-lg-7 my-3">
                    <form action="" class=" " method="POST" enctype="multipart/form-data">
                        <h1 class="login text-center">sign up</h1>
                        <div class="form-row my-3">
                            <div class="col-lg-11   ">
                                <input type="email" placeholder="email address" class="form-control" name="email"
                                    id="email" required>
                            </div>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-lg-11">
                                <input type="password" placeholder="pasword" class="form-control" name="password"
                                    id="password" required>
                            </div>
                        </div>
                        <div class="form-row my-3">
                            <div class="col-lg-11">
                                <input type="password" placeholder="confirm pasword" class="form-control"
                                    name="confirmpassword" id="confirmpassword" required>
                            </div>
                        </div>
                        <div class="form-row my-3 ">
                            <div class="col-lg-11 text-center ">
                                <button type="btn" class="btn1" name="submit" id="submit">Sign up</button>
                            </div>
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