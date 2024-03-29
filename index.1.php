<?php
// include 'dbconfig/connection.php';
if(isset($_POST['sendMessage'])){
$sub = $_POST['op'];
$name = $_POST['fullname'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$msg = $_POST['message'];


$res = $database->createUser($sub,$name,$email,$cell,$msg); 
if($res){
//   header('location:list-about.php');
     echo ("<script>alert('Massage Successfully Submit');</script>");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->

    <title> Prashant Radadiya</title>
    <style>
        .intro-section .mr-kayo{
            font-size:30px !important;
        }
    </style>
    <link rel="icon" href="site-logo/webicon.png">
    <meta name="description" content="freelancer web developer and web designer
     my web development skills: HTMl5 -CSS3 - bootstrap - scss -javaScript - jQuery - fabric.js - angular.js - Ajax -PHP (MVC) - wordpress -Mysql ;; I look forward to working with you soon, and i will be in time">
    <meta name="keywords"
          content="HTML,CSS,jquery,JavaScript,mr kayo,saad tarek,mrkayo,mrkayo.com,karem tarek,karemtarek,saadtarek">
    <meta name="author" content="Mr Kayo">

    <link href="../fonts.googleapis.com/cssb59c.css?family=Montserrat:300,400,600,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="css/slick.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".app-links" data-offset="15" class="scrollspy-example sakura-demo2">

<!-- navbar
========================================-->
<nav class="navbar navbar-default navbar-fixed-top appsLand-navbar sakura-navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <span class="sakura-demo2-menu-toggle">
                <i class="chart"></i>
                <i class="chart"></i>
                <i class="chart"></i>
            </span>
            <a class="navbar-brand" href="#">
                <img alt="" src="site-logo/webicon.png">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="app-links" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right appsLand-links kayo-links">
                <li class="visible-xs-block text-center mobile-size-logo">
                    <a href="#">
                        <img alt="" src="images/icon2.png" class="img-responsive">
                    </a>
                </li>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#history">History</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <!-- <li><a href="#blog">Blog</a></li> -->
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<main class="main-page-content">

    <!-- Start Home ===================================-->
    <section class="home bg-img" id="home">
        <div class="overlay">
            <div class="container">
                <div class="intro-section display-table">
                    <div class="display-table-cell">
                        <h3 class="kayo-hello">HI, I'AM</h3>
                        <?php
                        include 'dbconfig/connection.php';
                        $res = $database->home();
                        $row = mysqli_fetch_assoc($res);
                         ?>
                        <h1 class="mr-kayo"><?php echo $row['myName']; ?></h1>
                        <h3 class="kayo-work-description">&nbsp;<span class="kayo-work"></span></h3>
                        <ul class="list-inline list-unstyled header-links">
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                <a href="tel:09033739680" class="sakura-btn btn-inverse">
                                    <i class="fa fa-rocket"></i> Hire Me
                                </a>
                            </li>
                            <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.75s">
                                <?php
                                $res = $database->resume();
                                $row7= mysqli_fetch_assoc($res);
//                                echo $row7['resume'];
                                ?>
                                <a href="pdffileD.php?file=<?php echo $row7['resume']; ?>" target="_blank" class="sakura-btn">
                                    <i class="fa fa-download"></i>  My Resume
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="open-page">
                <a href="#about" class="scrollLink"><i class="fa fa-angle-down"></i></a>
            </div>
        </div>
    </section>
    <!-- End Home ==================-->

    <!-- Start About Me
   ===================================-->
    <div class="my-information" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="my-image">
                        <?php 
                        $res = $database->about();
                        $row1 = mysqli_fetch_assoc($res);
                        ?>
                    <img class="img-responsive" src="admin-panel/profile_pic/<?php echo $row1['profileImg']; ?>">
                        <!-- <img src="images/11.jpg" class="img-responsive" alt=""> -->
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="kayo-info-detail">
                        <h3>HELLO,</h3>
                        <p>
                            <?php echo $row['aboutDesc']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Me ==================-->

    <!-- Start My Service
    ===================================-->
    <div class="kayo-service bg-img">
        <div class="overlay">
            <div class="container mb_-30px">
                <div class="mrkayo-main-title">
                    <h2>
                        My Service
                        <span class="kayo-line"></span>
                    </h2>
                </div>
                
                <div class="row">
                <?php
                $res = $database->service();
                    while($row2 = mysqli_fetch_assoc($res)){
                ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="kayo-icon-list-box">
                            <div class="kayo-icon-box-container">
                                <div class="kayo-icon-box">
                                    <!-- <span class="pe-7s-monitor kayo-icon"></span> -->
                                    <img class="img-responsive" src="admin-panel/servicelogo/<?php echo $row2['serviceLogo']; ?>">
                                </div>
                            </div>
                            <div class="kayo-list-info">
                                <h4><?php echo $row2['serviceName']; ?></h4>
                                <p>
                                <?php echo $row2['serviceDesc']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End My Service ==================-->

    <!-- Start Resume
    ===================================-->
    <div class="education-workHistory" id="history">
        <div class="container">
            <div class="mrkayo-main-title">
                <h2>
                    My Experience
                    <span class="kayo-line"></span>
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="kayo-education">
                        <h3 class="timeline-title">
                            <i class="pe-7s-study"></i> <span>Education</span>
                        </h3>
                        
                        <div class="timeline-content">
                        <?php
                            $res = $database->edu();
                            while($row4 = mysqli_fetch_assoc($res)){
                        ?>
                            <div class="timeline-box">
                                <div class="timeline-date">
                                <?php echo $row4['eduStart'] . ' TO ' . $row4['eduEnd']; ?>
                                </div>
                                <div class="timeline-info">
                                    <div class="timeline-info-header">
                                        <h3><?php echo $row4['eduName']; ?></h3>
                                        <p>fds</p>
                                    </div>
                                    <div class="timeline-info-details">
                                        <p>
                                        <?php echo $row4['eduDesc']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="kayo-experience">
                        <h3 class="timeline-title">
                            <i class="pe-7s-ribbon"></i> <span>Work History</span>
                        </h3>
                        <div class="timeline-content">
                        <?php
                            $res = $database->exp();
                            while($row3 = mysqli_fetch_assoc($res)){
                        ?>
                            <div class="timeline-box">
                                <div class="timeline-date">
                                    <?php echo $row3['comStart'] . ' TO ' . $row3['comEnd']; ?>
                                </div>
                                <div class="timeline-info">
                                    <div class="timeline-info-header">
                                        <h3><?php echo $row3['comName']; ?></h3>
                                        <p><?php echo $row3['comDeg']; ?></p>
                                    </div>
                                    <div class="timeline-info-details">
                                        <p>
                                        <?php echo $row3['comDesc']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="take-my-resume">
                <a href="#" class="kayo-btn-1"><span class="glyphicon glyphicon-cloud-download"></span> Take My Resume</a>
            </div>
        </div>
    </div>
    <!-- End Resume ==================-->

    <!-- Start Skills
    ===================================-->
    <div class="kayo-skills bg-img">
        <div class="overlay">
            <div class="container">
                <div class="soft-skills">
                    <div class="mrkayo-main-title">
                        <h2>
                            Soft Skills
                            <span class="kayo-line"></span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="progress-container">
                                <div class="progressName" id="pro1" data-value="0.8" data-color="#1894ff"></div>
                                <h3>Communication</h3>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="progress-container">
                                <div class="progressName" id="pro2" data-value="0.5" data-color="#1894ff"></div>
                                <h3>Work In Team</h3>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="progress-container">
                                <div class="progressName" id="pro4" data-value="0.6" data-color="#1894ff"></div>
                                <h3>Speed</h3>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="progress-container">
                                <div class="progressName" id="pro3" data-value="0.7" data-color="#1894ff"></div>
                                <h3>creativity</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="technical-skills">
                    <div class="mrkayo-main-title">
                        <h2>
                            Technical Skills
                            <span class="kayo-line"></span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="progress-bar-container primary-style">
                                <span class="timer" data-from="0" data-to="95" data-speed="1100"
                                      data-refresh-interval="50">0</span>
                                <div class="progress">
                                    <div class="progress-bar active" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                </div>
                                <h3>HTML5</h3>
                            </div>
                            
                            <div class="progress-bar-container primary-style">
                                <span class="timer" data-from="0" data-to="70" data-speed="1100"
                                      data-refresh-interval="50">0</span>
                                <div class="progress">
                                    <div class="progress-bar active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                </div>
                                <h3>JavaScript</h3>
                            </div>
                        </div> <!-- end the col -->
                        <div class="col-sm-6">
                            <div class="progress-bar-container primary-style">
                                <span class="timer" data-from="0" data-to="90" data-speed="1100"
                                      data-refresh-interval="50">0</span>
                                <div class="progress">
                                    <div class="progress-bar active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                </div>
                                <h3>jQuery</h3>
                            </div>
                            <div class="progress-bar-container primary-style">
                                <span class="timer" data-from="0" data-to="80" data-speed="1100"
                                      data-refresh-interval="50">0</span>
                                <div class="progress">
                                    <div class="progress-bar active" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                </div>
                                <h3>CSS3</h3>
                            </div>
                        </div> <!-- end the col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Skills ==================-->

    <!-- Start portfolio
    ===================================-->
    <section id="portfolio">
        <div class="portfolio">
            <div class="port-box">
                <div class="container">
                    <div class="mrkayo-main-title">
                        <h2>
                            My Work
                            <span class="kayo-line"></span>
                        </h2>
                    </div>
                    <div class="text-center">
                        <ul class="portfolio-sorting list-unstyled text-center kayo-taps">
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".front-end">Front End</li>
                            <li data-filter=".back-end">Back End</li>
                            <li data-filter=".graphic-design">Graphic Design</li>
                        </ul> <!--end portfolio sorting -->
                    </div>
                    <div class="portfolio-items">
                        <div class="row grid">
                            <div class="col-md-4 col-sm-6 grid-item front-end">
                                <div class="portfolio-item">
                                    <div class="port-data">
                                        <div class="port-data-front-card"><i class="fa fa-codepen"></i></div>
                                        <div class="port-data-back-card">
                                            <h4 class="project-name">Project Name</h4>
                                            <a href="#" target="_blank" class="port-show-info glyphicon glyphicon-lin glyphicon glyphicon-linkglyphicon glyphicon-linkglyphicon glyphicon-linkglyphicon glyphicon-linkglyphicon glyphicon-link"></a>
                                            <div class="project-category">
                                                <h5>Front End <i class="fa fa-codepen pull-right"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="port-image">
                                        <img src="images/work/01.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 grid-item back-end">
                                <div class="portfolio-item">
                                    <div class="port-data">
                                        <div class="port-data-front-card"><i class="fa fa-code"></i></div>
                                        <div class="port-data-back-card">
                                            <h4 class="project-name">Project Name</h4>
                                            <a href="#" target="_blank" class="port-show-info glyphicon glyphicon-link"></a>
                                            <div class="project-category">
                                                <h5>Back End <i class="fa fa-code pull-right"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="port-image">
                                        <img src="images/work/02.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 grid-item graphic-design">
                                <div class="portfolio-item">
                                    <div class="port-data">
                                        <div class="port-data-front-card"><i class="fa fa-paint-brush"></i></div>
                                        <div class="port-data-back-card">
                                            <h4 class="project-name">Project Name</h4>
                                            <a href="#" target="_blank" class="port-show-info glyphicon glyphicon-link"></a>
                                            <div class="project-category">
                                                <h5>Graphic Design <i class="fa fa-paint-brush pull-right"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="port-image">
                                        <img src="images/work/03.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 grid-item front-end">
                                <div class="portfolio-item">
                                    <div class="port-data">
                                        <div class="port-data-front-card"><i class="fa fa-codepen"></i></div>
                                        <div class="port-data-back-card">
                                            <h4 class="project-name">Project Name</h4>
                                            <a href="#" target="_blank" class="port-show-info glyphicon glyphicon-link"></a>
                                            <div class="project-category">
                                                <h5>Front End <i class="fa fa-codepen pull-right"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="port-image">
                                        <img src="images/work/04.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 col-sm-6 grid-item graphic-design">
                                <div class="portfolio-item">
                                    <div class="port-data">
                                        <div class="port-data-front-card">
                                            <div><i class="fa fa-paint-brush"></i></div>
                                        </div>
                                        <div class="port-data-back-card">
                                            <h4 class="project-name">Project Name</h4>
                                            <a href="#" target="_blank" class="port-show-info glyphicon glyphicon-link"></a>
                                            <div class="project-category">
                                                <h5>Graphic Design <i class="fa fa-paint-brush pull-right"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="port-image">
                                        <img src="images/work/06.png" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--end row -->
                </div>
            </div>
        </div>
    </section>
    <!-- End portfolio ================-->

    <!-- Start Facts About Me
    ===================================-->
    <div class="kayo-facts-about-me bg-img">
        <div class="overlay">
            <div class="container mb_-50px">
                <div class="mrkayo-main-title">
                    <h2>
                        Awesome Facts
                        <span class="kayo-line"></span>
                    </h2>
                </div>
                <div class="kayo-info-list">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="single-info">
                                <p class="info-icon">
                                    <i class="pe-7s-display1"></i>
                                    <span class="facts-numbers" data-from="20" data-to="2" data-speed="1100"></span>
                                </p>
                                <h3> PROJECTS </h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-info">
                                <p class="info-icon">
                                    <i class="pe-7s-alarm"></i>
                                    <span class="facts-numbers" data-from="70" data-to="750" data-speed="1100"></span>
                                </p>
                                <h3> Work Hours </h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-info">
                                <p class="info-icon">
                                    <i class="pe-7s-headphones"></i>
                                    <span class="facts-numbers" data-from="30" data-to="20" data-speed="1100"></span>
                                </p>
                                <h3> Customer SUPPORT </h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="single-info">
                                <p class="info-icon">
                                    <i class="pe-7s-smile"></i>
                                    <span class="facts-numbers" data-from="100" data-to="2" data-speed="1100"></span>
                                </p>
                                <h3> Happy Clients </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Facts About Me ================-->

    <!-- Start Testimonials -->
    <!-- <div class="testimonials">
        <div class="container">
            <div class="mrkayo-main-title">
                <h2>
                    Testimonials
                    <span class="kayo-line"></span>
                </h2>
            </div>
            <div class="testimonials-slider-container"> -->
                <!-- Testimonials Slider -->
                <!-- <div class="testimonials-slider"> -->
                    <!-- Testimonials Slider Box -->
                    <!-- <div class="testi-box text-center">
                        <div class="img-box">
                            <img src="images/users/01.jpg" alt="">
                        </div>
                        <div class="testi-user-info">
                            <h3>Saad Tarek</h3>
                            <h5>Designer at Upwork</h5>
                        </div>
                        <div class="testi-desc-box">
                            <i>“</i>
                            <p>
                                Praesent et purus ac libero euismod egestas. Aliquam feugiat luctus eros eget
                                maecenas
                                semper pulvinar. tiam in auctor tortor. Aliquam vulputate risus placerat congue
                                ornare.
                                Donec semper odio non efficitur congue.
                            </p>
                            <i>”</i>
                        </div>
                    </div> -->
                    <!-- Testimonials Slider Box -->
                    <!-- <div class="testi-box text-center">
                        <div class="img-box">
                            <img src="images/users/02.jpg" alt="">
                        </div>
                        <div class="testi-user-info">
                            <h3>Amanda Catmull</h3>
                            <h5>Designer at ProGlyphs</h5>
                        </div>
                        <div class="testi-desc-box">
                            <i>“</i>
                            <p>
                                Praesent et purus ac libero euismod egestas. Aliquam feugiat luctus eros eget
                                maecenas
                                semper pulvinar. tiam in auctor tortor. Aliquam vulputate risus placerat congue
                                ornare.
                                Donec semper odio non efficitur congue.
                            </p>
                            <i>”</i>
                        </div>
                    </div> -->
                    <!-- Testimonials Slider Box -->
                    <!-- <div class="testi-box text-center">
                        <div class="img-box">
                            <img src="images/users/03.jpg" alt="">
                        </div>
                        <div class="testi-user-info">
                            <h3>Bill Fox</h3>
                            <h5>Designer at Amanidax</h5>
                        </div>
                        <div class="testi-desc-box">
                            <i>“</i>
                            <p>
                                Praesent et purus ac libero euismod egestas. Aliquam feugiat luctus eros eget
                                maecenas
                                semper pulvinar. tiam in auctor tortor. Aliquam vulputate risus placerat congue
                                ornare.
                                Donec semper odio non efficitur congue.
                            </p>
                            <i>”</i>
                        </div>
                    </div> -->
                    <!-- Testimonials Slider Box -->
                    <!-- <div class="testi-box text-center">
                        <div class="img-box">
                            <img src="images/users/04.jpg" alt="">
                        </div>
                        <div class="testi-user-info">
                            <h3>Joey Higgins</h3>
                            <h5>CEO Higgins&Geox</h5>
                        </div>
                        <div class="testi-desc-box">
                            <i>“</i>
                            <p>
                                Praesent et purus ac libero euismod egestas. Aliquam feugiat luctus eros eget
                                maecenas
                                semper pulvinar. tiam in auctor tortor. Aliquam vulputate risus placerat congue
                                ornare.
                                Donec semper odio non efficitur congue.
                            </p>
                            <i>”</i>
                        </div>
                    </div>
                </div> -->
                <!-- Silder Paging -->
                <!-- <ul class="paging-container list-unstyled text-center list-inline">
                    <li class="testimonials-arrows" id="testimonial-prevArrow">
                        <div class="testimonials-client-page"></div>
                        <i class="pe-7s-angle-left"></i>
                    </li>
                    <li id="testimonial-paging"></li>
                    <li class="testimonials-arrows" id="testimonial-nextArrow">
                        <div class="testimonials-client-page"></div>
                        <i class="pe-7s-angle-right"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
    <!-- End Testimonials ================-->

    <!-- Start Blog
    ===================================-->
    <!-- <section id="blog">
        <div class="blog">
            <div class="port-box">
                <div class="container">
                    <div class="mrkayo-main-title">
                        <h2>
                            Last Posts
                            <span class="kayo-line"></span>
                        </h2>
                    </div>
                    <div class="posts">
                        <div class="row posts-grid">
                            <div class="col-md-6 col-sm-6 post-grid-item">
                                <div>
                                    <article class="normal-post">
                                        <figure class="entry-header">
                                            <div class="post-image">
                                                <img src="images/blog/01.jpg" class="img-responsive" alt="">
                                            </div>
                                            <ul class="post-category list-unstyled">
                                                <li><a href="#">creative</a></li>
                                                <li><a href="#">Front end</a></li>
                                                <li><a href="#">web design</a></li>
                                            </ul>
                                            <ul class="post-share list-unstyled">
                                                <li class="open-post-share">
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                    <ul class="post-share-links list-unstyled">
                                                        <li>
                                                            <a href="#" class="facebook-bg-hover">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter-bg-hover">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="google-plus-bg-hover">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </figure>
                                        <div class="entry-content">
                                            <div class="entry-post-info">
                                                <h4><a href="#">Normal Post Style</a></h4>
                                                <p>Posted 6 Dec</p>
                                            </div>
                                            <div class="entry-expert">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur distinctio dolorum ea facilis non repellendus velit voluptas voluptates? Accusantium at doloribus eum iste iusto, nam rem repudiandae voluptates. Inventore.
                                                </p>
                                                <div class="post-readMore">
                                                    <a href="#" class="pull-left read-more-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    <span class="pull-right"><a href="#">1 COMMENT</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-footer">
                                            <ul class="entry-tags list-unstyled list-inline">
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">WORDPRESS</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 post-grid-item">
                                <div>
                                    <article class="normal-post">
                                        <figure class="entry-header">
                                            <ul class="post-share list-unstyled">
                                                <li class="open-post-share">
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                    <ul class="post-share-links list-unstyled">
                                                        <li>
                                                            <a href="#" class="facebook-bg-hover">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter-bg-hover">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="google-plus-bg-hover">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </figure>
                                        <div class="entry-content">
                                            <div class="entry-post-info">
                                                <h4><a href="#">Normal Post Style</a></h4>
                                                <p>
                                                    Posted 3 Nov
                                                </p>
                                            </div>
                                            <div class="entry-expert">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur distinctio dolorum ea facilis non repellendus velit voluptas voluptates? Accusantium at doloribus eum iste iusto, nam rem repudiandae voluptates. Inventore.
                                                </p>
                                                <div class="post-readMore">
                                                    <a href="#" class="pull-left read-more-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    <span class="pull-right"><a href="#">1 COMMENT</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-footer">
                                            <ul class="entry-tags list-unstyled list-inline">
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">WORDPRESS</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 post-grid-item">
                                <div>
                                    <article class="normal-post">
                                        <figure class="entry-header">
                                            <div class="post-image">
                                                <img src="images/blog/02.jpg" class="img-responsive" alt="">
                                            </div>
                                            <ul class="post-category list-unstyled">
                                                <li><a href="#">creative</a></li>
                                                <li><a href="#">Front end</a></li>
                                                <li><a href="#">web design</a></li>
                                            </ul>
                                            <ul class="post-share list-unstyled">
                                                <li class="open-post-share">
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                    <ul class="post-share-links list-unstyled">
                                                        <li>
                                                            <a href="#" class="facebook-bg-hover">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter-bg-hover">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="google-plus-bg-hover">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </figure>
                                        <div class="entry-content">
                                            <div class="entry-post-info">
                                                <h4><a href="#">Normal Post Style</a></h4>
                                                <p>Posted 12 Oct</p>
                                            </div>
                                            <div class="entry-expert">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur distinctio dolorum ea facilis non repellendus velit voluptas voluptates? Accusantium at doloribus eum iste iusto, nam rem repudiandae voluptates. Inventore.
                                                </p>
                                                <div class="post-readMore">
                                                    <a href="#" class="pull-left read-more-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    <span class="pull-right"><a href="#">1 COMMENT</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-footer">
                                            <ul class="entry-tags list-unstyled list-inline">
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">WORDPRESS</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 post-grid-item">
                                <div>
                                    <article class="normal-post">
                                        <figure class="entry-header">
                                            <ul class="post-share list-unstyled">
                                                <li class="open-post-share">
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                    <ul class="post-share-links list-unstyled">
                                                        <li>
                                                            <a href="#" class="facebook-bg-hover">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter-bg-hover">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="google-plus-bg-hover">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </figure>
                                        <div class="entry-content">
                                            <div class="entry-post-info">
                                                <h4><a href="#">Normal Post Style</a></h4>
                                                <p>
                                                    Posted 18 Aug
                                                </p>
                                            </div>
                                            <div class="entry-expert">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur distinctio dolorum ea facilis non repellendus velit voluptas voluptates? Accusantium at doloribus eum iste iusto, nam rem repudiandae voluptates. Inventore.
                                                </p>
                                                <div class="post-readMore">
                                                    <a href="#" class="pull-left read-more-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    <span class="pull-right"><a href="#">1 COMMENT</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-footer">
                                            <ul class="entry-tags list-unstyled list-inline">
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">WORDPRESS</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Blog ================-->

    <!-- Start Contact Ways
    ===================================-->
    <div class="contact-ways">
        <div class="container mb_-30px">
            <div class="mrkayo-main-title">
                <h2>
                    Get In Touch
                    <span class="kayo-line"></span>
                </h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="kayo-icon-list-box">
                        <div class="kayo-icon-box-container">
                            <div class="kayo-icon-box">
                                <span class="glyphicon glyphicon-map-marker kayo-icon"></span>
                            </div>
                        </div>
                        <div class="kayo-list-info">
                            <h4>Location</h4>
                            <p>
                                Rajkot,Gujarat-360002
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="kayo-icon-list-box">
                        <div class="kayo-icon-box-container">
                            <div class="kayo-icon-box">
                                <span class="glyphicon glyphicon-phone kayo-icon"></span>
                            </div>
                        </div>
                        <div class="kayo-list-info">
                            <h4>Phone</h4>
                            <p>
                                +91 9033 7396 80
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="kayo-icon-list-box">
                        <div class="kayo-icon-box-container">
                            <div class="kayo-icon-box">
                                <span class="fa fa-envelope kayo-icon"></span>
                            </div>
                        </div>
                        <div class="kayo-list-info">
                            <h4>Email</h4>
                            <p>
                                prashantradadiya47@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Ways ================-->

    <!-- Start Contact From
    ===================================-->
    <div class="contact-form bg-img" id="contact">
        <div class="overlay">
            <div class="container">
                <div class="mrkayo-main-title">
                    <h2>
                        Send Message
                        <span class="kayo-line"></span>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                        <form class="kayo-form"  method="post" id="contact_form" enctype='multipart/form-data'>
                            <div class="input-row">
                                <div class="form-group">
                                <select class='form-control' name='op' id='op'>
                                <option>Pick One...</option>
                                    <option value="Web Desiging">Web Desiging</option>
                                    <option value="Web Development">Web Development</option>
                                    <option value="E-commerce Website">E-commerce Website</option>
                                    <option value="Marketing">Marketing</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Your Full Name" name="fullname" id='fullname'>
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Your Email" name="email" id='email'>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Enter Cell No." name="cell" id='cell'>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message .." name="message" id='message'></textarea>
                            </div>
                            <div>
                                <button class="btn kayo-btn-1 btn-block btn-rgba" type="submit" name="sendMessage" id='sendMessage'>
                                    <i class="fa fa-send-o"></i> Send Your Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Contact From -->

    <!-- Start Client Logo
    ===================================-->
    <!-- <div class="my-clients-logo small-section">
        <div class="container">
            <div class="sakura-demo2-clients-slider">
                <div class="client-logo">
                    <a href="#" target="_blank">
                        <img src="images/clients-logo/logo-1.png" alt="">
                    </a>
                </div>
                <div class="client-logo">
                    <a href="#" target="_blank">
                        <img src="images/clients-logo/logo-2.png" alt="">
                    </a>
                </div>
                <div class="client-logo">
                    <a href="#" target="_blank">
                        <img src="images/clients-logo/logo-3.png" alt="">
                    </a>
                </div>
                <div class="client-logo">
                    <a href="#" target="_blank">
                        <img src="images/clients-logo/logo-4.png" alt="">
                    </a>
                </div>
                <div class="client-logo">
                    <a href="#" target="_blank">
                        <img src="images/clients-logo/logo-5.png" alt="">
                    </a>
                </div>
                <div class="client-logo">
                    <a href="#" target="_blank">
                        <img src="images/clients-logo/logo-6.png" alt="">
                    </a>
                </div>
                <div class="client-logo">
                    <a href="#" target="_blank">
                        <img src="images/clients-logo/logo-7.png" alt="">
                    </a>
                </div>
                <div class="client-logo">
                    <a href="#" target="_blank">
                        <img src="images/clients-logo/logo-8.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Client Logo ==================-->

    <!-- Start Map
    ===================================-->
    <!-- <div id="map"></div> -->
    <!-- End Map ================-->

</main>

<!-- Footer
========================================-->
<footer class="apps-footer">
    <div class="footer-top">
        <div class="container">
            <div class="apps-short-info">
                <a href="#">
                    <img alt="" src="images/icon2.png">
                </a>
            </div>
            <ul class="list-inline list-unstyled footer-social-links">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>All Rights Reserved © <?php echo Date('Y'); ?> <a href="#">Prashant Radadiya</a></p>
        </div>
    </div>
</footer>

<!-- Start ScrollToTop
===================================-->
<div class="scrollToTop"><i class="fa fa-angle-up"></i></div>


<!-- Start Loading
===================================-->
<div class="loading">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>
</div>
<!-- End Loading ==================-->

<!-- start the script -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.countTo.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/progressbar.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/ajax.js"></script>
<!-- end the script -->

<!-- <script>
    function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 40.674, lng: -73.945},
            zoom: 12,
            styles: [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#212121"
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#212121"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative.locality",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#bdbdbd"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#181818"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#1b1b1b"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#2c2c2c"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#8a8a8a"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#373737"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#3c3c3c"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#4e4e4e"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#000000"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#3d3d3d"
                        }
                    ]
                }
            ]
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMaN8SDH_bgvk116IWNP-j8h9Pw834g-c&amp;callback=initMap"></script> -->

</body>
</html>
<script>
$(document).ready(function(){
$("#contact-form").click(function(){
var name = $("#fullname").val();
var email = $("#email").val();
var cell = $("#cell").val();
var option = $("#op").val();
var contact = $("#message").val();
console.log(name);
console.log(email);
console.log(cell);
console.log(option);
console.log(contact);
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name='+ name + '&email='+ email + '&cell='+ cell + '&option='+ option + '&contact='+ contact;
if(name==''||email==''||cell==''||option=='' ||contact=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "ajaxdata.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});
});
</script>