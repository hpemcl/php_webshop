<?php
    // Opret forbindelse til databasen
    $con=mysqli_connect('localhost', 'root', 'Hent5fisk!', 'mystore');

    // Tjek forbindelsen
    if (!$con) {
        // Udskriver fejlbeskeden
        die("Forbindelsen mislykkedes: " . mysqli_connect_error());
    }
?>
