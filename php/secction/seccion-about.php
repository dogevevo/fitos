<!-- Star About Area
    ============================================= -->
<section class="about-section padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-img">
                    <img class="about-img1 wow fade-in-left" data-wow-delay="200ms" src="assets/img/about-1.png"
                        alt="img">
                    <img class="about-img2 wow fade-in-bottom" data-wow-delay="400ms" src="assets/img/about-2.png"
                        alt="img">

                </div>
            </div>
            <div class="col-md-6">
                <div class="section-heading mb-40 wow fade-in-right" data-wow-delay="200ms">
                    <h4><span></span>About Our Company</h4>
                    <h2><?php echo $About[0] ?></h2>
                    <p><?php echo $About[1] ?>
                    </p>
                </div>
                <!--/.section-heading-->
                <ul class="about-info wow fade-in-right" data-wow-delay="400ms">

                    <li>
                        <h2><span>Call For a Quotation</span><a href="tel:<?php echo $Phone ?>">
                                <?php echo $Phone ?>
                            </a></h2>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/.about-section-->