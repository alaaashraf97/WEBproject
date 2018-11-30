<?php
    session_start();
    $db=mysqli_connect("localhost","root","","authentication");
    if(isset($_POST['register_btn']))
    {
        $name=mysqli_real_escape_string($db,$_POST['Name']);
        $number=mysqli_real_escape_string($db,$_POST['number']);
        $email=mysqli_real_escape_string($db,$_POST['Email']);
        $Password=mysqli_real_escape_string($db,$_POST['Password']);
        $datepicker2=mysqli_real_escape_string($db,$_POST['datepicker2']);
        $message=mysqli_real_escape_string($db,$_POST['Message']);
        $sql="INSERT INTO users(name,mobile,email,password,datepicker2,message) VALUES ('$name','$number','$email','$Password','$datepicker2','$message')";
        mysqli_query($db,$sql);
        $_SESSION['message1']="You are now logged in";
        $_SESSION['name']=$name;
        header("location: h1.php");
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
                           <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a class="active" href="h1.php">Home</a></li>
                                    <li><a href="#about" class="scroll">About</a></li>
                                    <li><a href="#services" class="scroll">Services</a></li>
                                    <li><a href="#gallery" class="scroll">Gallery</a></li>
                                    <li><a href="#contact" class="scroll">Contact</a></li>
                                </ul>
                                <div class="clearfix"> </div>
                            </div>-->
                        </nav>
                        <div class="agileinfo-social-grids">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                                <li><a href="login.php"><input type="button" value="Log In" style="color:white;background:#dd3e62;border:0px"/></a></li>
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
                <a href="#" data-toggle="modal" data-target="#myModal2">Create your account</a>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <!-- popup for sign up form -->
    <div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3>Create Your Account Now</h3>
                    <form action="register.php" method="post">
                        <input type="text" name="Name" placeholder="User Name" required="" />
                        <input type="tel" name="number" class="mobile" placeholder="Mobile Number" minlength="11"
                            maxlength="11" required="" />
                        <input type="email" name="Email" class="email" placeholder="Email" required="" />
                        <input type="password" name="Password" placeholder="Password" required="" />
                        <input class="date" type="text" id="datepicker2" name="datepicker2" placeholder="Date Of Birth"
                            title="Please enter your Birth Date " required="" />
                        <textarea name="Message" placeholder="Additional Information (Optional)"></textarea>
                        <input type="submit"name="register_btn" value="Create Account">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //popup for sign up form -->
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
   <!-- <div class="contact-w3ls" id="contact">
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
    <div class="map">
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
    </body>
    </html>