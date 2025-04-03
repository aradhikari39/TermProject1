<?php $title = 'signupform'; ?>
<?php include 'includes/header.php'; ?>



<div class="custom-form">
    <h2 class="custom-header">BUY Tickets</h2>
    
    <form method="post" action="./tickets.php">
        <div class="form-row">
            <div class="form-group col-md-6 mb-3">
                <label for="inputEmail4">Number of Tickets</label>
                <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Number Of Tickets">
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="visitdate">Visit Date</label>
                <input name="visitdate" type="date" class="form-control" id="visitdate">
            </div>
        </div>
        
 
        
       
            <div class="form-group col-md-4 mb-3">
                <label for="inputState">Ticket Type</label>
                <select name="tickettype" id="tickettype" class="form-control">
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

<?php include 'includes/footer.php'; ?>