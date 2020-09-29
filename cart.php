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
                    Welcome Guest
                </a>

                <a href="#">Shopping Cart Total Price: INR 100, Total Items 2</a>
            </div>
            <div class="col-md-6">
                <ul class="menu">
                    <li>
                    <a href="customer_registration.php"> Register </a>
                    </li>

                    <li>
                    <a href="checkout.php"> My Account </a>
                    </li>

                    <li>
                    <a href="cart.php"> Goto Cart </a>
                    </li>

                    <li>
                    <a href="login.php"> Login </a>
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
                            <a href="index.php">Home</a>
                        </li>
                        
                        <li>
                            <a href="shop.php">Shop</a>
                        </li>

                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>

                        <li class="active">
                            <a href="cart.php">Shoping Cart</a>
                        </li>

                        <li>
                            <a href="about.php">About Us</a>
                        </li>

                        <li>
                            <a href="services.php">Services</a>
                        </li>

                        <li>
                            <a href="contactus.php">Contact Us</a>
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
                        Cart
                    </li>
                </ul>
            </div>
            <div class="col-md-9" id="cart">
                <div class="box">
                    <form action="cart.php" method="post" enctype="multipart-form-data">
                        <h1>Shopping Cart</h1>
                        <p class="text-muted"> Currently you have 3 item(s) in your cart </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Size</th>
                                        <th colspan="2">Delete</th>
                                        <th colspan="2">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="admin_area/product_images/product.jpg"></td>
                                        <td>Tomato hit sessional Great color with no formalin</td>
                                        <td>2</td>
                                        <td>Taka 200</td>
                                        <td>Medium</td>
                                        <td><input type="checkbox" name="remove[]"></td>
                                        <td>Taka 400</td>
                                    </tr>

                                    <tr>
                                        <td><img src="admin_area/product_images/product.jpg"></td>
                                        <td>Tomato hit sessional Great color with no formalin</td>
                                        <td>2</td>
                                        <td>Taka 100</td>
                                        <td>Medium</td>
                                        <td><input type="checkbox" name="remove[]"></td>
                                        <td>Taka 200</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th colspan="2">Taka 390</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="box-footer">
                            <div class="pull-left">
                                <a href="index.php" class="btn btn-default">
                                    <i class="fa fa-chevron-left"></i>Continue Shopping
                                </a>
                            </div>

                            <div class="pull-right">
                                <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                <i class="fa fa-refresh">Update Cart</i>
                                </button>

                                <a href="checkout.php" class="btn btn-primary">
                                    Procced to checkout <i class="fa fa-chevron-right"></i>
                                </a>
                                    
                                
                            </div>
                        </div>
                    </form>
                </div>

                <div id="row same-height-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="box same-height headline">
                            <h3 class="text-center">You are also Like These Products</h3>
                        </div>
                    </div>
                    <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Tomato hit sessional Great color with no formalin
                            </a></h3>
                            <p class="price"> 200 Taka </p>
                            </div>
                        </div>
                    </div>

                    <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Tomato hit sessional Great color with no formalin
                            </a></h3>
                            <p class="price"> 200 Taka </p>
                            </div>
                        </div>
                    </div>

                    <div class="center-responsive col-md-3">
                        <div class="product same-height">
                            <a href="">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive">
                            </a>
                            <div class="text">
                                <h3><a href="details.php">Tomato hit sessional Great color with no formalin
                            </a></h3>
                            <p class="price"> 200 Taka </p>
                            </div>
                        </div>
                    </div>

                    
                </div>

            </div>

            <div class="col-md-3">
                <div class="box" id="order-summary">
                    <div class="box-header">
                        <h3>Order Summary</h3>
                    </div>
                    <p class="text-muted">
                        Shipping and additional costs are calculated based on the values you have entered
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Order Subtotal</td>
                                    <td>Taka 120</td>
                                </tr>
                                <tr>
                                    <td>Shipping and Handling</td>
                                    <td>Taka 20</td>
                                </tr>
                                <tr>
                                    <td>Tax</td>
                                    <td>Taka 0</td>
                                </tr>

                                <tr class="total">
                                    <td>Total</td>
                                    <td>Taka 140</td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
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