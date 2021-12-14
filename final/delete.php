<?php
$page_title = 'Delete';
include_once 'adminHeader.php';

    $recipe_id = $_GET['id'];
    
    $sql = mysqli_query($my_connection, "DELETE FROM info WHERE id =$recipe_id");

    $db_results = mysqli_query($my_connection, $sql);
    
    if ($db_results) {
        redirectTo('/all.php');
    } 


?>