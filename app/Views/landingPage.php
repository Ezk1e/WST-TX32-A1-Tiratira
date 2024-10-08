<?= $this->extend('layout/main_layout') ?>
<?= $this->section('content') ?>

    <?= $this->include('components/landing/hero_section') ?>
    
    <div class = "container mb-5 mt-5">
        <div class="mb-5 p-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="about-body">
                        <h5 class="about-title text-center">Why Everyone Flies?</h5>
                        <p class="about-text text-black">Cebu Pacific operates the widest network in the Philippines, offering flights to Manila, Cebu, Davao, Iloilo, Clark, and more! With flexible bookings, low fares, and global best safety practices, the airline continues to boost travel confidence for everyJuan by providing connectivity to key cities in Asia, Australia, and the Middle East.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 col-sm-10 m-auto">
                    <img src="assets/images/Graphic1.png" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>

    <section class="boxes mb-5">
        <div class="container">
            <div class="box">
                <a href="<?= base_url()?>" class="navbar-brand text-center fs-5">
                    <img class="buttons" src="assets/images/logo/buttontest.jpg">
                    <h3>Check In</h3>
                </a>
            </div>
            <div class="box">
            <a href="<?= base_url()?>" class="navbar-brand text-center fs-5">
                    <img class="buttons" src="assets/images/logo/buttontest.jpg">
                    <h3>Flight Status</h3>
                </a>
            </div>
            <div class="box">
            <a href="<?= base_url()?>" class="navbar-brand text-center fs-5">
                    <img class="buttons" src="assets/images/logo/buttontest.jpg">
                    <h3>Book Flight</h3>
                </a>
            </div>
        </div>
    </section>

    <section class="flights mb-5">
        <div class="home container">
            <h1 class="text-center mb-4">Book Flights from</h1>
            <div id="flightsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <p class="ubuntu text-center">Manila</p>
                            <img src="assets/images/places/Manila.jpg" class="img-hv places img-fluid rounded mb-3" alt="Manila">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <p class="ubuntu text-center">Cebu</p>
                            <img src="assets/images/places/Cebu.jpg" class="img-hv places img-fluid rounded mb-3" alt="Cebu">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <p class="ubuntu text-center">Davao</p>
                            <img src="assets/images/places/Davao.jpg" class="img-hv places img-fluid rounded mb-3" alt="Davao">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#flightsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon custom-carousel-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#flightsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon custom-carousel-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

<?= $this->endSection('content') ?>