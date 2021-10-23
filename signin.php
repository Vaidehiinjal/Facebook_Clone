<?php
$con = mysqli_connect('localhost', 'root', '','facebookcolne');

$phoneoremail = $_Post['phoneoremail'];
$password = $_Post['password'];

$check_data = mysqli_query($con, "SELECT * FORM userdata WHERE phoneoremail = '$phoneoremail'and password 
='$password'" );
$check = mysqli_num_rows($check_data);

if($check > 0){
    echo "Login Succesful.";
}
 else{
        echo "Login Failed";
    }
?>