<?php
$page_title = 'All-Recipes';

include_once 'adminHeader.php';


$sql = 'SELECT id, recipeTitle ';
$sql .= 'FROM recipe';
$db_results = mysqli_query($con, $sql);


?>

<html>

<body>
    <div >
        <div>
            <h2>All Recipes</h2>
        </div>
        <div>
            <?php
                include 'rec-preview.php';
            ?>
            
        </div>
    </div>
</body>

</html>