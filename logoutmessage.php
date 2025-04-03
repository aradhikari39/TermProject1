<?php
$title = 'Logout';
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
    
            <div class="custom-form p-5">
                
                <h1 class="custom-header mb-4">You Have Been Logged Out</h1>
                <p class="lead normalname mb-4">
                    Thank you for visiting Zoo Explorer.
                </p>
                
                <!-- Action Buttons -->
                <div class="d-flex justify-content-center gap-3 mt-4">
                    <a href="loginform.php" class="btn custom-btn">
                      Log In Again
                    </a>
                    <a href="index.php" class="btn btn-outline-secondary">
                        Return Home
                    </a>
                </div>
            </div>
            
            <!-- Security Message -->

        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>