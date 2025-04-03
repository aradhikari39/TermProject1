<?php
$title = 'Contact Us';
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Contact Header -->
            <div class="text-center mb-5">
                <h1 class="custom-header">Contact Zoo Explorer</h1>
                <p class="lead normalname">We'd love to hear from you! Reach out with questions, feedback, or to plan your visit.</p>
            </div>

            <div class="row g-4">
                <!-- Contact Information -->
                <div class="col-md-6 mx-auto">
                    <div class="h-100">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body p-4">
                                <h2 class="h4 mb-4" style="color: rgb(25, 135, 84);">Contact Information</h2>
                                
                                <div class="d-flex mb-4">
                                    <div class="me-3 text-center" style="color: rgb(25, 135, 84);">
                                        <i class="fas fa-map-marker-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <h3 class="h6 normalname">Address</h3>
                                        <p class="normalname">324 Nottingham West<br>Brampton, Ontario, Canada</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex mb-4">
                                    <div class="me-3 text-center" style="color: rgb(25, 135, 84);">
                                        <i class="fas fa-phone-alt fa-2x"></i>
                                    </div>
                                    <div>
                                        <h3 class="h6 normalname">Phone</h3>
                                        <p class="normalname">(123) 456-7890<br>9:00 AM - 5:00 PM Daily</p>
                                    </div>
                                </div>
                                
                                <div class="d-flex mb-4">
                                    <div class="me-3 text-center" style="color: rgb(25, 135, 84);">
                                        <i class="fas fa-envelope fa-2x"></i>
                                    </div>
                                    <div>
                                        <h3 class="h6 normalname">Email</h3>
                                        <p class="normalname">info@zooexplorer.com<br>support@zooexplorer.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>