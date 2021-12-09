<?php
$recipe_id = $_GET['id'];

$sql = mysqli_query($con, "SELECT * FROM recipeInfo WHERE id='$recipeInfo_id'");

while ($row = mysqli_fetch_assoc($sql)) {
    $recipeIngredients = $row['recipeIngredients'];
    $recipeInstructions = $row['recipeInstructions'];
    $recipeIngredientsExplode = explode("|", htmlspecialchars_decode($row['recipeIngredients']));
    $recipeInstructionsExplode = explode("|", htmlspecialchars_decode($row['recipeInstructions']));
?>
    <div >
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
<?php
}
?>