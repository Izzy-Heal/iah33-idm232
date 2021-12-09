<?php
$db_connection = mysqli_connect(
    $app"localhost"
    $app"root"
    $app"root"
    $app"recipe"
);

if (!$db_connection) {
    echo 'Connection Error: ' . mysqli_connect_error();
    exit();
}
