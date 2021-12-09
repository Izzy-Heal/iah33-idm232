<?php
$page_title = 'Add';

include_once 'adminHeader.php';

?>
<html>
<body>
<script>
	function updateBase64() {
		var file = document.querySelector('input[type=file]')['files'][0];
		var reader = new FileReader();
		var baseString;
		reader.onloadend = function() {
			baseString = reader.result;
			document.getElementById("imageBase64").value = baseString;
			console.log(baseString);
		};
		reader.readAsDataURL(file);
	}
</script>

	<div>
		<h2 class="secondary-title roboto">Add Recipe</h2>
		<form method="POST" id="addRecipe" action="add-to-db.php" enctype="multipart/form-data">
			<label for="title">Title:</label>
			<input type="text" id="title" name="recipeTitle">

			<label for="imageFile">Add Image</label>
			<input type="file" id="imageFile" name="recipeImage" placeholder="Insert Image:" onchange="updateBase64()">

			<div class="field_wrapper wrapper-style">
				<label for="ingredients">Ingredients:</label>
				<p class="roboto add-recipe-note">Use the '|' (vertical bar) key to separate each ingredient</p>
				<div>
					<textarea class="add-text" id="ingredientList" name="recipeIngredients" placeholder="Ingredient 1"></textarea>
				</div>
			</div>

			<div class="field_wrapper2 wrapper-style">
				<label for="instructions">Instructions:</label>
				<p class="roboto add-recipe-note">Use the '|' (vertical bar) key to separate each instruction</p>
				<div>
					<textarea class="add-text" type="text" id="instructionList" name="recipeInstructions" placeholder="Step 1"></textarea>
				</div>
			</div>

			<input type="hidden" name="imageBase64" id="imageBase64" />
			<button type="submit" value="Submit" name="submit">Add Recipe</button>
		</form>
	</div>

<body>
</html>
