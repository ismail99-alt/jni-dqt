<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// connection
$conn = new mysqli("localhost","root","root","jni-dqt");

// Check connection
if ($conn -> connect_error) {
  die('connection failed :' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into contact_tbl(name, email, subject, message)
    values(?,?,?,?)");
    $stmt -> bind_param("ssss", $name, $email, $subject, $message);
    $stmt -> execute();
  echo "Registration Successfull.....";
    $stmt -> close();
    $conn -> close();
}

?>
