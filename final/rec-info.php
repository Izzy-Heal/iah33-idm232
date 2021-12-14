<?php
$query = "SELECT * FROM info";
$db_results = mysqli_query($my_connection, $query);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["recipeTitle"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();


//while ($row = mysqli_fetch_assoc($sql)) {
  //  $recipeIngredients = $row['recipeIngredients'];
    //$recipeInstructions = $row['recipeInstructions'];
 //   $recipeIngredientsExplode = explode("|", htmlspecialchars_decode($row['recipeIngredients']));
   // $recipeInstructionsExplode = explode("|", htmlspecialchars_decode($row['recipeInstructions']));

?>
    <-- <div>
        <div >
            <h2 ><?php echo $row['recipeTitle']; ?></h2>
            
        </div>
        <div >
            <li style='background: url("<?php echo $row['recipeImage'];?>"); background-size: cover; list-style-type: none; ")'></li>
        </div>
    </div>
    <div>
        <div >
            <h4 >INGREDIENTS</h4>
            <ul >
                <?php foreach($recipeIngredientsExplode as $value){
                    echo "<li>$value</li>";}; ?>
            </ul>
        </div>
        <div >
            <h4 >INSTRUCTIONS</h4>
            <ol >
                <?php foreach ($recipeInstructionsExplode as $value) {
                echo "<li>$value</li>";}; ?>
            </ol>
        </div>
    </div>
