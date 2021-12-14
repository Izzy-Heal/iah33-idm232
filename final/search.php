</head>
<?php
    include 'adminHeader.php';
  
    $key = $_GET['keyword'];
   //  echo $key; //for debug
    
    $query = 'SELECT * ';
    $query .= 'FROM info ';
    $query .= ' WHERE ';
    $query .= "recipeTitle LIKE '%" . $key . "%'";
    $query .= "OR recipeIngredients LIKE '%" . $key . "%' ";
    $query .= "OR recipeInstructions LIKE '%" . $key . "%' ";
    
    //$query .= "WHERE `recipeTitle` = $key";
  
    $result = mysqli_query($my_connection, $query);
 
    echo "<p>Number of items displayed: ". $result->num_rows . "<br>";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc() ) {
        echo "Name: " . $row["recipeTitle"]. "<a href=/recipe-detail.php?id=".$id.">View Recipe</a></p><br>";
    } }
  
    


?>

<body>
        
        