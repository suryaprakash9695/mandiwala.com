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
    <link href="css/bootstrap.css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/pace.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        
        html,


        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .wrapper {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .image {
            width: 100%;
            position: relative;
        }

        img {
            width: 100%;
            display: block;
            margin: auto;
        }

        .content {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: absolute;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            opacity: 0;
            transition: 0.6s;

        }

        .content:hover {
            opacity: 1;
        }

        .content h1 {
            font-size: 55px;
            color: wheat;
            margin-bottom: 15px;
        }

        #container {


            margin: 5px;
            transform: translateX(0px);
            transition: 1.1s all;

        }

        #container:hover {
            box-shadow: 6px 6px 40px 10px #5F4B8BFF;
        }
    
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


</head>

<body>
    <div class="container-fluid">


        <!--header starts-->

        <?php include('template/header.php'); ?>

        <!-- header ends-->



        <div class="row mt-2">
            <div class="col-sm-12" style="min-height:600px; background-color: white;">
                <div class="wrapper">
                    <div class="image">
                        <img src="images/about.png">
                        <div class="content">
                            <h1>Know More About Us</h1>

                        </div>
                    </div>

                </div>
            </div>
            <h1 style="text-align: center;font-size: 60px ">About Us</h1>

            <div class="col-sm-3" style="height:460px; margin-top: 30px; border-radius: 10px; margin-left: 180px;" id="container">
                <img src="images/about9.jpg" style="border-radius: 10px;">
            </div>
            <div class="col-sm-7" style="height: 500px;font-size: 20px;">
                <hr style="width: 550px; margin-left: 100px; ">
                <p style="margin-left: 100px;  text-align: justify;">Mandiwala.com is a platform that aims to integrate farmers and merchants, making it easy for farmers to store their produce and interact with merchants. The platform is built on the principle of farmer-merchant integration, which means that farmers and merchants can interact with each other seamlessly. Farmers can store their produce on the platform, and merchants can easily access it and make purchases. This eliminates the need for intermediaries, which often leads to higher costs and lower profits for farmers.</p>


                <p style="margin-left: 100px; text-align: justify;">
                    The platform has a user-friendly interface that allows farmers to upload information about their produce, including the type, quantity, and price. Merchants can then browse through the available produce and make purchases directly from the farmers. The platform also provides real-time updates on the availability of produce, making it easy for merchants to plan their purchases.</p>
                <h4 style="margin-left: 100px; margin-top: 40px;">If you have an emergency and need us tonight:</h4>
                <button type="submit" class="btn btn-success" style="margin-left: 100px; margin-top: 10px; background-color: blue; height: 60px;"><a href="contactus.php" style="text-decoration: none; color: white">Click to Enquiry</a></button>
            </div>


            <div class="col-sm-8" style="height: 500px; margin-top: 50px; font-size: 20px;">

                <hr style="width: 700px; margin-left: 180px;margin-top: 40px; ">
                <p style="margin-left: 180px; margin-right: 80px; text-align: justify;">MandiWala.com also encourages farmers to adopt sustainable farming practices, which not only benefits the environment but also improves the quality of the produce. This, in turn, leads to higher profits for farmers and better quality products for consumers.</p>


                <p style="margin-left: 180px; margin-right: 80px; text-align: justify;">
                    Overall, MandiWala.com is a platform that is revolutionizing the agriculture industry by promoting farmer-merchant integration and sustainability. It is making it easy for farmers to store their produce and interact with merchants, thereby improving their livelihoods.</p>


                <button type="submit" class="btn btn-success" style="margin-left: 180px; margin-top: 30px; background-color: blue; height: 60px;"><a href="registrationforfarmer.jsp" style="text-decoration: none; color: white">Resister Yourself</a></button>
            </div>
            <div class="col-sm-3" style=" margin-top: 50px; height: 460px; border-radius: 10px;" id="container">
                <img src="images/about21.jpg" style="border-radius: 10px;">
            </div>

        </div>



        <!--footer starts-->

        <?php include('template/footer.php'); ?>

        <!--footer ends-->


    </div>
</body>

</html>