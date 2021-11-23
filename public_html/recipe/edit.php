<?php
$page_title = 'Edit Service';
include_once $_SERVER['DOCUMENT_ROOT'] . '/_global/header.php';

if (isset($_POST['update'])) {
    //  Parse Data
    $first_name = mysqli_real_escape_string($db_connection, $_POST['recipename']);
    $last_name = mysqli_real_escape_string($db_connection, $_POST['last_name']);
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $phone = mysqli_real_escape_string($db_connection, $_POST['phone']);
    $role = mysqli_real_escape_string($db_connection, $_POST['role']);

    // Build Query
    $query = $mysqli->query("SELECT * FROM recipei");
    $query .= 'SET ';
    $query .= "recipename = '{$recipename}', ";
    $query .= "step1 = '{$step1}', ";
    $query .= "step2 = '{$step2}', ";
    $query .= "step3 = '{$step3}', ";
    $query .= "step4 = '{$step4}', ";
    $query .= "step5 = '{$step5}' ";
    $query .= "step6 = {$step6}";
    $query .= "step7 = {$step7}";
    $query .= "step8 = {$step8}";

    // Execute Query
    $db_results = mysqli_query($db_connection, $query);

    if ($db_results && $db_results->num_rows > 0) {
        // Success
        redirectTo('/');
    } else {
        // Error
        redirectTo('/recipe/edit.php?id=' . $user_id . '&error=' . mysqli_error($db_connection));
    }
} elseif (isset($_GET['recipename'])) {
    $recipename = $_GET['recipename'];
    // Build Query
    $query .= 'SELECT * ';
    $query .= 'FROM recipename ';
    $query .= 'WHERE id=' . $recipename;

    $db_results = mysqli_query($db_connection, $query);
    if ($db_results) {
        $recipename = $row = mysqli_fetch_assoc($db_results);
    } else {
        // Redirect user if ID does not have a match in the DB
        redirectTo('/admin/users?error=' . mysqli_error($db_connection));
    }
} else {
    // Redirect user if no ID is passed in URL
    redirectTo('/admin/users');
}
?>
<div class="container">
  <h1>Edit Recipe</h1>
  <form action="" method="POST">

    <label for="">Recipe Title</label>
    <input type="text"
      value="<?php echo $recipei['recipename']; ?>"
      name="recipename">

    <label for="">Step 1</label>
    <input type="text"
      value="<?php echo $recipei['step1']; ?>"
      name="step1">


    <label for="">Step 2</label>
    <input type="text"
      value="<?php echo $recipei['step2']; ?>"
      name="step2">

    <label for="">Step 3</label>
    <input type="text"
      value="<?php echo $recipei['step3']; ?>"
      name="step3">

      <label for="">Step 4</label>
    <input type="text"
      value="<?php echo $recipei['step4']; ?>"
      name="step4">
      
      <label for="">Step 5</label>
    <input type="text"
      value="<?php echo $recipei['step5']; ?>"
      name="step5">

      <label for="">Step 6</label>
    <input type="text"
      value="<?php echo $recipei['step6']; ?>"
      name="step6">

      <label for="">Step 7</label>
    <input type="text"
      value="<?php echo $recipei['step7']; ?>"
      name="step7">

      <label for="">Step 8</label>
    <input type="text"
      value="<?php echo $recipei['step8']; ?>"
      name="step8">
 



    <input class="btn btn-primary" name="update" type="submit" value="Update">

  </form>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/../_global/footer.php';
