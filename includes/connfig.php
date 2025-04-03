<?php
    $servername = "localhost";  	// Server name or IP address
    $username = "root";     		// MySQL username
    $password = "";     			// MySQL password
    $dbname = "termproject";	  


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>
