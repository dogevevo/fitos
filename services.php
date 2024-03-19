<?php include('php/secction/header.php') ?>


    
    
<section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>Our Services!</h4>
                <h2><?php echo $servicesTitle[0]?></h2>
                <p>Comprehensive Solutions <br> for a Transformed Space! </p>
            </div>
        </div>
    </section>
    <!--/.page-header-->

    <section class="service-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="row">
            <?php for ($b = 1; $b <=6; $b++) { ?>   
            <div class="col-lg-4 col-sm-6 padding-15">
                    <div class="service-item">
                        <div class="service-thumb">
                            <img src="assets/img/services/<?php echo $b?>.jpg" alt="img">
                            <div class="service-shape-wrap">
                               
                            </div>
                            <!--<div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>-->
                        </div>
                        <div class="service-content">
                            <h3><a href="services.php"><?php echo $SN[$b]?></a></h3>
                            <p><?php echo $SD[$b]?></p>
                            <a class="read-more" href="services.php">Read More</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
               
               
            </div>
        </div>
    </section>
    <!--/.service-section-->

    <section class="cta-section-2 padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="cta-content">
                        <h4>Junk Removal Services!</h4>
                        <h2>Feel your journey with <?php echo $Company?>!</h2>
                        
                    </div>
                </div>
               
                <div class="col-lg-3">
                    <div class="cta-men"></div>
                </div>
            </div>
        </div>
    </section>
    <!--/.cta-section-->

   




<?php include('php/secction/footer.php') ?>
