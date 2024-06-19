<!--linking db-->
<?php
// Create connection
$conn = new mysqli('localhost', 'root', '', 'mandiwala');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!--linking db complete-->


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MandiWala.Com</title>
    <link rel="icon" href="images/android-chrome-512x512.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="js/pace.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<style>
    .progress-container {
    width: 100%;
    height: 8px;
    background: #ccc;
}
.progress-bar {
    height: 8px;
    background: grey;
    width: 0%;
}
</style>

<body style="width: 100%;">



    <div class="container-fluid" >


        <!--header starts-->
        <?php include('template/header.php'); ?>
        <!-- header ends-->


        



        <!--corousel starts-->
        <?php include('template/corusel.php'); ?>
        <!--corousel ends-->




       

        <?php include('template/content.php');?>
        
        

        <?php include('template/farminginfo.php');?>

        <?php include('template/helpdesk.php');?>

        <!--footer starts-->

        <?php include('template/footer.php'); ?>

        <!--footer ends-->
        

    </div>
</body>

</html>