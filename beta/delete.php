<?php
$page_title = 'Delete';
$body_class = 'add-recipe';
include_once 'adminHeader.php';


if(isset($_GET['id'])){
    $recipe_id = $_GET['id'];
    $sql = mysqli_query($con, "DELETE FROM recipe WHERE id=$recipe_id") or die($sql->error());

    $db_results = mysqli_query($con, $sql);
    if ($db_results) {
        redirectTo('all.php');
    } else {
        redirectTo('all.php?error=' . mysqli_error($con));
    }
}

?>