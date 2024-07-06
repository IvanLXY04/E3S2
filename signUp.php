<?php
include('session.php');
if(isset($_POST['email'])){
    $firstName=$_POST["firstName"];
    $lastName=$_POST["lastName"];
    $gender=$_POST["gender"];
    $day=$_POST["day"];
    $month=$_POST["month"];
    $year=$_POST["year"];
    $email=$_POST["email"];
    $password=$_POST["password"]

    $sql="insert into user values('$email','$password','$firstName','$lastName','$gender','$day','$month','$year')";
    $result=mysqli_query($session,$sql);
    if($result)
        echo"<script>alert('Succesfully SignUp')</script>";
    else
        echo"<script>alert('SignUp Failed')</script>";
    echo"<script>window.location='login.php'</script>";
}
?>