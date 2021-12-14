<?php
$page_title = 'All-Recipes';
include_once 'header.php';


//} else {
  //  echo '<p>There are currently no recipes in the database</p>';
?>

<html>
<body>
<a class='ye' href ="https://izzyheal.com/idm232/idm232-iah33/final/adminHome.php">Admin Pages</a>
        <div>
            <h2>Recipes</h2>
        </div>
        <h3>Categories:</h3>
        <div class = "ye">
        <a class = 'nop' href= 'https://izzyheal.com/idm232/idm232-iah33/final/category.php?category'>All</a>
        <a  href= 'https://izzyheal.com/idm232/idm232-iah33/final/category.php?category=breakfast' >Breakfast</a>
        <a  href= 'https://izzyheal.com/idm232/idm232-iah33/final/category.php?category=lunch' >Lunch</a>
        <a  href= 'https://izzyheal.com/idm232/idm232-iah33/final/category.php?category=dinner' >Dinner</a>
</div>
      <?php  
$query = "SELECT * FROM info";
$result = mysqli_query($my_connection, $query);
$nr = 0;
$cat = $_GET['category'];


if ($cat == 'breakfast'){
    while($row = $result->fetch_assoc() ) {
        if($row["recipeCategory"] == $cat){
        $nr++;
        $chngrow = $chngrow + 1;
        $id = $row["id"];
        echo "<p><b>Recipe: </b>" . $row["recipeTitle"]. " <a href=https://izzyheal.com/idm232/idm232-iah33/final/recipe-detail.php?id=".$id.">View Recipe</a></p><br>";
    }}
}

elseif ($cat == 'lunch'){
    while($row = $result->fetch_assoc() ) {
        if($row["recipeCategory"] == $cat){
        $nr++;
        $chngrow = $chngrow + 1;
        $id = $row["id"];
        echo "<p><b>Recipe: </b>" . $row["recipeTitle"]. " <a href=https://izzyheal.com/idm232/idm232-iah33/final/recipe-detail.php?id=".$id.">View Recipe</a></p><br>";
    }}
}

elseif ($cat == 'dinner'){
    while($row = $result->fetch_assoc() ) {
        if($row["recipeCategory"] == $cat){
        $nr++;
        $chngrow = $chngrow + 1;
        $id = $row["id"];
        echo "<p><b>Recipe: </b>" . $row["recipeTitle"]. " <a href=https://izzyheal.com/idm232/idm232-iah33/final/recipe-detail.php?id=".$id.">View Recipe</a></p><br>";
    }}
}
else {
    while($row = $result->fetch_assoc()) {
        $nr++;
        $chngrow = $chngrow + 1;
        $id = $row["id"];
        echo "<p><b>Recipe: </b>" . $row["recipeTitle"]. " <a href=https://izzyheal.com/idm232/idm232-iah33/final/recipe-detail.php?id=".$id.">View Recipe</a></p><br>";
    }
}


?>
  
        </div>
    </div>
</body>

</html>