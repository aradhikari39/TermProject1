<?php $title='login'; ?>
<?php
session_start();
require_once 'includes/connfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

   
    $query = "SELECT client_id, password FROM client_info WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);


        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['client_id'];  

           
            header("Location: index.php");
            exit();
        } else {
            header("Location: logininvalid.php");
        }
    } else {
        header("Location: logininvalid.php");
    }
}
?>
