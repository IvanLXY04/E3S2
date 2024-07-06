<?php
include('session.php');

$userId=$_SESSION['userId'];
$serviceId=$serviceId+1;
if(isset($_SESSION['serviceId'])){
    $category=$_POST["category"];
    $subCategory=$_POST["subcategory"];
    $price=$_POST["price"];
    $datePublished=$_POST["datePublished"];
    $status=$_POST["status"];
    $otherDetails=$_POST["otherDetails"];
    $portfolio=$_FILES["portfolio"]["name"];

    $sql="insert into service(category,subCategory,price,datePublished,status,otherDetails,portfolio) 
    values('$serviceId','$category','$subCategory','$price','$datePublished','$status','$otherDetails','$portfolio','$userId')";
    $result=mysqli_query($session,$sql);
    if($result)
        echo"<script>alert('Succesfully')</script>";
    else
        echo"<script>alert('Failed')</script>";
    echo"<script>window.location='serviceProvided.html'</script>";
}
?>