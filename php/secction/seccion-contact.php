<section class="booking-section">
    <div class="container">
        <div class="row pos-relative padding">
            <div class="col-lg-4">
                <div class="booking-car wow fade-in-left" data-wow-delay="200ms"></div>
            </div>
            <div class="col-lg-8">
                <div class="booking-wrap">
                    <div class="section-heading mb-30">
                        <h4><span></span>Online Booking</h4>
                        <h2 class="white">Appointment Registration</h2>
                    </div>
                    <form action="book-ride.php" id="book-taxi-ride">
                        <div class="booking-form">
                            <div class="form-field">
                                <i class="las la-user-tie"></i>
                                <input type="text" id="full-name" name="full-name" class="form-control"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-envelope-open"></i>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                    required>
                            </div>
                            <div class="form-field">
                                <i class="las la-tags"></i>
                                <select name="package-type" id="type" class="niceSelect">

                                    <option value="business">
                                        <?php echo $SN[1] ?>
                                    </option>
                                    <option value="economy">
                                        <?php echo $SN[2] ?>
                                    </option>
                                    <option value="vip-spacial">
                                        <?php echo $SN[3] ?>
                                    </option>
                                    <option value="comfort">
                                        <?php echo $SN[4] ?>
                                    </option>
                                </select>
                            </div>

                            <div class="form-field">
                                <i class="las la-map-marker"></i>
                                <input type="text" id="start-dest" name="start-dest" class="form-control"
                                    placeholder="Start Destination" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-map-marker"></i>
                                <input type="text" id="end-dest" name="end-dest" class="form-control"
                                    placeholder="End Destination" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-calendar"></i>
                                <input type="text" id="ride-date" name="ride-date" class="form-control date-picker"
                                    placeholder="Select Date" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-clock"></i>
                                <input type="text" id="ride-time" name="ride-time" class="form-control time-picker"
                                    placeholder="Select Time" required>
                            </div>
                            <div class="form-field">
                                <button id="submit" class="default-btn" type="submit">Send Quotation</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form><!-- Booking Form -->
                </div>
            </div>
        </div>
    </div>
</section><!--/.booking-section-->