<?php 
$title = 'loginform';
session_start();

if (isset($_SESSION['user_id'])) {
    echo '<script>alert("You are already logged in!");</script>';
    header("Refresh: 0; url=index.php");
    exit();
}

$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
unset($_SESSION['error']);
?>

<?php include 'includes/header.php'; ?>

<div class="custom-form">
    <form method="POST" action="login.php">
        <h2 class="custom-header">Login to Your Account</h2>
        
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required 
                   value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
        </div>
        
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="custom-btn">LOGIN</button>
        
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger mt-3" style="border-left: 4px solid #dc3545;">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
    </form>
</div>

<?php include 'includes/footer.php'; ?>