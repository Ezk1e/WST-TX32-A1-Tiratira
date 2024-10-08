<!-- Header -->
<nav class="navbar navbar-expand-sm lightblue">
</nav>

<nav class="navbar navbar-expand-sm navbar-custom">
    <div class="container">
        <a href="<?= base_url() ?>" class="navbar-brand text-uppercase fs-5">
            <img src="assets/images/logo/CB2.png" alt="Logo" width="70" class="d-inline-block align-middle">
            Cebu Pacific
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>   
        </button>

        <div class="collapse navbar-collapse" id="list2">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() . 'travelInformation'?>" class="nav-link">Travel Info</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() . 'aboutUs' ?>" class="nav-link">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>