<?php
include_once $_SERVER['DOCUMENT_ROOT'] .'/_global/header.php';
?>
<div class="container">
  <h1>Hello! welcome to my recipe site.</h1>
  <a href="<?php echo siteUrl('/recipe/add.php');?>" class="btn btn-primary">Add your recipe to the site!</a>
  <a href="<?php echo siteUrl('/recipe/view.php');?>" class="btn btn-primary">View all Recipes</a>
  <a href="<?php echo siteUrl('/recipe/edit.php');?>" class="btn btn-primary">Edit</a>
</div>
<div class="container">
  <?php
  $query = "SELECT * FROM recipei";
  echo "<b> <center>All Recipes</center> </b> <br> <br>";
  if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $recipename = $row["col1"];
        $step1 = $row["col2"];
        $step2 = $row["col3"];
        $step3 = $row["col4"];
        $step4 = $row["col5"];

        echo '<b>'.$field1name.$field2name.'</b><br />';
        echo $field5name.'<br />';
        echo $field5name.'<br />';
        echo $field5name;
    }

/*freeresultset*/
$result->free();
}
include $_SERVER['DOCUMENT_ROOT'] .'/_global/footer.php' 
?>

</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] .'/_global/footer.php'   ?>
