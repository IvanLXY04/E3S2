<?php
include('session.php')

$userId=$_SESSION['userId'];
$sql="select * from user where userId='".$userId."'";
$result=mysqli_query($session,$sql);
while($user=mysqli_fetch_array($result)){
    echo'
    <div>
        <img src="'.$user["profilePic"].'">
    </div>

    <div>
        <p>'.$user["email"].'</p>
    </div>

    <div>
        <p>'.$user["PhoneNum"].'</p>
    </div>

    <div>
        <div>
            <p>'.$user["firstName"].'</p>
        </div>
        <div>
            <p>'.$user["lastName"].'</p>
        </div>
    </div>

    <div>
        <p>'.$user["gender"].'</p>
    </div>

    <div>
        <p>'.$user["dob"].'</p>
    </div>

    <div>
        <p>'.$user["highestEducation"].'</p>
    </div>

    <div>
        <div>
            <p>'.$user["city"].'</p>
        </div>

        <div>
            <p>'.$user["postcode"].'</p>
        </div>
    </div>
    ';
}
?>