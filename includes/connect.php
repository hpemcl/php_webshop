<?php
    // Opret forbindelse til databasen
    $con = mysqli_connect('localhost', 'root', '', 'mystore');

    // Tjek forbindelsen
    if (!$con) {
        die("Forbindelsesfejl: " . mysqli_connect_error());
    };
?>
