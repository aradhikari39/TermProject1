<?php $title = 'signupform'; ?>
<?php include 'includes/header.php'; ?>



<div class="custom-form">
    <h2 class="custom-header">SIGN UP WITH US</h2>
    
    <form method="post" action="./signup.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input name="address" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input name="city" type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Province</label>
                <select name="province" id="inputState" class="form-control">
                    <option selected>Alberta</option>
                    <option>British Columbia</option>
                    <option>Manitoba</option>
                    <option>New Brunswick</option>
                    <option>Newfoundland</option>
                    <option>Northwest territories and Labrador</option>
                    <option>Nova scotia</option>
                    <option>Nunavut</option>
                    <option>Ontario</option>
                    <option>Prince Edward Island</option>
                    <option>Quebec</option>
                    <option>Saskatchewan</option>
                    <option>Yukon</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Postal Code</label>
                <input name="postalcode" type="text" class="form-control" id="inputZip">
            </div>
        </div>
        
        <button type="submit" class="custom-btn">SIGN UP</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>