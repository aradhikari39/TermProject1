<?php
$title = 'Not Logged In!';
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
    
            <div class="custom-form p-5">
                
                <div class="alert alert-danger">You must be <a href="loginform.php">logged in</a> to purchase tickets</div> 
           
                
               
                <div class="d-flex justify-content-center gap-3 mt-4">
                    <a href="loginform.php" class="btn custom-btn">
                      Log In 
                    </a>
                    <a href="index.php" class="btn btn-outline-secondary">
                        Return Home
                    </a>
                </div>
            </div>
            
          

        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>