<?php
include('session.php');
session_start();

if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $sql="select * from user";
    $result=mysqli_query($session,$sql);
    $found=FALSE;
    while($user=mysqli_fetch_array($result)){
        if($user['email']==$email && $user['password']==$password){
            $found=TRUE;
            $_SESSION['email']=$user['email'];
            $_SESSION['firstName']=$user['firstName'];
            $_SESSION['password']=$user['password'];
            
            break;
        }
    }
}
if($found==TRUE)
    header('Location:mainPage.html');
else{
    echo"<script>alert('Wrong Email or Password');
         window.location='login.html'</script>";
}
?>