<?php
session_start();

include 'connection.php';

if(!isset($_SESSION['email'])){
    header('location:login.php');
}



if(isset($_GET['updateid'])){
    $id=$_GET['updateid'];
    $sql="SELECT *FROM `vehicleinfo` where vehicleSN=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $img=$row['images'];
    // printf($img);
}


if(isset($_POST['update'])){

    $company=$_POST['company'];
    $name=$_POST['name'];
    $model=$_POST['model'];
    $price=$_POST['price'];
    $number=$_POST['number'];
    $owner_no=$_POST['owner_no'];
    $image=$_FILES['image'];
    $description=$_POST['description'];

    $imagename=$image['name'];
    $imageerror=$image['error'];
    $imagetmp=$image['tmp_name'];
    $imageext=explode('.',$imagename);
    $imagecheck=strtolower(end($imageext));
    $imageextstored=array('png','jpeg','jpg');
    if(in_array($imagecheck,$imageextstored)){
        $destinationimage='img/'.$imagename;
        move_uploaded_file($imagetmp,$destinationimage);
    }


    $sql="UPDATE `vehicleinfo` SET company='$company',bikename='$name',model='$model',bike_number='$number',price='$price',no_of_owner='$owner_no',images='$destinationimage', descriptions='$description' WHERE id='$id'" ;
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Data Inserted Succesfully.');</script>";
        header('location:dashboard.php');
    }else{
        echo "<script>alert('Error.');</script>";
}
}
if(isset($_POST['cancel'])){
    header('location:dashboard.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MARC updating page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
    .container {
        padding-left: 20%;

    }
    </style>
</head>

<body>
    <div class="container  my-4 ">
        <form class="col-sm-8 g my-5" method="POST" enctype="multipart/form-data">
            <h1 class="text-center">Updating Vehicle Information</h1>

            <div class="mb-3">
                <label for="exampleInputCompany" class="form-label">Company Name</label>
                <input type="text" class="form-control" id="exampleInputCompany"  name="company" autocomplete="off" value="<?php  echo $row['company'] ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputBikenName" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputBikenName" name="name" autocomplete="off" value="<?php  echo $row['bikename']; ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputBikenModel" class="form-label">Model</label>
                <input type="date" class="form-control" id="exampleInputBikenModel" name="model" autocomplete="off"  value="<?php  echo $row['model']; ?>">

            </div> 
            <div class="mb-3">
                <label for="exampleInputBikenNumber" class="form-label">Number</label>
                <input type="text" class="form-control" id="exampleInputBikenNumber" name='number' id='number' autocomplete="off" value="<?php  echo $row['bike_number']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputBikeprince" class="form-label">Price</label>
                <input type="text" class="form-control" id="exampleInputBikenprince" name="price" autocomplete="off" value="<?php  echo $row['price']; ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputBikenOwnerNo" class="form-label">No. of Ownership Transfer</label>
                <input type="text" class="form-control" id="exampleInputBikenOwnerNo" name="owner_no" autocomplete="off"  value="<?php  echo $row['owner_no']; ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputBikenImage" class="form-label">Image </label>
                <input type="file" class="form-control" id="exampleInputBikenImage" name="image"   value="<?php  echo $row['images']; ?>">

            </div>
            <div class="mb-3">
                <label for="exampleInputBikenDescription" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputBikenOwnerNo" name='description' id='owner_id' autocomplete="off"  value="<?php  echo $row['descriptions']; ?>" 
                    required>

            </div>

            <button type="submit" class="btn btn-primary col-sm-2 " name="update">Update</button>
            <button type="submit" class="btn btn-primary col-sm-2 " name="cancel">Cancel</button>

            <!-- <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
        </div> -->

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html