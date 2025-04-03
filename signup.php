<?php $title='signup'; ?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/connfig.php'; ?>


<div class="container">
    <div class="row justify-content-center">
        <div class ="col-md-8">

            <?php 
                If($_SERVER["REQUEST_METHOD"] == "POST")
                {

                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $city = $_POST['city'];
                    $province = $_POST['province'];
                    $postalcode = $_POST['postalcode'];
                    $password=$_POST['password'];

                    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


                    $email = mysqli_real_escape_string($conn, $email);
                    $address = mysqli_real_escape_string($conn, $address);
                    $hashedPassword= mysqli_real_escape_string($conn, $hashedPassword);
                    $city = mysqli_real_escape_string($conn, $city);
                    $province = mysqli_real_escape_string($conn, $province);
                    $postalcode = mysqli_real_escape_string($conn, $postalcode);


                    $sql = "INSERT INTO client_info (email, password, address, city, province, postalcode) VALUES ('$email','$hashedPassword', '$address', '$city', '$province', '$postalcode')";
            
                    if (mysqli_query($conn, $sql)) 
                    {
                        echo " <h1> Record added Succesfully..... </h1>";
                    } 
                    else 
                    {
                        echo "Error: " . mysqli_error($conn);
                    }

                    
                   
                }
                ?>


        </div>
    </div>
</div>    








<?php include'includes/footer.php';?>