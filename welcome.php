<?php $title='welcome'; ?>
<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: loginform.php");
    exit();
}

$title = "Welcome";
include 'includes/header.php';
?>

<div class="container mt-5">
    <h1>Welcome!</h1>
    <p>You have successfully logged in.</p>
</div>

<?php include 'includes/footer.php'; ?>
