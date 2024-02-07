<?php
function connect_to_mysql() {
    $connection = mysqli_connect("localhost", "root", "", "agri");
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $connection;
}