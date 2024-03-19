<?php include('php/secction/header.php') ?>
<section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>Contact</h4>
                <h2><?php echo $servicesTitle[0]?></h2>
                <p>Comprehensive Solutions <br> for a Transformed Space!</p>
            </div>
        </div>
</section>


<div class="map-wrapper pt-90">
<?php echo $GoogleMap?>
    </div><!-- /#google-map -->

    <section class="contact-section bd-bottom padding">
        <div class="map"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-details-wrap">
                        <div class="contact-title">
                            <h2>Have Any <span>Questions?</span></h2>
                            <p>Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us an email or fill out the contact form.</p>
                        </div>
                        <ul class="contact-details">
                            <li><i class="fas fa-map-marker-alt"></i><?php echo $Address?></span></h3></li>
                            <li><i class="fas fa-envelope"></i><?php echo $Mail?></li>
                            <li><i class="fas fa-phone"></i><?php echo $Phone?></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <form action="contact.php" method="post" id="ajax_contact" class="form-horizontal">
                            <div class="contact-title">
                                <h2>Contact With Us! <span></span></h2>
                            </div>
                            <div class="contact-form-group">
                                <div class="form-field">
                                    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required>
                                </div>
                                <div class="form-field">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-field">
                                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" required>
                                </div>
                                <div class="form-field message">
                                    <textarea id="message" name="message" cols="30" rows="4" class="form-control" placeholder="Message" required></textarea>
                                </div>
                                <div class="form-field">
                                    <button id="submit" class="default-btn" type="submit">Send Massage</button>
                                </div>
                            </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.contact-section-->

    

<?php include('php/secction/footer.php') ?>