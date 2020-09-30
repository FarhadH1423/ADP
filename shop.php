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
               
            <?php
                if(!isset($_GET['p_cat'])){
                    if(!isset($_GET['cat_id'])){
                        echo"<div class='box'>
                        <h1>Shop</h1>
                        <p>If you face any problem in our site please contact with us!</p>
                        </div>";
                    }
                }
            ?>


                <div class=row>
                <?php
                    if(!isset($_GET['p_cat'])){
                        if(!isset($_GET['cat_id'])){
                            $per_page=6;
                            if(isset($_GET['page'])){
                                $page=$_GET['page'];
                            }else{
                                $page=1;
                            }
                            $start_from=($page-1) * $per_page;
                            $get_product="select * from products order by 1 DESC LIMIT $start_from, $per_page";
                            $run_pro=mysqli_query($con, $get_product);
                            while($row=mysqli_fetch_array($run_pro)){
                                $pro_id=$row['product_id'];
                                 $pro_title=$row['product_title'];
                                $pro_price=$row['product_price'];
                                $pro_img1=$row['product_img1'];

                                echo "
                                <div class='col-md-4 col-sm-8 center-responsive'>
                                <div class='product'>
                                <a href='details.php?pro_id=$pro_id'>
                                <img src='admin_area/product_images/$pro_img1'
                                class='img-responsive'>
                                </a>
                                <div class='text'>
                                    <h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
                                    <p class='price'> Taka $pro_price </p>
                                    <p class='buttons'>
                                    <a href='details.php?pro_id=$pro_id' class='btn btn-primary'>
                                    <i class='fa fa-shopping-cart'></i>Add to Cart
                                    </a>
                                    </p>
                                </div>

                                </div>
                                </div>
                                
                                ";
                            }
                        }
                    }
                ?>
                </div>
                <center>
                    <ul class="pagination">
                        <?php
                            $per_page=6;
                            $query="select * from products";
                            $result=mysqli_query($con,$query);
                            $total_record=mysqli_num_rows($result);
                            $total_pages=ceil($total_record / $per_page);

                            echo "
                            <li><a href='shop.php?page=1'> ".'First Page'."</a></li>
                            ";

                            for($i=1; $i<=$total_pages; $i++){
                                echo"
                                <li><a href='shop.php?page=".$i."'>".$i."</a></li> 
                                
                                ";
                            };

                            echo"
                            <li><a href='shop.php?page=$total_pages'>".'Last Page'."</a></li>
                            ";
                        ?>
                    </ul>
                </center>
                
                            <?php
                                getPcatPro();
                                getCatPro();
                            ?>
               
                
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