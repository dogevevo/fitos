<section class="pricing-section bg-grey bd-bottom padding">
    <div class="container">
        <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
            <h4><span></span>Lets Go With Us!</h4>
            <h2>Choose Your machine to Ride!</h2>
            <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly
                master new technologies.</p>
        </div><!--/.section-heading-->
       
        <!--Tab Menu-->
        <div class="tab-content" id="pricing-tab-content">
            <div class="tab-pane fade show active" id="hybrid-taxi-content" role="tabpanel"
                aria-labelledby="hybrid-taxi-content">
                <div class="row">
                    <?php for ($b = 1; $b <= 3; $b++) { ?>
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="pricing-item">
                                <div class="pricing-head-wrap">
                                    <div class="pricing-car">
                                        <img src="assets/img/pricing-car.png" alt="car">
                                        <div class="price">$2.50/km</div>
                                    </div>
                                </div>
                                <div class="pricing-head">
                                    <h3><a href="taxi-details.html">BMW X5 2008</a></h3>
                                    <span class="location">Chicago</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>Initial Charge: <span>$2.50</span></li>
                                    <li>Per Mile/KM: <span>$4.20</span></li>
                                    <li>Per Stopped Trafic: <span>$1.50</span></li>
                                    <li>Passengers: <span>4 Person</span></li>
                                    <li><a href="book-taxi.html" class="default-btn">Book Taxi Now</a></li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>

                    
                </div>
            </div>
        </div>


    </div>
    </div><!-- Tab Content -->
    </div>
</section>
<!--/.pricing-section-->
