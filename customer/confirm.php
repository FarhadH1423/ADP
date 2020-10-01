<?php
session_start();
include("includes/db.php");
include("functions/functions.php");
?>

<!DOCTYPE html>
<html>
<head>  
    <title>ADP</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <!-- Top Bar start -->
    <div id="top"> 
        <div class="container">
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">
                <?php
                        if(!isset($_SESSION['customer_email'])){
                            echo"Welcome Guest";
                        }
                        else{
                            echo"Welcome: ".$_SESSION['customer_email']."";
                        }
                    ?>
                </a>

                <a href="#">Shopping Cart Total Price: INR 100, Total Items 2</a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                    <a href="../customer_registration.php"> Register </a>
                    </li>

                    <li>
                    <a href="my_account.php"> My Account </a>
                    </li>

                    <li>
                    <a href="../cart.php"> Goto Cart </a>
                    </li>

                    <li>
                    <a href="../login.php"> Login </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Top Bar end -->
    <div class="navbar navbar-default"> 
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand home" href="index.php">
                    <img src="images/logo.png" alt="logo" class="hidden-xs">
                    <img src="images/logo-small.jpg" alt="logo" class="visible-xs">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only"></span>
                    <i  class="fa fa-align-justify"></i>
                </button>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                    <span class="sr-only"></span>
                    <i  class="fa fa-search"></i>
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav">
                    <ul class="nav navbar-nav navbar-left">
                        <li >
                            <a href="../index.php">Home</a>
                        </li>
                        
                        <li>
                            <a href="../shop.php">Shop</a>
                        </li>

                        <li  class="active">
                            <a href="my_account.php">My Account</a>
                        </li>

                        <li>
                            <a href="../cart.php">Shoping Cart</a>
                        </li>

                        <li>
                            <a href="about.php">About Us</a>
                        </li>

                        <li>
                            <a href="../services.php">Services</a>
                        </li>

                        <li>
                            <a href="../contactus.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
                    <a href="cart.php" class="btn btn-primary navbar-btn right">
                        <i class="fa fa-shopping-cart"></i>
                        <span>4 items In Cart</span>
                    </a>


                    <div class="navbar-collapse collapse right">
                        <button class="btn  navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                        </button>
                    
                    </div>
                <div class="collapse clearfix" id="search">
                    <form action="result.php" class="navbar-form" method="get">
                        <div class="input-group">
                            <input type="text" name="user_query" placeholder="search" class="form-control" required="">
                            <span class="input-group-btn">
                            <button type="submit" value="Search" name="search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                            </span> 
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="container">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>
                        My Account
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <?php
                    include("includes/sidebar.php");
                ?>
            </div>
            
            <div class="col-md-9">
                <div class="box">
                    <h1 align=center>Please confirm your payment</h1>
                    <form action="confirm.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>invoice number</label>
                        <input type="text" class="form-control" name="invoice_number" required="">

                    </div>

                    <div class="form-group">
                        <label>Transaction Number</label>
                        <input type="text" class="form-control" name="trfr_number" required="">

                    </div>

                    <div class="form-group">
                        <label>Select Payment Mode</label>
                        <select name="payment_mode" class="form-control">
                            <option>Bank Transfaer</option>
                            <option>Bkash</option>
                            <option>Nagad</option>
                            <option>Rocket</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Payment Date</label>
                        <input type="date" class="form-control" name="date" required="">

                    </div>

                    <div class="text-center">
                        <button type="submit" name="confirm_payment" class="btn btn-primary btn-lg">Confirm Payment</button>
                    </div>
                </form>
                </div>

            </div>
            

            </div>
    </div>

    

<!--Footer-->
<?php
    include("includes/footer.php");
?>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>