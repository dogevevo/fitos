<?php include('php/secction/header.php')?>
<section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>About Us</h4>
                <h2><?php echo $servicesTitle[0]?></h2>
                <p>Comprehensive Solutions <br> for a Transformed Space! </p>
            </div>
        </div>
</section>

<?php include('php/secction/seccion-about.php')?>

<section class="testimonial-section bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading mb-10">
                        <h4><span></span>Why Choose us:</h4>
                        <h2><?php echo $Company?></h2>
                        <p><?php echo $AboutText[0]?></p>
                    </div>
                    <div class="swiper-outside testi-pagination">
                        <div class="testimonial-carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p><?php echo $AboutText[1]?></p>
                                        <div class="testi-author">
                               
                                           
                                        </div>
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="swiper-pagination"></div><!-- Carousel Dots -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-wrap">
                        <div class="section-heading mb-30">
                            <h4 class="white"><span></span>Why Choose Us!</h4>
                            <h2 class="white">Why our <?php echo $Company?> are the best?</h2>
                            <p class="white"><?php echo $ChooseUs[0]?></p>
                        </div>
                        <!--/.section-heading-->
                        <ul class="ridek-features">
                            <li>
                                <div class="feature-icon">
                                    <i class="las la-gem"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Customer Satisfaction</h3>
                                    <p><?php echo $ChooseUs[1]?></p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-icon">
                                    <i class="las la-taxi"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Reliability</h3>
                                    <p><?php echo $ChooseUs[2]?></p>
                                </div>
                            </li>
                            <li>
                                <div class="feature-icon">
                                    <i class="las la-tachometer-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Experience and Expertise</h3>
                                    <p><?php echo $ChooseUs[3]?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.testimonial-section-->




<section class="cta-section padding">
        <div class="cta-men"></div>
        <div class="container">
            <div class="cta-content">
                <h2>Call Us Now <span>Get your Quotation</span> <br> For Your Next work!</h2>
                <p>We successfully cope with tasks of varying complexity,<br>guarantees and regularly master new technologies.</p>
                <div class="cta-call">
                    <i class="las la-phone-volume"></i>
                    <p><span>Call us:</span><a href="<?php echo $PhoneRef?>"><?php echo $Phone?></a></p>
                </div>
            </div>
        </div>
    </section>
    <!--/.cta-section-->


    <?php 
          include('php/secction/footer.php'); 
    ?>