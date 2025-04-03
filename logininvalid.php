<?php
$title = 'Logout';
require_once 'includes/header.php';
?>

<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
    
            <div class="custom-form p-5">
                
                <div class="alert alert-danger">Username or password is incorrect. Try <a href="loginform.php">logging in</a> again.</div> 
           
                
               
                <div class="d-flex justify-content-center gap-3 mt-4">
                  
                    <a href="index.php" class="btn btn-outline-secondary">
                        Return Home
                    </a>
                </div>
            </div>
            
          

        </div>
    </div>
</main>

<?php require_once 'includes/footer.php'; ?>