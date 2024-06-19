<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MandiWala.Com</title>
    <link rel="icon" href="images/android-chrome-512x512.png">
    <link rel="stylesheet" href="css/style.css" />
    <link href="css/bootstrap.css" rel="stylesheet" />

    <script src="js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        body {
            margin-top: 20px;
            color: #1a202c;
            text-align: left;
            background-color: #e2e8f0;
        }

        .main-body {
            padding: 15px;
        }

        .card {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1rem;
        }

        .gutters-sm {
            margin-right: -8px;
            margin-left: -8px;
        }

        .gutters-sm>.col,
        .gutters-sm>[class*=col-] {
            padding-right: 8px;
            padding-left: 8px;
        }

        .mb-3,
        .my-3 {
            margin-bottom: 1rem !important;
        }

        .bg-gray-300 {
            background-color: #e2e8f0;
        }

        .h-100 {
            height: 100% !important;
        }

        .shadow-none {
            box-shadow: none !important;
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <!-- navbar ends--->
        <div class=" row  fixed-top sticky-top" style="max-height: 60px; margin-bottom: 50px;">
            <nav class="navbar navbar-expand-lg bg-body-tertiary " style="background: rgb(189,61,242);
        background: linear-gradient(90deg, rgba(189,61,242,1) 7%, rgba(5,169,221,1) 47%, rgba(241,148,107,1) 100%);">
                <div class="container-fluid" style="width: 100%; ">


                    <img src="images/MandiWala.com.png " style="height: 60px; width: 60px;border-radius: 50%;margin-left: 15px; " />
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto  mb-lg-0">


                            <li class="nav-item" style="margin-left: 20px;">
                                <a class="nav-link active" aria-current="page" href="#" style="font-size: 30px;">MandiWala.Com</a>
                            </li>
                            <div id="whitespace" style="height: 70px; width: 10px; background-color: white; border-radius: 40%; margin-left: 25px;"></div>
                            <li class="nav-item" style="margin-left: 20px;">
                                <a class="nav-link active" aria-current="page" href="#" style="font-size: 30px;">FARMER DASHBOARD</a>
                            </li>
                            <li class="nav-item mt-2" style="margin-left: 35px; font-size: 20px; margin-left: 500px;">
                                <a class="nav-link" href=""> <i class="fa-solid fa-cart-arrow-down mx-1"></i>Added Items</a>
                            </li>

                            <li class="nav-item mt-2" style="margin-left: 35px; font-size: 20px;">
                                <a class="nav-link" href="farmerindex.php"> <i class="fa-solid fa-cart-arrow-down mx-1"></i>Add Items To Sell</a>
                            </li>
                            

                            <li class="nav-item mt-2" style="margin-left: 35px; font-size: 20px;">
                                <a class="nav-link" href="index.php"><i class="fa-solid fa-right-from-bracket mx-1"></i>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="progress-container">
                <div class="progress-bar" id="proBar"></div>
            </div>
        </div>
        <!-- navbar ends--->

        <div class="row" style="background: rgb(189,61,242);
        background: linear-gradient(90deg, rgba(189,61,242,1) 7%, rgba(5,169,221,1) 47%, rgba(241,148,107,1) 100%);">
    <h1 style="margin: auto; text-align: center;">Listed Items</h1>
</div>
<div class="row mt-5" style="height: 100%; ">
    <div>
        <table style="width:100%; border-collapse: collapse; font-size: 25px;border-color: #96D4D4; border: 1px solid black;" table="table border">
            <tr style="border: 1px solid black; text-align:center;">
                <th style="border: 1px solid black;">ID</th>
                <th style="border: 1px solid black;">Name</th>
                <th style="border: 1px solid black;">Product Details</th>
                <th style="border: 1px solid black;">Product Quantity</th>
                <th style="border: 1px solid black;">Price</th>
                <th style="border: 1px solid black;">Images</th>
                <th style="border: 1px solid black;">Pincode</th>
                <th style="border: 1px solid black;">Village/Town</th>
                <th style="border: 1px solid black;">City</th>
                <th style="border: 1px solid black;">District</th>
                <th style="border: 1px solid black;">State</th>
                <th style="border: 1px solid black;">Phone Number</th>
                <th style="border: 1px solid black;">Email</th>
                <th style="border: 1px solid black;">Operations</th>
            </tr>
            <?php
            // Create connection
            $conn = new mysqli('localhost', 'root', '', 'mandiwala');

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Delete item if delete parameter is set
            if (isset($_GET['delete'])) {
                $id = $_GET['delete'];
                $deleteQuery = "DELETE FROM fitems WHERE id='$id'";
                $conn->query($deleteQuery);
            }

            $selectquery = "SELECT * FROM fitems";
            $query = mysqli_query($conn, $selectquery);
            $nums = mysqli_num_rows($query);
            while ($res = mysqli_fetch_array($query)) {
            ?>
                <tr style="border: 1px solid black; text-align: center;">
                    <td style="border: 1px solid black;"><?php echo $res['id'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['pname'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['pdes'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['pquantity'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['price'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['image'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['pincode'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['vill'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['city'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['district'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['state'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['phoneno'] ?></td>
                    <td style="border: 1px solid black;"><?php echo $res['email'] ?></td>
                    <td style="border: 1px solid black;">
                        <a href="?delete=<?php echo $res['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>

</body>

</html>