<?php 
$title = 'logout';
session_start();

if (!isset($_SESSION['user_id'])) {
    echo '<script>
        alert("You need to be logged in to logout!");
        localStorage.removeItem("isLoggedIn");
        window.location.href = "loginform.php";
    </script>';
    exit();
} else {
    session_destroy();
    echo '<script>
        localStorage.removeItem("isLoggedIn");
        window.location.href = "logoutmessage.php";
    </script>';
    exit();
}
?>