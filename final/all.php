<?php
$page_title = 'All-Recipes';
include_once 'adminHeader.php';

?>



        <div>
            <h2>All Recipes</h2>
        </div>
        <div>
      <?php  
$query = "SELECT * FROM info";
$result = mysqli_query($my_connection, $query);
$nr = 0;

if ($result && $result->num_rows > 0) {
    echo "<p>Number of items displayed: ". $result->num_rows . "<br>";
    while($row = $result->fetch_assoc() ) {
        $nr++;
        $chngrow = $chngrow + 1;
        $id = $row["id"];
        echo "<p>id: " . $row["id"]. " - Name: " . $row["recipeTitle"]. "<a href=https://izzyheal.com/idm232/idm232-iah33/final/edit.php?id=".$id.">Edit</a></p><br>"; 
    }
   
} else {
    echo '<p>No recipes to see here :(';
}
?>
  
        </div>
    </div>
</body>

</html>