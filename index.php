<?php
$title = 'Home';
require_once 'includes/header.php';
?>

<main class="pb-5">
    <!-- Plan Your Visit Section -->
    <section class="container mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="custom-header mb-3">Plan Your Visit</h2>
                <p class="lead normalname">
                    Experience the magic of wildlife up close! Our zoo offers unforgettable encounters with 
                    animals from every corner of the planet. Book your tickets today for a day filled with 
                    discovery and adventure.
                </p>
                <p class="normalname">
                    We recommend visiting on weekdays for a more relaxed experience. Special feeding times 
                    and keeper talks occur daily - check our schedule for details.
                </p>
                <a href="ticketsform.php" class="btn custom-btn mt-3">Purchase Tickets</a>
            </div>
            <div class="col-lg-6 mt-5">
                <img src="pictures/zoo-visit.jpeg" height="500" width="500" alt="Zoo Visit" class="img-fluid rounded shadow">
            </div>
        </div>
    </section>

    <!-- Animal Categories Section -->
    <section class="container mb-5">
        <h2 class="text-center mb-4 custom-header">Explore Our Animals</h2>
        <div class="row g-4">
            <div class="col-md-4 col-6">
                <a href="/TermProject/php/animals/mammals.php" class="card animal-card h-100 border-0 shadow-sm text-decoration-none">
                    <div class="card-body text-center">
                        <h3 class="h5 normalname">Mammals</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6">
                <a href="/TermProject/php/animals/reptiles.php" class="card animal-card h-100 border-0 shadow-sm text-decoration-none">
                    <div class="card-body text-center">
                        <h3 class="h5 normalname">Reptiles</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6">
                <a href="/TermProject/php/animals/amphibians.php" class="card animal-card h-100 border-0 shadow-sm text-decoration-none">
                    <div class="card-body text-center">
                        <h3 class="h5 normalname">Amphibians</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-6">
                <a href="/TermProject/php/animals/birds.php" class="card animal-card h-100 border-0 shadow-sm text-decoration-none">
                    <div class="card-body text-center">
                        <h3 class="h5 normalname">Birds</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-12">
                <a href="/TermProject/php/animals/pisces.php" class="card animal-card h-100 border-0 shadow-sm text-decoration-none">
                    <div class="card-body text-center">
                        <h3 class="h5 normalname">Pisces</h3>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <section class="container mb-5">
        <div class="row bg-light p-4 p-md-5 rounded">
            <div class="col-12">
                <h2 class="custom-header mb-4">Today's Featured Creature</h2>
                <p class="lead mb-4 normalname">
                    Meet our majestic African lions - the kings of our savanna exhibit. 
                    Visit today to catch their morning feeding at 10:30 AM.
                </p>
                
                <div class="booking-card p-4 mb-4" style="background-color: rgba(25, 135, 84, 0.1); border-left: 4px solid rgb(25, 135, 84);">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="h5 mb-2 normalname">Ready for Adventure?</h3>
                            <p class="mb-0 normalname">Book your tickets now for an unforgettable wildlife experience.</p>
                        </div>
                        <a href="ticketsform.php" class="btn custom-btn ms-3">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Zoo Features Section -->
    <section class="container">
        <h2 class="text-center custom-header">Zoo Features</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt fa-3x mb-3" style="color: rgb(25, 135, 84);"></i>
                        <h3 class="h5 normalname">Interactive Map</h3>
                        <p class="normalname">Navigate our expansive grounds with ease using our digital map.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-utensils fa-3x mb-3" style="color: rgb(25, 135, 84);"></i>
                        <h3 class="h5 normalname">Dining Options</h3>
                        <p class="normalname">Enjoy a variety of food options throughout the zoo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center">
                        <i class="fas fa-gift fa-3x mb-3" style="color: rgb(25, 135, 84);"></i>
                        <h3 class="h5 normalname">Gift Shop</h3>
                        <p class="normalname">Take home a souvenir from our wildlife-themed gift shop.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>