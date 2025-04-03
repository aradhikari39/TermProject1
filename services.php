<?php
$title = 'Our Services';
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            
            <div class="text-center mb-5">
                <h1 class="custom-header">Zoo Services</h1>
                <p class="lead normalname">Discover the special services we offer to make your visit unforgettable</p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-graduation-cap fa-3x mb-3" style="color: rgb(25, 135, 84);"></i>
                            <h3 class="h5 normalname">Educational Tours</h3>
                            <p class="normalname">Guided tours with our expert zoologists for schools and groups</p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-birthday-cake fa-3x mb-3" style="color: rgb(25, 135, 84);"></i>
                            <h3 class="h5 normalname">Birthday Parties</h3>
                            <p class="normalname">Celebrate special days with our animal-themed party packages</p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-camera fa-3x mb-3" style="color: rgb(25, 135, 84);"></i>
                            <h3 class="h5 normalname">Photo Sessions</h3>
                            <p class="normalname">Professional photography with select animals (safety first)</p>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-utensils fa-3x mb-3" style="color: rgb(25, 135, 84);"></i>
                            <h3 class="h5 normalname">Dining Options</h3>
                            <p class="normalname">Variety of food choices throughout the zoo</p>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-shopping-bag fa-3x mb-3" style="color: rgb(25, 135, 84);"></i>
                            <h3 class="h5 normalname">Gift Shop</h3>
                            <p class="normalname">Wildlife-themed souvenirs and gifts</p>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <i class="fas fa-wheelchair fa-3x mb-3" style="color: rgb(25, 135, 84);"></i>
                            <h3 class="h5 normalname">Accessibility</h3>
                            <p class="normalname">Full accessibility services for all visitors</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center mt-5">
                <h2 class="h4 mb-3" style="color: rgb(25, 135, 84);">Ready to experience our services?</h2>
                <a href="ticketsform.php" class="btn custom-btn">Book Now</a>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>