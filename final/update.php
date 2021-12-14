<?php

include 'database.php';
include 'helper.php';
include 'config.php';

	$recipeTitle = mysqli_real_escape_string($my_connection, $_POST['recipeTitle']);
	$recipeImage = mysqli_real_escape_string($my_connection, $_POST['recipeImage']);
	$recipeIngredients = mysqli_real_escape_string($my_connection, $_POST['recipeIngredients']);
	$recipeInstructions = mysqli_real_escape_string($my_connection, $_POST['recipeInstructions']);
    $recipeCategory = mysqli_real_escape_string($my_connection, $_POST['recipeCategory']);
	$id = $_GET['id'];
      
    $query = "UPDATE `info` SET ";
    $query .= "`recipeTitle` = '{$recipeTitle}', ";
    $query .= "`recipeImage` = '{$recipeImage}', ";
    $query .= "`recipeIngredients` = '{$recipeIngredients}', ";
    $query .= "`recipeInstructions` = '{$recipeInstructions}', ";
    $query .= "`recipeCategory` = '{$recipeCategory}' ";
    $query .= "WHERE id = '{$id}'";

    $my_connection->query($query);
//does not update category, why???

	
	

?>
<a href = "/all.php">Back to View All (admin)</a>