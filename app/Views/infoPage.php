<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>

    <div class = "container mb-5">
        <h1 class="text-center fw-bold display-4 mt-5 bg-yellow py-3 mx-5 rounded-2">Booking, Check-in, and Boarding</h1>
        <div class="p-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="m-auto">
                    <div class="about-body travel-info">
                        <h5 class="about-title-VPV">Booking Guidelines</h5>
                        <p class="about-text text-black">Booking a flight less than 59 minutes before its scheduled time of departure? Internet bookings will no longer be allowed during this period, and bookings can only be done through our sales offices. You may contact us here to check the availability of your preferred flight.</p>
                        <h5 class="about-title-VPV">Check-In and Boarding Guidelines</h5>
                        <ul style="padding-left: 80px;">
                            <li class="about-text">Check in online before going to the airport to avoid queuing.</li>
                            <li class="about-text">Check-in counters for domestic flights strictly close 45 mins before the scheduled time of departure. Meanwhile, check-in counters for international flights close one (1) hour before the scheduled time of departure.</li>
                            <li class="about-text">Wear a face mask.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class = "container justify-content-center">
            <div class="p-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-lg-5 col-md-12 col-sm-12 travel-info mx-auto">
                        <div class="about-body">
                            <h5 class="about-title-VPV bg-yellow">Online Check-in</h5>
                            <ul style="padding-left: 80px; margin-bottom: 70px;">
                                <li class="about-text">For international flights - available from 2 days up to 2 hours before your flight.</li>
                                <li class="about-text">For domestic flights - available from 2 days up to 1 hour before your flight.</li>
                            </ul>
                            <h5 class="about-title-VPV bg-yellow">Online Check-in is not allowed for:</h5>
                            <ul style="padding-left: 80px;">
                                <li class="about-text">Unaccompanied Minors.</li>
                                <li class="about-text">Guests who must submit a medical certificate.</li>
                                <li class="about-text">Guests requiring special assistance and bag service.</li>
                                <li class="about-text">Guests on group bookings (if the booking has at least 20 passengers).</li>
                                <li class="about-text">Guests with outstanding balance.</li>
                                <li class="about-text">Guests with tax exemptions (i.e., OFWs).</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-10 col-sm-10 mx-auto">
                        <img src="assets/images/Travel1.jpg" class="img-fluid w-60 rounded">
                        <img src="assets/images/Travel2.jpg" class="img-fluid w-70 rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection('content') ?>