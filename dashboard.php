<?php

session_start();

include "connection.php";


    if(!isset($_SESSION['email'])){
        header('location:login.php');
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="dashboard1.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css"
        integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
    <title>Dashboard | Admin Panel</title>

    <style>
    .add-vehicle {
        padding-left: 30px;

    }
    </style>
</head>

<body>

    <!-- header navbar  -->
    <nav class="navbar navbar-top navbar-expand-lg navbar-dark bg-dark">

        <div class="container-fluid">
            <section class="menu-toggle-btn">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>

            </section>
            <a class="navbar-brand fw-bold" href="#">Maa Annapurna Recondition Center</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="vehiclesPage.php" target="blank">Item
                            check</a>
                    </li>
                </ul>
                <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Vehicle page</a>
                    </li>

                </ul> -->
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <i class="bi bi-search"></i>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <!-- sidebar-nav  -->
    <!-- <nav class="navbar navbar-sidebar navbar-expand d-flex flex-column align-item-start " id="sidebar">
        <ul class="navbar-nav d-flex flex-column mt-5 w-100">
            <h5 class="">Dashboard</h5>
            <li class="nav-item w-100">
                <a href="" class="nav-link text-light ">Home</a>
                <a href="" class="nav-link text-light ">Vehicle</a>
                <a href="" class="nav-link text-light ">Customer's</a>
                <a href="" class="nav-link text-light ">Enquery</a>
            </li>
        </ul>
    </nav> -->

    <section class="vehicle-info">

        <!-- product add button  -->
        <div class="add-vehicle">

            <button class="btn btn-primary my-4 ">
                <a href="addVehicle.php" class="text-light"> <span style="text-decoration: none;">Add Vehicle</span>
                </a></button>
        </div>


        <!-- table  -->
        <table class="table ">
            <thead>
                <tr class="">
                    <th scope="col">S.No</th>
                    <th scope="col">Company</th>
                    <th scope="col" class=" col-sm-1">Name</th>
                    <th scope="col" class=" ">Model</th>
                    <th scope="col" class=" ">Number</th>
                    <th scope="col" class=" ">Price</th>
                    <th scope="col" class=" col-sm-1">Ownership Transferred</th>
                    <th scope="col" class="col-sm-1">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col" class="">Operations
                    <th>
                </tr>
            </thead>
            <tbody>
                <?php
            $sql="SELECT *FROM `vehicleinfo`";
            $result=mysqli_query($conn,$sql);
            if($result){
                $sn=1;
                while($row=mysqli_fetch_assoc($result)){
                    echo '<tr>
                    <td>'.$sn.'</td>
                    <td>'.$row["company"].'</td>
                    <td>'.$row["bikename"].'</td>
                    <td>'.$row["model"].'</td>
                    <td>'.$row["bike_number"].'</td>
                    <td>'.$row["price"].'</td>
                    <td>'.$row["owner_no"].'</td>
                    <td>'.$row["images"].'</td>
                    <td>'.$row["descriptions"].'</td>
                    <td>
                    <button class="btn btn-primary"><a href="updateVehicle.php?updateid='.$row["vehicleSN"].'" class="text-light"> <span style="text-decoration: none;">Update</span> </a></button>
                    <button class="btn btn-danger"><a href="deleteVehicle.php?deleteid='.$row["vehicleSN"].'" class="text-light"> <span style="text-decoration: none;">Delete</span> </a></button>
                    </td>       
                    </tr>';
                    $sn++;               
                }          
            }      
            ?>
            </tbody>
        </table>

    </section>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ajax-bootstrap-select/1.4.5/js/ajax-bootstrap-select.min.js">
</script>

</script>

</html>