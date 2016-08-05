<?php
$email = $_POST['email'];
$password = $_POST['password'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$con = mysqli_connect("1.1.1.1","db_usr","db_pass","db_data");

$salt = 'random';
$hashed_value = md5($salt.$password);

if(empty($email) || empty($password) || (filter_var($email, FILTER_VALIDATE_EMAIL) === false))
{
    echo("You didn't enter valid input.");
}
else
{
    $sqlU = "INSERT INTO wme_users (email, password) VALUES ('$email', '$hashed_value')";
    if (!mysqli_query($con, $sqlU)) {
        die('Error: ' . mysqli_error($con));
    }        
    
    mysqli_close($con);
    header("Location: ../../result.php");
    exit();
}




?>