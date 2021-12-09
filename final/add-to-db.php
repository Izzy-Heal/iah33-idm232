<?php
include 'database.php';
include 'helper.php';

if(isset($_POST["submit"])){
	$recipeTitle = mysqli_real_escape_string($db_connection, $_POST['recipeTitle']);
	$recipeImage = mysqli_real_escape_string($db_connection,$_POST['imageBase64']);
	$recipeIngredients = mysqli_real_escape_string($db_connection, $_POST['recipeIngredients']);
	$recipeInstructions = mysqli_real_escape_string($db_connection, $_POST['recipeInstructions']);


	$query = 'INSERT INTO recipe (recipeTitle, recipeImage, recipeIngredients, recipeInstructions)';
	$query .= "VALUES ('{$recipeTitle}', '{$recipeImage} ', '{$recipeIngredients}', '{$recipeInstructions}')";

	$db_results = mysqli_query($con, $sql);

	if ($db_results) {
		echo "<script> window.location = 'index.php';</script>";
	} 
	else {
	redirectTo('all.php?error=' . mysqli_error($con));}

?>