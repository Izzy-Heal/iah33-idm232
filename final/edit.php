<?php
$page_title = 'Edit';

include_once 'adminHeader.php';

	//$cnt = $_GET['id'];

    //$query = "SELECT * FROM info WHERE id=" . $cnt;
    //$result = mysqli_query($my_connection, $query);

	//if ($result && $result->num_rows > 0) {
      //  $row = mysqli_fetch_array($result);
	//}

    //$db_results = mysqli_query($my_connection, $sql);

   //if ($db_results && $db_results->num_rows > 0) {
       // redirectTo('all.php?success=');
   // } else {
        //redirectTo('all.php?id=' . $id . '&error=' . mysqli_error($con));
    //}
 

?>

<div>
	<div>
		<h2>Current Info</h2>
		<?php 
		$id = $_GET['id'];
		
		$query = "SELECT * FROM info WHERE id=" . $id;
		$result = mysqli_query($my_connection, $query);
		$row = mysqli_fetch_array($result);
		echo "ID in database: ".$id."<br>";
		echo "Recipe Title: ".$row['recipeTitle']."<br>";
		echo "Ingredients: ".$row['recipeIngredients']."<br>";
		echo "Instructions: ".$row['recipeInstructions'."<br>"];
		echo "Category: ".$row['recipeCategory']."<br>";

		?>
		<form method="post" id="addRecipe" action="/delete.php?id=<?php echo $id ?>" >
		<button type="submit">Delete</button>
		</form>
		<h2>Edit Recipe</h2>
		<form method="post" id="addRecipe" action="/update.php?id=<?php echo $id ?>" >
			
			<label for="title">Title:</label>
			<input type="text"  name="recipeTitle" value="<?php echo $row['recipeTitle'];?>"></input>
<br>
			<label for="imageFile">Add File</label>
			<input type="file" id="imageFile" name="recipeImage" onchange="updateBase64()"> 

			<div>
				<label for="ingredients">Ingredients:</label>
				<p >Use the '|' (vertical bar) key to separate each ingredient</p>
				<div>
				<textarea name="recipeIngredients"><?php echo $row['recipeIngredients']; ?> </textarea>
				</div>
			</div>
			
			<div >
				<label for="instructions">Instructions:</label>
				<p >Use the '|' (vertical bar) key to separate each instruction</p>
				<div>
				<textarea name="recipeInstructions"><?php echo $row['recipeInstructions']; ?> </textarea>
				</div>
			</div>
			
			<div>
				<label for="category">Category:</label>
				<p >Enter category of either breakfast, lunch, or dinner with no capital letters</p>
				<div>
				<input type="text"  name="recipeCategory" value="<?php echo $row['recipeCategory'];?>"></input>
				</div>
			</div>
			<input type="hidden" name="imageBase64" id="imageBase64" />
			<button type="submit" value="Submit" name="submit">Done Editing!</button>
		</form>

	</div>

</div>

</body>

</html>
