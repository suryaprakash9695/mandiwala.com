<?php

$pname=$_POST['pname'];
$pdes=$_POST['pdes'];
$pquantity=$_POST['pquantity'];
$price=$_POST['price'];
$image=$_POST['image'];
$pincode=$_POST['pincode'];
$vill=$_POST['vill'];
$city=$_POST['city'];
$district=$_POST['district'];
$state=$_POST['state'];
$phoneno=$_POST['phoneno'];
$email=$_POST['email'];


// Create connection
$conn = new mysqli('localhost', 'root', '', 'mandiwala');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $sql=$conn->prepare("insert into fitems (pname,pdes,pquantity,price,image,pincode,vill,city,district,state,phoneno,email) values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $sql->bind_param("ssiisissssis", $pname,$pdes,$pquantity,$price,$image,$pincode,$vill,$city,$district,$state,$phoneno,$email);
    $sql->execute();
    echo "Upload Successfully";
    
    
    $sql->close();
    $conn->close();
    header("Location:farmerindex.php ");
     die();
}
?>