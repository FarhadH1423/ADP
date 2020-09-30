<?php
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
                        
                        <li class="active">
                            <a href="shop.php">Shop</a>
                        </li>

                        <li>
                            <a href="checkout.php">My Account</a>
                        </li>

                        <li>
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
                        Shop
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <?php
                    include("includes/sidebar.php");
                ?>
            </div>
            
            <div class="col-md-9">
                <div class="row" id="productmain">
                    <div class="col-sm-6">
                        <div id="mainimage">
                            <div id="mycarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#mycarousel" data-slide-to="1" ></li>
                                    <li data-target="#mycarousel" data-slide-to="2" ></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <center>
                                            <img src="admin_area/product_images/product.jpg" class="img-responsive">
                                        </center>
                                    </div>

                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/product2.jpg" class="img-responsive">
                                        </center>
                                    </div>

                                    <div class="item">
                                        <center>
                                            <img src="admin_area/product_images/product3.jpg" class="img-responsive">
                                        </center>
                                    </div>
                                </div>

                                <a href="#mycarousel" class="left carousel-control" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>

                                <a href="#mycarousel" class="right carousel-control" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box">
                            <h1 class="text-center">
                                Tomato hit sessional Great color with no formalin
                            </h1>
                            <form action="details.php" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Product Quality</label>
                                    <div class="col-md-7">
                                        <select name="product_qty" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-5 control-label">Product Size</label>
                                    <div class="col-md-7">
                                        <select name="product_size" class="form-control">
                                            <option>Select a size</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>
                                </div>
                                <p class="price">200 Taka</p>
                                <p class="text-center buttons">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-shopping-cart"></i>Add to cart
                                    </button>
                                </p>
                            </form>
                        </div>
                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="col-xs-4">
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/product.jpg" class="img-responsive">
                            </a>
                        </div>

                    </div>
                </div>
                <div class="box" id="details">
                    <h4>Product Details</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h4>Size</h4>
                    <ul>
                        <li>Small</li>
                        <li>Medium</li>
                        <li>Large</li>
                    </ul>
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


            </div>
    </div>

    

<!--Footer-->
<?php
    include("includes/footer.php");
    ?>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>