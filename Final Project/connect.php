<?php
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$select-where = $_POST['select-where'];
// $sign up = $_POST['sign up'];

// CONNECTION
$con = new mysqli('localhost','root','Omnifoot');
if ($con->connect_error) {
    die('Connection failed'.$connect_error);
}else {
    $stmt = $con->prepare("insert into food(fullName,email,select-where) values(?,?,?) ");
    $stmt->bind_param("sss",$fullName,$email,$select-where);
    $stmt->execute();
    echo"Registration Successful";
    $stmt->close();
    $con->close();
}
?>