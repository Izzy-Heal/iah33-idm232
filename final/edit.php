<?php
$page_title = 'Edit';
$body_class = 'add-recipe';

include_once 'adminHeader.php';


if (isset($_POST['update'])) {
    $recipe_id = $_POST['recipe_id'];

    if ($_GET['id'] != $recipe_id) {
        redirectTo('edit.php?id=' . $_GET['id'] . '&error=ID does was not found in the database');
    }
    $title = mysqli_real_escape_string($con, $_POST['recipeTitle']);
    $recipeIngredients = mysqli_real_escape_string($con, $_POST['recipeIngredients']);
    $recipeInstructions = mysqli_real_escape_string($con, $_POST['recipeInstructions']);
    $imageBase64 = $_POST['imageBase64'];

    $sql = 'UPDATE recipe SET ';
    $sql .= "recipeTitle = '{$title}', ";
    $sql .= "recipeDetails = '{$recipeDetails}', ";
    $sql .= "recipeIngredients = '{$recipeIngredients}', ";
    $sql .= "recipeInstructions = '{$recipeInstructions}', ";
    $sql .= "recipeNutrition = '{$recipeNutrition}', ";
    $sql .= "recipeImage = '{$imageBase64}' ";
    $sql .= "WHERE id = {$recipe_id}";

    $db_results = mysqli_query($con, $sql);

    if ($db_results && $db_results->num_rows > 0) {
        redirectTo('all.php?success=');
    } else {
        redirectTo('all.php?id=' . $recipe_id . '&error=' . mysqli_error($con));
    }
} elseif (isset($_GET['id'])) {
    $recipe_id = $_GET['id'];
    $sql = 'SELECT * ';
    $sql .= 'FROM recipe ';
    $sql .= 'WHERE id=' . $recipe_id;

    $db_results = mysqli_query($con, $sql);
    if ($db_results) {
        $user = $row = mysqli_fetch_assoc($db_results);
    } else {
        redirectTo('all.php?error=' . mysqli_error($con));
    }
} else {
    redirectTo('all.php');
}

?>
<Script>
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
<div class="hp-content hp-content-secondary" id="category-content">
	<div>
		<h2 class="secondary-title roboto">Add Recipe</h2>
		<form method="POST" id="addRecipe" action="add-to-db.php" enctype="multipart/form-data">
			<label for="title">Title:</label>
			<input type="text" id="title" name="recipeTitle">

			<label for="imageFile">Add File</label>
			<input type="file" id="imageFile" name="recipeImage" placeholder="Insert Image:" onchange="updateBase64()">

			<div class="field_wrapper wrapper-style">
				<label for="ingredients">Ingredients:</label>
				<p class="roboto add-recipe-note">Use the '|' (vertical bar) key to separate each ingredient</p>
				<div>
					<textarea class="add-text" id="ingredientList" name="recipeIngredients" placeholder="Ingredient 1"><?php echo $user['$recipeIngredients']; ?></textarea>
				</div>
			</div>

			<div class="field_wrapper2 wrapper-style">
				<label for="instructions">Instructions:</label>
				<p class="roboto add-recipe-note">Use the '|' (vertical bar) key to separate each instruction</p>
				<div>
					<textarea class="add-text" type="text" id="instructionList" name="recipeInstructions" placeholder="Step 1"><?php echo $user['recipeInstructions']; ?></textarea>
				</div>
			</div>

			<input type="hidden" name="imageBase64" id="imageBase64" />
			<button type="submit" value="Submit" name="submit">Done Editing!</button>
		</form>

	</div>

</div>

</body>

</html>
