<?php @session_start(); ?>
<!DOCTYPE html>
<?php include 'php/text.php'; ?>

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="description" content="Fernandez Rental and Services">

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="<?php echo $ExDescription; ?>" />
    <meta name="author" content="Fox Art Media" />

    <!-- Page Title -->
    <title>
        <?php if ($page_name == 'index.php') {
            echo "$Company";
        } elseif ($page_name == 'about.php') {
            echo "$Company | About";
        } elseif ($page_name == 'services.php') {
            echo "$Company | Services";
        } elseif ($page_name == 'gallery.php') {
            echo "$Company | Gallery";
        } elseif ($page_name == 'testimonials.php') {
            echo "$Company | Testimonials";
        } elseif ($page_name == 'thank-you.php') {
            echo "$Company";
        } elseif ($page_name == 'contact.php') {
            echo "$Company | Contact";
        } ?>
    </title>



        <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->
    


    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/keyframe-animation.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/venobox.min.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/elements.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- ========== End Stylesheet ========== -->



</head>

<body>

    <!--[if lt IE 8]>
    <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve
        your experience.
    </p><![endif]-->

    <div class="site-preloader">
        <div class="car">
            <div class="strike"></div>
            <div class="strike strike2"></div>
            <div class="strike strike3"></div>
            <div class="strike strike4"></div>
            <div class="strike strike5"></div>

        </div>
    </div><!--/.site-preloader-->

    <!-- <?php $_SESSION['token'] = md5(microtime()); ?>

    <script type="text/javascript">
        (function() {
            var options = {
                facebook: "351215899184325", // Facebook page ID
                whatsapp: "<?php echo $PhoneName . $Phone; ?>", // WhatsApp number
                call_to_action: "Message us", // Call to action
                button_color: "#8b3e0e", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "facebook,whatsapp", // Order of buttons
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
     -->




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5/html5shiv.min.js"></script>
      <script src="js/html5/respond.min.js"></script>
    <![endif]-->

    </head>

    <body>

        <!-- Preloader Start -->
        <!-- <div class="se-pre-con"></div> -->
        <!-- Preloader Ends -->


        <!-- Header 
    ============================================= -->

        <header class="main-header">
            <div class="top-header">
                <div class="container">

                </div>
            </div><!--/.top-header-->
            <div class="mid-header">
                <div class="container">
                    <div class="mid-header-wrap">
                        <div class="site-logo">
                            <!-- <a href="index.php"><img src="assets/img/Logo.png" style="margin-top: -30px; margin-bottom: -95px; width: 170px;" alt="Logo"></a> -->
                        </div><!--/.site-logo-->
                        <ul class="header-info">
                            <li>
                                <div class="header-info-icon">
                                    <i class="las la-phone-volume"></i>
                                </div>
                                <div class="header-info-text">
                                    <h3><span>Call us now</span><a style="color: #ddd" href="<?php echo $PhoneRef ?>">
                                            <?php echo $Phone ?>
                                        </a></h3>
                                </div>
                            </li>
                            <li>
                                <div class="header-info-icon">
                                    <i class="las la-envelope-open"></i>
                                </div>
                                <div class="header-info-text">
                                    <h3><span>Email now</span>
                                        <?php echo $Mail ?>
                                    </h3>
                                </div>
                            </li>
                            <li>
                                <div class="header-info-icon">
                                    <i class="las la-map-marked-alt"></i>
                                </div>
                                <div class="header-info-text">
                                    <h3><span>Address</span>
                                        <?php echo $Address ?>
                                    </h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/.mid-header-->
            <div class="nav-menu-wrapper" style="margin-top: 1.5rem">
                <div class="container">
                    <div class="nav-menu-inner">
                        <div class="site-logo">
                            <!-- <a href="index.html"><img src="assets/img/Logo.png" style="margin-top: -1rem" alt="Logo"></a> -->
                        </div><!--/.site-logo-->
                        <div class="header-menu-wrap">
                            <ul class="nav-menu">
                                <li class="active dropdown_menu">
                                    <a href="index.php">Home</a>

                                </li>
                                <li class="dropdown_menu">
                                    <a href="about.php">About</a>

                                </li>
                                <li class="dropdown_menu">
                                    <a href="services.php">Services</a>

                                </li>
                                <li class="dropdown_menu">
                                    <a href="gallery.php">Gallery</a>

                                </li>

                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <div class="menu-right-item">

                            <div class="sidebox-icon dl-sidebox-icon">
                                <i class="las la-bars"></i>
                            </div>
                            <a href="contact.php" class="menu-btn">Quote </a>
                        </div>
                        <div class="mobile-menu-icon">
                            <div class="burger-menu">
                                <div class="line-menu line-half first-line"></div>
                                <div class="line-menu"></div>
                                <div class="line-menu line-half last-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.nav-menu-->
        </header>
        <!--/.main-header-->


        <div id="popup-sidebox" class="popup-sidebox">
            <div class="sidebox-content">
                <div class="site-logo">
                    <!-- <a href="index.html"><img src="assets/img/Logo.png" alt="logo"></a> -->
                </div>
                <p>
                    <?php echo $AboutText[0] ?>
                </p>
                <ul class="sidebox-list">
                    <li class="call"><span>Call for rentals:</span>
                        <?php echo $Phone ?>
                    </li>
                    <li>
                        <span>You can find us at:</span>
                        <?php echo $Address ?>
                    </li>
                    <li><span>Email now:</span>
                        <?php echo $Mail ?>
                    </li>
                </ul>
            </div>
        </div>
        <!--/.popup-sidebox-->
        <div id="sidebox-overlay"></div>

        <!-- End Header -->