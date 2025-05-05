<?php

    $connections = mysqli_connect("localhost","root","","eva_inventory");
    if (mysqli_connect_errno()) {
        echo "Error: " . mysqli_connect_error();
    }

?>