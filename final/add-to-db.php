<?php
include 'database.php';
include 'helper.php';

if(isset($_POST["submit"])){
	$recipeTitle =  $_POST['recipeTitle'];
	$recipeImage = $_POST['imageBase64'];
	$recipeIngredients =  $_POST['recipeIngredients'];
	$recipeInstructions =  $_POST['recipeInstructions'];

	$query = 'INSERT INTO recipe (recipeTitle, recipeImage, recipeIngredients, recipeInstructions)';
	$query .= "VALUES ('{$recipeTitle}', '{$recipeImage} ', '{$recipeIngredients}', '{$recipeInstructions}')";

}

?>

