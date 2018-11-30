<?php
session_start();
session_destroy();
if(!isset($_SESSION['name']))
{
    // not logged in
    include_once("login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <title>Kafaia 3ak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Kafaia 3ak a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- Default-JavaScript-File -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- //Default-JavaScript-File -->
    <link rel="stylesheet" href="css/easy-responsive-tabs.css"><!-- easy responsive tabs css -->
    <link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all"><!-- date-picker css-->
    <!-- gallery -->
    <link href="css/lsb.css" rel="stylesheet" type="text/css">
    <!-- //gallery -->
    <!-- banner text effect css files -->
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style3.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <!-- banner text effect css files -->
    <!-- logo text effect css files -->
    <link rel="stylesheet" type="text/css" href="css/demo1.css" />
    <link rel="stylesheet" type="text/css" href="css/linkstyles.css" />
    <!-- //logo text effect css files -->
    <!-- default css files -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- default css files -->
    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&amp;subset=cyrillic,latin-ext"
        rel="stylesheet">
    <!--//web font-->
    <!-- scrolling script -->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
            });
        });
    </script>
    <!-- //scrolling script -->
</head>
<!-- Body -->

<body>
    <!-- banner -->
    <div class="banner jarallax">
        <div class="agileinfo-dot">
            <div class="header">
                <div class="container-fluid">
                    <div class="header-left">
                        <div class="w3layouts-logo grid__item">
                            <h1>
                                <a class="link link--ilin" href="#"><span>Kafaia</span><span>3kk</span></a>
                            </h1>
                        </div>
                    </div>
                    <div class="top-nav">
                        <nav class="navbar navbar-default">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a class="active" href="h1.php">Home</a></li>
                                    <li><a href="#about" class="scroll">About</a></li>
                                    <li><a href="#services" class="scroll">Services</a></li>
                                    <!--<li><a href="#chefs" class="scroll">Chefs</a></li>-->
                                    <li><a href="#gallery" class="scroll">Gallery</a></li>
                                    <!--<li><a href="#customer" class="scroll">Customers</a></li>-->
                                    <li><a href="#map" class="scroll">Contact Info</a></li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>
                        </nav>
                        <div class="agileinfo-social-grids">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                <li><a href="register.php"><input type="button" name="logout_btn"value="Log out" style="color:white;background:#dd3e62;border:0px"/></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="agileits-banner-info">
                <h3>welcome to</h3>
                <h2 class="rw-sentence">
                    <span>Food tastes better, eat with your </span>
                    <div class="rw-words rw-words-1">
                        <span>Family</span>
                        <span>Friends</span>
                        <span>happiness</span>
                        <span>Love</span>
                        <span>Gratefulness</span>
                        <span>happiness</span>
                    </div>
                </h2>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- modal -->
    <div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><span style="color:red">K</span><span style="color:green">f</span><span
                            style="color:yellow">a</span><span style="color:blueviolet">i</span><span style="color:yellow">a</span>
                        <span style="color:rgb(11, 90, 238)">3</span><span style="color:darkblue">kk</span> </h4>
                    <h5>1 december 2018</h5>
                </div>
                <div class="modal-body">
                    <div class="agileits-w3layouts-info">
                        <img src="images/s1.jpg" alt="" />
                        <p>We provide the best way to eat user favourite dishes with least cost, and you can change any
                            component with your’s better.</p>
                        <marquee dir="rtl" style="color:crimson">Thank you to visit our site</marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about-->
    <div class="demo" id="about">
        <div class="container">
            <div class="w3ls-heading">
                <h3>About us</h3>
            </div>
            <div class="services-grid">
                <div class="ser-img">
                    <h3>ONLY FRESH AND HEALTHY FOOD FOR YOUR FAMILY </h3>
                    <p>
                        Our goal is to provide you with easy, quick, simple and detailed recipes, without need to look
                        for it everywhere.
                    </p>
                    <a href="#myModal" data-toggle="modal"> Read More About Our Recipes</a>
                </div>
                <div class="ser-img1">
                    <img src="images/about2.png" alt="" />
                </div>
                <div class="ser-info">
                    <img src="images/about1.png" alt="" height="350px" />
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--/about-->
    <!-- services -->
    <div class="services" id="services">
        <div class="container">
            <div class="ser-top wthree-3 wow fadeInDown w3-service-head">
                <h3>Our Services </h3>
            </div>
            <div class="w3-service-grids set-6">
                <div class="col-md-4  services-w3-grid1 ser-left icon1 hi-icon-wrap hi-icon-effect-6">
                    <i class="fa fa-cutlery hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
                    <h4>Breakfast</h4><br><br><br><br>
                </div>
                <div class="col-md-4  services-w3-grid1 ser-left icon2 hi-icon-wrap hi-icon-effect-6">
                    <i class="fa fa-spoon hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
                    <h4>Lunch</h4><br><br><br><br>
                </div>
                <div class="col-md-4 services-w3-grid1 ser-left icon3 hi-icon-wrap hi-icon-effect-6">
                    <i class="fa fa-glass hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
                    <h4>Dinner</h4><br><br><br><br>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-3 services-w3-grid2 ser-left icon4 hi-icon-wrap hi-icon-effect-6">
                    <i class="fa fa-apple hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
                    <h4>Eastern desserts</h4><br><br><br><br>
                </div>
                <div class="col-md-3 services-w3-grid2 ser-left icon5 hi-icon-wrap hi-icon-effect-6">
                    <i class="fa fa-glass hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
                    <h4>Fresh juice</h4><br><br><br><br>
                </div>
                <div class="col-md-3 services-w3-grid2 ser-left icon6 hi-icon-wrap hi-icon-effect-6" data-wow-duration=".8s"
                    data-wow-delay=".2s">
                    <i class="fa fa-leaf hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
                    <h4>Salads & Desserts</h4><br><br><br><br>
                </div>
                <div class="col-md-3 services-w3-grid2 ser-left icon6 hi-icon-wrap hi-icon-effect-6" data-wow-duration=".8s"
                    data-wow-delay=".2s">
                    <i class="fa fa-gift hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
                    <h4>hot drinks</h4><br><br><br><br>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- /services -->
    <!--Cateloges-->
    <div class="gallery" id="gallery">
        <div class="container">
            <div class="w3ls-heading">
                <h3>Gallery</h3>
            </div>
            <div class="horizontalTab" id="horizontalTab">
                <ul class="resp-tabs-list list-group">
                    <li class="list-group-item text-center"></li>
                    <li class="list-group-item text-center"></li>
                    <li class="list-group-item text-center"></li>
                    <li class="list-group-item text-center"></li>
                </ul>
                <div class="resp-tabs-container">
                    <!-- section -->
                    <div class="bhoechie-tab-content active">
                        <h3 class="title"> مكرونات واسماك</h3>
                        <div class="services-grids">
                            <div class="w3layouts_gallery_grids">
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/s2.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/s2.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal3" style="color:white">لازانياباللحم
                                                            المفروم</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/s1.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/s1.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal4" style="color:white">معكرونة
                                                            بالبشاميل</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/s3.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/s3.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal5" style="color:white">معكرونة
                                                            إيطالية</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/s4.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/s4.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal6" style="color:white">باستا</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/s5.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/s5.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal7" style="color:white">معكرونة
                                                            لسان العصفور</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/s6.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/s6.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal8" style="color:white">السباغيتي</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/s7.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/s7.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal9" style="color:white">النجرسكو</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/s8.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/s8.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal10" style="color:white">البينك
                                                            باستا</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--اسمااااااااااااك-->
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/f1.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/f1.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal11" style="color:white">الروبيان</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/f2.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/f2.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal12" style="color:white">الاستاكوزا</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/f3.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/f3.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal13" style="color:white">الكاليماري</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/f4.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/f4.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal14" style="color:white">السوشي</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/f5.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/f5.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal15" style="color:white">الحبار</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/f6.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/f6.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal16" style="color:white">الجمبري</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/f7.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/f7.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal17" style="color:white">سمك
                                                            الفيليه</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/f8.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/f8.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal18" style="color:white">الجمبري
                                                            المقلي</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/f9.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/f9.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal19" style="color:white">سمك
                                                            السلمون</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-3 w3layouts_gallery_grid">
                                    <a href="images/f10.jpg" class="lsb-preview" data-lsb-group="header">
                                        <div class="w3layouts_news_grid">
                                            <img src="images/f10.jpg" alt=" " class="img-responsive">
                                            <div class="w3layouts_news_grid_pos">
                                                <div class="wthree_text">
                                                    <h3><a href="#" data-toggle="modal" data-target="#myModal20" style="color:white">ملوخية
                                                            بالجمبري</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <div class="bhoechie-tab-content">
                        <h3 class="title ab"> سندوتشات وسلطات</h3>
                        <div class="services-grids">
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/a1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/a1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal21" style="color:white">ساندويش
                                                        فاهيتا دجاج</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/a2.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/a2.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal22" style="color:white">همبرجر
                                                        الدجاج</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/a4.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/a4.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal23" style="color:white">برجر
                                                        بالبيض</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/a5.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/a5.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal24" style="color:white">برجر
                                                        اللحم</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/a6.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/a6.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal25" style="color:white">سندويش
                                                        التونة بالبيض</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/d1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/d1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal26" style="color:white">الكول
                                                        سلو</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/d2.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/d2.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal27" style="color:white">سلطة
                                                        الأفوكادو</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/d3.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/d3.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal28" style="color:white">سلطة
                                                        الباذنجان</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/d4.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/d4.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal29" style="color:white">سلطة
                                                        سيزر بالدجاج</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/d5.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/d5.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal30" style="color:white">سلطة
                                                        الجرجير بالرمان</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/d6.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/d6.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal31" style="color:white">سلطة
                                                        التونة</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/d7.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/d7.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal32" style="color:white">التبولة</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <div class="bhoechie-tab-content">
                        <h3 class="title ab1"> حلويات ومشروبات </h3>
                        <div class="services-grids">
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/b1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/b1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal38" style="color:white">عش
                                                        البلبل</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/b4.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/b4.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal33" style="color:white">لفائف
                                                        القرفه</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/b5.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/b5.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal34" style="color:white">أصابع
                                                        زينب</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/b6.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/b6.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal35" style="color:white">عيش
                                                        السرايا</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/b7.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/b7.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal36" style="color:white">الغريبه
                                                        السودانيه</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/b8.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/b8.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal37" style="color:white">أقراص
                                                        جوز الهند</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/b9.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/b9.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal39" style="color:white">الكنافة
                                                        بالجبن</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/c1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/c1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal40" style="color:white">كيكة
                                                        البرتقال</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/c2.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/c2.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal41" style="color:white">الكيك
                                                        العادي</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/c3.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/c3.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal42" style="color:white">كيكة
                                                        الاناناس</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/c4.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/c4.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal43" style="color:white">الكيكة
                                                        الإسفنجية</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/c5.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/c5.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal44" style="color:white">تورتة
                                                        عيد الميلاد</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/e1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/e1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal45" style="color:white">التشيز
                                                        كيك</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/e2.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/e2.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal46" style="color:white">تشيز
                                                        كيك بالجلي</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/e3.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/e3.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal47" style="color:white">تشيز
                                                        كيك الزبادي</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/e4.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/e4.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal48" style="color:white">تشيز
                                                        كيك بالبرتقال</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/e5.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/e5.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal49" style="color:white">التشيز
                                                        كيك بالشوكولاتة</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/j1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/j1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal50" style="color:white">السينابون</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/j2.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/j2.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal51" style="color:white">دونات</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/p1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/p1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal52" style="color:white">السويسرول</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/p2.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/p2.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal53" style="color:white">الكوكيز</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/p3.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/p3.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal54" style="color:white">تارت
                                                        الليمون</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/p4.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/p4.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal55" style="color:white">سويسرول
                                                        الشوكولاته</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/k1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/k1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal56" style="color:white">بقلاوة
                                                        سورية</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/k2.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/k2.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal57" style="color:white">البقلاوة
                                                        البيضاء</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/k3.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/k3.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal58" style="color:white">أصابع
                                                        الجلاش الحلو</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!--مشروبااااااااااااااااااااااات-->
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal59" style="color:white">عصير
                                                        الليمون</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n2.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n2.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal60" style="color:white">عصير
                                                        التفاح</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n3.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n3.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal61" style="color:white">عصير
                                                        قمر الدين</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n4.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n4.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal62" style="color:white">عصير
                                                        الموز بالحليب</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n5.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n5.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal63" style="color:white">عصير
                                                        الفراولة</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n6.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n6.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal64" style="color:white">عصير
                                                        المنجا</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n7.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n7.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal65" style="color:white">عصير
                                                        النعناع</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n8.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n8.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal66" style="color:white">عصير
                                                        الرمان</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n9.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n9.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal67" style="color:white">عصير
                                                        الطماطم</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n10.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n10.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal68" style="color:white">حمص
                                                        الشام</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n11.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n11.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal69" style="color:white">هوت
                                                        شوكلت</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n12.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n12.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal70" style="color:white">كابتشينو</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n13.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n13.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal71" style="color:white">كوكتيل
                                                        الفواكه </a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n14.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n14.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal72" style="color:white">موكا
                                                        بارد</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n15.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n15.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal73" style="color:white">عصير
                                                        البرتقال</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/n16.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/n16.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal74" style="color:white">سحلب</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <div class="bhoechie-tab-content">
                        <h3 class="title ab2"> ارز ومحاشي واخري</h3>
                        <div class="services-grids">
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/g1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/g1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal75" style="color:white">أرز
                                                        بالخضار و الفراخ</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/g2.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/g2.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal76" style="color:white">صيادية
                                                        السمك</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/g3.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/g3.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal77" style="color:white">أرز
                                                        بسمتي</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/g4.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/g4.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal78" style="color:white">الأرز
                                                        بالجمبري</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/h1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/h1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal79" style="color:white">دجاج
                                                        محشي</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/h2.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/h2.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal80" style="color:white">محشي
                                                        البطاطس</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/h3.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/h3.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal81" style="color:white">ملفوف
                                                        محشي</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/h4.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/h4.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal82" style="color:white">محشي
                                                        الكوسا</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/h5.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/h5.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal83" style="color:white">ورق
                                                        العنب</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/h6.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/h6.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal84" style="color:white">فخدة
                                                        الخروف</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/i1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/i1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal85" style="color:white">كشري</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/i4.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/i4.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal86" style="color:white">مسقعة
                                                        باللحمة المفرومة</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/m1.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/m1.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal87" style="color:white">الناجتس</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/i2.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/i2.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal88" style="color:white">الحواوشي</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/i3.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/i3.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal89" style="color:white">الممبار</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/i5.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/i5.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal90" style="color:white">طعمية</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/i6.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/i6.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal91" style="color:white">فتة</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/a7.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/a7.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal92" style="color:white">كبدة
                                                        الدجاج</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 w3layouts_gallery_grid">
                                <a href="images/a3.jpg" class="lsb-preview" data-lsb-group="header">
                                    <div class="w3layouts_news_grid">
                                        <img src="images/a3.jpg" alt=" " class="img-responsive">
                                        <div class="w3layouts_news_grid_pos">
                                            <div class="wthree_text">
                                                <h3><a href="#" data-toggle="modal" data-target="#myModal93" style="color:white">فاهيتا
                                                        الدجاج</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->
                    <!--  section -->

                </div>
            </div>
        </div>
    </div>
    <!-- tabs  js-->
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true,   // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!-- contact form -->
    <!--<div class="contact-w3ls" id="contact">
        <div class="container">
            <h3>contact form</h3>
            <form action="#" method="post">
                <div class="col-md-5 col-sm-5 contact-left agileits-w3layouts">
                    <div class="form-control">
                        <label class="header">Full Name <span>:</span></label>
                        <input type="text" name="First Name" placeholder="Name" required="">
                    </div>

                    <div class="form-control">
                        <label class="header">Email <span>:</span></label>
                        <input type="email" class="email" name="Email" placeholder="Email" required="">
                    </div>

                    <div class="form-control">
                        <label class="header">Mobile Number <span>:</span></label>
                        <input type="text" name="Number" placeholder="Mobile Number" required="">
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 contact-right agileits-w3layouts">
                    <div class="form-control">
                        <label class="header">Message <span>:</span></label>
                        <textarea name="Message" placeholder="Message" required=""></textarea>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <input type="submit" value="Send">
            </form>
        </div>
    </div>-->
    <!-- //contact form -->
    <!-- map -->
    <div class="map" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6174.021376907777!2d31.184674!3d27.183398000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14450bee2a94a5f7%3A0x4acb6f804c14b1fa!2z2YPZiNio2LHZiiDYp9mE2KzZiti02IwgQWwgSGFtcmFhIEF0aCBUaGFuZXlhaCwgUWVzbSBUaGFuIEFzeXV0LCBBc3NpdXQgR292ZXJub3JhdGU!5e1!3m2!1sen!2seg!4v1542723805881"
            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <div class="agile_map_grid">
            <div class="agile_map_grid1">
                <h3>Contact Info</h3>
                <ul>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>address :</span> Al Hamraa Ath
                        Thaneyah,Qesm Than
                        Asyut,Assiut Governorate EGY.</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><span>email :</span> <a href="mailto:aalaaashraf97@gmail.com">aalaaashraf97@gmail.com</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i><span>call us :</span> (+020) 109 7301 682</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //map -->
    <!-- footer -->
    <div class="footer">
        <div class="col-md-6 footer-left">
            <h3><span style="color:red">K</span><span style="color:green">f</span><span style="color:yellow">a</span><span
                    style="color:blueviolet">i</span><span style="color:yellow">a</span>
                <span style="color:rgb(11, 90, 238)">3</span><span style="color:darkblue">kk</span></h3>
            <p>
                Our goal is to provide you with easy, quick, simple and detailed recipes, without need to look
                for it everywhere.
            </p>
            <p>We provide the best way to eat user favourite dishes with least cost, and you can change any
                component with your’s better.
                If you need kind of food and not found,you can send a request message.
            </p>
        </div>
        <div class="col-md-6 footer-right">
            <section class="subscribe" id="subscribe">
                <h3>Newsletter</h3>
                <form action="#" method="post" class="newsletter">
                    <input class="email" type="email" placeholder="Your email..." required="">
                    <input type="submit" class="submit" value="">
                </form>
            </section>
            <h4>Follow us</h4>
            <div class="wthree-icon">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //footer -->
    <!-- copyright -->
    <div class="copyright-agile">
        <p>&copy; 2018 <span style="color:red">K</span><span style="color:green">f</span><span style="color:yellow">a</span><span
                style="color:blueviolet">i</span><span style="color:yellow">a</span>
            <span style="color:rgb(11, 90, 238)">3</span><span style="color:darkblue">kk</span>. All rights reserved |
            Design by Alaa Ashraf</p>
    </div>
    <!-- //copyright -->
    <script src="js/jarallax.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <!-- //here ends scrolling icon -->
    <!-- Date-Picker-JavaScript -->
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#datepicker,#datepicker1,#datepicker2").datepicker();
        });
    </script>
    <!-- //Date-Picker-JavaScript -->
    <!-- banner text effect js file -->
    <script src="js/modernizr.custom.72111.js"></script>
    <!-- banner text effect js file -->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <!--الوصفات-->
    <div class="modal video-modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">لازانيا باللحم المفروم</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>نصف كيلوغرام من اللازانيا </li>
                            <li>أوقية من جبن الموزاريلا </li>
                        </ul>
                        <h5 style="color:blue">مكّونات صلصة اللحم</h5>
                        <ul>
                            <li>نصف كيلوغرام من اللحم المفروم </li>
                            <li>بصلة مفرومة فرماً ناعماً </li>
                            <li>ملعقتان كبيرتان من الزبدة، ومعجون الطماطم </li>
                            <li>كوبان من الطماطم المقطعة قطعاً صغيرة الحجم </li>
                            <li>ملح، وفلفل أسود حسب الرغبة </li>
                            <li>نصف ملعقة صغيرة من مسحوق القرفة </li>
                        </ul>
                        <h5 style="color:blue">مكوّنات صلصة البشاميل:</h5>
                        <ul>
                            <li>أربعة أكواب من الحليب السائل </li>
                            <li> أربع ملاعق كبيرة من الدقيق </li>
                            <li> ملعقتان كبيرتان من الزبدة </li>
                            <li> بصلة مفرومة فرماً ناعماً </li>
                            <li> نصف ملعقة صغيرة من جوزة الطيب </li>
                            <li>ملح وفلفل أسود </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نذيب الزبدة في مقلاةٍ على النار، ونقلي البصل، ونتركه حتّى يذبل ويتغيّر لونه </li>
                            <li> نضيف اللحم المفروم إلى البصل المقلي، ونقلب المكوّنات مع بعضها، ونتركها مدّة عشر دقائق
                                حتّى
                                تنضج </li>
                            <li> نضيف إلى اللحم قطع الطماطم، ومعجون الطماطم المذاب في القليلٍ من الماء، ونتركه على نارٍ
                                هادئةٍ مدّة ربع ساعة </li>
                            <li>نرفع القدر عن النار، ونتركه جانباً </li>
                            <li> نسلق اللازانيا بالماء كلّ قطعة على حدة </li>
                            <li>نضع الزبدة في قدرٍ على النار، ونضيف إليها البصل، ونستمر في التحريك حتّى يذبل </li>
                            <li>نضيف الدقيق، ونتركه حتّى نحصل على عجينةٍ، ثمّ نضيف الحليب مع الاستمرار في التحريك،
                                ونترك
                                صلصة البشاميل على النار حتّى يصبح قوامها كثيفاً </li>
                            <li> ننكه صلصة البشاميل بالملح، والفلفل الأسود، وجوز الطيب، ثمّ نرفع القدر عن النار </li>
                            <li>نسخن الفرن على درجة حرارةٍ متوسطةٍ نصف طبقة من اللازانيا في صينية الفرن، ونغطيها بثلث
                                كمية
                                اللحم، وربع كمية صلصة البشاميل </li>
                            <li>نكررالخطوة السابقة حتّى الانتهاء من كامل كمية صلصة اللحم، وقطع اللازانيا، وصلصة
                                البشاميل
                            </li>
                            <li>نرش كمية الجبن على وجه الصينية، وندخلها إلى الفرن المسخن مسبقاً، ونتركها حتّى يتحمر
                                وجهها
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModal4">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">معكرونة بالبشاميل والدجاج</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>صدر دجاج مقطّع إلى مكعبات صغيرة </li>
                            <li>كوبٌ من الفطر المقطّع إلى شرائح </li>
                            <li>كوبٌ ونصف من المعكرونة </li>
                            <li>ثلاثةُ أكوابٍ ونصف من الحليب السائل </li>
                            <li>ثلاثة أرباع ملعقةٍ صغيرةٍ من الملح، أو حسب الرغبة </li>
                            <li>ملعقتان كبيرتان من الزبدة </li>
                            <li>ست ملاعق كبيرة من الطحين </li>
                            <li> حبّةٌ متوسطة الحجم من البصل المفروم </li>
                            <li>ربع كوبٍ من جبنة البارميزان المبشورة </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>ضعي قدراً فيه كميةً وافرةً من الماء فوقَ نارٍ عالية الحرارة حتى يغلي الماء </li>
                            <li>أضيفي رشّةً من الملح وملعقةً كبيرةً من الزيت، ثمَّ اسلقي المعكرونة لمدّة ثماني دقائق
                            </li>
                            <li>ذوّبي ملعقةً كبيرةً من الزبدة في مقلاةٍ فوقَ نارٍ متوسطة الحرارة، ثمَّ أضيفي البصل
                                وشوّحيه
                                حتّى يُصبح لونه ذهبياً </li>
                            <li>أضيفي الفطر، والدجاج وقلّبي المكوّنات حتّى ينضج الدجاج </li>
                            <li> ذوّبي ملعقةُ كبيرةً من الزبدة في قدرٍ آخر، ثمَّ أضيفي إليه الطحين وقلّبيه لمدّة دقيقة
                            </li>
                            <li> أضيفي الحليب بالتدريج، والملح، والفلفل الأسود، وقلّبي المكونات باستمرار حتّى تغلظ
                                الصلصة
                            </li>
                            <li>ضعي المعكرونة المسلوقة في صينيّة بايركس، ثمَّ أضيفي خليط الدجاج والفطر </li>
                            <li>اسكبي صلصة البشاميل، ثمَّ وزّعي الجبن فوق الوجه </li>
                            <li>اخبزي المعكرونة في فرنٍ ساخنٍ لمدّة خمسَ عشرةَ دقيقة، أو حتّى تتحمّر جيداً، ثمَّ
                                قدّميها
                                ساخنة </li>
                            <li>يُمكن إضافة البروكلي، أو الجزر إلى الوصفةِ إذا أحببتِ </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModal5">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">معكرونة إيطالية</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ثلاث حبات من البصل المبشور </li>
                            <li>كوبان من الفلفل الأخضر، أو أي لونه نريده، مقطع إلى مربعات صغيرة </li>
                            <li>كوب ونصف من جبنة الموزاريلا </li>
                            <li> ملعقتان من الجبنة السائلة </li>
                            <li> نصف كوب من كريمة الطبخ </li>
                            <li>كيلوغرام واحد من معكرونة السباغيتي </li>
                            <li>خمسة صدور من الدجاج </li>
                            <li>ملح حسب الرغبة </li>
                            <li>ملعقة من الفلفل الأسود </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نقطع صدور الدجاج إلى مربعات صغيرة، ونغسلها جيداً، ونضعها جانباً </li>
                            <li> نسخن الزيت النباتي، ونضع فيه البصل، ونتركه لمدة ثلاث دقائق حتى يذبل، ويتغير لونه،
                                ونقلبه
                                بشكلٍ جيد على درجة حرارة منخفضة، حتى يستوي </li>
                            <li>نسلق المعكرونة لمدة ثماني دقائق، ونتركها حتى تستوي، ويصبح لونها مائلاً إلى الأبيض </li>
                            <li>نضيف الفلفل الرومي الأخضر فوق الدجاج، ونقلب المكونات جيداً، ثم نضيف جبنة الموزاريلا،
                                وملعقتين من الجبنة السائلة، بالإضافة إلى كريمة الطبخ، ونحرك كافة المكونات مع بعضها
                                البعض
                                بشكلٍ جيد </li>
                            <li>نرش كمية من الملح، والفلفل الأسود فوق الخليط </li>
                            <li>نحضر وعاء لائقاً للتقديم، ونضع المعكرونة فيه، وفوقه خليط الصلصة والدجاج، ونقدمها وهي
                                ساخنة
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModal6">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">باستا بالدجاج</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>مئتان وثلاثون غراماً من الباستا </li>
                            <li>أربعة صدور من الدجاج المقطّع إلى شرائح </li>
                            <li>ملعقتان كبيرتان من جبن بارميزان مبشور </li>
                            <li>كأس من الحليب </li>
                            <li>ملعقة صغيرة من الأوريغانو </li>
                            <li> ملعقة صغيرة من إكليل الجبل </li>
                            <li> ملعقة صغيرة من الزعتر مفروم فرماً ناعماً </li>
                            <li>نصف ملعقة صغيرة من ثومة بودرة </li>
                            <li>ربع ملعقة صغيرة من الملح </li>
                            <li>ملعقتان كبيرتان من زيت نباتيّ </li>
                            <li>مئة غرام من جبن كريم </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نُسخّن الزيت </li>
                            <li>نُضيف شرائح الدجاج، ونُقلّبها حتى تنضج </li>
                            <li>نسلق الباستا في قدر على النار، ثم نُصفّيها </li>
                            <li>نغلي الحليب في قدر على النار، ثم نُضيف جبن الكريم، والأوريغانو، والزعتر، وإكليل الجبل،
                                والثوم، والملح </li>
                            <li>نخلط المكوّنات جيداً إلى أن يذوب الجبن، ثم نُضيف شرائح الدجاج </li>
                            <li>نضع الباستا في أطباق للتقديم </li>
                            <li>نسكب قليلاً من الصلصة على الباستا </li>
                            <li>نرشّ البارميزان، ثم نُقدّم الباستا </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModal7">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">مكرونة لسان العصفور بالدجاج</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>نصف كوب من معكرونة لسان عصفور </li>
                            <li>ملعقتان كبيرتان من زيت الزيتون </li>
                            <li>ستة أكواب من مرق الدجاج </li>
                            <li>ملح </li>
                            <li>فصان من الثوم المهروس </li>
                            <li>أربع حبات من الحبهان </li>
                            <li>حبتان من الجزر المقطّع إلى دوائر </li>
                            <li>نصف ملعقة صغيرة من الفلفل الأسود </li>
                            <li>ورقتان من ورق الغار </li>
                            <li>كوب من البروكلي المقطّع إلى زهرات </li>
                            <li>اثنان من صدر الدجاج المقطع إلى شرائح سميكة </li>
                            <li>عودان من القرفة </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نسخن زيت الزيتون في قدر موضوع على درجة حرارة متوسّطة، ونقلي فيه الثوم ونتركه حتى يتغيّر
                                لونه </li>
                            <li>نضيف للثوم الجزر، ونحرّك حتى يذبل </li>
                            <li>نضيف الدجاج مع القرفة، وورق الغالا، والحبهان، ثم نسكب المرقة ونحرّك </li>
                            <li>بعد أن يغلي المزيج، نغطّي القدر جيّداً، ونخفّف درجة النار </li>
                            <li>نترك الحساء على النار حتى نضج قطع الدجاج والمكوّنات بشكل تام </li>
                            <li>نرفع غطاء القدر ونضيف معكرونة لسان العصفور، والبروكلي </li>
                            <li>نرش الفلفل الأسود، والملح، ونترك المزيج على النار لمدة عشر دقائق أخرى </li>
                            <li>نسكب الحساء في طبق التقديم، ونقدمه ساخناً على مائدة الطعام بجانب شرائح الليمون الحامض
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModal8">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">السباغيتي</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>مئتا غرام من المعكرونة السباغيتي والمسلوقة</li>
                            <li>كأس من السبانخ المغسول والمجفّف</li>
                            <li>حبّة من الفليفلة الخضراء المفرومة فرماً ناعماً</li>
                            <li>ست بيضات</li>
                            <li>ربع كأس من جبن البارميزان المبشور</li>
                            <li>ربع كأس من جبن الموزاريلا الطازجة والمقطّعة على شكل شرائح</li>
                            <li>ربع كأس من جبن الماعز والمقطّع</li>
                            <li>كميّة قليلة من زيت الزيتون</li>
                            <li>ملح طعام حسب الرغبة</li>
                            <li>رشّة من الفلفل الأسود</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نسخّن زيت الزيتون في مقلاة عالية الحواف</li>
                            <li>نضع السباغيتي المسلوق ونفرده جيداً في المقلاة وذلك حتى تحمرّ قليلاً</li>
                            <li>نخفق البيض في وعاء عميق، ثمّ نضيف الفلفل الأسود، وجبن البارميزان، والملح ونخلط
                                المكوّنات
                                جيداً</li>
                            <li>نضيف السبانخ في المقلاة ونضيف البيض المخفوق والفليفلة الخضراء</li>
                            <li>نوزّع قطع جبن الموزاريلا، وجبن الماعز فوق السباغيتي</li>
                            <li>نغطّي المقلاة ونتركها على النار حتى ينضج البيض</li>
                            <li>نضع المقلاة في فرن مشغل مسبقاً على درجة حرارة عاديّة ونتركها حتى يحمرّ وجهها</li>
                            <li>نقدّم طبق السباغيتي على المائدة ساخناً</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModal9">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">معكرونة نجرسكو بالبشاميل والدجاج</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>نصف كيلوغرام من معكرونة النجرسكو، (معكرونة أصابع)</li>
                            <li>خمسُ كؤوس من صلصة البشاميل</li>
                            <li>نصف كيلوغرام من الدجاج المسحّب</li>
                            <li>مبشور جبنة موزاريلا، حسْبَ الرغبة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اسلقي المعكرونة في إناء عميق، ثمّ صفيها من الماء بشكلٍ جيّد، ولكن احرصي على ألّا
                                تغسليها
                                بالماء بعد ذلك</li>
                            <li>أضيفي كأسيْن من صلصة البشاميل على المعكرونة، وقلّبيها بها</li>
                            <li>أضيفي قطع الدجاج، والقليل من مبشور الجبنة، مع الاستمرار في التقليب</li>
                            <li>سخّني الفرن على درجة حرارة متوسّطة</li>
                            <li>ادهني صينية بكمية قليلة من البشاميل، واسكبي فيها خليط المعكرونة بالدجاج</li>
                            <li>صبّي ما تبقّى من صلصة البشاميل على وجه الصينيّة</li>
                            <li>أدخلي الصينيّة في الفرن لمدة ساعة إلا ربع</li>
                            <li>أخرجي الصينية وانثري على وجهها الكمية المرغوبة من مبشور الجبنة، لتعيديها بعد ذلك إلى
                                الفرن
                                مدة عشر دقائق تقريباً لغرض تحمير الوجه</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModal10">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">البينك باستا</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>علبة معكرونة</li>
                            <li>كوبان من الكريمة الحامضة</li>
                            <li>عبوة من القشطة</li>
                            <li>ملعقة صغيرة من البابريكا</li>
                            <li>ملعقتان كبيرتان من معجون الطماطم</li>
                            <li>ملعقة صغيرة من الكاري</li>
                            <li>مكعب من مرق الدجاج</li>
                            <li>ملعقة صغيرة من الفلفل الأسود المطحون</li>
                            <li>ملعقة كبيرة من الزعتر المجفف</li>
                            <li>فصان من الثوم المهروس</li>
                            <li>ملعقتان صغيرتان من الزبدة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>تُسلق المعكرونة حسب المعلومات المدونة على العبوة، وتُصفى، وتُترك جانباً</li>
                            <li>تُوضع الزبدة في إناء على النار، ويُضاف إليها الثوم، وتُقلب حتى يتحول لونها إلى الذهبي</li>
                            <li>تُضاف الكريمة، ومعجون الطماطم، ومكعب المرق، والتوابل، وتُقلب المكوّنات حتى تتداخل مع
                                بعضها
                                البعض</li>
                            <li>تُضاف القشطة، ويُقلب الخليط بالمضرب اليدوي لمنع تشكل التكتلات</li>
                            <li>تُضاف المعكرونة إلى الخليط، وتُقلب حتى تختلط به</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModal11">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الروبيان</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلو من الروبيان المنظف بعد إزالة القشور عنه</li>
                            <li>ثلاث كاسات من الماء، كاسة نشأ، ثلاث حبات بيض ،أربع فصوص ثوم مهروس</li>
                            <li>القليل من بودرة البصل أو يفضل عصير بصل</li>
                            <li>زيت للقلي بقسماط </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>إحضار إناء عميق وويخلط به الماء و النشأ وبالإضافة إلى البيض</li>
                            <li>تضع البقسماط في كيس نايلون وبه تخلط الثوم المهروس وعصير البصل ، وييقلب ليتجانس الخليط</li>
                            <li>تضع الروبيان في هذا الخليط وهو الماء والنشأ والبيض ويحرك جيداً ليغطي كل قطع الروبيان
                                ويتشكل
                                عليه طبقة من الخليط ، ثم يوضع في البقسماط ، وثم تخرج الروبيان من البقسماط وتغمسه في
                                خليط
                                النشأ والبيض والماء مرة آخرى وبسرعة ، ثم ترجعه مرة أخرى في البقسماط لتكون عليه أكثر من
                                طبقة
                                من الخليطين</li>
                            <li>تقوم بتسخين الزيت جيداً وتخرج الروبيان من الخليط وتضعه في الزيت مباشرة حتى يصبح
                                الروبيان
                                أحمر أو برتقالي اللون و يقلب على الجهتين ويترك على جنب على ورق مناديل لتصفية الزيت من
                                الروبيان</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModal12">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الاستاكوزا</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>قطعتان طازجتان من الاستاكوزا -السلطعون البحري/ الروبيان-، ذات الحجم المتوسط والذي يزن
                                حجم
                                القطعة الواحدة منه حوالي سبعمائة غرام</li>
                            <li>ملعقتان اثنتان صغيرتان من الثوم المهروس أو المفروم لقطعٍ متناهيةٍ في صغرها</li>
                            <li>حبة بصل صغيرة مبشورة جيداً إلى شرائحٍ ناعمة ورقيقة</li>
                            <li>ملعقة واحدة كبيرة من عصير الليمون الحامض</li>
                            <li>نصف ملعقةٍ صغيرةٍ من البهارات المشكّلة</li>
                            <li>نصف ملعقةٍ واحدةٍ صغيرةٍ من الكمون</li>
                            <li>ربع ملعقةٍ صغيرةٍ من الفلفل الأسود الحار</li>
                            <li>ربع ملعقةٍ صغيرةٍ من الكزبرة المطحونة</li>
                            <li>ملعقة صغيرة واحدة من ملح الطعام</li>
                            <li>ملعقة واحدة صغيرة من مسحوق الزنجبيل</li>
                            <li>القليل من الفلفل الأخضر الحار على شكل شرائحٍ صغيرةٍ ورقيقة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>باستخدام مقصٍ للسمكِ قويٍ وحاد نقوم بقص الدرقات القاسيات في الجهة العلوية للروبيان</li>
                            <li>نقوم بعملية تتبيل السلطعون البحري بخلطه الجيد مع الثوم، المفروم، والبصل المبشور،
                                والبهارات
                                المشكلة، وعصير الليمون الحامض، والكمون، والفلفل الأسود، والكزبرة المطحونة، وملح الطعام،
                                ومسحوق الزنجبيل، وشرائح الفلفل الأخضر الحار، ونتركه على الأقل لمدة ساعتين</li>
                            <li>نقوم بعد ذلك بوضع الخليط السابق في الفرن على نارٍ متوسطةٍ لمدةٍ من الوقت لا تقل عن
                                الثلاثين
                                دقيقة</li>
                            <li>تقوم بتسخين الزيت جيداً وتخرج الروبيان من الخليط وتضعه في الزيت مباشرة حتى يصبح
                                الروبيان
                                أحمر أو برتقالي اللون و يقلب على الجهتين ويترك على جنب على ورق مناديل لتصفية الزيت من
                                الروبيان</li>
                            <li>بعد أن نرفع الطبخة عن النار وإفراغها في وعاء نقوم بعملية تزيين للطبق من حلقات أخرى من
                                الفلفل الأخضر الحلو والفجل الأحمر والبصل، ونقوم بتقديمها وهي ساخنة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModal13">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الكالاماري</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلو غرام من الكالاماري</li>
                            <li>رشّة ملح</li>
                            <li>كوب من الزيت النباتيّ</li>
                            <li>ربع كوب من الخلّ الأبيض</li>
                            <li>كوبان من الحليب السائل. كوب من الطحين</li>
                            <li>رشّة فلفل أسود</li>
                            <li>رشّة بابريكا</li>
                            <li>ثوم بودرة مرشوشة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>ننقع الكالاماري مع الخل، والفلفل، والحليب قبل موعد الاستعمال بليلة واحدة</li>
                            <li>نخلط الطحين مع الفلفل، وبودرة الثوم، والبابريكا، والملح، حيث نغمس كل قطعة من قطع
                                الكالاماري
                                في الطحين ثم نقلي هذه القطع في الزيت لمدة سبع دقائق تقريباً، إلى أن تصبح مائلة إلى
                                الصفار</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModal14">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">السّوشي</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوب من الأرز ( الحبة المتوسطة )</li>
                            <li>سمك فيليه</li>
                            <li>حبة خيار</li>
                            <li>حبة فلفل حلو</li>
                            <li>صوص صويا</li>
                            <li>ملعقتين زنجبيل</li>
                            <li>بهارات سمك</li>
                            <li>ملح</li>
                            <li>ملعقتين عصير ليمون</li>
                            <li>ملعقتين خل أبيض</li>
                            <li>ملعقة كاري</li>
                            <li>ملعقة سكر</li>
                            <li>حبة أفاكادو</li>
                            <li>زيت زيتون</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>يتم نقع الأرز الأبيض لمدة ربع ساعة وبعد ذلك يتم غسله عدة مرات حتى يصبح لون الماء صافياً
                                وهذا دليل على نظافة الأرز وسهل أن تختلط به نكهة السوشي</li>
                            <li>يتم طبخ الأزر كما نطبخه في الطريقة العادية ولكن بإضافة ملعقة زيت زيتون ويتم إضافة الخل
                                الأبيض إليه والسكر ويتم تغطية أرز مدة ربع ساعة</li>
                            <li>نقوم بتشريح سمك الفيلية إلى شرائح رفيعة وطولية وهنا الفيليه نستخدمه بدل الطحالب البحرية
                                وبنفس الوقت نستخدمه لإضافة نكهة بحرية</li>
                            <li>بالعادة الأسماك البحرية في السوشي على الطريقة اليابانية يتم تناولها نيئة، ولكن هنا بما
                                يناسب أذواقنا سنقوم بطهي الفيليه</li>
                            <li>بعد تشريح الفيليه نقوم بوضعه جانباً ونضع عليه كمية من الخل الأبيض مقدار ملعقتين وملعقة
                                من
                                الملح ونتركه عشرة دقائق</li>
                            <li>يتم تقطيع الخيار والفلفل الأخضر والأفاكادو إلى شرائح طولية صغيرة وناعمة ويتم وضع صوص
                                الصويا
                                وبهارات السمك والكاري والزنجبيل وملعقة زيت زيتون وعصير الليمون في مقلاة ويضاف الخيار
                                والفلفل والأفاكادو ويتم تقليبه على النار مدة خمسة دقائق فقط</li>
                            <li>سنقوم بطبخ الفيليه بوضع الشرائح في صينية وتوضع بالفرن على الشواية مدة خمس دقائق فلح
                                الفيلية
                                طري</li>
                            <li>وبعد نضجه يتم خلطه مع صوص الخيار والفلفل والأفاكادو التتبيلة أعلاه</li>
                            <li>نحضر الآن لفائف قصدير ويتم فردها على الطّاولة على شكل مستطيل يفرد عليها الرز ويتم وضع
                                طبقة
                                من الصوص والفيليه ويتم لفها بحذر وستصبح بعد اللف متماسكة لأن الرز مطبوخ</li>
                            <li>تكون شكل اللفافة على شكل اسطواني ويتم تقطيع بالسكين حيث تكون سماكة وطول القطعة بمقدار
                                خمس
                                سنتمتر</li>
                            <li>بعد الانتهاء من التقطيع يتم نزع القصدير وتوضع قطع السوشي في صحن تقديم </li>
                            <li>يتم وضع طبق من اللبن بجانبه ومايونيز الثومة بجانبه أيضاً ويتم تناوله بالغمس ويقدم عصير
                                الليمون بجانبه</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModal15">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الحبّار المقلي</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلو غرام واحد من الحبّار</li>
                            <li>ملعقة طعام كبيرة واحدة من زيت الزيتون</li>
                            <li>ملعقة طعام كبيرة واحدة من عصير الليمون</li>
                            <li>ملعقة طعام كبيرة واحدة من الخل</li>
                            <li>كوب واحد من الطحين</li>
                            <li>نصف كوب من البقسماط أو الخبز المجفف المطحون</li>
                            <li>حبة واحدة من البيض</li>
                            <li>بابريكا</li>
                            <li>ملح بحسب الرغبة</li>
                            <li>فلفل أسود بحسب الرغبة</li>
                            <li>ملعقة صغيرة واحدة من الكمون</li>
                            <li>ملعقة صغيرة واحدة من الكزبرة المجففة</li>
                            <li>زيت</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>قومي بتنظيف الحبّار وقطعيه إلى أصابع ومن ثُمّ اغسليه في الماء البارد وصفيه من الماء</li>
                            <li>أحضري وعاء وضعي فيه كل من الكزبرة المجففة والكمون، وحوالي نصف ملعقة صغيرة من الفلفل
                                الأسود
                                وملعقتين صغيرتين من الملح و2 ملعقتين صغيرتين من البابريكا وعصير الليمون والخل وزيت
                                زيتون،
                                وقومي بتقليبها جيداً حتى تتوزع المكونات فيما بينها</li>
                            <li>أحضري أصابع الحبّار واتركيها في الوعاء مع الخليط السابق واتركيها لحوالي 30 دقيقة لكي
                                تمتص
                                النكهة والطعم</li>
                            <li>بالعادة الأسماك البحرية في السوشي على الطريقة اليابانية يتم تناولها نيئة، ولكن هنا بما
                                يناسب أذواقنا سنقوم بطهي الفيليه</li>
                            <li>أحضري البيضة وأضيفها إلى الخليط وأخفقيها جيداً معهم حتى يتغطى الحبّار. قومي بخلط
                                البقسماط
                                والطحين مع نصف ملعقة صغيرة من البابريكا وو حوالي رشة من الملح والفلفل الأسود، وضعي
                                المكونات
                                في كيس</li>
                            <li>ضعي أصابع الحبّار في الكيس وقومي برج الكيس جيداً حتى يحاط الحبار بالمكونات من كل
                                الجهات،
                                ويمكن وضع المكونات السابقة في وعاء ووصع أصابع الحبار فيها ونقلبها من كل الجهات</li>
                            <li>أحضري قدر للقلي وضعي فيه كميّة من الزيت، وقومي بتسخينه ومن ثُمّ ضعي أصابع الحبّار فيها
                                وقومي بقليها إلى أن يصبح لونها ذهبيّاً</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModal16">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الجمبري بالكاري</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ملعقة صغيرة من الكاري الحب</li>
                            <li>كيلو من الجمبري</li>
                            <li>ملعقة صغيرة من الملح</li>
                            <li>أربع ملاعق كبيرة من الزيت النباتي</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>ضعي القليل من الزيت النباتي في مقلاة، وأضيفي له حبوب الكاري، واتركيها كي تتحمّص قليلاً</li>
                            <li>قومي بوضع الجمبري المنظّف والمغسول والملح إلى الزيت واتركيه حتى ينضج</li>
                            <li>قدّمي طبق الجمبري بالكاري مع الأرز الأبيض أو الأرز بالكاري</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModal17">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الفيليه المحمّر بالتوابل</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلوغرام من سمك الفيليه</li>
                            <li>نصف كوب من الطحين</li>
                            <li>ملعقة كبيرة من الفلفل الأحمر الحار المطحون</li>
                            <li>ملعقتان كبيرتان من الكمون المطحون</li>
                            <li>بيضة مخفوقة</li>
                            <li>فلفل وملح حسب الرغبة</li>
                            <li>زيت دوار شمس للقلي</li>
                            <li>ملعقتان كبيرتان من الكزبرة المطحونة</li>
                            <li>ملعقتان كبيرتان من بهار الكاري</li>
                            <li>أربع ملاعق كبيرة من عصير الليمون</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>امزجي الطحين مع كل من الكزبرة، والكمون، والكاري، والفلفل المطحون</li>
                            <li>اغسلي قطع السمك جيداً وتبليها بكل من الملح والفلفل الأسود وعصير الليمون</li>
                            <li>أضيفي ما يقارب ثلاثة أرباع الكوب من الماء والبيضة إلى مزيج الطحين</li>
                            <li>قلبيهم جيداً إلى أن يمتزج الخليط، ثم اتركيهم جانباً لمدة خمس عشرة دقيقة</li>
                            <li>سخني زيت القلي في مقلاة عميق على النار</li>
                            <li>غمسي سمك الفيليه في الطحين مع مراعاة أن يغطى جيداً</li>
                            <li>اقلي السمك من الجهتين إلى أن يصبح لونه مائلاً إلى البني</li>
                            <li>جففي السمك بعد الانتهاء باستخدام ورق النشاف</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModal18">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الجمبري المقلي بالخضار</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلو غرامان من الجمبري</li>
                            <li>ثلاث بصلات كبيرة مقطّعة لحلقات</li>
                            <li>حبّتان من الطماطم مقطعة إلى حلقات</li>
                            <li>ثلاث حبات من الفلفل الرومي الملون، مقطّعة لحلقات</li>
                            <li>ملعقة صغيرة من الزنجبيل المطحون</li>
                            <li>نصف ملعقة كبيرة من الملح</li>
                            <li>فص من الثوم</li>
                            <li>نصف ملعقة صغيرة من الكمون</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نقشر الجمبري ثم نغسله بشكل جيد بالماء وأحيانا يتم فركه بالليمون وبعد ذلك يغطس بالماء
                                قليلاً
                                في وعاء وينقل إلى مصفاة لتصفيته جيداً من الماء</li>
                            <li>نحضر التتبيلة ويستخدم في تتبيل الجمبري الثوم والليمون أو عصير الليمون، والكمّون،
                                والملح،
                                والفلفل، بكميّات معقولة وبعد تتبيله بشكل جيد يترك في التتبيلة بوعاء لمدّة ساعة أو
                                ساعتين</li>
                            <li>نحضر الزيت في المقلاة ونضع الجمبري في الزيت مع التتبيلة ويقلب إلى أن يتحمّر. نقلي
                                الجمبري
                                إلى أن ينتهي العدد بالكامل وبعد أن نقليه نضعه في مصفاة لتصفية الزيت ويوضع على طبق ونضيف
                                إليه البصل والبندورة والفلفل الأخضر -حسب الرغبة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModal19">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">سمك السلمون مشوي مع الطماطم والأعشاب</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربع قطع فيليه سمك سلمون</li>
                            <li>فص من الثوم المطحون</li>
                            <li>فلفل مطحون</li>
                            <li>حبتا طماطم متوسطة الحجم، ومقطّعة إلى مكعبات</li>
                            <li>ملعقة صغير من كلٍ من: عصير الليمون، والزنجبيل الطازج</li>
                            <li>ملعقتان صغيرتان من زيت الزيتون</li>
                            <li>ملعقتان كبيرتان من كلٍ من: البقدونس المفروم، وورق الريحان، والبصل الأحمر المفروم،
                                والنعناع
                                المفروم</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>وضع المكوّنات في وعاء، ثمّ خلطها</li>
                            <li>إحضار أربع قطع من ورق القصدير</li>
                            <li>وضع كل قطعة من السمك في وسط ورقة القصدير، ثمّ وضع فوق كل قطعة سمك ثلاثة أرباع من سلطة
                                الطماطم</li>
                            <li>إغلاق القصدير جيداً، ثمّ وضعه في الفرن لمدّة ربع ساعة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal20" tabindex="-1" role="dialog" aria-labelledby="myModal20">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">ملوخية بالجمبري</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>نصف كيلوغرام من الجمبري (الروبيان)، متوسط الحجم</li>
                            <li>أربعة أكواب من مرق الدجاج</li>
                            <li>نصف كيلوغرام من أوراق الملوخية، مقطّعة ناعماً</li>
                            <li>ملعقتان من الكزبرة البودرة</li>
                            <li>بصلة مبشورة</li>
                            <li>حبة شطة خضراء، مقطّعة ناعماً</li>
                            <li>ملعقتان من الثوم المهروس</li>
                            <li>ملعقة من السمن</li>
                            <li>ملح وفلفل حسب الرغبة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>غلي المرق مع الملح، والفلفل، والبصل</li>
                            <li>إضافة الجمبري، وتقليبه على نار هادئة لمدّة ثلاث دقائق تقريباً</li>
                            <li>إضافة الملوخية، وتركها على نار هادئة لمدّة تتراوح بين ثلاث إلى خمس دقائق إضافية، مع
                                التقليب
                                من حين لآخر، ثم رفع الخليط عن النار</li>
                            <li>تسخين السمن في مقلاة صغيرة، وإضافة الشطة الخضراء عليها، والثوم، والكزبرة، وطهي الخليط
                                حتى
                                تفوح رائحته، ويكتسب الثوم اللون الذهبي، ومن ثم صب الخليط على الملوخية وتقليبه، حتى
                                تُصبح
                                الملوخية جاهزةً للتقديم</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <div class="modal video-modal fade" id="myModal21" tabindex="-1" role="dialog" aria-labelledby="myModal21">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">ساندويش فاهيتا الدجاج</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربع قطع من فيليه الدجاج المقطّعةإلى شرائح طولية</li>
                            <li>ثلاث قطع من خبز الصمون</li>
                            <li>ثلاث حبات من الفلفل الرومي الملون المقطع إلى شرائح طولية</li>
                            <li>علبة من الذرة الجاهزة</li>
                            <li>علبة من الفطر الجاهز أو يمكن استبداله بنصف كأس من الفطر الطازج</li>
                            <li>كأس من جبنة القشقوان أو الموزاريلا المبشورة</li>
                            <li>ملعقة كبيرة من الزيت النباتي</li>
                            <li>فصّان من الثوم المهروس</li>
                            <li>حبتان من البصل المقطع إلى جوانح</li>
                            <li>نصف كأس من الخس المفروم فرماً ناعماً</li>
                            <li>حبة من الأفوكادو المهروس</li>
                            <li>ملعقة كبيرة من الخردل</li>
                            <li>ملعقة كبيرة من المايونيز</li>
                            <li>ملعقة كبيرة من الملح</li>
                            <li>ملعقة كبيرة من بهار الدجاج</li>
                            <li>ملعقة كبيرة من بهار الفاهيتا</li>
                            <li>ملعقة صغيرة من البهارات المشكلة</li>
                            <li>ملعقة صغيرة من الخل</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نضع مقلاة واسعة على النار، ثمّ نضيف إليها الدجاج ونحرك جيداً حتّى ينضج ويتبخر ماؤه</li>
                            <li>نرفع الدجاج عن النار، ونضعه جانباً</li>
                            <li>نعيد نفس المقلاة إلى النار، ثمّ نضيف البصل، والثوم، والفطر، والذرة، والفلفل الرومي،
                                والخل،
                                بالإضافة إلى خليط البهارات</li>
                            <li>نضيف الجبنة المبشورة إلى الخليط ونستمرّ في التحريك حتّى ينضج الخليط، ثمّ نرفعه عن النار</li>
                            <li>ندهن الساندويشات بالخردل والمايونيز، ثمّ نضيف خليط الدجاج والخضار، ثمّ نضيف الأفوكادو
                                المهروس، والخس، ونغلقها جيداً، ثمّ نضعها في طبق للتقديم</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal22" tabindex="-1" role="dialog" aria-labelledby="myModal22">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">همبرجر الدجاج</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>نصف كيلومن الدجاج المنظف منزوع الجلد والعظم</li>
                            <li>القليل من الزيت النباتي لقلي الدجاج</li>
                            <li>بصلة متوسطة الحجم مفرومة ناعماً</li>
                            <li>فصّان من الثوم المهروس</li>
                            <li>رشة من الفلفل الأسود -حسب الرغبة</li>
                            <li>رشة من الملح -حسب الرغبة</li>
                            <li>رشة من البهارات -حسب الرغبة</li>
                            <li>ملعقة صغيرة من الأوريجانو-الزعتر الجاف</li>
                            <li>ربع كوب بقدونس</li>
                            <li>ربع كوب كزبرة</li>
                            <li>كاتشب</li>
                            <li>مايونيز</li>
                            <li>خردل</li>
                            <li>ملفوف مقطع شرائح أوخس</li>
                            <li>خبز لحشو همبرجر الدجاج يمكن استخدام أي نوعية خبز</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>ضعي الدجاج المسحب في محضرة الطعام وقومي بفرمه جيداً حتى يصبح ناعماً</li>
                            <li>قومي بإضافة البقدونس، والكزبرة، والثوم، والبصل، إلى الدجاج وقومي بخلط المكونات في محضرة
                                الطعام حتى تختلط بشكل جيد</li>
                            <li>أضيفي البهارات إلى خليط الدجاج (الملح، والفلفل الأسود، والبهارات، والأوريجانو)، وحركي
                                جيداً</li>
                            <li>شكلي أقراص همبرجر الدجاج بالسمك المراد والحجم المطلوب</li>
                            <li>ضعي أقراص برجر الدجاج في مقلاة ساخنة مدهونة بالقليل من الزيت النباتي</li>
                            <li>اتركي همبرجر الدجاج على النار حتى يتحمر من الجهتين</li>
                            <li>يمكنك وضع أقراص الهمبرجر على الشواية المدهونة بالقليل من الزيت النباتي ونتركها حتى
                                تتحمر</li>
                            <li>ضعي أقراص همبرجر الدجاج في الخبز المدهون بالقليل من المايونيز والكاتشب والخردل</li>
                            <li>ضعي القليل من الملفوف المقطع، ويمكن استبداله بالخس المفروم</li>
                            <li>قدمي طبق همبرجر الدجاج مع الخضار المقطعة، مثل الخيار والبندورة والمخلل والبطاطا المقلية</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal23" tabindex="-1" role="dialog" aria-labelledby="myModal23">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">برجر بالبيض</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>نصف كيلوجرام من قطع لحم الخروف، ويفضل أن تكون نسبة الدهون عشرين بالمئة في قطع اللحم حتى
                                يكون البرجر طرياً</li>
                            <li>ثلث كوب من الماء البارد أو المُثلّج</li>
                            <li>حبة بصل واحدة صغيرة</li>
                            <li>أربع بيضات صغيرة</li>
                            <li>أربع شرائح من الجبنة، ويمكنك استخدام أي نوع جبنة تفضله مثل جبنة الشيدر أو الجبنة
                                السويسرية
                                أو غيرها</li>
                            <li>أربعة أرغفة من الخبز الخاص بالبرجر</li>
                            <li>نصف ملعقة صغيرة من أوراق الزعتر المجفف والمطحون</li>
                            <li>رشة من الملح، بحسب الرغبة والذوق</li>
                            <li>رشة من الفلفل الأسود المطحون، بحسب الرغبة والذوق</li>
                            <li>أربع ملاعق صغيرة من الزيت النباتي، مثل زيت الذرة أو زيت بذور دوّار الشمس أو زيت الزيتون
                                أو
                                غيرها</li>
                            <li>ملعقتان صغيرتان من الزبدة</li>
                            <li>أربع ملاعق صغيرة من المايونيز، وهو مكوّن اختياري</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>افرم قطع اللحم باستخدام مُعالِجة الطعام الكهربائية، حيث إن اللحم المفروم الجاهز يكون
                                بجودة
                                أقل من اللحم الذي تفرمه في المنزل</li>
                            <li>ضع اللحم المفروم في وعاء كبير وأضف إليه رشة من الملح ورشة من الفلفل الأسود المطحون
                                والزعتر
                                المجفف المطحون، وقلّبه جيداً حتى تتوزع التوابل والنكهات بشكل متساوٍ في البرجر</li>
                            <li>أضف الماء البارد أو المُثلّج إلى الوعاء الكبير واعجن وامزج المكونات معاً ومع الماء
                                البارد.
                                قطّع البصل على شكل شرائح بسماكة سنتيمتر واحد، واتركها جانباً</li>
                            <li>سخّن مقلاة كبيرة غير قابلة للالتصاق على نار متوسطة، ثم أضف إليها ملعقتين صغيرتين من
                                الزيت</li>
                            <li>قسّم كمية اللحم إلى أربعة أجزاء متساوية وشكّلها على شكل أقراص دائرية "برجر"، ثم ضعها في
                                المقلاة الساخنة</li>
                            <li>قلّب البرجر كل عشرين ثانية حتى تحافظ على اللحم طرياً من الداخل، واستمر بالتقليب لمدة
                                خمس
                                إلى ست دقائق وذلك حتى ينضج اللحم، ثم أخرجه من المقلاة وضعه في طبق جانباً</li>
                            <li>ضع شرائح البصل الدائرية في المقلاة على نار متوسطة واتركها لمدة ثلاث دقائق ثم اقلبها على
                                الجهة الثانية واتركها لمدة ثلاث دقائق أخرى، ثم أخرجها من المقلاة وضعها في طبق جانباً</li>
                            <li>أضف ملعقتي زيت نباتي إلى المقلاة ثم أضف البيضات الأربعة إليها، واتركها على نار هادئة
                                حتى
                                ينضج بياض البيض تماماً، ثم أخرج البيض من المقلاة وضعه في طبق واتركه جانباً</li>
                            <li>ادهن كمية قليلة من الزبدة على الجزء الداخلي من أرغفة الخبز الخاصة بالبرجر، ثم ضعها في
                                المقلاة الساخنة والوجه الداخلي يلامس السطح الساخن للمقلاة، وذلك لمدة دقيقة واحدة حتى
                                يتحمّر
                                ويتحمّص الخبز من الداخل، ثم أخرجه من المقلاة</li>
                            <li>أعد البرجر وشرائح البصل إلى المقلاة لمدة ثلاثين ثانية حتى تسخن إذا دعت الحاجة، ثم ضعها
                                داخل
                                أرغفة الخبز بحيث تدهن ملعقة صغيرة من المايونيز أولاً داخلها ثم تضع شريحة الجبنة وفوقها
                                شريحة من البصل وبعدها اللحم "البرجر" ثم تضع بيضة، وكرر نفس الخطوات مع شطائر البرجر
                                الثلاثة
                                الأخرى</li>
                            <li>قدّم البرجر ساخناً إلى جانب أحد المشروبات الباردة مثل أحد أنواع العصائر بحسب ما تفضل</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal24" tabindex="-1" role="dialog" aria-labelledby="myModal24">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">برجر اللحم</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلوغرام من اللحم المفروم على مطحنة اللحم</li>
                            <li>بيضة كبيرة</li>
                            <li>"نصف كوب من البقسماط "مطحون الكعك</li>
                            <li>ربع ملعقة صغيرة من الفلفل الأسود المطحون</li>
                            <li>ملعقة صغيرة من البهارات المشكّلة</li>
                            <li>ملعقة صغيرة من ملح الطعام</li>
                            <li>نصف ملعقة صغيرة من البابريكا</li>
                            <li>"شرائح من البصل "حلقات</li>
                            <li>"خبز صمون "برجر</li>
                            <li>شريحة من الجبن المربّع</li>
                            <li>كاتشب ومايونيز</li>
                            <li>شريحة من الخسّ</li>
                            <li>شريحة من الطماطم</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>افردي كميّة اللحم المفروم في صينيّة واسعة، واضغطي عليها ليتم تفريغها من الهواء تماماً</li>
                            <li>أضيفي البهارات جميعها على اللحم من الملح، والفلفل، والبابريكا، والبهارات المشكّلة،
                                إضافة
                                إلى بيضة مخفوقة</li>
                            <li>اعجني المكوّنات جميعها بباطن الكف حتى تتداخل جميع المكوّنات مع بعضها، ثمّ أعيدي فرد
                                العجينة
                                لتصبح رقيقة</li>
                            <li>وزّعي البقسماط أو مطحون الكعك على كامل العجينة، ثمّ أعيدي عجنها بباطن الكف، إلى أن تصبح
                                كالكفتة الناعمة</li>
                            <li>شكّلي من العجينة مجموعة من الأقراص الصغيرة بحجم قرص الخبز تقريباً، بعد أن تقطّعي
                                العجينة
                                إلى كراتٍ صغيرة، ثم تضغطيها بباطن الكف جيّداً، لتصبح أقراصاً متساوية، وذلك بالاستعانة
                                بورقتي نشّاف توضع الكرة بينهما، وتُضغط جيّداً، ثمّ توضع في الثلاجة قليلاً، وهكذا حتى
                                إنهاء
                                كامل الأقراص</li>
                            <li>أخرجي الأقراص المبرّدة من الثلاجة، ثم سخّني القليل من زيت القلي بمقلاة واسعة على نار
                                مرتفعة
                                لفترة</li>
                            <li>ضعي الأقراص واحداً تلو الآخر في الزيت الساخن، واتركي كلّ واحد لمدّة دقيقة أو أكثر،
                                ليصبح
                                محمّراً ومقليّاً بالشكل المرغوب، ثمّ اقلبيه على الوجه الآخر ليتم تحميره أيضاً</li>
                            <li>صفّي الأقراص من الزيت، وضعيه على ورق النشّاف؛ للتخلّص من الزيت الزائد، ثمّ ضعي كل قرص
                                في
                                ساندويش، مع إضافة شريحة واحدة من الخسّ، والطماطم، وكميّة من الكاتشب، أو المايونيز، ثمّ
                                قدّميها ساخنة للعائلة، بجانب طبق من البطاطا المقليّة، وكوب من البيبسي</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal25" tabindex="-1" role="dialog" aria-labelledby="myModal25">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">سندويش التونة بالبيض</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربع قطع من خبز الباغيت</li>
                            <li>مئة وستون غراماً من التونة</li>
                            <li>نصف كوب من الذرة</li>
                            <li>حبة مشرحة من الطماطم</li>
                            <li>ثماني أوراق من الخس</li>
                            <li>بيضتان مسلوقتان</li>
                            <li>ملح حسب الرغبة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نفتح قطع الخبز الباغيت من جانب واحد، ونضع فيها الخسّ، والتونة، والذرة</li>
                            <li>نضيف شرائح الطماطم، والبيض، ثمّ ننثر القليل من الملح</li>
                            <li>ننقل السندويشات إلى طبق التقديم</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal26" tabindex="-1" role="dialog" aria-labelledby="myModal26">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الكول سلو</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوب ونصف من الجزر المبشور</li>
                            <li>أربعة أكواب من الملفوف المُقطّع إلى شرائح</li>
                            <li>ربع كوب من الزّبادي</li>
                            <li>ربع كوب من السكّر</li>
                            <li>ربع كوب من المايونيز</li>
                            <li>ملعقة كبيرة من عصير اللّيمون</li>
                            <li>رشة فلفل حسب الرّغبة</li>
                            <li>ملعقة كبيرة من الخلّ</li>
                            <li>ربع ملعقة من الملح</li>
                            <li>بصلة واحدة صغيرة مفرومة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اخلطي جميع المكونات، عدا الملفوف والجزر، جيّداً، ثم غطّي الخليط واتركيه مدّة ربع ساعة،
                                وأضيفي الجزر والملفوف إلى الخليط بعدها</li>
                            <li>غطّي السّلطة وضعيها في الثّلاجة مدة تقارب السّاعات الثلاثة، بعد مرور المدّة اللازمة
                                قدّمي
                                طبق الكول سلو</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal27" tabindex="-1" role="dialog" aria-labelledby="myModal27">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">سلطة الأفوكادو</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>قرن من الفلفل الأخضر الحار</li>
                            <li>فصان من الثوم</li>
                            <li>رشة صغيرة من الملح</li>
                            <li>حبتان من الأفوكادو</li>
                            <li>عصير نصف حبة من الليمون</li>
                            <li>رشة من زيت الزيتون</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نحضر قرن من الفلفل الأخضر، ونقطعها إلى قطع صغيرة جداً، ثمّ نفرمها بالمفرمة الخاصة بفرم
                                الملوخية، حتى تصبح قطعاً صغيرة جداً، ونضعها في زبدية الفخار</li>
                            <li>نقشر فص الثوم، ونقطعه كما قطعنا الفلفل، ونضعه فوق الفلفل في الزبدية</li>
                            <li>نضيف رشة ملح صغيرة على الثوم، ثمّ ندقه جيداً</li>
                            <li>نحضر حبّتين من الأفوكادو، ونقطعها بالسكين من المنتصف، ونخرج النواة، ونحفرها بالملعقة
                                حتى
                                نخرج الأفوكادو</li>
                            <li>نضع الأفوكادو إلى خليط الفلفل والثوم والملح، ونهرس المكوّنات جيداً مع بعضها، ثمّ نعصر
                                نصف
                                الليمونة، ونرشّها بالقليل من الزيت</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal28" tabindex="-1" role="dialog" aria-labelledby="myModal28">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">سلطة الباذنجان والرمان</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>حبتان كبيرتان من الباذنجان الأسود الطويل</li>
                            <li>نصف كوب من زيت الزيتون</li>
                            <li>فصا ثوم مهروسان</li>
                            <li>ملعقة واحدة كبيرة من النعنع المجفّف</li>
                            <li>نصف ملعقة صغيرة من الملح</li>
                            <li>ربع ملعقة صغيرة من الفلفل الأسود</li>
                            <li>ملعقتان كبيرتان من عصير الليمون</li>
                            <li>ربع كوب من دبس الرمّان الجاهز</li>
                            <li>حبوب الرمّان</li>
                            <li>نعنع أخضر طازج</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نغسل الباذنجان للتخلص من أيّة أوساخ عالقة به، ثمّ نقطعه إلى شرائح رفيعة بسمك سنتيمتر
                                واحد،
                                ثمّ نرش القليل من الملح على الشرائح، ونتركه لفترة عشر دقائق حتى يتخلص الباذنجان من
                                الماء
                                الذي فيه</li>
                            <li>نمسح الباذنجان بمناديل المطبخ الخاصة للتخفيف من ملوحته، ونحضّر على نشويه في الفرن، ندهن
                                الشرائح بالقليل من زيت الزيتون، ونضع الصينية في الفرن لمدّة ربع ساعة تقريباً حتى يصبح
                                لونها
                                ذهبياً، ثمّ نقلب الشرائح على الجهة الثانية ونكرّر العملية</li>
                            <li>نترك الشرائح حتى تبرد كلياً. نضع فيها القليل من زيت الزيتون والثوم في مقلاة صغيرة،
                                ونقلب
                                على نار هادئة إلى أن يصبح لون الثوم ذهبياً فاتحاً، ونضع الثوم المقلي في وعاء ونضيف إليه
                                النعنع المجفّف، والملح، والفلفل الأسمر، ودبس الرمّان، وعصير الليمون، ثمّ نخلط المواد
                                جيّداً
                                معاً</li>
                            <li>نأخذ شريحة من شرائح الباذنجان ونضع فيها حبوب الرمّان بمقدار ملعقة واحدة صغيرة، ثمّ نلفّ
                                البانجان على شكل نصف دائرة، ونكرر العملية لكلّ الشرائح حتى ننتهي منها</li>
                            <li>نضع شرائح الباذنجان في طبق التقديم، ونرش عليها صلصة دبس الرمان التي سبق أن حضرناها، ثمّ
                                نزينها بالقليل من حبوب الرمّان، والنعنع الأخضر الطازج</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal29" tabindex="-1" role="dialog" aria-labelledby="myModal29">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">سلطة السيزر بالدجاج</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربع شرائح سميكة من الخُبز الأبيض المُقرمش</li>
                            <li>ثلاث ملاعق كبيرة من زيت الزيتون</li>
                            <li>قطعتان من صدور الدجاج منزوعتا الجلد والعظم</li>
                            <li>حبّة كبيرة من الخس مفصول الأوراق</li>
                            <li>حبّة من الثوم</li>
                            <li>قطعتان من الأنشوفي المُعلّب</li>
                            <li>كميّة من جبنة البارميزان المبشور</li>
                            <li>خمس ملاعق كبيرة من المايونيز</li>
                            <li>ملعقة كبيرة من الخلّ الأبيض</li>
                            <li>ملح وفلفل أسود حسب الرغبة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نُشغّل الفرن على درجة حرارة أعلى من المتوسِّطة</li>
                            <li>نُقطَّع شرائح الخُبز إمّا باليدين، أو بواسطة السكين للحصول على قطع صغيرة مُنظمة الشكل،
                                ونضعها في صينيّة كبيرة للخبز</li>
                            <li>ننثر مقدار ثلاث ملاعق كبيرة من زيت الزيتون فوق قطع الخُبز مع فركها جيّداً بالزيت،
                                ونُبهّرها
                                بالملح، ونخبزها بالفرن لمُدَّة عشر دقائق أو أقلّ حتّى تتحمّص، مع تقليبها بضع مرات كي لا
                                تحترق</li>
                            <li>ندهن صدور الدجاج بما تبقى من كميّة زيت الزيتون، ونُبهّرها بالملح والفلفل الأسود، ونضع
                                مِقلاة مُناسبة على نار متوسِّطة الحرارة لمُدَّة دقيقة، وعندما تُصبح ساخنة كفاية من دون
                                أن
                                يصدر منها الدخان نضع صدور الدجاج</li>
                            <li>نترك صدور الدجاج لمُدَّة أربع دقائق، ثُمَّ نقلبها للجانب الآخر لنفس المُدَّة، ويُمكن
                                التأكد
                                من نُضج صدور الدجاج بوخزها بواسطة طرف سكينة حادّة من أسمك نُقطة فيها، فإذا كانت ناضجة
                                لا
                                يجب أن يكون لون اللَّحم ورديّاً</li>
                            <li>نضرب الثوم بواسطة سكينة مُسطَّحة، وننزع عنها القشر، وثُمَّ نهرسها بالهاون</li>
                            <li>نُفتّت الأنشوفي في وعاء صغير باستخدام الشوكة، ونتركه جانباً</li>
                            <li>نضع كميّة من الجبنة مع الأنشوفي في الوعاء، ونُضيف الثوم، والخلّ، والمايونيز، والملح،
                                والفلفل الأسود ونخلطهم جيّداً، يجب أن تكون كثافة الخليط ككثافة اللَّبن، وفي حال كانت
                                أكثر
                                كثاقة نُضيف بضع ملاعق صغيرة من الماء لتخفيفها</li>
                            <li>نفرم الخس، ونضعه في وعاء كبير، ونُفتّت الدجاج، وننثر نصف الكميّة فوقه، ونصف كميّة
                                الخُبز
                                المُحمّص</li>
                            <li>نُضيف كميّة كبيرة من التتبيلة، ونُقلّب المكوّنات معاً</li>
                            <li>ننثر ما تبقى من الدجاج، والخُبز المُحمّص، والتتبيلة، ونُزيّن بجبنة البارميزان، ونُقدّم
                                السلطة مُباشرة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal30" tabindex="-1" role="dialog" aria-labelledby="myModal30">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">سلطة الجرجير مع الرمان</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>حبّتان من البندورة المقطّعة إلى قطع صغيرة</li>
                            <li>حزمتان من الجرجير</li>
                            <li>حبتان من الخيار المقطّع</li>
                            <li>بصلة صغيرة مفرومة ناعماً</li>
                            <li>(كوب من الرمان الحامض (يمكن الاستغناء عنه</li>
                            <li>أربع ملاعق من زيت الزيتون</li>
                            <li>ملعقتان من الخلّ</li>
                            <li>ملعقة دبس رمان</li>
                            <li>(عين الجمل للزينة (حسب الرغبة</li>
                            <li>ملح وفلفل أسود</li>
                            <li>شطة حسب الرغبة</li>
                            <li>سماق</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اغسلي الجرجير جيّداً كما يمكنك أن تنقعيه بالخلّ والملح لتنظيفه، وافرميه وضعيه في مصفاة
                                حتّى
                                يتخلّص من الماء الزائدة</li>
                            <li>أحضري طبق وضعي به الخيار المقطّع، والبندورة، والبصل واخلطيهم معاً، ثمّ قومي بإضافة
                                الجرجير</li>
                            <li>أحضري وعاء آخر واخلطي زيت الزيتون، وعصير الليمون، والخلّ ودبس الرمان، والفلفل الأسود،
                                والملح، والسمّاق، والشطّة، واخلطيهم جيداً حتّى تحصلي على مزيج متجانس واسكبيه فوق الخضار
                                واخلطيهم معاً وزيّني الطبق بعين الجمل وحبوب الرمان</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal31" tabindex="-1" role="dialog" aria-labelledby="myModal31">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">سلطة التونة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>علبة تونة</li>
                            <li>طماطم</li>
                            <li>فليفلة</li>
                            <li>حبيبات من الذرة</li>
                            <li>بقدونس مفروم</li>
                            <li>جزر مبروش</li>
                            <li>بصلة مفرومة</li>
                            <li>زيت الزيتون</li>
                            <li>عصير الليمون</li>
                            <li>ملح</li>
                            <li>مايونيز</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>أفرغي التونة من العلبة في طبق واهرسيها جيداً حتى تصبح قطعاً صغيرة</li>
                            <li>أضيفي الطماطم</li>
                            <li>اخلطي جميع المكونات مع بعضها البعض جيداً</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal32" tabindex="-1" role="dialog" aria-labelledby="myModal32">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">التبولة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ثلاث حبّات من البندورة</li>
                            <li>حبّتان من الخيار</li>
                            <li>أربع ضمم من البقدونس</li>
                            <li>كوب من البرغل الناعم</li>
                            <li>ملعقة صغيرة من النعنع الناشف أو المُجفّف</li>
                            <li>ملعقة صغيرة من الملح، ويمكن الزيادة أو التقليل منه -حسب الرغبة</li>
                            <li>عصير ثلاث ليمونات، ويمكن الزيادة أو التقليل -حسب الرغبة</li>
                            <li>حبة واحدة من الليمون المقطعة إلى شرائح للتزيين</li>
                            <li>نعناع أخضر</li>
                            <li>ملعقة كبيرة من زيت الزيتون</li>
                            <li>أوراق من الخس للتزين</li>
                            <li>يمكنك إضافة حبّة بصل صغيرة إلى سلطة التبولة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>قطّعي البندورة إلى مربّعات صغيرة الحجم</li>
                            <li>قطّعي الخيار إلى مربّعات صغيرة الحجم</li>
                            <li>نظّفي وقطّعي البقدونس بشكل ناعم</li>
                            <li>افرمي النعناع الأخضر بشكل ناعم</li>
                            <li>اغسلي البرغل الناعم ثم نقعه بالماء، بحيث يغمره بعد ذلك ويُصفّى، ويوضع عليه عصير الليمون
                                الحامض</li>
                            <li>إذا كنت ترغبين بإضافة الفجل، قطّعي الفجل إلى مربعات صغيرة الحجم</li>
                            <li>قشّري البصل ثمّ افرميها بشكل صغير جداً</li>
                            <li>اخلطي المكوّنات التي قمتِ بتقطيعها مع بعضها البعض، ثمّ أضيفي النعناع الناشف، والملح،
                                وزيت
                                الزيتون</li>
                            <li>قلّبي المكوّنات مع بعضهم البعض داخل الوعاء للتجانس</li>
                            <li>افرشي أوراق الخس بداخل طبق التقديم، ثم اسكبي سلطة التبولة في الطبق، وأضيفي الليمون
                                المُقطّع
                                إلى شرائح للتزيين، وبعض النعناع الأخضر</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <!--Section-->
    <div class="modal video-modal fade" id="myModal38" tabindex="-1" role="dialog" aria-labelledby="myModal38">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عش البلبل</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوب واحد من الزبدة المذابة</li>
                            <li>ثلاثة ملاعق كبيرة من السمن المذاب</li>
                            <li>باكيت من عجينة رقائق الجلاش</li>
                            <li>كوبان من الفستق الحلبي ويمكن اختيار أنواع أخرى من المكسرات</li>
                        </ul>
                        <h5 style="color:blue">(مكونات القطر (الشربات</h5>
                        <ul>
                            <li>كوب من الماء</li>
                            <li>كوبان من السكر</li>
                            <li>القليل من عصير الليمون</li>
                        </ul>
                        <h5 style="color:blue"> (طريقة تحضير القطر (الشربات</h5>
                        <ul>
                            <li> نضع مقدار السكر والماء وعصير الليمون في قدر معدني ونضعه على الغاز على درجة حرارة
                                متوسطة
                                ونتركه حتى يغلي ثم نخفف النار ونتركه حتى يصل إلى السماكة المطلوب</li>
                            <li>يجب مراعاة عدم تحريك السكر والماء بل نتركه حتى يذوب لوحده لمنع أي كتل من السكر</li>
                            <li>بعد أن يجهز القطر نتركه كي يبرد</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>يتم وضع عجينة الجلاش في درجة حرارة المطبخ ويجب الحرص على عدم تركها مكشوفة كي لا تجف
                                بذلك
                                ينصح بتغطية عجينة الجلاش بقطعة قماش رطبة كي تبقى طرية</li>
                            <li>نضع كمية السمنة مع كمية الزبدة في مقلاة ونتركهم على النار ختى يذوبوا</li>
                            <li>نضع رقاقة واحدة من رقائق الجلاش على طاولة نظيفة وندهنها بواسطة الريشة بمقدار كافي من
                                السمنة
                                والزبدة المذابة</li>
                            <li>نقوم بطي جوانب عجينة الكلاش ثم نقوم بلف عجينة الجلاش حتى تصبح بالشكل الأسطواني الرفيع</li>
                            <li>نقوم بلف أسطوانات عجينة الجلاش على شكل حلزوني حول نفسها</li>
                            <li>نضع عجينة الجلاش الملفوفة على شكل حلزوني ونقوم برص حبات الجلاش في الصينية المدهونة
                                بالزبدة
                                بشكل جيد كي لا ينتزع شكل لفافات العجين</li>
                            <li>نضع صينية عجينة الجلاش في الفرن الساخن على درجة حرارة 200 درجة لمدة عشرة دقائق أو حتى
                                يصبح
                                لون رقائق العجين ذهبي</li>
                            <li>نضع القطر أو الشربات البارد على صينية عش البلبل بعد إخراجها من الفرن فورآ كي تتشرب كمية
                                القطر كاملة</li>
                            <li>نضع الحشوة التي نريدها في وسط لفائف عش البلبل نحن استخدمنا الفستق الحلبي المطحون خشن</li>
                            <li>تقدم حبات عش البلبل باردة ويمكن إضافة القليل من الكريما المخفوقة أو القشدة بجانب طبق عش
                                البلبل كنوع من التزيين والنكهة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal33" tabindex="-1" role="dialog" aria-labelledby="myModal33">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">لفائف القرفة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ثلاث أكواب ونصف من الطحين</li>
                            <li>ملعقة واحدة كبيرة من الخميرة</li>
                            <li>ثلث كوب من الزبدة</li>
                            <li>نصف كوب من حليب البودرة</li>
                            <li>ربع كوب من السكّر</li>
                            <li>ملعقة واحدة صغيرة من الملح</li>
                            <li>بيضة واحدة</li>
                            <li>نصف كوب من الماء الدافئ</li>
                        </ul>
                        <h5 style="color:blue">الحشوة</h5>
                        <ul>
                            <li>ثلاثة أرباع الكوب من السكّر</li>
                            <li>ثلاثة أرباع الكوب من الجوز المكسّر</li>
                            <li>ملعقتان كبيرتان من القرفة المطحونة</li>
                            <li>نصف كوب من الزبدة المذوّبة</li>
                        </ul>
                        <h5 style="color:blue">كريما السكّر</h5>
                        <ul>
                            <li>كوبان من سكّر البودرة</li>
                            <li>أربع ملاعق كبيرة من الزبدة</li>
                            <li>أربع ملاعق كبيرة من الماء الدافئ</li>
                            <li>ملعقة واحدة صغيرة من الفانيليا</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نضع الخميرة في الماء الدافئ، مع إضافة ملعقة من السكر لها ونتركها جانباً لمدّة خمس دقائق</li>
                            <li>نضع بعد ذلك في العجانة الزبدة ، والسكّر، والملح مع الخفق جيّداً ، ثمّ نضيف من بعد ذلك
                                الحليب والبيض ونخفقهم جيّداً مرةً أخرى</li>
                            <li>ثمّ نضيف إلى الخليط السابق الطحين بشكل تدريجي ، وعند الكوب الثالث من الطحين نضيف خليط
                                الخميرة، والماء الذي جهّزناه سابقاً</li>
                            <li>نعجن العجين لمدّة ١٠ دقائق ، ثمّ ندهنها بالزبدة ، ثمّ نغطيها بعد ذلك ونتركها حتّى
                                تتخمّر
                                لمدّة ١٠ دقائق</li>
                            <li>عند تضاعف العجين نثقبها ، ونضعها جانباً إلى أن ننتهي من إعداد السكّر والحشوة</li>
                            <li>نتتقل لتحضير الحشوة حيث نخلط كافّة مكوّنات الحشوة</li>
                            <li>لكريما السكّر نخلط جميع المكوّنات بشكل جيّد ، حتى يصبح الخليط ناعماً</li>
                            <li>على سطح مغطّى بالطحين نفرد العجينة حتى نحصل على عجينة ذات سمك نصف سم </li>
                            <li>نوزّع الحشوة على العجين ، ومن ثم نلف العجين بشكل رول طويل ، ومن ثم نقطعه بالسكين</li>
                            <li>نضع قطع لفائف القرفة في صينيّة مدهونة بالزيت ونتركها لمدّة نصف ساعة</li>
                            <li>نُدخل الصينيّة للفرن إلى أن تأخذ قطع لفائف القرفة من الأسفل اللون الذهبي ، ومن ثم
                                نشويها من
                                الأعلى</li>
                            <li>نُخرج صينيّة لفائف القرفة من الصينيّة من الفرن ، نقدّم لفائف القرفة في طبق التقديم ونضع
                                فوقها كريما السكّر</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal34" tabindex="-1" role="dialog" aria-labelledby="myModal34">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">اصابع زينب</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ثلاث أكواب من الطحين</li>
                            <li>كوبان من السميد</li>
                            <li>ربع كوب من جوز الهند</li>
                            <li>كوبان من الماء</li>
                            <li>ملعقة صغيرة من الخميرة الفوريّة</li>
                            <li>رشّة صغيرة من الملح</li>
                            <li>زيت للقلي</li>
                            <li>ملعقتان كبيرتان من الشومر</li>
                            <li>ملعقة صغيرة من كربونات الصودا</li>
                            <li>قطر أو شربات لتغميس أصابع زينب</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نضع الخميرة مع القليل من السكّر ونذيبها في القليل من الماء ونضعها جانباً</li>
                            <li>نضع الطحين، وجوز الهند، والسميد في وعاء عميق، ثمّ نُضيف البيكنج صودا والشومر</li>
                            <li>نُضيف الخميرة المذابة، ونقلّب ثمّ نبدأ بإضافة الماء بالتدريج حتّى تتكوّن عجينة متماسكة</li>
                            <li>نضع العجين جانباً كي ترتاح قليلاً وتتخمّر</li>
                            <li>نبدأ بأخذ قطعة صغيرة من العجينة ونمسكها بأطراف الأصابع وبواسطة مبرشة نمرّر العجينة على
                                المبرشة حتّى تلف العجنية على الأصابع</li>
                            <li>نكرّر تلك العمليّة حتّى الإنتهاء كمّيّة العجين</li>
                            <li>نسخّن الزيت النباتيّ على النار، ثمّ نبدأ بقلي أصابع زينب حتّى تحمر</li>
                            <li>نضعها مباشرة في القطر، ونقلّبها حتّى تتشرّب كمّيّة من القطر، ثمّ نصفيها ونضعها في صحن
                                التقديم وتقدّم</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal35" tabindex="-1" role="dialog" aria-labelledby="myModal35">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عيش السرايا</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوبان من الحليب كامل الدسم</li>
                            <li>كوب من الماء</li>
                            <li>ثلاث ملاعق كبيرة من عصير الليمون</li>
                            <li>كوب من الفستق الحلبي المطحون</li>
                            <li>ثلاث ملاعق كبيرة من ماء الزهر أو ماء الورد</li>
                            <li>كوب من اللوز المحمص</li>
                            <li>خمس ملاعق كبيرة من النشا</li>
                            <li>عبوة من القشطة بسعة مئتين وخمسين ملليلتراً</li>
                            <li>كوب من الصنوبر المحمص</li>
                            <li>كوب ونصف من السكر</li>
                            <li>كوب من مربى زهر الليمون</li>
                            <li>باكيت من خبز التوست الطري</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>تسخين كلّ من: النشا، والحليب، والقشطة في قدر على النار، وترك المكوّنات حتى تغلي، ثمّ
                                ترك
                                المزيج من دقيقتين إلى ثلاث دقائق على نار هادئة، مع التقليب المستمر ثمّ تركه جانباً</li>
                            <li>تسخين السكر حتى تذوب حبيباته وتصبح ذهبية اللون، ثمّ إضافة الماء وعصير الليمون بهدوء
                                وبالتدريج، بعد ذلك ترك المزيج حتى يغلي، ثمّ إضافة ماء الورد و ماء الزهر وتركه جانباً</li>
                            <li>إزالة أطراف خبز التوست ورصّه في صينية على نار هادئة، ثمّ سكب الشراب على الخبز المجفف مع
                                الحرص على الضغط عليه قليلاً حتى يتشرب بالشراب</li>
                            <li>وضع خبز التوست في طبق مناسب للتقديم، ثمّ إضافة القشطة وتزيين الوجه بالمكسرات والمربى</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal36" tabindex="-1" role="dialog" aria-labelledby="myModal36">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الغريبة السودانية</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>٢ كأس من السمنة</li>
                            <li>٢ كأس من السكّر الناعم</li>
                            <li>٥ كؤوس من الدقيق</li>
                            <li>قرنفل</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نقوم بخلط ٢ كأس من السمنة مع ٢ كأس من السكّر الناعم في الوعاء الخاص بالعجن </li>
                            <li>ثم نضيف ٥ كؤوس من الدقيق بشكل تدريجي للخليط السابق ، مع ضرورة الاستمرار في العجن أثناء
                                ذلك
                                إلى أن يتم الحصول على عجينة ناعمة وطريّة جداً</li>
                            <li>لتشكيل عجينة الغريبة نقوم بتكويرها مع وضع القرنفل في أوسطها ، كما من الممكن تحضيرها على
                                شكل
                                أصابع صغيرة ومن ثم لفها على بعضها البعض حيث تتّخذ شكل دائرة مقفلة ، لاحقاً نُدخِل قطع
                                الغريبة في الفرن من بعد تسخينه مسبقاً ، مع الحرص على عدم رفع درجة حرارته لأقصاها ، بل
                                نتركها على درجة متوسطة الحراة أثناء عملية الخبز</li>
                            <li>عند الانتهاء نتركها في صينيّة الخبز إلى أن تبرد ، لتصبح بعد ذلك جاهزة للتقديم</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal37" tabindex="-1" role="dialog" aria-labelledby="myModal37">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">اقراص جوز الهند</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوب وثلث من رقائق جوز الهند</li>
                            <li>كوب وربع من الطحين متعدّد الاستعمالات</li>
                            <li>نصف كوب من كلّ من: الزبدة، والسكر البني، والسكر الأبيض</li>
                            <li>بيضة</li>
                            <li>نصف ملعقة صغيرة من كل من: البيكنج صودا، وخلاصة الفانيلا</li>
                            <li>ربع ملعقة صغيرة من الملح</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>تسخين الفرن إلى حرارة مئة وخمس وسبعين درجة مئوية</li>
                            <li>خلط الطحين مع الملح والبيكنج صودا</li>
                            <li>خفق الزبدة مع السكر الأبيض، والسكر البني حتى يصبح قوامه ناعماً</li>
                            <li>إضافة البيض، والفانيلا، وخفق المكوّنات حتى يصبح قوامها هشاً وخفيفاً</li>
                            <li>إضافة الطحين بالتدريج، ثمَّ إضافة جوز الهند، وتقليب المكوّنات حتى تتجانس</li>
                            <li>وضع ما مقداره ملعقة صغيرة معبّأة من خليط جوز الهند في صينيّة الفرن، وإبعاد كلّ قرص عن
                                الآخر
                                خمسة سنتمتراتٍ تقريباً</li>
                            <li>خبز الأقراص من ثماني إلى عشر دقائق، أو حتى يصبح لونها ذهبياً، وتركها حتى تبرد قبل
                                التقديم
                                فوق رف شبكيّ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal39" tabindex="-1" role="dialog" aria-labelledby="myModal39">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الكنافة بالجبن</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوب وربع من السميد</li>
                            <li>ستة أكواب من الحليب السائل</li>
                            <li>ربع كوب من السكر</li>
                            <li>خمسون غراماً من الزبدة</li>
                            <li>كوب ونصف من جبن الموزاريلا</li>
                            <li>كوب ونصف الكوب من جبن القشقوان</li>
                            <li>ملعقة كبيرة من الزبدة لدهن الصينية</li>
                            <li>كوب من البقسماط</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نسكب في قدر الحليب، مع إضافة السكر والزبدة والسميد له، ونضع القدر على حرارة تكون
                                متوسّطة
                                والتحريك بشكل مستمر إلى أن يشتد المزيج</li>
                            <li>نضيف للخليط السابق ربع الكمية المتواجدة لدينا من جبن الموزاريلا وجبن الموزاريلا وجبن
                                القشقوان، مع التحريك إلى أن يذوب الجبن</li>
                            <li>نحمّي الفرن على درجة حرارة مئة وستين درجة، وندهن الصينية بالزبدة</li>
                            <li>ننثر في الصينية نصف كمية البقسماط ونسكب فوق البقسماط نصف كمية خليط الكنافة</li>
                            <li>ننثر ما تبقّى من الجبن (الموزاريلا والقشقوان) فوق الخليط، ونغطّيه بكمية خليط الكنافة
                                المتبقيّة</li>
                            <li>نغطّي وجه صينية الكنافة بكمية البقسماط المتبقيّة، وندخل صينية الكنافة إلى الفرن لمدة
                                خمس
                                عشرة دقيقة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal40" tabindex="-1" role="dialog" aria-labelledby="myModal40">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">كيكة البرتقال</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوبان من الدقيق</li>
                            <li>ملعقة كبيرة بيكنج باودر</li>
                            <li>رشة صغيرة من الملح</li>
                            <li>كوب من السكر الناعم</li>
                            <li>خمس بيضات كبيرات الحجم</li>
                            <li>كوب من زيت الذرة</li>
                            <li>كوب واحد من عصير البرتقال</li>
                            <li>ملعقة كبيرة واحدة من برش البرتقال</li>
                            <li>ملعقة صغيرة فانيليا سائلة أو فانيليا بودرة</li>
                            <li>
                                <h5 style="color:blue">صلصة البرتقال</h5>
                                <ul>
                                    <li>كوب ونصف من السكر الناعم البودرة</li>
                                    <li>ملعقة صغيرة من برش البرتقال</li>
                                    <li>ملعقتان كبيرتان من عصير البرتقال</li>
                                    <li>قطرتان من ألون الطعام البرتقالية</li>
                                </ul>
                            </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نخّلي الدقيق في وعاء عميق، ثمّ أضيفي البيكنج باودر والملح على الخليط</li>
                            <li>ضعي السكر والبيض في وعاء الخلاط، ثمّ ثبّتي المضرب الشبكي، وشغّليه على سرعة متوسّطة حتى
                                يصبح
                                الخليط فاتح اللون</li>
                            <li>أضيفي زيت الذرة ومن ثمّ عصير البرتقال في وعاء الخلّاط، ثمّ ثبّتي المضرب الشبكي، وشغّليه
                                على
                                سرعة متوسّطة حتى يتم خلط المكوّنات جميعها وتتجانس مع بعضها، ثمّ أضيفي خليط الدقيق الذي
                                حضّرته في الخطوة الأولى، وأضيفي مبروش البرتقال والفانيليا، اخفقي إلى أن يتمّ خلط
                                المكوّنات
                                جميعها</li>
                            <li>أحضري صينية مستطيلة مقاس 13×9، ثمّ ضعي داخل الصينية ورق الزبدة، وضعي الخليط من الكيك في
                                الصينية</li>
                            <li>سخّني الفرن على درجة حرارة 180مْ، ثمّ ضعي الصينية في الفرن لمدّة 45 دقيقة إلى أن ينضح
                                الكيك
                                ويصبح لونه مائلاً إلى الذهبيّ</li>
                            <li>يتمّ اختبار نضج الكيك بوضع عود خشبيّة صغيرة أو بوضع سكينة أو شوكة، لكن يجب أن تخرج
                                العود أو
                                السكين أو الشوكة نظيفة؛ فهذا دليلٌ على نضج الكيك</li>
                            <li>أخرجي كيك البرتقال من الفرن، ثمّ اتركيه على شبك من المعدن لعدّة دقائق حتّى يبرد تماماً،
                                وبعد ذلك تخلّصي من ورق الزبدة الذي وضعته مسبقاً، وضعي الكيك في طبق التقديم</li>
                            <li>
                                <h5 style="color:blue">صلصة البرتقال </h5>
                                <ul>
                                    <li>حضّري طبقاً عميقاً، وضعي داخله السكر، وبرش البرتقال، وعصير البرتقال، واللون
                                        البرتقالي، قلّبي بالشوكة إلى أن تتكوّن لديك صلصة ناعمة قوامها مثل قوام العسل
                                        وزّعيها مباشرةً على الكيك</li>
                                </ul>
                            </li>
                            <li>وزّعي صلصة البرتقال على الكيك، ثم زيّنيه وذلك ببرش البرتقال أو خيوط البرتقال، ثمّ
                                قدّميه
                                بارداً</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal41" tabindex="-1" role="dialog" aria-labelledby="myModal41">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">كيك الفانيلا العادي</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربع حبّات حجم كبير من البيض</li>
                            <li>كوب واحد من زيت الذّرة</li>
                            <li>رشّة من الملح</li>
                            <li>ربع ملعقة من بيكربونات الصّودا</li>
                            <li>كوبان من الدّقيق</li>
                            <li>ملعقة واحدة صغيرة من الفانيلا السائلة، أو الفانيليا الباودر</li>
                            <li>ملعقة واحدة كبيرة من البيكنغ باودر</li>
                            <li>كوبان من السكر، ومن الممكن زيادة الكميّة أو تقليلها حسب الرّغبة</li>
                            <li>كوب من عصير البرتقال، أو كوب واحد من الحليب</li>
                            <li>كوب واحد من الماء المغلي</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>انخلي الدّقيق في وعاء عميق، ثم أضيفي إليه البيكنج باودر، والملح، وبيكربونات الصّودا على
                                الخليط، ثمّ أضيفي السكّر</li>
                            <li>ثبّتي المضرب الشبكي في الوعاء، وشغّليه على سرعة بطيئة لعدّة ثواني. أضيفي بعد ذلك
                                الحليب،
                                وزيت الذرّة، والبيض والفانيليا، ثمّ اخفقي هذه المكوّنات على سرعة متوسّطة لمدّة دقيقتين</li>
                            <li>ثمّ أضيفي الماء المغلي، واخفقي الخليط لمدّة تصل إلى نصف دقيقة، حتّى تحصلي على خليط ناعم</li>
                            <li>أحضري قالب الكيك ثمّ ادهنيه بالزيت، والقليل من الدّقيق، وحرّكيه في القالب حتى يغطّي
                                كافّة
                                جوانب القالب ثم تخلّصي من الدّقيق الزّائد</li>
                            <li>اسكبي بعد ذلك خليط الكيك في القالب. ثمّ سخّني الفرن على درجة حرارة 180 مئوي، وأدخلي
                                الكيك
                                في الفرن لمدّة تتراوح من 30 – 35 دقيقة</li>
                            <li>يتم اختبار نضج الكيك بوضع عود خشبيّ صغيرٍ أو بوضع سكّينة أو شوكة، فإن خرج العود أو
                                السّكين
                                أو الشوكة نظيفاً فهذا يُعد دليلاً على نضج الكيك</li>
                            <li>أخرجي الكيك من الفرن ثم اتركيه على شبك من المعدن لعدّة دقائق، ثم أخرجيه من الصينيّة،
                                واتركيه على الشّبك إلى أن يبرد تماماً وتخلّصي من ورق الزّبدة الذي قمتي بوضعه مسبقاً،
                                وضعي
                                الكيك في طبق التّقديم</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal42" tabindex="-1" role="dialog" aria-labelledby="myModal42">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">كيكة الاناناس</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربع بيضات متوسطات الحجم</li>
                            <li>كوب من السكر ومن الأفضل أن يكون مطحوناً</li>
                            <li>مئة وخمسون غراماً من الزبدة، ومن الأفضل أن تكون ليّنة</li>
                            <li>كوبان من الطحين، وحتى يكون قوام الكيكة جميلاً من الأفضل أن تنخلي الطحين</li>
                            <li>ملعقة صغيرة من الفانيلا</li>
                            <li>ملعقة صغيرة من البيكنج باودر</li>
                            <li>كوب من عصير الأناناس</li>
                            <li>علبة شرائح أنانس</li>
                            <li>كوب من السكر</li>
                            <li>ملعقتان كبيرتان من الماء</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <h5 style="color:blue">تحضير الكراميل</h5>
                            <ul>
                                <li>ضعي كوب السكر وملعقتين من الماء في مقلاة، وضعيهم على الغاز مع التحريك إلى أن يتحوّل
                                    لون
                                    السكر إلى ذهبي، ثم صبّيه سيدتي في صينية صنع الكيك</li>
                            </ul>
                            <li>ضعي شرائح الأناناس فوق الكراميل في صينية تحضير الكيك وصفطيهم بشكل جيّد</li>
                            <li>في وعاء ضعي أربع بيضات، وكوب من السكر المطحون، و الزبدة اللينة و اخفقيهم جيّداً حتى
                                يتجانس
                                الخليط</li>
                            <li>ثم ضيفي كوبين من الطحين، وملعقة صغيرة من الفانيلا، وملعقة صغيرة من البيكنج باودر،
                                واخلطهم
                                جيدا إلى أن يصبحوا خليطاً متجانساً</li>
                            <li>ضعي هذا الخليط المتجانس فوق الأناناس في صينية صنع الكيك، وعليكِ مراعاة أن يكون الخليط
                                على
                                مستوى واحد</li>
                            <li>ضعي الصينية في الفرن على درجة حرارة 180 لمدة 45 دقيقة حتى ينضج</li>
                            <li>أخرجيها بعد ذلك من الفرن، واتركيها حتّى تبرد قليلاً ثمّ قدّميها</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal43" tabindex="-1" role="dialog" aria-labelledby="myModal43">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الكيكة الإسفنجية بالشوكولاتة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربع بيضات</li>
                            <li>ثلاثة أرباع كوب من الطحين</li>
                            <li>ثلاثة أرباع كوب من السكر ناعم ملعقة صغيرة فانيلا</li>
                            <li>ثلاثة أرباع ملعقة صغيرة باكينج باودر</li>
                            <li>ملعقة كبيرة نشا</li>
                            <li>كاكاو بودرة غير محلى</li>
                            <li>النكهة التي تحبين سواء فواكه أو برتقال أو فراولة أو غيرها من النكهات</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>ضعي النشا، والطحين، والباكنج باودر، والكاكاو معاً واخلطيهم جيداً، وقومي بنخلهم جيداً</li>
                            <li>كوني حريصة جداً على الكمية التي ستقومين بتحضيرها، بأن تضعيها في إناء يسعها تماماً، حتى
                                لا
                                تهبط وتخسر كثافتها</li>
                            <li>اجلبي الصينية التي تودين عمل الكيكة الإسفنجية فيها، ادهنيها بالقليل من السمنة، ثم قومي
                                بإضافة الطحين واتركيها جانباً إلى أن تقومي بتحضير مكونات الكيكة اللإسفنجية</li>
                            <li>افقسي البيض في وعاء، أضيفي إليهم الفانيلا أو النكهة التي تحبين</li>
                            <li>اخلطيهم جيداً في المضرب أو الملعقة الكهربائية في أثاء خلطك للخليط قومي بإضافة السكر
                                إليهم،
                                واستمري في خلطهم جيداً، إلى أن تتكثف المكوّنات ويزيد حجمها كثيراً</li>
                            <li>أوقفي المضرب ولا تعودي إلى استخدامه</li>
                            <li>أضيفي القليل من الطحين واستمري في التحريك جيداً، قليلاً قليلاً قومي بإضافة الطحين مع
                                الاستمرار في التحريك وببطء</li>
                            <li>يمكنك بعد أن تنتهي من خلط المقادير إضافة نكهة الفراولة أو البرتقال أو الأناناس أو
                                غيرها، إن
                                أحببت</li>
                            <li>اسكبي الخليط في الصينيّة التي تريدين وضعها في الفرن، ثم قومي بتسخين الفرن بالنار، بعد
                                ذلك
                                أدخلي الصينية</li>
                            <li>اتركي الصينية في الفرن مدة ساعة تقريباً ولا تحاولي فتح الفرن أبداً خلال هذه المدة، بعد
                                انتهاء الساعة</li>
                            <li>اتركيها خارجاً بعضاً من الوقت، بعد التأكد من أنّها بردت، قومي بقسمها من الوسط كي تضعي
                                الحشوة، كشرحات من الفواكه، أو المكسرات قومي بتزيين وجهها بالكريمة وما شئت من المكسرات</li>
                            <li>زيني الكيكة كما يحلو لك بكريمة مخفوقة أو كريمة الزبد</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal44" tabindex="-1" role="dialog" aria-labelledby="myModal44">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">تورتة عيد الميلاد</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>اثنتا عشرة بيضة</li>
                            <li>ثلاث ملاعق صغيرة فانيلا</li>
                            <li>رشة ملح</li>
                            <li>كوب ونصف سكر</li>
                            <li>ست ملاعق كبيرة بودرة الكاكاو</li>
                            <li>ست ملاعق كبيرة زبدة مذابة</li>
                            <li>
                                <h5 style="color:blue">مكوّنات جناش الشوكولاتة</h5>
                                <ul>
                                    <li>ألف وخمسمئة غرام من الشوكولاتة الداكنة</li>
                                    <li>خمسة أكواب كريمة للخفق</li>
                                    <li>كوب واحد زبدة</li>
                                    <li>أربع ملاعق كبيرة سكر بوردة للتزيين</li>
                                </ul>
                            </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اخفق البيض مع السكر والملح والفانيلا في وعاء حتى يكبر الحجم ويتضاعف</li>
                            <li>انخل بوردة الكاكاو وأضفها لخليط البيض، ثمّ أضف الزبدة المذابة واخلطها مع المكوّنات</li>
                            <li>أحضر صينية مخصصة للخَبز وغطّها بورق الزبدة واسكب فيها خليط الكيك واخبزها في فرن درجة
                                حرارته
                                175 درجة مئوية لمدة عشر دقائق</li>
                            <li>أخرج الصينية من الفرن وغطّ الكيك بمنشفة حتى يُصبح جاهزاً للاستخدام</li>
                            <li>
                                <h5 style="color:blue">تحضير جناش الشوكولاتة</h5>
                                <ul>
                                    <li>ضع كريمة الخفق مع الزبدة في وعاء، وارفع الوعاء على النار حتى تغلي المكوّنات
                                        معاً</li>
                                    <li>أضف الكريمة الساخنة للشوكولاتة تدريجياً مع التحريك، واتركها تبرد حتى تصبح كثيفة
                                        بالدرجة المناسبة للفرد</li>
                                </ul>
                            </li>
                            <li>افرد نصف كمية الجناش على الكيك ومن ثم لُفّها على شكل جذع شجرة</li>
                            <li>قطع جزءًا من طرف الجذع وألصقه على جوانب الكيك بكمية قليلة من الجناش</li>
                            <li>غطّ الجذع بالجناش وعلّم عليه بالشوكة ليصبح على شكل خشب، وزيّنه بالسكر البوردة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal45" tabindex="-1" role="dialog" aria-labelledby="myModal45">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">تشيز كيك بصوص الفراولة </h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>علبة بسكويت شاي مطحون</li>
                            <li>نصف إصبع من الزبدة</li>
                            <li>ثلاث ملاعق صغيرة من الدقيق</li>
                            <li>نصف كوب من الماء</li>
                            <li>علبتان من القشطة</li>
                            <li>علبتان من جبنة كيري</li>
                            <li>أربع بيضات</li>
                            <li>كوب من السكر</li>
                            <li>ملعقة صغيرة من الفانيليا</li>
                            <li>فراولة مثلجة أو أي نوع من الفواكه</li>
                            <li>علبة جلي من نوع الفاكهة نفسه</li>
                            <li>نصف كوب من الماء</li>
                            <li>ملعقة كبيرة من السكر</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>يرص البسكويت والزبدة في صينية ذات قاعدة متحركة، ثم يوضع في الثلاجة لحين إعداد الخلطة
                                الثانية</li>
                            <li>(تخلط المجموعة الثانية في الخلاط ثم تصب في الصينية، وتدخل الفرن لمدة ساعة على نار
                                متوسطة
                                (160م</li>
                            <li>تُخلط عشر حبات فراولة في الخلاط، ثم توضع على النار مع إضافة الماء والجلي والسكر، وتُترك
                                حتى
                                تغلي ثمّ تُصبّ على الكيك بعد استوائها وتُزيّن بحبات الفراولة، ثم تترك في الثلاجة حتى
                                تبرد</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal46" tabindex="-1" role="dialog" aria-labelledby="myModal46">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">التشيز كيك بالجيلي</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربعمئة غرام من البسكويت المطحون</li>
                            <li>ثلاثة أرباع إصبع زبدة مذوبة</li>
                            <li>ملعقتان كبيرتان من السكر</li>
                            <li>كوبان من الجبن الكريمي</li>
                            <li>علبة حليب مكثف مُحلّى</li>
                            <li>ربع كوب من عصير الليمون</li>
                            <li>ملعقة صغيرة من الفانيلا</li>
                            <li>ظرف جيلاتين، أو ملعقة كبيرة من الجيلاتين</li>
                            <li>مغلف جيلي من الفراولة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نطحن البسكويت طحناً ناعماً ثمّ نضيف الزبدة المذابة والسكر</li>
                            <li>نخلط المكوّنات حتى تتجانس، ثمّ نضعها في كاسات تقديم زجاجية مرتبة</li>
                            <li>نضع الكاسات على جبن ونباشر بصنع طبقة الجبنة</li>
                            <li>نضع الجبن الكريمي في وعاء الخلاط الكهربائي ونخلط حتى يصبح كريمي</li>
                            <li>نضع الحليب المكثّف المحلى تدريجياً مع الخلط المستمر</li>
                            <li>نذوب الجيلاتين بالقليل من الماء المغلي ونضيف للمزيج</li>
                            <li>نضيف عصير الليمون مع الفانيليا ونخلط من جديد</li>
                            <li>نوزّع طبقة الجبن بالتساوي في الكاسات فوق البسكويت</li>
                            <li>نضع الكاسات في الثلاجة مدة ثلاث ساعات حتى يتماسك</li>
                            <li>نذوّب الجيلي في الماء المغلي ونتركه حتى يبرد، ثمّ نسكبة بحذر فوق التشيز كيك</li>
                            <li>ندخل الكاسات إلى الثلاجة من جديد لساعتين أخرتين</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal47" tabindex="-1" role="dialog" aria-labelledby="myModal47">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">تشيز كيك الزبادي بالفانيلا</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>
                                <h5 style="color:blue">الطبقة الأولى</h5>
                                <ul>
                                    <li>كوبان من بسكويت دايجستيف، مطحون</li>
                                    <li>إصبع من الزبدة، الذائبة</li>
                                </ul>
                            </li>
                            <li>
                                <h5 style="color:blue">الطبقة الثانية</h5>
                                <ul>
                                    <li>ستمئة غرام، ثلاث علب من جبنة الكريمي، بدرجة حرارة الغرفة</li>
                                    <li>ثلاث بيضات</li>
                                    <li>ثلاثة أرباع الكوب من السكر</li>
                                    <li>نصف كوب من اللبن الزبادي</li>
                                    <li>كوب وربع من الكريمة</li>
                                    <li>ملعقة كبيرة من النشا</li>
                                    <li>ملعقة صغيرة من بشر قشر الليمون</li>
                                    <li>ربع ملعقة صغيرة من الملح</li>
                                    <li>عود من الفانيلا، أو ثلاث ملاعق صغيرة من الفانيلا السائلة</li>
                                </ul>
                            </li>
                            <li>
                                <h5 style="color:blue">الطبقة الثالثة</h5>
                                <ul>
                                    <li>أي نوع حشوة الباي الجاهزة</li>
                                </ul>
                            </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>افركي الزبدة مع البسكويت وافرديها في قالب التشيز كيك وارفعيها للحواف مع الضغط عليها</li>
                            <li>ضعيها في الثلاجة لمدة نصف ساعة حتى تتماسك</li>
                            <li>افتحي عود الفانيلا وأخرجي منه الحبيبات</li>
                            <li>اخفقي البيض مع الملح والفانيلا وبشر قشر الليمون، ثم أضيفي السكر واخفقي مجدداً</li>
                            <li>أضيفي الجبنة واللبن الزبادي، والكريمة والنشا واخفقي المزيج جيداً</li>
                            <li>لفي القالب بورق الألمنيوم من القاعدة وحتى الحواف، حتى لا يتسرب إليه الماء</li>
                            <li>ضعي في صينية ماء دافئاً</li>
                            <li>ضعي الخليط في القالب واخبزيه في فرن على درجة حرارة 140 مئويّة مدة ساعة وربع</li>
                            <li>أخرجي القالب من الفرن واتركيه حتى يبرد تماماً داخل القالب ثم ضعيه في الثلاجة يوماً
                                كاملاً
                                قبل التقديم</li>
                            <li>زيّني التشيز كيك حسب الرغبة ثم قدميه</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal48" tabindex="-1" role="dialog" aria-labelledby="myModal48">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">تشيز كيك بالبرتقال</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>خليط كيك بنكهة البرتقال</li>
                            <li>علبتان من القشطه</li>
                            <li>علبة كريمة الخفق كبيرة الحجم</li>
                            <li>مغلف كريم كراميل</li>
                            <li>علبة من ميراند البرتقال</li>
                            <li>مئتا غرام، كوب من الجبن الكريمي</li>
                            <li>برتقاله للتزيين</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نخبز الكيكة كما هو موضح بتعليمات العلبة</li>
                            <li>نخرج الكيكة من الفرن ونتركها حتى تبرد تماماً، وبعدها نشكل ما يشبه الخندق في الكيكة، حيث
                                إننا نترك مسافة سنتيمترين من الحواف ونفرغ الكيكه من المنتصف</li>
                            <li>نبدأ بتفريغ وسط الكيكه بحذر، دون الوصول إلى القاع</li>
                            <li>نخفق كريمة الدريم ويب والقشطة والجبن مع بعض حتى يصبح الخليط سلساً وخالياً من الكتل</li>
                            <li>نسكب مزيج الجبن على الكيكة ونوزعها بالتساوي ثم نزينها بالبرتقال</li>
                            <li>نضعها بالثلاجه مدة لا تقل عن أربع ساعات، وهي مغطاة حتى لا يجف الكيك</li>
                            <li>نحضر الكريم كراميل ونضع عليه نصف علبة ميراندا برتقال ونضعهم على النار حتى يغلي المزيج
                                ونتركه حتى يبرد تماماً</li>
                            <li>نسكب خليط الكريم كراميل على الكيكة ثم نعيدها للثلاجة مدة ساعتين على الأقل</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal49" tabindex="-1" role="dialog" aria-labelledby="myModal49">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">التشيز كيك بالشوكولاتة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>مئة وخمسة وعشرون غراماً من الزبدة بدرجة حرارة الغرفة</li>
                            <li>مئتان وخمسون غرام من بسكويت الأوريو</li>
                            <li>خمسمائة غرام من جبن كريميّة</li>
                            <li>ثلاثمائة ملل من القشطة</li>
                            <li>مئتان غرام من الشوكولاتة الداكنة المذوّبة</li>
                            <li>ملعقة صغيرة من خلاصة الفانيلّا</li>
                            <li>
                                <h5 style="color:blue">للتزيين</h5>
                                <ul>
                                    <li>رقائق الشوكولاتة</li>
                                    <li>صلصة الشوكولاتة</li>
                                </ul>
                            </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نضعُ الزبدة والبسكويت في الخلاط الكهربائيّ، ثمّ نمزجُهم جيّداً حتّى تتشكل عجينة طرية</li>
                            <li>نرصّ العجينة في قاع قالب التشيز كيك</li>
                            <li>نضع في الخلاط الكهربائيّ بعد غسله كل من الشوكولاتة المذابة والقشطة</li>
                            <li>ثمّ نخلط المكوّنات بشكل جيد</li>
                            <li>نُضيف جبن الكريم والفانيليا، ثمّ نخلط مجدداً لمدّة أربع إلى خمس دقائق حتّى نحصل على
                                قوام
                                متجانس</li>
                            <li>نسكب المزيج السابق فوق البسكويت والزبدة</li>
                            <li>نضع التشيز كيك في الفريزر لمدّة أربع ساعات على الأقلّ حتّى يتجمّد</li>
                            <li>نزيّن وجهه برقائق الشوكولاتة، ونقدّمه بارداً مع صلصة الشوكولاتة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal50" tabindex="-1" role="dialog" aria-labelledby="myModal50">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">السينابون</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوبان من الطحين</li>
                            <li>حبّة واحدة من البيض</li>
                            <li>نصف كوب من الحليب السائل</li>
                            <li>ربع كوب من السكر</li>
                            <li>فنجان من السكر</li>
                            <li>ربع كوب من الزبدة الطريّة</li>
                            <li>ملعقة صغيرة من الفانيلا</li>
                            <li>ملعقة صغيرة من البيكنغ باودر</li>
                            <li>نصف ملعقة كبيرة من الخميرة الفوريّة</li>
                            <li>ثلاث ملاعق صغيرة من القرفة</li>
                            <li>ثلاث ملاعق صغيرة من مسحوق الكاكاو</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>أحضر وعاءً وقم بخلط الطحين والبيكنغ باودر جيداً حتى تتوزّع مكوناتهما</li>
                            <li>أضف كميّة الخميرة الفوريّة المطلوبة إلى ربع كوب السكر وحركهما جيداً ثُمّ ذوّبها بالحليب
                                السائل</li>
                            <li>قم بتذويب الزبدة بالمقلاة</li>
                            <li>في وعاء آخر قم بخفق البيض مع الفانيلا وأضف لهما الزبدة الذائبّة واخفقهم مرة أخرى معاً،
                                ومن
                                ثُمّ أضف مزيج الخميرة والسكّر والحليب السابق مع الخفق، وبعدها أضف الطحين بشكل تدريجيّ،
                                وابدأ بالعجن جيداً حتى تتشكل لديك عجينة متجانسة، ومن ثُمّ ضع العجينة في كيس نايلون أو
                                كيس
                                بلاستيكيّ، وأدخلها إلى الثلاجة حوالي أربع ساعات</li>
                            <li>في هذه الأثناء قم بتحضير الحشوة، وذلك بإحضار وعاء ووضع كل من القرفة وفنجان السكّر
                                ومسحوق
                                الكاكاو فيه واخلطها جيداً حتى تصبح متمازجة ومتجانسة</li>
                            <li>قم بتحمية الفرن قبل أن تخرج العجينة من الثلاجة بلحظات</li>
                            <li>بعد انتهاء الأربع ساعات أخرج العجينة وقم بفردها على سطح نظيف، وقم بدهن الوجه بالزبدة</li>
                            <li>قم بوضع خليط الحشوة على العجينة، ومن ثُمّ قم بلفّها كما تُلفّ _ السويس رول _، وقم
                                بتقطيعها
                                إلى دوائر بسُمك مُناسب</li>
                            <li>أحضر صينيّة مناسبة للخبز وضع فيها دوائر لفائف القرفة، وأدخل الصينيّة إلى الفرن حى تنضج
                                ومن
                                ثُمّ ضعها تحت _ الشوايّة _ لكي يحمرّ وجهها</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal51" tabindex="-1" role="dialog" aria-labelledby="myModal51">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">دونات بالسكر الناعم</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>خمسة أكواب من الطحين</li>
                            <li>أصبع من الزبدة</li>
                            <li>ملعقة كبيرة من الخميرة</li>
                            <li>ربع ملعقة صغيرة من الملح</li>
                            <li>نصف كوب من السكر</li>
                            <li>كوب ونصف من الحليب السائل الفاتر</li>
                            <li>بيضتان</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>فعّلي الخميرة بوضعها بالحليب الدافئ مع السكر، ثمّ ضعي الخميرة جانباً حتى تتفعّل وذلك من
                                خلال تكوّن طبقة ذات رغوة ورائحة الخميرة النّفاثة</li>
                            <li>اخلطي الطحين مع الملح، ومن ثم أضيفي إليه الزبدة المذابة وافركيهم جيداً</li>
                            <li>اعملي حفرة في وسط الطحين وضعي فيها الخميرة والبيض، ثمّ اعجني جميع المواد إلى أن تحصلي
                                على
                                عجينة متماسكة</li>
                            <li>ضعي العجينة في مكان دافئ لمدة ساعتين أو أكثر، حتى تخمر ويتضاعف حجمها</li>
                            <li>عندما تتخمّر العجينة ويتضاعف حجمها فإنها ستصبح جاهزة للاستعمال، فعندها عليكِ القيام
                                بتقطيعها إلى 15 بنفس السمك تقريباً، مع إعطائها شكل الكرة وضعيها بعد ذلك على صينيّة
                                مدهونة
                                بالزبدة، واتركيها إلى أن تخمر ويتضاعف حجمها مرة ثانية</li>
                            <li>يمكنك قليها كما هي، أو تتفريغ وسطها باستخدام مِقصّ صغير</li>
                            <li>اقليها بالزيت على نار متوسطة واستمري بالتقليب إلى أن تتلون من الجهتين</li>
                            <li>بعد أن تبرد احشي الدونات بأي شيء ترغبين به؛ أورشي على وجهها السكر الناعم الّلذيذ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal52" tabindex="-1" role="dialog" aria-labelledby="myModal52">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">السويسرول</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ربع كوب من الدقيق</li>
                            <li>ربع كوب من بودرة الكاكاو</li>
                            <li>ربع ملعقة صغيرة من الملح</li>
                            <li>نصف ملعقة صغيرة بيكنج باودر</li>
                            <li>خمس بيضات كبيرات الحجم، ونفصل البياض عن الصفار</li>
                            <li>كوب من السكر الناعم</li>
                            <li>ملعقة صغيرة من الفانيليا البودرة أو السائلة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>سخّني الفرن عند درجة حرارة 180مْ وثبتي الرفّ الشبكي الأوسط</li>
                            <li>انخلي الدقيق في وعاء عميق ثم أضيفي الملح، والبيكنج باودر، والكاكاو على الخليط</li>
                            <li>ثبتي المضرب الشبكي في وعاء الخلاط ثم أضيفي بياض البيض، ثم شغليه على سرعة متوسطة إلى أن
                                يتجانس، ثم ضعيه في طبق عميق</li>
                            <li>ثبتي المضرب الشبكي في وعاء الخلاط بعد تنظيفة، ثم أضيفي صفار البيض، السكر الناعم،
                                والفانيليا، وشغليه على سرعة متوسطة إلى أن يتجانس ويصبح الخليط كريمياً</li>
                            <li>أضيفي خليط الدقيق الذي قمتي بتحضيره في الخطوة الأولى، ثم اخفقيه على سرعة متوسطة إلى أن
                                يتجانس</li>
                            <li>أضيفي الخليط على البياض الذي قمتي بخفقه مسبقاً، ثم قلبيه بحذر وهدوء إلى أن يتجانس
                                تماماً،
                                ثمّ أحضري صينية مستطيلة قصيرة الحوافّ وضعي فيها قطعة من ورق الزبدة، ثم وزّعي الخليط في
                                الصينية لتغطّي قاع الصينية تماماً</li>
                            <li>اخبزي كيكة السويسرول لمدة خمس عشرة دقيقة، ثم أخرجيها من الفرن، ضعي كمية من سكر البودرة
                                كي
                                لا تلتصق بورق الزبدة، ضعي قطعة من ورق الزبدة على وجه الكيك، ثم اقلبي الصينية مباشرة
                                وانزعي
                                قطعة ورق الزبدة التي على وضعتيها في الصينية (الورقة الموجودة في القاع) ثم أعيدي وضع
                                الكيكة
                                من الجهة الثانية التي وضعت ورق الزبدة عليها، ثم لفّي الكيك مع ورق الزبدة على هيئة لفافة
                                ثم
                                اتركيها لتبرد</li>
                            <li>
                                <h5 style="color:blue">تحضير صلصة الشوكولاتة</h5>
                                <ul>
                                    <li>ضعي الكريمة في قدر سميك القاعدة، ويفضل أن ستانلس ستيل على نار متوسّطة لتسخّنها،
                                        ثم
                                        أضيفي الشوكولاتة والعسل أذيبي الشوكلاتة</li>
                                    <li>ثبتي المضرب الشبكي في وعاء الخلاط ثم ضعي الكريمة في وعاء وشغّليه على سرعة
                                        متوسّطة
                                        لمدّة ثلاث دقائق إلى أن يصبح كثيفاً</li>
                                </ul>
                            </li>
                            <li>
                                <h5 style="color:blue">تشكيل السويسرول </h5>
                                <ul>
                                    <li>مدّي الكيكة بحذر ثمّ تخلصي من ورق الزبدة</li>
                                    <li>وزّعي كريمة الشوكولاتة على الكيكة، ثمّ لفّيها بحرص لتحصلي على لفافة متماسكة</li>
                                    <li>ضعي السويسرول في الثلاجة إلى أن يبرد</li>
                                </ul>
                            </li>
                            <li>ضعي السويسرول في طبق التقديم، ثم وزّعي صلصلة الشوكولاتة عليها ثمّ قدميها وأضيفي إليها
                                بعض
                                المكسرات لتزيين</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal53" tabindex="-1" role="dialog" aria-labelledby="myModal53">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">كيكة الكوكيز</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوبان من دقيق القمح</li>
                            <li>كوب وربع من الزبدة، أو ما يعادل أصبعين و نصف</li>
                            <li>كوب من السكر البني، أو يمكنكِ أن تستخدمي السكر الأبيض العادي</li>
                            <li>ثلاث ملاعق صغيرة من الفانيلا السائلة</li>
                            <li>كوبان من السكر الأبيض الناعم المطحون</li>
                            <li>ربع كوب من الكاكاو على شكل بودرة</li>
                            <li>ملعقتان كبيرتان من الكريمة السائلة</li>
                            <li>بيضة واحدة</li>
                            <li>صفار بيضة</li>
                            <li>ملعقتان صغيرتان من نشا الذرة</li>
                            <li>"ملعقة صغيرة من البيكنج صودا "صودا الخبيز</li>
                            <li>رشّتان من الملح</li>
                            <li>كوب ونصف من رقائق الشوكولاتة الصغيرة، ويمكنك أن تستخدمي أي نوع تفضلينه من رقائق
                                الشوكولاتة
                                سواء رقائق الشوكولاتة المُحلّاة، أو نصف المُحلّاة، أو رقائق الشوكولاتة بالحليب أو
                                بالكراميل
                                أو غيرها</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>أخرجي الزبدة من الثلاجة قبل عشرين إلى ثلاثين دقيقة من البدء بالتحضير، حتى تكون الزبدة
                                طريّة
                                وبدرجة حرارة الغرفة ويسهل مزجها مع المكوّنات الأخرى</li>
                            <li>شغّلي الفرن على درجة حرارة 180 درجة مئويّة حتى يكون ساخناً عند وضع قالب الكيك فيه</li>
                            <li>أضيفي كوب السكر البني وثلاثة أرباع كوب من الزبدة الطريّة، إلى وعاء كبير واخفقيهما
                                جيّداً
                                لمدة دقيقتين أو ثلاثة حتى يتجانسا معاً ويكون المزيج ناعم القوام، وذلك باستخدام خلاط
                                الكيك
                                الكهربائي</li>
                            <li>أضيفي البيضة، وصفار البيضة، وملعقتين من الفانيلا السائلة، إلى الوعاء الكبير، واخفقي
                                لمدّة
                                أربع إلى خمس دقائق حتى يدخل الهواء إلى المزيج</li>
                            <li>ضع الطحين ونشا الذرة، والبيكنج صودا، ورشة من الملح في وعاء آخر، واخلطي المكوّنات معاً
                                جيدا</li>
                            <li>أضيفي خليط الطحين الجاف إلى الوعاء الأول وذلك بالتدريج وعلى دُفعات،مع التحريك بشكلٍ
                                مستمرٍّ
                                أثناء الإضافة</li>
                            <li>أضيفي رقائق الشوكالاتة الصغيرة إلى الوعاء الكبير، وقلّبي العجين برفق حتى تدخل الرقائق
                                في
                                العجين</li>
                            <li>ضعي عجين الكيك المتماسك في صينية للفرن، ثم ضعي الصينية في الفرن الساخن لمدة عشر إلى خمس
                                عشرة دقيقة، ثم أخرجيها وغطّيها بورق القصدير، ثمّ أعيديها للفرن لمدة عشر إلى خمس عشرة
                                دقيقة
                                أخرى، وذلك يعتمد على حجم الصينية وبالتالي سماكة العجين</li>
                            <li>تأكدي من أنّ الصينيّة قد بردت تماماً قبل أن تحاول إخراج الكيك منها حتى لا تتفتت أو
                                تلتصق
                                بقاع وجوانب الصينية</li>
                            <li>ضعي السكر الناعم المطحون، وبودرة الكاكاو في وعاء، ونخّلي المكوّنات بتمريريها من خلال
                                مصفاة
                                (غربال) بفتحات صغيرة، حتى تتخلّص من أيّ كتل</li>
                            <li>ضعي بقيّة كميّة الزبدة في وعاءٍ صغيرٍ واخفقيها جيّداً لمدة دقيقة أو دقيقتين، حتى تصبح
                                خفيفة
                                وناعمة ثم أضيفيها إلى الوعاء الكبير الأوّل الّذي يحوي السكر والكاكاو، واخلطيهم جيّداً
                                لمدة
                                دقيقتين ثم أضيفي الكريمة السائلة، وباقي كميّة الفانيلا السائلة وحرّكي المزيج جيّداً
                                لعدة
                                دقائق حتى يتماسك، وإذا أردتيه أن يكون طريّاً أكثر أضيفي بضع ملاعق صغيرة من الحليب أو
                                الكريمة السائلة</li>
                            <li>غطّي الوعاء ثم ضعيه في الثلاجة لمدة عشرة دقائق على الأقل قبل أن تزيني وجه الكيك به</li>
                            <li>قدّمي الطبق مع فنجان من القهوة، أو كوب من الشاي، أو أي مشروب تفضليه سواء كان ساخناً أو
                                بارداً</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal54" tabindex="-1" role="dialog" aria-labelledby="myModal54">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">تارت الليمون بالمانجا</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>مئتا غرام من الدقيق الأبيض</li>
                            <li>خمسون غراماً من السكر</li>
                            <li>فانيلا</li>
                            <li>ماء</li>
                            <li>رشة ملح</li>
                            <li>مئة غرام من الزبدة الباردة</li>
                            <li>ملعقة من الزبادي</li>
                            <li>
                                <h5 style="color:blue">مكوّنات الحشوة</h5>
                                <ul>
                                    <li>كوب من الكريمة السائلة</li>
                                    <li>أربع ملاعق كبيرة من السكر</li>
                                    <li>ملعقة كبيرة من النشا</li>
                                    <li>نصف كوب من عصير الليمون</li>
                                    <li>شرائح من المانجا والليمون</li>
                                    <li>صفار بيضتين</li>
                                </ul>
                            </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اخلط الزبدة مع الدقيق حتى يصبح قوامه مثل الرمل</li>
                            <li>أضف السكر والملح والفانيلا، والقليل من الماء، ثمّ ضعها في الثلاجة لمدّة عشر دقائق</li>
                            <li>ضع العجينة بين ورقتين زبدة في صينية، وأدخلها في الفرن بعد تخريمها بالشوكة</li>
                            <li>ضع خليط الحشو على التارت وزينها بالمانجا و الليمون لتقديمها</li>
                            <li>
                                <h5 style="color:blue">لتحضير الحشو</h5>
                                <ul>
                                    <li>اخلط صفار البيض مع السكر والنشا وعصير الليمون</li>
                                    <li>سخّن الكريمة على النار، ثمّ أضفها تدريجياً على الخليط وقلّبها، ثمّ ضعهم مرة
                                        أخرى
                                        على النار</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal55" tabindex="-1" role="dialog" aria-labelledby="myModal55">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">سويسرول بحشوة الشوكولاتة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>خمسة وسبعون غراماً من الطحين</li>
                            <li>خمسة وعشرون غراماً من الكاكو</li>
                            <li>خمسة وسبعون غراماً من السكر</li>
                            <li>نصف كوب ماء</li>
                            <li>ثلاث بيضات</li>
                            <li>
                                <h5 style="color:blue">مكوّنات الحشوة</h5>
                                <ul>
                                    <li>مئة غرام زبدة لينة</li>
                                    <li>مئة غرام شوكولاتة ذائبة</li>
                                    <li>مئة غرام سكر بودرة</li>
                                    <li>كوب رقائق الشوكولاتة</li>
                                </ul>
                            </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اخفقي البيض والسكر في الخلاط الكهربائي حتّى يتكون خليط كريمي</li>
                            <li>اخلطي المكوّنات الجافة معاً، ثمّ ضعيها مع الماء فوق خليط البيض</li>
                            <li>قلبي المزيج جيداً حتى تتمتزج المكوّنات</li>
                            <li>اخبزي الكيك في فرن حامي لمدّة 12 دقيقة</li>
                            <li>عندما ينضج اقلبيه على ورق الزبدة ولفيه، واتركيه بيرد</li>
                            <li>
                                <h5 style="color:blue">لتحضير الكريمة</h5>
                                <ul>
                                    <li>اخفقي الزبدة مع السكر في الخلاط الكهربائي حتّى يتكون مزيج خفيف</li>
                                    <li>ضعي الشوكولاتة الذائبة واخلطي حتى تتجانس المكونات</li>
                                </ul>
                            </li>
                            <li>افتحي الكيكة وافردي خليط الكريمة ثم لفيها من جديد</li>
                            <li>رشي القليل من السكر الناعم ورقائق الشوكولاتة على الوجه</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal56" tabindex="-1" role="dialog" aria-labelledby="myModal56">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">البقلاوة السورية</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>عبوتان من عجينة البقلاوة، -متوفرة في السّوبر ماركت</li>
                            <li>كوبان من الفستق الحلبي المحمّص والمجروش بشكلٍ خشن</li>
                            <li>نصف كوب من السّكر</li>
                            <li>كوبان من الزّبدة المذابة والمغليّة مسبقاً</li>
                            <li>كوب من الفستق الحلبي المحمّص والمطحون ناعماً</li>
                            <li>ملعقة من ماء الورد</li>
                            <li>ملعقة من ماء الزّهر </li>
                            <li>قطر</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>حمصي الفستق الحلبي بدون أيِّ إضافات وانتبهي ألاّ يحترق، ثمَّ اتركيه ليبرد، وخذي كوبين
                                من
                                الفستق المحمص واطحني كوباً منهما طحناً خشناً، والآخر طحناً ناعماً</li>
                            <li>افتحي عبوة عجينة البقلاوة وغطّيها بفوطة قطنيّة حتّى لا تتعرّض للجفاف</li>
                            <li>خذي ورقة من عجينة البقلاوة وادهنيها بالزّبدة المذابة</li>
                            <li>ضعي ورقة أخرى ثمّ ادهنيها بالزّبدة</li>
                            <li>كرري الخطوات السّابقة حتّى تنهي عبوة عجينة البقلاوة الأولى</li>
                            <li>في وعاءٍ ضعي كوبين من الفستق الحلبي المجروش، ونصف كوب السّكر، وماء الورد وماء الزّهر،
                                ثمَّ
                                قلِّبي المكوِّنات معاً حتّى تختلط معاً</li>
                            <li>أضيفي نصف كوب من الزّبدة المذابة لخليط الفستق، وقلّبي مجدداً حتّى تتجمّع حبات الفستق</li>
                            <li>أحضري صينيّة فرن مستطيلة الشّكل قصيرة الحواف، وادهنيها بالزّبدة وضعي فيها رقائق عجينة
                                البقلاوة المدهونة بالزّبدة. أضيفي خليط الفستق ووزعِّيه بشكل متساوٍ فوق سطح العجينة</li>
                            <li>افتحي العبوة الأخرى من عجينة البقلاوة، وادهنيها طبقاتها بالزّبدة كما ذكرنا سابقاً</li>
                            <li>ضعي عجينة البقلاوة فوق الفستق الحلبي واضغطي على العجينة بيدكِ قليلاً حتّى تلتصق بالفستق</li>
                            <li>أضيفي الزّبدة المذابة المتبقيّة فوق عجينة البقلاوة بأكملها</li>
                            <li>ضعي الصّينيّة في فرنٍ مسخن مسبقاً على درجة حرارة 150 درجة مئويّة، واخبزيها لمدّة خمسٍ
                                وأربعين دقيقة وحمِّريها من أعلى وانتبهي ألاّ تحترق</li>
                            <li>أخرجي الصّينيّة وصبِّي عليها القطر البارد، واتركيها لمدّة ربع ساعة وقطِّعيها على شكل
                                مستطيلاتٍ مائلة. زيّنيها بالفستق الحلبي المطحون</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal57" tabindex="-1" role="dialog" aria-labelledby="myModal57">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">البقلاوة البيضاء</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلوغرام من عجينة البقلاوة</li>
                            <li>أربع كؤوس من الزبدة</li>
                            <li>خمس كؤوس ونصف من الجوز</li>
                            <li>ثلاث كؤوس من الفستق الحلبي</li>
                            <li>كأسان من السكر</li>
                            <li>ربع ملعقة كبيرة من القرفة</li>
                            <li>
                                <h5 style="color:blue">مكوّنات القطر</h5>
                                <ul>
                                    <li>كأس ونصف من السكر</li>
                                    <li>كأس وربع من الماء</li>
                                    <li>نصف ملعقة كبيرة من كلّ من: ماء الورد، وماء الزهر، وعصير الليمون</li>
                                </ul>
                            </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نضع السكر والماء في وعاء على النار</li>
                            <li>نضيف عصير الليمون، وماء الورد، وماء الزهر، ونخلط المكوّنات جيداً حتى تمتزج</li>
                            <li>نرفع القدر عن النار، ونتركه جانباً حتى يبرد</li>
                            <li>ندهن قطع العجينة بالزبدة، ثمّ نضعها فوق بعضها</li>
                            <li>نضع القرفة، والسكر، والجوز في وعاء متوسط الحجم، ثمّ نخلط من جديد</li>
                            <li>نجمع أطراف العجينة مع بعضها، ونترك وسطها ظاهراً</li>
                            <li>ندهن صينيّة الفرن بالقليل من الزبدة، ثمّ نضع العجينة فيها</li>
                            <li>نُسخن الفرن على درجة حرارة 180 درجة مئويّة</li>
                            <li>ندخل الصينيّة في الفرن، ونتركها لمدّة نصف ساعة، ثمّ نرفع درجة الحرارة إلى 230 درجة
                                مئويّة،
                                ونترك الصينيّة لخمس دقائق إضافيّة</li>
                            <li>نُخرج الصينيّة من الفرن، ثمّ نسكب القطر عليها، ونتركها جانباً حتى تبرد</li>
                            <li>ننثر الفستق الحلبي على وجه البقلاوة، ثمّ ننقلها إلى طبق التقدّيم ونقدّمها</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal58" tabindex="-1" role="dialog" aria-labelledby="myModal58">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">أصابع الجلاش بالقشطة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>نصف مغلّف من عجين الجلاش</li>
                            <li>
                                <h5 style="color:blue">القشطة</h5>
                                <ul>
                                    <li>كأسان من الحليب</li>
                                    <li>نصف كأس من السميد الخشن</li>
                                    <li>ملعقتان كبيرتان من السكر</li>
                                    <li>كأس من السمنة المذابة</li>
                                    <li>كأسان من القطر</li>
                                    <li>ملعقتان كبيرتان من الفستق الناعم</li>
                                </ul>
                            </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>جهّزي عجينة الجلاش، بأن تخرجيها من مجمّد الثلاجة، وتدعيها جانباً ريثما تصبح بحرارة
                                الغرفة</li>
                            <li>سخّني الفرن على درجة حرارة مئتين مئويّة</li>
                            <li>
                                <h5 style="color:blue">لتجهيز القشطة</h5>
                                <ul>
                                    <li>ضعي الحليب، والسكر، والسميد في إناء على نار متوسّط الحرارة، وحرّكيهما معاً بشكل
                                        مستمرّ باستخدام ملعقة من الخشب، ريثما يصبح الخليط أكثر كثافة وتماسكاً، ومن ثم
                                        ضعي
                                        قطعة نايلون على وجه القشطة ودعيها لتبرد</li>
                                </ul>
                            </li>
                            <li>ضعي قطعاً من ورق الزبد على الطاولة، وافردي عليها ورقة من عجين الجلاش، بحيث يكون الجانب
                                الأطول من العجين متّجهاً إلى الأمام، ثمّ ادهنيها بالسمن المذاب باستخدام فرشاة المطبخ</li>
                            <li>اثني ورقة العجينة مرتين من الجهة الأقصر، بحيث تتشكّل لديك ثلاث طبقات من العجينة</li>
                            <li>خذي ملعقة كبيرة من حشوة القشطة وضعيها على طرف العجينة، ومن ثم لفّي العجينة على الحشوة
                                من
                                ثلاث إلى أربع لفّات</li>
                            <li>اقطعي لفافة الجلاش الطويلة باستخدام السكين الحادّة إلى قطع أصغر</li>
                            <li>صفّي أصابع الجلاش بجانب بعضها البعض في صينيّة مستطيل الشكل وذات حواف قصيرة، مع الأخذ
                                بعين
                                الاعتبار أن يكون طرف العجينة متّجهاً لأسفل</li>
                            <li>ادهني وجه أصابع الجلاش بالقليل من السمنة</li>
                            <li>أدخلي أصابع الجلاش في الفرن الذي سخنتيه سابقاً، واخبزيها لمدّة ربع ساعة تقريباً أو إلى
                                أن
                                تنضج وتأخذ اللون الذهبيّ</li>
                            <li>أخرجي صينيّة الجلاش من الفرن، ووزّعي عليها القطر فور إخراجها من الفرن</li>
                            <li>ضعي أصابع الجلاش في طبق التقديم، وانثري عليها مجروش الفستق، ثمّ قدّميها</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal59" tabindex="-1" role="dialog" aria-labelledby="myModal59">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عصير الليمون بأوراق النعناع</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>خمس حبات من الليمون الأخضر</li>
                            <li>أوراق نعناع خضراء</li>
                            <li>ربع كوب من السكر</li>
                            <li>كوبان من الماء البارد</li>
                            <li>ثلج</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نقطّع الليمون إلى أنصاف</li>
                            <li>نضغط على الأنصاف واحدة تلو الأخرى في وعاء أو كوب أو استخدام الخلاط أو محضرة الطعام</li>
                            <li>نضيف أوراق النعناع الخضراء للمكونات مع الخلط</li>
                            <li>نضيف كميّةً من الماء لحبات الليمون المعصورة</li>
                            <li>نضيف القليل من السكر تقريباً نصف ملعقة صغيرة منه</li>
                            <li>نحرّك جيداً ليصبح العصير متجاسناً ومركّز الطعم</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal60" tabindex="-1" role="dialog" aria-labelledby="myModal60">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عصير التفاح مع الخوخ</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوب واحد من نكتار عصير التفاح الطبيعيّ</li>
                            <li>ثلاثة أكواب ونصف الكوب من نكتار عصير الخوخ الطبيعيّ</li>
                            <li>خمس حبّات من الخوخ</li>
                            <li>عصير نصف ليمونة</li>
                            <li>مكعبات من الثلج</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>قشّري حبّات الخوخ في الخلاط الكهربائيّ، واهرسيهم جيداّ</li>
                            <li>أضيفي كلّ من نكتار عصير الخوخ، ونكتار عصير التفاح، وعصير الليمون، واخلطيهما جيّداً
                                بالخلًاط
                                حوالي دقيقتين على درجة قليلة من السرعة</li>
                            <li>ضعي مكعبات الثلج في أكواب التقديم ويمكنك أن تتركيها جانباً لمن يرغب بإضافة الثلج،
                                واسكبي في
                                الأكواب العصير الناتج وقدميها باردة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal61" tabindex="-1" role="dialog" aria-labelledby="myModal61">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عصير قمر الدين</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ستمئة غرام من قمر الدين الشرائح المُجّففة</li>
                            <li>كوبان من السكر</li>
                            <li>ستة أكواب من الماء</li>
                            <li>ملعقة كبيرة من ماء الزهر</li>
                            <li>ملعقة كبيرة من ماء الورد</li>
                            <li>أربعة أكواب من الثلج</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>قطّع قمر الدين إلى شرائح ذات حجم متوسط</li>
                            <li>ضع في طنجرة نصف حجم الماء، وأضف له شرائح قمر الدين والسكر</li>
                            <li>ضع الطنجرة على نار ذات حرارة هادئة، وحرّك المكوّنات باستمرار من فترة لأخرى إلى أن تذوب
                                تماماً، ثمّ ضع الطنجرة جانباً إلى أن تبرد</li>
                            <li>أضف إلى خليط قمر الدين الكمية المتبقيّة من الماء، وضع معها ماء الزهر وماء الورد وحرّك
                                بشكلٍ
                                جيّد، ومن الممكن الاستعانة بالخلاط للحصول على خليط أكثر تجانساً</li>
                            <li>كسّر مكعّبات الثّلج وضعها في الأكواب المُخصّصة لتقديم قمر الدين، ثمّ صُبّ فيها العصير
                                وقدّمه</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal62" tabindex="-1" role="dialog" aria-labelledby="myModal62">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عصير الموز بالفانيلا والحليب</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>مئة وخمسون ملليتراً من الحليب</li>
                            <li>علبتان فانيلا شوكولاتة</li>
                            <li>ملعقتان كبيرتان عسل</li>
                            <li>ملعقة كبيرة كريمة طازجة</li>
                            <li>حبة موز كبيرة</li>
                            <li>كمية من الثلج</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اخفق المكوّنات جميعها مع كمية من الثلج، واسكب المخفوق في كاسات التقديم</li>
                            <li>زيّن بالقليل من بشر الليمون وكريمة الشانتي</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal63" tabindex="-1" role="dialog" aria-labelledby="myModal63">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عصير الفراولة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ملعقة كبيرة من عصير اللّيمون الحامض</li>
                            <li>عشر حبّات من الفراولة</li>
                            <li>ملعقة سكر كبيرة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نغسل حبّات الفراولة بشكل جيد أولاً، ثمّ نضعها في الفريزر لمدّة ستين دقيقة أو أكثر من
                                ذلك
                                حسب الرغبة</li>
                            <li>نخلط المكوّنات السابقة مع ثلاثة أرباع كأس من الماء في الخلاط من أجل الحصول على عصير
                                ناعم
                                بأكبر صورة ممكنة، ثمّ نقدّمه بعد صبّه في كاسات العصير، ويمكن تزيين العصير باستعمال قشر
                                اللّيمون</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal64" tabindex="-1" role="dialog" aria-labelledby="myModal64">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عصير المنجا</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ثلاث حباتٍ ناضجة من ثمار المنجا</li>
                            <li>ربع كوب من السكر</li>
                            <li>كوب من الثلج</li>
                            <li>نصف كوب من الماء</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>تقشير حبات المنجا، وتقطيعها على شكل مكعباتٍ متوسطة الحجم، مع الحرص على الاحتفاظ
                                بشريحتين
                                للتزيين</li>
                            <li>إضافة كلٍ من مكعبات المنجا، والثلج، والماء، والسكر في الخلاط الكهربائي، وتشغيله على
                                سرعةٍ
                                متوسطة لبضعة دقائق</li>
                            <li>تصفية العصير الناتج في إبريق التقديم، وصبّه في الأكواب مباشرة</li>
                            <li>تزيين كوب العصير بشريحة من المنجا</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal65" tabindex="-1" role="dialog" aria-labelledby="myModal65">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عصير النعناع مع الليمون</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>نصف كوب من عصير الليمون</li>
                            <li>عشر أوراق نعناع طازج</li>
                            <li>خمس ملاعق كبيرة من السكر</li>
                            <li>كوب من الماء</li>
                            <li>كوب من مكعبات الثلج</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>ضع المكوّنات جميعها في الخلاط الكهربائي واخلطها، ثمّ قدم العصير فوراً</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal66" tabindex="-1" role="dialog" aria-labelledby="myModal66">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عصير الرمّان</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربعة أكواب من حبوب الرمّان</li>
                            <li>كوبان من الماء</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نضع الرمّان في الخلّاط الكهربائي ونخلطه جيّداً</li>
                            <li>نضع العصير مع الماء في قدرٍ على نارٍ متوسّطة ونغليه</li>
                            <li>نصفي المزيج، ثم نضعه في الثلّاجة و نقدمه في أكواب</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal67" tabindex="-1" role="dialog" aria-labelledby="myModal67">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عصير الطماطم</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>اثنتا عشرة ثمرة طماطم متوسطة الحجم مقشرة ومنزوعة النوى</li>
                            <li>عرقا كرفس مفرومان ناعماً</li>
                            <li>نصف كوب من الماء</li>
                            <li>ملعقة صغيرة من صلصة التوباكو -حسب الرغبة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>افرم الطماطم فرماً ناعماً وضعه في الخلاط الكهربائي حتى يتحول قوامه إلى السائل</li>
                            <li>أضف الكرفس وصلصة التوباكو في حين استخدامها واخلط المكوّنات معاً</li>
                            <li>ضع العصير في قدر على النار واتركه يغلي مع الماء مدّة خمس عشرة دقيقة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal68" tabindex="-1" role="dialog" aria-labelledby="myModal68">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الحمص الشامي بالصلصة الحارة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ست ملاعق كبيرة من الحمص الناضج</li>
                            <li>ملعقة كبيرة من عصير الليمون</li>
                            <li>أربع ملاعق كبيرة من صلصة البندورة</li>
                            <li>ستة سنون من الثوم المدقوق</li>
                            <li>رشّة من الملح، والكمون</li>
                            <li>ثلاثة أكواب من الماء</li>
                            <li>ملعقة صغيرة من الصلصة الحارة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نسخّن الماء في قدر ونتركه حتى يغلي تماماً</li>
                            <li>نضيف الثوم المدقوق، والكمون، والملح، والصلصة الحارة، ونصف كمية الليمون المعصور، وصلصة
                                البندورة ونحرّك جيّداً</li>
                            <li>نغطي الخليط، ونتركه على نار هادئة لمدة عشر دقائق، ثم نرفعه عن النار ونتركه جانباً</li>
                            <li>نضع ملعقتين كبيرتين من الحمص الناضج في أكواب للتقديم، ثم إضافة خليط الصلصة الحارة فوقه</li>
                            <li>نضيف الكمية المتبقية من عصير الليمون فوق الصلصة الحارة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal69" tabindex="-1" role="dialog" aria-labelledby="myModal69">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الهوت شوكلت بالكاكاو</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوبان ونصف من الحليب</li>
                            <li>ملعقتان كبيرتان من بودرة الكاكاو غير المُحلّاة</li>
                            <li>ثلاث مَلاعق كبيرة من السكّر</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اخلطي كلّاً من الشوكولاتة والسكر مع بعضهما، مع الانتباه لنخل الكاكاو وذلك لأنّه في بعض
                                الأحيان يَحتوي على كُتلٍ لا تذوب مع الخلط</li>
                            <li>أضيفي الحليب إلى خليط الشوكولاتة والسكّر، وقلّبي المُكوّنات جيداً</li>
                            <li>انقلي الكاكاو المُذاب إلى قدرٍ على النّار مع التقليب المستمر حتّى يذوب تماماً، وللتأكّد
                                من
                                تَجانس الخليط</li>
                            <li>ضَعي مشروب الشوكولاتة الساخنة في أكواب التقديم، وزيّنيها ببودرة الشوكولاتة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal70" tabindex="-1" role="dialog" aria-labelledby="myModal70">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الكابتشينو</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوب من القهوة سريعة التحضير</li>
                            <li>كوب سكر يفضّل طحنه لضمان ذوبانه عند الخلط</li>
                            <li>كوب ماء</li>
                            <li>كوب حليب</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>ضع الماء والقهوة سريعة التحضير والسكر في وعاء عميق، واخلط المكونات بالخلاط حتّى يتحوّل
                                المحلول لخليط ثقيل القوام أشبه ما يكون بالكريمة، حيث لو تمّ قلب الوعاء لن تسقط المكونات
                                منه، وبذلك تكون قد وصلت للهدف</li>
                            <li>ضع الخليط في وعاء بلاستيكي وتأكّد من إغلاق الوعاء بإحكام، وضع الوعاء لمدة ساعة في
                                الثلاجة
                                قبل الاستعمال، ويمكنك أن تضعه بعد ذلك في الفريزر للمرات القادمة</li>
                            <li>ضع الحليب في قدر على النار حتى يغلي، ثم قم بخلط الحليب خفاق البيض الكهربائي (أو
                                اليدوي)،
                                ليدخل الهواء في الحليب فتتشكّل الرغوة البيضاء والتي ستوضع مع الرغوة البنية التي صنعناها
                                سابقاً</li>
                            <li>أخرج العلبة المغلقة من الثلاجة، وجهّز الأكواب الخاصّة بالتقديم، ثم ضع معلقة من المادة
                                المخفوقة في العلبة، (هذه المادة تكون منفصلة كطبقتين في حال وضعتها بالفريزر لكن غير
                                متجمدة)،
                                فحاول أخذ ملعقة عامودياً لتأخذ من الطبقة الفاتحة والطبقة غامقة اللون</li>
                            <li>ضع الحليب فوق المادة المخفوقة بشكل بطيء، ثم أضف رغوة الحليب لصنع شكل برغوة بيضاء وبنية،
                                وإن
                                أردت يمكنك استخدام السكر المحروق (من علبة الكريم كارميل) ورسم شكله بالسكر</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal71" tabindex="-1" role="dialog" aria-labelledby="myModal71">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">كوكتيل الفواكه</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربع موزات</li>
                            <li>أربع حبات مانجا</li>
                            <li>سلتان من الفراولة</li>
                            <li>كوبا حليب</li>
                            <li>كوب مكعبات ثلج</li>
                            <li>كوب كريمة سائلة</li>
                            <li>ملعقتان كبيرتان عسل</li>
                            <li>ملعقتان كبيرتان مكسرات</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>إحضار أربع كاسات شفافة للتقديم</li>
                            <li>إزالة أعناق حبات الفراولة باستخدام السكين</li>
                            <li>وضع الفراولة ومكعبات الثلج مع القليل من العسل في الخلاط، وخلطها لمدّة دقيقة بسرعة
                                متوسطة
                                ليتكون عصير فراولة ناعم، وسكبه في الكاسات</li>
                            <li>تقطيع الموز إلى شرائح ووضعها في الخلاط مع الحليب والقليل من العسل ومكعبات الثلج، وخلطها
                                بسرعة متوسطة لمدة دقيقة للحصول على عصير موز متجانس، ثمّ سكبه على عصير الفراولة</li>
                            <li>تقشير المانجا وتقطيعها إلى مكعبات، ثمّ وضعها في الخلاط مع كمية العسل المتبقية ومكعبات
                                الثلج، وخلطها بسرعة متوسطة لمدة دقيقة، للحصول على عصير مانجا ناعم، وسكبه في الكاسات
                                للحصول
                                على كوكتيل الفواكه</li>
                            <li>وضع الكريمة في الخلاط وخلطها بسرعة متوسطة حتى تتماسك، ثمّ وضعها في كيس للتزيين ذي قمع
                                مزخرف، وتوزيعها على كاسات الكوكتيل</li>
                            <li>رش المكسرات على الكوكتيل</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal72" tabindex="-1" role="dialog" aria-labelledby="myModal72">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الموكا الباردة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ملعقتان كبيرتان من السكر</li>
                            <li>ست ملاعق حليب بودرة</li>
                            <li>ثلاثة أرباع الكوب ماء بارد</li>
                            <li>ملعقتان من النسكافيه</li>
                            <li>ملعقتان من كريمة الخفق</li>
                            <li>ثلج مجروش -حسب الرغبة</li>
                            <li>ملعقتان من الكاكاو</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اخلط جميع المكوّنات في الخلاط، دون وضع الثلج</li>
                            <li>اخلط المكوّنات جيدًا لمدّة دقائق حتى تظهر الرغوة</li>
                            <li>أضف الثلج المجروش الى الخليط</li>
                            <li>صب الخليط في كوب التقديم، وزيّنه بالمكسرات أو الشوكلاته الذائبة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal73" tabindex="-1" role="dialog" aria-labelledby="myModal73">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">عصير البرتقال الطازج</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربع ثمرات من البرتقال الطازج</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اقسم ثمرة البرتقال إلى نصفين</li>
                            <li>اعصر ثمرة البرتقال باستخدام ماكينة العصير أو العصارة اليدوية</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal74" tabindex="-1" role="dialog" aria-labelledby="myModal74">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">السحلب</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أربع أكواب من الحليب</li>
                            <li>ملعقتان صغيرتان سحلب</li>
                            <li>أربع ملاعق صغيرة سكر</li>
                            <li>نصف ملعقة صغيرة هال مطحون</li>
                            <li>أربع ملاعق صغيرة جوز هند مبشور</li>
                            <li>ملعقة صغيرة قرفة</li>
                            <li>ملعقة صغيرة زنجبيل مطحون</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>ضع الحليب في قدر ذو قاعدة سميكة ودعه يغلي على نار متوسطة</li>
                            <li>ضع السحلب في طبق عميق، وأضف إليه السكر والهيل، وقلبه جيداً إلى أن تختلط بودرة السحلب
                                بالسكر، الأمر الذي يساعد على ذوبان السحلب وعدم تكتله في القاع عند إضافته للحليب</li>
                            <li>أضف مزيج السحلب والسكر إلى الحليب المغلي، ثمّ حركه بسرعة إلى أن يذوب السكر ويتماسك
                                الحليب
                                قليلاً، ويجب الاستمرار بالتحريك لمدّة خمس دقائق على نار هادئة</li>
                            <li>اسكب السحلب في أكواب التقديم وزينه بجوز الهند، والقرفة والزنجبيل وقدمه ساخناً</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal75" tabindex="-1" role="dialog" aria-labelledby="myModal75">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">أرز بالخضار وقطع الدجاج</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>دجاجة مقطّعة إلى أربع قطع</li>
                            <li>كوبان من الأرز طويل الحبة</li>
                            <li>أربع حبات بطاطا مقطّعة إلى مكعّبات</li>
                            <li>ثلاث حبّات كوسا مقطّعة إلى مكعّبات</li>
                            <li>فصان من الثوم المهروس</li>
                            <li>ثلاث حبات من البصل</li>
                            <li>كوبان من البازيلاء والجزر</li>
                            <li>مكعّب من مرق الدجاج</li>
                            <li>(ملح (حسب الرغبة</li>
                            <li>ملعقة صغيرة من عصير الليمون</li>
                            <li>ملعقة صغيرة من الكمون</li>
                            <li>ملعقة صغيرة من الفلفل الأسود</li>
                            <li>ملعقة صغيرة من الكزبرة الجافة</li>
                            <li>زيت نباتي</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نضع الزيت والثوم والبصل على النار، ثمّ نضيف التوابل ومرق الدجاج والدّجاج وكميّة كافية
                                من
                                الماء، ونتركهم حتى ينضج الدّجاج</li>
                            <li>نرفع الدجاج من المرق، ونضعه في صينيّة، ثمّ ندخله الفرن ليتحمّر</li>
                            <li>نضع الأرز في نفس قدر المرق ونتركه حتى ينضج تماماً</li>
                            <li>نقلي الخضروات جميعها في الزيت النباتي، وبعد ذلك نصفّيها جيّداً، ثمّ نضيفها إلى الأرز
                                بعد أن
                                ينضج</li>
                            <li>نخرج الدجاج من الفرن بعد أن يصبح ذهبيّ اللون</li>
                            <li>نضع الأرز في صحن التقديم إلى جانب الدجاج المحمّر والسلطة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal76" tabindex="-1" role="dialog" aria-labelledby="myModal76">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">صيادية السمك</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلوغرام من السمك الطازج</li>
                            <li>كوبان من الأرز ذي الحبة الطويلة</li>
                            <li>ملعقة كبيرة من الكمون المطحون</li>
                            <li>رأس من الثوم المهروس</li>
                            <li>حبّة ليمون مقطعة الى شرائح</li>
                            <li>حبّة من البصل المفروم ناعماً</li>
                            <li>ربع كوب من البقدونس المفروم ناعماً</li>
                            <li>ربع كوب من الزيت النباتي</li>
                            <li>كوب ونصف من الماء</li>
                            <li>فلفل أسود</li>
                            <li>ملح</li>
                            <li>ملعقة صغيرة من السماق</li>
                            <li>ملعقة كبيرة من بهارات السمك</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>ننظّف السمك جيداً باستخدام السكين الخشنة، ونتخلّص من الحسك الموجود فيه ومن قشوره
                                الخارجية</li>
                            <li>نحضر وعاءً عميقاً، ونضع فيه الكمون، والملح، والفلفل الأسود، والسماق، والبهارات، ونخلطها
                                معاً، ثم نضع السمك فيه</li>
                            <li>نغسل الأرز بالماء البارد ثم ننقعه مع رشّة من الملح في الماء الدافىء لمدّة لا تقل عن ربع
                                ساعة</li>
                            <li>نحضر مقلاةً ونضع فيها الزيت النباتي، ونضعها على نار هادئة حتى تسخن، ثم نضع البصل
                                المفروم
                                ثمّ نضيف الثوم المهروس، ونحرّكهم معاً ونتركهم على النار الهادئة حتى يتحمّروا</li>
                            <li>نغسل الأرز بالماء البارد ونصفّيه من الماء جيداً</li>
                            <li>نحضر وعاء الطهي ونصفّ السمك المتبل في قاع الوعاء، ثمّ نرشّ فوقه البصل والثوم المقلّى
                                والمصفى من الزيت، ثم نرش فوقه الأرز، ثم نضيف الماء الساخن حتى يغمره، ونضعه على النار
                                العالية في البداية إلى أن يغلي، ثم نخفّف النار تحته ونتركه حتى ينضج</li>
                            <li>تقلب الصيادية في طبق التقديم ونزيّنها بالبقدونس المفروم ناعماً وشرائح الليمون، ونقدّم
                                إلى
                                جانبها السلطة الخضراء أو سلطة الطحينية</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal77" tabindex="-1" role="dialog" aria-labelledby="myModal77">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">أرز بسمتي سادة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوبان من أرز بسمتي</li>
                            <li>مكعب من مرق الدجاج</li>
                            <li>رشة من الملح</li>
                            <li>رشة من القرفة</li>
                            <li>نصف ملعقة صغيرة من الكركم</li>
                            <li>ثلاثة أكواب من الماء</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نحضّر الأرز، ثمّ نغسله بالماء البارد جيّداً عدة مرات</li>
                            <li>نضع القليل من الزّيت النباتيّ في الوعاء، ومن ثمّ نسكب الأرز، ونضيف إليه مكعب مرقة
                                الدّجاج،
                                والملح، والقرفة، والكركم</li>
                            <li>نحرّك الأرز حتّى يتجانس مع التّوابل والبهارات</li>
                            <li>نضيف مقدار كوبين من الماء السّاخن، ونحرّك حتّى يذوب مكعّب مرقة الدّجاج، ونغطّى الوعاء،
                                ونترَكه على نار هادئة</li>
                            <li>نحرّك الأرز بعد أن يتشرّب الماء بالكامل، ونقلّبه، ومن ثمّ نضيف كوباً آخر من الماء
                                السّاخن</li>
                            <li>نضيف الماء بالتّدريج حتّى ينضج تماماً</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal78" tabindex="-1" role="dialog" aria-labelledby="myModal78">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">أرز مع الجمبري بالكاري</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ملعقة كبيرة من زيت الزّيتون</li>
                            <li>حبّة كبيرة من البصل مفروم فرماً ناعماً</li>
                            <li>حبّتان من الجّزر المفروم فرماً ناعماً</li>
                            <li>فصّين من الثّوم، مهروس</li>
                            <li>ملعقتان صغيرتان من مسحوق الكاري</li>
                            <li>كوب من الأرز البسمتي</li>
                            <li>كوبان ونصف من الماء</li>
                            <li>ثلاثة أرباع الكيلو من الجمبري المقشّر والمنظّف</li>
                            <li>نصف كوب من الرّيحان الطّازج</li>
                            <li>ملعقة صغيرة من الملح البحري أو حسب الرّغبة</li>
                            <li>ربع ملعقة صغيرة من الفلفل الأسود المطحون</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>سخّني الزّيت في مقلاة كبيرة فوق نار متوسّطة الحرارة</li>
                            <li>ضعي البصل والجّزر في المقلاة وإقليها لمدّة ستّة إلى ثماني دقائق</li>
                            <li>أضيفي الثّوم ومسحوق الكاري حرّكي المكوّنات لمدّة دقيقتين ثمّ أضيفي الأرزّ، الماء، نصف
                                ملعقة
                                من الملح ورشّة من الفلفل، أتركي المزيج إلى أن يغلي ثمّ خفّفي الحرارة وغطّي المقلاة
                                لمدّة
                                خمسة عشر دقيقة</li>
                            <li>تبّلي الجمبري بالملح والفلفل المتبقّي وضعيه في بين الأرز الغير ناضج كل حبّة على حدة
                                لمدّة
                                خمسة دقائق</li>
                            <li>أضيفي أوراق الرّيحان للأرز ثمّ قدّميه على الفور</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal79" tabindex="-1" role="dialog" aria-labelledby="myModal79">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الدجاج المحشي بالأرز</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>دجاجة، بوزن كيلوغرامان</li>
                            <li>كوبان من الأرز مغسول جيّداً ومنقوع بالماء الدافئ</li>
                            <li>ثلث كوب من اللحم المفروم</li>
                            <li>ملعقتان كبيرتان من السمن أو زبدة</li>
                            <li>ملعقة صغيرة ونصف من الملح</li>
                            <li>ملعقة كبيرة من البهارات المشكلة</li>
                            <li>نصف ملعقة صغيرة من القرفة المطحونة</li>
                            <li>ورقة غار</li>
                            <li>نصف ملعقة صغيرة من جوزة الطيب</li>
                            <li>ربع ملعقة صغيرة من القرنفل المطحون</li>
                            <li>عود من القرفة</li>
                            <li>بصلتان متوسطتا الحجم</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>يُقلى اللحم المفروم بالزبدة مدّة عشر دقائق على نار هادئة، ثمّ يُضاف الأرز ويُقلّب مدة
                                دقيقة</li>
                            <li>يُضاف الماء ونصف كمية الملح، والقرفة، والبهار، ويُطهى على نار هادئة مدة خمس عشرة دقيقة،
                                ثمّ
                                تُرفَع نصف كمية الأرز ويُتابع الطهي ما تبقى لمدّة خمس عشرة دقيقة</li>
                            <li>تُحشى الدجاجة بكمية الأرز، وتُخاط جيّداً، وتُوضَع في إناء وتُغمَر بالماء ويُضاف إليها
                                ورق
                                الغار والقرفة والقرنفل وتُطهى حتى تَنضج جيداً</li>
                            <li>بعد النضج تُرفَع الدجاجة وتُدهَن بالزبدة، ثمّ تُوضَع في صينيّة وتُضاف إليها التوابل،
                                والبصل، وتُدخل إلى الفرن لتتحمّر جيداً، وتُقدّم في طبق كبير مع بقيّة الأرز واللحم،
                                وتُزيّن
                                بالمكسرات</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal80" tabindex="-1" role="dialog" aria-labelledby="myModal80">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">محشي البطاطس</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>ربع كيلو من اللحم المفروم</li>
                            <li>ست حباتٍ من البطاطا ويفضل أن تكون متوسطة الحجم</li>
                            <li>ملعقةٌ صغيرةٌ من الكزبرة</li>
                            <li>بصلةٌ واحدةٌ ويفضل أن تكون متوسطة الحجم</li>
                            <li>أربعمائة غرامٍ من البازيلاء الخضراء المسلوقة، كما يمكن استخدام البازيلاء المعلبة</li>
                            <li>ملعقةٌ كبيرةٌ من الطحين</li>
                            <li>ملعقتان كبيرتان من معجون البندورة</li>
                            <li>ملعقتان كبيرتان من دبس الرمان</li>
                            <li>ملعقتان كبيرتان من زيت الزيتون</li>
                            <li>ملعقةٌ صغيرةٌ من الكمون</li>
                            <li>ملعقةٌ صغيرةٌ من الفلفل الأسود</li>
                            <li>ملح طعامٍ -حسب الرغبة</li>
                            <li>كأسان من الماء</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>تقشير البطاطا وحفرها من الداخل مع إحداث بضعة ثقوبٍ على جانبي كل حبة بطاطا باستخدام
                                السكين</li>
                            <li>إحضار قدرٍ مناسب الحجم ووضع الماء فيه ووضع كل حبات البطاطا فيه ووضعه على النار وسلقه
                                نصف
                                سلقةٍ لا سلقاً كاملاً</li>
                            <li>تحضير الحشوة من خلال فرم البصل فرماً ناعماً ووضعه مع اللحم المفروم في وعاءٍ لا يلتصق مع
                                كمية من الماء حتى ينضج اللحم</li>
                            <li>تشويح المكونات على النار حتى يجف الوعاء</li>
                            <li>إضافة البازيلاء إلى الخليط السابق</li>
                            <li>إضافة الكمون والفلفل الأسود وملح الطعام والكزبرة إلى الخليط</li>
                            <li>رفع البطاطا عن النار وتركها جانباً لفترةٍ زمنيةٍ قليلةٍ لتبرد</li>
                            <li>حشو كل حبات البطاطا بالحشوة السابقة</li>
                            <li>وضع زيت الزيتون في إناءٍ ووضعه على النار وتشويح البطاطا المحشوة فيه</li>
                            <li>صف وترتيب قطع البطاطا في قدرٍ أو وعاء</li>
                            <li>تحضير الصلصة من خلال وضع معجون البندورة مع كأسي ماءٍ وإضافة دبس الرمان وملعقةٍ من
                                الطحين
                                حتى يصبح قوام الصلصة كثيفاً</li>
                            <li>إضافة الملح والبهارات حسب رغبة الشخص إلى المزيج السابق</li>
                            <li>سكب كامل الصلصة على البطاطس</li>
                            <li>تسخين الفرن على درجة حرارةٍ متوسطةٍ ووضع حبات البطاطا في الفرن لما يقارب النصف ساعةٍ
                                حتى
                                تنضج</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal81" tabindex="-1" role="dialog" aria-labelledby="myModal81">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">محشي الملفوف بصلصة الطماطم</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلوغرام من أوراق الملفوف، مسلوق نصف سلقة ثمّ مُقطّع إلى مربّعات بحجم كفّ اليد، مع
                                التخلّص
                                من الاضلاع</li>
                            <li>كوب من البقدونس المفروم فرماً ناعماً، وممزوج بملعقةٍ كبيرة من الكزبرة الخضراء مفرومة،
                                وملعقة كبيرة من الشبت مفرومين فرماً ناعماً</li>
                            <li>أربع مَلاعق كبيرة من صلصة الطماطم</li>
                            <li>بصلة كبيرة الحجم، مقطّعة إلى مكعّبات صغيرة</li>
                            <li>ثلاثة أكواب من الأرز المصري مغسول جيداً</li>
                            <li>نصف ملعقة صغيرة من الفلفل الأسود، مطحون</li>
                            <li>نصف ملعقة صغيرة من الكمون</li>
                            <li>نصف ملعقة صغيرة من الملح</li>
                            <li>رشّة من إكليل الجبل</li>
                            <li>رشّة من الهيل المطحون</li>
                            <li>رشّة من الشطّة الحارة</li>
                            <li>ملعقة كبيرة من السمن المذوّب</li>
                            <li>ملعقة كبيرة من الزيت النباتي</li>
                            <li>ثلاثة أكواب من مرق الدجاج أو اللحم</li>
                            <li>حبة من البطاطا، مُقطّعة إلى شرائح رفيعة، لوضعها في قعر القدر قبل وضعِ الملفوف</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نخلط الأرز بعد نقعِه في الماء مع مزيج أوراق البقدونس، والكزبرة، والشبت، والبصل، والفلفل
                                الأسود، والكمّون، والملح، وإكليل الجبل، والهيل المطحون، والشطّة، وصلصة الطماطم، مع
                                السمن
                                والزيت في وعاء</li>
                            <li>نحشو كلّ ورقة ملفوف مسلوقة بمقدار ملعقة كبيرة ونصف من الحشوة، ثمّ نلفّ الورق مع ثني
                                الأطراف
                                نحو الداخل كي لا تخرج الحشوة أثناء الطهي</li>
                            <li>نَضع شرائح البطاطا في قعر قدر ثمّ نوزع أصابع الملفوف المحشوّة بالترتيب</li>
                            <li>نسكب المرق فوق القدر ولكن لا نُغطّي الصفّ الأخير بالمرق حتى النهاية، أي يكون الصفّ
                                الأخير
                                مغطّىً حتى النصف فقط</li>
                            <li>نضع القدر على النار حتى يبدأ المزيج بالغليان ونتركه مدة عشرين دقيقة، ثمّ نخفف النار
                                ونترك
                                القدر مدة عشرين دقيقة إضافيّة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal82" tabindex="-1" role="dialog" aria-labelledby="myModal82">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">محشي الكوسا</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>مئتا غرام من اللحم المفروم</li>
                            <li>كيلوغرام من الكوسا صغيرة الحجم</li>
                            <li>ثلاثة أرباع الكوب من الأرز المصري ذي الحبة القصيرة</li>
                            <li>ملعقتان صغيرتان من البهار المشكل</li>
                            <li>نصف ملعقة صغيرة من الكركم</li>
                            <li>ملعقة صغيرة من الملح</li>
                            <li>ربع ملعقة صغيرة من الفلفل أسود</li>
                            <li>بصلة صغيرة مفرومة</li>
                            <li>
                                <h5 style="color:blue">مكوّنات صلصة الطماطم</h5>
                                <ul>
                                    <li>ملعقة صغيرة من النعناع المجفف</li>
                                    <li>حبتا بندورة متوسطة الحجم، ومقطعة ناعم</li>
                                    <li>علبة معجون البندورة</li>
                                    <li>ربع ملعقة صغيرة من الفلفل الأسود</li>
                                    <li>أربعة فصوص من الثوم المفروم</li>
                                    <li>ملعقة صغيرة من الملح</li>
                                    <li>ملعقتان كبيرتان من الزيت</li>
                                </ul>
                            </li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>غسل الأرز جيداً ثمّ نقعه في الماء لمدة ربع ساعة</li>
                            <li>تفريغ حبات الكوسا من الداخل</li>
                            <li>وضع الأرز في وعاء وإضافة المكوّنات التالية: البصل، الكركم، والملح، والبهار، والفلفل
                                الأسود،
                                واللحم، وتقليبها</li>
                            <li>حشو حبات الكوسا بالخليط الناتج من الأرز واللحم والبهارات</li>
                            <li>صنع المرقة عن طريق وضع البندورة، والملح، والفلفل، ومعجون البندورة، في وعاء عميق للطهي
                                وتركها حتى تغلي</li>
                            <li>إضافة حبات الكوسا المحشوة إلى وعاء الطهي، ويترك على نار متوسطة لمدة أربعين دقيقة حتى
                                تنضج</li>
                            <li>تسخين الزيت في مقلاة صغيرة الحجم، ويضاف إليه الثوم وتحريك المكوّنات بالمقلاة حتى يتغير
                                لون
                                الثوم إلى اللون الذهبي، ثمّ يضاف إليه النعناع</li>
                            <li>إضافة الثوم المقلي إلى محشي الكوسا وتقليبه بشكل بسيط</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal83" tabindex="-1" role="dialog" aria-labelledby="myModal83">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">اليالنجي او ورق العنب</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>أوقية من ورق العنب</li>
                            <li>حبة من الطماطم المفرومة</li>
                            <li>بصلة مفرومة</li>
                            <li>نصف ضمة بقدونس مفرومة</li>
                            <li>ملعقة كبيرة من النعناع المجفف</li>
                            <li>فصان من الثوم المهروسان</li>
                            <li>كوب من الأرز</li>
                            <li>كوب من زيت الزيتون</li>
                            <li>ملعقة كبيرة من معجون الطماطم</li>
                            <li>ملح، بهارات</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>ينقع الأرز في الماء لمدة عشر دقائق</li>
                            <li>يحمر البصل والثوم بزيت الزيتون، ثم يضاف البقدونس والنعناع والطماطم والأرز بعد تصفيته،
                                مع
                                إضافة الملح والبهارات</li>
                            <li>يحرك بشكل جيد حتى تتجانس المكونات، وعلى درجة حرارة متوسطة، ثم يرفع الخليط عن النار لكي
                                يبرد</li>
                            <li>تغسل ورق العنب وتسلق</li>
                            <li>يوضع القليل من الخليط على ورقة العنب وتلف</li>
                            <li>يوضع قدر على النار وبه القليل من الزيت النباتي، ثم تصف ورق العنب به بشكل مرصوص
                                ومُرَتَّب</li>
                            <li>بعد الانتهاء من عملية اللَّف يوضع ثقل فوق ورق العنب لكي لا يَتَفَتَّح ويّخْرُجُ الخليطُ
                                أثناء الطبخ</li>
                            <li>يوضع الماء عليه حتى يغمره</li>
                            <li>يوضع القليل من معجون الطماطم والقليل من الملح والبهارات</li>
                            <li>تُوضع على نارٍ مرتفعة الحرارة في البداية، ثم تُخَفَّف عنها النار بعد الغليان</li>
                            <li>بعد الاستواء تصف ورق العنب، ويتم تقديمها كمقبلات أو كوجبة مع القليل من البطاطس
                                المُحَمَّرَة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal84" tabindex="-1" role="dialog" aria-labelledby="myModal84">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الفخدة الخروف بالفرن</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>فخد خروف كامل</li>
                            <li>حبة بطاطا مقطعة</li>
                            <li>فلفل أسود</li>
                            <li>ملح</li>
                            <li>بهارات الشوي</li>
                            <li>ليمون</li>
                            <li>بصل</li>
                            <li>طماطم</li>
                            <li>شبت</li>
                            <li>بقدونس</li>
                            <li>فستق حلبي</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>تبّلي الفخدة وقطّعي جميع أنواع الخضار التي سبق ذكرها، وحاولي أن تقومي بتركها في ماء
                                ساخن
                                حتى تصبح طرية نوعاً ما</li>
                            <li>أحضري أكياس الطعام البلاستيكية المخصصة للطهي بالفرن</li>
                            <li>ابدئي بوضع فخدة الخروف بداخله، وأضيفي معها التوابل والخضروات المقطعة</li>
                            <li>بعد أن تضعي كافة المكوّنات الموجودة لديك قومي بتحريكها عدة مرات، حتى تختلط المكونات مع
                                بعضها البعض، في هذه المرحلة تكوني قد أوقدت الفرن، واتركيه لمدة خمس دقائق حتى يصبح
                                حامياً</li>
                            <li>أدخلي الكيس في الفرن، واتركيه على درجة حرارة ما بين مئتين إلى مئتين وعشرين، ولمدة لا
                                تقل عن
                                الساعتين، وبعد أن تجهزيه</li>
                            <li>اغرسي السكين في الفخدة من جميع الجوانب حتى تختلط السوائل بداخله، وبذلك تحصلين على الطعم
                                اللذيذ، والمذاق الرائع، واللحم الطري في نفس الوقت</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal85" tabindex="-1" role="dialog" aria-labelledby="myModal85">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الكشري</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كوبان من أرز بسمتي</li>
                            <li>كوب عدس أخضر</li>
                            <li>ثلاث حبات بصل كبيرة ومقطعة شرائح</li>
                            <li>طحين للتغليف</li>
                            <li>مكعبان مرق الدجاج</li>
                            <li>فلفل أسود وملح</li>
                            <li>كوبان من المعكرونة المسلوقة للتقديم</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>تُقلى شرائح بصلة مقطعة في الزيت حتى تصبح ذهبية غامقة</li>
                            <li>توضع الشرائح المقلية في قدر كبير ويضاف إليها ماء مغلي ومكعب مرقة، وتترك على نار هادئة
                                حتى
                                يكتسب الماء لون البصل</li>
                            <li>يضاف العدس المغسول والمصفى من الماء على قدر الماء، ويُترك لقلي حتى يُنضج نصف نضج</li>
                            <li>يضاف الأرز المنقوع والمصفى إلى العدس ويُترك حتى يتشرب كل الماء</li>
                            <li>يوضع على نار هادئة لمدة عشر دقائق</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal86" tabindex="-1" role="dialog" aria-labelledby="myModal86">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">المسقعة بالباذنجان واللحمة المفرومة</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلو ونصف من الباذنجان الرومي</li>
                            <li>قرنان من الفلفل الحار</li>
                            <li>ربع كيلو غرام من اللحمة المفرومة</li>
                            <li>كيلوغرام من الطماطم</li>
                            <li>ثلاث حبّات من البطاطا كبيرة الحجم</li>
                            <li>فصّان من الثوم</li>
                            <li>ملعقة كبيرة من الخل</li>
                            <li>رشّة من الملح</li>
                            <li>رشّة من الفلفل الاسود</li>
                            <li>رشّة من البابريكا</li>
                            <li>بصلة صغيرة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نقشّر البطاطا ونقطّعها إلى شرائح في شكل أصابع ويتمّ قليها في الزيت، ثمّ نخرجها ونجهّز
                                الباذنجان بغسله وتقطيعه وتركه في الماء مع الملح لفترة من الوقت، ثمّ تقلى في الزيت</li>
                            <li>نقطع الفلفل إلى شرائح ثم يقلي في الزيت، ثمّ نفرم الثوم بعد تقشيره ونقطع الطماطم إلى
                                شرائح
                                أو من الممكن عصر الطماطم، لتستعمل كعصير سائل، ثمّ نضع الثوم في الزيت المغلي ويقلب جيداً
                                ليصبح لونه مائلاً للون الأصفر ويوضع عليه عصير الطماطم وإضافة التوابل</li>
                            <li>نترك المزيج قليلاً على النار وتضاف إليه شرائح الباذنجان، وشرائح البطاطا، والفلفل ومن
                                الممكن
                                إضافة شرائح بصل -حسب الرغبة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal87" tabindex="-1" role="dialog" aria-labelledby="myModal87">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">ناجتس الدجاج ببقسماط البانكو</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>بيضة كبيرة</li>
                            <li>ثلث كوب من الحليب</li>
                            <li>أربعمئة وخمسون غراماً من صدور الدجاج مقطعة بحجم اللقيمات</li>
                            <li>كوب ونصف من بقسماط البانكو</li>
                            <li>ربع ملعقة صغيرة من البابريكا</li>
                            <li>ملعقة صغيرة من بودرة الثوم</li>
                            <li>ملعقة صغيرة من البهارات الإيطالية</li>
                            <li>فلفل وملح</li>
                            <li>نصف كوب من الزيت النباتي</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اخفق كلاً من البيض والحليب معاً في وعاء متوسط الحجم، ثمّ تبّل قطع الدجاج في الخليط</li>
                            <li>اخلط بقسماط البانكو مع الثوم البودرة والبابريكا والبهارات والفلفل والملح بحسب الرغبة في
                                وعاء آخر مسطح</li>
                            <li>سخن الزيت في مقلاة واسعة وكبيرة على نار متوسطة</li>
                            <li>ارفع الدجاج المغموس في خليط البيض وصفِّ السائل الزائد في وعاء، ثمّ اغمس الدجاج في
                                بقسماط
                                البانكو وقلّبه جيداً ليتغلّف بخليط البقسماط من كافة الجوانب</li>
                            <li>ضع الدجاج في الزيت برفق ودعه حتى ينضج تماماً من كل الجوانب ويكتسب لوناً ذهبياً لمدّة
                                خمس
                                دقائق ويصبح مقرمشاً</li>
                            <li>ضع الدجاج جانباً حتى يبرد</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الحواوشي الاسكندراني</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>نصف كيلوغرام لحمة مفرومة</li>
                            <li>بصلتان كبيرتان</li>
                            <li>ملعقة كبيرة ملح</li>
                            <li>ملعقة صغيرة فلفل أسود</li>
                            <li>نصف ملعقة صغيرة بهارات مشكلة</li>
                            <li>نصف ملعقة صغيرة شطة</li>
                            <li>نصف ملعقة صغيرة بهارات لحمة</li>
                            <li>ملعقة صغيرة بهارات لحمة الحواوشي</li>
                            <li>قرنا فلفل رومي مفروم</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نضع اللّحمة المفرومة في طبق كبير، ثمّ نبرش البصل أو نضعه في الخلّاط الكهربائي للحصول
                                على
                                قوام ناعم، ونفعل ذلك بالفلفل أيضاً</li>
                            <li>نضع المكوّنات المفرومة من الفلفل والبصل على اللّحم، ثم نرش البهارات المتبقية فوق اللحم،
                                ثم
                                نمزج اللّحمة مع المكونات جيداً باستخدام اليدين، ونغطيها بورق نايلون ونتركها جانباً
                                لمدّة
                                ساعتين حتى تتشرب اللّحمة نكهة المكونات الأخرى، ثم نحشو اللّحمة بأرغفة الخبز ونُحمّرها</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal89" tabindex="-1" role="dialog" aria-labelledby="myModal89">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الممبار المصري</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلو ممبار</li>
                            <li>كيلو أرز مصري منقوع</li>
                            <li>كيلو بصل مفروم ناعماً</li>
                            <li>كيلو طماطم مفروم ناعماً</li>
                            <li>كوب شبت مفروم ناعماً</li>
                            <li>كوب بقدونس مفروم ناعماً</li>
                            <li>كوب كزبرة خضراء مفروم ناعماً</li>
                            <li>رأس ثوم كامل</li>
                            <li>فلفل أخضر رومي مفروم ناعماً</li>
                            <li>قرن فلفل حار مفروم ناعماً</li>
                            <li>ملعقة صغيرة ملح</li>
                            <li>ملعقة صغيرة فلفل أسود</li>
                            <li>ملعقة طعام كمون مطحون</li>
                            <li>نصف كوب زيت نباتي</li>
                            <li>ملعقة شطة مجروشة</li>
                            <li>ورقتا غار</li>
                            <li>حبة لومي</li>
                            <li>عود كرفس</li>
                            <li>زيت غزير للقلي</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>نغسل الممبار جيداً بالماء الجاري، ثم نفركها بالطحين، والملح، ثم ننقعها بالخل لمدة
                                ساعتين
                                تقريباً، حتى يصبح لونها أبيض ناصعاً</li>
                            <li>نخلط كل مكونات الحشوة في وعاء عميق، نحركها حتى تتجانس معاً</li>
                            <li>نقص حبات الممبار بطول واحد، ويفضل أن يكون طولها واحداً، ثم نحشو كل قطعة بالحشوة بكمية
                                مناسبة، حتى ننتهي من حشو كل قطع الممبار، ثم نضعها في طبق جانبي</li>
                            <li>نسخن في قدر عميق كمية وافرة من الماء، ونضيف لها البصل، والثوم، وعود من الكرفس، وورق
                                الغار،
                                وحبة الطماطم، حتى تغلي، ثم نضع حبات الممبار فيها، ونتركها مدة خمس عشرة دقيقة لتنضج</li>
                            <li> نضغط على حبات الممبار قليلاً حتى نتأكد من نضج الأرز داخلها</li>
                            <li>نسخن زيتاً في مقلاة عميقة، نقلي فيها حبات الممبار حتى يصبح لونها ذهبياً</li>
                            <li>نقدم الممبار مع قطع من الكفتة، والكبدة، والسلطة العربية</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal90" tabindex="-1" role="dialog" aria-labelledby="myModal90">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الطعمية المصرية</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>خمسمئة غرام من الفول المقشر</li>
                            <li>حزمة من الشبت</li>
                            <li>حبة كراث فرنسي</li>
                            <li>ماء لنقع الفول</li>
                            <li>ثلاث ملاعق كبيرة من بذور الكزبرة</li>
                            <li>ملعقة كبيرة من كربونات الصوديوم</li>
                            <li>حزمة من البقدونس</li>
                            <li>حزمة من الكزبرة</li>
                            <li>بيضة</li>
                            <li>حبتان من البصل، مقطعتان إلى أرباع</li>
                            <li>ستة فصوص من الثوم</li>
                            <li>فلفل، وملح</li>
                            <li>رشّة من شطة البودرة</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>غسل الفول ونقعه في الماء طوال الليل</li>
                            <li>تصفية الفول، وتجهيز باقي المكوّنات</li>
                            <li>تقطيع كلّ من البقدونس، والشبت، والكزبرة، والكراث، ووضعها مع الفول في وعاء، ثمّ التقليب
                                حتّى
                                تختلط جميع المكوّنات</li>
                            <li>وضع الحشو في محضرة الطعام حتّى يصبح على شكل عجينة، وذلك بإضافة القليل من الماء</li>
                            <li>تتبيل الخليط بالشطة، والملح، والفلفل حسب الرغبة، وحفظ العجينة في الفريزر، أو يُمكن
                                استخدامها بعد خلط كوبين من العجينة مع البيض، وبذور الكزبرة، وكربونات الصوديوم</li>
                            <li>تحمير الطعمية بواسطة ملعقةٍ في زيتٍ ساخن</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal91" tabindex="-1" role="dialog" aria-labelledby="myModal91">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">الفتة المصرية بالخل والثوم</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلو من اللحم</li>
                            <li>خبز، أي نوع أنتِ تفضلينه</li>
                            <li>ملح وفلفل</li>
                            <li>رشة من بودرة الثوم</li>
                            <li>بصلة مقطّعة إلى أربعة قطع</li>
                            <li>حبّهان، مستكة، وورق غار</li>
                            <li>جوزة الطيب</li>
                            <li>مكعبات من مرق اللحم</li>
                            <li>فص واحد من الثوم</li>
                            <li>خل</li>
                            <li>عصير الطماطم</li>
                            <li>قرنفل</li>
                            <li>أرز</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>حمّصي الخبز في الفرن، ورشيه بملعقتين من الزيت، والملح و الفلفل، وبودرة الثوم</li>
                            <li>اغلي المياه مع بصلة مقطعة إلى أربعة قطع، وحبهان، ومستكة، وبضع من أوراق الغار، مع القليل
                                من
                                الفلفل الأسود، وجوزة الطيب، و مكعب مرق اللحم</li>
                            <li>اسقطي اللحمة بعد ذلك في القدر، واتركيها حتى تنضج</li>
                            <li>الصلصة؛ اطحني فص الثوم في الهاون جيّداً مع رشة ملح، وضعي عليه السمنة المذابة أو زيت
                                الزيتون، ثمّ أضيفي بعد ذلك عصير الطماطم، وضعيها على نار متوّسطة لمدة دقيقتين، تبّليها
                                بالملح و الفلفل و جوزة الطيب والخل،ثمّ اتركيها حتى تتجانس جميع المكوّنات</li>
                            <li>اسلقي الأرز بالطريقة المعتادة ويفضل إضافة القرنفل، والحبهان، وعود قرفة لإعطاء النكهة
                                المميزة</li>
                            <li>رُصّي الخبز في الصينية، واسقيه بالمرق وضعي بعد ذلك الأرز و اللحمة، ثمّ اسقي الطبقات
                                بالصلصة</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal92" tabindex="-1" role="dialog" aria-labelledby="myModal92">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">كبدة الدجاج بدبس الرمان</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>كيلو من كبدة الدجاج</li>
                            <li>نصف كوب من زيت الزيتون</li>
                            <li>ملعقة صغيرة من الملح</li>
                            <li>ربع ملعقة صغيرة من الفلفل الأسود</li>
                            <li>قرنان من الفلفل الحار المفروم</li>
                            <li>نصف كوب من دبس الرمان</li>
                            <li>بقدونس مفروم، للتزين</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>في مقلاة واسعة ضعي زيت الزيتون على نار درجة حرارتها متوسطة ليسخن الزيت</li>
                            <li>أضيفي ربع كمية الكبدة وقلّبي بخفة حتّى تجف، ثمّ أضيفي بقية الكبدة بالتدريج مع التقليب
                                إلى
                                أن تجف الكمية المضافة أوّلاً، ثمّ دعي الكبدة على النار حتّى يجف ماؤها تماماً</li>
                            <li>أضيفي الملح، والفلفل، والفلفل الرومي المفروم، ودبس الرمان، ثمّ دعي الكبدة تُطهى مع دبس
                                الرمان على نار هادئة لمدة دقيقة أو دقيقتين لتتشرب بطعم دبس الرمان</li>
                            <li>اسكبي الكبدة في طبق تقديم ورشي البقدونس المفروم، وقدّميها مباشرةً مع الخبز العربي</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal93" tabindex="-1" role="dialog" aria-labelledby="myModal93">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 style="color: violet">فاهيتا الدجاج ببهارات الكاري</h3>
                    <div>
                        <h4>المكوّنات</h4>
                        <ul>
                            <li>نصف كيلو من الدجاج المسحّب من العظام</li>
                            <li>حبّة واحدة من الطماطم</li>
                            <li>حبّتان من الفلفل الرومي</li>
                            <li>زيتون أسود مقطّع</li>
                            <li>نصف كوب من البقدونس</li>
                            <li>حبّة واحدة من البصل، متوسّطة الحجم</li>
                            <li>فصّان من الثوم</li>
                            <li>ملعقتان كبيرتان من الخلّ الأبيض</li>
                            <li>ملعقة صغيرة من الكاري</li>
                            <li>فلفل أسود، حسب الرغبة</li>
                            <li>ملعقتان كبيرتان من زيت الزّيتون</li>
                        </ul>
                        <h4>طريقة التحضير</h4>
                        <ul>
                            <li>اغسلي الدّجاج بشكلٍ جيّد بالملح والخل</li>
                            <li>قطّعي الدّجاج إلى شرائح صغيرة مثل الشاورما</li>
                            <li>دقّي الثّوم واطحنيه، ثمّ ضعي الدّجاج مع الفلفل الأسود، والكاري، والخل، والملح، والقليل
                                من
                                الماء لمدّة نصف ساعة</li>
                            <li>قطّعي البصل إلى شرائح رقيقة وقلّبيه في الزّيت قليلاً</li>
                            <li>ضعي الدّجاج في الزّيت وقلّبيه</li>
                            <li>قطّعي الفلفل إلى مكعّبات، ثمّ أضيفيه إلى الدّجاج حتّى ينضج</li>
                            <li>أضيفي الطّماطم المقطّعة والبقدونس قبل الانتهاء من النّضج بفترةٍ قليلةٍ</li>
                            <li>قدّميها مع الأرز الأبيض، والسلطة الخضراء أو الخبز بعد تمام النّضج</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
    <!--/الوصفات-->
</body>

</html>