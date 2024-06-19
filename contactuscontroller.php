<?php


$name=$_POST['name'];
$contactno=$_POST['contactno'];
$email=$_POST['email'];
$message=$_POST['message'];




// Create connection
$conn = new mysqli('localhost', 'root', '', 'mandiwala');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $sql=$conn->prepare("insert into contactus (name,contactno,email,message) values(?,?,?,?)");
    $sql->bind_param("siss",$name,$contactno,$email,$message);
    $sql->execute();
    echo "Enquiry Successful";
    
    $sql->close();
    $conn->close();
    header("Location:index.php ");
     die();
}
?>