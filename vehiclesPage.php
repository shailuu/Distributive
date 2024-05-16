<?php

session_start();
include 'connection.php';

$sql="SELECT * FROM vehicleinfo";
$result=mysqli_query($conn,$sql);


if(isset($_POST['login'])){
    if(isset($_SESSION['email'])){
        echo "<script> alert('You are already siggned in') </script>";
        
    }else{
        header('location:login.php');
    }
    
}   

if(isset($_POST['signout'])){
    if(isset($_SESSION['email'])){
        session_unset();
        session_status();
        echo "<script> alert('Successfully sign out') </script>";
    }else{
        echo "<script> alert('You are not signed in') </script>";
    }
    
}

if(isset($_POST['buy'])){
    if(!isset($_SESSION['email'])){
        echo "<script> alert('Please login first'); window.location.href='login.php'; </script>";
    }else{
        header('location:a.php');
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="vehiclesPage1.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>vehicles available page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="#">
            <h1>Maa Annapurna Recondition Center</h1>
        </a>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                </li>
            </ul>
        </div>
        <div class=" col-sm-2 ">
            <form class="form-inline my-4 my-lg-1" method="POST">
                <button class="btn  my-2 my-sm-2 btn1 login col-sm-5" type="submit" name='login'>Sign in</button>
                <button class="btn  my-2 my-sm-2 btn1 signout col-sm-5" type="submit" name='signout'>Sign Out</button>
            </form>
        </div>
    </nav>

    <section class="menu" id="menu">

        <div class="box-container col-md-12 ">
            <?php
            while($vehicle=mysqli_fetch_assoc($result)):
            ?>
            <div class="box  border">
                <img src="<?=$vehicle['images']; ?>" alt="<?php echo $vehicle['company']." ".$vehicle['bikename']?>">
                <h3> <?php echo $vehicle['company']."-".$vehicle['bikename'];?></h3>
                <div class="price">Rs. <?php echo $vehicle['price'];?></div>
                <div class="price"><?php echo $vehicle['model'];?></div>
                

                <!-- using esewa api for payment  -->
                <form action="https://uat.esewa.com.np/epay/main" method="POST" name='buy'>
                    <input value="<?php echo $vehicle['price']?>" name="tAmt" type="hidden">
                    <input value="<?php echo $vehicle['price']?>" name="amt" type="hidden">
                    <input value="0" name="txAmt" type="hidden">
                    <input value="0" name="psc" type="hidden">
                    <input value="0" name="pdc" type="hidden">
                    <input value="EPAYTEST" name="scd" type="hidden">
                    <input value="<?php echo $vehicle['vehicleSN']?>" name="pid" type="hidden">
                    <input value="http://AwesomeNishanTM.com.np/MARCecommerce?q=su" type="hidden" name="su">
                    <input value="http://AwesomeNishanTM.com.np/MARCecommerce?q=fu" type="hidden" name="fu">
                    <input value="Esewa" type="submit"
                        class="button price btn2 btn  my-3 my-sm-3 col-sm-3" name="">
                </form>
                <!-- <button type="submit" class="button price btn2 btn  my-3 my-sm-3 col-sm-3" name="buy">Buy</button> -->
            </div>
            <?php endwhile;?>



        </div>

    </section>
</body>

</html>
