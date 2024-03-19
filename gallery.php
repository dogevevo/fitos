<?php include('php/secction/header.php') ?>
<section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>gallery</h4>
                <h2><?php echo $servicesTitle[0]?></h2>
                <p>Comprehensive Solutions <br> for a Transformed Space! </p>
            </div>
        </div>
</section>
<section class="our-taxi padding">
        <div class="container">
            <div class="row">
                
            <?php for ($b = 1; $b <= 16; $b++) { ?>
                <div class="col-lg-4 col-md-6 sm-padding">

                    <div class="pricing-item">
                        <div class="pricing-head-wrap">
                            <div class="pricing-car">
                                <img src="assets/img/gallery/<?php echo $b?>.png" alt="car">
                               
                            </div>
                        </div>
                       
                    </div>
                    
                </div>
            <?php } ?>
                
    
            </div>
        </div>
    </section><!--/.our-taxi-->



<?php include('php/secction/footer.php') ?>