<?php

session_start();

$title = 'Buy Tickets';
require_once 'includes/header.php'; 
require_once 'includes/connfig.php'; 
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $quantity = (int)$_POST['quantity'];
                $tickettype = (int)$_POST['tickettype'];
                $visitdate = $_POST['visitdate'];
                $user_id = $_SESSION['user_id'] ?? null;

                if (!$user_id) {
                    
                }
                
                // Validate inputs
                if ($quantity < 1) {
                    echo "<div class='alert alert-danger'>Quantity must be at least 1</div>";
                } elseif (empty($visitdate)) {
                    echo "<div class='alert alert-danger'>Please select a visit date</div>";
                } elseif (!$user_id) {
                    header("Location: youmustbeloggedin.php");
                    // echo '<div class="alert alert-danger">You must be <a href="loginform.php">logged in</a> to purchase tickets</div>';
                    // include 'includes/footer.php';
                    // exit();
                } else {
                    // Determine price
                    $price = match($tickettype) {
                        1 => 50,    // Adult
                        2 => 20,    // Child
                        3 => 20,    // Senior
                        4 => 120,   // Family Pack
                        5 => 200,   // Seasonal-Adult
                        6 => 80,    // Seasonal-Child
                        7 => 80,    // Seasonal-Senior
                        default => 0
                    };
                    
                    if ($price > 0) {
                        $total_price = $quantity * $price;
                        
                        // SECURE INSERT with prepared statement
                        $stmt = $conn->prepare("INSERT INTO purchase 
                            (user_id, ticket_id, quantity, total_price, visit_date) 
                            VALUES (?, ?, ?, ?, ?)");
                        $stmt->bind_param("iiids", $user_id, $tickettype, $quantity, $total_price, $visitdate);
                        
                        if ($stmt->execute()) {
                            echo '<div class="alert alert-success">
                                <h3>Purchase Successful!</h3>
                                <p>'.htmlspecialchars($quantity).' ticket(s) for $'.number_format($total_price, 2).'</p>
                                <p>Visit date: '.htmlspecialchars($visitdate).'</p>
                            </div>';
                        } else {
                            echo "<div class='alert alert-danger'>Error: ".htmlspecialchars($stmt->error)."</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger'>Invalid ticket type selected</div>";
                    }
                }
            }
            ?>
            
        

            <!-- Purchase Form -->
            <div class="custom-form">
                <h2 class="custom-header">BUY Tickets</h2>
                
                <form method="post" action="">
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label>Number of Tickets</label>
                            <input name="quantity" type="number" class="form-control" placeholder="Number Of Tickets" min="1" required>
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label>Visit Date</label>
                            <input name="visitdate" type="date" class="form-control" min="<?= date('Y-m-d') ?>" required>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Ticket Type</label>
                        <select name="tickettype" class="form-control" required>
                            <option value="" disabled selected>Select Ticket Type</option>
                            <option value="1">Adult - $50</option>
                            <option value="2">Child - $20</option>
                            <option value="3">Senior - $20</option>
                            <option value="4">Family Pack - $120</option>
                            <option value="5">Seasonal-Adult - $200</option>
                            <option value="6">Seasonal-Child - $80</option>
                            <option value="7">Seasonal-Senior - $80</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="custom-btn">Buy</button>
                </form>
            </div>
        </div> 
    </div> 
</div> 

<?php include 'includes/footer.php'; ?>