<?php // include('revitems.php');?>

























<!-- footoer -->

<div class=".container_icons_new">
    <!-- (p>lorem)*20 (código a usar si tienes instalada la extensión emmet)-->
</div>

<div class="social_icons_news">
    <!-- <a href="<?php echo $Facebook ?>"><img src="img/icons/facebook.png" alt="facebook"></a> -->
    <a href="<?php echo $Url_Map ?>"><img src="img/icons/google-maps.png" alt="linkedin"></a>
    <a href="<?php echo $PhoneRef ?>"><img src="img/icons/Phone.png" alt="linkedin"></a>
    <a href=" https://wa.me/<?php echo $PhoneRef?>" target="_blank"><img src="img/icons/whatsapp.png" alt="linkedin"></a>
    <!-- <a href="https://www.instagram.com/"><img src="img/icons/instagram.png" alt="instagram"></a> -->
    <!-- <a href="https://www.google.com/intl/es-419_ni/business/"><img src="img/icons/business.png" alt="business"></a> -->
</div>


<style>
    * {
        box-sizing: border-box;
    }

    .container_icons_new {
        width: 95%;
        max-width: 900px;
        padding: 32px 64px;
        margin: auto;
        z-index: 2;
    }

    .social_icons_news {
        /*las imágenes usadas tienen width de 48px*/
        width: 48px;
        position: fixed;
        top: 50px;
        left: 0;
    }

    /* Extra centrado vertical*/

    .social_icons_news {
        /*border:1px solid #000;*/
        top: 96%;
        height: 205px;
        /*para poner height 192 deberíamos haber indicado en el reset de estilos font-size:0;*/
        margin-top: -200px;
        z-index: 2;
    }
</style>











<footer class="footer-section">
    <div class="footer-top-wrap bg-grey">
        <div class="container">
            <div class="footer-top">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="brand">
                            <!-- <a class="footer-logo" href="index.html"><img src="assets/img/Logo.png" alt="logo"></a> -->
                            <p><?php echo $About[0]?></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-call">
                            <i class="las la-phone-volume"></i>
                            <p><span>Call For Quotation</span><a href="t<?php echo $PhoneRef ?>">
                                    <?php echo $Phone ?>
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/.footer-top-wrap-->
    <div class="footer-mid-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer-item">
                        <div class="widget-title">
                            <h3>Working Hours</h3>
                        </div>
                        <ul class="footer-contact">
                            <li><?php echo $Schedule ?> </li>
                            <li><?php echo $Payment ?> </li>
                            <li><?php echo $Cover ?> </li>
                            <li><?php echo $Estimates ?> </li>

                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer-item footer-list">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <ul class="footer-links">
                            <?php for ($b = 1; $b <= 5; $b++) { ?>
                                <li><a href="services.php">
                                        <?php echo $SN[$b] ?>
                                    </a></li>
                            <?php } ?>
                            <li><a href="services.php">And more...</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer-item">
                        <div class="widget-title">
                            <h3>Head Office</h3>
                        </div>
                        <ul class="footer-contact">
                            <li><span>Location:</span>
                                <?php echo $Address ?>
                            </li>
                            <li><span>Join Us:</span>
                                <?php echo $Mail ?>
                            </li>
                            <li><span>Main:</span>
                                <?php echo $Phone ?>
                            </li>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="footer-item subscribe-wrap">
                        <div class="widget-title">
                            <h3>Cover:</h3>
                        </div>
                        <ul class="footer-contact">
                            <li>Clackamas, Oregón</li>
                            <li>Gresham, Or</li>
                            <li>Happy Valley, or</li>
                            <li>Tigard, Or</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="running-taxi">
                <div class="taxi"></div>
                <div class="taxi-2"></div>
                <div class="taxi-3"></div>
            </div> -->
    </div>


    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top">
            <i class="las la-arrow-up"></i>
        </button>
    </div>
    <!--scrollup-->

    <div class="dl-cursor">
        <div class="cursor-icon-holder"><i class="las la-times"></i></div>
    </div>
    <!--/.dl-cursor-->

    <!--jQuery Lib-->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
    <script src="assets/js/vendor/jquary-3.6.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="assets/js/vendor/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/swiper.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/venobox.min.js"></script>
    <script src="assets/js/vendor/smooth-scroll.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/book-ride.js"></script>
    <script src="assets/js/main.js"></script>
    </body>

    </html>