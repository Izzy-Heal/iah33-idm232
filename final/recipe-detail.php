<?php
$page_title = 'Detail';

include_once 'adminHeader.php';
$id = $_GET['id'];
$query = "SELECT * FROM info WHERE id=" . $id;
		$result = mysqli_query($my_connection, $query);
		$row = mysqli_fetch_array($result);

?>
<html>
 <?php  
 
  
 echo "<h1>".$row[recipeTitle]."</h1><br>";
 if ($row[recipeCategory] == 'breakfast' || $row[recipeCategory] =='Breakfast'){
     echo "<img src = 'breakfastImg.png' >";
 }
elseif($row[recipeCategory] == 'lunch' || $row[recipeCategory] =='Lunch'){
    echo "<img src = 'lunchImg.jpg' >";
}
elseif($row[recipeCategory] == 'dinner' || $row[recipeCategory] =='Dinner'){
    echo "<img src = 'dinnerImg.jpg' >";
}

 echo "<h2>Ingredients</h2>";
 echo "<p>".$row[recipeIngredients]."<p>";
 echo "<h2>Instructions</h2>";
 echo "<p>".$row[recipeInstructions]."<p>";
 ?>
    

</body>

</html>