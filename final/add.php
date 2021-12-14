<?php
include_once 'adminHeader.php';

if (isset($_POST['submit'])){
$recipeTitle = mysqli_real_escape_string($my_connection, $_POST['recipeTitle']);
$recipeImage = mysqli_real_escape_string($my_connection, $_POST['recipeImage']);
$recipeIngredients = mysqli_real_escape_string($my_connection, $_POST['recipeIngredients']);
$recipeInstructions = mysqli_real_escape_string($my_connection, $_POST['recipeInstructions']);
$recipeCategory = mysqli_real_escape_string($my_connection, $_POST['recipeCategory']);

$query = "INSERT INTO `info`(`recipeTitle`, `recipeImage`, `recipeIngredients`, `recipeInstructions`, `recipeCategory`)";
$query .= "VALUES ('{$recipeTitle}','{$recipeImage}','{$recipeIngredients}','{$recipeInstructions}','{$recipeCategory}')";

$my_connection->query($query);
}
?>

<html>
<body>
	<div>
		<h2 >Add Recipe</h2>
		<form  action="" method="POST">
			
			<label for="recipeTitle">Title:</label>
			<input class = "nop" type="text" name="recipeTitle">
<br>
			<label for="recipeImage">Add Image</label>
			<input class="ye" type="file" name="recipeImage" placeholder="Insert Image:" > 

			<div >
				<label for="recipeIngredients">Ingredients:</label>
				<p >Write out your ingredients.</p>
				<div class="ye">
					<textarea  name="recipeIngredients" placeholder="Ingredient 1"></textarea>
				</div>
			</div>

			<div>
				<label for="recipeInstructions">Instructions:</label>
				<p >Write out your instructions.</p>
				<div class="ye">
					<textarea  type="text"  name="recipeInstructions" placeholder="Step 1"></textarea>
				</div>
			</div>

			<div>
				<label for="recipeCategory">Instructions:</label>
				<p >Enter category of either breakfast, lunch, or dinner with no capital letters</p>
				<div class="ye">
					<textarea  type="text"  name="recipeCategory" placeholder="Lunch"></textarea>
				</div>
			</div>

			<input type="hidden" name="imageBase64" id="imageBase64" />
			<div class="ye">
			<button  type="submit" value="Submit" name="submit">Add Recipe</button>
</div>
		</form>
	</div>
<body>
</html>
