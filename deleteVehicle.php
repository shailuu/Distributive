<?php
include "connection.php";

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from `vehicleinfo` where vehicleSN=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo  "<Script> alert('You have deleted successfully.')</Script>";
        header("location:dashboard.php");
    }else{
        die(mysqli_error($conn));
    }
}

?>