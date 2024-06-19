<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>MandiWala.Com</title>
    <link rel="icon" href="images/android-chrome-512x512.png">
    <link rel="stylesheet" href="css/style.css" />
    <link href="css/bootstrap.css" rel="stylesheet" />

    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <style>
        @media (min-width: 1205px) {
            .h-custom {
                width: 100%;
                height: 100% !important;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .gradient-custom-2 {
            width: 100%;
            background: rgb(189, 61, 242);
            background: linear-gradient(90deg, rgba(189, 61, 242, 1) 7%, rgba(5, 169, 221, 1) 47%, rgba(241, 148, 107, 1) 100%);
        }



        @media (min-width: 992px) {
            .card-registration-2 .bg-indigo {
                border-top-right-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-indigo {
                border-bottom-left-radius: 15px;
                border-bottom-right-radius: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">


        <!-- navbar ends--->
        <div class=" row  fixed-top sticky-top mb-2 mb-5" style="max-height: 60px; margin-bottom: 100px;">
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
                                <a class="nav-link active" aria-current="page" href="adminindex.php"  style="font-size: 30px;">ADMIN DASHBOARD</a>
                            </li>


                            <li class="nav-item mt-2" style="margin-left: 585px; font-size: 20px; margin-left: 300px;">
                                <a class="nav-link" href="ad signedin.php"> <i class="fa-solid fa-cart-arrow-down mx-1"></i>Signed In</a>
                            </li>
                          <!--  <li class="nav-item mt-2" style="margin-left: 35px; font-size: 20px;">
                                <a class="nav-link" href="ad loggedin.php"> <i class="fa-solid fa-cart-arrow-down mx-1"></i>Logged In</a>
                            </li> -->
                            <li class="nav-item mt-2" style="margin-left: 35px; font-size: 20px;">
                                <a class="nav-link" href="ad enquired.php"> <i class="fa-solid fa-cart-arrow-down mx-1"></i>Enquired</a>
                            </li>
                            <li class="nav-item mt-2" style="margin-left: 35px; font-size: 20px;">
                                <a class="nav-link" href="ad addeditems.php"> <i class="fa-solid fa-cart-arrow-down mx-1"></i>Items Added</a>
                            </li>
                            <li class="nav-item mt-2" style="margin-left: 35px; font-size: 20px;">
                                <a class="nav-link" href="../mandiwala buyer using php/adminindex.php"> <i class="fa-solid fa-cart-arrow-down mx-1"></i>Buyer admin</a>
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











    </div>
</body>

</html>