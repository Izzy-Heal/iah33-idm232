<?php
$page_title = 'Add';

include_once 'adminHeader.php';

?>

<?php
	if(isset($_POST['submit'])){
	$recipeTitle =  $_POST['recipeTitle'];
	$recipeImage = $_POST['imageBase64'];
	$recipeIngredients =  $_POST['recipeIngredients'];
	$recipeInstructions =  $_POST['recipeInstructions'];

	$sql = "INSERT INTO recipe(recipeTitle, recipeImage, recipeIngredients, recipeInstructions) 
	VALUES( $recipeTitle , $recipeImage , $recipeIngredients, $recipeInstructions )";

}
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
		<h2 >Add Recipe</h2>
		<form method="POST" action="" enctype="multipart/form-data">
			<label for="title">Title:</label>
			<input type="text" name="recipeTitle">

			<label for="imageFile">Add Image</label>
			<input type="file" name="recipeImage" placeholder="Insert Image:" onchange="updateBase64()">

			<div >
				<label for="ingredients">Ingredients:</label>
				<p >Use the '|' (vertical bar) key to separate each ingredient</p>
				<div>
					<textarea  name="recipeIngredients" placeholder="Ingredient 1"></textarea>
				</div>
			</div>

			<div >
				<label for="instructions">Instructions:</label>
				<p >Use the '|' (vertical bar) key to separate each instruction</p>
				<div>
					<textarea  type="text" id="instructionList" name="recipeInstructions" placeholder="Step 1"></textarea>
				</div>
			</div>

			<input type="hidden" name="imageBase64" id="imageBase64" />
			<button type="submit" value="Submit" name="submit">Add Recipe</button>
		</form>
	</div>

<body>
</html>
