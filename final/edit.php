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
		echo "<div class ='ye'>ID in database: ".$id."<br>";
		echo "Recipe Title: ".$row['recipeTitle']."<br>";
		echo "Ingredients: ".$row['recipeIngredients']."<br>";
		echo "Instructions: ".$row['recipeInstructions'."<br>"];
		echo "Category: ".$row['recipeCategory']."</div><br>";

		?>
		<form method="post" id="addRecipe" action="https://izzyheal.com/idm232/idm232-iah33/final/delete.php?id=<?php echo $id ?>" >
		<div class="ye">
		<button type="submit">Delete</button>
   </div>
		</form>
		<h2>Edit Recipe</h2>
		<form method="post" id="addRecipe" action="https://izzyheal.com/idm232/idm232-iah33/final/update.php?id=<?php echo $id ?>" >
			
			<label for="title">Title:</label>
			<input class = 'nop' type="text"  name="recipeTitle" value="<?php echo $row['recipeTitle'];?>"></input>
<br>
			<label for="imageFile">Add File</label>
			<input type="file" id="imageFile" name="recipeImage" onchange="updateBase64()"> 

			<div>
				<label for="ingredients">Ingredients:</label>
				<p >Edit your ingredients</p>
				<div class="ye">
				<textarea name="recipeIngredients"><?php echo $row['recipeIngredients']; ?> </textarea>
				</div>
			</div>
			
			<div >
				<label for="instructions">Instructions:</label>
				<p >Edit your instructions.</p>
				<div class = 'ye'>
				<textarea  name="recipeInstructions"><?php echo $row['recipeInstructions']; ?> </textarea>
				</div>
			</div>
			
			<div>
				<label for="category">Category:</label>
				<p >Enter category of either breakfast, lunch, or dinner with no capital letters</p>
				<div class='ye'>
				<input class = 'nop' type="text"  name="recipeCategory" value="<?php echo $row['recipeCategory'];?>"></input>
				</div>
			</div>
			<input type="hidden" name="imageBase64" id="imageBase64" />
			<div class='ye'>
			<button type="submit" value="Submit" name="submit">Done Editing!</button>
			<div>
		</form>

	</div>

</div>

</body>

</html>
