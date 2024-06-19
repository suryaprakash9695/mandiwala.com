<?php

$username=$_POST['username'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$contactno=$_POST['contactno'];
$pincode=$_POST['pincode'];
$address=$_POST['address'];


// Create connection
$conn = new mysqli('localhost', 'root', '', 'mandiwala');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $sql=$conn->prepare("insert into signup (username,name,gender,email,password,contactno,pincode,address) values(?,?,?,?,?,?,?,?)");
    
    $sql->bind_param("sssssiis",$username,$name,$gender,$email,$password,$contactno,$pincode,$address);
    $sql->execute();
    echo "SignUp Successful";
    
    $sql->close();
    $conn->close();
    header("Location:index.php ");
     die();
}
?>